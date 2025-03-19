<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "booking_periksa_diterima".
 *
 * @property string $no_booking
 * @property string|null $no_rkm_medis
 *
 * @property BookingPeriksa $noBooking
 * @property Pasien $noRkmMedis
 */
class BookingPeriksaDiterima extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'booking_periksa_diterima';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_booking'], 'required'],
            [['no_booking'], 'string', 'max' => 17],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['no_booking'], 'unique'],
            [['no_booking'], 'exist', 'skipOnError' => true, 'targetClass' => BookingPeriksa::class, 'targetAttribute' => ['no_booking' => 'no_booking']],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_booking' => 'No Booking',
            'no_rkm_medis' => 'No Rkm Medis',
        ];
    }

    /**
     * Gets query for [[NoBooking]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoBooking()
    {
        return $this->hasOne(BookingPeriksa::class, ['no_booking' => 'no_booking']);
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
