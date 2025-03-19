<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_harga_kamar".
 *
 * @property string $kd_kamar
 * @property string $kd_pj
 * @property float $tarif
 *
 * @property Kamar $kdKamar
 * @property Penjab $kdPj
 */
class SetHargaKamar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_harga_kamar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_kamar', 'kd_pj', 'tarif'], 'required'],
            [['tarif'], 'number'],
            [['kd_kamar'], 'string', 'max' => 15],
            [['kd_pj'], 'string', 'max' => 3],
            [['kd_kamar', 'kd_pj'], 'unique', 'targetAttribute' => ['kd_kamar', 'kd_pj']],
            [['kd_kamar'], 'exist', 'skipOnError' => true, 'targetClass' => Kamar::class, 'targetAttribute' => ['kd_kamar' => 'kd_kamar']],
            [['kd_pj'], 'exist', 'skipOnError' => true, 'targetClass' => Penjab::class, 'targetAttribute' => ['kd_pj' => 'kd_pj']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_kamar' => 'Kd Kamar',
            'kd_pj' => 'Kd Pj',
            'tarif' => 'Tarif',
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

    /**
     * Gets query for [[KdPj]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPj()
    {
        return $this->hasOne(Penjab::class, ['kd_pj' => 'kd_pj']);
    }
}
