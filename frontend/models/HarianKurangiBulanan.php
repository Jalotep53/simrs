<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "harian_kurangi_bulanan".
 *
 * @property int $harian
 * @property int $bulanan
 */
class HarianKurangiBulanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'harian_kurangi_bulanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['harian', 'bulanan'], 'required'],
            [['harian', 'bulanan'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'harian' => 'Harian',
            'bulanan' => 'Bulanan',
        ];
    }
}
