<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "antriaps".
 *
 * @property string|null $no_pernyataan
 * @property string $no_rawat
 */
class Antriaps extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'antriaps';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat'], 'required'],
            [['no_pernyataan'], 'string', 'max' => 20],
            [['no_rawat'], 'string', 'max' => 17],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_pernyataan' => 'No Pernyataan',
            'no_rawat' => 'No Rawat',
        ];
    }
}
