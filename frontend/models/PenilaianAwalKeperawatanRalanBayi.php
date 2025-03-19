<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_awal_keperawatan_ralan_bayi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $informasi
 * @property string $td
 * @property string $nadi
 * @property string $rr
 * @property string $suhu
 * @property string $gcs
 * @property string $bb
 * @property string $tb
 * @property string $lp
 * @property string $lk
 * @property string $ld
 * @property string $keluhan_utama
 * @property string $rpd
 * @property string $rpk
 * @property string $rpo
 * @property string $alergi
 * @property string $anakke
 * @property string $darisaudara
 * @property string $caralahir
 * @property string $ket_caralahir
 * @property string $umurkelahiran
 * @property string $kelainanbawaan
 * @property string $ket_kelainan_bawaan
 * @property string $usiatengkurap
 * @property string $usiaduduk
 * @property string $usiaberdiri
 * @property string $usiagigipertama
 * @property string $usiaberjalan
 * @property string $usiabicara
 * @property string $usiamembaca
 * @property string $usiamenulis
 * @property string $gangguanemosi
 * @property string $alat_bantu
 * @property string $ket_bantu
 * @property string $prothesa
 * @property string $ket_pro
 * @property string $adl
 * @property string $status_psiko
 * @property string $ket_psiko
 * @property string $hub_keluarga
 * @property string $pengasuh
 * @property string $ket_pengasuh
 * @property string $ekonomi
 * @property string $budaya
 * @property string $ket_budaya
 * @property string $edukasi
 * @property string $ket_edukasi
 * @property string $berjalan_a
 * @property string $berjalan_b
 * @property string $berjalan_c
 * @property string $hasil
 * @property string $lapor
 * @property string $ket_lapor
 * @property string $sg1
 * @property string $nilai1
 * @property string $sg2
 * @property string $nilai2
 * @property string $sg3
 * @property string $nilai3
 * @property string $sg4
 * @property string $nilai4
 * @property int $total_hasil
 * @property string $wajah
 * @property string $nilaiwajah
 * @property string $kaki
 * @property string $nilaikaki
 * @property string $aktifitas
 * @property string $nilaiaktifitas
 * @property string $menangis
 * @property string $nilaimenangis
 * @property string $bersuara
 * @property string $nilaibersuara
 * @property int $hasilnyeri
 * @property string $nyeri
 * @property string $lokasi
 * @property string $durasi
 * @property string $frekuensi
 * @property string $nyeri_hilang
 * @property string $ket_nyeri
 * @property string $pada_dokter
 * @property string $ket_dokter
 * @property string $rencana
 * @property string $nip
 *
 * @property MasterMasalahKeperawatanAnak[] $kodeMasalahs
 * @property MasterRencanaKeperawatanAnak[] $kodeRencanas
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 * @property PenilaianAwalKeperawatanRalanBayiMasalah[] $penilaianAwalKeperawatanRalanBayiMasalahs
 * @property PenilaianAwalKeperawatanRalanRencanaAnak[] $penilaianAwalKeperawatanRalanRencanaAnaks
 */
