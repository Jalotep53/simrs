<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kabupaten".
 *
 * @property int $kd_kab
 * @property string $nm_kab
 *
 * @property Pasien[] $pasiens
 * @property UtdPendonor[] $utdPendonors
 */
class Kabupaten extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kabupaten';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nm_kab'], 'required'],
            [['nm_kab'], 'string', 'max' => 60],
            [['nm_kab'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_kab' => 'Kd Kab',
            'nm_kab' => 'Nm Kab',
        ];
    }

    /**
     * Gets query for [[Pasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasiens()
    {
        return $this->hasMany(Pasien::class, ['kd_kab' => 'kd_kab']);
    }

    /**
     * Gets query for [[UtdPendonors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPendonors()
    {
        return $this->hasMany(UtdPendonor::class, ['kd_kab' => 'kd_kab']);
    }
}
