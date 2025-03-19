<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "resume_pasien".
 *
 * @property string $no_rawat
 * @property string $kd_dokter
 * @property string $keluhan_utama
 * @property string $jalannya_penyakit
 * @property string $pemeriksaan_penunjang
 * @property string $hasil_laborat
 * @property string $diagnosa_utama
 * @property string $kd_diagnosa_utama
 * @property string $diagnosa_sekunder
 * @property string $kd_diagnosa_sekunder
 * @property string $diagnosa_sekunder2
 * @property string $kd_diagnosa_sekunder2
 * @property string $diagnosa_sekunder3
 * @property string $kd_diagnosa_sekunder3
 * @property string $diagnosa_sekunder4
 * @property string $kd_diagnosa_sekunder4
 * @property string $prosedur_utama
 * @property string $kd_prosedur_utama
 * @property string $prosedur_sekunder
 * @property string $kd_prosedur_sekunder
 * @property string $prosedur_sekunder2
 * @property string $kd_prosedur_sekunder2
 * @property string $prosedur_sekunder3
 * @property string $kd_prosedur_sekunder3
 * @property string $kondisi_pulang
 * @property string $obat_pulang
 *
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class ResumePasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resume_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kd_dokter', 'keluhan_utama', 'jalannya_penyakit', 'pemeriksaan_penunjang', 'hasil_laborat', 'diagnosa_utama', 'kd_diagnosa_utama', 'diagnosa_sekunder', 'kd_diagnosa_sekunder', 'diagnosa_sekunder2', 'kd_diagnosa_sekunder2', 'diagnosa_sekunder3', 'kd_diagnosa_sekunder3', 'diagnosa_sekunder4', 'kd_diagnosa_sekunder4', 'prosedur_utama', 'kd_prosedur_utama', 'prosedur_sekunder', 'kd_prosedur_sekunder', 'prosedur_sekunder2', 'kd_prosedur_sekunder2', 'prosedur_sekunder3', 'kd_prosedur_sekunder3', 'kondisi_pulang', 'obat_pulang'], 'required'],
            [['keluhan_utama', 'jalannya_penyakit', 'pemeriksaan_penunjang', 'hasil_laborat', 'kondisi_pulang', 'obat_pulang'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['diagnosa_utama', 'diagnosa_sekunder', 'diagnosa_sekunder2', 'diagnosa_sekunder3', 'diagnosa_sekunder4', 'prosedur_utama', 'prosedur_sekunder', 'prosedur_sekunder2', 'prosedur_sekunder3'], 'string', 'max' => 80],
            [['kd_diagnosa_utama', 'kd_diagnosa_sekunder', 'kd_diagnosa_sekunder2', 'kd_diagnosa_sekunder3', 'kd_diagnosa_sekunder4'], 'string', 'max' => 10],
            [['kd_prosedur_utama', 'kd_prosedur_sekunder', 'kd_prosedur_sekunder2', 'kd_prosedur_sekunder3'], 'string', 'max' => 8],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'kd_dokter' => 'Kd Dokter',
            'keluhan_utama' => 'Keluhan Utama',
            'jalannya_penyakit' => 'Jalannya Penyakit',
            'pemeriksaan_penunjang' => 'Pemeriksaan Penunjang',
            'hasil_laborat' => 'Hasil Laborat',
            'diagnosa_utama' => 'Diagnosa Utama',
            'kd_diagnosa_utama' => 'Kd Diagnosa Utama',
            'diagnosa_sekunder' => 'Diagnosa Sekunder',
            'kd_diagnosa_sekunder' => 'Kd Diagnosa Sekunder',
            'diagnosa_sekunder2' => 'Diagnosa Sekunder2',
            'kd_diagnosa_sekunder2' => 'Kd Diagnosa Sekunder2',
            'diagnosa_sekunder3' => 'Diagnosa Sekunder3',
            'kd_diagnosa_sekunder3' => 'Kd Diagnosa Sekunder3',
            'diagnosa_sekunder4' => 'Diagnosa Sekunder4',
            'kd_diagnosa_sekunder4' => 'Kd Diagnosa Sekunder4',
            'prosedur_utama' => 'Prosedur Utama',
            'kd_prosedur_utama' => 'Kd Prosedur Utama',
            'prosedur_sekunder' => 'Prosedur Sekunder',
            'kd_prosedur_sekunder' => 'Kd Prosedur Sekunder',
            'prosedur_sekunder2' => 'Prosedur Sekunder2',
            'kd_prosedur_sekunder2' => 'Kd Prosedur Sekunder2',
            'prosedur_sekunder3' => 'Prosedur Sekunder3',
            'kd_prosedur_sekunder3' => 'Kd Prosedur Sekunder3',
            'kondisi_pulang' => 'Kondisi Pulang',
            'obat_pulang' => 'Obat Pulang',
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
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
