<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "konver_sat".
 *
 * @property float $nilai
 * @property string $kode_sat
 * @property float $nilai_konversi
 * @property string $sat_konversi
 *
 * @property Kodesatuan $kodeSat
 */
class KonverSat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'konver_sat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nilai', 'kode_sat', 'nilai_konversi', 'sat_konversi'], 'required'],
            [['nilai', 'nilai_konversi'], 'number'],
            [['kode_sat', 'sat_konversi'], 'string', 'max' => 4],
            [['nilai', 'kode_sat', 'nilai_konversi', 'sat_konversi'], 'unique', 'targetAttribute' => ['nilai', 'kode_sat', 'nilai_konversi', 'sat_konversi']],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nilai' => 'Nilai',
            'kode_sat' => 'Kode Sat',
            'nilai_konversi' => 'Nilai Konversi',
            'sat_konversi' => 'Sat Konversi',
        ];
    }

    /**
     * Gets query for [[KodeSat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSat()
    {
        return $this->hasOne(Kodesatuan::class, ['kode_sat' => 'kode_sat']);
    }
}
