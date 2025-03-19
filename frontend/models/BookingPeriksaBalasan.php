<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "booking_periksa_balasan".
 *
 * @property string $no_booking
 * @property string|null $balasan
 *
 * @property BookingPeriksa $noBooking
 */
class BookingPeriksaBalasan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'booking_periksa_balasan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_booking'], 'required'],
            [['no_booking'], 'string', 'max' => 17],
            [['balasan'], 'string', 'max' => 200],
            [['no_booking'], 'unique'],
            [['no_booking'], 'exist', 'skipOnError' => true, 'targetClass' => BookingPeriksa::class, 'targetAttribute' => ['no_booking' => 'no_booking']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_booking' => 'No Booking',
            'balasan' => 'Balasan',
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
}
