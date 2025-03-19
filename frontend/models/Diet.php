<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "diet".
 *
 * @property string $kd_diet
 * @property string $nama_diet
 *
 * @property DetailBeriDiet[] $detailBeriDiets
 */
class Diet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'diet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_diet', 'nama_diet'], 'required'],
            [['kd_diet'], 'string', 'max' => 3],
            [['nama_diet'], 'string', 'max' => 50],
            [['kd_diet'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_diet' => 'Kd Diet',
            'nama_diet' => 'Nama Diet',
        ];
    }

    /**
     * Gets query for [[DetailBeriDiets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailBeriDiets()
    {
        return $this->hasMany(DetailBeriDiet::class, ['kd_diet' => 'kd_diet']);
    }
}
