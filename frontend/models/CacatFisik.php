<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cacat_fisik".
 *
 * @property int $id
 * @property string $nama_cacat
 *
 * @property Pasien[] $pasiens
 */
class CacatFisik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cacat_fisik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_cacat'], 'required'],
            [['nama_cacat'], 'string', 'max' => 30],
            [['nama_cacat'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_cacat' => 'Nama Cacat',
        ];
    }

    /**
     * Gets query for [[Pasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasiens()
    {
        return $this->hasMany(Pasien::class, ['cacat_fisik' => 'id']);
    }
}
