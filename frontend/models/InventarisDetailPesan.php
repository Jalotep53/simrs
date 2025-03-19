<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inventaris_detail_pesan".
 *
 * @property string $no_faktur
 * @property string $kode_barang
 * @property float $jumlah
 * @property float $harga
 * @property float $subtotal
 * @property float $dis
 * @property float $besardis
 * @property float $total
 *
 * @property InventarisBarang $kodeBarang
 * @property InventarisPemesanan $noFaktur
 */
class InventarisDetailPesan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventaris_detail_pesan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_faktur', 'kode_barang', 'jumlah', 'harga', 'subtotal', 'dis', 'besardis', 'total'], 'required'],
            [['jumlah', 'harga', 'subtotal', 'dis', 'besardis', 'total'], 'number'],
            [['no_faktur', 'kode_barang'], 'string', 'max' => 20],
            [['no_faktur'], 'exist', 'skipOnError' => true, 'targetClass' => InventarisPemesanan::class, 'targetAttribute' => ['no_faktur' => 'no_faktur']],
            [['kode_barang'], 'exist', 'skipOnError' => true, 'targetClass' => InventarisBarang::class, 'targetAttribute' => ['kode_barang' => 'kode_barang']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_faktur' => 'No Faktur',
            'kode_barang' => 'Kode Barang',
            'jumlah' => 'Jumlah',
            'harga' => 'Harga',
            'subtotal' => 'Subtotal',
            'dis' => 'Dis',
            'besardis' => 'Besardis',
            'total' => 'Total',
        ];
    }

    /**
     * Gets query for [[KodeBarang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBarang()
    {
        return $this->hasOne(InventarisBarang::class, ['kode_barang' => 'kode_barang']);
    }

    /**
     * Gets query for [[NoFaktur]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoFaktur()
    {
        return $this->hasOne(InventarisPemesanan::class, ['no_faktur' => 'no_faktur']);
    }
}
