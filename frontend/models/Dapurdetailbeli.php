<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dapurdetailbeli".
 *
 * @property string $no_faktur
 * @property string $kode_brng
 * @property string $kode_sat
 * @property float $jumlah
 * @property float $harga
 * @property float $subtotal
 * @property float $dis
 * @property float $besardis
 * @property float $total
 *
 * @property Dapurbarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property Dapurpembelian $noFaktur
 */
class Dapurdetailbeli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dapurdetailbeli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_faktur', 'kode_brng', 'kode_sat', 'jumlah', 'harga', 'subtotal', 'dis', 'besardis', 'total'], 'required'],
            [['jumlah', 'harga', 'subtotal', 'dis', 'besardis', 'total'], 'number'],
            [['no_faktur', 'kode_brng'], 'string', 'max' => 15],
            [['kode_sat'], 'string', 'max' => 4],
            [['no_faktur'], 'exist', 'skipOnError' => true, 'targetClass' => Dapurpembelian::class, 'targetAttribute' => ['no_faktur' => 'no_faktur']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Dapurbarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_faktur' => 'No Faktur',
            'kode_brng' => 'Kode Brng',
            'kode_sat' => 'Kode Sat',
            'jumlah' => 'Jumlah',
            'harga' => 'Harga',
            'subtotal' => 'Subtotal',
            'dis' => 'Dis',
            'besardis' => 'Besardis',
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
        return $this->hasOne(Dapurbarang::class, ['kode_brng' => 'kode_brng']);
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
     * Gets query for [[NoFaktur]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoFaktur()
    {
        return $this->hasOne(Dapurpembelian::class, ['no_faktur' => 'no_faktur']);
    }
}
