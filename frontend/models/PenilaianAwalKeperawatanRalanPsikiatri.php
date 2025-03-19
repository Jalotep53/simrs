<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_awal_keperawatan_ralan_psikiatri".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $informasi
 * @property string $keluhan_utama
 * @property string $rkd_sakit_sejak
 * @property string $rkd_keluhan
 * @property string $rkd_berobat
 * @property string $rkd_hasil_pengobatan
 * @property string $fp_putus_obat
 * @property string $ket_putus_obat
 * @property string $fp_ekonomi
 * @property string $ket_masalah_ekonomi
 * @property string $fp_masalah_fisik
 * @property string $ket_masalah_fisik
 * @property string $fp_masalah_psikososial
 * @property string $ket_masalah_psikososial
 * @property string $rh_keluarga
 * @property string $ket_rh_keluarga
 * @property string $resiko_bunuh_diri
 * @property string $rbd_ide
 * @property string $ket_rbd_ide
 * @property string $rbd_rencana
 * @property string $ket_rbd_rencana
 * @property string $rbd_alat
 * @property string $ket_rbd_alat
 * @property string $rbd_percobaan
 * @property string $ket_rbd_percobaan
 * @property string $rbd_keinginan
 * @property string $ket_rbd_keinginan
 * @property string $rpo_penggunaan
 * @property string $ket_rpo_penggunaan
 * @property string $rpo_efek_samping
 * @property string $ket_rpo_efek_samping
 * @property string $rpo_napza
 * @property string $ket_rpo_napza
 * @property string $ket_lama_pemakaian
 * @property string $ket_cara_pemakaian
 * @property string $ket_latar_belakang_pemakaian
 * @property string $rpo_penggunaan_obat_lainnya
 * @property string $ket_penggunaan_obat_lainnya
 * @property string $ket_alasan_penggunaan
 * @property string $rpo_alergi_obat
 * @property string $ket_alergi_obat
 * @property string $rpo_merokok
 * @property string $ket_merokok
 * @property string $rpo_minum_kopi
 * @property string $ket_minum_kopi
 * @property string $td
 * @property string $nadi
 * @property string $gcs
 * @property string $rr
 * @property string $suhu
 * @property string $pf_keluhan_fisik
 * @property string $ket_keluhan_fisik
 * @property string $skala_nyeri
 * @property string $durasi
 * @property string $nyeri
 * @property string $provokes
 * @property string $ket_provokes
 * @property string $quality
 * @property string $ket_quality
 * @property string $lokasi
 * @property string $menyebar
 * @property string $pada_dokter
 * @property string $ket_dokter
 * @property string $nyeri_hilang
 * @property string $ket_nyeri
 * @property string $bb
 * @property string $tb
 * @property string $bmi
 * @property string $lapor_status_nutrisi
 * @property string $ket_lapor_status_nutrisi
 * @property string $sg1
 * @property string $nilai1
 * @property string $sg2
 * @property string $nilai2
 * @property int $total_hasil
 * @property string $resikojatuh
 * @property string $bjm
 * @property string $msa
 * @property string $hasil
 * @property string $lapor
 * @property string $ket_lapor
 * @property string $adl_mandi
 * @property string $adl_berpakaian
 * @property string $adl_makan
 * @property string $adl_bak
 * @property string $adl_bab
 * @property string $adl_hobi
 * @property string $ket_adl_hobi
 * @property string $adl_sosialisasi
 * @property string $ket_adl_sosialisasi
 * @property string $adl_kegiatan
 * @property string $ket_adl_kegiatan
 * @property string $sk_penampilan
 * @property string $sk_alam_perasaan
 * @property string $sk_pembicaraan
 * @property string $sk_afek
 * @property string $sk_aktifitas_motorik
 * @property string $sk_gangguan_ringan
 * @property string $sk_proses_pikir
 * @property string $sk_orientasi
 * @property string $sk_tingkat_kesadaran_orientasi
 * @property string $sk_memori
 * @property string $sk_interaksi
 * @property string $sk_konsentrasi
 * @property string $sk_persepsi
 * @property string $ket_sk_persepsi
 * @property string $sk_isi_pikir
 * @property string $sk_waham
 * @property string $ket_sk_waham
 * @property string $sk_daya_tilik_diri
 * @property string $ket_sk_daya_tilik_diri
 * @property string $kk_pembelajaran
 * @property string $ket_kk_pembelajaran
 * @property string $ket_kk_pembelajaran_lainnya
 * @property string $kk_Penerjamah
 * @property string $ket_kk_penerjamah_Lainnya
 * @property string $kk_bahasa_isyarat
 * @property string $kk_kebutuhan_edukasi
 * @property string $ket_kk_kebutuhan_edukasi
 * @property string $rencana
 * @property string $nip
 *
 * @property MasterMasalahKeperawatanPsikiatri[] $kodeMasalahs
 * @property MasterRencanaKeperawatanPsikiatri[] $kodeRencanas
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 * @property PenilaianAwalKeperawatanRalanMasalahPsikiatri[] $penilaianAwalKeperawatanRalanMasalahPsikiatris
 * @property PenilaianAwalKeperawatanRalanRencanaPsikiatri[] $penilaianAwalKeperawatanRalanRencanaPsikiatris
 */
