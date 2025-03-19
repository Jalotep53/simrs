<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "antriloket".
 *
 * @property int $loket
 * @property int $antrian
 */
class Antriloket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'antriloket';
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
