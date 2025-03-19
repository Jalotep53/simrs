<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "resiko_kerja".
 *
 * @property string $kode_resiko
 * @property string|null $nama_resiko
 * @property int|null $indek
 *
 * @property Pegawai[] $pegawais
 */
class ResikoKerja extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resiko_kerja';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_resiko'], 'required'],
            [['indek'], 'integer'],
            [['kode_resiko'], 'string', 'max' => 3],
            [['nama_resiko'], 'string', 'max' => 100],
            [['kode_resiko'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_resiko' => 'Kode Resiko',
            'nama_resiko' => 'Nama Resiko',
            'indek' => 'Indek',
        ];
    }

    /**
     * Gets query for [[Pegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais()
    {
        return $this->hasMany(Pegawai::class, ['kode_resiko' => 'kode_resiko']);
    }
}
