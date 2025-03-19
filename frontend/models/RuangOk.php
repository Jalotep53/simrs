<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ruang_ok".
 *
 * @property string $kd_ruang_ok
 * @property string|null $nm_ruang_ok
 *
 * @property BookingOperasi[] $bookingOperasis
 */
class RuangOk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ruang_ok';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_ruang_ok'], 'required'],
            [['kd_ruang_ok'], 'string', 'max' => 3],
            [['nm_ruang_ok'], 'string', 'max' => 50],
            [['kd_ruang_ok'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_ruang_ok' => 'Kd Ruang Ok',
            'nm_ruang_ok' => 'Nm Ruang Ok',
        ];
    }

    /**
     * Gets query for [[BookingOperasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookingOperasis()
    {
        return $this->hasMany(BookingOperasi::class, ['kd_ruang_ok' => 'kd_ruang_ok']);
    }
}
