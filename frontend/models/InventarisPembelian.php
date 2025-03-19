<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inventaris_pembelian".
 *
 * @property string $no_faktur
 * @property string $kode_suplier
 * @property string $nip
 * @property string $tgl_beli
 * @property float $subtotal
 * @property float $potongan
 * @property float $total
 * @property float|null $ppn
 * @property float|null $meterai
 * @property float|null $tagihan
 * @property string|null $kd_rek
 * @property string $kd_rek_aset
 *
 * @property InventarisDetailBeli[] $inventarisDetailBelis
 * @property Rekening $kdRek
 * @property Rekening $kdRekAset
 * @property InventarisBarang[] $kodeBarangs
 * @property InventarisSuplier $kodeSuplier
 * @property Petugas $nip0
 */
class InventarisPembelian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventaris_pembelian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_faktur', 'kode_suplier', 'nip', 'tgl_beli', 'subtotal', 'potongan', 'total', 'kd_rek_aset'], 'required'],
            [['tgl_beli'], 'safe'],
            [['subtotal', 'potongan', 'total', 'ppn', 'meterai', 'tagihan'], 'number'],
            [['no_faktur', 'kd_rek', 'kd_rek_aset'], 'string', 'max' => 15],
            [['kode_suplier'], 'string', 'max' => 5],
            [['nip'], 'string', 'max' => 20],
            [['no_faktur'], 'unique'],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
            [['kode_suplier'], 'exist', 'skipOnError' => true, 'targetClass' => InventarisSuplier::class, 'targetAttribute' => ['kode_suplier' => 'kode_suplier']],
            [['kd_rek_aset'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek_aset' => 'kd_rek']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_faktur' => 'No Faktur',
            'kode_suplier' => 'Kode Suplier',
            'nip' => 'Nip',
            'tgl_beli' => 'Tgl Beli',
            'subtotal' => 'Subtotal',
            'potongan' => 'Potongan',
            'total' => 'Total',
            'ppn' => 'Ppn',
            'meterai' => 'Meterai',
            'tagihan' => 'Tagihan',
            'kd_rek' => 'Kd Rek',
            'kd_rek_aset' => 'Kd Rek Aset',
        ];
    }

    /**
     * Gets query for [[InventarisDetailBelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisDetailBelis()
    {
        return $this->hasMany(InventarisDetailBeli::class, ['no_faktur' => 'no_faktur']);
    }

    /**
     * Gets query for [[KdRek]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRek()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[KdRekAset]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRekAset()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek_aset']);
    }

    /**
     * Gets query for [[KodeBarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBarangs()
    {
        return $this->hasMany(InventarisBarang::class, ['kode_barang' => 'kode_barang'])->viaTable('inventaris_detail_beli', ['no_faktur' => 'no_faktur']);
    }

    /**
     * Gets query for [[KodeSuplier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSuplier()
    {
        return $this->hasOne(InventarisSuplier::class, ['kode_suplier' => 'kode_suplier']);
    }

    /**
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip']);
    }
}
