<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inhealth_maping_poli".
 *
 * @property string $kd_poli_rs
 * @property string|null $kd_poli_inhealth
 * @property string|null $nm_poli_inhealth
 *
 * @property Poliklinik $kdPoliRs
 */
class InhealthMapingPoli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inhealth_maping_poli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_poli_rs'], 'required'],
            [['kd_poli_rs'], 'string', 'max' => 5],
            [['kd_poli_inhealth'], 'string', 'max' => 15],
            [['nm_poli_inhealth'], 'string', 'max' => 40],
            [['kd_poli_rs'], 'unique'],
            [['kd_poli_rs'], 'exist', 'skipOnError' => true, 'targetClass' => Poliklinik::class, 'targetAttribute' => ['kd_poli_rs' => 'kd_poli']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_poli_rs' => 'Kd Poli Rs',
            'kd_poli_inhealth' => 'Kd Poli Inhealth',
            'nm_poli_inhealth' => 'Nm Poli Inhealth',
        ];
    }

    /**
     * Gets query for [[KdPoliRs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPoliRs()
    {
        return $this->hasOne(Poliklinik::class, ['kd_poli' => 'kd_poli_rs']);
    }
}
