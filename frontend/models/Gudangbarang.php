<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "gudangbarang".
 *
 * @property string $kode_brng
 * @property string $kd_bangsal
 * @property float $stok
 * @property string $no_batch
 * @property string $no_faktur
 *
 * @property Bangsal $kdBangsal
 * @property Databarang $kodeBrng
 */
class Gudangbarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gudangbarang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'kd_bangsal', 'stok', 'no_batch', 'no_faktur'], 'required'],
            [['stok'], 'number'],
            [['kode_brng'], 'string', 'max' => 15],
            [['kd_bangsal'], 'string', 'max' => 5],
            [['no_batch', 'no_faktur'], 'string', 'max' => 20],
            [['kode_brng', 'kd_bangsal', 'no_batch', 'no_faktur'], 'unique', 'targetAttribute' => ['kode_brng', 'kd_bangsal', 'no_batch', 'no_faktur']],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
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
            'kd_bangsal' => 'Kd Bangsal',
            'stok' => 'Stok',
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
