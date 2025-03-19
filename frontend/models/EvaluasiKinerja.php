<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "evaluasi_kinerja".
 *
 * @property string $kode_evaluasi
 * @property string|null $nama_evaluasi
 * @property int|null $indek
 *
 * @property EvaluasiKinerjaPegawai[] $evaluasiKinerjaPegawais
 */
class EvaluasiKinerja extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'evaluasi_kinerja';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_evaluasi'], 'required'],
            [['indek'], 'integer'],
            [['kode_evaluasi'], 'string', 'max' => 3],
            [['nama_evaluasi'], 'string', 'max' => 200],
            [['kode_evaluasi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_evaluasi' => 'Kode Evaluasi',
            'nama_evaluasi' => 'Nama Evaluasi',
            'indek' => 'Indek',
        ];
    }

    /**
     * Gets query for [[EvaluasiKinerjaPegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEvaluasiKinerjaPegawais()
    {
        return $this->hasMany(EvaluasiKinerjaPegawai::class, ['kode_evaluasi' => 'kode_evaluasi']);
    }
}
