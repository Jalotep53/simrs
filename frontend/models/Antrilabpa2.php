<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "antrilabpa2".
 *
 * @property string|null $status
 */
class Antrilabpa2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'antrilabpa2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'status' => 'Status',
        ];
    }
}
