<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bahasa_pasien".
 *
 * @property int $id
 * @property string|null $nama_bahasa
 *
 * @property Pasien[] $pasiens
 */
class BahasaPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bahasa_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_bahasa'], 'string', 'max' => 30],
            [['nama_bahasa'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_bahasa' => 'Nama Bahasa',
        ];
    }

    /**
     * Gets query for [[Pasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasiens()
    {
        return $this->hasMany(Pasien::class, ['bahasa_pasien' => 'id']);
    }
}
