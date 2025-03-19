<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "parkir_barcode".
 *
 * @property string $kode_barcode
 * @property string $nomer_kartu
 */
class ParkirBarcode extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parkir_barcode';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_barcode', 'nomer_kartu'], 'required'],
            [['kode_barcode'], 'string', 'max' => 15],
            [['nomer_kartu'], 'string', 'max' => 5],
            [['nomer_kartu'], 'unique'],
            [['kode_barcode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_barcode' => 'Kode Barcode',
            'nomer_kartu' => 'Nomer Kartu',
        ];
    }
}
