<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jamsostek".
 *
 * @property string $stts
 * @property float $biaya
 *
 * @property Keanggotaan[] $keanggotaans
 */
class Jamsostek extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jamsostek';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stts', 'biaya'], 'required'],
            [['biaya'], 'number'],
            [['stts'], 'string', 'max' => 5],
            [['stts'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'stts' => 'Stts',
            'biaya' => 'Biaya',
        ];
    }

    /**
     * Gets query for [[Keanggotaans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeanggotaans()
    {
        return $this->hasMany(Keanggotaan::class, ['jamsostek' => 'stts']);
    }
}
