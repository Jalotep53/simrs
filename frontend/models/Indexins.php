<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "indexins".
 *
 * @property string $dep_id
 * @property float $persen
 *
 * @property Departemen $dep
 */
class Indexins extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'indexins';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dep_id', 'persen'], 'required'],
            [['persen'], 'number'],
            [['dep_id'], 'string', 'max' => 4],
            [['dep_id'], 'unique'],
            [['dep_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departemen::class, 'targetAttribute' => ['dep_id' => 'dep_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dep_id' => 'Dep ID',
            'persen' => 'Persen',
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
