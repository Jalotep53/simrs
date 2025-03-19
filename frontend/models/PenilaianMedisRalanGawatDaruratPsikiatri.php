<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_medis_ralan_gawat_darurat_psikiatri".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kd_dokter
 * @property string $anamnesis
 * @property string $hubungan
 * @property string|null $keluhan_utama
 * @property string|null $gejala_menyertai
 * @property string|null $faktor_pencetus
 * @property string|null $riwayat_penyakit_dahulu
 * @property string|null $keterangan_riwayat_penyakit_dahulu
 * @property string|null $riwayat_kehamilan
 * @property string|null $riwayat_sosial
 * @property string|null $keterangan_riwayat_sosial
 * @property string|null $riwayat_pekerjaan
 * @property string|null $keterangan_riwayat_pekerjaan
 * @property string|null $riwayat_obat_diminum
 * @property string|null $faktor_kepribadian_premorbid
 * @property string|null $faktor_keturunan
 * @property string|null $keterangan_faktor_keturunan
 * @property string|null $faktor_organik
 * @property string|null $keterangan_faktor_organik
 * @property string|null $riwayat_alergi
 * @property string|null $fisik_kesadaran
 * @property string|null $fisik_td
 * @property string|null $fisik_rr
 * @property string|null $fisik_suhu
 * @property string|null $fisik_nyeri
 * @property string|null $fisik_nadi
 * @property string|null $fisik_bb
 * @property string|null $fisik_tb
 * @property string|null $fisik_status_nutrisi
 * @property string|null $fisik_gcs
 * @property string|null $status_kelainan_kepala
 * @property string|null $keterangan_status_kelainan_kepala
 * @property string|null $status_kelainan_leher
 * @property string|null $keterangan_status_kelainan_leher
 * @property string|null $status_kelainan_dada
 * @property string|null $keterangan_status_kelainan_dada
 * @property string|null $status_kelainan_perut
 * @property string|null $keterangan_status_kelainan_perut
 * @property string|null $status_kelainan_anggota_gerak
 * @property string|null $keterangan_status_kelainan_anggota_gerak
 * @property string|null $status_lokalisata
 * @property string|null $psikiatrik_kesan_umum
 * @property string|null $psikiatrik_sikap_prilaku
 * @property string|null $psikiatrik_kesadaran
 * @property string|null $psikiatrik_orientasi
 * @property string|null $psikiatrik_daya_ingat
 * @property string|null $psikiatrik_persepsi
 * @property string|null $psikiatrik_pikiran
 * @property string|null $psikiatrik_insight
 * @property string|null $laborat
 * @property string|null $radiologi
 * @property string|null $ekg
 * @property string|null $diagnosis
 * @property string|null $permasalahan
 * @property string|null $instruksi_medis
 * @property string|null $rencana_target
 * @property string|null $pulang_dipulangkan
 * @property string|null $keterangan_pulang_dipulangkan
 * @property string|null $pulang_dirawat_diruang
 * @property string|null $pulang_indikasi_ranap
 * @property string|null $pulang_dirujuk_ke
 * @property string|null $pulang_alasan_dirujuk
 * @property string|null $pulang_paksa
 * @property string|null $keterangan_pulang_paksa
 * @property string|null $pulang_meninggal_igd
 * @property string|null $pulang_penyebab_kematian
 * @property string|null $fisik_pulang_kesadaran
 * @property string|null $fisik_pulang_td
 * @property string|null $fisik_pulang_nadi
 * @property string|null $fisik_pulang_gcs
 * @property string|null $fisik_pulang_suhu
 * @property string|null $fisik_pulang_rr
 * @property string|null $edukasi
 *
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class PenilaianMedisRalanGawatDaruratPsikiatri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_medis_ralan_gawat_darurat_psikiatri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'anamnesis', 'hubungan'], 'required'],
            [['tanggal'], 'safe'],
            [['anamnesis', 'riwayat_penyakit_dahulu', 'riwayat_sosial', 'riwayat_pekerjaan', 'faktor_keturunan', 'faktor_organik', 'fisik_kesadaran', 'fisik_nyeri', 'status_kelainan_kepala', 'status_kelainan_leher', 'status_kelainan_dada', 'status_kelainan_perut', 'status_kelainan_anggota_gerak', 'pulang_dipulangkan', 'pulang_alasan_dirujuk', 'pulang_paksa', 'pulang_meninggal_igd', 'fisik_pulang_kesadaran'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['hubungan', 'pulang_dirawat_diruang'], 'string', 'max' => 30],
            [['keluhan_utama'], 'string', 'max' => 2000],
            [['gejala_menyertai', 'faktor_pencetus', 'keterangan_riwayat_penyakit_dahulu', 'riwayat_kehamilan', 'riwayat_obat_diminum', 'status_lokalisata', 'diagnosis', 'rencana_target', 'edukasi'], 'string', 'max' => 1000],
            [['keterangan_riwayat_sosial', 'keterangan_riwayat_pekerjaan', 'faktor_kepribadian_premorbid', 'keterangan_faktor_keturunan', 'keterangan_faktor_organik', 'riwayat_alergi', 'keterangan_status_kelainan_kepala', 'keterangan_status_kelainan_leher', 'keterangan_status_kelainan_dada', 'keterangan_status_kelainan_perut', 'keterangan_status_kelainan_anggota_gerak', 'psikiatrik_kesan_umum', 'psikiatrik_sikap_prilaku', 'psikiatrik_kesadaran', 'psikiatrik_orientasi', 'psikiatrik_daya_ingat', 'psikiatrik_persepsi', 'psikiatrik_pikiran', 'psikiatrik_insight'], 'string', 'max' => 50],
            [['fisik_td', 'fisik_gcs', 'fisik_pulang_td', 'fisik_pulang_gcs'], 'string', 'max' => 8],
            [['fisik_rr', 'fisik_suhu', 'fisik_nadi', 'fisik_bb', 'fisik_tb', 'fisik_pulang_nadi', 'fisik_pulang_suhu', 'fisik_pulang_rr'], 'string', 'max' => 5],
            [['fisik_status_nutrisi', 'keterangan_pulang_dipulangkan', 'pulang_indikasi_ranap', 'keterangan_pulang_paksa', 'pulang_penyebab_kematian'], 'string', 'max' => 100],
            [['laborat'], 'string', 'max' => 300],
            [['radiologi', 'ekg'], 'string', 'max' => 200],
            [['permasalahan'], 'string', 'max' => 500],
            [['instruksi_medis'], 'string', 'max' => 600],
            [['pulang_dirujuk_ke'], 'string', 'max' => 70],
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
            'tanggal' => 'Tanggal',
            'kd_dokter' => 'Kd Dokter',
            'anamnesis' => 'Anamnesis',
            'hubungan' => 'Hubungan',
            'keluhan_utama' => 'Keluhan Utama',
            'gejala_menyertai' => 'Gejala Menyertai',
            'faktor_pencetus' => 'Faktor Pencetus',
            'riwayat_penyakit_dahulu' => 'Riwayat Penyakit Dahulu',
            'keterangan_riwayat_penyakit_dahulu' => 'Keterangan Riwayat Penyakit Dahulu',
            'riwayat_kehamilan' => 'Riwayat Kehamilan',
            'riwayat_sosial' => 'Riwayat Sosial',
            'keterangan_riwayat_sosial' => 'Keterangan Riwayat Sosial',
            'riwayat_pekerjaan' => 'Riwayat Pekerjaan',
            'keterangan_riwayat_pekerjaan' => 'Keterangan Riwayat Pekerjaan',
            'riwayat_obat_diminum' => 'Riwayat Obat Diminum',
            'faktor_kepribadian_premorbid' => 'Faktor Kepribadian Premorbid',
            'faktor_keturunan' => 'Faktor Keturunan',
            'keterangan_faktor_keturunan' => 'Keterangan Faktor Keturunan',
            'faktor_organik' => 'Faktor Organik',
            'keterangan_faktor_organik' => 'Keterangan Faktor Organik',
            'riwayat_alergi' => 'Riwayat Alergi',
            'fisik_kesadaran' => 'Fisik Kesadaran',
            'fisik_td' => 'Fisik Td',
            'fisik_rr' => 'Fisik Rr',
            'fisik_suhu' => 'Fisik Suhu',
            'fisik_nyeri' => 'Fisik Nyeri',
            'fisik_nadi' => 'Fisik Nadi',
            'fisik_bb' => 'Fisik Bb',
            'fisik_tb' => 'Fisik Tb',
            'fisik_status_nutrisi' => 'Fisik Status Nutrisi',
            'fisik_gcs' => 'Fisik Gcs',
            'status_kelainan_kepala' => 'Status Kelainan Kepala',
            'keterangan_status_kelainan_kepala' => 'Keterangan Status Kelainan Kepala',
            'status_kelainan_leher' => 'Status Kelainan Leher',
            'keterangan_status_kelainan_leher' => 'Keterangan Status Kelainan Leher',
            'status_kelainan_dada' => 'Status Kelainan Dada',
            'keterangan_status_kelainan_dada' => 'Keterangan Status Kelainan Dada',
            'status_kelainan_perut' => 'Status Kelainan Perut',
            'keterangan_status_kelainan_perut' => 'Keterangan Status Kelainan Perut',
            'status_kelainan_anggota_gerak' => 'Status Kelainan Anggota Gerak',
            'keterangan_status_kelainan_anggota_gerak' => 'Keterangan Status Kelainan Anggota Gerak',
            'status_lokalisata' => 'Status Lokalisata',
            'psikiatrik_kesan_umum' => 'Psikiatrik Kesan Umum',
            'psikiatrik_sikap_prilaku' => 'Psikiatrik Sikap Prilaku',
            'psikiatrik_kesadaran' => 'Psikiatrik Kesadaran',
            'psikiatrik_orientasi' => 'Psikiatrik Orientasi',
            'psikiatrik_daya_ingat' => 'Psikiatrik Daya Ingat',
            'psikiatrik_persepsi' => 'Psikiatrik Persepsi',
            'psikiatrik_pikiran' => 'Psikiatrik Pikiran',
            'psikiatrik_insight' => 'Psikiatrik Insight',
            'laborat' => 'Laborat',
            'radiologi' => 'Radiologi',
            'ekg' => 'Ekg',
            'diagnosis' => 'Diagnosis',
            'permasalahan' => 'Permasalahan',
            'instruksi_medis' => 'Instruksi Medis',
            'rencana_target' => 'Rencana Target',
            'pulang_dipulangkan' => 'Pulang Dipulangkan',
            'keterangan_pulang_dipulangkan' => 'Keterangan Pulang Dipulangkan',
            'pulang_dirawat_diruang' => 'Pulang Dirawat Diruang',
            'pulang_indikasi_ranap' => 'Pulang Indikasi Ranap',
            'pulang_dirujuk_ke' => 'Pulang Dirujuk Ke',
            'pulang_alasan_dirujuk' => 'Pulang Alasan Dirujuk',
            'pulang_paksa' => 'Pulang Paksa',
            'keterangan_pulang_paksa' => 'Keterangan Pulang Paksa',
            'pulang_meninggal_igd' => 'Pulang Meninggal Igd',
            'pulang_penyebab_kematian' => 'Pulang Penyebab Kematian',
            'fisik_pulang_kesadaran' => 'Fisik Pulang Kesadaran',
            'fisik_pulang_td' => 'Fisik Pulang Td',
            'fisik_pulang_nadi' => 'Fisik Pulang Nadi',
            'fisik_pulang_gcs' => 'Fisik Pulang Gcs',
            'fisik_pulang_suhu' => 'Fisik Pulang Suhu',
            'fisik_pulang_rr' => 'Fisik Pulang Rr',
            'edukasi' => 'Edukasi',
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