class PenilaianAwalKeperawatanRalanPsikiatri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_awal_keperawatan_ralan_psikiatri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'informasi', 'rkd_sakit_sejak', 'rkd_keluhan', 'rkd_berobat', 'rkd_hasil_pengobatan', 'fp_putus_obat', 'ket_putus_obat', 'fp_ekonomi', 'ket_masalah_ekonomi', 'fp_masalah_fisik', 'ket_masalah_fisik', 'fp_masalah_psikososial', 'ket_masalah_psikososial', 'rh_keluarga', 'ket_rh_keluarga', 'resiko_bunuh_diri', 'rbd_ide', 'ket_rbd_ide', 'rbd_rencana', 'ket_rbd_rencana', 'rbd_alat', 'ket_rbd_alat', 'rbd_percobaan', 'ket_rbd_percobaan', 'rbd_keinginan', 'ket_rbd_keinginan', 'rpo_penggunaan', 'ket_rpo_penggunaan', 'rpo_efek_samping', 'ket_rpo_efek_samping', 'rpo_napza', 'ket_rpo_napza', 'ket_lama_pemakaian', 'ket_cara_pemakaian', 'ket_latar_belakang_pemakaian', 'rpo_penggunaan_obat_lainnya', 'ket_penggunaan_obat_lainnya', 'ket_alasan_penggunaan', 'rpo_alergi_obat', 'ket_alergi_obat', 'rpo_merokok', 'ket_merokok', 'rpo_minum_kopi', 'ket_minum_kopi', 'gcs', 'rr', 'pf_keluhan_fisik', 'ket_keluhan_fisik', 'skala_nyeri', 'durasi', 'nyeri', 'provokes', 'ket_provokes', 'quality', 'ket_quality', 'lokasi', 'menyebar', 'pada_dokter', 'ket_dokter', 'nyeri_hilang', 'ket_nyeri', 'bmi', 'lapor_status_nutrisi', 'ket_lapor_status_nutrisi', 'sg1', 'nilai1', 'sg2', 'nilai2', 'total_hasil', 'resikojatuh', 'bjm', 'msa', 'hasil', 'lapor', 'ket_lapor', 'adl_mandi', 'adl_berpakaian', 'adl_makan', 'adl_bak', 'adl_bab', 'adl_hobi', 'ket_adl_hobi', 'adl_sosialisasi', 'ket_adl_sosialisasi', 'adl_kegiatan', 'ket_adl_kegiatan', 'sk_penampilan', 'sk_alam_perasaan', 'sk_pembicaraan', 'sk_afek', 'sk_aktifitas_motorik', 'sk_gangguan_ringan', 'sk_proses_pikir', 'sk_orientasi', 'sk_tingkat_kesadaran_orientasi', 'sk_memori', 'sk_interaksi', 'sk_konsentrasi', 'sk_persepsi', 'sk_isi_pikir', 'sk_waham', 'sk_daya_tilik_diri', 'kk_pembelajaran', 'ket_kk_pembelajaran', 'kk_Penerjamah', 'ket_kk_penerjamah_Lainnya', 'kk_bahasa_isyarat', 'kk_kebutuhan_edukasi', 'rencana', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['informasi', 'rkd_berobat', 'rkd_hasil_pengobatan', 'fp_putus_obat', 'fp_ekonomi', 'fp_masalah_fisik', 'fp_masalah_psikososial', 'rh_keluarga', 'resiko_bunuh_diri', 'rbd_ide', 'rbd_rencana', 'rbd_alat', 'rbd_percobaan', 'rbd_keinginan', 'rpo_penggunaan', 'rpo_efek_samping', 'rpo_napza', 'rpo_penggunaan_obat_lainnya', 'rpo_alergi_obat', 'rpo_merokok', 'rpo_minum_kopi', 'pf_keluhan_fisik', 'skala_nyeri', 'nyeri', 'provokes', 'quality', 'menyebar', 'pada_dokter', 'nyeri_hilang', 'lapor_status_nutrisi', 'sg1', 'nilai1', 'sg2', 'nilai2', 'resikojatuh', 'bjm', 'msa', 'hasil', 'lapor', 'adl_mandi', 'adl_berpakaian', 'adl_makan', 'adl_bak', 'adl_bab', 'adl_hobi', 'adl_sosialisasi', 'adl_kegiatan', 'sk_penampilan', 'sk_alam_perasaan', 'sk_pembicaraan', 'sk_afek', 'sk_aktifitas_motorik', 'sk_gangguan_ringan', 'sk_proses_pikir', 'sk_orientasi', 'sk_tingkat_kesadaran_orientasi', 'sk_memori', 'sk_interaksi', 'sk_konsentrasi', 'sk_persepsi', 'sk_isi_pikir', 'sk_waham', 'sk_daya_tilik_diri', 'kk_pembelajaran', 'ket_kk_pembelajaran', 'kk_Penerjamah', 'kk_bahasa_isyarat', 'kk_kebutuhan_edukasi'], 'string'],
            [['total_hasil'], 'integer'],
            [['no_rawat'], 'string', 'max' => 17],
            [['keluhan_utama', 'rkd_keluhan'], 'string', 'max' => 500],
            [['rkd_sakit_sejak', 'ket_lama_pemakaian', 'td'], 'string', 'max' => 8],
            [['ket_putus_obat', 'ket_masalah_ekonomi', 'ket_masalah_fisik', 'ket_masalah_psikososial', 'ket_rh_keluarga', 'ket_rbd_ide', 'ket_rbd_rencana', 'ket_rbd_alat', 'ket_quality', 'lokasi', 'ket_adl_hobi', 'ket_adl_sosialisasi', 'ket_adl_kegiatan', 'ket_kk_pembelajaran_lainnya', 'ket_kk_penerjamah_Lainnya', 'ket_kk_kebutuhan_edukasi'], 'string', 'max' => 50],
            [['ket_rbd_percobaan', 'ket_cara_pemakaian', 'ket_dokter', 'ket_lapor_status_nutrisi', 'ket_lapor'], 'string', 'max' => 15],
            [['ket_rbd_keinginan', 'ket_keluhan_fisik', 'ket_sk_waham', 'ket_sk_daya_tilik_diri'], 'string', 'max' => 100],
            [['ket_rpo_penggunaan', 'ket_rpo_efek_samping', 'ket_penggunaan_obat_lainnya', 'nip'], 'string', 'max' => 20],
            [['ket_rpo_napza', 'ket_alergi_obat', 'ket_merokok', 'ket_minum_kopi', 'durasi'], 'string', 'max' => 25],
            [['ket_latar_belakang_pemakaian'], 'string', 'max' => 60],
            [['ket_alasan_penggunaan'], 'string', 'max' => 65],
            [['nadi', 'gcs', 'rr', 'suhu', 'bb', 'tb', 'bmi'], 'string', 'max' => 5],
            [['ket_provokes', 'ket_nyeri'], 'string', 'max' => 40],
            [['ket_sk_persepsi'], 'string', 'max' => 70],
            [['rencana'], 'string', 'max' => 200],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
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
            'keluhan_utama' => 'Keluhan Utama',
            'rkd_sakit_sejak' => 'Rkd Sakit Sejak',
            'rkd_keluhan' => 'Rkd Keluhan',
            'rkd_berobat' => 'Rkd Berobat',
            'rkd_hasil_pengobatan' => 'Rkd Hasil Pengobatan',
            'fp_putus_obat' => 'Fp Putus Obat',
            'ket_putus_obat' => 'Ket Putus Obat',
            'fp_ekonomi' => 'Fp Ekonomi',
            'ket_masalah_ekonomi' => 'Ket Masalah Ekonomi',
            'fp_masalah_fisik' => 'Fp Masalah Fisik',
            'ket_masalah_fisik' => 'Ket Masalah Fisik',
            'fp_masalah_psikososial' => 'Fp Masalah Psikososial',
            'ket_masalah_psikososial' => 'Ket Masalah Psikososial',
            'rh_keluarga' => 'Rh Keluarga',
            'ket_rh_keluarga' => 'Ket Rh Keluarga',
            'resiko_bunuh_diri' => 'Resiko Bunuh Diri',
            'rbd_ide' => 'Rbd Ide',
            'ket_rbd_ide' => 'Ket Rbd Ide',
            'rbd_rencana' => 'Rbd Rencana',
            'ket_rbd_rencana' => 'Ket Rbd Rencana',
            'rbd_alat' => 'Rbd Alat',
            'ket_rbd_alat' => 'Ket Rbd Alat',
            'rbd_percobaan' => 'Rbd Percobaan',
            'ket_rbd_percobaan' => 'Ket Rbd Percobaan',
            'rbd_keinginan' => 'Rbd Keinginan',
            'ket_rbd_keinginan' => 'Ket Rbd Keinginan',
            'rpo_penggunaan' => 'Rpo Penggunaan',
            'ket_rpo_penggunaan' => 'Ket Rpo Penggunaan',
            'rpo_efek_samping' => 'Rpo Efek Samping',
            'ket_rpo_efek_samping' => 'Ket Rpo Efek Samping',
            'rpo_napza' => 'Rpo Napza',
            'ket_rpo_napza' => 'Ket Rpo Napza',
            'ket_lama_pemakaian' => 'Ket Lama Pemakaian',
            'ket_cara_pemakaian' => 'Ket Cara Pemakaian',
            'ket_latar_belakang_pemakaian' => 'Ket Latar Belakang Pemakaian',
            'rpo_penggunaan_obat_lainnya' => 'Rpo Penggunaan Obat Lainnya',
            'ket_penggunaan_obat_lainnya' => 'Ket Penggunaan Obat Lainnya',
            'ket_alasan_penggunaan' => 'Ket Alasan Penggunaan',
            'rpo_alergi_obat' => 'Rpo Alergi Obat',
            'ket_alergi_obat' => 'Ket Alergi Obat',
            'rpo_merokok' => 'Rpo Merokok',
            'ket_merokok' => 'Ket Merokok',
            'rpo_minum_kopi' => 'Rpo Minum Kopi',
            'ket_minum_kopi' => 'Ket Minum Kopi',
            'td' => 'Td',
            'nadi' => 'Nadi',
            'gcs' => 'Gcs',
            'rr' => 'Rr',
            'suhu' => 'Suhu',
            'pf_keluhan_fisik' => 'Pf Keluhan Fisik',
            'ket_keluhan_fisik' => 'Ket Keluhan Fisik',
            'skala_nyeri' => 'Skala Nyeri',
            'durasi' => 'Durasi',
            'nyeri' => 'Nyeri',
            'provokes' => 'Provokes',
            'ket_provokes' => 'Ket Provokes',
            'quality' => 'Quality',
            'ket_quality' => 'Ket Quality',
            'lokasi' => 'Lokasi',
            'menyebar' => 'Menyebar',
            'pada_dokter' => 'Pada Dokter',
            'ket_dokter' => 'Ket Dokter',
            'nyeri_hilang' => 'Nyeri Hilang',
            'ket_nyeri' => 'Ket Nyeri',
            'bb' => 'Bb',
            'tb' => 'Tb',
            'bmi' => 'Bmi',
            'lapor_status_nutrisi' => 'Lapor Status Nutrisi',
            'ket_lapor_status_nutrisi' => 'Ket Lapor Status Nutrisi',
            'sg1' => 'Sg1',
            'nilai1' => 'Nilai1',
            'sg2' => 'Sg2',
            'nilai2' => 'Nilai2',
            'total_hasil' => 'Total Hasil',
            'resikojatuh' => 'Resikojatuh',
            'bjm' => 'Bjm',
            'msa' => 'Msa',
            'hasil' => 'Hasil',
            'lapor' => 'Lapor',
            'ket_lapor' => 'Ket Lapor',
            'adl_mandi' => 'Adl Mandi',
            'adl_berpakaian' => 'Adl Berpakaian',
            'adl_makan' => 'Adl Makan',
            'adl_bak' => 'Adl Bak',
            'adl_bab' => 'Adl Bab',
            'adl_hobi' => 'Adl Hobi',
            'ket_adl_hobi' => 'Ket Adl Hobi',
            'adl_sosialisasi' => 'Adl Sosialisasi',
            'ket_adl_sosialisasi' => 'Ket Adl Sosialisasi',
            'adl_kegiatan' => 'Adl Kegiatan',
            'ket_adl_kegiatan' => 'Ket Adl Kegiatan',
            'sk_penampilan' => 'Sk Penampilan',
            'sk_alam_perasaan' => 'Sk Alam Perasaan',
            'sk_pembicaraan' => 'Sk Pembicaraan',
            'sk_afek' => 'Sk Afek',
            'sk_aktifitas_motorik' => 'Sk Aktifitas Motorik',
            'sk_gangguan_ringan' => 'Sk Gangguan Ringan',
            'sk_proses_pikir' => 'Sk Proses Pikir',
            'sk_orientasi' => 'Sk Orientasi',
            'sk_tingkat_kesadaran_orientasi' => 'Sk Tingkat Kesadaran Orientasi',
            'sk_memori' => 'Sk Memori',
            'sk_interaksi' => 'Sk Interaksi',
            'sk_konsentrasi' => 'Sk Konsentrasi',
            'sk_persepsi' => 'Sk Persepsi',
            'ket_sk_persepsi' => 'Ket Sk Persepsi',
            'sk_isi_pikir' => 'Sk Isi Pikir',
            'sk_waham' => 'Sk Waham',
            'ket_sk_waham' => 'Ket Sk Waham',
            'sk_daya_tilik_diri' => 'Sk Daya Tilik Diri',
            'ket_sk_daya_tilik_diri' => 'Ket Sk Daya Tilik Diri',
            'kk_pembelajaran' => 'Kk Pembelajaran',
            'ket_kk_pembelajaran' => 'Ket Kk Pembelajaran',
            'ket_kk_pembelajaran_lainnya' => 'Ket Kk Pembelajaran Lainnya',
            'kk_Penerjamah' => 'Kk Penerjamah',
            'ket_kk_penerjamah_Lainnya' => 'Ket Kk Penerjamah Lainnya',
            'kk_bahasa_isyarat' => 'Kk Bahasa Isyarat',
            'kk_kebutuhan_edukasi' => 'Kk Kebutuhan Edukasi',
            'ket_kk_kebutuhan_edukasi' => 'Ket Kk Kebutuhan Edukasi',
            'rencana' => 'Rencana',
            'nip' => 'Nip',
        ];
    }

    /**
     * Gets query for [[KodeMasalahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeMasalahs()
    {
        return $this->hasMany(MasterMasalahKeperawatanPsikiatri::class, ['kode_masalah' => 'kode_masalah'])->viaTable('penilaian_awal_keperawatan_ralan_masalah_psikiatri', ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[KodeRencanas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeRencanas()
    {
        return $this->hasMany(MasterRencanaKeperawatanPsikiatri::class, ['kode_rencana' => 'kode_rencana'])->viaTable('penilaian_awal_keperawatan_ralan_rencana_psikiatri', ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip']);
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
     * Gets query for [[PenilaianAwalKeperawatanRalanMasalahPsikiatris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRalanMasalahPsikiatris()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalanMasalahPsikiatri::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRalanRencanaPsikiatris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRalanRencanaPsikiatris()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalanRencanaPsikiatri::class, ['no_rawat' => 'no_rawat']);
    }
}
