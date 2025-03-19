<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "booking_periksa".
 *
 * @property string $no_booking
 * @property string|null $tanggal
 * @property string|null $nama
 * @property string|null $alamat
 * @property string|null $no_telp
 * @property string|null $email
 * @property string|null $kd_poli
 * @property string|null $tambahan_pesan
 * @property string $status
 * @property string $tanggal_booking
 *
 * @property BookingPeriksaBalasan $bookingPeriksaBalasan
 * @property BookingPeriksaDiterima $bookingPeriksaDiterima
 * @property Poliklinik $kdPoli
 */
class BookingPeriksa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'booking_periksa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_booking', 'status', 'tanggal_booking'], 'required'],
            [['tanggal', 'tanggal_booking'], 'safe'],
            [['status'], 'string'],
            [['no_booking'], 'string', 'max' => 17],
            [['nama', 'no_telp'], 'string', 'max' => 40],
            [['alamat'], 'string', 'max' => 200],
            [['email'], 'string', 'max' => 50],
            [['kd_poli'], 'string', 'max' => 5],
            [['tambahan_pesan'], 'string', 'max' => 400],
            [['tanggal', 'no_telp'], 'unique', 'targetAttribute' => ['tanggal', 'no_telp']],
            [['no_booking'], 'unique'],
            [['kd_poli'], 'exist', 'skipOnError' => true, 'targetClass' => Poliklinik::class, 'targetAttribute' => ['kd_poli' => 'kd_poli']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_booking' => 'No Booking',
            'tanggal' => 'Tanggal',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'no_telp' => 'No Telp',
            'email' => 'Email',
            'kd_poli' => 'Kd Poli',
            'tambahan_pesan' => 'Tambahan Pesan',
            'status' => 'Status',
            'tanggal_booking' => 'Tanggal Booking',
        ];
    }

    /**
     * Gets query for [[BookingPeriksaBalasan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookingPeriksaBalasan()
    {
        return $this->hasOne(BookingPeriksaBalasan::class, ['no_booking' => 'no_booking']);
    }

    /**
     * Gets query for [[BookingPeriksaDiterima]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookingPeriksaDiterima()
    {
        return $this->hasOne(BookingPeriksaDiterima::class, ['no_booking' => 'no_booking']);
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
}
