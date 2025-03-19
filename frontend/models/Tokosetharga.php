<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tokosetharga".
 *
 * @property float $distributor
 * @property float $grosir
 * @property float $retail
 */
class Tokosetharga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tokosetharga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['distributor', 'grosir', 'retail'], 'required'],
            [['distributor', 'grosir', 'retail'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'distributor' => 'Distributor',
            'grosir' => 'Grosir',
            'retail' => 'Retail',
        ];
    }
}
