<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "aplicare_ketersediaan_kamar".
 *
 * @property string $kode_kelas_aplicare
 * @property string $kd_bangsal
 * @property string $kelas
 * @property int|null $kapasitas
 * @property int|null $tersedia
 * @property int|null $tersediapria
 * @property int|null $tersediawanita
 * @property int|null $tersediapriawanita
 *
 * @property Bangsal $kdBangsal
 */
class AplicareKetersediaanKamar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aplicare_ketersediaan_kamar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_kelas_aplicare', 'kd_bangsal', 'kelas'], 'required'],
            [['kelas'], 'string'],
            [['kapasitas', 'tersedia', 'tersediapria', 'tersediawanita', 'tersediapriawanita'], 'integer'],
            [['kode_kelas_aplicare'], 'string', 'max' => 15],
            [['kd_bangsal'], 'string', 'max' => 5],
            [['kode_kelas_aplicare', 'kd_bangsal', 'kelas'], 'unique', 'targetAttribute' => ['kode_kelas_aplicare', 'kd_bangsal', 'kelas']],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_kelas_aplicare' => 'Kode Kelas Aplicare',
            'kd_bangsal' => 'Kd Bangsal',
            'kelas' => 'Kelas',
            'kapasitas' => 'Kapasitas',
            'tersedia' => 'Tersedia',
            'tersediapria' => 'Tersediapria',
            'tersediawanita' => 'Tersediawanita',
            'tersediapriawanita' => 'Tersediapriawanita',
        ];
    }

    /**
     * Gets query for [[KdBangsal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdBangsal()
    {
        return $this->hasOne(Bangsal::class, ['kd_bangsal' => 'kd_bangsal']);
    }
}
