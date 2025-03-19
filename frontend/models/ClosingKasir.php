<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "closing_kasir".
 *
 * @property string $shift
 * @property string $jam_masuk
 * @property string $jam_pulang
 */
class ClosingKasir extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'closing_kasir';
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
