<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_depo_ranap".
 *
 * @property string $kd_bangsal
 * @property string $kd_depo
 *
 * @property Bangsal $kdBangsal
 * @property Bangsal $kdDepo
 */
class SetDepoRanap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_depo_ranap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_bangsal', 'kd_depo'], 'required'],
            [['kd_bangsal', 'kd_depo'], 'string', 'max' => 5],
            [['kd_bangsal', 'kd_depo'], 'unique', 'targetAttribute' => ['kd_bangsal', 'kd_depo']],
            [['kd_depo'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_depo' => 'kd_bangsal']],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_bangsal' => 'Kd Bangsal',
            'kd_depo' => 'Kd Depo',
        ];
    }

    /**
     * Gets query for [[KdBangsal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdBangsal()
    {
        return $this->hasOne(Bangsal::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[KdDepo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDepo()
    {
        return $this->hasOne(Bangsal::class, ['kd_bangsal' => 'kd_depo']);
    }
}
