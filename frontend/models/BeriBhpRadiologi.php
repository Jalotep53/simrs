<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "beri_bhp_radiologi".
 *
 * @property string $no_rawat
 * @property string $tgl_periksa
 * @property string $jam
 * @property string $kode_brng
 * @property string $kode_sat
 * @property float $jumlah
 * @property float|null $harga
 * @property float|null $total
 *
 * @property Ipsrsbarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property RegPeriksa $noRawat
 */
class BeriBhpRadiologi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'beri_bhp_radiologi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_periksa', 'jam', 'kode_brng', 'kode_sat', 'jumlah'], 'required'],
            [['tgl_periksa', 'jam'], 'safe'],
            [['jumlah', 'harga', 'total'], 'number'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kode_brng'], 'string', 'max' => 15],
            [['kode_sat'], 'string', 'max' => 4],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Ipsrsbarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tgl_periksa' => 'Tgl Periksa',
            'jam' => 'Jam',
            'kode_brng' => 'Kode Brng',
            'kode_sat' => 'Kode Sat',
            'jumlah' => 'Jumlah',
            'harga' => 'Harga',
            'total' => 'Total',
        ];
    }

    /**
     * Gets query for [[KodeBrng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrng()
    {
        return $this->hasOne(Ipsrsbarang::class, ['kode_brng' => 'kode_brng']);
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
