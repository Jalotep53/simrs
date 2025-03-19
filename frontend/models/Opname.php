<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "opname".
 *
 * @property string $kode_brng
 * @property float|null $h_beli
 * @property string $tanggal
 * @property float $stok
 * @property float $real
 * @property float $selisih
 * @property float $nomihilang
 * @property float $lebih
 * @property float $nomilebih
 * @property string $keterangan
 * @property string $kd_bangsal
 * @property string $no_batch
 * @property string $no_faktur
 *
 * @property Bangsal $kdBangsal
 * @property Databarang $kodeBrng
 */
class Opname extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'opname';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'tanggal', 'stok', 'real', 'selisih', 'nomihilang', 'lebih', 'nomilebih', 'keterangan', 'kd_bangsal', 'no_batch', 'no_faktur'], 'required'],
            [['h_beli', 'stok', 'real', 'selisih', 'nomihilang', 'lebih', 'nomilebih'], 'number'],
            [['tanggal'], 'safe'],
            [['kode_brng'], 'string', 'max' => 15],
            [['keterangan'], 'string', 'max' => 60],
            [['kd_bangsal'], 'string', 'max' => 5],
            [['no_batch', 'no_faktur'], 'string', 'max' => 20],
            [['kode_brng', 'tanggal', 'kd_bangsal', 'no_batch', 'no_faktur'], 'unique', 'targetAttribute' => ['kode_brng', 'tanggal', 'kd_bangsal', 'no_batch', 'no_faktur']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_brng' => 'Kode Brng',
            'h_beli' => 'H Beli',
            'tanggal' => 'Tanggal',
            'stok' => 'Stok',
            'real' => 'Real',
            'selisih' => 'Selisih',
            'nomihilang' => 'Nomihilang',
            'lebih' => 'Lebih',
            'nomilebih' => 'Nomilebih',
            'keterangan' => 'Keterangan',
            'kd_bangsal' => 'Kd Bangsal',
            'no_batch' => 'No Batch',
            'no_faktur' => 'No Faktur',
        ];
    }

    /**
     * Gets query for [[KdBangsal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdBangsal()
    {
        return $this->hasOne(Bangsal::class, ['kd_bangsal' => 'kd_bangsal']);
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
