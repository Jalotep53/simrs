<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "retensi_pasien".
 *
 * @property string|null $no_rkm_medis
 * @property string|null $terakhir_daftar
 * @property string|null $tgl_retensi
 * @property string|null $lokasi_pdf
 *
 * @property Pasien $noRkmMedis
 */
class RetensiPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'retensi_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['terakhir_daftar', 'tgl_retensi'], 'safe'],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['lokasi_pdf'], 'string', 'max' => 500],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rkm_medis' => 'No Rkm Medis',
            'terakhir_daftar' => 'Terakhir Daftar',
            'tgl_retensi' => 'Tgl Retensi',
            'lokasi_pdf' => 'Lokasi Pdf',
        ];
    }

    /**
     * Gets query for [[NoRkmMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRkmMedis()
    {
        return $this->hasOne(Pasien::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }
}
