<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "antrilabpa".
 *
 * @property string|null $status
 */
class Antrilabpa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'antrilabpa';
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
