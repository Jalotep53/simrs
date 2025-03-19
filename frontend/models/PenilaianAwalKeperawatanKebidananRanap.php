<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_awal_keperawatan_kebidanan_ranap".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $informasi
 * @property string $tiba_diruang_rawat
 * @property string $cara_masuk
 * @property string $keluhan
 * @property string $rpk
 * @property string $psk
 * @property string $rp
 * @property string $alergi
 * @property string $komplikasi_sebelumnya
 * @property string $keterangan_komplikasi_sebelumnya
 * @property string $riwayat_mens_umur
 * @property string $riwayat_mens_lamanya
 * @property string $riwayat_mens_banyaknya
 * @property string $riwayat_mens_siklus
 * @property string $riwayat_mens_ket_siklus
 * @property string $riwayat_mens_dirasakan
 * @property string $riwayat_perkawinan_status
 * @property string $riwayat_perkawinan_ket_status
 * @property string $riwayat_perkawinan_usia1
 * @property string $riwayat_perkawinan_ket_usia1
 * @property string $riwayat_perkawinan_usia2
 * @property string $riwayat_perkawinan_ket_usia2
 * @property string $riwayat_perkawinan_usia3
 * @property string $riwayat_perkawinan_ket_usia3
 * @property string $riwayat_persalinan_g
 * @property string $riwayat_persalinan_p
 * @property string $riwayat_persalinan_a
 * @property string $riwayat_persalinan_hidup
 * @property string $riwayat_hamil_hpht
 * @property string $riwayat_hamil_usiahamil
 * @property string $riwayat_hamil_tp
 * @property string $riwayat_hamil_imunisasi
 * @property string $riwayat_hamil_anc
 * @property string $riwayat_hamil_ancke
 * @property string $riwayat_hamil_ket_ancke
 * @property string $riwayat_hamil_keluhan_hamil_muda
 * @property string $riwayat_hamil_keluhan_hamil_tua
 * @property string $riwayat_kb
 * @property string $riwayat_kb_lamanya
 * @property string $riwayat_kb_komplikasi
 * @property string $riwayat_kb_ket_komplikasi
 * @property string $riwayat_kb_kapaberhenti
 * @property string $riwayat_kb_alasanberhenti
 * @property string $riwayat_genekologi
 * @property string $riwayat_kebiasaan_obat
 * @property string $riwayat_kebiasaan_ket_obat
 * @property string $riwayat_kebiasaan_merokok
 * @property string $riwayat_kebiasaan_ket_merokok
 * @property string $riwayat_kebiasaan_alkohol
 * @property string $riwayat_kebiasaan_ket_alkohol
 * @property string $riwayat_kebiasaan_narkoba
 * @property string $pemeriksaan_kebidanan_mental
 * @property string $pemeriksaan_kebidanan_keadaan_umum
 * @property string $pemeriksaan_kebidanan_gcs
 * @property string $pemeriksaan_kebidanan_td
 * @property string $pemeriksaan_kebidanan_nadi
 * @property string $pemeriksaan_kebidanan_rr
 * @property string $pemeriksaan_kebidanan_suhu
 * @property string $pemeriksaan_kebidanan_spo2
 * @property string $pemeriksaan_kebidanan_bb
 * @property string $pemeriksaan_kebidanan_tb
 * @property string $pemeriksaan_kebidanan_lila
 * @property string $pemeriksaan_kebidanan_tfu
 * @property string $pemeriksaan_kebidanan_tbj
 * @property string $pemeriksaan_kebidanan_letak
 * @property string $pemeriksaan_kebidanan_presentasi
 * @property string $pemeriksaan_kebidanan_penurunan
 * @property string $pemeriksaan_kebidanan_his
 * @property string $pemeriksaan_kebidanan_kekuatan
 * @property string $pemeriksaan_kebidanan_lamanya
 * @property string $pemeriksaan_kebidanan_djj
 * @property string $pemeriksaan_kebidanan_ket_djj
 * @property string $pemeriksaan_kebidanan_portio
 * @property string $pemeriksaan_kebidanan_pembukaan
 * @property string $pemeriksaan_kebidanan_ketuban
 * @property string $pemeriksaan_kebidanan_hodge
 * @property string $pemeriksaan_kebidanan_panggul
 * @property string $pemeriksaan_kebidanan_inspekulo
 * @property string $pemeriksaan_kebidanan_ket_inspekulo
 * @property string $pemeriksaan_kebidanan_lakmus
 * @property string $pemeriksaan_kebidanan_ket_lakmus
 * @property string $pemeriksaan_kebidanan_ctg
 * @property string $pemeriksaan_kebidanan_ket_ctg
 * @property string $pemeriksaan_umum_kepala
 * @property string $pemeriksaan_umum_muka
 * @property string $pemeriksaan_umum_mata
 * @property string $pemeriksaan_umum_hidung
 * @property string $pemeriksaan_umum_telinga
 * @property string $pemeriksaan_umum_mulut
 * @property string $pemeriksaan_umum_leher
 * @property string $pemeriksaan_umum_dada
 * @property string $pemeriksaan_umum_perut
 * @property string $pemeriksaan_umum_genitalia
 * @property string $pemeriksaan_umum_ekstrimitas
 * @property string $pengkajian_fungsi_kemampuan_aktifitas
 * @property string $pengkajian_fungsi_berjalan
 * @property string $pengkajian_fungsi_ket_berjalan
 * @property string $pengkajian_fungsi_aktivitas
 * @property string $pengkajian_fungsi_ambulasi
 * @property string $pengkajian_fungsi_ekstrimitas_atas
 * @property string $pengkajian_fungsi_ket_ekstrimitas_atas
 * @property string $pengkajian_fungsi_ekstrimitas_bawah
 * @property string $pengkajian_fungsi_ket_ekstrimitas_bawah
 * @property string $pengkajian_fungsi_kemampuan_menggenggam
 * @property string $pengkajian_fungsi_ket_kemampuan_menggenggam
 * @property string $pengkajian_fungsi_koordinasi
 * @property string $pengkajian_fungsi_ket_koordinasi
 * @property string $pengkajian_fungsi_gangguan_fungsi
 * @property string $riwayat_psiko_kondisipsiko
 * @property string $riwayat_psiko_adakah_prilaku
 * @property string $riwayat_psiko_ket_adakah_prilaku
 * @property string $riwayat_psiko_gangguan_jiwa
 * @property string $riwayat_psiko_hubungan_pasien
 * @property string $riwayat_psiko_tinggal_dengan
 * @property string $riwayat_psiko_ket_tinggal_dengan
 * @property string $riwayat_psiko_budaya
 * @property string $riwayat_psiko_ket_budaya
 * @property string $riwayat_psiko_pend_pj
 * @property string $riwayat_psiko_edukasi_pada
 * @property string $riwayat_psiko_ket_edukasi_pada
 * @property string $penilaian_nyeri
 * @property string $penilaian_nyeri_penyebab
 * @property string $penilaian_nyeri_ket_penyebab
 * @property string $penilaian_nyeri_kualitas
 * @property string $penilaian_nyeri_ket_kualitas
 * @property string $penilaian_nyeri_lokasi
 * @property string $penilaian_nyeri_menyebar
 * @property string $penilaian_nyeri_skala
 * @property string $penilaian_nyeri_waktu
 * @property string $penilaian_nyeri_hilang
 * @property string $penilaian_nyeri_ket_hilang
 * @property string $penilaian_nyeri_diberitahukan_dokter
 * @property string $penilaian_nyeri_jam_diberitahukan_dokter
 * @property string $penilaian_jatuh_skala1
 * @property int $penilaian_jatuh_nilai1
 * @property string $penilaian_jatuh_skala2
 * @property int $penilaian_jatuh_nilai2
 * @property string $penilaian_jatuh_skala3
 * @property int $penilaian_jatuh_nilai3
 * @property string $penilaian_jatuh_skala4
 * @property int $penilaian_jatuh_nilai4
 * @property string $penilaian_jatuh_skala5
 * @property int $penilaian_jatuh_nilai5
 * @property string $penilaian_jatuh_skala6
 * @property int $penilaian_jatuh_nilai6
 * @property float $penilaian_jatuh_totalnilai
 * @property string $skrining_gizi1
 * @property int $nilai_gizi1
 * @property string $skrining_gizi2
 * @property int $nilai_gizi2
 * @property float $nilai_total_gizi
 * @property string $skrining_gizi_diagnosa_khusus
 * @property string $skrining_gizi_ket_diagnosa_khusus
 * @property string $skrining_gizi_diketahui_dietisen
 * @property string $skrining_gizi_jam_diketahui_dietisen
 * @property string $masalah
 * @property string $rencana
 * @property string $nip1
 * @property string $nip2
 * @property string $kd_dokter
 *
 * @property Dokter $kdDokter
 * @property Petugas $nip10
 * @property Petugas $nip20
 * @property RegPeriksa $noRawat
 */
