<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "perpustakaan_jenis_buku".
 *
 * @property string $id_jenis
 * @property string|null $nama_jenis
 *
 * @property PerpustakaanBuku[] $perpustakaanBukus
 * @property PerpustakaanEbook[] $perpustakaanEbooks
 */
class PerpustakaanJenisBuku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perpustakaan_jenis_buku';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jenis'], 'required'],
            [['id_jenis'], 'string', 'max' => 5],
            [['nama_jenis'], 'string', 'max' => 40],
            [['id_jenis'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jenis' => 'Id Jenis',
            'nama_jenis' => 'Nama Jenis',
        ];
    }

    /**
     * Gets query for [[PerpustakaanBukus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerpustakaanBukus()
    {
        return $this->hasMany(PerpustakaanBuku::class, ['id_jenis' => 'id_jenis']);
    }

    /**
     * Gets query for [[PerpustakaanEbooks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerpustakaanEbooks()
    {
        return $this->hasMany(PerpustakaanEbook::class, ['id_jenis' => 'id_jenis']);
    }
}
