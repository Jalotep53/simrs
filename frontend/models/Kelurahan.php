<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kelurahan".
 *
 * @property int $kd_kel
 * @property string $nm_kel
 *
 * @property Pasien[] $pasiens
 * @property UtdPendonor[] $utdPendonors
 */
class Kelurahan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kelurahan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nm_kel'], 'required'],
            [['nm_kel'], 'string', 'max' => 60],
            [['nm_kel'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_kel' => 'Kd Kel',
            'nm_kel' => 'Nm Kel',
        ];
    }

    /**
     * Gets query for [[Pasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasiens()
    {
        return $this->hasMany(Pasien::class, ['kd_kel' => 'kd_kel']);
    }

    /**
     * Gets query for [[UtdPendonors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPendonors()
    {
        return $this->hasMany(UtdPendonor::class, ['kd_kel' => 'kd_kel']);
    }
}
