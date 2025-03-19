<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "perusahaan_pasien".
 *
 * @property string $kode_perusahaan
 * @property string|null $nama_perusahaan
 * @property string|null $alamat
 * @property string|null $kota
 * @property string|null $no_telp
 *
 * @property BookingMcuPerusahaanPasienBaru[] $bookingMcuPerusahaanPasienBarus
 * @property BookingMcuPerusahaan[] $bookingMcuPerusahaans
 * @property Pasien[] $pasiens
 * @property PasswordPerusahaanPasien $passwordPerusahaanPasien
 */
class PerusahaanPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perusahaan_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_perusahaan'], 'required'],
            [['kode_perusahaan'], 'string', 'max' => 8],
            [['nama_perusahaan'], 'string', 'max' => 70],
            [['alamat'], 'string', 'max' => 100],
            [['kota'], 'string', 'max' => 40],
            [['no_telp'], 'string', 'max' => 27],
            [['kode_perusahaan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_perusahaan' => 'Kode Perusahaan',
            'nama_perusahaan' => 'Nama Perusahaan',
            'alamat' => 'Alamat',
            'kota' => 'Kota',
            'no_telp' => 'No Telp',
        ];
    }

    /**
     * Gets query for [[BookingMcuPerusahaanPasienBarus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookingMcuPerusahaanPasienBarus()
    {
        return $this->hasMany(BookingMcuPerusahaanPasienBaru::class, ['perusahaan_pasien' => 'kode_perusahaan']);
    }

    /**
     * Gets query for [[BookingMcuPerusahaans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookingMcuPerusahaans()
    {
        return $this->hasMany(BookingMcuPerusahaan::class, ['kode_perusahaan' => 'kode_perusahaan']);
    }

    /**
     * Gets query for [[Pasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasiens()
    {
        return $this->hasMany(Pasien::class, ['perusahaan_pasien' => 'kode_perusahaan']);
    }

    /**
     * Gets query for [[PasswordPerusahaanPasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasswordPerusahaanPasien()
    {
        return $this->hasOne(PasswordPerusahaanPasien::class, ['kode_perusahaan' => 'kode_perusahaan']);
    }
}
