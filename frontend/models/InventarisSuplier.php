<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inventaris_suplier".
 *
 * @property string $kode_suplier
 * @property string|null $nama_suplier
 * @property string|null $alamat
 * @property string|null $kota
 * @property string|null $no_telp
 * @property string|null $nama_bank
 * @property string|null $rekening
 *
 * @property InventarisPembelian[] $inventarisPembelians
 * @property InventarisPemesanan[] $inventarisPemesanans
 */
class InventarisSuplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventaris_suplier';
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
     * Gets query for [[InventarisPembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisPembelians()
    {
        return $this->hasMany(InventarisPembelian::class, ['kode_suplier' => 'kode_suplier']);
    }

    /**
     * Gets query for [[InventarisPemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisPemesanans()
    {
        return $this->hasMany(InventarisPemesanan::class, ['kode_suplier' => 'kode_suplier']);
    }
}
