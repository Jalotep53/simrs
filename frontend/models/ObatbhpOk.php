<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "obatbhp_ok".
 *
 * @property string $kd_obat
 * @property string $nm_obat
 * @property string $kode_sat
 * @property float $hargasatuan
 *
 * @property BeriObatOperasi[] $beriObatOperasis
 * @property Kodesatuan $kodeSat
 */
class ObatbhpOk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obatbhp_ok';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_obat', 'nm_obat', 'kode_sat', 'hargasatuan'], 'required'],
            [['hargasatuan'], 'number'],
            [['kd_obat'], 'string', 'max' => 15],
            [['nm_obat'], 'string', 'max' => 50],
            [['kode_sat'], 'string', 'max' => 4],
            [['kd_obat'], 'unique'],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_obat' => 'Kd Obat',
            'nm_obat' => 'Nm Obat',
            'kode_sat' => 'Kode Sat',
            'hargasatuan' => 'Hargasatuan',
        ];
    }

    /**
     * Gets query for [[BeriObatOperasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBeriObatOperasis()
    {
        return $this->hasMany(BeriObatOperasi::class, ['kd_obat' => 'kd_obat']);
    }

    /**
     * Gets query for [[KodeSat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSat()
    {
        return $this->hasOne(Kodesatuan::class, ['kode_sat' => 'kode_sat']);
    }
}
