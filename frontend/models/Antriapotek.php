<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "antriapotek".
 *
 * @property int $loket
 * @property int $antrian
 */
class Antriapotek extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'antriapotek';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['loket', 'antrian'], 'required'],
            [['loket', 'antrian'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'loket' => 'Loket',
            'antrian' => 'Antrian',
        ];
    }
}
