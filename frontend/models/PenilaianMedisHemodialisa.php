<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_medis_hemodialisa".
 *
 * @property string $no_rawat
 * @property string|null $tanggal
 * @property string|null $kd_dokter
 * @property string|null $anamnesis
 * @property string|null $hubungan
 * @property string|null $ruangan
 * @property string|null $alergi
 * @property string|null $nyeri
 * @property string|null $status_nutrisi
 * @property string|null $hipertensi
 * @property string|null $keterangan_hipertensi
 * @property string|null $diabetes
 * @property string|null $keterangan_diabetes
 * @property string|null $batu_saluran_kemih
 * @property string|null $keterangan_batu_saluran_kemih
 * @property string|null $operasi_saluran_kemih
 * @property string|null $keterangan_operasi_saluran_kemih
 * @property string|null $infeksi_saluran_kemih
 * @property string|null $keterangan_infeksi_saluran_kemih
 * @property string|null $bengkak_seluruh_tubuh
 * @property string|null $keterangan_bengkak_seluruh_tubuh
 * @property string|null $urin_berdarah
 * @property string|null $keterangan_urin_berdarah
 * @property string|null $penyakit_ginjal_laom
 * @property string|null $keterangan_penyakit_ginjal_laom
 * @property string|null $penyakit_lain
 * @property string|null $keterangan_penyakit_lain
 * @property string|null $konsumsi_obat_nefro
 * @property string|null $keterangan_konsumsi_obat_nefro
 * @property string $dialisis_pertama
 * @property string $pernah_cpad
 * @property string $tanggal_cpad
 * @property string $pernah_transplantasi
 * @property string $tanggal_transplantasi
 * @property string $keadaan_umum
 * @property string $kesadaran
 * @property string $nadi
 * @property string $bb
 * @property string $td
 * @property string $suhu
 * @property string $napas
 * @property string $tb
 * @property string $hepatomegali
 * @property string $splenomegali
 * @property string $ascites
 * @property string $edema
 * @property string $whezzing
 * @property string $ronchi
 * @property string $ikterik
 * @property string $tekanan_vena
 * @property string $anemia
 * @property string $kardiomegali
 * @property string $bising
 * @property string $thorax
 * @property string $tanggal_thorax
 * @property string $ekg
 * @property string $tanggal_ekg
 * @property string $bno
 * @property string $tanggal_bno
 * @property string $usg
 * @property string $tanggal_usg
 * @property string $renogram
 * @property string $tanggal_renogram
 * @property string $biopsi
 * @property string $tanggal_biopsi
 * @property string $ctscan
 * @property string $tanggal_ctscan
 * @property string $arteriografi
 * @property string $tanggal_arteriografi
 * @property string $kultur_urin
 * @property string $tanggal_kultur_urin
 * @property string $laborat
 * @property string $tanggal_laborat
 * @property string $hematokrit
 * @property string $hemoglobin
 * @property string $leukosit
 * @property string $trombosit
 * @property string $hitung_jenis
 * @property string $ureum
 * @property string $urin_lengkap
 * @property string $kreatinin
 * @property string $cct
 * @property string $sgot
 * @property string $sgpt
 * @property string $ct
 * @property string $asam_urat
 * @property string $hbsag
 * @property string $anti_hcv
 * @property string $edukasi
 *
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class PenilaianMedisHemodialisa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_medis_hemodialisa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'dialisis_pertama', 'pernah_cpad', 'tanggal_cpad', 'pernah_transplantasi', 'tanggal_transplantasi', 'keadaan_umum', 'kesadaran', 'nadi', 'bb', 'td', 'suhu', 'napas', 'tb', 'hepatomegali', 'splenomegali', 'ascites', 'edema', 'whezzing', 'ronchi', 'ikterik', 'tekanan_vena', 'anemia', 'kardiomegali', 'bising', 'thorax', 'tanggal_thorax', 'ekg', 'tanggal_ekg', 'bno', 'tanggal_bno', 'usg', 'tanggal_usg', 'renogram', 'tanggal_renogram', 'biopsi', 'tanggal_biopsi', 'ctscan', 'tanggal_ctscan', 'arteriografi', 'tanggal_arteriografi', 'kultur_urin', 'tanggal_kultur_urin', 'laborat', 'tanggal_laborat', 'hematokrit', 'hemoglobin', 'leukosit', 'trombosit', 'hitung_jenis', 'ureum', 'urin_lengkap', 'kreatinin', 'cct', 'sgot', 'sgpt', 'ct', 'asam_urat', 'hbsag', 'anti_hcv', 'edukasi'], 'required'],
            [['tanggal', 'dialisis_pertama', 'tanggal_cpad', 'tanggal_transplantasi', 'tanggal_thorax', 'tanggal_ekg', 'tanggal_bno', 'tanggal_usg', 'tanggal_renogram', 'tanggal_biopsi', 'tanggal_ctscan', 'tanggal_arteriografi', 'tanggal_kultur_urin', 'tanggal_laborat'], 'safe'],
            [['anamnesis', 'nyeri', 'hipertensi', 'diabetes', 'batu_saluran_kemih', 'operasi_saluran_kemih', 'infeksi_saluran_kemih', 'bengkak_seluruh_tubuh', 'urin_berdarah', 'penyakit_ginjal_laom', 'penyakit_lain', 'konsumsi_obat_nefro', 'pernah_cpad', 'pernah_transplantasi', 'keadaan_umum', 'kesadaran', 'hepatomegali', 'splenomegali', 'ascites', 'edema', 'whezzing', 'ronchi', 'ikterik', 'tekanan_vena', 'anemia', 'kardiomegali', 'bising', 'thorax', 'ekg', 'bno', 'usg', 'renogram', 'biopsi', 'ctscan', 'arteriografi', 'kultur_urin', 'laborat', 'hbsag', 'anti_hcv'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['hubungan', 'keterangan_hipertensi', 'keterangan_diabetes', 'keterangan_batu_saluran_kemih', 'keterangan_operasi_saluran_kemih', 'keterangan_infeksi_saluran_kemih', 'keterangan_bengkak_seluruh_tubuh', 'keterangan_urin_berdarah', 'keterangan_penyakit_ginjal_laom', 'keterangan_penyakit_lain', 'keterangan_konsumsi_obat_nefro', 'hematokrit', 'hemoglobin', 'leukosit', 'trombosit', 'hitung_jenis', 'ureum', 'urin_lengkap', 'kreatinin', 'cct', 'sgot', 'sgpt', 'ct', 'asam_urat'], 'string', 'max' => 30],
            [['ruangan'], 'string', 'max' => 50],
            [['alergi', 'status_nutrisi'], 'string', 'max' => 100],
            [['nadi', 'bb', 'suhu', 'napas', 'tb'], 'string', 'max' => 5],
            [['td'], 'string', 'max' => 8],
            [['edukasi'], 'string', 'max' => 1000],
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
            'ruangan' => 'Ruangan',
            'alergi' => 'Alergi',
            'nyeri' => 'Nyeri',
            'status_nutrisi' => 'Status Nutrisi',
            'hipertensi' => 'Hipertensi',
            'keterangan_hipertensi' => 'Keterangan Hipertensi',
            'diabetes' => 'Diabetes',
            'keterangan_diabetes' => 'Keterangan Diabetes',
            'batu_saluran_kemih' => 'Batu Saluran Kemih',
            'keterangan_batu_saluran_kemih' => 'Keterangan Batu Saluran Kemih',
            'operasi_saluran_kemih' => 'Operasi Saluran Kemih',
            'keterangan_operasi_saluran_kemih' => 'Keterangan Operasi Saluran Kemih',
            'infeksi_saluran_kemih' => 'Infeksi Saluran Kemih',
            'keterangan_infeksi_saluran_kemih' => 'Keterangan Infeksi Saluran Kemih',
            'bengkak_seluruh_tubuh' => 'Bengkak Seluruh Tubuh',
            'keterangan_bengkak_seluruh_tubuh' => 'Keterangan Bengkak Seluruh Tubuh',
            'urin_berdarah' => 'Urin Berdarah',
            'keterangan_urin_berdarah' => 'Keterangan Urin Berdarah',
            'penyakit_ginjal_laom' => 'Penyakit Ginjal Laom',
            'keterangan_penyakit_ginjal_laom' => 'Keterangan Penyakit Ginjal Laom',
            'penyakit_lain' => 'Penyakit Lain',
            'keterangan_penyakit_lain' => 'Keterangan Penyakit Lain',
            'konsumsi_obat_nefro' => 'Konsumsi Obat Nefro',
            'keterangan_konsumsi_obat_nefro' => 'Keterangan Konsumsi Obat Nefro',
            'dialisis_pertama' => 'Dialisis Pertama',
            'pernah_cpad' => 'Pernah Cpad',
            'tanggal_cpad' => 'Tanggal Cpad',
            'pernah_transplantasi' => 'Pernah Transplantasi',
            'tanggal_transplantasi' => 'Tanggal Transplantasi',
            'keadaan_umum' => 'Keadaan Umum',
            'kesadaran' => 'Kesadaran',
            'nadi' => 'Nadi',
            'bb' => 'Bb',
            'td' => 'Td',
            'suhu' => 'Suhu',
            'napas' => 'Napas',
            'tb' => 'Tb',
            'hepatomegali' => 'Hepatomegali',
            'splenomegali' => 'Splenomegali',
            'ascites' => 'Ascites',
            'edema' => 'Edema',
            'whezzing' => 'Whezzing',
            'ronchi' => 'Ronchi',
            'ikterik' => 'Ikterik',
            'tekanan_vena' => 'Tekanan Vena',
            'anemia' => 'Anemia',
            'kardiomegali' => 'Kardiomegali',
            'bising' => 'Bising',
            'thorax' => 'Thorax',
            'tanggal_thorax' => 'Tanggal Thorax',
            'ekg' => 'Ekg',
            'tanggal_ekg' => 'Tanggal Ekg',
            'bno' => 'Bno',
            'tanggal_bno' => 'Tanggal Bno',
            'usg' => 'Usg',
            'tanggal_usg' => 'Tanggal Usg',
            'renogram' => 'Renogram',
            'tanggal_renogram' => 'Tanggal Renogram',
            'biopsi' => 'Biopsi',
            'tanggal_biopsi' => 'Tanggal Biopsi',
            'ctscan' => 'Ctscan',
            'tanggal_ctscan' => 'Tanggal Ctscan',
            'arteriografi' => 'Arteriografi',
            'tanggal_arteriografi' => 'Tanggal Arteriografi',
            'kultur_urin' => 'Kultur Urin',
            'tanggal_kultur_urin' => 'Tanggal Kultur Urin',
            'laborat' => 'Laborat',
            'tanggal_laborat' => 'Tanggal Laborat',
            'hematokrit' => 'Hematokrit',
            'hemoglobin' => 'Hemoglobin',
            'leukosit' => 'Leukosit',
            'trombosit' => 'Trombosit',
            'hitung_jenis' => 'Hitung Jenis',
            'ureum' => 'Ureum',
            'urin_lengkap' => 'Urin Lengkap',
            'kreatinin' => 'Kreatinin',
            'cct' => 'Cct',
            'sgot' => 'Sgot',
            'sgpt' => 'Sgpt',
            'ct' => 'Ct',
            'asam_urat' => 'Asam Urat',
            'hbsag' => 'Hbsag',
            'anti_hcv' => 'Anti Hcv',
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
