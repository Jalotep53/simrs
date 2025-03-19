<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_awal_keperawatan_ranap_neonatus".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $asal_pasien
 * @property string|null $cara_masuk
 * @property string|null $diperoleh_dari
 * @property string|null $hubungan_dengan_pasien
 * @property string|null $keluhan_utama
 * @property string|null $prenatal_g
 * @property string|null $prenatal_p
 * @property string|null $prenatal_a
 * @property string|null $prenatal_uk
 * @property string|null $prenatal_riwayat_penyakit_ibu
 * @property string|null $prenatal_riwayat_penyakit_ibu_keterangan
 * @property string|null $prenatal_riwayat_pengobatan_ibu_selama_hamil
 * @property string|null $prenatal_pernah_dirawat
 * @property string|null $prenatal_pernah_dirawat_keterangan
 * @property string|null $prenatal_status_gizi_ibu
 * @property string|null $intranatal_g
 * @property string|null $intranatal_p
 * @property string|null $intranatal_a
 * @property string|null $intranatal_kondisi_lahir
 * @property string|null $intranatal_cara_persalinan
 * @property string|null $intranatal_cara_persalinan_keterangan
 * @property string|null $intranatal_apgar
 * @property string|null $intranatal_letak
 * @property string|null $intranatal_tali_pusat
 * @property string $intranatal_ketuban
 * @property string $intranatal_bb
 * @property string $intranatal_pb
 * @property string $intranatal_lk
 * @property string $intranatal_ld
 * @property string $intranatal_lp
 * @property string $risiko_infeksi_mayor
 * @property string $risiko_infeksi_mayor_keterangan
 * @property string $risiko_infeksi_minor
 * @property string $risiko_infeksi_minor_keterangan
 * @property string $kebutuhan_biologis_nutrisi
 * @property string $kebutuhan_biologis_nutrisi_keterangan
 * @property string $kebutuhan_biologis_nutrisi_frekuensi
 * @property string $kebutuhan_biologis_nutrisi_kali
 * @property string $kebutuhan_biologis_bak
 * @property string $kebutuhan_biologis_bak_keterangan
 * @property string $kebutuhan_biologis_bab
 * @property string $kebutuhan_biologis_bab_keterangan
 * @property string $alergi_obat
 * @property string $alergi_obat_keterangan
 * @property string $alergi_obat_reaksi
 * @property string $alergi_makanan
 * @property string $alergi_makanan_keterangan
 * @property string $alergi_makanan_reaksi
 * @property string $alergi_lainnya
 * @property string $alergi_lainnya_keterangan
 * @property string $alergi_lainnya_reaksi
 * @property string $riwayat_penyakit_keluarga
 * @property string $riwayat_penyakit_keluarga_keterangan
 * @property string $riwayat_imunisasi
 * @property string $riwayat_imunisasi_keterangan
 * @property string $riwayat_tranfusi_darah
 * @property string $riwayat_tranfusi_darah_keterangan
 * @property string $riwayat_tranfusi_darah_reaksi
 * @property string $riwayat_tranfusi_darah_reaksi_keterangan
 * @property string $kebiasan_ibu_obat_diminum
 * @property string $kebiasan_ibu_obat_diminum_keterangan
 * @property string $kebiasan_ibu_narkoba
 * @property string $kebiasan_ibu_narkoba_keterangan
 * @property string $kebiasan_ibu_merokok
 * @property string $kebiasan_ibu_merokok_keterangan
 * @property string $kebiasan_ibu_alkohol
 * @property string $kebiasan_ibu_alkohol_keterangan
 * @property string $kesadaran
 * @property string $keadaan_umum
 * @property string $gcs
 * @property string $td
 * @property string $suhu
 * @property string $hr
 * @property string $rr
 * @property string $spo2
 * @property string $down_score
 * @property string $bb
 * @property string $tb
 * @property string $lk
 * @property string $ld
 * @property string $lp
 * @property string $gd_bayi
 * @property string $gd_ibu
 * @property string $gd_ayah
 * @property string $saraf_pusat_gerak_bayi
 * @property string $saraf_pusat_kepala
 * @property string $saraf_pusat_kepala_keterangan
 * @property string $saraf_pusat_ubunubun
 * @property string $saraf_pusat_ubunubun_keterangan
 * @property string $saraf_pusat_wajah
 * @property string $saraf_pusat_wajah_keterangan
 * @property string $saraf_pusat_kejang
 * @property string $saraf_pusat_kejang_keterangan
 * @property string $saraf_pusat_refleks
 * @property string $saraf_pusat_refleks_keterangan
 * @property string $saraf_pusat_tangisbayi
 * @property string $saraf_pusat_tangisbayi_keterangan
 * @property string $kardiovaskular_denyutnadi
 * @property string $kardiovaskular_sirkulasi
 * @property string $kardiovaskular_sirkulasi_keterangan
 * @property string $kardiovaskular_pulsasi
 * @property string $kardiovaskular_pulsasi_keterangan
 * @property string $respirasi_polanafas
 * @property string $respirasi_jenispernapasan
 * @property string $respirasi_jenispernapasan_keterangan
 * @property string $respirasi_retraksi
 * @property string $respirasi_airentry
 * @property string $respirasi_merintih
 * @property string $respirasi_suara_napas
 * @property string $gastrointestinal_mulut
 * @property string $gastrointestinal_mulut_keterangan
 * @property string $gastrointestinal_lidah
 * @property string $gastrointestinal_lidah_keterangan
 * @property string $gastrointestinal_tenggorakan
 * @property string $gastrointestinal_tenggorakan_keterangan
 * @property string $gastrointestinal_abdomen
 * @property string $gastrointestinal_abdomen_keterangan
 * @property string $gastrointestinal_bab
 * @property string $gastrointestinal_bab_keterangan
 * @property string $gastrointestinal_warnabab
 * @property string $gastrointestinal_warnabab_keterangan
 * @property string $gastrointestinal_bak
 * @property string $gastrointestinal_bak_keterangan
 * @property string $gastrointestinal_bakwarna
 * @property string $gastrointestinal_bakwarna_keterangan
 * @property string $neurologi_posisi_mata
 * @property string $neurologi_kelopak_mata
 * @property string $neurologi_kelopak_mata_keterangan
 * @property string $neurologi_besar_pupil
 * @property string $neurologi_konjugtiva
 * @property string $neurologi_konjugtiva_keterangan
 * @property string $neurologi_sklera
 * @property string $neurologi_sklera_keterangan
 * @property string $neurologi_pendengaran
 * @property string $neurologi_pendengaran_keterangan
 * @property string $neurologi_penciuman
 * @property string $neurologi_penciuman_keterangan
 * @property string $integument_warna_kulit
 * @property string $integument_warna_kulit_keterangan
 * @property string $integument_vernic_kaseosa
 * @property string $integument_vernic_kaseosa_keterangan
 * @property string $integument_turgor
 * @property string $integument_lanugo
 * @property string $integument_kulit
 * @property string $integument_risiko_dekubitas
 * @property string $reproduksi
 * @property string $reproduksi_keterangan
 * @property string $muskuloskeletal_rekoil_telinga
 * @property string $muskuloskeletal_rekoil_telinga_keterangan
 * @property string $muskuloskeletal_lengan
 * @property string $muskuloskeletal_lengan_keterangan
 * @property string $muskuloskeletal_tungkai
 * @property string $muskuloskeletal_tungkai_keterangan
 * @property string $muskuloskeletal_telapak_kaki
 * @property string $kondisi_psikologis
 * @property string $gangguan_jiwa
 * @property string $menerima_kondisi_bayi
 * @property string $status_menikah
 * @property string $masalah_pernikahan
 * @property string $masalah_pernikahan_keterangan
 * @property string $pekerjaan
 * @property string $agama
 * @property string $nilai_kepercayaan
 * @property string $nilai_kepercayaan_keterangan
 * @property string $suku
 * @property string $pendidikan
 * @property string $pembayaran
 * @property string $tinggal_bersama
 * @property string $tinggal_bersama_keterangan
 * @property string $hubungan_keluarga
 * @property string $respon_emosi
 * @property string $bahasa_sehari_hari
 * @property string $kemampuan_bacatulis
 * @property string $butuh_penterjemah
 * @property string $butuh_penterjemah_keterangan
 * @property string $terdapat_hambatan_belajar
 * @property string $hambatan_belajar
 * @property string $hambatan_belajar_keterangan
 * @property string $hambatan_cara_bicara
 * @property string $hambatan_bahasa_isyarat
 * @property string $cara_belajar_disukai
 * @property string $kesediaan_menerima_informasi
 * @property string $kesediaan_menerima_informasi_keterangan
 * @property string $pemahaman_nutrisi
 * @property string $pemahaman_penyakit
 * @property string $pemahaman_pengobatan
 * @property string $pemahaman_perawatan
 * @property string $masalah_gizi1
 * @property string $nilai_gizi1
 * @property string $masalah_gizi2
 * @property string $nilai_gizi2
 * @property string $masalah_gizi3
 * @property string $nilai_gizi3
 * @property int $totalgizi
 * @property string $keterangan_gizi
 * @property string $penilaian_humptydumpty_skala1
 * @property int $penilaian_humptydumpty_nilai1
 * @property string $penilaian_humptydumpty_skala2
 * @property int $penilaian_humptydumpty_nilai2
 * @property string $penilaian_humptydumpty_skala3
 * @property int $penilaian_humptydumpty_nilai3
 * @property string $penilaian_humptydumpty_skala4
 * @property int $penilaian_humptydumpty_nilai4
 * @property string $penilaian_humptydumpty_skala5
 * @property int $penilaian_humptydumpty_nilai5
 * @property string $penilaian_humptydumpty_skala6
 * @property int $penilaian_humptydumpty_nilai6
 * @property string $penilaian_humptydumpty_skala7
 * @property int $penilaian_humptydumpty_nilai7
 * @property int $penilaian_humptydumpty_totalnilai
 * @property string $penilaian_humptydumpty_hasil
 * @property string $skala_nips1
 * @property string $skala_nips1_nilai
 * @property string $skala_nips2
 * @property string $skala_nips2_nilai
 * @property string $skala_nips3
 * @property string $skala_nips3_nilai
 * @property string $skala_nips4
 * @property string $skala_nips4_nilai
 * @property string $skala_nips5
 * @property string $skala_nips5_nilai
 * @property int $skala_nips_total
 * @property string $skala_nips_keterangan
 * @property string $informasi_perencanaan_pulang
 * @property string $lama_ratarata
 * @property string $perencanaan_pulang
 * @property string $kondisi_klinis_pulang
 * @property string $perawatan_lanjutan_dirumah
 * @property string $cara_transportasi_pulang
 * @property string $transportasi_digunakan
 * @property string|null $rencana
 * @property string $nip1
 * @property string $nip2
 * @property string $kd_dokter
 *
 * @property Dokter $kdDokter
 * @property MasterMasalahKeperawatanNeonatus[] $kodeMasalahs
 * @property MasterRencanaKeperawatanNeonatus[] $kodeRencanas
 * @property Petugas $nip10
 * @property Petugas $nip20
 * @property RegPeriksa $noRawat
 * @property PenilaianAwalKeperawatanRanapNeonatusMasalah[] $penilaianAwalKeperawatanRanapNeonatusMasalahs
 * @property PenilaianAwalKeperawatanRanapNeonatusRencana[] $penilaianAwalKeperawatanRanapNeonatusRencanas
 */
