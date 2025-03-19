<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_tni_polri".
 *
 * @property string $tampilkan_tni_polri
 */
class SetTniPolri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_tni_polri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tampilkan_tni_polri'], 'required'],
            [['tampilkan_tni_polri'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tampilkan_tni_polri' => 'Tampilkan Tni Polri',
        ];
    }
}
