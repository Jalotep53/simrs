<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kamar_inap".
 *
 * @property string $no_rawat
 * @property string $kd_kamar
 * @property float|null $trf_kamar
 * @property string|null $diagnosa_awal
 * @property string|null $diagnosa_akhir
 * @property string $tgl_masuk
 * @property string $jam_masuk
 * @property string|null $tgl_keluar
 * @property string|null $jam_keluar
 * @property float|null $lama
 * @property float|null $ttl_biaya
 * @property string $stts_pulang
 *
 * @property Kamar $kdKamar
 * @property RegPeriksa $noRawat
 */
class KamarInap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kamar_inap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kd_kamar', 'tgl_masuk', 'jam_masuk', 'stts_pulang'], 'required'],
            [['trf_kamar', 'lama', 'ttl_biaya'], 'number'],
            [['jam_masuk', 'jam_keluar'], 'safe'],
            [['stts_pulang'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_kamar'], 'string', 'max' => 15],
            [['diagnosa_awal', 'diagnosa_akhir'], 'string', 'max' => 100],
            [['tgl_masuk', 'tgl_keluar'], 'string', 'max' => 18],
            [['no_rawat', 'tgl_masuk', 'jam_masuk'], 'unique', 'targetAttribute' => ['no_rawat', 'tgl_masuk', 'jam_masuk']],
            [['kd_kamar'], 'exist', 'skipOnError' => true, 'targetClass' => Kamar::class, 'targetAttribute' => ['kd_kamar' => 'kd_kamar']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'kd_kamar' => 'Kd Kamar',
            'trf_kamar' => 'Trf Kamar',
            'diagnosa_awal' => 'Diagnosa Awal',
            'diagnosa_akhir' => 'Diagnosa Akhir',
            'tgl_masuk' => 'Tgl Masuk',
            'jam_masuk' => 'Jam Masuk',
            'tgl_keluar' => 'Tgl Keluar',
            'jam_keluar' => 'Jam Keluar',
            'lama' => 'Lama',
            'ttl_biaya' => 'Ttl Biaya',
            'stts_pulang' => 'Stts Pulang',
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
