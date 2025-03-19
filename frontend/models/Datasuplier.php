<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "datasuplier".
 *
 * @property string $kode_suplier
 * @property string|null $nama_suplier
 * @property string|null $alamat
 * @property string|null $kota
 * @property string|null $no_telp
 * @property string|null $nama_bank
 * @property string|null $rekening
 *
 * @property Pembelian[] $pembelians
 * @property Pemesanan[] $pemesanans
 * @property Returbeli[] $returbelis
 * @property SuratPemesananMedis[] $suratPemesananMedis
 */
class Datasuplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'datasuplier';
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
     * Gets query for [[Pembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembelians()
    {
        return $this->hasMany(Pembelian::class, ['kode_suplier' => 'kode_suplier']);
    }

    /**
     * Gets query for [[Pemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemesanans()
    {
        return $this->hasMany(Pemesanan::class, ['kode_suplier' => 'kode_suplier']);
    }

    /**
     * Gets query for [[Returbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturbelis()
    {
        return $this->hasMany(Returbeli::class, ['kode_suplier' => 'kode_suplier']);
    }

    /**
     * Gets query for [[SuratPemesananMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPemesananMedis()
    {
        return $this->hasMany(SuratPemesananMedis::class, ['kode_suplier' => 'kode_suplier']);
    }
}
