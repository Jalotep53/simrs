<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pemeriksaan_ginekologi_ranap".
 *
 * @property string $no_rawat
 * @property string $tgl_perawatan
 * @property string $jam_rawat
 * @property string|null $inspeksi
 * @property string|null $inspeksi_vulva
 * @property string|null $inspekulo_gine
 * @property string|null $fluxus_gine
 * @property string|null $fluor_gine
 * @property string $vulva_inspekulo
 * @property string|null $portio_inspekulo
 * @property string|null $sondage
 * @property string|null $portio_dalam
 * @property string|null $bentuk
 * @property string|null $cavum_uteri
 * @property string|null $mobilitas
 * @property string|null $ukuran
 * @property string|null $nyeri_tekan
 * @property string|null $adnexa_kanan
 * @property string $adnexa_kiri
 * @property string $cavum_douglas
 *
 * @property RegPeriksa $noRawat
 */
class PemeriksaanGinekologiRanap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemeriksaan_ginekologi_ranap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_perawatan', 'jam_rawat', 'vulva_inspekulo', 'adnexa_kiri', 'cavum_douglas'], 'required'],
            [['tgl_perawatan', 'jam_rawat'], 'safe'],
            [['fluxus_gine', 'fluor_gine', 'mobilitas', 'nyeri_tekan'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['inspeksi', 'inspeksi_vulva', 'inspekulo_gine', 'vulva_inspekulo', 'portio_inspekulo', 'sondage', 'portio_dalam', 'bentuk', 'cavum_uteri', 'ukuran', 'adnexa_kanan', 'adnexa_kiri', 'cavum_douglas'], 'string', 'max' => 50],
            [['no_rawat', 'tgl_perawatan', 'jam_rawat'], 'unique', 'targetAttribute' => ['no_rawat', 'tgl_perawatan', 'jam_rawat']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tgl_perawatan' => 'Tgl Perawatan',
            'jam_rawat' => 'Jam Rawat',
            'inspeksi' => 'Inspeksi',
            'inspeksi_vulva' => 'Inspeksi Vulva',
            'inspekulo_gine' => 'Inspekulo Gine',
            'fluxus_gine' => 'Fluxus Gine',
            'fluor_gine' => 'Fluor Gine',
            'vulva_inspekulo' => 'Vulva Inspekulo',
            'portio_inspekulo' => 'Portio Inspekulo',
            'sondage' => 'Sondage',
            'portio_dalam' => 'Portio Dalam',
            'bentuk' => 'Bentuk',
            'cavum_uteri' => 'Cavum Uteri',
            'mobilitas' => 'Mobilitas',
            'ukuran' => 'Ukuran',
            'nyeri_tekan' => 'Nyeri Tekan',
            'adnexa_kanan' => 'Adnexa Kanan',
            'adnexa_kiri' => 'Adnexa Kiri',
            'cavum_douglas' => 'Cavum Douglas',
        ];
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
