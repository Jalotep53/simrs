<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_awal_keperawatan_igd".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $informasi
 * @property string $keluhan_utama
 * @property string $rpd
 * @property string $rpo
 * @property string $status_kehamilan
 * @property string|null $gravida
 * @property string|null $para
 * @property string|null $abortus
 * @property string|null $hpht
 * @property string $tekanan
 * @property string $pupil
 * @property string $neurosensorik
 * @property string $integumen
 * @property string $turgor
 * @property string $edema
 * @property string $mukosa
 * @property string $perdarahan
 * @property string|null $jumlah_perdarahan
 * @property string|null $warna_perdarahan
 * @property string $intoksikasi
 * @property string|null $bab
 * @property string|null $xbab
 * @property string|null $kbab
 * @property string|null $wbab
 * @property string|null $bak
 * @property string|null $xbak
 * @property string|null $wbak
 * @property string|null $lbak
 * @property string $psikologis
 * @property string $jiwa
 * @property string $perilaku
 * @property string|null $dilaporkan
 * @property string|null $sebutkan
 * @property string $hubungan
 * @property string $tinggal_dengan
 * @property string|null $ket_tinggal
 * @property string $budaya
 * @property string $ket_budaya
 * @property string $pendidikan_pj
 * @property string|null $ket_pendidikan_pj
 * @property string $edukasi
 * @property string $ket_edukasi
 * @property string $kemampuan
 * @property string $aktifitas
 * @property string $alat_bantu
 * @property string|null $ket_bantu
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
 * @property string|null $ket_nyeri
 * @property string $pada_dokter
 * @property string|null $ket_dokter
 * @property string $berjalan_a
 * @property string $berjalan_b
 * @property string $berjalan_c
 * @property string $hasil
 * @property string $lapor
 * @property string|null $ket_lapor
 * @property string $rencana
 * @property string $nip
 *
 * @property MasterMasalahKeperawatanIgd[] $kodeMasalahs
 * @property MasterRencanaKeperawatanIgd[] $kodeRencanas
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 * @property PenilaianAwalKeperawatanIgdMasalah[] $penilaianAwalKeperawatanIgdMasalahs
 * @property PenilaianAwalKeperawatanRalanRencanaIgd[] $penilaianAwalKeperawatanRalanRencanaIgds
 */
