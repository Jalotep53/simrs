<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penyakit_pd3i".
 *
 * @property string $kd_penyakit
 *
 * @property Penyakit $kdPenyakit
 */
class PenyakitPd3i extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penyakit_pd3i';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_penyakit'], 'required'],
            [['kd_penyakit'], 'string', 'max' => 15],
            [['kd_penyakit'], 'unique'],
            [['kd_penyakit'], 'exist', 'skipOnError' => true, 'targetClass' => Penyakit::class, 'targetAttribute' => ['kd_penyakit' => 'kd_penyakit']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_penyakit' => 'Kd Penyakit',
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
}
