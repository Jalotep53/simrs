<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "siranap_ketersediaan_kamar".
 *
 * @property string $kode_ruang_siranap
 * @property string $kelas_ruang_siranap
 * @property string $kd_bangsal
 * @property string $kelas
 * @property int|null $kapasitas
 * @property int|null $tersedia
 * @property int|null $tersediapria
 * @property int|null $tersediawanita
 * @property int|null $menunggu
 *
 * @property Bangsal $kdBangsal
 */
class SiranapKetersediaanKamar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'siranap_ketersediaan_kamar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_ruang_siranap', 'kelas_ruang_siranap', 'kd_bangsal', 'kelas'], 'required'],
            [['kode_ruang_siranap', 'kelas_ruang_siranap', 'kelas'], 'string'],
            [['kapasitas', 'tersedia', 'tersediapria', 'tersediawanita', 'menunggu'], 'integer'],
            [['kd_bangsal'], 'string', 'max' => 5],
            [['kode_ruang_siranap', 'kelas_ruang_siranap', 'kd_bangsal', 'kelas'], 'unique', 'targetAttribute' => ['kode_ruang_siranap', 'kelas_ruang_siranap', 'kd_bangsal', 'kelas']],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_ruang_siranap' => 'Kode Ruang Siranap',
            'kelas_ruang_siranap' => 'Kelas Ruang Siranap',
            'kd_bangsal' => 'Kd Bangsal',
            'kelas' => 'Kelas',
            'kapasitas' => 'Kapasitas',
            'tersedia' => 'Tersedia',
            'tersediapria' => 'Tersediapria',
            'tersediawanita' => 'Tersediawanita',
            'menunggu' => 'Menunggu',
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
