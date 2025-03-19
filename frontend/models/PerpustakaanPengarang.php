<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "perpustakaan_pengarang".
 *
 * @property string $kode_pengarang
 * @property string|null $nama_pengarang
 *
 * @property PerpustakaanBuku[] $perpustakaanBukus
 * @property PerpustakaanEbook[] $perpustakaanEbooks
 */
class PerpustakaanPengarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perpustakaan_pengarang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_pengarang'], 'required'],
            [['kode_pengarang'], 'string', 'max' => 7],
            [['nama_pengarang'], 'string', 'max' => 40],
            [['kode_pengarang'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_pengarang' => 'Kode Pengarang',
            'nama_pengarang' => 'Nama Pengarang',
        ];
    }

    /**
     * Gets query for [[PerpustakaanBukus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerpustakaanBukus()
    {
        return $this->hasMany(PerpustakaanBuku::class, ['kode_pengarang' => 'kode_pengarang']);
    }

    /**
     * Gets query for [[PerpustakaanEbooks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerpustakaanEbooks()
    {
        return $this->hasMany(PerpustakaanEbook::class, ['kode_pengarang' => 'kode_pengarang']);
    }
}
