<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "data_klasifikasi_pasien_ranap".
 *
 * @property string $tanggal
 * @property string $no_rawat
 * @property string|null $Minimal
 * @property string|null $Partial
 * @property string|null $Total
 * @property string|null $kd_kamar
 *
 * @property Kamar $kdKamar
 * @property RegPeriksa $noRawat
 */
class DataKlasifikasiPasienRanap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_klasifikasi_pasien_ranap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'no_rawat'], 'required'],
            [['tanggal'], 'safe'],
            [['Minimal', 'Partial', 'Total'], 'string'],
            [['no_rawat'], 'string', 'max' => 51],
            [['kd_kamar'], 'string', 'max' => 45],
            [['tanggal', 'no_rawat'], 'unique', 'targetAttribute' => ['tanggal', 'no_rawat']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_kamar'], 'exist', 'skipOnError' => true, 'targetClass' => Kamar::class, 'targetAttribute' => ['kd_kamar' => 'kd_kamar']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tanggal' => 'Tanggal',
            'no_rawat' => 'No Rawat',
            'Minimal' => 'Minimal',
            'Partial' => 'Partial',
            'Total' => 'Total',
            'kd_kamar' => 'Kd Kamar',
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
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
