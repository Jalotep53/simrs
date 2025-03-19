<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "utd_stok_medis".
 *
 * @property string $kode_brng
 * @property float|null $stok
 * @property float|null $hargaterakhir
 *
 * @property Databarang $kodeBrng
 */
class UtdStokMedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'utd_stok_medis';
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
        return $this->hasOne(Databarang::class, ['kode_brng' => 'kode_brng']);
    }
}
