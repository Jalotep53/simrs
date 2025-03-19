<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_berkas_pegawai".
 *
 * @property string $kode
 * @property string $kategori
 * @property string $nama_berkas
 * @property int $no_urut
 *
 * @property BerkasPegawai[] $berkasPegawais
 */
class MasterBerkasPegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_berkas_pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'kategori', 'nama_berkas', 'no_urut'], 'required'],
            [['kategori'], 'string'],
            [['no_urut'], 'integer'],
            [['kode'], 'string', 'max' => 10],
            [['nama_berkas'], 'string', 'max' => 300],
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
            'kategori' => 'Kategori',
            'nama_berkas' => 'Nama Berkas',
            'no_urut' => 'No Urut',
        ];
    }

    /**
     * Gets query for [[BerkasPegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBerkasPegawais()
    {
        return $this->hasMany(BerkasPegawai::class, ['kode_berkas' => 'kode']);
    }
}
