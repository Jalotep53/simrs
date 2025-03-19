<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "metode_racik".
 *
 * @property string $kd_racik
 * @property string $nm_racik
 *
 * @property ObatRacikanJual[] $obatRacikanJuals
 * @property ObatRacikan[] $obatRacikans
 * @property ResepDokterRacikan[] $resepDokterRacikans
 * @property ResepLuarRacikan[] $resepLuarRacikans
 * @property TemplatePemeriksaanDokterResepRacikan[] $templatePemeriksaanDokterResepRacikans
 */
class MetodeRacik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'metode_racik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_racik', 'nm_racik'], 'required'],
            [['kd_racik'], 'string', 'max' => 3],
            [['nm_racik'], 'string', 'max' => 30],
            [['kd_racik'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_racik' => 'Kd Racik',
            'nm_racik' => 'Nm Racik',
        ];
    }

    /**
     * Gets query for [[ObatRacikanJuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObatRacikanJuals()
    {
        return $this->hasMany(ObatRacikanJual::class, ['kd_racik' => 'kd_racik']);
    }

    /**
     * Gets query for [[ObatRacikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObatRacikans()
    {
        return $this->hasMany(ObatRacikan::class, ['kd_racik' => 'kd_racik']);
    }

    /**
     * Gets query for [[ResepDokterRacikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResepDokterRacikans()
    {
        return $this->hasMany(ResepDokterRacikan::class, ['kd_racik' => 'kd_racik']);
    }

    /**
     * Gets query for [[ResepLuarRacikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResepLuarRacikans()
    {
        return $this->hasMany(ResepLuarRacikan::class, ['kd_racik' => 'kd_racik']);
    }

    /**
     * Gets query for [[TemplatePemeriksaanDokterResepRacikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplatePemeriksaanDokterResepRacikans()
    {
        return $this->hasMany(TemplatePemeriksaanDokterResepRacikan::class, ['kd_racik' => 'kd_racik']);
    }
}
