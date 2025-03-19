<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tokosuplier".
 *
 * @property string $kode_suplier
 * @property string|null $nama_suplier
 * @property string|null $alamat
 * @property string|null $kota
 * @property string|null $no_telp
 * @property string|null $nama_bank
 * @property string|null $rekening
 *
 * @property TokoSuratPemesanan[] $tokoSuratPemesanans
 * @property Tokopembelian[] $tokopembelians
 * @property Tokopemesanan[] $tokopemesanans
 * @property Tokoreturbeli[] $tokoreturbelis
 */
class Tokosuplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tokosuplier';
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
     * Gets query for [[TokoSuratPemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoSuratPemesanans()
    {
        return $this->hasMany(TokoSuratPemesanan::class, ['kode_suplier' => 'kode_suplier']);
    }

    /**
     * Gets query for [[Tokopembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokopembelians()
    {
        return $this->hasMany(Tokopembelian::class, ['kode_suplier' => 'kode_suplier']);
    }

    /**
     * Gets query for [[Tokopemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokopemesanans()
    {
        return $this->hasMany(Tokopemesanan::class, ['kode_suplier' => 'kode_suplier']);
    }

    /**
     * Gets query for [[Tokoreturbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoreturbelis()
    {
        return $this->hasMany(Tokoreturbeli::class, ['kode_suplier' => 'kode_suplier']);
    }
}
