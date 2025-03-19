<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "booking_mcu_perusahaan".
 *
 * @property string|null $tanggal_booking
 * @property string|null $jam_booking
 * @property string $no_rkm_medis
 * @property string $tanggal_mcu
 * @property string $no_mcu
 * @property string|null $status
 * @property string $kode_perusahaan
 *
 * @property BookingMcuPerusahaanBerhasilRegistrasi[] $bookingMcuPerusahaanBerhasilRegistrasis
 * @property PerusahaanPasien $kodePerusahaan
 * @property RegPeriksa[] $noRawats
 * @property Pasien $noRkmMedis
 */
class BookingMcuPerusahaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'booking_mcu_perusahaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal_booking', 'jam_booking', 'tanggal_mcu'], 'safe'],
            [['no_rkm_medis', 'tanggal_mcu', 'no_mcu', 'kode_perusahaan'], 'required'],
            [['status'], 'string'],
            [['no_rkm_medis', 'no_mcu'], 'string', 'max' => 15],
            [['kode_perusahaan'], 'string', 'max' => 8],
            [['no_mcu'], 'unique'],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
            [['kode_perusahaan'], 'exist', 'skipOnError' => true, 'targetClass' => PerusahaanPasien::class, 'targetAttribute' => ['kode_perusahaan' => 'kode_perusahaan']],
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
            'tanggal_mcu' => 'Tanggal Mcu',
            'no_mcu' => 'No Mcu',
            'status' => 'Status',
            'kode_perusahaan' => 'Kode Perusahaan',
        ];
    }

    /**
     * Gets query for [[BookingMcuPerusahaanBerhasilRegistrasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookingMcuPerusahaanBerhasilRegistrasis()
    {
        return $this->hasMany(BookingMcuPerusahaanBerhasilRegistrasi::class, ['no_mcu' => 'no_mcu']);
    }

    /**
     * Gets query for [[KodePerusahaan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodePerusahaan()
    {
        return $this->hasOne(PerusahaanPasien::class, ['kode_perusahaan' => 'kode_perusahaan']);
    }

    /**
     * Gets query for [[NoRawats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawats()
    {
        return $this->hasMany(RegPeriksa::class, ['no_rawat' => 'no_rawat'])->viaTable('booking_mcu_perusahaan_berhasil_registrasi', ['no_mcu' => 'no_mcu']);
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
