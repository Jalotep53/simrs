<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "toko_detail_jual".
 *
 * @property string $nota_jual
 * @property string|null $kode_brng
 * @property string|null $kode_sat
 * @property float|null $h_jual
 * @property float|null $h_beli
 * @property float|null $jumlah
 * @property float|null $subtotal
 * @property float|null $dis
 * @property float|null $bsr_dis
 * @property float|null $tambahan
 * @property float|null $total
 *
 * @property Tokobarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property Tokopenjualan $notaJual
 */
class TokoDetailJual extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'toko_detail_jual';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nota_jual'], 'required'],
            [['h_jual', 'h_beli', 'jumlah', 'subtotal', 'dis', 'bsr_dis', 'tambahan', 'total'], 'number'],
            [['nota_jual'], 'string', 'max' => 15],
            [['kode_brng'], 'string', 'max' => 40],
            [['kode_sat'], 'string', 'max' => 4],
            [['nota_jual'], 'exist', 'skipOnError' => true, 'targetClass' => Tokopenjualan::class, 'targetAttribute' => ['nota_jual' => 'nota_jual']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Tokobarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nota_jual' => 'Nota Jual',
            'kode_brng' => 'Kode Brng',
            'kode_sat' => 'Kode Sat',
            'h_jual' => 'H Jual',
            'h_beli' => 'H Beli',
            'jumlah' => 'Jumlah',
            'subtotal' => 'Subtotal',
            'dis' => 'Dis',
            'bsr_dis' => 'Bsr Dis',
            'tambahan' => 'Tambahan',
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
        return $this->hasOne(Tokobarang::class, ['kode_brng' => 'kode_brng']);
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
     * Gets query for [[NotaJual]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotaJual()
    {
        return $this->hasOne(Tokopenjualan::class, ['nota_jual' => 'nota_jual']);
    }
}
