<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_fisioterapi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $informasi
 * @property string $keluhan_utama
 * @property string $rps
 * @property string $rpd
 * @property string $td
 * @property string $hr
 * @property string $rr
 * @property string $suhu
 * @property string $nyeri_tekan
 * @property string $nyeri_gerak
 * @property string $nyeri_diam
 * @property string $palpasi
 * @property string $luas_gerak_sendi
 * @property string $kekuatan_otot
 * @property string $statis
 * @property string $dinamis
 * @property string $kognitif
 * @property string $auskultasi
 * @property string $alat_bantu
 * @property string $ket_bantu
 * @property string $prothesa
 * @property string $ket_pro
 * @property string $deformitas
 * @property string $ket_deformitas
 * @property string $resikojatuh
 * @property string $ket_resikojatuh
 * @property string $adl
 * @property string $lainlain_fungsional
 * @property string $ket_fisik
 * @property string $pemeriksaan_musculoskeletal
 * @property string $pemeriksaan_neuromuscular
 * @property string $pemeriksaan_cardiopulmonal
 * @property string $pemeriksaan_integument
 * @property string $pengukuran_musculoskeletal
 * @property string $pengukuran_neuromuscular
 * @property string $pengukuran_cardiopulmonal
 * @property string $pengukuran_integument
 * @property string $penunjang
 * @property string $diagnosis_fisio
 * @property string $rencana_terapi
 * @property string $nip
 *
 * @property Pegawai $nip0
 * @property RegPeriksa $noRawat
 */
class PenilaianFisioterapi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_fisioterapi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'informasi', 'rpd', 'rr', 'nyeri_tekan', 'nyeri_gerak', 'nyeri_diam', 'palpasi', 'luas_gerak_sendi', 'kekuatan_otot', 'statis', 'dinamis', 'kognitif', 'auskultasi', 'alat_bantu', 'prothesa', 'ket_pro', 'deformitas', 'ket_deformitas', 'resikojatuh', 'ket_resikojatuh', 'adl', 'lainlain_fungsional', 'ket_fisik', 'pemeriksaan_musculoskeletal', 'pemeriksaan_neuromuscular', 'pemeriksaan_cardiopulmonal', 'pemeriksaan_integument', 'pengukuran_musculoskeletal', 'pengukuran_neuromuscular', 'pengukuran_cardiopulmonal', 'pengukuran_integument', 'penunjang', 'diagnosis_fisio', 'rencana_terapi', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['informasi', 'alat_bantu', 'prothesa', 'deformitas', 'resikojatuh', 'adl', 'ket_fisik'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['keluhan_utama'], 'string', 'max' => 150],
            [['rps', 'rpd', 'diagnosis_fisio'], 'string', 'max' => 100],
            [['td'], 'string', 'max' => 8],
            [['hr', 'rr', 'suhu', 'nyeri_tekan', 'nyeri_gerak', 'nyeri_diam'], 'string', 'max' => 5],
            [['palpasi', 'luas_gerak_sendi', 'kekuatan_otot', 'statis', 'dinamis', 'kognitif', 'auskultasi', 'ket_bantu', 'ket_pro', 'ket_deformitas', 'ket_resikojatuh'], 'string', 'max' => 50],
            [['lainlain_fungsional'], 'string', 'max' => 70],
            [['pemeriksaan_musculoskeletal', 'pemeriksaan_neuromuscular', 'pemeriksaan_cardiopulmonal', 'pemeriksaan_integument', 'pengukuran_musculoskeletal', 'pengukuran_neuromuscular', 'pengukuran_cardiopulmonal', 'pengukuran_integument', 'rencana_terapi'], 'string', 'max' => 200],
            [['penunjang'], 'string', 'max' => 500],
            [['nip'], 'string', 'max' => 20],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nip' => 'nik']],
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
            'rps' => 'Rps',
            'rpd' => 'Rpd',
            'td' => 'Td',
            'hr' => 'Hr',
            'rr' => 'Rr',
            'suhu' => 'Suhu',
            'nyeri_tekan' => 'Nyeri Tekan',
            'nyeri_gerak' => 'Nyeri Gerak',
            'nyeri_diam' => 'Nyeri Diam',
            'palpasi' => 'Palpasi',
            'luas_gerak_sendi' => 'Luas Gerak Sendi',
            'kekuatan_otot' => 'Kekuatan Otot',
            'statis' => 'Statis',
            'dinamis' => 'Dinamis',
            'kognitif' => 'Kognitif',
            'auskultasi' => 'Auskultasi',
            'alat_bantu' => 'Alat Bantu',
            'ket_bantu' => 'Ket Bantu',
            'prothesa' => 'Prothesa',
            'ket_pro' => 'Ket Pro',
            'deformitas' => 'Deformitas',
            'ket_deformitas' => 'Ket Deformitas',
            'resikojatuh' => 'Resikojatuh',
            'ket_resikojatuh' => 'Ket Resikojatuh',
            'adl' => 'Adl',
            'lainlain_fungsional' => 'Lainlain Fungsional',
            'ket_fisik' => 'Ket Fisik',
            'pemeriksaan_musculoskeletal' => 'Pemeriksaan Musculoskeletal',
            'pemeriksaan_neuromuscular' => 'Pemeriksaan Neuromuscular',
            'pemeriksaan_cardiopulmonal' => 'Pemeriksaan Cardiopulmonal',
            'pemeriksaan_integument' => 'Pemeriksaan Integument',
            'pengukuran_musculoskeletal' => 'Pengukuran Musculoskeletal',
            'pengukuran_neuromuscular' => 'Pengukuran Neuromuscular',
            'pengukuran_cardiopulmonal' => 'Pengukuran Cardiopulmonal',
            'pengukuran_integument' => 'Pengukuran Integument',
            'penunjang' => 'Penunjang',
            'diagnosis_fisio' => 'Diagnosis Fisio',
            'rencana_terapi' => 'Rencana Terapi',
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
        return $this->hasOne(Pegawai::class, ['nik' => 'nip']);
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
