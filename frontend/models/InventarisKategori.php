<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inventaris_kategori".
 *
 * @property string $id_kategori
 * @property string|null $nama_kategori
 *
 * @property InventarisBarang[] $inventarisBarangs
 */
class InventarisKategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventaris_kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kategori'], 'required'],
            [['id_kategori'], 'string', 'max' => 10],
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
     * Gets query for [[InventarisBarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisBarangs()
    {
        return $this->hasMany(InventarisBarang::class, ['id_kategori' => 'id_kategori']);
    }
}
