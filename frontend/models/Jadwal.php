<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jadwal".
 *
 * @property string $kd_dokter
 * @property string $hari_kerja
 * @property string $jam_mulai
 * @property string|null $jam_selesai
 * @property string|null $kd_poli
 * @property int|null $kuota
 *
 * @property Dokter $kdDokter
 * @property Poliklinik $kdPoli
 */
class Jadwal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jadwal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_dokter', 'hari_kerja', 'jam_mulai'], 'required'],
            [['hari_kerja'], 'string'],
            [['jam_mulai', 'jam_selesai'], 'safe'],
            [['kuota'], 'integer'],
            [['kd_dokter'], 'string', 'max' => 20],
            [['kd_poli'], 'string', 'max' => 5],
            [['kd_dokter', 'hari_kerja', 'jam_mulai'], 'unique', 'targetAttribute' => ['kd_dokter', 'hari_kerja', 'jam_mulai']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
            [['kd_poli'], 'exist', 'skipOnError' => true, 'targetClass' => Poliklinik::class, 'targetAttribute' => ['kd_poli' => 'kd_poli']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_dokter' => 'Kd Dokter',
            'hari_kerja' => 'Hari Kerja',
            'jam_mulai' => 'Jam Mulai',
            'jam_selesai' => 'Jam Selesai',
            'kd_poli' => 'Kd Poli',
            'kuota' => 'Kuota',
        ];
    }

    /**
     * Gets query for [[KdDokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokter()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[KdPoli]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPoli()
    {
        return $this->hasOne(Poliklinik::class, ['kd_poli' => 'kd_poli']);
    }
}
