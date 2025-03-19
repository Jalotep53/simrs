<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "suku_bangsa".
 *
 * @property int $id
 * @property string|null $nama_suku_bangsa
 *
 * @property Pasien[] $pasiens
 */
class SukuBangsa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'suku_bangsa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_suku_bangsa'], 'string', 'max' => 30],
            [['nama_suku_bangsa'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_suku_bangsa' => 'Nama Suku Bangsa',
        ];
    }

    /**
     * Gets query for [[Pasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasiens()
    {
        return $this->hasMany(Pasien::class, ['suku_bangsa' => 'id']);
    }
}
