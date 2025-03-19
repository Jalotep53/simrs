<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "resep_dokter_racikan".
 *
 * @property string $no_resep
 * @property string $no_racik
 * @property string $nama_racik
 * @property string $kd_racik
 * @property int $jml_dr
 * @property string $aturan_pakai
 * @property string $keterangan
 *
 * @property MetodeRacik $kdRacik
 * @property ResepObat $noResep
 */
class ResepDokterRacikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resep_dokter_racikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_resep', 'no_racik', 'nama_racik', 'kd_racik', 'jml_dr', 'aturan_pakai', 'keterangan'], 'required'],
            [['jml_dr'], 'integer'],
            [['no_resep'], 'string', 'max' => 14],
            [['no_racik'], 'string', 'max' => 2],
            [['nama_racik'], 'string', 'max' => 100],
            [['kd_racik'], 'string', 'max' => 3],
            [['aturan_pakai'], 'string', 'max' => 150],
            [['keterangan'], 'string', 'max' => 50],
            [['no_resep', 'no_racik'], 'unique', 'targetAttribute' => ['no_resep', 'no_racik']],
            [['no_resep'], 'exist', 'skipOnError' => true, 'targetClass' => ResepObat::class, 'targetAttribute' => ['no_resep' => 'no_resep']],
            [['kd_racik'], 'exist', 'skipOnError' => true, 'targetClass' => MetodeRacik::class, 'targetAttribute' => ['kd_racik' => 'kd_racik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_resep' => 'No Resep',
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
     * Gets query for [[NoResep]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoResep()
    {
        return $this->hasOne(ResepObat::class, ['no_resep' => 'no_resep']);
    }
}
