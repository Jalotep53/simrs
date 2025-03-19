<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "temporary_surveilens_penyakit".
 *
 * @property string $kd_penyakit
 * @property string $kd_penyakit2
 *
 * @property Penyakit $kdPenyakit
 * @property Penyakit $kdPenyakit2
 */
class TemporarySurveilensPenyakit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'temporary_surveilens_penyakit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_penyakit', 'kd_penyakit2'], 'required'],
            [['kd_penyakit', 'kd_penyakit2'], 'string', 'max' => 15],
            [['kd_penyakit'], 'exist', 'skipOnError' => true, 'targetClass' => Penyakit::class, 'targetAttribute' => ['kd_penyakit' => 'kd_penyakit']],
            [['kd_penyakit2'], 'exist', 'skipOnError' => true, 'targetClass' => Penyakit::class, 'targetAttribute' => ['kd_penyakit2' => 'kd_penyakit']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_penyakit' => 'Kd Penyakit',
            'kd_penyakit2' => 'Kd Penyakit2',
        ];
    }

    /**
     * Gets query for [[KdPenyakit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPenyakit()
    {
        return $this->hasOne(Penyakit::class, ['kd_penyakit' => 'kd_penyakit']);
    }

    /**
     * Gets query for [[KdPenyakit2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPenyakit2()
    {
        return $this->hasOne(Penyakit::class, ['kd_penyakit' => 'kd_penyakit2']);
    }
}
