<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pemberihibah".
 *
 * @property string $kode_pemberi
 * @property string|null $nama_pemberi
 * @property string|null $alamat
 * @property string|null $kota
 * @property string|null $no_telp
 *
 * @property DapurHibah[] $dapurHibahs
 * @property HibahObatBhp[] $hibahObatBhps
 * @property InventarisHibah[] $inventarisHibahs
 * @property IpsrsHibah[] $ipsrsHibahs
 */
class Pemberihibah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemberihibah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_pemberi'], 'required'],
            [['kode_pemberi'], 'string', 'max' => 5],
            [['nama_pemberi', 'alamat'], 'string', 'max' => 50],
            [['kota'], 'string', 'max' => 20],
            [['no_telp'], 'string', 'max' => 13],
            [['kode_pemberi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_pemberi' => 'Kode Pemberi',
            'nama_pemberi' => 'Nama Pemberi',
            'alamat' => 'Alamat',
            'kota' => 'Kota',
            'no_telp' => 'No Telp',
        ];
    }

    /**
     * Gets query for [[DapurHibahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDapurHibahs()
    {
        return $this->hasMany(DapurHibah::class, ['kode_pemberi' => 'kode_pemberi']);
    }

    /**
     * Gets query for [[HibahObatBhps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHibahObatBhps()
    {
        return $this->hasMany(HibahObatBhp::class, ['kode_pemberi' => 'kode_pemberi']);
    }

    /**
     * Gets query for [[InventarisHibahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisHibahs()
    {
        return $this->hasMany(InventarisHibah::class, ['kode_pemberi' => 'kode_pemberi']);
    }

    /**
     * Gets query for [[IpsrsHibahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsHibahs()
    {
        return $this->hasMany(IpsrsHibah::class, ['kode_pemberi' => 'kode_pemberi']);
    }
}
