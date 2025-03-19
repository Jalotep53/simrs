<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "perpustakaan_set_peminjaman".
 *
 * @property int|null $max_pinjam
 * @property int|null $lama_pinjam
 * @property float|null $denda_perhari
 */
class PerpustakaanSetPeminjaman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perpustakaan_set_peminjaman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['max_pinjam', 'lama_pinjam'], 'integer'],
            [['denda_perhari'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'max_pinjam' => 'Max Pinjam',
            'lama_pinjam' => 'Lama Pinjam',
            'denda_perhari' => 'Denda Perhari',
        ];
    }
}
