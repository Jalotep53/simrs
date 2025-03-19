<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tokopembelian".
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
 * @property AkunBayar $kdRek
 * @property Tokosuplier $kodeSuplier
 * @property Petugas $nip0
 * @property TokoDetailBeli[] $tokoDetailBelis
 */
class Tokopembelian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tokopembelian';
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
            [['no_faktur', 'nip'], 'string', 'max' => 20],
            [['kode_suplier'], 'string', 'max' => 5],
            [['kd_rek'], 'string', 'max' => 15],
            [['no_faktur'], 'unique'],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => AkunBayar::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
            [['kode_suplier'], 'exist', 'skipOnError' => true, 'targetClass' => Tokosuplier::class, 'targetAttribute' => ['kode_suplier' => 'kode_suplier']],
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
     * Gets query for [[KdRek]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRek()
    {
        return $this->hasOne(AkunBayar::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[KodeSuplier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSuplier()
    {
        return $this->hasOne(Tokosuplier::class, ['kode_suplier' => 'kode_suplier']);
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
     * Gets query for [[TokoDetailBelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailBelis()
    {
        return $this->hasMany(TokoDetailBeli::class, ['no_faktur' => 'no_faktur']);
    }
}
