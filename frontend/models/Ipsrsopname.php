<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ipsrsopname".
 *
 * @property string $kode_brng
 * @property float|null $h_beli
 * @property string $tanggal
 * @property int $stok
 * @property int $real
 * @property int $selisih
 * @property float $nomihilang
 * @property int $lebih
 * @property float $nomilebih
 * @property string $keterangan
 *
 * @property Ipsrsbarang $kodeBrng
 */
class Ipsrsopname extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ipsrsopname';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'tanggal', 'stok', 'real', 'selisih', 'nomihilang', 'lebih', 'nomilebih', 'keterangan'], 'required'],
            [['h_beli', 'nomihilang', 'nomilebih'], 'number'],
            [['tanggal'], 'safe'],
            [['stok', 'real', 'selisih', 'lebih'], 'integer'],
            [['kode_brng'], 'string', 'max' => 15],
            [['keterangan'], 'string', 'max' => 60],
            [['kode_brng', 'tanggal'], 'unique', 'targetAttribute' => ['kode_brng', 'tanggal']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Ipsrsbarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
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
        ];
    }

    /**
     * Gets query for [[KodeBrng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrng()
    {
        return $this->hasOne(Ipsrsbarang::class, ['kode_brng' => 'kode_brng']);
    }
}
