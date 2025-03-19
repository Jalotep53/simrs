<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_pre_induksi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kd_dokter
 * @property string|null $tensi
 * @property string|null $nadi
 * @property string|null $rr
 * @property string|null $suhu
 * @property string|null $ekg
 * @property string|null $lain_lain
 * @property string|null $asesmen
 * @property string|null $perencanaan
 * @property string|null $infus_perifier
 * @property string|null $cvc
 * @property string|null $posisi
 * @property string|null $premedikasi
 * @property string|null $premedikasi_keterangan
 * @property string|null $induksi
 * @property string|null $induksi_keterangan
 * @property string|null $face_mask_no
 * @property string|null $nasopharing_no
 * @property string|null $ett_no
 * @property string|null $ett_jenis
 * @property string|null $ett_viksasi
 * @property string|null $lma_no
 * @property string|null $lma_jenis
 * @property string|null $tracheostomi
 * @property string|null $bronchoscopi_fiberoptik
 * @property string|null $glidescopi
 * @property string|null $lain_lain_tatalaksana
 * @property string|null $intubasi_sesudah_tidur
 * @property string|null $intubasi_oral
 * @property string|null $intubasi_tracheostomi
 * @property string|null $intubasi_keterangan
 * @property string|null $sulit_ventilasi
 * @property string|null $sulit_intubasi
 * @property string|null $ventilasi
 * @property string|null $teknik_regional_jenis
 * @property string|null $teknik_regional_lokasi
 * @property string|null $teknik_regional_jenis_jarum
 * @property string|null $teknik_regional_kateter
 * @property string|null $teknik_regional_kateter_viksasi
 * @property string|null $teknik_regional_obat_obatan
 * @property string|null $teknik_regional_komplikasi
 * @property string|null $teknik_regional_hasil
 *
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class PenilaianPreInduksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_pre_induksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter'], 'required'],
            [['tanggal'], 'safe'],
            [['asesmen', 'posisi', 'premedikasi', 'induksi', 'intubasi_sesudah_tidur', 'intubasi_oral', 'intubasi_tracheostomi', 'teknik_regional_kateter'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter', 'face_mask_no', 'nasopharing_no', 'ett_no', 'ett_jenis', 'lma_no', 'lma_jenis'], 'string', 'max' => 20],
            [['tensi'], 'string', 'max' => 8],
            [['nadi', 'rr', 'suhu'], 'string', 'max' => 5],
            [['ekg', 'lain_lain', 'premedikasi_keterangan'], 'string', 'max' => 50],
            [['perencanaan', 'infus_perifier'], 'string', 'max' => 300],
            [['cvc', 'induksi_keterangan'], 'string', 'max' => 70],
            [['ett_viksasi'], 'string', 'max' => 25],
            [['tracheostomi', 'bronchoscopi_fiberoptik', 'glidescopi'], 'string', 'max' => 60],
            [['lain_lain_tatalaksana', 'sulit_ventilasi', 'sulit_intubasi', 'ventilasi', 'teknik_regional_jenis', 'teknik_regional_hasil'], 'string', 'max' => 100],
            [['intubasi_keterangan', 'teknik_regional_komplikasi'], 'string', 'max' => 200],
            [['teknik_regional_lokasi', 'teknik_regional_kateter_viksasi'], 'string', 'max' => 40],
            [['teknik_regional_jenis_jarum'], 'string', 'max' => 30],
            [['teknik_regional_obat_obatan'], 'string', 'max' => 400],
            [['no_rawat', 'tanggal'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal']],
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
            'tensi' => 'Tensi',
            'nadi' => 'Nadi',
            'rr' => 'Rr',
            'suhu' => 'Suhu',
            'ekg' => 'Ekg',
            'lain_lain' => 'Lain Lain',
            'asesmen' => 'Asesmen',
            'perencanaan' => 'Perencanaan',
            'infus_perifier' => 'Infus Perifier',
            'cvc' => 'Cvc',
            'posisi' => 'Posisi',
            'premedikasi' => 'Premedikasi',
            'premedikasi_keterangan' => 'Premedikasi Keterangan',
            'induksi' => 'Induksi',
            'induksi_keterangan' => 'Induksi Keterangan',
            'face_mask_no' => 'Face Mask No',
            'nasopharing_no' => 'Nasopharing No',
            'ett_no' => 'Ett No',
            'ett_jenis' => 'Ett Jenis',
            'ett_viksasi' => 'Ett Viksasi',
            'lma_no' => 'Lma No',
            'lma_jenis' => 'Lma Jenis',
            'tracheostomi' => 'Tracheostomi',
            'bronchoscopi_fiberoptik' => 'Bronchoscopi Fiberoptik',
            'glidescopi' => 'Glidescopi',
            'lain_lain_tatalaksana' => 'Lain Lain Tatalaksana',
            'intubasi_sesudah_tidur' => 'Intubasi Sesudah Tidur',
            'intubasi_oral' => 'Intubasi Oral',
            'intubasi_tracheostomi' => 'Intubasi Tracheostomi',
            'intubasi_keterangan' => 'Intubasi Keterangan',
            'sulit_ventilasi' => 'Sulit Ventilasi',
            'sulit_intubasi' => 'Sulit Intubasi',
            'ventilasi' => 'Ventilasi',
            'teknik_regional_jenis' => 'Teknik Regional Jenis',
            'teknik_regional_lokasi' => 'Teknik Regional Lokasi',
            'teknik_regional_jenis_jarum' => 'Teknik Regional Jenis Jarum',
            'teknik_regional_kateter' => 'Teknik Regional Kateter',
            'teknik_regional_kateter_viksasi' => 'Teknik Regional Kateter Viksasi',
            'teknik_regional_obat_obatan' => 'Teknik Regional Obat Obatan',
            'teknik_regional_komplikasi' => 'Teknik Regional Komplikasi',
            'teknik_regional_hasil' => 'Teknik Regional Hasil',
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
