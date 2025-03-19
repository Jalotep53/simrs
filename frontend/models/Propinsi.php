<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "propinsi".
 *
 * @property int $kd_prop
 * @property string $nm_prop
 *
 * @property Pasien[] $pasiens
 * @property UtdPendonor[] $utdPendonors
 */
class Propinsi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'propinsi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nm_prop'], 'required'],
            [['nm_prop'], 'string', 'max' => 30],
            [['nm_prop'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_prop' => 'Kd Prop',
            'nm_prop' => 'Nm Prop',
        ];
    }

    /**
     * Gets query for [[Pasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasiens()
    {
        return $this->hasMany(Pasien::class, ['kd_prop' => 'kd_prop']);
    }

    /**
     * Gets query for [[UtdPendonors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPendonors()
    {
        return $this->hasMany(UtdPendonor::class, ['kd_prop' => 'kd_prop']);
    }
}
