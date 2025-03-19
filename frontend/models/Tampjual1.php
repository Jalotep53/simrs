<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tampjual1".
 *
 * @property string $kode_brng
 * @property string|null $nama_brng
 * @property string|null $satuan
 * @property float|null $h_jual
 * @property float $h_beli
 * @property float|null $jumlah
 * @property float|null $subtotal
 * @property float|null $dis
 * @property float|null $bsr_dis
 * @property float|null $total
 *
 * @property Databarang $kodeBrng
 */
class Tampjual1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tampjual1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'h_beli'], 'required'],
            [['h_jual', 'h_beli', 'jumlah', 'subtotal', 'dis', 'bsr_dis', 'total'], 'number'],
            [['kode_brng'], 'string', 'max' => 15],
            [['nama_brng'], 'string', 'max' => 100],
            [['satuan'], 'string', 'max' => 10],
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
            'h_jual' => 'H Jual',
            'h_beli' => 'H Beli',
            'jumlah' => 'Jumlah',
            'subtotal' => 'Subtotal',
            'dis' => 'Dis',
            'bsr_dis' => 'Bsr Dis',
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