class PenilaianAwalKeperawatanRanapNeonatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_awal_keperawatan_ranap_neonatus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'intranatal_ketuban', 'intranatal_bb', 'intranatal_pb', 'intranatal_lk', 'intranatal_ld', 'intranatal_lp', 'risiko_infeksi_mayor', 'risiko_infeksi_mayor_keterangan', 'risiko_infeksi_minor', 'risiko_infeksi_minor_keterangan', 'kebutuhan_biologis_nutrisi', 'kebutuhan_biologis_nutrisi_keterangan', 'kebutuhan_biologis_nutrisi_frekuensi', 'kebutuhan_biologis_nutrisi_kali', 'kebutuhan_biologis_bak', 'kebutuhan_biologis_bak_keterangan', 'kebutuhan_biologis_bab', 'kebutuhan_biologis_bab_keterangan', 'alergi_obat', 'alergi_obat_keterangan', 'alergi_obat_reaksi', 'alergi_makanan', 'alergi_makanan_keterangan', 'alergi_makanan_reaksi', 'alergi_lainnya', 'alergi_lainnya_keterangan', 'alergi_lainnya_reaksi', 'riwayat_penyakit_keluarga', 'riwayat_penyakit_keluarga_keterangan', 'riwayat_imunisasi', 'riwayat_imunisasi_keterangan', 'riwayat_tranfusi_darah', 'riwayat_tranfusi_darah_keterangan', 'riwayat_tranfusi_darah_reaksi', 'riwayat_tranfusi_darah_reaksi_keterangan', 'kebiasan_ibu_obat_diminum', 'kebiasan_ibu_obat_diminum_keterangan', 'kebiasan_ibu_narkoba', 'kebiasan_ibu_narkoba_keterangan', 'kebiasan_ibu_merokok', 'kebiasan_ibu_merokok_keterangan', 'kebiasan_ibu_alkohol', 'kebiasan_ibu_alkohol_keterangan', 'kesadaran', 'keadaan_umum', 'gcs', 'td', 'suhu', 'hr', 'rr', 'spo2', 'down_score', 'bb', 'tb', 'lk', 'ld', 'lp', 'gd_bayi', 'gd_ibu', 'gd_ayah', 'saraf_pusat_gerak_bayi', 'saraf_pusat_kepala', 'saraf_pusat_kepala_keterangan', 'saraf_pusat_ubunubun', 'saraf_pusat_ubunubun_keterangan', 'saraf_pusat_wajah', 'saraf_pusat_wajah_keterangan', 'saraf_pusat_kejang', 'saraf_pusat_kejang_keterangan', 'saraf_pusat_refleks', 'saraf_pusat_refleks_keterangan', 'saraf_pusat_tangisbayi', 'saraf_pusat_tangisbayi_keterangan', 'kardiovaskular_denyutnadi', 'kardiovaskular_sirkulasi', 'kardiovaskular_sirkulasi_keterangan', 'kardiovaskular_pulsasi', 'kardiovaskular_pulsasi_keterangan', 'respirasi_polanafas', 'respirasi_jenispernapasan', 'respirasi_jenispernapasan_keterangan', 'respirasi_retraksi', 'respirasi_airentry', 'respirasi_merintih', 'respirasi_suara_napas', 'gastrointestinal_mulut', 'gastrointestinal_mulut_keterangan', 'gastrointestinal_lidah', 'gastrointestinal_lidah_keterangan', 'gastrointestinal_tenggorakan', 'gastrointestinal_tenggorakan_keterangan', 'gastrointestinal_abdomen', 'gastrointestinal_abdomen_keterangan', 'gastrointestinal_bab', 'gastrointestinal_bab_keterangan', 'gastrointestinal_warnabab', 'gastrointestinal_warnabab_keterangan', 'gastrointestinal_bak', 'gastrointestinal_bak_keterangan', 'gastrointestinal_bakwarna', 'gastrointestinal_bakwarna_keterangan', 'neurologi_posisi_mata', 'neurologi_kelopak_mata', 'neurologi_kelopak_mata_keterangan', 'neurologi_besar_pupil', 'neurologi_konjugtiva', 'neurologi_konjugtiva_keterangan', 'neurologi_sklera', 'neurologi_sklera_keterangan', 'neurologi_pendengaran', 'neurologi_pendengaran_keterangan', 'neurologi_penciuman', 'neurologi_penciuman_keterangan', 'integument_warna_kulit', 'integument_warna_kulit_keterangan', 'integument_vernic_kaseosa', 'integument_vernic_kaseosa_keterangan', 'integument_turgor', 'integument_lanugo', 'integument_kulit', 'integument_risiko_dekubitas', 'reproduksi', 'reproduksi_keterangan', 'muskuloskeletal_rekoil_telinga', 'muskuloskeletal_rekoil_telinga_keterangan', 'muskuloskeletal_lengan', 'muskuloskeletal_lengan_keterangan', 'muskuloskeletal_tungkai', 'muskuloskeletal_tungkai_keterangan', 'muskuloskeletal_telapak_kaki', 'kondisi_psikologis', 'gangguan_jiwa', 'menerima_kondisi_bayi', 'status_menikah', 'masalah_pernikahan', 'masalah_pernikahan_keterangan', 'pekerjaan', 'agama', 'nilai_kepercayaan', 'nilai_kepercayaan_keterangan', 'suku', 'pendidikan', 'pembayaran', 'tinggal_bersama', 'tinggal_bersama_keterangan', 'hubungan_keluarga', 'respon_emosi', 'bahasa_sehari_hari', 'kemampuan_bacatulis', 'butuh_penterjemah', 'butuh_penterjemah_keterangan', 'terdapat_hambatan_belajar', 'hambatan_belajar', 'hambatan_belajar_keterangan', 'hambatan_cara_bicara', 'hambatan_bahasa_isyarat', 'cara_belajar_disukai', 'kesediaan_menerima_informasi', 'kesediaan_menerima_informasi_keterangan', 'pemahaman_nutrisi', 'pemahaman_penyakit', 'pemahaman_pengobatan', 'pemahaman_perawatan', 'masalah_gizi1', 'nilai_gizi1', 'masalah_gizi2', 'nilai_gizi2', 'masalah_gizi3', 'nilai_gizi3', 'totalgizi', 'keterangan_gizi', 'penilaian_humptydumpty_skala1', 'penilaian_humptydumpty_nilai1', 'penilaian_humptydumpty_skala2', 'penilaian_humptydumpty_nilai2', 'penilaian_humptydumpty_skala3', 'penilaian_humptydumpty_nilai3', 'penilaian_humptydumpty_skala4', 'penilaian_humptydumpty_nilai4', 'penilaian_humptydumpty_skala5', 'penilaian_humptydumpty_nilai5', 'penilaian_humptydumpty_skala6', 'penilaian_humptydumpty_nilai6', 'penilaian_humptydumpty_skala7', 'penilaian_humptydumpty_nilai7', 'penilaian_humptydumpty_totalnilai', 'penilaian_humptydumpty_hasil', 'skala_nips1', 'skala_nips1_nilai', 'skala_nips2', 'skala_nips2_nilai', 'skala_nips3', 'skala_nips3_nilai', 'skala_nips4', 'skala_nips4_nilai', 'skala_nips5', 'skala_nips5_nilai', 'skala_nips_total', 'skala_nips_keterangan', 'informasi_perencanaan_pulang', 'lama_ratarata', 'perencanaan_pulang', 'kondisi_klinis_pulang', 'perawatan_lanjutan_dirumah', 'cara_transportasi_pulang', 'transportasi_digunakan', 'nip1', 'nip2', 'kd_dokter'], 'required'],
            [['tanggal', 'perencanaan_pulang'], 'safe'],
            [['asal_pasien', 'cara_masuk', 'prenatal_riwayat_penyakit_ibu', 'prenatal_pernah_dirawat', 'prenatal_status_gizi_ibu', 'intranatal_cara_persalinan', 'intranatal_tali_pusat', 'intranatal_ketuban', 'risiko_infeksi_mayor', 'risiko_infeksi_minor', 'kebutuhan_biologis_nutrisi', 'kebutuhan_biologis_bak', 'kebutuhan_biologis_bab', 'alergi_obat', 'alergi_makanan', 'alergi_lainnya', 'riwayat_penyakit_keluarga', 'riwayat_imunisasi', 'riwayat_tranfusi_darah', 'riwayat_tranfusi_darah_reaksi', 'kebiasan_ibu_obat_diminum', 'kebiasan_ibu_narkoba', 'kebiasan_ibu_merokok', 'kebiasan_ibu_alkohol', 'kesadaran', 'keadaan_umum', 'gd_bayi', 'gd_ibu', 'gd_ayah', 'saraf_pusat_gerak_bayi', 'saraf_pusat_kepala', 'saraf_pusat_ubunubun', 'saraf_pusat_wajah', 'saraf_pusat_kejang', 'saraf_pusat_refleks', 'saraf_pusat_tangisbayi', 'kardiovaskular_denyutnadi', 'kardiovaskular_sirkulasi', 'kardiovaskular_pulsasi', 'respirasi_polanafas', 'respirasi_jenispernapasan', 'respirasi_retraksi', 'respirasi_airentry', 'respirasi_merintih', 'respirasi_suara_napas', 'gastrointestinal_mulut', 'gastrointestinal_lidah', 'gastrointestinal_tenggorakan', 'gastrointestinal_abdomen', 'gastrointestinal_bab', 'gastrointestinal_warnabab', 'gastrointestinal_bak', 'gastrointestinal_bakwarna', 'neurologi_posisi_mata', 'neurologi_kelopak_mata', 'neurologi_besar_pupil', 'neurologi_konjugtiva', 'neurologi_sklera', 'neurologi_pendengaran', 'neurologi_penciuman', 'integument_warna_kulit', 'integument_vernic_kaseosa', 'integument_turgor', 'integument_lanugo', 'integument_kulit', 'integument_risiko_dekubitas', 'reproduksi', 'muskuloskeletal_rekoil_telinga', 'muskuloskeletal_lengan', 'muskuloskeletal_tungkai', 'muskuloskeletal_telapak_kaki', 'kondisi_psikologis', 'gangguan_jiwa', 'menerima_kondisi_bayi', 'status_menikah', 'masalah_pernikahan', 'nilai_kepercayaan', 'tinggal_bersama', 'hubungan_keluarga', 'respon_emosi', 'kemampuan_bacatulis', 'butuh_penterjemah', 'terdapat_hambatan_belajar', 'hambatan_belajar', 'hambatan_cara_bicara', 'hambatan_bahasa_isyarat', 'cara_belajar_disukai', 'kesediaan_menerima_informasi', 'pemahaman_nutrisi', 'pemahaman_penyakit', 'pemahaman_pengobatan', 'pemahaman_perawatan', 'masalah_gizi1', 'nilai_gizi1', 'masalah_gizi2', 'nilai_gizi2', 'masalah_gizi3', 'nilai_gizi3', 'penilaian_humptydumpty_skala1', 'penilaian_humptydumpty_skala2', 'penilaian_humptydumpty_skala3', 'penilaian_humptydumpty_skala4', 'penilaian_humptydumpty_skala5', 'penilaian_humptydumpty_skala6', 'penilaian_humptydumpty_skala7', 'penilaian_humptydumpty_hasil', 'skala_nips1', 'skala_nips1_nilai', 'skala_nips2', 'skala_nips2_nilai', 'skala_nips3', 'skala_nips3_nilai', 'skala_nips4', 'skala_nips4_nilai', 'skala_nips5', 'skala_nips5_nilai', 'skala_nips_keterangan', 'informasi_perencanaan_pulang', 'cara_transportasi_pulang', 'transportasi_digunakan'], 'string'],
            [['totalgizi', 'penilaian_humptydumpty_nilai1', 'penilaian_humptydumpty_nilai2', 'penilaian_humptydumpty_nilai3', 'penilaian_humptydumpty_nilai4', 'penilaian_humptydumpty_nilai5', 'penilaian_humptydumpty_nilai6', 'penilaian_humptydumpty_nilai7', 'penilaian_humptydumpty_totalnilai', 'skala_nips_total'], 'integer'],
            [['no_rawat'], 'string', 'max' => 17],
            [['diperoleh_dari', 'hubungan_dengan_pasien', 'prenatal_uk', 'prenatal_riwayat_penyakit_ibu_keterangan', 'intranatal_kondisi_lahir', 'intranatal_cara_persalinan_keterangan', 'intranatal_letak', 'risiko_infeksi_mayor_keterangan', 'risiko_infeksi_minor_keterangan', 'kebutuhan_biologis_bak_keterangan', 'kebutuhan_biologis_bab_keterangan', 'riwayat_tranfusi_darah_keterangan', 'riwayat_tranfusi_darah_reaksi_keterangan', 'saraf_pusat_kepala_keterangan', 'saraf_pusat_ubunubun_keterangan', 'saraf_pusat_wajah_keterangan', 'saraf_pusat_kejang_keterangan', 'saraf_pusat_refleks_keterangan', 'saraf_pusat_tangisbayi_keterangan', 'kardiovaskular_sirkulasi_keterangan', 'kardiovaskular_pulsasi_keterangan', 'respirasi_jenispernapasan_keterangan', 'gastrointestinal_mulut_keterangan', 'gastrointestinal_lidah_keterangan', 'gastrointestinal_tenggorakan_keterangan', 'gastrointestinal_abdomen_keterangan', 'gastrointestinal_bab_keterangan', 'gastrointestinal_warnabab_keterangan', 'gastrointestinal_bak_keterangan', 'gastrointestinal_bakwarna_keterangan', 'neurologi_kelopak_mata_keterangan', 'neurologi_konjugtiva_keterangan', 'neurologi_sklera_keterangan', 'neurologi_pendengaran_keterangan', 'neurologi_penciuman_keterangan', 'integument_warna_kulit_keterangan', 'integument_vernic_kaseosa_keterangan', 'muskuloskeletal_rekoil_telinga_keterangan', 'muskuloskeletal_lengan_keterangan', 'muskuloskeletal_tungkai_keterangan', 'masalah_pernikahan_keterangan', 'tinggal_bersama_keterangan'], 'string', 'max' => 30],
            [['keluhan_utama', 'perawatan_lanjutan_dirumah'], 'string', 'max' => 300],
            [['prenatal_g', 'prenatal_p', 'prenatal_a', 'intranatal_g', 'intranatal_p', 'intranatal_a', 'intranatal_apgar', 'gcs'], 'string', 'max' => 10],
            [['prenatal_riwayat_pengobatan_ibu_selama_hamil', 'kondisi_klinis_pulang'], 'string', 'max' => 100],
            [['prenatal_pernah_dirawat_keterangan', 'kebutuhan_biologis_nutrisi_keterangan', 'keterangan_gizi'], 'string', 'max' => 50],
            [['intranatal_bb', 'intranatal_pb', 'intranatal_lk', 'intranatal_ld', 'intranatal_lp', 'kebutuhan_biologis_nutrisi_frekuensi', 'suhu', 'hr', 'rr', 'spo2', 'down_score', 'bb', 'tb', 'lk', 'ld', 'lp'], 'string', 'max' => 5],
            [['kebutuhan_biologis_nutrisi_kali', 'kebiasan_ibu_merokok_keterangan', 'kebiasan_ibu_alkohol_keterangan', 'lama_ratarata'], 'string', 'max' => 3],
            [['alergi_obat_keterangan', 'alergi_obat_reaksi', 'alergi_makanan_keterangan', 'alergi_makanan_reaksi', 'alergi_lainnya_keterangan', 'alergi_lainnya_reaksi', 'kebiasan_ibu_obat_diminum_keterangan', 'kebiasan_ibu_narkoba_keterangan', 'nilai_kepercayaan_keterangan', 'pembayaran', 'hambatan_belajar_keterangan', 'kesediaan_menerima_informasi_keterangan'], 'string', 'max' => 40],
            [['riwayat_penyakit_keluarga_keterangan', 'riwayat_imunisasi_keterangan', 'reproduksi_keterangan'], 'string', 'max' => 70],
            [['td'], 'string', 'max' => 8],
            [['pekerjaan', 'agama', 'suku', 'pendidikan', 'bahasa_sehari_hari', 'butuh_penterjemah_keterangan', 'nip1', 'nip2', 'kd_dokter'], 'string', 'max' => 20],
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
            'asal_pasien' => 'Asal Pasien',
            'cara_masuk' => 'Cara Masuk',
            'diperoleh_dari' => 'Diperoleh Dari',
            'hubungan_dengan_pasien' => 'Hubungan Dengan Pasien',
            'keluhan_utama' => 'Keluhan Utama',
            'prenatal_g' => 'Prenatal G',
            'prenatal_p' => 'Prenatal P',
            'prenatal_a' => 'Prenatal A',
            'prenatal_uk' => 'Prenatal Uk',
            'prenatal_riwayat_penyakit_ibu' => 'Prenatal Riwayat Penyakit Ibu',
            'prenatal_riwayat_penyakit_ibu_keterangan' => 'Prenatal Riwayat Penyakit Ibu Keterangan',
            'prenatal_riwayat_pengobatan_ibu_selama_hamil' => 'Prenatal Riwayat Pengobatan Ibu Selama Hamil',
            'prenatal_pernah_dirawat' => 'Prenatal Pernah Dirawat',
            'prenatal_pernah_dirawat_keterangan' => 'Prenatal Pernah Dirawat Keterangan',
            'prenatal_status_gizi_ibu' => 'Prenatal Status Gizi Ibu',
            'intranatal_g' => 'Intranatal G',
            'intranatal_p' => 'Intranatal P',
            'intranatal_a' => 'Intranatal A',
            'intranatal_kondisi_lahir' => 'Intranatal Kondisi Lahir',
            'intranatal_cara_persalinan' => 'Intranatal Cara Persalinan',
            'intranatal_cara_persalinan_keterangan' => 'Intranatal Cara Persalinan Keterangan',
            'intranatal_apgar' => 'Intranatal Apgar',
            'intranatal_letak' => 'Intranatal Letak',
            'intranatal_tali_pusat' => 'Intranatal Tali Pusat',
            'intranatal_ketuban' => 'Intranatal Ketuban',
            'intranatal_bb' => 'Intranatal Bb',
            'intranatal_pb' => 'Intranatal Pb',
            'intranatal_lk' => 'Intranatal Lk',
            'intranatal_ld' => 'Intranatal Ld',
            'intranatal_lp' => 'Intranatal Lp',
            'risiko_infeksi_mayor' => 'Risiko Infeksi Mayor',
            'risiko_infeksi_mayor_keterangan' => 'Risiko Infeksi Mayor Keterangan',
            'risiko_infeksi_minor' => 'Risiko Infeksi Minor',
            'risiko_infeksi_minor_keterangan' => 'Risiko Infeksi Minor Keterangan',
            'kebutuhan_biologis_nutrisi' => 'Kebutuhan Biologis Nutrisi',
            'kebutuhan_biologis_nutrisi_keterangan' => 'Kebutuhan Biologis Nutrisi Keterangan',
            'kebutuhan_biologis_nutrisi_frekuensi' => 'Kebutuhan Biologis Nutrisi Frekuensi',
            'kebutuhan_biologis_nutrisi_kali' => 'Kebutuhan Biologis Nutrisi Kali',
            'kebutuhan_biologis_bak' => 'Kebutuhan Biologis Bak',
            'kebutuhan_biologis_bak_keterangan' => 'Kebutuhan Biologis Bak Keterangan',
            'kebutuhan_biologis_bab' => 'Kebutuhan Biologis Bab',
            'kebutuhan_biologis_bab_keterangan' => 'Kebutuhan Biologis Bab Keterangan',
            'alergi_obat' => 'Alergi Obat',
            'alergi_obat_keterangan' => 'Alergi Obat Keterangan',
            'alergi_obat_reaksi' => 'Alergi Obat Reaksi',
            'alergi_makanan' => 'Alergi Makanan',
            'alergi_makanan_keterangan' => 'Alergi Makanan Keterangan',
            'alergi_makanan_reaksi' => 'Alergi Makanan Reaksi',
            'alergi_lainnya' => 'Alergi Lainnya',
            'alergi_lainnya_keterangan' => 'Alergi Lainnya Keterangan',
            'alergi_lainnya_reaksi' => 'Alergi Lainnya Reaksi',
            'riwayat_penyakit_keluarga' => 'Riwayat Penyakit Keluarga',
            'riwayat_penyakit_keluarga_keterangan' => 'Riwayat Penyakit Keluarga Keterangan',
            'riwayat_imunisasi' => 'Riwayat Imunisasi',
            'riwayat_imunisasi_keterangan' => 'Riwayat Imunisasi Keterangan',
            'riwayat_tranfusi_darah' => 'Riwayat Tranfusi Darah',
            'riwayat_tranfusi_darah_keterangan' => 'Riwayat Tranfusi Darah Keterangan',
            'riwayat_tranfusi_darah_reaksi' => 'Riwayat Tranfusi Darah Reaksi',
            'riwayat_tranfusi_darah_reaksi_keterangan' => 'Riwayat Tranfusi Darah Reaksi Keterangan',
            'kebiasan_ibu_obat_diminum' => 'Kebiasan Ibu Obat Diminum',
            'kebiasan_ibu_obat_diminum_keterangan' => 'Kebiasan Ibu Obat Diminum Keterangan',
            'kebiasan_ibu_narkoba' => 'Kebiasan Ibu Narkoba',
            'kebiasan_ibu_narkoba_keterangan' => 'Kebiasan Ibu Narkoba Keterangan',
            'kebiasan_ibu_merokok' => 'Kebiasan Ibu Merokok',
            'kebiasan_ibu_merokok_keterangan' => 'Kebiasan Ibu Merokok Keterangan',
            'kebiasan_ibu_alkohol' => 'Kebiasan Ibu Alkohol',
            'kebiasan_ibu_alkohol_keterangan' => 'Kebiasan Ibu Alkohol Keterangan',
            'kesadaran' => 'Kesadaran',
            'keadaan_umum' => 'Keadaan Umum',
            'gcs' => 'Gcs',
            'td' => 'Td',
            'suhu' => 'Suhu',
            'hr' => 'Hr',
            'rr' => 'Rr',
            'spo2' => 'Spo2',
            'down_score' => 'Down Score',
            'bb' => 'Bb',
            'tb' => 'Tb',
            'lk' => 'Lk',
            'ld' => 'Ld',
            'lp' => 'Lp',
            'gd_bayi' => 'Gd Bayi',
            'gd_ibu' => 'Gd Ibu',
            'gd_ayah' => 'Gd Ayah',
            'saraf_pusat_gerak_bayi' => 'Saraf Pusat Gerak Bayi',
            'saraf_pusat_kepala' => 'Saraf Pusat Kepala',
            'saraf_pusat_kepala_keterangan' => 'Saraf Pusat Kepala Keterangan',
            'saraf_pusat_ubunubun' => 'Saraf Pusat Ubunubun',
            'saraf_pusat_ubunubun_keterangan' => 'Saraf Pusat Ubunubun Keterangan',
            'saraf_pusat_wajah' => 'Saraf Pusat Wajah',
            'saraf_pusat_wajah_keterangan' => 'Saraf Pusat Wajah Keterangan',
            'saraf_pusat_kejang' => 'Saraf Pusat Kejang',
            'saraf_pusat_kejang_keterangan' => 'Saraf Pusat Kejang Keterangan',
            'saraf_pusat_refleks' => 'Saraf Pusat Refleks',
            'saraf_pusat_refleks_keterangan' => 'Saraf Pusat Refleks Keterangan',
            'saraf_pusat_tangisbayi' => 'Saraf Pusat Tangisbayi',
            'saraf_pusat_tangisbayi_keterangan' => 'Saraf Pusat Tangisbayi Keterangan',
            'kardiovaskular_denyutnadi' => 'Kardiovaskular Denyutnadi',
            'kardiovaskular_sirkulasi' => 'Kardiovaskular Sirkulasi',
            'kardiovaskular_sirkulasi_keterangan' => 'Kardiovaskular Sirkulasi Keterangan',
            'kardiovaskular_pulsasi' => 'Kardiovaskular Pulsasi',
            'kardiovaskular_pulsasi_keterangan' => 'Kardiovaskular Pulsasi Keterangan',
            'respirasi_polanafas' => 'Respirasi Polanafas',
            'respirasi_jenispernapasan' => 'Respirasi Jenispernapasan',
            'respirasi_jenispernapasan_keterangan' => 'Respirasi Jenispernapasan Keterangan',
            'respirasi_retraksi' => 'Respirasi Retraksi',
            'respirasi_airentry' => 'Respirasi Airentry',
            'respirasi_merintih' => 'Respirasi Merintih',
            'respirasi_suara_napas' => 'Respirasi Suara Napas',
            'gastrointestinal_mulut' => 'Gastrointestinal Mulut',
            'gastrointestinal_mulut_keterangan' => 'Gastrointestinal Mulut Keterangan',
            'gastrointestinal_lidah' => 'Gastrointestinal Lidah',
            'gastrointestinal_lidah_keterangan' => 'Gastrointestinal Lidah Keterangan',
            'gastrointestinal_tenggorakan' => 'Gastrointestinal Tenggorakan',
            'gastrointestinal_tenggorakan_keterangan' => 'Gastrointestinal Tenggorakan Keterangan',
            'gastrointestinal_abdomen' => 'Gastrointestinal Abdomen',
            'gastrointestinal_abdomen_keterangan' => 'Gastrointestinal Abdomen Keterangan',
            'gastrointestinal_bab' => 'Gastrointestinal Bab',
            'gastrointestinal_bab_keterangan' => 'Gastrointestinal Bab Keterangan',
            'gastrointestinal_warnabab' => 'Gastrointestinal Warnabab',
            'gastrointestinal_warnabab_keterangan' => 'Gastrointestinal Warnabab Keterangan',
            'gastrointestinal_bak' => 'Gastrointestinal Bak',
            'gastrointestinal_bak_keterangan' => 'Gastrointestinal Bak Keterangan',
            'gastrointestinal_bakwarna' => 'Gastrointestinal Bakwarna',
            'gastrointestinal_bakwarna_keterangan' => 'Gastrointestinal Bakwarna Keterangan',
            'neurologi_posisi_mata' => 'Neurologi Posisi Mata',
            'neurologi_kelopak_mata' => 'Neurologi Kelopak Mata',
            'neurologi_kelopak_mata_keterangan' => 'Neurologi Kelopak Mata Keterangan',
            'neurologi_besar_pupil' => 'Neurologi Besar Pupil',
            'neurologi_konjugtiva' => 'Neurologi Konjugtiva',
            'neurologi_konjugtiva_keterangan' => 'Neurologi Konjugtiva Keterangan',
            'neurologi_sklera' => 'Neurologi Sklera',
            'neurologi_sklera_keterangan' => 'Neurologi Sklera Keterangan',
            'neurologi_pendengaran' => 'Neurologi Pendengaran',
            'neurologi_pendengaran_keterangan' => 'Neurologi Pendengaran Keterangan',
            'neurologi_penciuman' => 'Neurologi Penciuman',
            'neurologi_penciuman_keterangan' => 'Neurologi Penciuman Keterangan',
            'integument_warna_kulit' => 'Integument Warna Kulit',
            'integument_warna_kulit_keterangan' => 'Integument Warna Kulit Keterangan',
            'integument_vernic_kaseosa' => 'Integument Vernic Kaseosa',
            'integument_vernic_kaseosa_keterangan' => 'Integument Vernic Kaseosa Keterangan',
            'integument_turgor' => 'Integument Turgor',
            'integument_lanugo' => 'Integument Lanugo',
            'integument_kulit' => 'Integument Kulit',
            'integument_risiko_dekubitas' => 'Integument Risiko Dekubitas',
            'reproduksi' => 'Reproduksi',
            'reproduksi_keterangan' => 'Reproduksi Keterangan',
            'muskuloskeletal_rekoil_telinga' => 'Muskuloskeletal Rekoil Telinga',
            'muskuloskeletal_rekoil_telinga_keterangan' => 'Muskuloskeletal Rekoil Telinga Keterangan',
            'muskuloskeletal_lengan' => 'Muskuloskeletal Lengan',
            'muskuloskeletal_lengan_keterangan' => 'Muskuloskeletal Lengan Keterangan',
            'muskuloskeletal_tungkai' => 'Muskuloskeletal Tungkai',
            'muskuloskeletal_tungkai_keterangan' => 'Muskuloskeletal Tungkai Keterangan',
            'muskuloskeletal_telapak_kaki' => 'Muskuloskeletal Telapak Kaki',
            'kondisi_psikologis' => 'Kondisi Psikologis',
            'gangguan_jiwa' => 'Gangguan Jiwa',
            'menerima_kondisi_bayi' => 'Menerima Kondisi Bayi',
            'status_menikah' => 'Status Menikah',
            'masalah_pernikahan' => 'Masalah Pernikahan',
            'masalah_pernikahan_keterangan' => 'Masalah Pernikahan Keterangan',
            'pekerjaan' => 'Pekerjaan',
            'agama' => 'Agama',
            'nilai_kepercayaan' => 'Nilai Kepercayaan',
            'nilai_kepercayaan_keterangan' => 'Nilai Kepercayaan Keterangan',
            'suku' => 'Suku',
            'pendidikan' => 'Pendidikan',
            'pembayaran' => 'Pembayaran',
            'tinggal_bersama' => 'Tinggal Bersama',
            'tinggal_bersama_keterangan' => 'Tinggal Bersama Keterangan',
            'hubungan_keluarga' => 'Hubungan Keluarga',
            'respon_emosi' => 'Respon Emosi',
            'bahasa_sehari_hari' => 'Bahasa Sehari Hari',
            'kemampuan_bacatulis' => 'Kemampuan Bacatulis',
            'butuh_penterjemah' => 'Butuh Penterjemah',
            'butuh_penterjemah_keterangan' => 'Butuh Penterjemah Keterangan',
            'terdapat_hambatan_belajar' => 'Terdapat Hambatan Belajar',
            'hambatan_belajar' => 'Hambatan Belajar',
            'hambatan_belajar_keterangan' => 'Hambatan Belajar Keterangan',
            'hambatan_cara_bicara' => 'Hambatan Cara Bicara',
            'hambatan_bahasa_isyarat' => 'Hambatan Bahasa Isyarat',
            'cara_belajar_disukai' => 'Cara Belajar Disukai',
            'kesediaan_menerima_informasi' => 'Kesediaan Menerima Informasi',
            'kesediaan_menerima_informasi_keterangan' => 'Kesediaan Menerima Informasi Keterangan',
            'pemahaman_nutrisi' => 'Pemahaman Nutrisi',
            'pemahaman_penyakit' => 'Pemahaman Penyakit',
            'pemahaman_pengobatan' => 'Pemahaman Pengobatan',
            'pemahaman_perawatan' => 'Pemahaman Perawatan',
            'masalah_gizi1' => 'Masalah Gizi1',
            'nilai_gizi1' => 'Nilai Gizi1',
            'masalah_gizi2' => 'Masalah Gizi2',
            'nilai_gizi2' => 'Nilai Gizi2',
            'masalah_gizi3' => 'Masalah Gizi3',
            'nilai_gizi3' => 'Nilai Gizi3',
            'totalgizi' => 'Totalgizi',
            'keterangan_gizi' => 'Keterangan Gizi',
            'penilaian_humptydumpty_skala1' => 'Penilaian Humptydumpty Skala1',
            'penilaian_humptydumpty_nilai1' => 'Penilaian Humptydumpty Nilai1',
            'penilaian_humptydumpty_skala2' => 'Penilaian Humptydumpty Skala2',
            'penilaian_humptydumpty_nilai2' => 'Penilaian Humptydumpty Nilai2',
            'penilaian_humptydumpty_skala3' => 'Penilaian Humptydumpty Skala3',
            'penilaian_humptydumpty_nilai3' => 'Penilaian Humptydumpty Nilai3',
            'penilaian_humptydumpty_skala4' => 'Penilaian Humptydumpty Skala4',
            'penilaian_humptydumpty_nilai4' => 'Penilaian Humptydumpty Nilai4',
            'penilaian_humptydumpty_skala5' => 'Penilaian Humptydumpty Skala5',
            'penilaian_humptydumpty_nilai5' => 'Penilaian Humptydumpty Nilai5',
            'penilaian_humptydumpty_skala6' => 'Penilaian Humptydumpty Skala6',
            'penilaian_humptydumpty_nilai6' => 'Penilaian Humptydumpty Nilai6',
            'penilaian_humptydumpty_skala7' => 'Penilaian Humptydumpty Skala7',
            'penilaian_humptydumpty_nilai7' => 'Penilaian Humptydumpty Nilai7',
            'penilaian_humptydumpty_totalnilai' => 'Penilaian Humptydumpty Totalnilai',
            'penilaian_humptydumpty_hasil' => 'Penilaian Humptydumpty Hasil',
            'skala_nips1' => 'Skala Nips1',
            'skala_nips1_nilai' => 'Skala Nips1 Nilai',
            'skala_nips2' => 'Skala Nips2',
            'skala_nips2_nilai' => 'Skala Nips2 Nilai',
            'skala_nips3' => 'Skala Nips3',
            'skala_nips3_nilai' => 'Skala Nips3 Nilai',
            'skala_nips4' => 'Skala Nips4',
            'skala_nips4_nilai' => 'Skala Nips4 Nilai',
            'skala_nips5' => 'Skala Nips5',
            'skala_nips5_nilai' => 'Skala Nips5 Nilai',
            'skala_nips_total' => 'Skala Nips Total',
            'skala_nips_keterangan' => 'Skala Nips Keterangan',
            'informasi_perencanaan_pulang' => 'Informasi Perencanaan Pulang',
            'lama_ratarata' => 'Lama Ratarata',
            'perencanaan_pulang' => 'Perencanaan Pulang',
            'kondisi_klinis_pulang' => 'Kondisi Klinis Pulang',
            'perawatan_lanjutan_dirumah' => 'Perawatan Lanjutan Dirumah',
            'cara_transportasi_pulang' => 'Cara Transportasi Pulang',
            'transportasi_digunakan' => 'Transportasi Digunakan',
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
        return $this->hasMany(MasterMasalahKeperawatanNeonatus::class, ['kode_masalah' => 'kode_masalah'])->viaTable('penilaian_awal_keperawatan_ranap_neonatus_masalah', ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[KodeRencanas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeRencanas()
    {
        return $this->hasMany(MasterRencanaKeperawatanNeonatus::class, ['kode_rencana' => 'kode_rencana'])->viaTable('penilaian_awal_keperawatan_ranap_neonatus_rencana', ['no_rawat' => 'no_rawat']);
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
     * Gets query for [[PenilaianAwalKeperawatanRanapNeonatusMasalahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRanapNeonatusMasalahs()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRanapNeonatusMasalah::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRanapNeonatusRencanas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRanapNeonatusRencanas()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRanapNeonatusRencana::class, ['no_rawat' => 'no_rawat']);
    }
}
