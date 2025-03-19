<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kategori_barang".
 *
 * @property string $kode
 * @property string|null $nama
 *
 * @property Databarang[] $databarangs
 */
class KategoriBarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode'], 'required'],
            [['kode'], 'string', 'max' => 4],
            [['nama'], 'string', 'max' => 30],
            [['kode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'nama' => 'Nama',
        ];
    }

    /**
     * Gets query for [[Databarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDatabarangs()
    {
        return $this->hasMany(Databarang::class, ['kode_kategori' => 'kode']);
    }
}
