<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_awal_keperawatan_ranap".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $informasi
 * @property string $ket_informasi
 * @property string $tiba_diruang_rawat
 * @property string|null $kasus_trauma
 * @property string $cara_masuk
 * @property string $rps
 * @property string $rpd
 * @property string $rpk
 * @property string $rpo
 * @property string $riwayat_pembedahan
 * @property string $riwayat_dirawat_dirs
 * @property string $alat_bantu_dipakai
 * @property string $riwayat_kehamilan
 * @property string $riwayat_kehamilan_perkiraan
 * @property string $riwayat_tranfusi
 * @property string $riwayat_alergi
 * @property string $riwayat_merokok
 * @property string $riwayat_merokok_jumlah
 * @property string $riwayat_alkohol
 * @property string $riwayat_alkohol_jumlah
 * @property string $riwayat_narkoba
 * @property string $riwayat_olahraga
 * @property string $pemeriksaan_mental
 * @property string $pemeriksaan_keadaan_umum
 * @property string $pemeriksaan_gcs
 * @property string $pemeriksaan_td
 * @property string $pemeriksaan_nadi
 * @property string $pemeriksaan_rr
 * @property string $pemeriksaan_suhu
 * @property string $pemeriksaan_spo2
 * @property string $pemeriksaan_bb
 * @property string $pemeriksaan_tb
 * @property string $pemeriksaan_susunan_kepala
 * @property string $pemeriksaan_susunan_kepala_keterangan
 * @property string $pemeriksaan_susunan_wajah
 * @property string $pemeriksaan_susunan_wajah_keterangan
 * @property string $pemeriksaan_susunan_leher
 * @property string $pemeriksaan_susunan_kejang
 * @property string $pemeriksaan_susunan_kejang_keterangan
 * @property string $pemeriksaan_susunan_sensorik
 * @property string $pemeriksaan_kardiovaskuler_denyut_nadi
 * @property string $pemeriksaan_kardiovaskuler_sirkulasi
 * @property string $pemeriksaan_kardiovaskuler_sirkulasi_keterangan
 * @property string $pemeriksaan_kardiovaskuler_pulsasi
 * @property string $pemeriksaan_respirasi_pola_nafas
 * @property string $pemeriksaan_respirasi_retraksi
 * @property string $pemeriksaan_respirasi_suara_nafas
 * @property string $pemeriksaan_respirasi_volume_pernafasan
 * @property string $pemeriksaan_respirasi_jenis_pernafasan
 * @property string $pemeriksaan_respirasi_jenis_pernafasan_keterangan
 * @property string $pemeriksaan_respirasi_irama_nafas
 * @property string $pemeriksaan_respirasi_batuk
 * @property string $pemeriksaan_gastrointestinal_mulut
 * @property string $pemeriksaan_gastrointestinal_mulut_keterangan
 * @property string $pemeriksaan_gastrointestinal_gigi
 * @property string $pemeriksaan_gastrointestinal_gigi_keterangan
 * @property string $pemeriksaan_gastrointestinal_lidah
 * @property string $pemeriksaan_gastrointestinal_lidah_keterangan
 * @property string $pemeriksaan_gastrointestinal_tenggorokan
 * @property string $pemeriksaan_gastrointestinal_tenggorokan_keterangan
 * @property string $pemeriksaan_gastrointestinal_abdomen
 * @property string $pemeriksaan_gastrointestinal_abdomen_keterangan
 * @property string $pemeriksaan_gastrointestinal_peistatik_usus
 * @property string $pemeriksaan_gastrointestinal_anus
 * @property string $pemeriksaan_neurologi_pengelihatan
 * @property string $pemeriksaan_neurologi_pengelihatan_keterangan
 * @property string $pemeriksaan_neurologi_alat_bantu_penglihatan
 * @property string $pemeriksaan_neurologi_pendengaran
 * @property string $pemeriksaan_neurologi_bicara
 * @property string $pemeriksaan_neurologi_bicara_keterangan
 * @property string $pemeriksaan_neurologi_sensorik
 * @property string $pemeriksaan_neurologi_motorik
 * @property string $pemeriksaan_neurologi_kekuatan_otot
 * @property string $pemeriksaan_integument_warnakulit
 * @property string $pemeriksaan_integument_turgor
 * @property string $pemeriksaan_integument_kulit
 * @property string $pemeriksaan_integument_dekubitas
 * @property string $pemeriksaan_muskuloskletal_pergerakan_sendi
 * @property string $pemeriksaan_muskuloskletal_kekauatan_otot
 * @property string $pemeriksaan_muskuloskletal_nyeri_sendi
 * @property string $pemeriksaan_muskuloskletal_nyeri_sendi_keterangan
 * @property string $pemeriksaan_muskuloskletal_oedema
 * @property string $pemeriksaan_muskuloskletal_oedema_keterangan
 * @property string $pemeriksaan_muskuloskletal_fraktur
 * @property string $pemeriksaan_muskuloskletal_fraktur_keterangan
 * @property string $pemeriksaan_eliminasi_bab_frekuensi_jumlah
 * @property string $pemeriksaan_eliminasi_bab_frekuensi_durasi
 * @property string $pemeriksaan_eliminasi_bab_konsistensi
 * @property string $pemeriksaan_eliminasi_bab_warna
 * @property string $pemeriksaan_eliminasi_bak_frekuensi_jumlah
 * @property string $pemeriksaan_eliminasi_bak_frekuensi_durasi
 * @property string $pemeriksaan_eliminasi_bak_warna
 * @property string $pemeriksaan_eliminasi_bak_lainlain
 * @property string $pola_aktifitas_makanminum
 * @property string $pola_aktifitas_mandi
 * @property string $pola_aktifitas_eliminasi
 * @property string $pola_aktifitas_berpakaian
 * @property string $pola_aktifitas_berpindah
 * @property string $pola_nutrisi_frekuesi_makan
 * @property string $pola_nutrisi_jenis_makanan
 * @property string $pola_nutrisi_porsi_makan
 * @property string $pola_tidur_lama_tidur
 * @property string $pola_tidur_gangguan
 * @property string $pengkajian_fungsi_kemampuan_sehari
 * @property string $pengkajian_fungsi_aktifitas
 * @property string $pengkajian_fungsi_berjalan
 * @property string $pengkajian_fungsi_berjalan_keterangan
 * @property string $pengkajian_fungsi_ambulasi
 * @property string $pengkajian_fungsi_ekstrimitas_atas
 * @property string $pengkajian_fungsi_ekstrimitas_atas_keterangan
 * @property string $pengkajian_fungsi_ekstrimitas_bawah
 * @property string $pengkajian_fungsi_ekstrimitas_bawah_keterangan
 * @property string $pengkajian_fungsi_menggenggam
 * @property string $pengkajian_fungsi_menggenggam_keterangan
 * @property string $pengkajian_fungsi_koordinasi
 * @property string $pengkajian_fungsi_koordinasi_keterangan
 * @property string $pengkajian_fungsi_kesimpulan
 * @property string $riwayat_psiko_kondisi_psiko
 * @property string $riwayat_psiko_gangguan_jiwa
 * @property string $riwayat_psiko_perilaku
 * @property string $riwayat_psiko_perilaku_keterangan
 * @property string $riwayat_psiko_hubungan_keluarga
 * @property string $riwayat_psiko_tinggal
 * @property string $riwayat_psiko_tinggal_keterangan
 * @property string $riwayat_psiko_nilai_kepercayaan
 * @property string $riwayat_psiko_nilai_kepercayaan_keterangan
 * @property string $riwayat_psiko_pendidikan_pj
 * @property string $riwayat_psiko_edukasi_diberikan
 * @property string $riwayat_psiko_edukasi_diberikan_keterangan
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
 * @property string|null $penilaian_jatuhmorse_skala1
 * @property int|null $penilaian_jatuhmorse_nilai1
 * @property string|null $penilaian_jatuhmorse_skala2
 * @property int|null $penilaian_jatuhmorse_nilai2
 * @property string|null $penilaian_jatuhmorse_skala3
 * @property int|null $penilaian_jatuhmorse_nilai3
 * @property string|null $penilaian_jatuhmorse_skala4
 * @property int|null $penilaian_jatuhmorse_nilai4
 * @property string|null $penilaian_jatuhmorse_skala5
 * @property int|null $penilaian_jatuhmorse_nilai5
 * @property string|null $penilaian_jatuhmorse_skala6
 * @property int|null $penilaian_jatuhmorse_nilai6
 * @property int|null $penilaian_jatuhmorse_totalnilai
 * @property string|null $penilaian_jatuhsydney_skala1
 * @property int|null $penilaian_jatuhsydney_nilai1
 * @property string|null $penilaian_jatuhsydney_skala2
 * @property int|null $penilaian_jatuhsydney_nilai2
 * @property string|null $penilaian_jatuhsydney_skala3
 * @property int|null $penilaian_jatuhsydney_nilai3
 * @property string|null $penilaian_jatuhsydney_skala4
 * @property int|null $penilaian_jatuhsydney_nilai4
 * @property string|null $penilaian_jatuhsydney_skala5
 * @property int|null $penilaian_jatuhsydney_nilai5
 * @property string|null $penilaian_jatuhsydney_skala6
 * @property int|null $penilaian_jatuhsydney_nilai6
 * @property string|null $penilaian_jatuhsydney_skala7
 * @property int|null $penilaian_jatuhsydney_nilai7
 * @property string|null $penilaian_jatuhsydney_skala8
 * @property int|null $penilaian_jatuhsydney_nilai8
 * @property string|null $penilaian_jatuhsydney_skala9
 * @property int|null $penilaian_jatuhsydney_nilai9
 * @property string|null $penilaian_jatuhsydney_skala10
 * @property int|null $penilaian_jatuhsydney_nilai10
 * @property string|null $penilaian_jatuhsydney_skala11
 * @property int|null $penilaian_jatuhsydney_nilai11
 * @property int|null $penilaian_jatuhsydney_totalnilai
 * @property string|null $skrining_gizi1
 * @property int|null $nilai_gizi1
 * @property string|null $skrining_gizi2
 * @property int|null $nilai_gizi2
 * @property float|null $nilai_total_gizi
 * @property string|null $skrining_gizi_diagnosa_khusus
 * @property string|null $skrining_gizi_ket_diagnosa_khusus
 * @property string|null $skrining_gizi_diketahui_dietisen
 * @property string|null $skrining_gizi_jam_diketahui_dietisen
 * @property string|null $rencana
 * @property string $nip1
 * @property string $nip2
 * @property string $kd_dokter
 *
 * @property Dokter $kdDokter
 * @property MasterMasalahKeperawatan[] $kodeMasalahs
 * @property MasterRencanaKeperawatan[] $kodeRencanas
 * @property Petugas $nip10
 * @property Petugas $nip20
 * @property RegPeriksa $noRawat
 * @property PenilaianAwalKeperawatanRanapMasalah[] $penilaianAwalKeperawatanRanapMasalahs
 * @property PenilaianAwalKeperawatanRanapRencana[] $penilaianAwalKeperawatanRanapRencanas
 */
