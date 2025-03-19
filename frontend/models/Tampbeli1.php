<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tampbeli1".
 *
 * @property string $kode_brng
 * @property string|null $nama_brng
 * @property string|null $satuan
 * @property string|null $satuan_stok
 * @property float|null $h_beli
 * @property float|null $jumlah
 * @property float|null $jumlah_stok
 * @property float|null $total
 *
 * @property Databarang $kodeBrng
 */
class Tampbeli1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tampbeli1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng'], 'required'],
            [['h_beli', 'jumlah', 'jumlah_stok', 'total'], 'number'],
            [['kode_brng'], 'string', 'max' => 15],
            [['nama_brng'], 'string', 'max' => 100],
            [['satuan', 'satuan_stok'], 'string', 'max' => 10],
            [['kode_brng'], 'unique'],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_brng' => 'Kode Brng',
            'nama_brng' => 'Nama Brng',
            'satuan' => 'Satuan',
            'satuan_stok' => 'Satuan Stok',
            'h_beli' => 'H Beli',
            'jumlah' => 'Jumlah',
            'jumlah_stok' => 'Jumlah Stok',
            'total' => 'Total',
        ];
    }

    /**
     * Gets query for [[KodeBrng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrng()
    {
        return $this->hasOne(Databarang::class, ['kode_brng' => 'kode_brng']);
    }
}