class PenilaianAwalKeperawatanRalanBayi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_awal_keperawatan_ralan_bayi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'informasi', 'rr', 'gcs', 'rpk', 'rpo', 'anakke', 'darisaudara', 'caralahir', 'ket_caralahir', 'umurkelahiran', 'kelainanbawaan', 'ket_kelainan_bawaan', 'usiatengkurap', 'usiaduduk', 'usiaberdiri', 'usiagigipertama', 'usiaberjalan', 'usiabicara', 'usiamembaca', 'usiamenulis', 'gangguanemosi', 'alat_bantu', 'prothesa', 'ket_pro', 'adl', 'status_psiko', 'ket_psiko', 'hub_keluarga', 'pengasuh', 'ket_pengasuh', 'ekonomi', 'budaya', 'ket_budaya', 'edukasi', 'ket_edukasi', 'berjalan_a', 'berjalan_b', 'berjalan_c', 'hasil', 'lapor', 'ket_lapor', 'sg1', 'nilai1', 'sg2', 'nilai2', 'sg3', 'nilai3', 'sg4', 'nilai4', 'total_hasil', 'wajah', 'nilaiwajah', 'kaki', 'nilaikaki', 'aktifitas', 'nilaiaktifitas', 'menangis', 'nilaimenangis', 'bersuara', 'nilaibersuara', 'hasilnyeri', 'nyeri', 'lokasi', 'durasi', 'frekuensi', 'nyeri_hilang', 'ket_nyeri', 'pada_dokter', 'ket_dokter', 'rencana', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['informasi', 'caralahir', 'umurkelahiran', 'kelainanbawaan', 'alat_bantu', 'prothesa', 'adl', 'status_psiko', 'hub_keluarga', 'pengasuh', 'ekonomi', 'budaya', 'edukasi', 'berjalan_a', 'berjalan_b', 'berjalan_c', 'hasil', 'lapor', 'sg1', 'nilai1', 'sg2', 'nilai2', 'sg3', 'nilai3', 'sg4', 'nilai4', 'wajah', 'nilaiwajah', 'kaki', 'nilaikaki', 'aktifitas', 'nilaiaktifitas', 'menangis', 'nilaimenangis', 'bersuara', 'nilaibersuara', 'nyeri', 'nyeri_hilang', 'pada_dokter'], 'string'],
            [['total_hasil', 'hasilnyeri'], 'integer'],
            [['no_rawat'], 'string', 'max' => 17],
            [['td'], 'string', 'max' => 8],
            [['nadi', 'rr', 'suhu', 'gcs', 'bb', 'tb', 'lp', 'lk', 'ld'], 'string', 'max' => 5],
            [['keluhan_utama'], 'string', 'max' => 150],
            [['rpd', 'rpk', 'rpo'], 'string', 'max' => 100],
            [['alergi', 'durasi', 'frekuensi'], 'string', 'max' => 25],
            [['anakke', 'darisaudara'], 'string', 'max' => 4],
            [['ket_caralahir', 'ket_kelainan_bawaan'], 'string', 'max' => 30],
            [['usiatengkurap', 'usiaduduk', 'usiaberdiri', 'usiagigipertama', 'usiaberjalan', 'usiabicara', 'usiamembaca', 'usiamenulis', 'ket_lapor', 'ket_dokter'], 'string', 'max' => 15],
            [['gangguanemosi', 'ket_bantu', 'ket_pro', 'ket_budaya', 'ket_edukasi', 'lokasi'], 'string', 'max' => 50],
            [['ket_psiko'], 'string', 'max' => 70],
            [['ket_pengasuh', 'ket_nyeri'], 'string', 'max' => 40],
            [['rencana'], 'string', 'max' => 200],
            [['nip'], 'string', 'max' => 20],
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
            'td' => 'Td',
            'nadi' => 'Nadi',
            'rr' => 'Rr',
            'suhu' => 'Suhu',
            'gcs' => 'Gcs',
            'bb' => 'Bb',
            'tb' => 'Tb',
            'lp' => 'Lp',
            'lk' => 'Lk',
            'ld' => 'Ld',
            'keluhan_utama' => 'Keluhan Utama',
            'rpd' => 'Rpd',
            'rpk' => 'Rpk',
            'rpo' => 'Rpo',
            'alergi' => 'Alergi',
            'anakke' => 'Anakke',
            'darisaudara' => 'Darisaudara',
            'caralahir' => 'Caralahir',
            'ket_caralahir' => 'Ket Caralahir',
            'umurkelahiran' => 'Umurkelahiran',
            'kelainanbawaan' => 'Kelainanbawaan',
            'ket_kelainan_bawaan' => 'Ket Kelainan Bawaan',
            'usiatengkurap' => 'Usiatengkurap',
            'usiaduduk' => 'Usiaduduk',
            'usiaberdiri' => 'Usiaberdiri',
            'usiagigipertama' => 'Usiagigipertama',
            'usiaberjalan' => 'Usiaberjalan',
            'usiabicara' => 'Usiabicara',
            'usiamembaca' => 'Usiamembaca',
            'usiamenulis' => 'Usiamenulis',
            'gangguanemosi' => 'Gangguanemosi',
            'alat_bantu' => 'Alat Bantu',
            'ket_bantu' => 'Ket Bantu',
            'prothesa' => 'Prothesa',
            'ket_pro' => 'Ket Pro',
            'adl' => 'Adl',
            'status_psiko' => 'Status Psiko',
            'ket_psiko' => 'Ket Psiko',
            'hub_keluarga' => 'Hub Keluarga',
            'pengasuh' => 'Pengasuh',
            'ket_pengasuh' => 'Ket Pengasuh',
            'ekonomi' => 'Ekonomi',
            'budaya' => 'Budaya',
            'ket_budaya' => 'Ket Budaya',
            'edukasi' => 'Edukasi',
            'ket_edukasi' => 'Ket Edukasi',
            'berjalan_a' => 'Berjalan A',
            'berjalan_b' => 'Berjalan B',
            'berjalan_c' => 'Berjalan C',
            'hasil' => 'Hasil',
            'lapor' => 'Lapor',
            'ket_lapor' => 'Ket Lapor',
            'sg1' => 'Sg1',
            'nilai1' => 'Nilai1',
            'sg2' => 'Sg2',
            'nilai2' => 'Nilai2',
            'sg3' => 'Sg3',
            'nilai3' => 'Nilai3',
            'sg4' => 'Sg4',
            'nilai4' => 'Nilai4',
            'total_hasil' => 'Total Hasil',
            'wajah' => 'Wajah',
            'nilaiwajah' => 'Nilaiwajah',
            'kaki' => 'Kaki',
            'nilaikaki' => 'Nilaikaki',
            'aktifitas' => 'Aktifitas',
            'nilaiaktifitas' => 'Nilaiaktifitas',
            'menangis' => 'Menangis',
            'nilaimenangis' => 'Nilaimenangis',
            'bersuara' => 'Bersuara',
            'nilaibersuara' => 'Nilaibersuara',
            'hasilnyeri' => 'Hasilnyeri',
            'nyeri' => 'Nyeri',
            'lokasi' => 'Lokasi',
            'durasi' => 'Durasi',
            'frekuensi' => 'Frekuensi',
            'nyeri_hilang' => 'Nyeri Hilang',
            'ket_nyeri' => 'Ket Nyeri',
            'pada_dokter' => 'Pada Dokter',
            'ket_dokter' => 'Ket Dokter',
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
        return $this->hasMany(MasterMasalahKeperawatanAnak::class, ['kode_masalah' => 'kode_masalah'])->viaTable('penilaian_awal_keperawatan_ralan_bayi_masalah', ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[KodeRencanas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeRencanas()
    {
        return $this->hasMany(MasterRencanaKeperawatanAnak::class, ['kode_rencana' => 'kode_rencana'])->viaTable('penilaian_awal_keperawatan_ralan_rencana_anak', ['no_rawat' => 'no_rawat']);
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
     * Gets query for [[PenilaianAwalKeperawatanRalanBayiMasalahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRalanBayiMasalahs()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalanBayiMasalah::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRalanRencanaAnaks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRalanRencanaAnaks()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalanRencanaAnak::class, ['no_rawat' => 'no_rawat']);
    }
}
