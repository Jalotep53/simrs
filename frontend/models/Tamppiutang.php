<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tamppiutang".
 *
 * @property string $kode_brng
 * @property string|null $nama_brng
 * @property string|null $satuan
 * @property float|null $h_jual
 * @property float|null $h_beli
 * @property float|null $jumlah
 * @property float|null $subtotal
 * @property float|null $dis
 * @property float|null $bsr_dis
 * @property float|null $total
 * @property string $no_batch
 * @property string $petugas
 * @property string $no_faktur
 * @property string $aturan_pakai
 *
 * @property Databarang $kodeBrng
 */
class Tamppiutang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tamppiutang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'no_batch', 'petugas', 'no_faktur', 'aturan_pakai'], 'required'],
            [['h_jual', 'h_beli', 'jumlah', 'subtotal', 'dis', 'bsr_dis', 'total'], 'number'],
            [['kode_brng'], 'string', 'max' => 15],
            [['nama_brng'], 'string', 'max' => 80],
            [['satuan'], 'string', 'max' => 10],
            [['no_batch', 'petugas', 'no_faktur'], 'string', 'max' => 20],
            [['aturan_pakai'], 'string', 'max' => 150],
            [['kode_brng', 'no_batch', 'no_faktur'], 'unique', 'targetAttribute' => ['kode_brng', 'no_batch', 'no_faktur']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_brng' => 'Kode Brng',
            'nama_brng' => 'Nama Brng',
            'satuan' => 'Satuan',
            'h_jual' => 'H Jual',
            'h_beli' => 'H Beli',
            'jumlah' => 'Jumlah',
            'subtotal' => 'Subtotal',
            'dis' => 'Dis',
            'bsr_dis' => 'Bsr Dis',
            'total' => 'Total',
            'no_batch' => 'No Batch',
            'petugas' => 'Petugas',
            'no_faktur' => 'No Faktur',
            'aturan_pakai' => 'Aturan Pakai',
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
}
