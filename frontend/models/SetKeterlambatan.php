<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_keterlambatan".
 *
 * @property int|null $toleransi
 * @property int|null $terlambat1
 * @property int|null $terlambat2
 */
class SetKeterlambatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_keterlambatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['toleransi', 'terlambat1', 'terlambat2'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'toleransi' => 'Toleransi',
            'terlambat1' => 'Terlambat1',
            'terlambat2' => 'Terlambat2',
        ];
    }
}
