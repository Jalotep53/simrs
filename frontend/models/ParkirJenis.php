<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "parkir_jenis".
 *
 * @property string $kd_parkir
 * @property string $jns_parkir
 * @property float $biaya
 * @property string $jenis
 *
 * @property Parkir[] $parkirs
 */
class ParkirJenis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parkir_jenis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_parkir', 'jns_parkir', 'biaya', 'jenis'], 'required'],
            [['biaya'], 'number'],
            [['jenis'], 'string'],
            [['kd_parkir'], 'string', 'max' => 5],
            [['jns_parkir'], 'string', 'max' => 50],
            [['kd_parkir'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_parkir' => 'Kd Parkir',
            'jns_parkir' => 'Jns Parkir',
            'biaya' => 'Biaya',
            'jenis' => 'Jenis',
        ];
    }

    /**
     * Gets query for [[Parkirs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParkirs()
    {
        return $this->hasMany(Parkir::class, ['kd_parkir' => 'kd_parkir']);
    }
}
