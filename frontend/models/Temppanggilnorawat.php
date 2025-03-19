<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "temppanggilnorawat".
 *
 * @property string $no_rawat
 */
class Temppanggilnorawat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'temppanggilnorawat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat'], 'required'],
            [['no_rawat'], 'string', 'max' => 17],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
        ];
    }
}
