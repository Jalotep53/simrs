<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "antripengkajianrestrain".
 *
 * @property string $no_rawat
 */
class Antripengkajianrestrain extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'antripengkajianrestrain';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat'], 'required'],
            [['no_rawat'], 'string', 'max' => 17],
            [['no_rawat'], 'unique'],
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
