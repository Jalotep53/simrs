<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "perpustakaan_penerbit".
 *
 * @property string $kode_penerbit
 * @property string|null $nama_penerbit
 * @property string|null $alamat_penerbit
 * @property string|null $no_telp
 * @property string|null $email
 * @property string|null $website_penerbit
 *
 * @property PerpustakaanBuku[] $perpustakaanBukus
 * @property PerpustakaanEbook[] $perpustakaanEbooks
 */
class PerpustakaanPenerbit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perpustakaan_penerbit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_penerbit'], 'required'],
            [['kode_penerbit'], 'string', 'max' => 10],
            [['nama_penerbit'], 'string', 'max' => 40],
            [['alamat_penerbit'], 'string', 'max' => 70],
            [['no_telp'], 'string', 'max' => 13],
            [['email'], 'string', 'max' => 25],
            [['website_penerbit'], 'string', 'max' => 30],
            [['kode_penerbit'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_penerbit' => 'Kode Penerbit',
            'nama_penerbit' => 'Nama Penerbit',
            'alamat_penerbit' => 'Alamat Penerbit',
            'no_telp' => 'No Telp',
            'email' => 'Email',
            'website_penerbit' => 'Website Penerbit',
        ];
    }

    /**
     * Gets query for [[PerpustakaanBukus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerpustakaanBukus()
    {
        return $this->hasMany(PerpustakaanBuku::class, ['kode_penerbit' => 'kode_penerbit']);
    }

    /**
     * Gets query for [[PerpustakaanEbooks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerpustakaanEbooks()
    {
        return $this->hasMany(PerpustakaanEbook::class, ['kode_penerbit' => 'kode_penerbit']);
    }
}
