<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pencapaian_kinerja".
 *
 * @property string $kode_pencapaian
 * @property string|null $nama_pencapaian
 * @property int|null $indek
 *
 * @property PencapaianKinerjaPegawai[] $pencapaianKinerjaPegawais
 */
class PencapaianKinerja extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pencapaian_kinerja';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_pencapaian'], 'required'],
            [['indek'], 'integer'],
            [['kode_pencapaian'], 'string', 'max' => 3],
            [['nama_pencapaian'], 'string', 'max' => 200],
            [['kode_pencapaian'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_pencapaian' => 'Kode Pencapaian',
            'nama_pencapaian' => 'Nama Pencapaian',
            'indek' => 'Indek',
        ];
    }

    /**
     * Gets query for [[PencapaianKinerjaPegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPencapaianKinerjaPegawais()
    {
        return $this->hasMany(PencapaianKinerjaPegawai::class, ['kode_pencapaian' => 'kode_pencapaian']);
    }
}