class PenilaianAwalKeperawatanRanap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_awal_keperawatan_ranap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'informasi', 'ket_informasi', 'tiba_diruang_rawat', 'cara_masuk', 'rps', 'rpd', 'rpk', 'rpo', 'riwayat_pembedahan', 'riwayat_dirawat_dirs', 'alat_bantu_dipakai', 'riwayat_kehamilan', 'riwayat_kehamilan_perkiraan', 'riwayat_tranfusi', 'riwayat_alergi', 'riwayat_merokok', 'riwayat_merokok_jumlah', 'riwayat_alkohol', 'riwayat_alkohol_jumlah', 'riwayat_narkoba', 'riwayat_olahraga', 'pemeriksaan_mental', 'pemeriksaan_keadaan_umum', 'pemeriksaan_gcs', 'pemeriksaan_td', 'pemeriksaan_nadi', 'pemeriksaan_rr', 'pemeriksaan_suhu', 'pemeriksaan_spo2', 'pemeriksaan_bb', 'pemeriksaan_tb', 'pemeriksaan_susunan_kepala', 'pemeriksaan_susunan_kepala_keterangan', 'pemeriksaan_susunan_wajah', 'pemeriksaan_susunan_wajah_keterangan', 'pemeriksaan_susunan_leher', 'pemeriksaan_susunan_kejang', 'pemeriksaan_susunan_kejang_keterangan', 'pemeriksaan_susunan_sensorik', 'pemeriksaan_kardiovaskuler_denyut_nadi', 'pemeriksaan_kardiovaskuler_sirkulasi', 'pemeriksaan_kardiovaskuler_sirkulasi_keterangan', 'pemeriksaan_kardiovaskuler_pulsasi', 'pemeriksaan_respirasi_pola_nafas', 'pemeriksaan_respirasi_retraksi', 'pemeriksaan_respirasi_suara_nafas', 'pemeriksaan_respirasi_volume_pernafasan', 'pemeriksaan_respirasi_jenis_pernafasan', 'pemeriksaan_respirasi_jenis_pernafasan_keterangan', 'pemeriksaan_respirasi_irama_nafas', 'pemeriksaan_respirasi_batuk', 'pemeriksaan_gastrointestinal_mulut', 'pemeriksaan_gastrointestinal_mulut_keterangan', 'pemeriksaan_gastrointestinal_gigi', 'pemeriksaan_gastrointestinal_gigi_keterangan', 'pemeriksaan_gastrointestinal_lidah', 'pemeriksaan_gastrointestinal_lidah_keterangan', 'pemeriksaan_gastrointestinal_tenggorokan', 'pemeriksaan_gastrointestinal_tenggorokan_keterangan', 'pemeriksaan_gastrointestinal_abdomen', 'pemeriksaan_gastrointestinal_abdomen_keterangan', 'pemeriksaan_gastrointestinal_peistatik_usus', 'pemeriksaan_gastrointestinal_anus', 'pemeriksaan_neurologi_pengelihatan', 'pemeriksaan_neurologi_pengelihatan_keterangan', 'pemeriksaan_neurologi_alat_bantu_penglihatan', 'pemeriksaan_neurologi_pendengaran', 'pemeriksaan_neurologi_bicara', 'pemeriksaan_neurologi_bicara_keterangan', 'pemeriksaan_neurologi_sensorik', 'pemeriksaan_neurologi_motorik', 'pemeriksaan_neurologi_kekuatan_otot', 'pemeriksaan_integument_warnakulit', 'pemeriksaan_integument_turgor', 'pemeriksaan_integument_kulit', 'pemeriksaan_integument_dekubitas', 'pemeriksaan_muskuloskletal_pergerakan_sendi', 'pemeriksaan_muskuloskletal_kekauatan_otot', 'pemeriksaan_muskuloskletal_nyeri_sendi', 'pemeriksaan_muskuloskletal_nyeri_sendi_keterangan', 'pemeriksaan_muskuloskletal_oedema', 'pemeriksaan_muskuloskletal_oedema_keterangan', 'pemeriksaan_muskuloskletal_fraktur', 'pemeriksaan_muskuloskletal_fraktur_keterangan', 'pemeriksaan_eliminasi_bab_frekuensi_jumlah', 'pemeriksaan_eliminasi_bab_frekuensi_durasi', 'pemeriksaan_eliminasi_bab_konsistensi', 'pemeriksaan_eliminasi_bab_warna', 'pemeriksaan_eliminasi_bak_frekuensi_jumlah', 'pemeriksaan_eliminasi_bak_frekuensi_durasi', 'pemeriksaan_eliminasi_bak_warna', 'pemeriksaan_eliminasi_bak_lainlain', 'pola_aktifitas_makanminum', 'pola_aktifitas_mandi', 'pola_aktifitas_eliminasi', 'pola_aktifitas_berpakaian', 'pola_aktifitas_berpindah', 'pola_nutrisi_frekuesi_makan', 'pola_nutrisi_jenis_makanan', 'pola_nutrisi_porsi_makan', 'pola_tidur_lama_tidur', 'pola_tidur_gangguan', 'pengkajian_fungsi_kemampuan_sehari', 'pengkajian_fungsi_aktifitas', 'pengkajian_fungsi_berjalan', 'pengkajian_fungsi_berjalan_keterangan', 'pengkajian_fungsi_ambulasi', 'pengkajian_fungsi_ekstrimitas_atas', 'pengkajian_fungsi_ekstrimitas_atas_keterangan', 'pengkajian_fungsi_ekstrimitas_bawah', 'pengkajian_fungsi_ekstrimitas_bawah_keterangan', 'pengkajian_fungsi_menggenggam', 'pengkajian_fungsi_menggenggam_keterangan', 'pengkajian_fungsi_koordinasi', 'pengkajian_fungsi_koordinasi_keterangan', 'pengkajian_fungsi_kesimpulan', 'riwayat_psiko_kondisi_psiko', 'riwayat_psiko_gangguan_jiwa', 'riwayat_psiko_perilaku', 'riwayat_psiko_perilaku_keterangan', 'riwayat_psiko_hubungan_keluarga', 'riwayat_psiko_tinggal', 'riwayat_psiko_tinggal_keterangan', 'riwayat_psiko_nilai_kepercayaan', 'riwayat_psiko_nilai_kepercayaan_keterangan', 'riwayat_psiko_pendidikan_pj', 'riwayat_psiko_edukasi_diberikan', 'riwayat_psiko_edukasi_diberikan_keterangan', 'penilaian_nyeri', 'penilaian_nyeri_penyebab', 'penilaian_nyeri_ket_penyebab', 'penilaian_nyeri_kualitas', 'penilaian_nyeri_ket_kualitas', 'penilaian_nyeri_lokasi', 'penilaian_nyeri_menyebar', 'penilaian_nyeri_skala', 'penilaian_nyeri_waktu', 'penilaian_nyeri_hilang', 'penilaian_nyeri_ket_hilang', 'penilaian_nyeri_diberitahukan_dokter', 'penilaian_nyeri_jam_diberitahukan_dokter', 'nip1', 'nip2', 'kd_dokter'], 'required'],
            [['tanggal'], 'safe'],
            [['informasi', 'tiba_diruang_rawat', 'kasus_trauma', 'cara_masuk', 'alat_bantu_dipakai', 'riwayat_kehamilan', 'riwayat_merokok', 'riwayat_alkohol', 'riwayat_narkoba', 'riwayat_olahraga', 'pemeriksaan_keadaan_umum', 'pemeriksaan_susunan_kepala', 'pemeriksaan_susunan_wajah', 'pemeriksaan_susunan_leher', 'pemeriksaan_susunan_kejang', 'pemeriksaan_susunan_sensorik', 'pemeriksaan_kardiovaskuler_denyut_nadi', 'pemeriksaan_kardiovaskuler_sirkulasi', 'pemeriksaan_kardiovaskuler_pulsasi', 'pemeriksaan_respirasi_pola_nafas', 'pemeriksaan_respirasi_retraksi', 'pemeriksaan_respirasi_suara_nafas', 'pemeriksaan_respirasi_volume_pernafasan', 'pemeriksaan_respirasi_jenis_pernafasan', 'pemeriksaan_respirasi_irama_nafas', 'pemeriksaan_respirasi_batuk', 'pemeriksaan_gastrointestinal_mulut', 'pemeriksaan_gastrointestinal_gigi', 'pemeriksaan_gastrointestinal_lidah', 'pemeriksaan_gastrointestinal_tenggorokan', 'pemeriksaan_gastrointestinal_abdomen', 'pemeriksaan_gastrointestinal_peistatik_usus', 'pemeriksaan_gastrointestinal_anus', 'pemeriksaan_neurologi_pengelihatan', 'pemeriksaan_neurologi_alat_bantu_penglihatan', 'pemeriksaan_neurologi_pendengaran', 'pemeriksaan_neurologi_bicara', 'pemeriksaan_neurologi_sensorik', 'pemeriksaan_neurologi_motorik', 'pemeriksaan_neurologi_kekuatan_otot', 'pemeriksaan_integument_warnakulit', 'pemeriksaan_integument_turgor', 'pemeriksaan_integument_kulit', 'pemeriksaan_integument_dekubitas', 'pemeriksaan_muskuloskletal_pergerakan_sendi', 'pemeriksaan_muskuloskletal_kekauatan_otot', 'pemeriksaan_muskuloskletal_nyeri_sendi', 'pemeriksaan_muskuloskletal_oedema', 'pemeriksaan_muskuloskletal_fraktur', 'pola_aktifitas_makanminum', 'pola_aktifitas_mandi', 'pola_aktifitas_eliminasi', 'pola_aktifitas_berpakaian', 'pola_aktifitas_berpindah', 'pola_tidur_gangguan', 'pengkajian_fungsi_kemampuan_sehari', 'pengkajian_fungsi_aktifitas', 'pengkajian_fungsi_berjalan', 'pengkajian_fungsi_ambulasi', 'pengkajian_fungsi_ekstrimitas_atas', 'pengkajian_fungsi_ekstrimitas_bawah', 'pengkajian_fungsi_menggenggam', 'pengkajian_fungsi_koordinasi', 'pengkajian_fungsi_kesimpulan', 'riwayat_psiko_kondisi_psiko', 'riwayat_psiko_gangguan_jiwa', 'riwayat_psiko_perilaku', 'riwayat_psiko_hubungan_keluarga', 'riwayat_psiko_tinggal', 'riwayat_psiko_nilai_kepercayaan', 'riwayat_psiko_pendidikan_pj', 'riwayat_psiko_edukasi_diberikan', 'penilaian_nyeri', 'penilaian_nyeri_penyebab', 'penilaian_nyeri_kualitas', 'penilaian_nyeri_menyebar', 'penilaian_nyeri_skala', 'penilaian_nyeri_hilang', 'penilaian_nyeri_diberitahukan_dokter', 'penilaian_jatuhmorse_skala1', 'penilaian_jatuhmorse_skala2', 'penilaian_jatuhmorse_skala3', 'penilaian_jatuhmorse_skala4', 'penilaian_jatuhmorse_skala5', 'penilaian_jatuhmorse_skala6', 'penilaian_jatuhsydney_skala1', 'penilaian_jatuhsydney_skala2', 'penilaian_jatuhsydney_skala3', 'penilaian_jatuhsydney_skala4', 'penilaian_jatuhsydney_skala5', 'penilaian_jatuhsydney_skala6', 'penilaian_jatuhsydney_skala7', 'penilaian_jatuhsydney_skala8', 'penilaian_jatuhsydney_skala9', 'penilaian_jatuhsydney_skala10', 'penilaian_jatuhsydney_skala11', 'skrining_gizi1', 'skrining_gizi2', 'skrining_gizi_diagnosa_khusus', 'skrining_gizi_diketahui_dietisen'], 'string'],
            [['penilaian_jatuhmorse_nilai1', 'penilaian_jatuhmorse_nilai2', 'penilaian_jatuhmorse_nilai3', 'penilaian_jatuhmorse_nilai4', 'penilaian_jatuhmorse_nilai5', 'penilaian_jatuhmorse_nilai6', 'penilaian_jatuhmorse_totalnilai', 'penilaian_jatuhsydney_nilai1', 'penilaian_jatuhsydney_nilai2', 'penilaian_jatuhsydney_nilai3', 'penilaian_jatuhsydney_nilai4', 'penilaian_jatuhsydney_nilai5', 'penilaian_jatuhsydney_nilai6', 'penilaian_jatuhsydney_nilai7', 'penilaian_jatuhsydney_nilai8', 'penilaian_jatuhsydney_nilai9', 'penilaian_jatuhsydney_nilai10', 'penilaian_jatuhsydney_nilai11', 'penilaian_jatuhsydney_totalnilai', 'nilai_gizi1', 'nilai_gizi2'], 'integer'],
            [['nilai_total_gizi'], 'number'],
            [['no_rawat'], 'string', 'max' => 17],
            [['ket_informasi', 'riwayat_kehamilan_perkiraan', 'pemeriksaan_eliminasi_bab_konsistensi', 'pemeriksaan_eliminasi_bab_warna', 'pemeriksaan_eliminasi_bak_warna', 'pemeriksaan_eliminasi_bak_lainlain'], 'string', 'max' => 30],
            [['rps'], 'string', 'max' => 300],
            [['rpd', 'rpk', 'rpo'], 'string', 'max' => 100],
            [['riwayat_pembedahan', 'riwayat_dirawat_dirs', 'riwayat_tranfusi', 'riwayat_alergi', 'pemeriksaan_mental', 'pengkajian_fungsi_berjalan_keterangan', 'pengkajian_fungsi_ekstrimitas_atas_keterangan', 'pengkajian_fungsi_ekstrimitas_bawah_keterangan', 'pengkajian_fungsi_menggenggam_keterangan', 'pengkajian_fungsi_koordinasi_keterangan', 'riwayat_psiko_perilaku_keterangan', 'riwayat_psiko_tinggal_keterangan', 'riwayat_psiko_nilai_kepercayaan_keterangan', 'riwayat_psiko_edukasi_diberikan_keterangan'], 'string', 'max' => 40],
            [['riwayat_merokok_jumlah', 'riwayat_alkohol_jumlah', 'pemeriksaan_nadi', 'pemeriksaan_rr', 'pemeriksaan_suhu', 'pemeriksaan_spo2', 'pemeriksaan_bb', 'pemeriksaan_tb', 'pemeriksaan_eliminasi_bab_frekuensi_jumlah', 'pemeriksaan_eliminasi_bak_frekuensi_jumlah', 'penilaian_nyeri_waktu'], 'string', 'max' => 5],
            [['pemeriksaan_gcs', 'pemeriksaan_eliminasi_bab_frekuensi_durasi', 'pemeriksaan_eliminasi_bak_frekuensi_durasi', 'penilaian_nyeri_jam_diberitahukan_dokter', 'skrining_gizi_jam_diketahui_dietisen'], 'string', 'max' => 10],
            [['pemeriksaan_td'], 'string', 'max' => 8],
            [['pemeriksaan_susunan_kepala_keterangan', 'pemeriksaan_susunan_wajah_keterangan', 'pemeriksaan_susunan_kejang_keterangan', 'pemeriksaan_kardiovaskuler_sirkulasi_keterangan', 'pemeriksaan_respirasi_jenis_pernafasan_keterangan', 'pemeriksaan_gastrointestinal_mulut_keterangan', 'pemeriksaan_gastrointestinal_gigi_keterangan', 'pemeriksaan_gastrointestinal_lidah_keterangan', 'pemeriksaan_gastrointestinal_tenggorokan_keterangan', 'pemeriksaan_gastrointestinal_abdomen_keterangan', 'pemeriksaan_neurologi_pengelihatan_keterangan', 'pemeriksaan_neurologi_bicara_keterangan', 'pemeriksaan_muskuloskletal_nyeri_sendi_keterangan', 'pemeriksaan_muskuloskletal_oedema_keterangan', 'pemeriksaan_muskuloskletal_fraktur_keterangan', 'penilaian_nyeri_ket_penyebab', 'penilaian_nyeri_ket_kualitas', 'penilaian_nyeri_lokasi', 'penilaian_nyeri_ket_hilang', 'skrining_gizi_ket_diagnosa_khusus'], 'string', 'max' => 50],
            [['pola_nutrisi_frekuesi_makan', 'pola_nutrisi_porsi_makan', 'pola_tidur_lama_tidur'], 'string', 'max' => 3],
            [['pola_nutrisi_jenis_makanan', 'nip1', 'nip2', 'kd_dokter'], 'string', 'max' => 20],
            [['rencana'], 'string', 'max' => 200],
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
            'ket_informasi' => 'Ket Informasi',
            'tiba_diruang_rawat' => 'Tiba Diruang Rawat',
            'kasus_trauma' => 'Kasus Trauma',
            'cara_masuk' => 'Cara Masuk',
            'rps' => 'Rps',
            'rpd' => 'Rpd',
            'rpk' => 'Rpk',
            'rpo' => 'Rpo',
            'riwayat_pembedahan' => 'Riwayat Pembedahan',
            'riwayat_dirawat_dirs' => 'Riwayat Dirawat Dirs',
            'alat_bantu_dipakai' => 'Alat Bantu Dipakai',
            'riwayat_kehamilan' => 'Riwayat Kehamilan',
            'riwayat_kehamilan_perkiraan' => 'Riwayat Kehamilan Perkiraan',
            'riwayat_tranfusi' => 'Riwayat Tranfusi',
            'riwayat_alergi' => 'Riwayat Alergi',
            'riwayat_merokok' => 'Riwayat Merokok',
            'riwayat_merokok_jumlah' => 'Riwayat Merokok Jumlah',
            'riwayat_alkohol' => 'Riwayat Alkohol',
            'riwayat_alkohol_jumlah' => 'Riwayat Alkohol Jumlah',
            'riwayat_narkoba' => 'Riwayat Narkoba',
            'riwayat_olahraga' => 'Riwayat Olahraga',
            'pemeriksaan_mental' => 'Pemeriksaan Mental',
            'pemeriksaan_keadaan_umum' => 'Pemeriksaan Keadaan Umum',
            'pemeriksaan_gcs' => 'Pemeriksaan Gcs',
            'pemeriksaan_td' => 'Pemeriksaan Td',
            'pemeriksaan_nadi' => 'Pemeriksaan Nadi',
            'pemeriksaan_rr' => 'Pemeriksaan Rr',
            'pemeriksaan_suhu' => 'Pemeriksaan Suhu',
            'pemeriksaan_spo2' => 'Pemeriksaan Spo2',
            'pemeriksaan_bb' => 'Pemeriksaan Bb',
            'pemeriksaan_tb' => 'Pemeriksaan Tb',
            'pemeriksaan_susunan_kepala' => 'Pemeriksaan Susunan Kepala',
            'pemeriksaan_susunan_kepala_keterangan' => 'Pemeriksaan Susunan Kepala Keterangan',
            'pemeriksaan_susunan_wajah' => 'Pemeriksaan Susunan Wajah',
            'pemeriksaan_susunan_wajah_keterangan' => 'Pemeriksaan Susunan Wajah Keterangan',
            'pemeriksaan_susunan_leher' => 'Pemeriksaan Susunan Leher',
            'pemeriksaan_susunan_kejang' => 'Pemeriksaan Susunan Kejang',
            'pemeriksaan_susunan_kejang_keterangan' => 'Pemeriksaan Susunan Kejang Keterangan',
            'pemeriksaan_susunan_sensorik' => 'Pemeriksaan Susunan Sensorik',
            'pemeriksaan_kardiovaskuler_denyut_nadi' => 'Pemeriksaan Kardiovaskuler Denyut Nadi',
            'pemeriksaan_kardiovaskuler_sirkulasi' => 'Pemeriksaan Kardiovaskuler Sirkulasi',
            'pemeriksaan_kardiovaskuler_sirkulasi_keterangan' => 'Pemeriksaan Kardiovaskuler Sirkulasi Keterangan',
            'pemeriksaan_kardiovaskuler_pulsasi' => 'Pemeriksaan Kardiovaskuler Pulsasi',
            'pemeriksaan_respirasi_pola_nafas' => 'Pemeriksaan Respirasi Pola Nafas',
            'pemeriksaan_respirasi_retraksi' => 'Pemeriksaan Respirasi Retraksi',
            'pemeriksaan_respirasi_suara_nafas' => 'Pemeriksaan Respirasi Suara Nafas',
            'pemeriksaan_respirasi_volume_pernafasan' => 'Pemeriksaan Respirasi Volume Pernafasan',
            'pemeriksaan_respirasi_jenis_pernafasan' => 'Pemeriksaan Respirasi Jenis Pernafasan',
            'pemeriksaan_respirasi_jenis_pernafasan_keterangan' => 'Pemeriksaan Respirasi Jenis Pernafasan Keterangan',
            'pemeriksaan_respirasi_irama_nafas' => 'Pemeriksaan Respirasi Irama Nafas',
            'pemeriksaan_respirasi_batuk' => 'Pemeriksaan Respirasi Batuk',
            'pemeriksaan_gastrointestinal_mulut' => 'Pemeriksaan Gastrointestinal Mulut',
            'pemeriksaan_gastrointestinal_mulut_keterangan' => 'Pemeriksaan Gastrointestinal Mulut Keterangan',
            'pemeriksaan_gastrointestinal_gigi' => 'Pemeriksaan Gastrointestinal Gigi',
            'pemeriksaan_gastrointestinal_gigi_keterangan' => 'Pemeriksaan Gastrointestinal Gigi Keterangan',
            'pemeriksaan_gastrointestinal_lidah' => 'Pemeriksaan Gastrointestinal Lidah',
            'pemeriksaan_gastrointestinal_lidah_keterangan' => 'Pemeriksaan Gastrointestinal Lidah Keterangan',
            'pemeriksaan_gastrointestinal_tenggorokan' => 'Pemeriksaan Gastrointestinal Tenggorokan',
            'pemeriksaan_gastrointestinal_tenggorokan_keterangan' => 'Pemeriksaan Gastrointestinal Tenggorokan Keterangan',
            'pemeriksaan_gastrointestinal_abdomen' => 'Pemeriksaan Gastrointestinal Abdomen',
            'pemeriksaan_gastrointestinal_abdomen_keterangan' => 'Pemeriksaan Gastrointestinal Abdomen Keterangan',
            'pemeriksaan_gastrointestinal_peistatik_usus' => 'Pemeriksaan Gastrointestinal Peistatik Usus',
            'pemeriksaan_gastrointestinal_anus' => 'Pemeriksaan Gastrointestinal Anus',
            'pemeriksaan_neurologi_pengelihatan' => 'Pemeriksaan Neurologi Pengelihatan',
            'pemeriksaan_neurologi_pengelihatan_keterangan' => 'Pemeriksaan Neurologi Pengelihatan Keterangan',
            'pemeriksaan_neurologi_alat_bantu_penglihatan' => 'Pemeriksaan Neurologi Alat Bantu Penglihatan',
            'pemeriksaan_neurologi_pendengaran' => 'Pemeriksaan Neurologi Pendengaran',
            'pemeriksaan_neurologi_bicara' => 'Pemeriksaan Neurologi Bicara',
            'pemeriksaan_neurologi_bicara_keterangan' => 'Pemeriksaan Neurologi Bicara Keterangan',
            'pemeriksaan_neurologi_sensorik' => 'Pemeriksaan Neurologi Sensorik',
            'pemeriksaan_neurologi_motorik' => 'Pemeriksaan Neurologi Motorik',
            'pemeriksaan_neurologi_kekuatan_otot' => 'Pemeriksaan Neurologi Kekuatan Otot',
            'pemeriksaan_integument_warnakulit' => 'Pemeriksaan Integument Warnakulit',
            'pemeriksaan_integument_turgor' => 'Pemeriksaan Integument Turgor',
            'pemeriksaan_integument_kulit' => 'Pemeriksaan Integument Kulit',
            'pemeriksaan_integument_dekubitas' => 'Pemeriksaan Integument Dekubitas',
            'pemeriksaan_muskuloskletal_pergerakan_sendi' => 'Pemeriksaan Muskuloskletal Pergerakan Sendi',
            'pemeriksaan_muskuloskletal_kekauatan_otot' => 'Pemeriksaan Muskuloskletal Kekauatan Otot',
            'pemeriksaan_muskuloskletal_nyeri_sendi' => 'Pemeriksaan Muskuloskletal Nyeri Sendi',
            'pemeriksaan_muskuloskletal_nyeri_sendi_keterangan' => 'Pemeriksaan Muskuloskletal Nyeri Sendi Keterangan',
            'pemeriksaan_muskuloskletal_oedema' => 'Pemeriksaan Muskuloskletal Oedema',
            'pemeriksaan_muskuloskletal_oedema_keterangan' => 'Pemeriksaan Muskuloskletal Oedema Keterangan',
            'pemeriksaan_muskuloskletal_fraktur' => 'Pemeriksaan Muskuloskletal Fraktur',
            'pemeriksaan_muskuloskletal_fraktur_keterangan' => 'Pemeriksaan Muskuloskletal Fraktur Keterangan',
            'pemeriksaan_eliminasi_bab_frekuensi_jumlah' => 'Pemeriksaan Eliminasi Bab Frekuensi Jumlah',
            'pemeriksaan_eliminasi_bab_frekuensi_durasi' => 'Pemeriksaan Eliminasi Bab Frekuensi Durasi',
            'pemeriksaan_eliminasi_bab_konsistensi' => 'Pemeriksaan Eliminasi Bab Konsistensi',
            'pemeriksaan_eliminasi_bab_warna' => 'Pemeriksaan Eliminasi Bab Warna',
            'pemeriksaan_eliminasi_bak_frekuensi_jumlah' => 'Pemeriksaan Eliminasi Bak Frekuensi Jumlah',
            'pemeriksaan_eliminasi_bak_frekuensi_durasi' => 'Pemeriksaan Eliminasi Bak Frekuensi Durasi',
            'pemeriksaan_eliminasi_bak_warna' => 'Pemeriksaan Eliminasi Bak Warna',
            'pemeriksaan_eliminasi_bak_lainlain' => 'Pemeriksaan Eliminasi Bak Lainlain',
            'pola_aktifitas_makanminum' => 'Pola Aktifitas Makanminum',
            'pola_aktifitas_mandi' => 'Pola Aktifitas Mandi',
            'pola_aktifitas_eliminasi' => 'Pola Aktifitas Eliminasi',
            'pola_aktifitas_berpakaian' => 'Pola Aktifitas Berpakaian',
            'pola_aktifitas_berpindah' => 'Pola Aktifitas Berpindah',
            'pola_nutrisi_frekuesi_makan' => 'Pola Nutrisi Frekuesi Makan',
            'pola_nutrisi_jenis_makanan' => 'Pola Nutrisi Jenis Makanan',
            'pola_nutrisi_porsi_makan' => 'Pola Nutrisi Porsi Makan',
            'pola_tidur_lama_tidur' => 'Pola Tidur Lama Tidur',
            'pola_tidur_gangguan' => 'Pola Tidur Gangguan',
            'pengkajian_fungsi_kemampuan_sehari' => 'Pengkajian Fungsi Kemampuan Sehari',
            'pengkajian_fungsi_aktifitas' => 'Pengkajian Fungsi Aktifitas',
            'pengkajian_fungsi_berjalan' => 'Pengkajian Fungsi Berjalan',
            'pengkajian_fungsi_berjalan_keterangan' => 'Pengkajian Fungsi Berjalan Keterangan',
            'pengkajian_fungsi_ambulasi' => 'Pengkajian Fungsi Ambulasi',
            'pengkajian_fungsi_ekstrimitas_atas' => 'Pengkajian Fungsi Ekstrimitas Atas',
            'pengkajian_fungsi_ekstrimitas_atas_keterangan' => 'Pengkajian Fungsi Ekstrimitas Atas Keterangan',
            'pengkajian_fungsi_ekstrimitas_bawah' => 'Pengkajian Fungsi Ekstrimitas Bawah',
            'pengkajian_fungsi_ekstrimitas_bawah_keterangan' => 'Pengkajian Fungsi Ekstrimitas Bawah Keterangan',
            'pengkajian_fungsi_menggenggam' => 'Pengkajian Fungsi Menggenggam',
            'pengkajian_fungsi_menggenggam_keterangan' => 'Pengkajian Fungsi Menggenggam Keterangan',
            'pengkajian_fungsi_koordinasi' => 'Pengkajian Fungsi Koordinasi',
            'pengkajian_fungsi_koordinasi_keterangan' => 'Pengkajian Fungsi Koordinasi Keterangan',
            'pengkajian_fungsi_kesimpulan' => 'Pengkajian Fungsi Kesimpulan',
            'riwayat_psiko_kondisi_psiko' => 'Riwayat Psiko Kondisi Psiko',
            'riwayat_psiko_gangguan_jiwa' => 'Riwayat Psiko Gangguan Jiwa',
            'riwayat_psiko_perilaku' => 'Riwayat Psiko Perilaku',
            'riwayat_psiko_perilaku_keterangan' => 'Riwayat Psiko Perilaku Keterangan',
            'riwayat_psiko_hubungan_keluarga' => 'Riwayat Psiko Hubungan Keluarga',
            'riwayat_psiko_tinggal' => 'Riwayat Psiko Tinggal',
            'riwayat_psiko_tinggal_keterangan' => 'Riwayat Psiko Tinggal Keterangan',
            'riwayat_psiko_nilai_kepercayaan' => 'Riwayat Psiko Nilai Kepercayaan',
            'riwayat_psiko_nilai_kepercayaan_keterangan' => 'Riwayat Psiko Nilai Kepercayaan Keterangan',
            'riwayat_psiko_pendidikan_pj' => 'Riwayat Psiko Pendidikan Pj',
            'riwayat_psiko_edukasi_diberikan' => 'Riwayat Psiko Edukasi Diberikan',
            'riwayat_psiko_edukasi_diberikan_keterangan' => 'Riwayat Psiko Edukasi Diberikan Keterangan',
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
            'penilaian_jatuhmorse_skala1' => 'Penilaian Jatuhmorse Skala1',
            'penilaian_jatuhmorse_nilai1' => 'Penilaian Jatuhmorse Nilai1',
            'penilaian_jatuhmorse_skala2' => 'Penilaian Jatuhmorse Skala2',
            'penilaian_jatuhmorse_nilai2' => 'Penilaian Jatuhmorse Nilai2',
            'penilaian_jatuhmorse_skala3' => 'Penilaian Jatuhmorse Skala3',
            'penilaian_jatuhmorse_nilai3' => 'Penilaian Jatuhmorse Nilai3',
            'penilaian_jatuhmorse_skala4' => 'Penilaian Jatuhmorse Skala4',
            'penilaian_jatuhmorse_nilai4' => 'Penilaian Jatuhmorse Nilai4',
            'penilaian_jatuhmorse_skala5' => 'Penilaian Jatuhmorse Skala5',
            'penilaian_jatuhmorse_nilai5' => 'Penilaian Jatuhmorse Nilai5',
            'penilaian_jatuhmorse_skala6' => 'Penilaian Jatuhmorse Skala6',
            'penilaian_jatuhmorse_nilai6' => 'Penilaian Jatuhmorse Nilai6',
            'penilaian_jatuhmorse_totalnilai' => 'Penilaian Jatuhmorse Totalnilai',
            'penilaian_jatuhsydney_skala1' => 'Penilaian Jatuhsydney Skala1',
            'penilaian_jatuhsydney_nilai1' => 'Penilaian Jatuhsydney Nilai1',
            'penilaian_jatuhsydney_skala2' => 'Penilaian Jatuhsydney Skala2',
            'penilaian_jatuhsydney_nilai2' => 'Penilaian Jatuhsydney Nilai2',
            'penilaian_jatuhsydney_skala3' => 'Penilaian Jatuhsydney Skala3',
            'penilaian_jatuhsydney_nilai3' => 'Penilaian Jatuhsydney Nilai3',
            'penilaian_jatuhsydney_skala4' => 'Penilaian Jatuhsydney Skala4',
            'penilaian_jatuhsydney_nilai4' => 'Penilaian Jatuhsydney Nilai4',
            'penilaian_jatuhsydney_skala5' => 'Penilaian Jatuhsydney Skala5',
            'penilaian_jatuhsydney_nilai5' => 'Penilaian Jatuhsydney Nilai5',
            'penilaian_jatuhsydney_skala6' => 'Penilaian Jatuhsydney Skala6',
            'penilaian_jatuhsydney_nilai6' => 'Penilaian Jatuhsydney Nilai6',
            'penilaian_jatuhsydney_skala7' => 'Penilaian Jatuhsydney Skala7',
            'penilaian_jatuhsydney_nilai7' => 'Penilaian Jatuhsydney Nilai7',
            'penilaian_jatuhsydney_skala8' => 'Penilaian Jatuhsydney Skala8',
            'penilaian_jatuhsydney_nilai8' => 'Penilaian Jatuhsydney Nilai8',
            'penilaian_jatuhsydney_skala9' => 'Penilaian Jatuhsydney Skala9',
            'penilaian_jatuhsydney_nilai9' => 'Penilaian Jatuhsydney Nilai9',
            'penilaian_jatuhsydney_skala10' => 'Penilaian Jatuhsydney Skala10',
            'penilaian_jatuhsydney_nilai10' => 'Penilaian Jatuhsydney Nilai10',
            'penilaian_jatuhsydney_skala11' => 'Penilaian Jatuhsydney Skala11',
            'penilaian_jatuhsydney_nilai11' => 'Penilaian Jatuhsydney Nilai11',
            'penilaian_jatuhsydney_totalnilai' => 'Penilaian Jatuhsydney Totalnilai',
            'skrining_gizi1' => 'Skrining Gizi1',
            'nilai_gizi1' => 'Nilai Gizi1',
            'skrining_gizi2' => 'Skrining Gizi2',
            'nilai_gizi2' => 'Nilai Gizi2',
            'nilai_total_gizi' => 'Nilai Total Gizi',
            'skrining_gizi_diagnosa_khusus' => 'Skrining Gizi Diagnosa Khusus',
            'skrining_gizi_ket_diagnosa_khusus' => 'Skrining Gizi Ket Diagnosa Khusus',
            'skrining_gizi_diketahui_dietisen' => 'Skrining Gizi Diketahui Dietisen',
            'skrining_gizi_jam_diketahui_dietisen' => 'Skrining Gizi Jam Diketahui Dietisen',
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
     * Gets query for [[KodeMasalahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeMasalahs()
    {
        return $this->hasMany(MasterMasalahKeperawatan::class, ['kode_masalah' => 'kode_masalah'])->viaTable('penilaian_awal_keperawatan_ranap_masalah', ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[KodeRencanas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeRencanas()
    {
        return $this->hasMany(MasterRencanaKeperawatan::class, ['kode_rencana' => 'kode_rencana'])->viaTable('penilaian_awal_keperawatan_ranap_rencana', ['no_rawat' => 'no_rawat']);
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

    /**
     * Gets query for [[PenilaianAwalKeperawatanRanapMasalahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRanapMasalahs()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRanapMasalah::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRanapRencanas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRanapRencanas()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRanapRencana::class, ['no_rawat' => 'no_rawat']);
    }
}
