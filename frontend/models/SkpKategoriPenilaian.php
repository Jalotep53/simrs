<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "skp_kategori_penilaian".
 *
 * @property string $kode_kategori
 * @property string|null $nama_kategori
 * @property string|null $sasaran
 *
 * @property SkpKriteriaPenilaian[] $skpKriteriaPenilaians
 */
class SkpKategoriPenilaian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skp_kategori_penilaian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_kategori'], 'required'],
            [['sasaran'], 'string'],
            [['kode_kategori'], 'string', 'max' => 5],
            [['nama_kategori'], 'string', 'max' => 100],
            [['kode_kategori'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_kategori' => 'Kode Kategori',
            'nama_kategori' => 'Nama Kategori',
            'sasaran' => 'Sasaran',
        ];
    }

    /**
     * Gets query for [[SkpKriteriaPenilaians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkpKriteriaPenilaians()
    {
        return $this->hasMany(SkpKriteriaPenilaian::class, ['kode_kategori' => 'kode_kategori']);
    }
}
