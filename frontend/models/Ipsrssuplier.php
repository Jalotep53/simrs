<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ipsrssuplier".
 *
 * @property string $kode_suplier
 * @property string|null $nama_suplier
 * @property string|null $alamat
 * @property string|null $kota
 * @property string|null $no_telp
 * @property string|null $nama_bank
 * @property string|null $rekening
 *
 * @property Ipsrspembelian[] $ipsrspembelians
 * @property Ipsrspemesanan[] $ipsrspemesanans
 * @property Ipsrsreturbeli[] $ipsrsreturbelis
 * @property SuratPemesananNonMedis[] $suratPemesananNonMedis
 */
class Ipsrssuplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ipsrssuplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_suplier'], 'required'],
            [['kode_suplier'], 'string', 'max' => 5],
            [['nama_suplier', 'alamat'], 'string', 'max' => 50],
            [['kota', 'rekening'], 'string', 'max' => 20],
            [['no_telp'], 'string', 'max' => 13],
            [['nama_bank'], 'string', 'max' => 30],
            [['kode_suplier'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_suplier' => 'Kode Suplier',
            'nama_suplier' => 'Nama Suplier',
            'alamat' => 'Alamat',
            'kota' => 'Kota',
            'no_telp' => 'No Telp',
            'nama_bank' => 'Nama Bank',
            'rekening' => 'Rekening',
        ];
    }

    /**
     * Gets query for [[Ipsrspembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrspembelians()
    {
        return $this->hasMany(Ipsrspembelian::class, ['kode_suplier' => 'kode_suplier']);
    }

    /**
     * Gets query for [[Ipsrspemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrspemesanans()
    {
        return $this->hasMany(Ipsrspemesanan::class, ['kode_suplier' => 'kode_suplier']);
    }

    /**
     * Gets query for [[Ipsrsreturbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsreturbelis()
    {
        return $this->hasMany(Ipsrsreturbeli::class, ['kode_suplier' => 'kode_suplier']);
    }

    /**
     * Gets query for [[SuratPemesananNonMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPemesananNonMedis()
    {
        return $this->hasMany(SuratPemesananNonMedis::class, ['kode_suplier' => 'kode_suplier']);
    }
}
