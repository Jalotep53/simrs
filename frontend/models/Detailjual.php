<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detailjual".
 *
 * @property string $nota_jual
 * @property string $kode_brng
 * @property string|null $kode_sat
 * @property float|null $h_jual
 * @property float|null $h_beli
 * @property float|null $jumlah
 * @property float|null $subtotal
 * @property float|null $dis
 * @property float|null $bsr_dis
 * @property float|null $tambahan
 * @property float $embalase
 * @property float $tuslah
 * @property string $aturan_pakai
 * @property float|null $total
 * @property string $no_batch
 * @property string $no_faktur
 *
 * @property Databarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property Penjualan $notaJual
 */
class Detailjual extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detailjual';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nota_jual', 'embalase', 'tuslah', 'aturan_pakai', 'no_batch', 'no_faktur'], 'required'],
            [['h_jual', 'h_beli', 'jumlah', 'subtotal', 'dis', 'bsr_dis', 'tambahan', 'embalase', 'tuslah', 'total'], 'number'],
            [['nota_jual', 'no_batch', 'no_faktur'], 'string', 'max' => 20],
            [['kode_brng'], 'string', 'max' => 15],
            [['kode_sat'], 'string', 'max' => 4],
            [['aturan_pakai'], 'string', 'max' => 150],
            [['nota_jual'], 'exist', 'skipOnError' => true, 'targetClass' => Penjualan::class, 'targetAttribute' => ['nota_jual' => 'nota_jual']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
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
            'embalase' => 'Embalase',
            'tuslah' => 'Tuslah',
            'aturan_pakai' => 'Aturan Pakai',
            'total' => 'Total',
            'no_batch' => 'No Batch',
            'no_faktur' => 'No Faktur',
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
     * Gets query for [[NotaJual]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotaJual()
    {
        return $this->hasOne(Penjualan::class, ['nota_jual' => 'nota_jual']);
    }
}