class PenilaianAwalKeperawatanKebidananRanap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_awal_keperawatan_kebidanan_ranap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'informasi', 'tiba_diruang_rawat', 'cara_masuk', 'keluhan', 'rpk', 'psk', 'rp', 'alergi', 'komplikasi_sebelumnya', 'keterangan_komplikasi_sebelumnya', 'riwayat_mens_umur', 'riwayat_mens_lamanya', 'riwayat_mens_banyaknya', 'riwayat_mens_siklus', 'riwayat_mens_ket_siklus', 'riwayat_mens_dirasakan', 'riwayat_perkawinan_status', 'riwayat_perkawinan_ket_status', 'riwayat_perkawinan_usia1', 'riwayat_perkawinan_ket_usia1', 'riwayat_perkawinan_usia2', 'riwayat_perkawinan_ket_usia2', 'riwayat_perkawinan_usia3', 'riwayat_perkawinan_ket_usia3', 'riwayat_persalinan_g', 'riwayat_persalinan_p', 'riwayat_persalinan_a', 'riwayat_persalinan_hidup', 'riwayat_hamil_hpht', 'riwayat_hamil_usiahamil', 'riwayat_hamil_tp', 'riwayat_hamil_imunisasi', 'riwayat_hamil_anc', 'riwayat_hamil_ancke', 'riwayat_hamil_ket_ancke', 'riwayat_hamil_keluhan_hamil_muda', 'riwayat_hamil_keluhan_hamil_tua', 'riwayat_kb', 'riwayat_kb_lamanya', 'riwayat_kb_komplikasi', 'riwayat_kb_ket_komplikasi', 'riwayat_kb_kapaberhenti', 'riwayat_kb_alasanberhenti', 'riwayat_genekologi', 'riwayat_kebiasaan_obat', 'riwayat_kebiasaan_ket_obat', 'riwayat_kebiasaan_merokok', 'riwayat_kebiasaan_ket_merokok', 'riwayat_kebiasaan_alkohol', 'riwayat_kebiasaan_ket_alkohol', 'riwayat_kebiasaan_narkoba', 'pemeriksaan_kebidanan_mental', 'pemeriksaan_kebidanan_keadaan_umum', 'pemeriksaan_kebidanan_gcs', 'pemeriksaan_kebidanan_td', 'pemeriksaan_kebidanan_nadi', 'pemeriksaan_kebidanan_rr', 'pemeriksaan_kebidanan_suhu', 'pemeriksaan_kebidanan_spo2', 'pemeriksaan_kebidanan_bb', 'pemeriksaan_kebidanan_tb', 'pemeriksaan_kebidanan_lila', 'pemeriksaan_kebidanan_tfu', 'pemeriksaan_kebidanan_tbj', 'pemeriksaan_kebidanan_letak', 'pemeriksaan_kebidanan_presentasi', 'pemeriksaan_kebidanan_penurunan', 'pemeriksaan_kebidanan_his', 'pemeriksaan_kebidanan_kekuatan', 'pemeriksaan_kebidanan_lamanya', 'pemeriksaan_kebidanan_djj', 'pemeriksaan_kebidanan_ket_djj', 'pemeriksaan_kebidanan_portio', 'pemeriksaan_kebidanan_pembukaan', 'pemeriksaan_kebidanan_ketuban', 'pemeriksaan_kebidanan_hodge', 'pemeriksaan_kebidanan_panggul', 'pemeriksaan_kebidanan_inspekulo', 'pemeriksaan_kebidanan_ket_inspekulo', 'pemeriksaan_kebidanan_lakmus', 'pemeriksaan_kebidanan_ket_lakmus', 'pemeriksaan_kebidanan_ctg', 'pemeriksaan_kebidanan_ket_ctg', 'pemeriksaan_umum_kepala', 'pemeriksaan_umum_muka', 'pemeriksaan_umum_mata', 'pemeriksaan_umum_hidung', 'pemeriksaan_umum_telinga', 'pemeriksaan_umum_mulut', 'pemeriksaan_umum_leher', 'pemeriksaan_umum_dada', 'pemeriksaan_umum_perut', 'pemeriksaan_umum_genitalia', 'pemeriksaan_umum_ekstrimitas', 'pengkajian_fungsi_kemampuan_aktifitas', 'pengkajian_fungsi_berjalan', 'pengkajian_fungsi_ket_berjalan', 'pengkajian_fungsi_aktivitas', 'pengkajian_fungsi_ambulasi', 'pengkajian_fungsi_ekstrimitas_atas', 'pengkajian_fungsi_ket_ekstrimitas_atas', 'pengkajian_fungsi_ekstrimitas_bawah', 'pengkajian_fungsi_ket_ekstrimitas_bawah', 'pengkajian_fungsi_kemampuan_menggenggam', 'pengkajian_fungsi_ket_kemampuan_menggenggam', 'pengkajian_fungsi_koordinasi', 'pengkajian_fungsi_ket_koordinasi', 'pengkajian_fungsi_gangguan_fungsi', 'riwayat_psiko_kondisipsiko', 'riwayat_psiko_adakah_prilaku', 'riwayat_psiko_ket_adakah_prilaku', 'riwayat_psiko_gangguan_jiwa', 'riwayat_psiko_hubungan_pasien', 'riwayat_psiko_tinggal_dengan', 'riwayat_psiko_ket_tinggal_dengan', 'riwayat_psiko_budaya', 'riwayat_psiko_ket_budaya', 'riwayat_psiko_pend_pj', 'riwayat_psiko_edukasi_pada', 'riwayat_psiko_ket_edukasi_pada', 'penilaian_nyeri', 'penilaian_nyeri_penyebab', 'penilaian_nyeri_ket_penyebab', 'penilaian_nyeri_kualitas', 'penilaian_nyeri_ket_kualitas', 'penilaian_nyeri_lokasi', 'penilaian_nyeri_menyebar', 'penilaian_nyeri_skala', 'penilaian_nyeri_waktu', 'penilaian_nyeri_hilang', 'penilaian_nyeri_ket_hilang', 'penilaian_nyeri_diberitahukan_dokter', 'penilaian_nyeri_jam_diberitahukan_dokter', 'penilaian_jatuh_skala1', 'penilaian_jatuh_nilai1', 'penilaian_jatuh_skala2', 'penilaian_jatuh_nilai2', 'penilaian_jatuh_skala3', 'penilaian_jatuh_nilai3', 'penilaian_jatuh_skala4', 'penilaian_jatuh_nilai4', 'penilaian_jatuh_skala5', 'penilaian_jatuh_nilai5', 'penilaian_jatuh_skala6', 'penilaian_jatuh_nilai6', 'penilaian_jatuh_totalnilai', 'skrining_gizi1', 'nilai_gizi1', 'skrining_gizi2', 'nilai_gizi2', 'nilai_total_gizi', 'skrining_gizi_diagnosa_khusus', 'skrining_gizi_ket_diagnosa_khusus', 'skrining_gizi_diketahui_dietisen', 'skrining_gizi_jam_diketahui_dietisen', 'masalah', 'rencana', 'nip1', 'nip2', 'kd_dokter'], 'required'],
            [['tanggal', 'riwayat_hamil_hpht', 'riwayat_hamil_tp'], 'safe'],
            [['informasi', 'tiba_diruang_rawat', 'cara_masuk', 'komplikasi_sebelumnya', 'riwayat_mens_ket_siklus', 'riwayat_mens_dirasakan', 'riwayat_perkawinan_status', 'riwayat_perkawinan_ket_usia1', 'riwayat_perkawinan_ket_usia2', 'riwayat_perkawinan_ket_usia3', 'riwayat_hamil_imunisasi', 'riwayat_hamil_ket_ancke', 'riwayat_hamil_keluhan_hamil_muda', 'riwayat_hamil_keluhan_hamil_tua', 'riwayat_kb', 'riwayat_kb_komplikasi', 'riwayat_genekologi', 'riwayat_kebiasaan_obat', 'riwayat_kebiasaan_merokok', 'riwayat_kebiasaan_alkohol', 'riwayat_kebiasaan_narkoba', 'pemeriksaan_kebidanan_keadaan_umum', 'pemeriksaan_kebidanan_ket_djj', 'pemeriksaan_kebidanan_panggul', 'pemeriksaan_kebidanan_inspekulo', 'pemeriksaan_kebidanan_lakmus', 'pemeriksaan_kebidanan_ctg', 'pemeriksaan_umum_kepala', 'pemeriksaan_umum_muka', 'pemeriksaan_umum_mata', 'pemeriksaan_umum_hidung', 'pemeriksaan_umum_telinga', 'pemeriksaan_umum_mulut', 'pemeriksaan_umum_leher', 'pemeriksaan_umum_dada', 'pemeriksaan_umum_perut', 'pemeriksaan_umum_genitalia', 'pemeriksaan_umum_ekstrimitas', 'pengkajian_fungsi_kemampuan_aktifitas', 'pengkajian_fungsi_berjalan', 'pengkajian_fungsi_aktivitas', 'pengkajian_fungsi_ambulasi', 'pengkajian_fungsi_ekstrimitas_atas', 'pengkajian_fungsi_ekstrimitas_bawah', 'pengkajian_fungsi_kemampuan_menggenggam', 'pengkajian_fungsi_koordinasi', 'pengkajian_fungsi_gangguan_fungsi', 'riwayat_psiko_kondisipsiko', 'riwayat_psiko_adakah_prilaku', 'riwayat_psiko_gangguan_jiwa', 'riwayat_psiko_hubungan_pasien', 'riwayat_psiko_tinggal_dengan', 'riwayat_psiko_budaya', 'riwayat_psiko_pend_pj', 'riwayat_psiko_edukasi_pada', 'penilaian_nyeri', 'penilaian_nyeri_penyebab', 'penilaian_nyeri_kualitas', 'penilaian_nyeri_menyebar', 'penilaian_nyeri_skala', 'penilaian_nyeri_hilang', 'penilaian_nyeri_diberitahukan_dokter', 'penilaian_jatuh_skala1', 'penilaian_jatuh_skala2', 'penilaian_jatuh_skala3', 'penilaian_jatuh_skala4', 'penilaian_jatuh_skala5', 'penilaian_jatuh_skala6', 'skrining_gizi1', 'skrining_gizi2', 'skrining_gizi_diagnosa_khusus', 'skrining_gizi_diketahui_dietisen'], 'string'],
            [['penilaian_jatuh_nilai1', 'penilaian_jatuh_nilai2', 'penilaian_jatuh_nilai3', 'penilaian_jatuh_nilai4', 'penilaian_jatuh_nilai5', 'penilaian_jatuh_nilai6', 'nilai_gizi1', 'nilai_gizi2'], 'integer'],
            [['penilaian_jatuh_totalnilai', 'nilai_total_gizi'], 'number'],
            [['no_rawat'], 'string', 'max' => 17],
            [['keluhan'], 'string', 'max' => 500],
            [['rpk', 'psk', 'rp', 'riwayat_kebiasaan_ket_obat'], 'string', 'max' => 100],
            [['alergi'], 'string', 'max' => 25],
            [['keterangan_komplikasi_sebelumnya'], 'string', 'max' => 30],
            [['riwayat_mens_umur', 'riwayat_mens_lamanya', 'riwayat_mens_banyaknya', 'riwayat_mens_siklus', 'riwayat_persalinan_g', 'riwayat_persalinan_p', 'riwayat_persalinan_a', 'riwayat_persalinan_hidup', 'riwayat_hamil_usiahamil', 'riwayat_kb_lamanya', 'pemeriksaan_kebidanan_gcs', 'pemeriksaan_kebidanan_tfu', 'pemeriksaan_kebidanan_tbj', 'pemeriksaan_kebidanan_letak', 'pemeriksaan_kebidanan_presentasi', 'pemeriksaan_kebidanan_penurunan', 'pemeriksaan_kebidanan_his', 'pemeriksaan_kebidanan_kekuatan', 'pemeriksaan_kebidanan_portio', 'pemeriksaan_kebidanan_ketuban', 'pemeriksaan_kebidanan_hodge', 'penilaian_nyeri_jam_diberitahukan_dokter', 'skrining_gizi_jam_diketahui_dietisen'], 'string', 'max' => 10],
            [['riwayat_perkawinan_ket_status', 'riwayat_perkawinan_usia1', 'riwayat_perkawinan_usia2', 'riwayat_perkawinan_usia3', 'riwayat_hamil_anc', 'riwayat_hamil_ancke', 'riwayat_kebiasaan_ket_merokok', 'riwayat_kebiasaan_ket_alkohol', 'pemeriksaan_kebidanan_nadi', 'pemeriksaan_kebidanan_rr', 'pemeriksaan_kebidanan_suhu', 'pemeriksaan_kebidanan_spo2', 'pemeriksaan_kebidanan_bb', 'pemeriksaan_kebidanan_tb', 'pemeriksaan_kebidanan_lila', 'pemeriksaan_kebidanan_lamanya', 'pemeriksaan_kebidanan_djj', 'pemeriksaan_kebidanan_pembukaan', 'penilaian_nyeri_waktu'], 'string', 'max' => 5],
            [['riwayat_kb_ket_komplikasi', 'riwayat_kb_alasanberhenti', 'pemeriksaan_kebidanan_ket_inspekulo', 'pemeriksaan_kebidanan_ket_lakmus', 'pemeriksaan_kebidanan_ket_ctg', 'pengkajian_fungsi_ket_berjalan', 'pengkajian_fungsi_ket_ekstrimitas_atas', 'pengkajian_fungsi_ket_ekstrimitas_bawah', 'pengkajian_fungsi_ket_kemampuan_menggenggam', 'pengkajian_fungsi_ket_koordinasi', 'riwayat_psiko_ket_adakah_prilaku', 'riwayat_psiko_ket_tinggal_dengan', 'riwayat_psiko_ket_budaya', 'riwayat_psiko_ket_edukasi_pada', 'penilaian_nyeri_ket_penyebab', 'penilaian_nyeri_ket_kualitas', 'penilaian_nyeri_lokasi', 'penilaian_nyeri_ket_hilang', 'skrining_gizi_ket_diagnosa_khusus'], 'string', 'max' => 50],
            [['riwayat_kb_kapaberhenti', 'nip1', 'nip2', 'kd_dokter'], 'string', 'max' => 20],
            [['pemeriksaan_kebidanan_mental'], 'string', 'max' => 40],
            [['pemeriksaan_kebidanan_td'], 'string', 'max' => 8],
            [['masalah', 'rencana'], 'string', 'max' => 1000],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nip1'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip1' => 'nip']],
            [['nip2'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip2' => 'nip']],
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
            'informasi' => 'Informasi',
            'tiba_diruang_rawat' => 'Tiba Diruang Rawat',
            'cara_masuk' => 'Cara Masuk',
            'keluhan' => 'Keluhan',
            'rpk' => 'Rpk',
            'psk' => 'Psk',
            'rp' => 'Rp',
            'alergi' => 'Alergi',
            'komplikasi_sebelumnya' => 'Komplikasi Sebelumnya',
            'keterangan_komplikasi_sebelumnya' => 'Keterangan Komplikasi Sebelumnya',
            'riwayat_mens_umur' => 'Riwayat Mens Umur',
            'riwayat_mens_lamanya' => 'Riwayat Mens Lamanya',
            'riwayat_mens_banyaknya' => 'Riwayat Mens Banyaknya',
            'riwayat_mens_siklus' => 'Riwayat Mens Siklus',
            'riwayat_mens_ket_siklus' => 'Riwayat Mens Ket Siklus',
            'riwayat_mens_dirasakan' => 'Riwayat Mens Dirasakan',
            'riwayat_perkawinan_status' => 'Riwayat Perkawinan Status',
            'riwayat_perkawinan_ket_status' => 'Riwayat Perkawinan Ket Status',
            'riwayat_perkawinan_usia1' => 'Riwayat Perkawinan Usia1',
            'riwayat_perkawinan_ket_usia1' => 'Riwayat Perkawinan Ket Usia1',
            'riwayat_perkawinan_usia2' => 'Riwayat Perkawinan Usia2',
            'riwayat_perkawinan_ket_usia2' => 'Riwayat Perkawinan Ket Usia2',
            'riwayat_perkawinan_usia3' => 'Riwayat Perkawinan Usia3',
            'riwayat_perkawinan_ket_usia3' => 'Riwayat Perkawinan Ket Usia3',
            'riwayat_persalinan_g' => 'Riwayat Persalinan G',
            'riwayat_persalinan_p' => 'Riwayat Persalinan P',
            'riwayat_persalinan_a' => 'Riwayat Persalinan A',
            'riwayat_persalinan_hidup' => 'Riwayat Persalinan Hidup',
            'riwayat_hamil_hpht' => 'Riwayat Hamil Hpht',
            'riwayat_hamil_usiahamil' => 'Riwayat Hamil Usiahamil',
            'riwayat_hamil_tp' => 'Riwayat Hamil Tp',
            'riwayat_hamil_imunisasi' => 'Riwayat Hamil Imunisasi',
            'riwayat_hamil_anc' => 'Riwayat Hamil Anc',
            'riwayat_hamil_ancke' => 'Riwayat Hamil Ancke',
            'riwayat_hamil_ket_ancke' => 'Riwayat Hamil Ket Ancke',
            'riwayat_hamil_keluhan_hamil_muda' => 'Riwayat Hamil Keluhan Hamil Muda',
            'riwayat_hamil_keluhan_hamil_tua' => 'Riwayat Hamil Keluhan Hamil Tua',
            'riwayat_kb' => 'Riwayat Kb',
            'riwayat_kb_lamanya' => 'Riwayat Kb Lamanya',
            'riwayat_kb_komplikasi' => 'Riwayat Kb Komplikasi',
            'riwayat_kb_ket_komplikasi' => 'Riwayat Kb Ket Komplikasi',
            'riwayat_kb_kapaberhenti' => 'Riwayat Kb Kapaberhenti',
            'riwayat_kb_alasanberhenti' => 'Riwayat Kb Alasanberhenti',
            'riwayat_genekologi' => 'Riwayat Genekologi',
            'riwayat_kebiasaan_obat' => 'Riwayat Kebiasaan Obat',
            'riwayat_kebiasaan_ket_obat' => 'Riwayat Kebiasaan Ket Obat',
            'riwayat_kebiasaan_merokok' => 'Riwayat Kebiasaan Merokok',
            'riwayat_kebiasaan_ket_merokok' => 'Riwayat Kebiasaan Ket Merokok',
            'riwayat_kebiasaan_alkohol' => 'Riwayat Kebiasaan Alkohol',
            'riwayat_kebiasaan_ket_alkohol' => 'Riwayat Kebiasaan Ket Alkohol',
            'riwayat_kebiasaan_narkoba' => 'Riwayat Kebiasaan Narkoba',
            'pemeriksaan_kebidanan_mental' => 'Pemeriksaan Kebidanan Mental',
            'pemeriksaan_kebidanan_keadaan_umum' => 'Pemeriksaan Kebidanan Keadaan Umum',
            'pemeriksaan_kebidanan_gcs' => 'Pemeriksaan Kebidanan Gcs',
            'pemeriksaan_kebidanan_td' => 'Pemeriksaan Kebidanan Td',
            'pemeriksaan_kebidanan_nadi' => 'Pemeriksaan Kebidanan Nadi',
            'pemeriksaan_kebidanan_rr' => 'Pemeriksaan Kebidanan Rr',
            'pemeriksaan_kebidanan_suhu' => 'Pemeriksaan Kebidanan Suhu',
            'pemeriksaan_kebidanan_spo2' => 'Pemeriksaan Kebidanan Spo2',
            'pemeriksaan_kebidanan_bb' => 'Pemeriksaan Kebidanan Bb',
            'pemeriksaan_kebidanan_tb' => 'Pemeriksaan Kebidanan Tb',
            'pemeriksaan_kebidanan_lila' => 'Pemeriksaan Kebidanan Lila',
            'pemeriksaan_kebidanan_tfu' => 'Pemeriksaan Kebidanan Tfu',
            'pemeriksaan_kebidanan_tbj' => 'Pemeriksaan Kebidanan Tbj',
            'pemeriksaan_kebidanan_letak' => 'Pemeriksaan Kebidanan Letak',
            'pemeriksaan_kebidanan_presentasi' => 'Pemeriksaan Kebidanan Presentasi',
            'pemeriksaan_kebidanan_penurunan' => 'Pemeriksaan Kebidanan Penurunan',
            'pemeriksaan_kebidanan_his' => 'Pemeriksaan Kebidanan His',
            'pemeriksaan_kebidanan_kekuatan' => 'Pemeriksaan Kebidanan Kekuatan',
            'pemeriksaan_kebidanan_lamanya' => 'Pemeriksaan Kebidanan Lamanya',
            'pemeriksaan_kebidanan_djj' => 'Pemeriksaan Kebidanan Djj',
            'pemeriksaan_kebidanan_ket_djj' => 'Pemeriksaan Kebidanan Ket Djj',
            'pemeriksaan_kebidanan_portio' => 'Pemeriksaan Kebidanan Portio',
            'pemeriksaan_kebidanan_pembukaan' => 'Pemeriksaan Kebidanan Pembukaan',
            'pemeriksaan_kebidanan_ketuban' => 'Pemeriksaan Kebidanan Ketuban',
            'pemeriksaan_kebidanan_hodge' => 'Pemeriksaan Kebidanan Hodge',
            'pemeriksaan_kebidanan_panggul' => 'Pemeriksaan Kebidanan Panggul',
            'pemeriksaan_kebidanan_inspekulo' => 'Pemeriksaan Kebidanan Inspekulo',
            'pemeriksaan_kebidanan_ket_inspekulo' => 'Pemeriksaan Kebidanan Ket Inspekulo',
            'pemeriksaan_kebidanan_lakmus' => 'Pemeriksaan Kebidanan Lakmus',
            'pemeriksaan_kebidanan_ket_lakmus' => 'Pemeriksaan Kebidanan Ket Lakmus',
            'pemeriksaan_kebidanan_ctg' => 'Pemeriksaan Kebidanan Ctg',
            'pemeriksaan_kebidanan_ket_ctg' => 'Pemeriksaan Kebidanan Ket Ctg',
            'pemeriksaan_umum_kepala' => 'Pemeriksaan Umum Kepala',
            'pemeriksaan_umum_muka' => 'Pemeriksaan Umum Muka',
            'pemeriksaan_umum_mata' => 'Pemeriksaan Umum Mata',
            'pemeriksaan_umum_hidung' => 'Pemeriksaan Umum Hidung',
            'pemeriksaan_umum_telinga' => 'Pemeriksaan Umum Telinga',
            'pemeriksaan_umum_mulut' => 'Pemeriksaan Umum Mulut',
            'pemeriksaan_umum_leher' => 'Pemeriksaan Umum Leher',
            'pemeriksaan_umum_dada' => 'Pemeriksaan Umum Dada',
            'pemeriksaan_umum_perut' => 'Pemeriksaan Umum Perut',
            'pemeriksaan_umum_genitalia' => 'Pemeriksaan Umum Genitalia',
            'pemeriksaan_umum_ekstrimitas' => 'Pemeriksaan Umum Ekstrimitas',
            'pengkajian_fungsi_kemampuan_aktifitas' => 'Pengkajian Fungsi Kemampuan Aktifitas',
            'pengkajian_fungsi_berjalan' => 'Pengkajian Fungsi Berjalan',
            'pengkajian_fungsi_ket_berjalan' => 'Pengkajian Fungsi Ket Berjalan',
            'pengkajian_fungsi_aktivitas' => 'Pengkajian Fungsi Aktivitas',
            'pengkajian_fungsi_ambulasi' => 'Pengkajian Fungsi Ambulasi',
            'pengkajian_fungsi_ekstrimitas_atas' => 'Pengkajian Fungsi Ekstrimitas Atas',
            'pengkajian_fungsi_ket_ekstrimitas_atas' => 'Pengkajian Fungsi Ket Ekstrimitas Atas',
            'pengkajian_fungsi_ekstrimitas_bawah' => 'Pengkajian Fungsi Ekstrimitas Bawah',
            'pengkajian_fungsi_ket_ekstrimitas_bawah' => 'Pengkajian Fungsi Ket Ekstrimitas Bawah',
            'pengkajian_fungsi_kemampuan_menggenggam' => 'Pengkajian Fungsi Kemampuan Menggenggam',
            'pengkajian_fungsi_ket_kemampuan_menggenggam' => 'Pengkajian Fungsi Ket Kemampuan Menggenggam',
            'pengkajian_fungsi_koordinasi' => 'Pengkajian Fungsi Koordinasi',
            'pengkajian_fungsi_ket_koordinasi' => 'Pengkajian Fungsi Ket Koordinasi',
            'pengkajian_fungsi_gangguan_fungsi' => 'Pengkajian Fungsi Gangguan Fungsi',
            'riwayat_psiko_kondisipsiko' => 'Riwayat Psiko Kondisipsiko',
            'riwayat_psiko_adakah_prilaku' => 'Riwayat Psiko Adakah Prilaku',
            'riwayat_psiko_ket_adakah_prilaku' => 'Riwayat Psiko Ket Adakah Prilaku',
            'riwayat_psiko_gangguan_jiwa' => 'Riwayat Psiko Gangguan Jiwa',
            'riwayat_psiko_hubungan_pasien' => 'Riwayat Psiko Hubungan Pasien',
            'riwayat_psiko_tinggal_dengan' => 'Riwayat Psiko Tinggal Dengan',
            'riwayat_psiko_ket_tinggal_dengan' => 'Riwayat Psiko Ket Tinggal Dengan',
            'riwayat_psiko_budaya' => 'Riwayat Psiko Budaya',
            'riwayat_psiko_ket_budaya' => 'Riwayat Psiko Ket Budaya',
            'riwayat_psiko_pend_pj' => 'Riwayat Psiko Pend Pj',
            'riwayat_psiko_edukasi_pada' => 'Riwayat Psiko Edukasi Pada',
            'riwayat_psiko_ket_edukasi_pada' => 'Riwayat Psiko Ket Edukasi Pada',
            'penilaian_nyeri' => 'Penilaian Nyeri',
            'penilaian_nyeri_penyebab' => 'Penilaian Nyeri Penyebab',
            'penilaian_nyeri_ket_penyebab' => 'Penilaian Nyeri Ket Penyebab',
            'penilaian_nyeri_kualitas' => 'Penilaian Nyeri Kualitas',
            'penilaian_nyeri_ket_kualitas' => 'Penilaian Nyeri Ket Kualitas',
            'penilaian_nyeri_lokasi' => 'Penilaian Nyeri Lokasi',
            'penilaian_nyeri_menyebar' => 'Penilaian Nyeri Menyebar',
            'penilaian_nyeri_skala' => 'Penilaian Nyeri Skala',
            'penilaian_nyeri_waktu' => 'Penilaian Nyeri Waktu',
            'penilaian_nyeri_hilang' => 'Penilaian Nyeri Hilang',
            'penilaian_nyeri_ket_hilang' => 'Penilaian Nyeri Ket Hilang',
            'penilaian_nyeri_diberitahukan_dokter' => 'Penilaian Nyeri Diberitahukan Dokter',
            'penilaian_nyeri_jam_diberitahukan_dokter' => 'Penilaian Nyeri Jam Diberitahukan Dokter',
            'penilaian_jatuh_skala1' => 'Penilaian Jatuh Skala1',
            'penilaian_jatuh_nilai1' => 'Penilaian Jatuh Nilai1',
            'penilaian_jatuh_skala2' => 'Penilaian Jatuh Skala2',
            'penilaian_jatuh_nilai2' => 'Penilaian Jatuh Nilai2',
            'penilaian_jatuh_skala3' => 'Penilaian Jatuh Skala3',
            'penilaian_jatuh_nilai3' => 'Penilaian Jatuh Nilai3',
            'penilaian_jatuh_skala4' => 'Penilaian Jatuh Skala4',
            'penilaian_jatuh_nilai4' => 'Penilaian Jatuh Nilai4',
            'penilaian_jatuh_skala5' => 'Penilaian Jatuh Skala5',
            'penilaian_jatuh_nilai5' => 'Penilaian Jatuh Nilai5',
            'penilaian_jatuh_skala6' => 'Penilaian Jatuh Skala6',
            'penilaian_jatuh_nilai6' => 'Penilaian Jatuh Nilai6',
            'penilaian_jatuh_totalnilai' => 'Penilaian Jatuh Totalnilai',
            'skrining_gizi1' => 'Skrining Gizi1',
            'nilai_gizi1' => 'Nilai Gizi1',
            'skrining_gizi2' => 'Skrining Gizi2',
            'nilai_gizi2' => 'Nilai Gizi2',
            'nilai_total_gizi' => 'Nilai Total Gizi',
            'skrining_gizi_diagnosa_khusus' => 'Skrining Gizi Diagnosa Khusus',
            'skrining_gizi_ket_diagnosa_khusus' => 'Skrining Gizi Ket Diagnosa Khusus',
            'skrining_gizi_diketahui_dietisen' => 'Skrining Gizi Diketahui Dietisen',
            'skrining_gizi_jam_diketahui_dietisen' => 'Skrining Gizi Jam Diketahui Dietisen',
            'masalah' => 'Masalah',
            'rencana' => 'Rencana',
            'nip1' => 'Nip1',
            'nip2' => 'Nip2',
            'kd_dokter' => 'Kd Dokter',
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
     * Gets query for [[Nip10]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip10()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip1']);
    }

    /**
     * Gets query for [[Nip20]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip20()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip2']);
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
