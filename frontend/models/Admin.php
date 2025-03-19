<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property string|null $usere
 * @property string|null $passworde
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usere', 'passworde'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'usere' => 'Usere',
            'passworde' => 'Passworde',
        ];
    }
}
