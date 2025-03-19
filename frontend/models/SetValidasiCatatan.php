<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_validasi_catatan".
 *
 * @property string|null $tampilkan_catatan
 */
class SetValidasiCatatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_validasi_catatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tampilkan_catatan'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tampilkan_catatan' => 'Tampilkan Catatan',
        ];
    }
}
