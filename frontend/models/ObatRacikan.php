<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "obat_racikan".
 *
 * @property string $tgl_perawatan
 * @property string $jam
 * @property string $no_rawat
 * @property string $no_racik
 * @property string $nama_racik
 * @property string $kd_racik
 * @property int $jml_dr
 * @property string $aturan_pakai
 * @property string $keterangan
 *
 * @property MetodeRacik $kdRacik
 * @property RegPeriksa $noRawat
 */
class ObatRacikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat_racikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_perawatan', 'jam', 'no_rawat', 'no_racik', 'nama_racik', 'kd_racik', 'jml_dr', 'aturan_pakai', 'keterangan'], 'required'],
            [['tgl_perawatan', 'jam'], 'safe'],
            [['jml_dr'], 'integer'],
            [['no_rawat'], 'string', 'max' => 17],
            [['no_racik'], 'string', 'max' => 2],
            [['nama_racik'], 'string', 'max' => 100],
            [['kd_racik'], 'string', 'max' => 3],
            [['aturan_pakai'], 'string', 'max' => 150],
            [['keterangan'], 'string', 'max' => 50],
            [['tgl_perawatan', 'jam', 'no_rawat', 'no_racik'], 'unique', 'targetAttribute' => ['tgl_perawatan', 'jam', 'no_rawat', 'no_racik']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_racik'], 'exist', 'skipOnError' => true, 'targetClass' => MetodeRacik::class, 'targetAttribute' => ['kd_racik' => 'kd_racik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tgl_perawatan' => 'Tgl Perawatan',
            'jam' => 'Jam',
            'no_rawat' => 'No Rawat',
            'no_racik' => 'No Racik',
            'nama_racik' => 'Nama Racik',
            'kd_racik' => 'Kd Racik',
            'jml_dr' => 'Jml Dr',
            'aturan_pakai' => 'Aturan Pakai',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[KdRacik]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRacik()
    {
        return $this->hasOne(MetodeRacik::class, ['kd_racik' => 'kd_racik']);
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
