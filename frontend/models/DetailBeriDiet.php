<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detail_beri_diet".
 *
 * @property string $no_rawat
 * @property string $kd_kamar
 * @property string $tanggal
 * @property string $waktu
 * @property string $kd_diet
 *
 * @property Diet $kdDiet
 * @property Kamar $kdKamar
 * @property RegPeriksa $noRawat
 * @property JamDietPasien $waktu0
 */
class DetailBeriDiet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_beri_diet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kd_kamar', 'tanggal', 'waktu', 'kd_diet'], 'required'],
            [['tanggal'], 'safe'],
            [['waktu'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_kamar'], 'string', 'max' => 15],
            [['kd_diet'], 'string', 'max' => 3],
            [['no_rawat', 'kd_kamar', 'tanggal', 'waktu', 'kd_diet'], 'unique', 'targetAttribute' => ['no_rawat', 'kd_kamar', 'tanggal', 'waktu', 'kd_diet']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_kamar'], 'exist', 'skipOnError' => true, 'targetClass' => Kamar::class, 'targetAttribute' => ['kd_kamar' => 'kd_kamar']],
            [['kd_diet'], 'exist', 'skipOnError' => true, 'targetClass' => Diet::class, 'targetAttribute' => ['kd_diet' => 'kd_diet']],
            [['waktu'], 'exist', 'skipOnError' => true, 'targetClass' => JamDietPasien::class, 'targetAttribute' => ['waktu' => 'waktu']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'kd_kamar' => 'Kd Kamar',
            'tanggal' => 'Tanggal',
            'waktu' => 'Waktu',
            'kd_diet' => 'Kd Diet',
        ];
    }

    /**
     * Gets query for [[KdDiet]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDiet()
    {
        return $this->hasOne(Diet::class, ['kd_diet' => 'kd_diet']);
    }

    /**
     * Gets query for [[KdKamar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdKamar()
    {
        return $this->hasOne(Kamar::class, ['kd_kamar' => 'kd_kamar']);
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

    /**
     * Gets query for [[Waktu0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWaktu0()
    {
        return $this->hasOne(JamDietPasien::class, ['waktu' => 'waktu']);
    }
}
