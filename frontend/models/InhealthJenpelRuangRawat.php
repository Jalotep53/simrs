<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inhealth_jenpel_ruang_rawat".
 *
 * @property string $kd_kamar
 * @property string $kode_jenpel_ruang_rawat
 * @property string|null $nama_jenpel_ruang_rawat
 * @property float $tarif
 *
 * @property Kamar $kdKamar
 */
class InhealthJenpelRuangRawat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inhealth_jenpel_ruang_rawat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_kamar', 'kode_jenpel_ruang_rawat', 'tarif'], 'required'],
            [['tarif'], 'number'],
            [['kd_kamar'], 'string', 'max' => 15],
            [['kode_jenpel_ruang_rawat'], 'string', 'max' => 20],
            [['nama_jenpel_ruang_rawat'], 'string', 'max' => 100],
            [['kd_kamar'], 'unique'],
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
            'kode_jenpel_ruang_rawat' => 'Kode Jenpel Ruang Rawat',
            'nama_jenpel_ruang_rawat' => 'Nama Jenpel Ruang Rawat',
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
}
