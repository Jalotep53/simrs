<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "gambar".
 *
 * @property int $inde
 * @property resource $bpjs
 * @property resource $nyeri
 * @property resource $inhealth
 */
class Gambar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gambar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inde', 'bpjs', 'nyeri', 'inhealth'], 'required'],
            [['inde'], 'integer'],
            [['bpjs', 'nyeri', 'inhealth'], 'string'],
            [['inde'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'inde' => 'Inde',
            'bpjs' => 'Bpjs',
            'nyeri' => 'Nyeri',
            'inhealth' => 'Inhealth',
        ];
    }
}
