<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jam_jaga".
 *
 * @property int $no_id
 * @property string $dep_id
 * @property string $shift
 * @property string $jam_masuk
 * @property string $jam_pulang
 *
 * @property Departemen $dep
 */
class JamJaga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jam_jaga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dep_id', 'shift', 'jam_masuk', 'jam_pulang'], 'required'],
            [['shift'], 'string'],
            [['jam_masuk', 'jam_pulang'], 'safe'],
            [['dep_id'], 'string', 'max' => 4],
            [['dep_id', 'shift'], 'unique', 'targetAttribute' => ['dep_id', 'shift']],
            [['dep_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departemen::class, 'targetAttribute' => ['dep_id' => 'dep_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_id' => 'No ID',
            'dep_id' => 'Dep ID',
            'shift' => 'Shift',
            'jam_masuk' => 'Jam Masuk',
            'jam_pulang' => 'Jam Pulang',
        ];
    }

    /**
     * Gets query for [[Dep]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDep()
    {
        return $this->hasOne(Departemen::class, ['dep_id' => 'dep_id']);
    }
}
