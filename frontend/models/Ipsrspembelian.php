<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ipsrspembelian".
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
 *
 * @property Ipsrsdetailbeli[] $ipsrsdetailbelis
 * @property Rekening $kdRek
 * @property Ipsrssuplier $kodeSuplier
 * @property Petugas $nip0
 */
class Ipsrspembelian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ipsrspembelian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_faktur', 'kode_suplier', 'nip', 'tgl_beli', 'subtotal', 'potongan', 'total'], 'required'],
            [['tgl_beli'], 'safe'],
            [['subtotal', 'potongan', 'total', 'ppn', 'meterai', 'tagihan'], 'number'],
            [['no_faktur', 'kd_rek'], 'string', 'max' => 15],
            [['kode_suplier'], 'string', 'max' => 5],
            [['nip'], 'string', 'max' => 20],
            [['no_faktur'], 'unique'],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
            [['kode_suplier'], 'exist', 'skipOnError' => true, 'targetClass' => Ipsrssuplier::class, 'targetAttribute' => ['kode_suplier' => 'kode_suplier']],
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
        ];
    }

    /**
     * Gets query for [[Ipsrsdetailbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsdetailbelis()
    {
        return $this->hasMany(Ipsrsdetailbeli::class, ['no_faktur' => 'no_faktur']);
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
}
