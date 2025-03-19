<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jenis".
 *
 * @property string $kdjns
 * @property string $nama
 * @property string $keterangan
 *
 * @property Databarang[] $databarangs
 * @property Setpenjualan $setpenjualan
 */
class Jenis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kdjns', 'nama', 'keterangan'], 'required'],
            [['kdjns'], 'string', 'max' => 4],
            [['nama'], 'string', 'max' => 30],
            [['keterangan'], 'string', 'max' => 50],
            [['kdjns'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kdjns' => 'Kdjns',
            'nama' => 'Nama',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[Databarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDatabarangs()
    {
        return $this->hasMany(Databarang::class, ['kdjns' => 'kdjns']);
    }

    /**
     * Gets query for [[Setpenjualan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetpenjualan()
    {
        return $this->hasOne(Setpenjualan::class, ['kdjns' => 'kdjns']);
    }
}
