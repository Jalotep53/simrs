<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_awal_keperawatan_gigi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $informasi
 * @property string $td
 * @property string $nadi
 * @property string $rr
 * @property string $suhu
 * @property string $bb
 * @property string $tb
 * @property string $bmi
 * @property string $keluhan_utama
 * @property string|null $riwayat_penyakit
 * @property string $ket_riwayat_penyakit
 * @property string $alergi
 * @property string $riwayat_perawatan_gigi
 * @property string $ket_riwayat_perawatan_gigi
 * @property string $kebiasaan_sikat_gigi
 * @property string|null $kebiasaan_lain
 * @property string $ket_kebiasaan_lain
 * @property string|null $obat_yang_diminum_saatini
 * @property string $alat_bantu
 * @property string $ket_alat_bantu
 * @property string $prothesa
 * @property string $ket_pro
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
 * @property string $nyeri
 * @property string $lokasi
 * @property string $skala_nyeri
 * @property string $durasi
 * @property string $frekuensi
 * @property string $nyeri_hilang
 * @property string $ket_nyeri
 * @property string $pada_dokter
 * @property string $ket_dokter
 * @property string $kebersihan_mulut
 * @property string $mukosa_mulut
 * @property string $karies
 * @property string $karang_gigi
 * @property string $gingiva
 * @property string $palatum
 * @property string $rencana
 * @property string $nip
 *
 * @property MasterMasalahKeperawatanGigi[] $kodeMasalahs
 * @property MasterRencanaKeperawatanGigi[] $kodeRencanas
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 * @property PenilaianAwalKeperawatanGigiMasalah[] $penilaianAwalKeperawatanGigiMasalahs
 * @property PenilaianAwalKeperawatanRalanRencanaGigi[] $penilaianAwalKeperawatanRalanRencanaGigis
 */
class PenilaianAwalKeperawatanGigi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_awal_keperawatan_gigi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'informasi', 'rr', 'bmi', 'ket_riwayat_penyakit', 'riwayat_perawatan_gigi', 'kebiasaan_sikat_gigi', 'ket_kebiasaan_lain', 'alat_bantu', 'ket_alat_bantu', 'prothesa', 'ket_pro', 'status_psiko', 'ket_psiko', 'hub_keluarga', 'tinggal_dengan', 'ket_tinggal', 'ekonomi', 'budaya', 'ket_budaya', 'edukasi', 'ket_edukasi', 'berjalan_a', 'berjalan_b', 'berjalan_c', 'hasil', 'lapor', 'ket_lapor', 'nyeri', 'lokasi', 'skala_nyeri', 'durasi', 'frekuensi', 'nyeri_hilang', 'ket_nyeri', 'pada_dokter', 'ket_dokter', 'kebersihan_mulut', 'mukosa_mulut', 'karies', 'karang_gigi', 'gingiva', 'palatum', 'rencana', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['informasi', 'riwayat_penyakit', 'riwayat_perawatan_gigi', 'kebiasaan_sikat_gigi', 'kebiasaan_lain', 'alat_bantu', 'prothesa', 'status_psiko', 'hub_keluarga', 'tinggal_dengan', 'ekonomi', 'budaya', 'edukasi', 'berjalan_a', 'berjalan_b', 'berjalan_c', 'hasil', 'lapor', 'nyeri', 'skala_nyeri', 'nyeri_hilang', 'pada_dokter', 'kebersihan_mulut', 'mukosa_mulut', 'karies', 'karang_gigi', 'gingiva', 'palatum'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['td'], 'string', 'max' => 8],
            [['nadi', 'rr', 'suhu', 'bb', 'tb'], 'string', 'max' => 5],
            [['bmi'], 'string', 'max' => 10],
            [['keluhan_utama'], 'string', 'max' => 150],
            [['ket_riwayat_penyakit', 'ket_kebiasaan_lain', 'ket_alat_bantu'], 'string', 'max' => 30],
            [['alergi', 'durasi', 'frekuensi'], 'string', 'max' => 25],
            [['ket_riwayat_perawatan_gigi', 'ket_pro', 'ket_budaya', 'ket_edukasi', 'lokasi'], 'string', 'max' => 50],
            [['obat_yang_diminum_saatini'], 'string', 'max' => 100],
            [['ket_psiko'], 'string', 'max' => 70],
            [['ket_tinggal', 'ket_nyeri'], 'string', 'max' => 40],
            [['ket_lapor', 'ket_dokter'], 'string', 'max' => 15],
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
            'bb' => 'Bb',
            'tb' => 'Tb',
            'bmi' => 'Bmi',
            'keluhan_utama' => 'Keluhan Utama',
            'riwayat_penyakit' => 'Riwayat Penyakit',
            'ket_riwayat_penyakit' => 'Ket Riwayat Penyakit',
            'alergi' => 'Alergi',
            'riwayat_perawatan_gigi' => 'Riwayat Perawatan Gigi',
            'ket_riwayat_perawatan_gigi' => 'Ket Riwayat Perawatan Gigi',
            'kebiasaan_sikat_gigi' => 'Kebiasaan Sikat Gigi',
            'kebiasaan_lain' => 'Kebiasaan Lain',
            'ket_kebiasaan_lain' => 'Ket Kebiasaan Lain',
            'obat_yang_diminum_saatini' => 'Obat Yang Diminum Saatini',
            'alat_bantu' => 'Alat Bantu',
            'ket_alat_bantu' => 'Ket Alat Bantu',
            'prothesa' => 'Prothesa',
            'ket_pro' => 'Ket Pro',
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
            'nyeri' => 'Nyeri',
            'lokasi' => 'Lokasi',
            'skala_nyeri' => 'Skala Nyeri',
            'durasi' => 'Durasi',
            'frekuensi' => 'Frekuensi',
            'nyeri_hilang' => 'Nyeri Hilang',
            'ket_nyeri' => 'Ket Nyeri',
            'pada_dokter' => 'Pada Dokter',
            'ket_dokter' => 'Ket Dokter',
            'kebersihan_mulut' => 'Kebersihan Mulut',
            'mukosa_mulut' => 'Mukosa Mulut',
            'karies' => 'Karies',
            'karang_gigi' => 'Karang Gigi',
            'gingiva' => 'Gingiva',
            'palatum' => 'Palatum',
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
        return $this->hasMany(MasterMasalahKeperawatanGigi::class, ['kode_masalah' => 'kode_masalah'])->viaTable('penilaian_awal_keperawatan_gigi_masalah', ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[KodeRencanas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeRencanas()
    {
        return $this->hasMany(MasterRencanaKeperawatanGigi::class, ['kode_rencana' => 'kode_rencana'])->viaTable('penilaian_awal_keperawatan_ralan_rencana_gigi', ['no_rawat' => 'no_rawat']);
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
     * Gets query for [[PenilaianAwalKeperawatanGigiMasalahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanGigiMasalahs()
    {
        return $this->hasMany(PenilaianAwalKeperawatanGigiMasalah::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRalanRencanaGigis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRalanRencanaGigis()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalanRencanaGigi::class, ['no_rawat' => 'no_rawat']);
    }
}
