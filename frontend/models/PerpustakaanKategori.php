<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "perpustakaan_kategori".
 *
 * @property string $id_kategori
 * @property string|null $nama_kategori
 *
 * @property PerpustakaanBuku[] $perpustakaanBukus
 * @property PerpustakaanEbook[] $perpustakaanEbooks
 */
class PerpustakaanKategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perpustakaan_kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kategori'], 'required'],
            [['id_kategori'], 'string', 'max' => 5],
            [['nama_kategori'], 'string', 'max' => 40],
            [['id_kategori'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kategori' => 'Id Kategori',
            'nama_kategori' => 'Nama Kategori',
        ];
    }

    /**
     * Gets query for [[PerpustakaanBukus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerpustakaanBukus()
    {
        return $this->hasMany(PerpustakaanBuku::class, ['id_kategori' => 'id_kategori']);
    }

    /**
     * Gets query for [[PerpustakaanEbooks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerpustakaanEbooks()
    {
        return $this->hasMany(PerpustakaanEbook::class, ['id_kategori' => 'id_kategori']);
    }
}
