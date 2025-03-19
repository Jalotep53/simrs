<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tambahanpotongan".
 *
 * @property string $indexins
 * @property float $potongan
 */
class Tambahanpotongan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tambahanpotongan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['indexins', 'potongan'], 'required'],
            [['potongan'], 'number'],
            [['indexins'], 'string', 'max' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'indexins' => 'Indexins',
            'potongan' => 'Potongan',
        ];
    }
}
