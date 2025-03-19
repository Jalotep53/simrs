<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "perkiraan_biaya_ranap".
 *
 * @property string $no_rawat
 * @property string $kd_penyakit
 * @property float $tarif
 *
 * @property Penyakit $kdPenyakit
 * @property RegPeriksa $noRawat
 */
class PerkiraanBiayaRanap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perkiraan_biaya_ranap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kd_penyakit', 'tarif'], 'required'],
            [['tarif'], 'number'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_penyakit'], 'string', 'max' => 15],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_penyakit'], 'exist', 'skipOnError' => true, 'targetClass' => Penyakit::class, 'targetAttribute' => ['kd_penyakit' => 'kd_penyakit']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'kd_penyakit' => 'Kd Penyakit',
            'tarif' => 'Tarif',
        ];
    }

    /**
     * Gets query for [[KdPenyakit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPenyakit()
    {
        return $this->hasOne(Penyakit::class, ['kd_penyakit' => 'kd_penyakit']);
    }

    /**
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
