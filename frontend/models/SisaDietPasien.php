<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sisa_diet_pasien".
 *
 * @property string $no_rawat
 * @property string $kd_kamar
 * @property string $tanggal
 * @property string $waktu
 * @property int|null $karbohidrat
 * @property int|null $hewani
 * @property int|null $nabati
 * @property int|null $sayur
 * @property int|null $buah
 *
 * @property Kamar $kdKamar
 * @property RegPeriksa $noRawat
 * @property JamDietPasien $waktu0
 */
class SisaDietPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sisa_diet_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kd_kamar', 'tanggal', 'waktu'], 'required'],
            [['tanggal'], 'safe'],
            [['waktu'], 'string'],
            [['karbohidrat', 'hewani', 'nabati', 'sayur', 'buah'], 'integer'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_kamar'], 'string', 'max' => 15],
            [['no_rawat', 'kd_kamar', 'tanggal', 'waktu'], 'unique', 'targetAttribute' => ['no_rawat', 'kd_kamar', 'tanggal', 'waktu']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_kamar'], 'exist', 'skipOnError' => true, 'targetClass' => Kamar::class, 'targetAttribute' => ['kd_kamar' => 'kd_kamar']],
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
            'karbohidrat' => 'Karbohidrat',
            'hewani' => 'Hewani',
            'nabati' => 'Nabati',
            'sayur' => 'Sayur',
            'buah' => 'Buah',
        ];
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
