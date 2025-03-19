<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "biaya_sekali".
 *
 * @property string $kd_kamar
 * @property string $nama_biaya
 * @property float $besar_biaya
 *
 * @property Kamar $kdKamar
 */
class BiayaSekali extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'biaya_sekali';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_kamar', 'nama_biaya', 'besar_biaya'], 'required'],
            [['besar_biaya'], 'number'],
            [['kd_kamar'], 'string', 'max' => 15],
            [['nama_biaya'], 'string', 'max' => 50],
            [['kd_kamar', 'nama_biaya'], 'unique', 'targetAttribute' => ['kd_kamar', 'nama_biaya']],
            [['kd_kamar'], 'exist', 'skipOnError' => true, 'targetClass' => Kamar::class, 'targetAttribute' => ['kd_kamar' => 'kd_kamar']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_kamar' => 'Kd Kamar',
            'nama_biaya' => 'Nama Biaya',
            'besar_biaya' => 'Besar Biaya',
        ];
    }

    /**
     * Gets query for [[KdKamar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdKamar()
    {
        return $this->hasOne(Kamar::class, ['kd_kamar' => 'kd_kamar']);
    }
}
