<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "log_dukcapil_aceh".
 *
 * @property string $no_ktp
 * @property string $tanggal
 * @property string $user
 */
class LogDukcapilAceh extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'log_dukcapil_aceh';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_ktp', 'tanggal', 'user'], 'required'],
            [['tanggal'], 'safe'],
            [['no_ktp'], 'string', 'max' => 20],
            [['user'], 'string', 'max' => 30],
            [['no_ktp', 'tanggal', 'user'], 'unique', 'targetAttribute' => ['no_ktp', 'tanggal', 'user']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_ktp' => 'No Ktp',
            'tanggal' => 'Tanggal',
            'user' => 'User',
        ];
    }
}
