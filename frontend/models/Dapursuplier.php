<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dapursuplier".
 *
 * @property string $kode_suplier
 * @property string|null $nama_suplier
 * @property string|null $alamat
 * @property string|null $kota
 * @property string|null $no_telp
 * @property string|null $nama_bank
 * @property string|null $rekening
 *
 * @property Dapurpembelian[] $dapurpembelians
 * @property Dapurpemesanan[] $dapurpemesanans
 * @property Dapurreturbeli[] $dapurreturbelis
 * @property SuratPemesananDapur[] $suratPemesananDapurs
 */
class Dapursuplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dapursuplier';
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
     * Gets query for [[Dapurpembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDapurpembelians()
    {
        return $this->hasMany(Dapurpembelian::class, ['kode_suplier' => 'kode_suplier']);
    }

    /**
     * Gets query for [[Dapurpemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDapurpemesanans()
    {
        return $this->hasMany(Dapurpemesanan::class, ['kode_suplier' => 'kode_suplier']);
    }

    /**
     * Gets query for [[Dapurreturbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDapurreturbelis()
    {
        return $this->hasMany(Dapurreturbeli::class, ['kode_suplier' => 'kode_suplier']);
    }

    /**
     * Gets query for [[SuratPemesananDapurs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPemesananDapurs()
    {
        return $this->hasMany(SuratPemesananDapur::class, ['kode_suplier' => 'kode_suplier']);
    }
}
