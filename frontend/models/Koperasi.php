<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "koperasi".
 *
 * @property string $stts
 * @property float $wajib
 *
 * @property Keanggotaan[] $keanggotaans
 */
class Koperasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'koperasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stts', 'wajib'], 'required'],
            [['wajib'], 'number'],
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
            'wajib' => 'Wajib',
        ];
    }

    /**
     * Gets query for [[Keanggotaans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeanggotaans()
    {
        return $this->hasMany(Keanggotaan::class, ['koperasi' => 'stts']);
    }
}
