<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dansos".
 *
 * @property float $dana
 */
class Dansos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dansos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dana'], 'required'],
            [['dana'], 'number'],
            [['dana'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dana' => 'Dana',
        ];
    }
}
