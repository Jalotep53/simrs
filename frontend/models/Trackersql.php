<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "trackersql".
 *
 * @property string $tanggal
 * @property string $sqle
 * @property string $usere
 */
class Trackersql extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trackersql';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'sqle', 'usere'], 'required'],
            [['tanggal'], 'safe'],
            [['sqle'], 'string'],
            [['usere'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tanggal' => 'Tanggal',
            'sqle' => 'Sqle',
            'usere' => 'Usere',
        ];
    }
}
