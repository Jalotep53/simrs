<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pembelian".
 *
 * @property string $no_faktur
 * @property string|null $kode_suplier
 * @property string|null $nip
 * @property string|null $tgl_beli
 * @property float $total1
 * @property float $potongan
 * @property float $total2
 * @property float $ppn
 * @property float $tagihan
 * @property string $kd_bangsal
 * @property string|null $kd_rek
 *
 * @property Detailbeli[] $detailbelis
 * @property Bangsal $kdBangsal
 * @property Rekening $kdRek
 * @property Datasuplier $kodeSuplier
 * @property Petugas $nip0
 */
class Pembelian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembelian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_faktur', 'total1', 'potongan', 'total2', 'ppn', 'tagihan', 'kd_bangsal'], 'required'],
            [['tgl_beli'], 'safe'],
            [['total1', 'potongan', 'total2', 'ppn', 'tagihan'], 'number'],
            [['no_faktur', 'nip'], 'string', 'max' => 20],
            [['kode_suplier', 'kd_bangsal'], 'string', 'max' => 5],
            [['kd_rek'], 'string', 'max' => 15],
            [['no_faktur'], 'unique'],
            [['kode_suplier'], 'exist', 'skipOnError' => true, 'targetClass' => Datasuplier::class, 'targetAttribute' => ['kode_suplier' => 'kode_suplier']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
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
            'total1' => 'Total1',
            'potongan' => 'Potongan',
            'total2' => 'Total2',
            'ppn' => 'Ppn',
            'tagihan' => 'Tagihan',
            'kd_bangsal' => 'Kd Bangsal',
            'kd_rek' => 'Kd Rek',
        ];
    }

    /**
     * Gets query for [[Detailbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailbelis()
    {
        return $this->hasMany(Detailbeli::class, ['no_faktur' => 'no_faktur']);
    }

    /**
     * Gets query for [[KdBangsal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdBangsal()
    {
        return $this->hasOne(Bangsal::class, ['kd_bangsal' => 'kd_bangsal']);
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
        return $this->hasOne(Datasuplier::class, ['kode_suplier' => 'kode_suplier']);
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
