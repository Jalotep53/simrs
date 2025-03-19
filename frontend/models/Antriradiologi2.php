<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "antriradiologi2".
 *
 * @property string|null $status
 */
class Antriradiologi2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'antriradiologi2';
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
