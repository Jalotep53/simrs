<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tracker".
 *
 * @property string $nip
 * @property string $tgl_login
 * @property string $jam_login
 */
class Tracker extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tracker';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'tgl_login', 'jam_login'], 'required'],
            [['tgl_login', 'jam_login'], 'safe'],
            [['nip'], 'string', 'max' => 20],
            [['nip', 'tgl_login', 'jam_login'], 'unique', 'targetAttribute' => ['nip', 'tgl_login', 'jam_login']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nip' => 'Nip',
            'tgl_login' => 'Tgl Login',
            'jam_login' => 'Jam Login',
        ];
    }
}
