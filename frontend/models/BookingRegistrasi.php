<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "booking_registrasi".
 *
 * @property string|null $tanggal_booking
 * @property string|null $jam_booking
 * @property string $no_rkm_medis
 * @property string $tanggal_periksa
 * @property string|null $kd_dokter
 * @property string|null $kd_poli
 * @property string|null $no_reg
 * @property string|null $kd_pj
 * @property int|null $limit_reg
 * @property string|null $waktu_kunjungan
 * @property string|null $status
 *
 * @property Dokter $kdDokter
 * @property Penjab $kdPj
 * @property Poliklinik $kdPoli
 * @property Pasien $noRkmMedis
 */
class BookingRegistrasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'booking_registrasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal_booking', 'jam_booking', 'tanggal_periksa', 'waktu_kunjungan'], 'safe'],
            [['no_rkm_medis', 'tanggal_periksa'], 'required'],
            [['limit_reg'], 'integer'],
            [['status'], 'string'],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['kd_dokter'], 'string', 'max' => 20],
            [['kd_poli'], 'string', 'max' => 5],
            [['no_reg'], 'string', 'max' => 8],
            [['kd_pj'], 'string', 'max' => 3],
            [['no_rkm_medis', 'tanggal_periksa'], 'unique', 'targetAttribute' => ['no_rkm_medis', 'tanggal_periksa']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
            [['kd_poli'], 'exist', 'skipOnError' => true, 'targetClass' => Poliklinik::class, 'targetAttribute' => ['kd_poli' => 'kd_poli']],
            [['kd_pj'], 'exist', 'skipOnError' => true, 'targetClass' => Penjab::class, 'targetAttribute' => ['kd_pj' => 'kd_pj']],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tanggal_booking' => 'Tanggal Booking',
            'jam_booking' => 'Jam Booking',
            'no_rkm_medis' => 'No Rkm Medis',
            'tanggal_periksa' => 'Tanggal Periksa',
            'kd_dokter' => 'Kd Dokter',
            'kd_poli' => 'Kd Poli',
            'no_reg' => 'No Reg',
            'kd_pj' => 'Kd Pj',
            'limit_reg' => 'Limit Reg',
            'waktu_kunjungan' => 'Waktu Kunjungan',
            'status' => 'Status',
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
     * Gets query for [[KdPj]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPj()
    {
        return $this->hasOne(Penjab::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[KdPoli]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPoli()
    {
        return $this->hasOne(Poliklinik::class, ['kd_poli' => 'kd_poli']);
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
