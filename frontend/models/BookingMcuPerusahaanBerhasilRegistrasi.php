<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "booking_mcu_perusahaan_berhasil_registrasi".
 *
 * @property string $no_mcu
 * @property string $no_rawat
 *
 * @property BookingMcuPerusahaan $noMcu
 * @property RegPeriksa $noRawat
 */
class BookingMcuPerusahaanBerhasilRegistrasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'booking_mcu_perusahaan_berhasil_registrasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_mcu', 'no_rawat'], 'required'],
            [['no_mcu'], 'string', 'max' => 15],
            [['no_rawat'], 'string', 'max' => 17],
            [['no_mcu', 'no_rawat'], 'unique', 'targetAttribute' => ['no_mcu', 'no_rawat']],
            [['no_mcu'], 'exist', 'skipOnError' => true, 'targetClass' => BookingMcuPerusahaan::class, 'targetAttribute' => ['no_mcu' => 'no_mcu']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_mcu' => 'No Mcu',
            'no_rawat' => 'No Rawat',
        ];
    }

    /**
     * Gets query for [[NoMcu]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoMcu()
    {
        return $this->hasOne(BookingMcuPerusahaan::class, ['no_mcu' => 'no_mcu']);
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
