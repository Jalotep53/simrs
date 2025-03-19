<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "akun_bayar".
 *
 * @property string $nama_bayar
 * @property string|null $kd_rek
 * @property float|null $ppn
 *
 * @property BayarPiutangLainlain[] $bayarPiutangLainlains
 * @property Deposit[] $deposits
 * @property DetailNotaInap[] $detailNotaInaps
 * @property DetailNotaJalan[] $detailNotaJalans
 * @property Rekening $kdRek
 * @property RegPeriksa[] $noRawats
 * @property Penjualan[] $penjualans
 * @property PiutangLainlain[] $piutangLainlains
 * @property Tokopembelian[] $tokopembelians
 * @property Tokopenjualan[] $tokopenjualans
 */
class AkunBayar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'akun_bayar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_bayar'], 'required'],
            [['ppn'], 'number'],
            [['nama_bayar'], 'string', 'max' => 50],
            [['kd_rek'], 'string', 'max' => 15],
            [['nama_bayar'], 'unique'],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nama_bayar' => 'Nama Bayar',
            'kd_rek' => 'Kd Rek',
            'ppn' => 'Ppn',
        ];
    }

    /**
     * Gets query for [[BayarPiutangLainlains]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPiutangLainlains()
    {
        return $this->hasMany(BayarPiutangLainlain::class, ['nama_bayar' => 'nama_bayar']);
    }

    /**
     * Gets query for [[Deposits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeposits()
    {
        return $this->hasMany(Deposit::class, ['nama_bayar' => 'nama_bayar']);
    }

    /**
     * Gets query for [[DetailNotaInaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailNotaInaps()
    {
        return $this->hasMany(DetailNotaInap::class, ['nama_bayar' => 'nama_bayar']);
    }

    /**
     * Gets query for [[DetailNotaJalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailNotaJalans()
    {
        return $this->hasMany(DetailNotaJalan::class, ['nama_bayar' => 'nama_bayar']);
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
     * Gets query for [[NoRawats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawats()
    {
        return $this->hasMany(RegPeriksa::class, ['no_rawat' => 'no_rawat'])->viaTable('detail_nota_jalan', ['nama_bayar' => 'nama_bayar']);
    }

    /**
     * Gets query for [[Penjualans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenjualans()
    {
        return $this->hasMany(Penjualan::class, ['nama_bayar' => 'nama_bayar']);
    }

    /**
     * Gets query for [[PiutangLainlains]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPiutangLainlains()
    {
        return $this->hasMany(PiutangLainlain::class, ['nama_bayar' => 'nama_bayar']);
    }

    /**
     * Gets query for [[Tokopembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokopembelians()
    {
        return $this->hasMany(Tokopembelian::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[Tokopenjualans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokopenjualans()
    {
        return $this->hasMany(Tokopenjualan::class, ['nama_bayar' => 'nama_bayar']);
    }
}
