<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_depo_ralan".
 *
 * @property string $kd_poli
 * @property string $kd_bangsal
 *
 * @property Bangsal $kdBangsal
 * @property Poliklinik $kdPoli
 */
class SetDepoRalan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_depo_ralan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_poli', 'kd_bangsal'], 'required'],
            [['kd_poli', 'kd_bangsal'], 'string', 'max' => 5],
            [['kd_poli', 'kd_bangsal'], 'unique', 'targetAttribute' => ['kd_poli', 'kd_bangsal']],
            [['kd_poli'], 'exist', 'skipOnError' => true, 'targetClass' => Poliklinik::class, 'targetAttribute' => ['kd_poli' => 'kd_poli']],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_poli' => 'Kd Poli',
            'kd_bangsal' => 'Kd Bangsal',
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
     * Gets query for [[KdPoli]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPoli()
    {
        return $this->hasOne(Poliklinik::class, ['kd_poli' => 'kd_poli']);
    }
}
