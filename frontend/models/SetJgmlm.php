<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_jgmlm".
 *
 * @property float $tnj
 */
class SetJgmlm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_jgmlm';
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
