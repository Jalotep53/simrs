<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sisrute_rujukan_keluar".
 *
 * @property string $no_rawat
 * @property string $no_rujuk
 * @property string $no_rkm_medis
 * @property string $nm_pasien
 * @property string $no_ktp
 * @property string $no_peserta
 * @property string $jk
 * @property string $tgl_lahir
 * @property string $tmp_lahir
 * @property string $alamat
 * @property string $no_tlp
 * @property string $jns_rujukan
 * @property string $tgl_rujuk
 * @property string $kd_faskes_tujuan
 * @property string $nm_faskes_tujuan
 * @property string $kd_alasan
 * @property string $alasan_rujuk
 * @property string $alasan_lainnya
 * @property string $kd_diagnosa
 * @property string $diagnosa_rujuk
 * @property string $nik_dokter
 * @property string $dokter_perujuk
 * @property string $nik_petugas
 * @property string $petugas_entry
 * @property string $anamnesis_pemeriksaan
 * @property string $kesadaran
 * @property string $tekanan_darah
 * @property string $nadi
 * @property string $suhu
 * @property string $respirasi
 * @property string $keadaan_umum
 * @property string $tingkat_nyeri
 * @property string $alergi
 * @property string $laboratorium
 * @property string $radiologi
 * @property string $terapitindakan
 *
 * @property RegPeriksa $noRawat
 */
class SisruteRujukanKeluar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sisrute_rujukan_keluar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'no_rujuk', 'no_rkm_medis', 'nm_pasien', 'no_ktp', 'no_peserta', 'jk', 'tgl_lahir', 'tmp_lahir', 'alamat', 'no_tlp', 'jns_rujukan', 'tgl_rujuk', 'kd_faskes_tujuan', 'nm_faskes_tujuan', 'kd_alasan', 'alasan_rujuk', 'alasan_lainnya', 'kd_diagnosa', 'diagnosa_rujuk', 'nik_dokter', 'dokter_perujuk', 'nik_petugas', 'petugas_entry', 'anamnesis_pemeriksaan', 'kesadaran', 'tekanan_darah', 'nadi', 'suhu', 'respirasi', 'keadaan_umum', 'tingkat_nyeri', 'alergi', 'laboratorium', 'radiologi', 'terapitindakan'], 'required'],
            [['jk', 'jns_rujukan', 'diagnosa_rujuk', 'anamnesis_pemeriksaan', 'kesadaran', 'keadaan_umum', 'tingkat_nyeri', 'laboratorium', 'radiologi', 'terapitindakan'], 'string'],
            [['tgl_lahir', 'tgl_rujuk'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['no_rujuk', 'nm_pasien', 'no_tlp'], 'string', 'max' => 40],
            [['no_rkm_medis', 'tmp_lahir'], 'string', 'max' => 15],
            [['no_ktp', 'nik_dokter', 'nik_petugas'], 'string', 'max' => 20],
            [['no_peserta'], 'string', 'max' => 25],
            [['alamat', 'nm_faskes_tujuan'], 'string', 'max' => 200],
            [['kd_faskes_tujuan'], 'string', 'max' => 12],
            [['kd_alasan', 'suhu'], 'string', 'max' => 5],
            [['alasan_rujuk'], 'string', 'max' => 150],
            [['alasan_lainnya', 'dokter_perujuk', 'petugas_entry', 'alergi'], 'string', 'max' => 50],
            [['kd_diagnosa'], 'string', 'max' => 10],
            [['tekanan_darah'], 'string', 'max' => 7],
            [['nadi', 'respirasi'], 'string', 'max' => 3],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'no_rujuk' => 'No Rujuk',
            'no_rkm_medis' => 'No Rkm Medis',
            'nm_pasien' => 'Nm Pasien',
            'no_ktp' => 'No Ktp',
            'no_peserta' => 'No Peserta',
            'jk' => 'Jk',
            'tgl_lahir' => 'Tgl Lahir',
            'tmp_lahir' => 'Tmp Lahir',
            'alamat' => 'Alamat',
            'no_tlp' => 'No Tlp',
            'jns_rujukan' => 'Jns Rujukan',
            'tgl_rujuk' => 'Tgl Rujuk',
            'kd_faskes_tujuan' => 'Kd Faskes Tujuan',
            'nm_faskes_tujuan' => 'Nm Faskes Tujuan',
            'kd_alasan' => 'Kd Alasan',
            'alasan_rujuk' => 'Alasan Rujuk',
            'alasan_lainnya' => 'Alasan Lainnya',
            'kd_diagnosa' => 'Kd Diagnosa',
            'diagnosa_rujuk' => 'Diagnosa Rujuk',
            'nik_dokter' => 'Nik Dokter',
            'dokter_perujuk' => 'Dokter Perujuk',
            'nik_petugas' => 'Nik Petugas',
            'petugas_entry' => 'Petugas Entry',
            'anamnesis_pemeriksaan' => 'Anamnesis Pemeriksaan',
            'kesadaran' => 'Kesadaran',
            'tekanan_darah' => 'Tekanan Darah',
            'nadi' => 'Nadi',
            'suhu' => 'Suhu',
            'respirasi' => 'Respirasi',
            'keadaan_umum' => 'Keadaan Umum',
            'tingkat_nyeri' => 'Tingkat Nyeri',
            'alergi' => 'Alergi',
            'laboratorium' => 'Laboratorium',
            'radiologi' => 'Radiologi',
            'terapitindakan' => 'Terapitindakan',
        ];
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
