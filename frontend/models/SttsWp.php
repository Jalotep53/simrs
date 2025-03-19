<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "stts_wp".
 *
 * @property string $stts
 * @property string $ktg
 *
 * @property Pegawai[] $pegawais
 */
class SttsWp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stts_wp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stts', 'ktg'], 'required'],
            [['stts'], 'string', 'max' => 5],
            [['ktg'], 'string', 'max' => 50],
            [['stts'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'stts' => 'Stts',
            'ktg' => 'Ktg',
        ];
    }

    /**
     * Gets query for [[Pegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais()
    {
        return $this->hasMany(Pegawai::class, ['stts_wp' => 'stts']);
    }
}
