<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "diagnosa_corona".
 *
 * @property string $no_rkm_medis
 * @property string $kode_icd
 * @property string|null $nama_penyakit
 * @property string|null $status
 *
 * @property PasienCorona $noRkmMedis
 */
class DiagnosaCorona extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'diagnosa_corona';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis', 'kode_icd'], 'required'],
            [['status'], 'string'],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['kode_icd'], 'string', 'max' => 10],
            [['nama_penyakit'], 'string', 'max' => 200],
            [['no_rkm_medis', 'kode_icd'], 'unique', 'targetAttribute' => ['no_rkm_medis', 'kode_icd']],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => PasienCorona::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rkm_medis' => 'No Rkm Medis',
            'kode_icd' => 'Kode Icd',
            'nama_penyakit' => 'Nama Penyakit',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[NoRkmMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRkmMedis()
    {
        return $this->hasOne(PasienCorona::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }
}
