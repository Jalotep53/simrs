<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jam_masuk".
 *
 * @property string $shift
 * @property string $jam_masuk
 * @property string $jam_pulang
 */
class JamMasuk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jam_masuk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shift', 'jam_masuk', 'jam_pulang'], 'required'],
            [['shift'], 'string'],
            [['jam_masuk', 'jam_pulang'], 'safe'],
            [['shift'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'shift' => 'Shift',
            'jam_masuk' => 'Jam Masuk',
            'jam_pulang' => 'Jam Pulang',
        ];
    }
}
