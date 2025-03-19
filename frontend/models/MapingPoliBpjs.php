<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "maping_poli_bpjs".
 *
 * @property string $kd_poli_rs
 * @property string $kd_poli_bpjs
 * @property string $nm_poli_bpjs
 *
 * @property Poliklinik $kdPoliRs
 */
class MapingPoliBpjs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maping_poli_bpjs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_poli_rs', 'kd_poli_bpjs', 'nm_poli_bpjs'], 'required'],
            [['kd_poli_rs'], 'string', 'max' => 5],
            [['kd_poli_bpjs'], 'string', 'max' => 15],
            [['nm_poli_bpjs'], 'string', 'max' => 40],
            [['kd_poli_bpjs'], 'unique'],
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
            'kd_poli_bpjs' => 'Kd Poli Bpjs',
            'nm_poli_bpjs' => 'Nm Poli Bpjs',
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
