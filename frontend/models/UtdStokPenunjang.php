<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "utd_stok_penunjang".
 *
 * @property string $kode_brng
 * @property float|null $stok
 * @property float|null $hargaterakhir
 *
 * @property Ipsrsbarang $kodeBrng
 */
class UtdStokPenunjang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'utd_stok_penunjang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng'], 'required'],
            [['stok', 'hargaterakhir'], 'number'],
            [['kode_brng'], 'string', 'max' => 15],
            [['kode_brng'], 'unique'],
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
            'stok' => 'Stok',
            'hargaterakhir' => 'Hargaterakhir',
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
