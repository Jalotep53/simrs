<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "resume_pasien_ranap".
 *
 * @property string $no_rawat
 * @property string $kd_dokter
 * @property string $diagnosa_awal
 * @property string $alasan
 * @property string $keluhan_utama
 * @property string $pemeriksaan_fisik
 * @property string $jalannya_penyakit
 * @property string $pemeriksaan_penunjang
 * @property string $hasil_laborat
 * @property string $tindakan_dan_operasi
 * @property string $obat_di_rs
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
 * @property string $alergi
 * @property string $diet
 * @property string $lab_belum
 * @property string $edukasi
 * @property string $cara_keluar
 * @property string|null $ket_keluar
 * @property string $keadaan
 * @property string|null $ket_keadaan
 * @property string $dilanjutkan
 * @property string|null $ket_dilanjutkan
 * @property string|null $kontrol
 * @property string $obat_pulang
 *
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class ResumePasienRanap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resume_pasien_ranap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kd_dokter', 'diagnosa_awal', 'alasan', 'keluhan_utama', 'pemeriksaan_fisik', 'jalannya_penyakit', 'pemeriksaan_penunjang', 'hasil_laborat', 'tindakan_dan_operasi', 'obat_di_rs', 'diagnosa_utama', 'kd_diagnosa_utama', 'diagnosa_sekunder', 'kd_diagnosa_sekunder', 'diagnosa_sekunder2', 'kd_diagnosa_sekunder2', 'diagnosa_sekunder3', 'kd_diagnosa_sekunder3', 'diagnosa_sekunder4', 'kd_diagnosa_sekunder4', 'prosedur_utama', 'kd_prosedur_utama', 'prosedur_sekunder', 'kd_prosedur_sekunder', 'prosedur_sekunder2', 'kd_prosedur_sekunder2', 'prosedur_sekunder3', 'kd_prosedur_sekunder3', 'alergi', 'diet', 'lab_belum', 'edukasi', 'cara_keluar', 'keadaan', 'dilanjutkan', 'obat_pulang'], 'required'],
            [['keluhan_utama', 'pemeriksaan_fisik', 'jalannya_penyakit', 'pemeriksaan_penunjang', 'hasil_laborat', 'tindakan_dan_operasi', 'obat_di_rs', 'diet', 'lab_belum', 'edukasi', 'cara_keluar', 'keadaan', 'dilanjutkan', 'obat_pulang'], 'string'],
            [['kontrol'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['diagnosa_awal', 'alasan', 'alergi'], 'string', 'max' => 100],
            [['diagnosa_utama', 'diagnosa_sekunder', 'diagnosa_sekunder2', 'diagnosa_sekunder3', 'diagnosa_sekunder4', 'prosedur_utama', 'prosedur_sekunder', 'prosedur_sekunder2', 'prosedur_sekunder3'], 'string', 'max' => 80],
            [['kd_diagnosa_utama', 'kd_diagnosa_sekunder', 'kd_diagnosa_sekunder2', 'kd_diagnosa_sekunder3', 'kd_diagnosa_sekunder4'], 'string', 'max' => 10],
            [['kd_prosedur_utama', 'kd_prosedur_sekunder', 'kd_prosedur_sekunder2', 'kd_prosedur_sekunder3'], 'string', 'max' => 8],
            [['ket_keluar', 'ket_keadaan', 'ket_dilanjutkan'], 'string', 'max' => 50],
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
            'diagnosa_awal' => 'Diagnosa Awal',
            'alasan' => 'Alasan',
            'keluhan_utama' => 'Keluhan Utama',
            'pemeriksaan_fisik' => 'Pemeriksaan Fisik',
            'jalannya_penyakit' => 'Jalannya Penyakit',
            'pemeriksaan_penunjang' => 'Pemeriksaan Penunjang',
            'hasil_laborat' => 'Hasil Laborat',
            'tindakan_dan_operasi' => 'Tindakan Dan Operasi',
            'obat_di_rs' => 'Obat Di Rs',
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
            'alergi' => 'Alergi',
            'diet' => 'Diet',
            'lab_belum' => 'Lab Belum',
            'edukasi' => 'Edukasi',
            'cara_keluar' => 'Cara Keluar',
            'ket_keluar' => 'Ket Keluar',
            'keadaan' => 'Keadaan',
            'ket_keadaan' => 'Ket Keadaan',
            'dilanjutkan' => 'Dilanjutkan',
            'ket_dilanjutkan' => 'Ket Dilanjutkan',
            'kontrol' => 'Kontrol',
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
