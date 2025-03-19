<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "maping_poliklinik_pcare".
 *
 * @property string $kd_poli_rs
 * @property string|null $kd_poli_pcare
 * @property string|null $nm_poli_pcare
 *
 * @property Poliklinik $kdPoliRs
 */
class MapingPoliklinikPcare extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maping_poliklinik_pcare';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_poli_rs'], 'required'],
            [['kd_poli_rs', 'kd_poli_pcare'], 'string', 'max' => 5],
            [['nm_poli_pcare'], 'string', 'max' => 50],
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
            'kd_poli_pcare' => 'Kd Poli Pcare',
            'nm_poli_pcare' => 'Nm Poli Pcare',
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
