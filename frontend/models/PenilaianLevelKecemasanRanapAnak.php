<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_level_kecemasan_ranap_anak".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property int|null $cemas
 * @property int|null $firasat_buruk
 * @property int|null $takut_pikiran_sendiri
 * @property int|null $mudah_tersinggung
 * @property int|null $merasa_tegang
 * @property int|null $lesu
 * @property int|null $tak_bisa_istirahat_tenang
 * @property int|null $mudah_terkejut
 * @property int|null $mudah_menangis
 * @property int|null $gemetar
 * @property int|null $gelisah
 * @property int|null $takut_pada_gelap
 * @property int|null $takut_pada_orangasing
 * @property int|null $takut_pada_kerumunan_banyak_orang
 * @property int|null $takut_pada_binatang_besar
 * @property int|null $takut_pada_keramaian_lalu_lintas
 * @property int|null $takut_ditinggal_sendiri
 * @property int|null $sulit_tidur
 * @property int|null $terbangun_malam_hari
 * @property int|null $tidur_tidak_nyeyak
 * @property int|null $mimpi_buruk
 * @property int|null $bangun_dengan_lesu
 * @property int|null $banyak_mengalami_mimpi
 * @property int|null $mimpi_menakutkan
 * @property int|null $sulit_konsentrasi
 * @property int|null $daya_ingat_buruk
 * @property int|null $hilangnya_minat
 * @property int|null $berkurangnya_kesenangan_pada_hobi
 * @property int|null $sedih
 * @property int|null $bangun_dini_hari
 * @property int|null $perasaan_berubah
 * @property int|null $sakit_nyeri_di_otot
 * @property int|null $kaku
 * @property int|null $kedutan_otot
 * @property int|null $gigi_gemerutuk
 * @property int|null $suara_tidak_stabil
 * @property int|null $tinnitus
 * @property int|null $penglihatan_kabur
 * @property int|null $muka_merah_gejala_somatic
 * @property int|null $merasa_lemah
 * @property int|null $perasaan_ditusuk
 * @property int|null $takhikardia
 * @property int|null $berdebar
 * @property int|null $nyeri_di_dada
 * @property int|null $denyut_nadi_mengeras
 * @property int|null $perasaan_lesu
 * @property int|null $detak_jantung_menghilang
 * @property int|null $merasa_tertekan
 * @property int|null $perasaan_tercekik
 * @property int|null $sering_menarik_napas
 * @property int|null $napas_pendek
 * @property int|null $bulu_berdiri
 * @property int|null $sulit_menelan
 * @property int|null $perut_melilit
 * @property int|null $ganguan_pencernaan
 * @property int|null $rasa_kembung
 * @property int|null $nyeri_makan
 * @property int|null $terbakar_perut
 * @property int|null $sukar_bab
 * @property int|null $muntah
 * @property int|null $bab_lembek
 * @property int|null $kehilangan_bb
 * @property int|null $mual
 * @property int|null $sering_bak
 * @property int|null $tidak_bisa_menahan_kencing
 * @property int|null $menjadi_dingin
 * @property int|null $manorrhagia
 * @property int|null $amenorrhoea
 * @property int|null $ejakulasi_praecocks
 * @property int|null $ereksi_hilang
 * @property int|null $impotensi
 * @property int|null $mulut_kering
 * @property int|null $muka_merah_gejala_otonom
 * @property int|null $mudah_berkeringat
 * @property int|null $bulu_berdiri_gejala_otonom
 * @property int|null $sakit_kepala
 * @property int|null $gelisah_wawancara
 * @property int|null $napas_pendek_wawancara
 * @property int|null $jari_gemetar
 * @property int|null $kerut_kening
 * @property int|null $muka_tegang
 * @property int|null $tonus_meningkat
 * @property int|null $tidak_tenang
 * @property int|null $muka_merah_wawancara
 * @property int|null $total_skor
 * @property string|null $keterangan_skor
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PenilaianLevelKecemasanRanapAnak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_level_kecemasan_ranap_anak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['cemas', 'firasat_buruk', 'takut_pikiran_sendiri', 'mudah_tersinggung', 'merasa_tegang', 'lesu', 'tak_bisa_istirahat_tenang', 'mudah_terkejut', 'mudah_menangis', 'gemetar', 'gelisah', 'takut_pada_gelap', 'takut_pada_orangasing', 'takut_pada_kerumunan_banyak_orang', 'takut_pada_binatang_besar', 'takut_pada_keramaian_lalu_lintas', 'takut_ditinggal_sendiri', 'sulit_tidur', 'terbangun_malam_hari', 'tidur_tidak_nyeyak', 'mimpi_buruk', 'bangun_dengan_lesu', 'banyak_mengalami_mimpi', 'mimpi_menakutkan', 'sulit_konsentrasi', 'daya_ingat_buruk', 'hilangnya_minat', 'berkurangnya_kesenangan_pada_hobi', 'sedih', 'bangun_dini_hari', 'perasaan_berubah', 'sakit_nyeri_di_otot', 'kaku', 'kedutan_otot', 'gigi_gemerutuk', 'suara_tidak_stabil', 'tinnitus', 'penglihatan_kabur', 'muka_merah_gejala_somatic', 'merasa_lemah', 'perasaan_ditusuk', 'takhikardia', 'berdebar', 'nyeri_di_dada', 'denyut_nadi_mengeras', 'perasaan_lesu', 'detak_jantung_menghilang', 'merasa_tertekan', 'perasaan_tercekik', 'sering_menarik_napas', 'napas_pendek', 'bulu_berdiri', 'sulit_menelan', 'perut_melilit', 'ganguan_pencernaan', 'rasa_kembung', 'nyeri_makan', 'terbakar_perut', 'sukar_bab', 'muntah', 'bab_lembek', 'kehilangan_bb', 'mual', 'sering_bak', 'tidak_bisa_menahan_kencing', 'menjadi_dingin', 'manorrhagia', 'amenorrhoea', 'ejakulasi_praecocks', 'ereksi_hilang', 'impotensi', 'mulut_kering', 'muka_merah_gejala_otonom', 'mudah_berkeringat', 'bulu_berdiri_gejala_otonom', 'sakit_kepala', 'gelisah_wawancara', 'napas_pendek_wawancara', 'jari_gemetar', 'kerut_kening', 'muka_tegang', 'tonus_meningkat', 'tidak_tenang', 'muka_merah_wawancara', 'total_skor'], 'integer'],
            [['keterangan_skor'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['nip'], 'string', 'max' => 20],
            [['no_rawat', 'tanggal'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal']],
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
            'cemas' => 'Cemas',
            'firasat_buruk' => 'Firasat Buruk',
            'takut_pikiran_sendiri' => 'Takut Pikiran Sendiri',
            'mudah_tersinggung' => 'Mudah Tersinggung',
            'merasa_tegang' => 'Merasa Tegang',
            'lesu' => 'Lesu',
            'tak_bisa_istirahat_tenang' => 'Tak Bisa Istirahat Tenang',
            'mudah_terkejut' => 'Mudah Terkejut',
            'mudah_menangis' => 'Mudah Menangis',
            'gemetar' => 'Gemetar',
            'gelisah' => 'Gelisah',
            'takut_pada_gelap' => 'Takut Pada Gelap',
            'takut_pada_orangasing' => 'Takut Pada Orangasing',
            'takut_pada_kerumunan_banyak_orang' => 'Takut Pada Kerumunan Banyak Orang',
            'takut_pada_binatang_besar' => 'Takut Pada Binatang Besar',
            'takut_pada_keramaian_lalu_lintas' => 'Takut Pada Keramaian Lalu Lintas',
            'takut_ditinggal_sendiri' => 'Takut Ditinggal Sendiri',
            'sulit_tidur' => 'Sulit Tidur',
            'terbangun_malam_hari' => 'Terbangun Malam Hari',
            'tidur_tidak_nyeyak' => 'Tidur Tidak Nyeyak',
            'mimpi_buruk' => 'Mimpi Buruk',
            'bangun_dengan_lesu' => 'Bangun Dengan Lesu',
            'banyak_mengalami_mimpi' => 'Banyak Mengalami Mimpi',
            'mimpi_menakutkan' => 'Mimpi Menakutkan',
            'sulit_konsentrasi' => 'Sulit Konsentrasi',
            'daya_ingat_buruk' => 'Daya Ingat Buruk',
            'hilangnya_minat' => 'Hilangnya Minat',
            'berkurangnya_kesenangan_pada_hobi' => 'Berkurangnya Kesenangan Pada Hobi',
            'sedih' => 'Sedih',
            'bangun_dini_hari' => 'Bangun Dini Hari',
            'perasaan_berubah' => 'Perasaan Berubah',
            'sakit_nyeri_di_otot' => 'Sakit Nyeri Di Otot',
            'kaku' => 'Kaku',
            'kedutan_otot' => 'Kedutan Otot',
            'gigi_gemerutuk' => 'Gigi Gemerutuk',
            'suara_tidak_stabil' => 'Suara Tidak Stabil',
            'tinnitus' => 'Tinnitus',
            'penglihatan_kabur' => 'Penglihatan Kabur',
            'muka_merah_gejala_somatic' => 'Muka Merah Gejala Somatic',
            'merasa_lemah' => 'Merasa Lemah',
            'perasaan_ditusuk' => 'Perasaan Ditusuk',
            'takhikardia' => 'Takhikardia',
            'berdebar' => 'Berdebar',
            'nyeri_di_dada' => 'Nyeri Di Dada',
            'denyut_nadi_mengeras' => 'Denyut Nadi Mengeras',
            'perasaan_lesu' => 'Perasaan Lesu',
            'detak_jantung_menghilang' => 'Detak Jantung Menghilang',
            'merasa_tertekan' => 'Merasa Tertekan',
            'perasaan_tercekik' => 'Perasaan Tercekik',
            'sering_menarik_napas' => 'Sering Menarik Napas',
            'napas_pendek' => 'Napas Pendek',
            'bulu_berdiri' => 'Bulu Berdiri',
            'sulit_menelan' => 'Sulit Menelan',
            'perut_melilit' => 'Perut Melilit',
            'ganguan_pencernaan' => 'Ganguan Pencernaan',
            'rasa_kembung' => 'Rasa Kembung',
            'nyeri_makan' => 'Nyeri Makan',
            'terbakar_perut' => 'Terbakar Perut',
            'sukar_bab' => 'Sukar Bab',
            'muntah' => 'Muntah',
            'bab_lembek' => 'Bab Lembek',
            'kehilangan_bb' => 'Kehilangan Bb',
            'mual' => 'Mual',
            'sering_bak' => 'Sering Bak',
            'tidak_bisa_menahan_kencing' => 'Tidak Bisa Menahan Kencing',
            'menjadi_dingin' => 'Menjadi Dingin',
            'manorrhagia' => 'Manorrhagia',
            'amenorrhoea' => 'Amenorrhoea',
            'ejakulasi_praecocks' => 'Ejakulasi Praecocks',
            'ereksi_hilang' => 'Ereksi Hilang',
            'impotensi' => 'Impotensi',
            'mulut_kering' => 'Mulut Kering',
            'muka_merah_gejala_otonom' => 'Muka Merah Gejala Otonom',
            'mudah_berkeringat' => 'Mudah Berkeringat',
            'bulu_berdiri_gejala_otonom' => 'Bulu Berdiri Gejala Otonom',
            'sakit_kepala' => 'Sakit Kepala',
            'gelisah_wawancara' => 'Gelisah Wawancara',
            'napas_pendek_wawancara' => 'Napas Pendek Wawancara',
            'jari_gemetar' => 'Jari Gemetar',
            'kerut_kening' => 'Kerut Kening',
            'muka_tegang' => 'Muka Tegang',
            'tonus_meningkat' => 'Tonus Meningkat',
            'tidak_tenang' => 'Tidak Tenang',
            'muka_merah_wawancara' => 'Muka Merah Wawancara',
            'total_skor' => 'Total Skor',
            'keterangan_skor' => 'Keterangan Skor',
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
