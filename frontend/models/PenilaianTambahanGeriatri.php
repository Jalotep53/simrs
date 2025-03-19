<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_tambahan_geriatri".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $nik
 * @property string|null $asal_masuk
 * @property string|null $kondisi_masuk
 * @property string|null $keterangan_kondisi_masuk
 * @property string $anamnesis
 * @property string|null $diagnosa_medis
 * @property string|null $riwayat_immuno_telinga
 * @property string|null $riwayat_immuno_sinus
 * @property string|null $riwayat_immuno_antibiotik
 * @property string|null $riwayat_immuno_pneumonia
 * @property string|null $riwayat_immuno_abses
 * @property string|null $riwayat_immuno_sariawan
 * @property string|null $riwayat_immuno_memerlukan_antibiotik
 * @property string|null $riwayat_immuno_infeksi_dalam
 * @property string|null $riwayat_immuno_immunodefisiensi_primer
 * @property string|null $riwayat_immuno_jenis_kangker
 * @property string|null $riwayat_immuno_infeksi_oportunistik
 * @property string|null $pola_aktifitas_tidur
 * @property string|null $keterangan_pola_aktifitas_tidur
 * @property string|null $pola_aktifitas_obat_tidur
 * @property string|null $keterangan_pola_aktifitas_obat_tidur
 * @property string|null $pola_aktifitas_olahraga
 * @property string|null $keterangan_pola_aktifitas_olahraga
 * @property string|null $kualitas_hidup_mobilitas
 * @property string|null $kualitas_hidup_perawatan_diri
 * @property string|null $kualitas_hidup_aktifitas_seharihari
 * @property string|null $kualitas_hidup_rasa_nyeri
 * @property string|null $skala_nyeri
 *
 * @property Pegawai $nik0
 * @property RegPeriksa $noRawat
 */
class PenilaianTambahanGeriatri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_tambahan_geriatri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nik', 'anamnesis'], 'required'],
            [['tanggal'], 'safe'],
            [['asal_masuk', 'kondisi_masuk', 'anamnesis', 'riwayat_immuno_telinga', 'riwayat_immuno_sinus', 'riwayat_immuno_antibiotik', 'riwayat_immuno_pneumonia', 'riwayat_immuno_abses', 'riwayat_immuno_sariawan', 'riwayat_immuno_memerlukan_antibiotik', 'riwayat_immuno_infeksi_dalam', 'riwayat_immuno_immunodefisiensi_primer', 'riwayat_immuno_jenis_kangker', 'riwayat_immuno_infeksi_oportunistik', 'pola_aktifitas_tidur', 'pola_aktifitas_obat_tidur', 'pola_aktifitas_olahraga', 'kualitas_hidup_mobilitas', 'kualitas_hidup_perawatan_diri', 'kualitas_hidup_aktifitas_seharihari', 'kualitas_hidup_rasa_nyeri', 'skala_nyeri'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['nik'], 'string', 'max' => 20],
            [['keterangan_kondisi_masuk', 'keterangan_pola_aktifitas_tidur', 'keterangan_pola_aktifitas_obat_tidur', 'keterangan_pola_aktifitas_olahraga'], 'string', 'max' => 50],
            [['diagnosa_medis'], 'string', 'max' => 100],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nik'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nik' => 'nik']],
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
            'nik' => 'Nik',
            'asal_masuk' => 'Asal Masuk',
            'kondisi_masuk' => 'Kondisi Masuk',
            'keterangan_kondisi_masuk' => 'Keterangan Kondisi Masuk',
            'anamnesis' => 'Anamnesis',
            'diagnosa_medis' => 'Diagnosa Medis',
            'riwayat_immuno_telinga' => 'Riwayat Immuno Telinga',
            'riwayat_immuno_sinus' => 'Riwayat Immuno Sinus',
            'riwayat_immuno_antibiotik' => 'Riwayat Immuno Antibiotik',
            'riwayat_immuno_pneumonia' => 'Riwayat Immuno Pneumonia',
            'riwayat_immuno_abses' => 'Riwayat Immuno Abses',
            'riwayat_immuno_sariawan' => 'Riwayat Immuno Sariawan',
            'riwayat_immuno_memerlukan_antibiotik' => 'Riwayat Immuno Memerlukan Antibiotik',
            'riwayat_immuno_infeksi_dalam' => 'Riwayat Immuno Infeksi Dalam',
            'riwayat_immuno_immunodefisiensi_primer' => 'Riwayat Immuno Immunodefisiensi Primer',
            'riwayat_immuno_jenis_kangker' => 'Riwayat Immuno Jenis Kangker',
            'riwayat_immuno_infeksi_oportunistik' => 'Riwayat Immuno Infeksi Oportunistik',
            'pola_aktifitas_tidur' => 'Pola Aktifitas Tidur',
            'keterangan_pola_aktifitas_tidur' => 'Keterangan Pola Aktifitas Tidur',
            'pola_aktifitas_obat_tidur' => 'Pola Aktifitas Obat Tidur',
            'keterangan_pola_aktifitas_obat_tidur' => 'Keterangan Pola Aktifitas Obat Tidur',
            'pola_aktifitas_olahraga' => 'Pola Aktifitas Olahraga',
            'keterangan_pola_aktifitas_olahraga' => 'Keterangan Pola Aktifitas Olahraga',
            'kualitas_hidup_mobilitas' => 'Kualitas Hidup Mobilitas',
            'kualitas_hidup_perawatan_diri' => 'Kualitas Hidup Perawatan Diri',
            'kualitas_hidup_aktifitas_seharihari' => 'Kualitas Hidup Aktifitas Seharihari',
            'kualitas_hidup_rasa_nyeri' => 'Kualitas Hidup Rasa Nyeri',
            'skala_nyeri' => 'Skala Nyeri',
        ];
    }

    /**
     * Gets query for [[Nik0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNik0()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nik']);
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
