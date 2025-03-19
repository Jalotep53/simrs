<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_lemburhr".
 *
 * @property float $tnj
 */
class SetLemburhr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_lemburhr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tnj'], 'required'],
            [['tnj'], 'number'],
            [['tnj'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tnj' => 'Tnj',
        ];
    }
}
