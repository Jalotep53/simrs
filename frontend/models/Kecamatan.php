<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kecamatan".
 *
 * @property int $kd_kec
 * @property string $nm_kec
 *
 * @property Pasien[] $pasiens
 * @property UtdPendonor[] $utdPendonors
 */
class Kecamatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kecamatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nm_kec'], 'required'],
            [['nm_kec'], 'string', 'max' => 60],
            [['nm_kec'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_kec' => 'Kd Kec',
            'nm_kec' => 'Nm Kec',
        ];
    }

    /**
     * Gets query for [[Pasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasiens()
    {
        return $this->hasMany(Pasien::class, ['kd_kec' => 'kd_kec']);
    }

    /**
     * Gets query for [[UtdPendonors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPendonors()
    {
        return $this->hasMany(UtdPendonor::class, ['kd_kec' => 'kd_kec']);
    }
}
