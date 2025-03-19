<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_embalase".
 *
 * @property float $embalase_per_obat
 * @property float|null $tuslah_per_obat
 */
class SetEmbalase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_embalase';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['embalase_per_obat'], 'required'],
            [['embalase_per_obat', 'tuslah_per_obat'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'embalase_per_obat' => 'Embalase Per Obat',
            'tuslah_per_obat' => 'Tuslah Per Obat',
        ];
    }
}
