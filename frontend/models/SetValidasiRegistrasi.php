<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_validasi_registrasi".
 *
 * @property string|null $wajib_closing_kasir
 */
class SetValidasiRegistrasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_validasi_registrasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['wajib_closing_kasir'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'wajib_closing_kasir' => 'Wajib Closing Kasir',
        ];
    }
}
