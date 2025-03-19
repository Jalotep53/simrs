<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "asuransi".
 *
 * @property string $stts
 * @property float $biaya
 */
class Asuransi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asuransi';
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
}
