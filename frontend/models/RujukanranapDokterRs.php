<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rujukanranap_dokter_rs".
 *
 * @property string $tanggal
 * @property string $kd_dokter
 * @property string $no_rkm_medis
 * @property string $kd_kamar
 * @property float $jasarujuk
 *
 * @property Dokter $kdDokter
 * @property Kamar $kdKamar
 * @property Pasien $noRkmMedis
 */
class RujukanranapDokterRs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rujukanranap_dokter_rs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'kd_dokter', 'no_rkm_medis', 'kd_kamar', 'jasarujuk'], 'required'],
            [['tanggal'], 'safe'],
            [['jasarujuk'], 'number'],
            [['kd_dokter'], 'string', 'max' => 20],
            [['no_rkm_medis', 'kd_kamar'], 'string', 'max' => 15],
            [['tanggal', 'kd_dokter', 'no_rkm_medis', 'kd_kamar'], 'unique', 'targetAttribute' => ['tanggal', 'kd_dokter', 'no_rkm_medis', 'kd_kamar']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
            [['kd_kamar'], 'exist', 'skipOnError' => true, 'targetClass' => Kamar::class, 'targetAttribute' => ['kd_kamar' => 'kd_kamar']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tanggal' => 'Tanggal',
            'kd_dokter' => 'Kd Dokter',
            'no_rkm_medis' => 'No Rkm Medis',
            'kd_kamar' => 'Kd Kamar',
            'jasarujuk' => 'Jasarujuk',
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
     * Gets query for [[KdKamar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdKamar()
    {
        return $this->hasOne(Kamar::class, ['kd_kamar' => 'kd_kamar']);
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
