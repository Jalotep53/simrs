<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ipsrsdetailpengeluaran".
 *
 * @property string $no_keluar
 * @property string $kode_brng
 * @property string $kode_sat
 * @property float $jumlah
 * @property float $harga
 * @property float $total
 *
 * @property Ipsrsbarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property Ipsrspengeluaran $noKeluar
 */
class Ipsrsdetailpengeluaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ipsrsdetailpengeluaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_keluar', 'kode_brng', 'kode_sat', 'jumlah', 'harga', 'total'], 'required'],
            [['jumlah', 'harga', 'total'], 'number'],
            [['no_keluar', 'kode_brng'], 'string', 'max' => 15],
            [['kode_sat'], 'string', 'max' => 4],
            [['no_keluar'], 'exist', 'skipOnError' => true, 'targetClass' => Ipsrspengeluaran::class, 'targetAttribute' => ['no_keluar' => 'no_keluar']],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Ipsrsbarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_keluar' => 'No Keluar',
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
     * Gets query for [[NoKeluar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoKeluar()
    {
        return $this->hasOne(Ipsrspengeluaran::class, ['no_keluar' => 'no_keluar']);
    }
}
