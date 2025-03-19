<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "antriloketcetak".
 *
 * @property string $tanggal
 * @property string|null $jam
 * @property string $nomor
 */
class Antriloketcetak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'antriloketcetak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'nomor'], 'required'],
            [['tanggal', 'jam'], 'safe'],
            [['nomor'], 'string', 'max' => 4],
            [['tanggal', 'nomor'], 'unique', 'targetAttribute' => ['tanggal', 'nomor']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tanggal' => 'Tanggal',
            'jam' => 'Jam',
            'nomor' => 'Nomor',
        ];
    }
}
