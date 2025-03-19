<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "setsms".
 *
 * @property string $kode_sms
 * @property string|null $sintax_balasan
 */
class Setsms extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'setsms';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_sms'], 'required'],
            [['sintax_balasan'], 'string'],
            [['kode_sms'], 'string', 'max' => 200],
            [['kode_sms'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_sms' => 'Kode Sms',
            'sintax_balasan' => 'Sintax Balasan',
        ];
    }
}