class PenilaianAwalKeperawatanIgd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_awal_keperawatan_igd';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'informasi', 'keluhan_utama', 'rpd', 'rpo', 'status_kehamilan', 'tekanan', 'pupil', 'neurosensorik', 'integumen', 'turgor', 'edema', 'mukosa', 'perdarahan', 'intoksikasi', 'psikologis', 'jiwa', 'perilaku', 'hubungan', 'tinggal_dengan', 'budaya', 'ket_budaya', 'pendidikan_pj', 'edukasi', 'ket_edukasi', 'kemampuan', 'aktifitas', 'alat_bantu', 'nyeri', 'provokes', 'ket_provokes', 'quality', 'ket_quality', 'lokasi', 'menyebar', 'skala_nyeri', 'durasi', 'nyeri_hilang', 'pada_dokter', 'berjalan_a', 'berjalan_b', 'berjalan_c', 'hasil', 'lapor', 'rencana', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['informasi', 'keluhan_utama', 'rpd', 'rpo', 'status_kehamilan', 'tekanan', 'pupil', 'neurosensorik', 'integumen', 'turgor', 'edema', 'mukosa', 'perdarahan', 'intoksikasi', 'psikologis', 'jiwa', 'perilaku', 'hubungan', 'tinggal_dengan', 'budaya', 'pendidikan_pj', 'edukasi', 'kemampuan', 'aktifitas', 'alat_bantu', 'nyeri', 'provokes', 'quality', 'menyebar', 'skala_nyeri', 'nyeri_hilang', 'pada_dokter', 'berjalan_a', 'berjalan_b', 'berjalan_c', 'hasil', 'lapor', 'rencana'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['gravida', 'para', 'abortus', 'hpht', 'nip'], 'string', 'max' => 20],
            [['jumlah_perdarahan'], 'string', 'max' => 5],
            [['warna_perdarahan', 'kbab', 'wbab', 'wbak', 'lbak', 'ket_provokes', 'ket_nyeri'], 'string', 'max' => 40],
            [['bab', 'bak'], 'string', 'max' => 2],
            [['xbab', 'xbak'], 'string', 'max' => 10],
            [['dilaporkan', 'sebutkan', 'ket_tinggal', 'ket_budaya', 'ket_pendidikan_pj', 'ket_edukasi', 'ket_bantu', 'ket_quality', 'lokasi'], 'string', 'max' => 50],
            [['durasi'], 'string', 'max' => 25],
            [['ket_dokter', 'ket_lapor'], 'string', 'max' => 15],
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
            'rpd' => 'Rpd',
            'rpo' => 'Rpo',
            'status_kehamilan' => 'Status Kehamilan',
            'gravida' => 'Gravida',
            'para' => 'Para',
            'abortus' => 'Abortus',
            'hpht' => 'Hpht',
            'tekanan' => 'Tekanan',
            'pupil' => 'Pupil',
            'neurosensorik' => 'Neurosensorik',
            'integumen' => 'Integumen',
            'turgor' => 'Turgor',
            'edema' => 'Edema',
            'mukosa' => 'Mukosa',
            'perdarahan' => 'Perdarahan',
            'jumlah_perdarahan' => 'Jumlah Perdarahan',
            'warna_perdarahan' => 'Warna Perdarahan',
            'intoksikasi' => 'Intoksikasi',
            'bab' => 'Bab',
            'xbab' => 'Xbab',
            'kbab' => 'Kbab',
            'wbab' => 'Wbab',
            'bak' => 'Bak',
            'xbak' => 'Xbak',
            'wbak' => 'Wbak',
            'lbak' => 'Lbak',
            'psikologis' => 'Psikologis',
            'jiwa' => 'Jiwa',
            'perilaku' => 'Perilaku',
            'dilaporkan' => 'Dilaporkan',
            'sebutkan' => 'Sebutkan',
            'hubungan' => 'Hubungan',
            'tinggal_dengan' => 'Tinggal Dengan',
            'ket_tinggal' => 'Ket Tinggal',
            'budaya' => 'Budaya',
            'ket_budaya' => 'Ket Budaya',
            'pendidikan_pj' => 'Pendidikan Pj',
            'ket_pendidikan_pj' => 'Ket Pendidikan Pj',
            'edukasi' => 'Edukasi',
            'ket_edukasi' => 'Ket Edukasi',
            'kemampuan' => 'Kemampuan',
            'aktifitas' => 'Aktifitas',
            'alat_bantu' => 'Alat Bantu',
            'ket_bantu' => 'Ket Bantu',
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
            'berjalan_a' => 'Berjalan A',
            'berjalan_b' => 'Berjalan B',
            'berjalan_c' => 'Berjalan C',
            'hasil' => 'Hasil',
            'lapor' => 'Lapor',
            'ket_lapor' => 'Ket Lapor',
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
        return $this->hasMany(MasterMasalahKeperawatanIgd::class, ['kode_masalah' => 'kode_masalah'])->viaTable('penilaian_awal_keperawatan_igd_masalah', ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[KodeRencanas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeRencanas()
    {
        return $this->hasMany(MasterRencanaKeperawatanIgd::class, ['kode_rencana' => 'kode_rencana'])->viaTable('penilaian_awal_keperawatan_ralan_rencana_igd', ['no_rawat' => 'no_rawat']);
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
     * Gets query for [[PenilaianAwalKeperawatanIgdMasalahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanIgdMasalahs()
    {
        return $this->hasMany(PenilaianAwalKeperawatanIgdMasalah::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRalanRencanaIgds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRalanRencanaIgds()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalanRencanaIgd::class, ['no_rawat' => 'no_rawat']);
    }
}
