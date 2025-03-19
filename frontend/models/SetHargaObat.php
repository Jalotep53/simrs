<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_harga_obat".
 *
 * @property string $setharga
 * @property string $hargadasar
 * @property string $ppn
 */
class SetHargaObat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_harga_obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['setharga', 'hargadasar', 'ppn'], 'required'],
            [['setharga', 'hargadasar', 'ppn'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'setharga' => 'Setharga',
            'hargadasar' => 'Hargadasar',
            'ppn' => 'Ppn',
        ];
    }
}
