<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detailpesan".
 *
 * @property string $no_faktur
 * @property string $kode_brng
 * @property string|null $kode_sat
 * @property float|null $jumlah
 * @property float|null $h_pesan
 * @property float|null $subtotal
 * @property float $dis
 * @property float $besardis
 * @property float $total
 * @property string $no_batch
 * @property float|null $jumlah2
 * @property string|null $kadaluarsa
 *
 * @property Databarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property Pemesanan $noFaktur
 */
class Detailpesan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detailpesan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_faktur', 'dis', 'besardis', 'total', 'no_batch'], 'required'],
            [['jumlah', 'h_pesan', 'subtotal', 'dis', 'besardis', 'total', 'jumlah2'], 'number'],
            [['kadaluarsa'], 'safe'],
            [['no_faktur', 'no_batch'], 'string', 'max' => 20],
            [['kode_brng'], 'string', 'max' => 15],
            [['kode_sat'], 'string', 'max' => 4],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
            [['no_faktur'], 'exist', 'skipOnError' => true, 'targetClass' => Pemesanan::class, 'targetAttribute' => ['no_faktur' => 'no_faktur']],
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
            'h_pesan' => 'H Pesan',
            'subtotal' => 'Subtotal',
            'dis' => 'Dis',
            'besardis' => 'Besardis',
            'total' => 'Total',
            'no_batch' => 'No Batch',
            'jumlah2' => 'Jumlah2',
            'kadaluarsa' => 'Kadaluarsa',
        ];
    }

    /**
     * Gets query for [[KodeBrng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrng()
    {
        return $this->hasOne(Databarang::class, ['kode_brng' => 'kode_brng']);
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
        return $this->hasOne(Pemesanan::class, ['no_faktur' => 'no_faktur']);
    }
}
