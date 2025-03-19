<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detail_pengeluaran_obat_bhp".
 *
 * @property string $no_keluar
 * @property string $kode_brng
 * @property string $kode_sat
 * @property string|null $no_batch
 * @property float $jumlah
 * @property float $harga_beli
 * @property float $total
 * @property string $no_faktur
 *
 * @property Databarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property PengeluaranObatBhp $noKeluar
 */
class DetailPengeluaranObatBhp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_pengeluaran_obat_bhp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_keluar', 'kode_brng', 'kode_sat', 'jumlah', 'harga_beli', 'total', 'no_faktur'], 'required'],
            [['jumlah', 'harga_beli', 'total'], 'number'],
            [['no_keluar', 'kode_brng'], 'string', 'max' => 15],
            [['kode_sat'], 'string', 'max' => 4],
            [['no_batch', 'no_faktur'], 'string', 'max' => 20],
            [['no_keluar', 'kode_brng'], 'unique', 'targetAttribute' => ['no_keluar', 'kode_brng']],
            [['no_keluar'], 'exist', 'skipOnError' => true, 'targetClass' => PengeluaranObatBhp::class, 'targetAttribute' => ['no_keluar' => 'no_keluar']],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
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
            'no_batch' => 'No Batch',
            'jumlah' => 'Jumlah',
            'harga_beli' => 'Harga Beli',
            'total' => 'Total',
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
     * Gets query for [[NoKeluar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoKeluar()
    {
        return $this->hasOne(PengeluaranObatBhp::class, ['no_keluar' => 'no_keluar']);
    }
}
