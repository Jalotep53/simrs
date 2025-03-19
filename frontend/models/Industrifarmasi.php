<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "industrifarmasi".
 *
 * @property string $kode_industri
 * @property string|null $nama_industri
 * @property string|null $alamat
 * @property string|null $kota
 * @property string|null $no_telp
 *
 * @property Databarang[] $databarangs
 */
class Industrifarmasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'industrifarmasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_industri'], 'required'],
            [['kode_industri'], 'string', 'max' => 5],
            [['nama_industri', 'alamat'], 'string', 'max' => 50],
            [['kota', 'no_telp'], 'string', 'max' => 20],
            [['kode_industri'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_industri' => 'Kode Industri',
            'nama_industri' => 'Nama Industri',
            'alamat' => 'Alamat',
            'kota' => 'Kota',
            'no_telp' => 'No Telp',
        ];
    }

    /**
     * Gets query for [[Databarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDatabarangs()
    {
        return $this->hasMany(Databarang::class, ['kode_industri' => 'kode_industri']);
    }
}
