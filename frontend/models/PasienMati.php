<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pasien_mati".
 *
 * @property string|null $tanggal
 * @property string|null $jam
 * @property string $no_rkm_medis
 * @property string|null $keterangan
 * @property string|null $temp_meninggal
 * @property string|null $icd1
 * @property string|null $icd2
 * @property string|null $icd3
 * @property string|null $icd4
 * @property string $kd_dokter
 *
 * @property Dokter $kdDokter
 * @property Pasien $noRkmMedis
 */
class PasienMati extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien_mati';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'jam'], 'safe'],
            [['no_rkm_medis', 'kd_dokter'], 'required'],
            [['temp_meninggal'], 'string'],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['keterangan'], 'string', 'max' => 100],
            [['icd1', 'icd2', 'icd3', 'icd4', 'kd_dokter'], 'string', 'max' => 20],
            [['no_rkm_medis'], 'unique'],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tanggal' => 'Tanggal',
            'jam' => 'Jam',
            'no_rkm_medis' => 'No Rkm Medis',
            'keterangan' => 'Keterangan',
            'temp_meninggal' => 'Temp Meninggal',
            'icd1' => 'Icd1',
            'icd2' => 'Icd2',
            'icd3' => 'Icd3',
            'icd4' => 'Icd4',
            'kd_dokter' => 'Kd Dokter',
        ];
    }

    /**
     * Gets query for [[KdDokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokter()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokter']);
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
