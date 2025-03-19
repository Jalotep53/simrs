<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ipsrspemesanan".
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
 *
 * @property BayarPemesananNonMedis[] $bayarPemesananNonMedis
 * @property BuktiPemesananLogistik $buktiPemesananLogistik
 * @property IpsrsDetailTitipFaktur[] $ipsrsDetailTitipFakturs
 * @property Ipsrsdetailpesan[] $ipsrsdetailpesans
 * @property Ipsrssuplier $kodeSuplier
 * @property Petugas $nip0
 * @property IpsrsTitipFaktur[] $noTagihans
 */
class Ipsrspemesanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ipsrspemesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_faktur', 'no_order', 'total1', 'potongan', 'total2', 'ppn', 'tagihan'], 'required'],
            [['tgl_pesan', 'tgl_faktur', 'tgl_tempo'], 'safe'],
            [['total1', 'potongan', 'total2', 'ppn', 'meterai', 'tagihan'], 'number'],
            [['status'], 'string'],
            [['no_faktur', 'no_order', 'nip'], 'string', 'max' => 20],
            [['kode_suplier'], 'string', 'max' => 5],
            [['no_faktur'], 'unique'],
            [['kode_suplier'], 'exist', 'skipOnError' => true, 'targetClass' => Ipsrssuplier::class, 'targetAttribute' => ['kode_suplier' => 'kode_suplier']],
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
        ];
    }

    /**
     * Gets query for [[BayarPemesananNonMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPemesananNonMedis()
    {
        return $this->hasMany(BayarPemesananNonMedis::class, ['no_faktur' => 'no_faktur']);
    }

    /**
     * Gets query for [[BuktiPemesananLogistik]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuktiPemesananLogistik()
    {
        return $this->hasOne(BuktiPemesananLogistik::class, ['no_faktur' => 'no_faktur']);
    }

    /**
     * Gets query for [[IpsrsDetailTitipFakturs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsDetailTitipFakturs()
    {
        return $this->hasMany(IpsrsDetailTitipFaktur::class, ['no_faktur' => 'no_faktur']);
    }

    /**
     * Gets query for [[Ipsrsdetailpesans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsdetailpesans()
    {
        return $this->hasMany(Ipsrsdetailpesan::class, ['no_faktur' => 'no_faktur']);
    }

    /**
     * Gets query for [[KodeSuplier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSuplier()
    {
        return $this->hasOne(Ipsrssuplier::class, ['kode_suplier' => 'kode_suplier']);
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
        return $this->hasMany(IpsrsTitipFaktur::class, ['no_tagihan' => 'no_tagihan'])->viaTable('ipsrs_detail_titip_faktur', ['no_faktur' => 'no_faktur']);
    }
}
