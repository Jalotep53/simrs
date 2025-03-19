<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_modal_payment".
 *
 * @property float|null $modal_awal
 */
class SetModalPayment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_modal_payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['modal_awal'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'modal_awal' => 'Modal Awal',
        ];
    }
}
