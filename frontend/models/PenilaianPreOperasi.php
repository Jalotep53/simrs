<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_pre_operasi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kd_dokter
 * @property string|null $ringkasan_klinik
 * @property string|null $pemeriksaan_fisik
 * @property string|null $pemeriksaan_diagnostik
 * @property string|null $diagnosa_pre_operasi
 * @property string|null $rencana_tindakan_bedah
 * @property string|null $hal_hal_yang_perludi_persiapkan
 * @property string|null $terapi_pre_operasi
 *
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class PenilaianPreOperasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_pre_operasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter'], 'required'],
            [['tanggal'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['ringkasan_klinik', 'pemeriksaan_fisik', 'pemeriksaan_diagnostik', 'diagnosa_pre_operasi', 'rencana_tindakan_bedah', 'hal_hal_yang_perludi_persiapkan', 'terapi_pre_operasi'], 'string', 'max' => 500],
            [['no_rawat', 'tanggal'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tanggal' => 'Tanggal',
            'kd_dokter' => 'Kd Dokter',
            'ringkasan_klinik' => 'Ringkasan Klinik',
            'pemeriksaan_fisik' => 'Pemeriksaan Fisik',
            'pemeriksaan_diagnostik' => 'Pemeriksaan Diagnostik',
            'diagnosa_pre_operasi' => 'Diagnosa Pre Operasi',
            'rencana_tindakan_bedah' => 'Rencana Tindakan Bedah',
            'hal_hal_yang_perludi_persiapkan' => 'Hal Hal Yang Perludi Persiapkan',
            'terapi_pre_operasi' => 'Terapi Pre Operasi',
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
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
