<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_jgtambah".
 *
 * @property float $tnj
 * @property string $pendidikan
 *
 * @property Pendidikan $pendidikan0
 */
class SetJgtambah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_jgtambah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tnj', 'pendidikan'], 'required'],
            [['tnj'], 'number'],
            [['pendidikan'], 'string', 'max' => 80],
            [['pendidikan'], 'unique'],
            [['pendidikan'], 'exist', 'skipOnError' => true, 'targetClass' => Pendidikan::class, 'targetAttribute' => ['pendidikan' => 'tingkat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tnj' => 'Tnj',
            'pendidikan' => 'Pendidikan',
        ];
    }

    /**
     * Gets query for [[Pendidikan0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPendidikan0()
    {
        return $this->hasOne(Pendidikan::class, ['tingkat' => 'pendidikan']);
    }
}
