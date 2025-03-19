<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_awal_keperawatan_kebidanan".
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
 * @property string $lila
 * @property string $bmi
 * @property string $tfu
 * @property string $tbj
 * @property string $letak
 * @property string $presentasi
 * @property string $penurunan
 * @property string $his
 * @property string $kekuatan
 * @property string $lamanya
 * @property string $bjj
 * @property string $ket_bjj
 * @property string $portio
 * @property string $serviks
 * @property string $ketuban
 * @property string $hodge
 * @property string $inspekulo
 * @property string $ket_inspekulo
 * @property string $ctg
 * @property string $ket_ctg
 * @property string $usg
 * @property string $ket_usg
 * @property string $lab
 * @property string $ket_lab
 * @property string $lakmus
 * @property string $ket_lakmus
 * @property string $panggul
 * @property string $keluhan_utama
 * @property string $umur
 * @property string $lama
 * @property string $banyaknya
 * @property string $haid
 * @property string $siklus
 * @property string $ket_siklus
 * @property string $ket_siklus1
 * @property string $status
 * @property string $kali
 * @property string $usia1
 * @property string $ket1
 * @property string|null $usia2
 * @property string|null $ket2
 * @property string|null $usia3
 * @property string|null $ket3
 * @property string|null $hpht
 * @property string $usia_kehamilan
 * @property string|null $tp
 * @property string $imunisasi
 * @property string $ket_imunisasi
 * @property string $g
 * @property string $p
 * @property string $a
 * @property string $hidup
 * @property string $ginekologi
 * @property string $kebiasaan
 * @property string $ket_kebiasaan
 * @property string $kebiasaan1
 * @property string $ket_kebiasaan1
 * @property string $kebiasaan2
 * @property string $ket_kebiasaan2
 * @property string $kebiasaan3
 * @property string $kb
 * @property string $ket_kb
 * @property string $komplikasi
 * @property string $ket_komplikasi
 * @property string $berhenti
 * @property string $alasan
 * @property string $alat_bantu
 * @property string $ket_bantu
 * @property string $prothesa
 * @property string $ket_pro
 * @property string $adl
 * @property string $status_psiko
 * @property string $ket_psiko
 * @property string $hub_keluarga
 * @property string $tinggal_dengan
 * @property string $ket_tinggal
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
 * @property string $total_hasil
 * @property string $nyeri
 * @property string $provokes
 * @property string $ket_provokes
 * @property string $quality
 * @property string $ket_quality
 * @property string $lokasi
 * @property string $menyebar
 * @property string $skala_nyeri
 * @property string $durasi
 * @property string $nyeri_hilang
 * @property string $ket_nyeri
 * @property string $pada_dokter
 * @property string $ket_dokter
 * @property string $masalah
 * @property string $tindakan
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PenilaianAwalKeperawatanKebidanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_awal_keperawatan_kebidanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'informasi', 'rr', 'gcs', 'lila', 'bmi', 'tfu', 'tbj', 'letak', 'presentasi', 'penurunan', 'his', 'kekuatan', 'lamanya', 'bjj', 'ket_bjj', 'portio', 'serviks', 'ketuban', 'hodge', 'inspekulo', 'ket_inspekulo', 'ctg', 'ket_ctg', 'usg', 'ket_usg', 'lab', 'ket_lab', 'lakmus', 'ket_lakmus', 'panggul', 'umur', 'lama', 'banyaknya', 'haid', 'siklus', 'ket_siklus', 'ket_siklus1', 'status', 'kali', 'usia1', 'ket1', 'usia_kehamilan', 'imunisasi', 'ket_imunisasi', 'g', 'p', 'a', 'hidup', 'ginekologi', 'kebiasaan', 'ket_kebiasaan', 'kebiasaan1', 'ket_kebiasaan1', 'kebiasaan2', 'ket_kebiasaan2', 'kebiasaan3', 'kb', 'ket_kb', 'komplikasi', 'ket_komplikasi', 'berhenti', 'alasan', 'alat_bantu', 'prothesa', 'ket_pro', 'adl', 'status_psiko', 'ket_psiko', 'hub_keluarga', 'tinggal_dengan', 'ket_tinggal', 'ekonomi', 'budaya', 'ket_budaya', 'edukasi', 'ket_edukasi', 'berjalan_a', 'berjalan_b', 'berjalan_c', 'hasil', 'lapor', 'ket_lapor', 'sg1', 'nilai1', 'sg2', 'nilai2', 'total_hasil', 'nyeri', 'provokes', 'ket_provokes', 'quality', 'ket_quality', 'lokasi', 'menyebar', 'skala_nyeri', 'durasi', 'nyeri_hilang', 'ket_nyeri', 'pada_dokter', 'ket_dokter', 'masalah', 'tindakan', 'nip'], 'required'],
            [['tanggal', 'hpht', 'tp'], 'safe'],
            [['informasi', 'ket_bjj', 'inspekulo', 'ctg', 'usg', 'lab', 'lakmus', 'panggul', 'ket_siklus', 'ket_siklus1', 'status', 'ket1', 'ket2', 'ket3', 'imunisasi', 'ginekologi', 'kebiasaan', 'kebiasaan1', 'kebiasaan2', 'kebiasaan3', 'kb', 'komplikasi', 'alat_bantu', 'prothesa', 'adl', 'status_psiko', 'hub_keluarga', 'tinggal_dengan', 'ekonomi', 'budaya', 'edukasi', 'berjalan_a', 'berjalan_b', 'berjalan_c', 'hasil', 'lapor', 'sg1', 'nilai1', 'sg2', 'nilai2', 'nyeri', 'provokes', 'quality', 'menyebar', 'skala_nyeri', 'nyeri_hilang', 'pada_dokter'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['td'], 'string', 'max' => 8],
            [['nadi', 'rr', 'suhu', 'bb', 'tb', 'lila', 'kali', 'usia1', 'usia2', 'usia3', 'ket_kebiasaan1', 'ket_kebiasaan2', 'total_hasil', 'durasi'], 'string', 'max' => 5],
            [['gcs', 'bmi', 'tfu', 'tbj', 'letak', 'presentasi', 'penurunan', 'his', 'kekuatan', 'lamanya', 'bjj', 'portio', 'serviks', 'ketuban', 'hodge', 'umur', 'lama', 'banyaknya', 'siklus', 'usia_kehamilan', 'ket_imunisasi', 'g', 'p', 'a', 'hidup', 'ket_kb', 'ket_lapor', 'ket_dokter'], 'string', 'max' => 10],
            [['ket_inspekulo', 'ket_ctg', 'ket_usg', 'ket_lab', 'ket_lakmus', 'ket_kebiasaan', 'ket_komplikasi', 'alasan', 'ket_bantu', 'ket_pro', 'ket_psiko', 'ket_tinggal', 'ket_budaya', 'ket_edukasi'], 'string', 'max' => 50],
            [['keluhan_utama', 'masalah', 'tindakan'], 'string', 'max' => 1000],
            [['haid', 'berhenti', 'nip'], 'string', 'max' => 20],
            [['ket_provokes', 'ket_quality', 'lokasi', 'ket_nyeri'], 'string', 'max' => 40],
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
            'lila' => 'Lila',
            'bmi' => 'Bmi',
            'tfu' => 'Tfu',
            'tbj' => 'Tbj',
            'letak' => 'Letak',
            'presentasi' => 'Presentasi',
            'penurunan' => 'Penurunan',
            'his' => 'His',
            'kekuatan' => 'Kekuatan',
            'lamanya' => 'Lamanya',
            'bjj' => 'Bjj',
            'ket_bjj' => 'Ket Bjj',
            'portio' => 'Portio',
            'serviks' => 'Serviks',
            'ketuban' => 'Ketuban',
            'hodge' => 'Hodge',
            'inspekulo' => 'Inspekulo',
            'ket_inspekulo' => 'Ket Inspekulo',
            'ctg' => 'Ctg',
            'ket_ctg' => 'Ket Ctg',
            'usg' => 'Usg',
            'ket_usg' => 'Ket Usg',
            'lab' => 'Lab',
            'ket_lab' => 'Ket Lab',
            'lakmus' => 'Lakmus',
            'ket_lakmus' => 'Ket Lakmus',
            'panggul' => 'Panggul',
            'keluhan_utama' => 'Keluhan Utama',
            'umur' => 'Umur',
            'lama' => 'Lama',
            'banyaknya' => 'Banyaknya',
            'haid' => 'Haid',
            'siklus' => 'Siklus',
            'ket_siklus' => 'Ket Siklus',
            'ket_siklus1' => 'Ket Siklus1',
            'status' => 'Status',
            'kali' => 'Kali',
            'usia1' => 'Usia1',
            'ket1' => 'Ket1',
            'usia2' => 'Usia2',
            'ket2' => 'Ket2',
            'usia3' => 'Usia3',
            'ket3' => 'Ket3',
            'hpht' => 'Hpht',
            'usia_kehamilan' => 'Usia Kehamilan',
            'tp' => 'Tp',
            'imunisasi' => 'Imunisasi',
            'ket_imunisasi' => 'Ket Imunisasi',
            'g' => 'G',
            'p' => 'P',
            'a' => 'A',
            'hidup' => 'Hidup',
            'ginekologi' => 'Ginekologi',
            'kebiasaan' => 'Kebiasaan',
            'ket_kebiasaan' => 'Ket Kebiasaan',
            'kebiasaan1' => 'Kebiasaan1',
            'ket_kebiasaan1' => 'Ket Kebiasaan1',
            'kebiasaan2' => 'Kebiasaan2',
            'ket_kebiasaan2' => 'Ket Kebiasaan2',
            'kebiasaan3' => 'Kebiasaan3',
            'kb' => 'Kb',
            'ket_kb' => 'Ket Kb',
            'komplikasi' => 'Komplikasi',
            'ket_komplikasi' => 'Ket Komplikasi',
            'berhenti' => 'Berhenti',
            'alasan' => 'Alasan',
            'alat_bantu' => 'Alat Bantu',
            'ket_bantu' => 'Ket Bantu',
            'prothesa' => 'Prothesa',
            'ket_pro' => 'Ket Pro',
            'adl' => 'Adl',
            'status_psiko' => 'Status Psiko',
            'ket_psiko' => 'Ket Psiko',
            'hub_keluarga' => 'Hub Keluarga',
            'tinggal_dengan' => 'Tinggal Dengan',
            'ket_tinggal' => 'Ket Tinggal',
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
            'total_hasil' => 'Total Hasil',
            'nyeri' => 'Nyeri',
            'provokes' => 'Provokes',
            'ket_provokes' => 'Ket Provokes',
            'quality' => 'Quality',
            'ket_quality' => 'Ket Quality',
            'lokasi' => 'Lokasi',
            'menyebar' => 'Menyebar',
            'skala_nyeri' => 'Skala Nyeri',
            'durasi' => 'Durasi',
            'nyeri_hilang' => 'Nyeri Hilang',
            'ket_nyeri' => 'Ket Nyeri',
            'pada_dokter' => 'Pada Dokter',
            'ket_dokter' => 'Ket Dokter',
            'masalah' => 'Masalah',
            'tindakan' => 'Tindakan',
            'nip' => 'Nip',
        ];
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
}
