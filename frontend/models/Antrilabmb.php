<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "antrilabmb".
 *
 * @property string|null $status
 */
class Antrilabmb extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'antrilabmb';
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
