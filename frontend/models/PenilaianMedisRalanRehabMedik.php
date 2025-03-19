<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_medis_ralan_rehab_medik".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $kd_dokter
 * @property string|null $anamnesis
 * @property string|null $hubungan
 * @property string|null $keluhan_utama
 * @property string|null $rps
 * @property string|null $rpd
 * @property string|null $alergi
 * @property string|null $kesadaran
 * @property string|null $nyeri
 * @property string|null $skala_nyeri
 * @property string|null $td
 * @property string|null $nadi
 * @property string|null $suhu
 * @property string|null $rr
 * @property string|null $bb
 * @property string|null $kepala
 * @property string|null $keterangan_kepala
 * @property string|null $thoraks
 * @property string|null $keterangan_thoraks
 * @property string|null $abdomen
 * @property string|null $keterangan_abdomen
 * @property string|null $ekstremitas
 * @property string|null $keterangan_ekstremitas
 * @property string|null $columna
 * @property string|null $keterangan_columna
 * @property string|null $muskulos
 * @property string|null $keterangan_muskulos
 * @property string|null $lainnya
 * @property string|null $resiko_jatuh
 * @property string|null $resiko_nutrisional
 * @property string|null $kebutuhan_fungsional
 * @property string|null $diagnosa_medis
 * @property string|null $diagnosa_fungsi
 * @property string|null $penunjang_lain
 * @property string|null $fisio
 * @property string|null $okupasi
 * @property string|null $wicara
 * @property string|null $akupuntur
 * @property string|null $tatalain
 * @property string|null $frekuensi_terapi
 * @property string $fisioterapi
 * @property string $terapi_okupasi
 * @property string $terapi_wicara
 * @property string $terapi_akupuntur
 * @property string $terapi_lainnya
 * @property string|null $edukasi
 *
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class PenilaianMedisRalanRehabMedik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_medis_ralan_rehab_medik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'fisioterapi', 'terapi_okupasi', 'terapi_wicara', 'terapi_akupuntur', 'terapi_lainnya'], 'required'],
            [['tanggal', 'fisioterapi', 'terapi_okupasi', 'terapi_wicara', 'terapi_akupuntur', 'terapi_lainnya'], 'safe'],
            [['anamnesis', 'kesadaran', 'nyeri', 'skala_nyeri', 'kepala', 'thoraks', 'abdomen', 'ekstremitas', 'columna', 'muskulos', 'resiko_jatuh', 'resiko_nutrisional', 'kebutuhan_fungsional'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['hubungan', 'keterangan_kepala', 'keterangan_thoraks', 'keterangan_abdomen', 'keterangan_ekstremitas', 'keterangan_columna', 'keterangan_muskulos'], 'string', 'max' => 30],
            [['keluhan_utama', 'rps'], 'string', 'max' => 2000],
            [['rpd', 'lainnya'], 'string', 'max' => 1000],
            [['alergi'], 'string', 'max' => 50],
            [['td'], 'string', 'max' => 8],
            [['nadi', 'suhu', 'rr', 'bb'], 'string', 'max' => 5],
            [['diagnosa_medis', 'diagnosa_fungsi', 'penunjang_lain', 'edukasi'], 'string', 'max' => 500],
            [['fisio', 'okupasi', 'wicara', 'akupuntur', 'tatalain'], 'string', 'max' => 100],
            [['frekuensi_terapi'], 'string', 'max' => 40],
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
            'keluhan_utama' => 'Keluhan Utama',
            'rps' => 'Rps',
            'rpd' => 'Rpd',
            'alergi' => 'Alergi',
            'kesadaran' => 'Kesadaran',
            'nyeri' => 'Nyeri',
            'skala_nyeri' => 'Skala Nyeri',
            'td' => 'Td',
            'nadi' => 'Nadi',
            'suhu' => 'Suhu',
            'rr' => 'Rr',
            'bb' => 'Bb',
            'kepala' => 'Kepala',
            'keterangan_kepala' => 'Keterangan Kepala',
            'thoraks' => 'Thoraks',
            'keterangan_thoraks' => 'Keterangan Thoraks',
            'abdomen' => 'Abdomen',
            'keterangan_abdomen' => 'Keterangan Abdomen',
            'ekstremitas' => 'Ekstremitas',
            'keterangan_ekstremitas' => 'Keterangan Ekstremitas',
            'columna' => 'Columna',
            'keterangan_columna' => 'Keterangan Columna',
            'muskulos' => 'Muskulos',
            'keterangan_muskulos' => 'Keterangan Muskulos',
            'lainnya' => 'Lainnya',
            'resiko_jatuh' => 'Resiko Jatuh',
            'resiko_nutrisional' => 'Resiko Nutrisional',
            'kebutuhan_fungsional' => 'Kebutuhan Fungsional',
            'diagnosa_medis' => 'Diagnosa Medis',
            'diagnosa_fungsi' => 'Diagnosa Fungsi',
            'penunjang_lain' => 'Penunjang Lain',
            'fisio' => 'Fisio',
            'okupasi' => 'Okupasi',
            'wicara' => 'Wicara',
            'akupuntur' => 'Akupuntur',
            'tatalain' => 'Tatalain',
            'frekuensi_terapi' => 'Frekuensi Terapi',
            'fisioterapi' => 'Fisioterapi',
            'terapi_okupasi' => 'Terapi Okupasi',
            'terapi_wicara' => 'Terapi Wicara',
            'terapi_akupuntur' => 'Terapi Akupuntur',
            'terapi_lainnya' => 'Terapi Lainnya',
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
