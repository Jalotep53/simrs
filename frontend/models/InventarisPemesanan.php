<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inventaris_pemesanan".
 *
 * @property string $no_faktur
 * @property string $no_order
 * @property string|null $kode_suplier
 * @property string|null $nip
 * @property string|null $tgl_pesan
 * @property string|null $tgl_faktur
 * @property string|null $tgl_tempo
 * @property float $total1
 * @property float $potongan
 * @property float $total2
 * @property float $ppn
 * @property float|null $meterai
 * @property float $tagihan
 * @property string|null $status
 * @property string $kd_rek_aset
 *
 * @property BayarPemesananInventaris[] $bayarPemesananInventaris
 * @property InventarisBuktiPemesanan $inventarisBuktiPemesanan
 * @property InventarisDetailPesan[] $inventarisDetailPesans
 * @property InventarisDetailTitipFaktur[] $inventarisDetailTitipFakturs
 * @property InventarisSuplier $kodeSuplier
 * @property Petugas $nip0
 * @property InventarisTitipFaktur[] $noTagihans
 */
class InventarisPemesanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventaris_pemesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_faktur', 'no_order', 'total1', 'potongan', 'total2', 'ppn', 'tagihan', 'kd_rek_aset'], 'required'],
            [['tgl_pesan', 'tgl_faktur', 'tgl_tempo'], 'safe'],
            [['total1', 'potongan', 'total2', 'ppn', 'meterai', 'tagihan'], 'number'],
            [['status'], 'string'],
            [['no_faktur', 'no_order', 'nip'], 'string', 'max' => 20],
            [['kode_suplier'], 'string', 'max' => 5],
            [['kd_rek_aset'], 'string', 'max' => 15],
            [['no_faktur'], 'unique'],
            [['kode_suplier'], 'exist', 'skipOnError' => true, 'targetClass' => InventarisSuplier::class, 'targetAttribute' => ['kode_suplier' => 'kode_suplier']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_faktur' => 'No Faktur',
            'no_order' => 'No Order',
            'kode_suplier' => 'Kode Suplier',
            'nip' => 'Nip',
            'tgl_pesan' => 'Tgl Pesan',
            'tgl_faktur' => 'Tgl Faktur',
            'tgl_tempo' => 'Tgl Tempo',
            'total1' => 'Total1',
            'potongan' => 'Potongan',
            'total2' => 'Total2',
            'ppn' => 'Ppn',
            'meterai' => 'Meterai',
            'tagihan' => 'Tagihan',
            'status' => 'Status',
            'kd_rek_aset' => 'Kd Rek Aset',
        ];
    }

    /**
     * Gets query for [[BayarPemesananInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPemesananInventaris()
    {
        return $this->hasMany(BayarPemesananInventaris::class, ['no_faktur' => 'no_faktur']);
    }

    /**
     * Gets query for [[InventarisBuktiPemesanan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisBuktiPemesanan()
    {
        return $this->hasOne(InventarisBuktiPemesanan::class, ['no_faktur' => 'no_faktur']);
    }

    /**
     * Gets query for [[InventarisDetailPesans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisDetailPesans()
    {
        return $this->hasMany(InventarisDetailPesan::class, ['no_faktur' => 'no_faktur']);
    }

    /**
     * Gets query for [[InventarisDetailTitipFakturs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisDetailTitipFakturs()
    {
        return $this->hasMany(InventarisDetailTitipFaktur::class, ['no_faktur' => 'no_faktur']);
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

    /**
     * Gets query for [[NoTagihans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoTagihans()
    {
        return $this->hasMany(InventarisTitipFaktur::class, ['no_tagihan' => 'no_tagihan'])->viaTable('inventaris_detail_titip_faktur', ['no_faktur' => 'no_faktur']);
    }
}
