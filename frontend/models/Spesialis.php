<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "spesialis".
 *
 * @property string $kd_sps
 * @property string|null $nm_sps
 *
 * @property Dokter[] $dokters
 */
class Spesialis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spesialis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_sps'], 'required'],
            [['kd_sps'], 'string', 'max' => 5],
            [['nm_sps'], 'string', 'max' => 30],
            [['kd_sps'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_sps' => 'Kd Sps',
            'nm_sps' => 'Nm Sps',
        ];
    }

    /**
     * Gets query for [[Dokters]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDokters()
    {
        return $this->hasMany(Dokter::class, ['kd_sps' => 'kd_sps']);
    }
}
