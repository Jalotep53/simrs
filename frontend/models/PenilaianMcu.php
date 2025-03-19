<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_mcu".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kd_dokter
 * @property string $informasi
 * @property string $rps
 * @property string $rpk
 * @property string $rpd
 * @property string $alergi
 * @property string $keadaan
 * @property string $kesadaran
 * @property string $td
 * @property string $nadi
 * @property string $rr
 * @property string $tb
 * @property string $bb
 * @property string $suhu
 * @property string $submandibula
 * @property string $axilla
 * @property string $supraklavikula
 * @property string $leher
 * @property string $inguinal
 * @property string $oedema
 * @property string $sinus_frontalis
 * @property string $sinus_maxilaris
 * @property string $palpebra
 * @property string $sklera
 * @property string $cornea
 * @property string $buta_warna
 * @property string $konjungtiva
 * @property string $lensa
 * @property string $pupil
 * @property string $lubang_telinga
 * @property string $daun_telinga
 * @property string $selaput_pendengaran
 * @property string $proc_mastoideus
 * @property string $septum_nasi
 * @property string $lubang_hidung
 * @property string $bibir
 * @property string $caries
 * @property string $lidah
 * @property string $faring
 * @property string $tonsil
 * @property string $kelenjar_limfe
 * @property string $kelenjar_gondok
 * @property string $gerakan_dada
 * @property string $vocal_femitus
 * @property string $perkusi_dada
 * @property string $bunyi_napas
 * @property string $bunyi_tambahan
 * @property string $ictus_cordis
 * @property string $bunyi_jantung
 * @property string $batas
 * @property string $inspeksi
 * @property string $palpasi
 * @property string $hepar
 * @property string $perkusi_abdomen
 * @property string $auskultasi
 * @property string $limpa
 * @property string $costovertebral
 * @property string $kondisi_kulit
 * @property string $ekstrimitas_atas
 * @property string $ekstrimitas_atas_ket
 * @property string $ekstrimitas_bawah
 * @property string $ekstrimitas_bawah_ket
 * @property string $laborat
 * @property string $radiologi
 * @property string $ekg
 * @property string $spirometri
 * @property string $audiometri
 * @property string $treadmill
 * @property string $lainlain
 * @property string $merokok
 * @property string $alkohol
 * @property string $kesimpulan
 * @property string $anjuran
 *
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class PenilaianMcu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_mcu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'informasi', 'rps', 'rpk', 'rpd', 'keadaan', 'kesadaran', 'rr', 'submandibula', 'axilla', 'supraklavikula', 'leher', 'inguinal', 'oedema', 'sinus_frontalis', 'sinus_maxilaris', 'palpebra', 'sklera', 'cornea', 'buta_warna', 'konjungtiva', 'lensa', 'pupil', 'lubang_telinga', 'daun_telinga', 'selaput_pendengaran', 'proc_mastoideus', 'septum_nasi', 'lubang_hidung', 'bibir', 'caries', 'lidah', 'faring', 'tonsil', 'kelenjar_limfe', 'kelenjar_gondok', 'gerakan_dada', 'vocal_femitus', 'perkusi_dada', 'bunyi_napas', 'bunyi_tambahan', 'ictus_cordis', 'bunyi_jantung', 'batas', 'inspeksi', 'palpasi', 'hepar', 'perkusi_abdomen', 'auskultasi', 'limpa', 'costovertebral', 'kondisi_kulit', 'ekstrimitas_atas', 'ekstrimitas_atas_ket', 'ekstrimitas_bawah', 'ekstrimitas_bawah_ket', 'laborat', 'radiologi', 'ekg', 'spirometri', 'audiometri', 'treadmill', 'lainlain', 'merokok', 'alkohol', 'kesimpulan', 'anjuran'], 'required'],
            [['tanggal'], 'safe'],
            [['informasi', 'keadaan', 'kesadaran', 'submandibula', 'axilla', 'supraklavikula', 'leher', 'inguinal', 'oedema', 'sinus_frontalis', 'sinus_maxilaris', 'palpebra', 'sklera', 'cornea', 'buta_warna', 'konjungtiva', 'lensa', 'pupil', 'lubang_telinga', 'daun_telinga', 'selaput_pendengaran', 'proc_mastoideus', 'septum_nasi', 'lubang_hidung', 'bibir', 'caries', 'lidah', 'faring', 'tonsil', 'kelenjar_limfe', 'kelenjar_gondok', 'gerakan_dada', 'vocal_femitus', 'perkusi_dada', 'bunyi_napas', 'bunyi_tambahan', 'ictus_cordis', 'bunyi_jantung', 'batas', 'inspeksi', 'palpasi', 'hepar', 'perkusi_abdomen', 'auskultasi', 'limpa', 'costovertebral', 'kondisi_kulit', 'ekstrimitas_atas', 'ekstrimitas_bawah', 'laborat', 'radiologi', 'ekg', 'spirometri', 'audiometri', 'treadmill', 'lainlain', 'kesimpulan', 'anjuran'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['rps'], 'string', 'max' => 2000],
            [['rpk', 'rpd'], 'string', 'max' => 1000],
            [['alergi'], 'string', 'max' => 150],
            [['td'], 'string', 'max' => 8],
            [['nadi', 'rr', 'tb', 'bb', 'suhu'], 'string', 'max' => 5],
            [['ekstrimitas_atas_ket', 'ekstrimitas_bawah_ket'], 'string', 'max' => 50],
            [['merokok', 'alkohol'], 'string', 'max' => 100],
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
            'informasi' => 'Informasi',
            'rps' => 'Rps',
            'rpk' => 'Rpk',
            'rpd' => 'Rpd',
            'alergi' => 'Alergi',
            'keadaan' => 'Keadaan',
            'kesadaran' => 'Kesadaran',
            'td' => 'Td',
            'nadi' => 'Nadi',
            'rr' => 'Rr',
            'tb' => 'Tb',
            'bb' => 'Bb',
            'suhu' => 'Suhu',
            'submandibula' => 'Submandibula',
            'axilla' => 'Axilla',
            'supraklavikula' => 'Supraklavikula',
            'leher' => 'Leher',
            'inguinal' => 'Inguinal',
            'oedema' => 'Oedema',
            'sinus_frontalis' => 'Sinus Frontalis',
            'sinus_maxilaris' => 'Sinus Maxilaris',
            'palpebra' => 'Palpebra',
            'sklera' => 'Sklera',
            'cornea' => 'Cornea',
            'buta_warna' => 'Buta Warna',
            'konjungtiva' => 'Konjungtiva',
            'lensa' => 'Lensa',
            'pupil' => 'Pupil',
            'lubang_telinga' => 'Lubang Telinga',
            'daun_telinga' => 'Daun Telinga',
            'selaput_pendengaran' => 'Selaput Pendengaran',
            'proc_mastoideus' => 'Proc Mastoideus',
            'septum_nasi' => 'Septum Nasi',
            'lubang_hidung' => 'Lubang Hidung',
            'bibir' => 'Bibir',
            'caries' => 'Caries',
            'lidah' => 'Lidah',
            'faring' => 'Faring',
            'tonsil' => 'Tonsil',
            'kelenjar_limfe' => 'Kelenjar Limfe',
            'kelenjar_gondok' => 'Kelenjar Gondok',
            'gerakan_dada' => 'Gerakan Dada',
            'vocal_femitus' => 'Vocal Femitus',
            'perkusi_dada' => 'Perkusi Dada',
            'bunyi_napas' => 'Bunyi Napas',
            'bunyi_tambahan' => 'Bunyi Tambahan',
            'ictus_cordis' => 'Ictus Cordis',
            'bunyi_jantung' => 'Bunyi Jantung',
            'batas' => 'Batas',
            'inspeksi' => 'Inspeksi',
            'palpasi' => 'Palpasi',
            'hepar' => 'Hepar',
            'perkusi_abdomen' => 'Perkusi Abdomen',
            'auskultasi' => 'Auskultasi',
            'limpa' => 'Limpa',
            'costovertebral' => 'Costovertebral',
            'kondisi_kulit' => 'Kondisi Kulit',
            'ekstrimitas_atas' => 'Ekstrimitas Atas',
            'ekstrimitas_atas_ket' => 'Ekstrimitas Atas Ket',
            'ekstrimitas_bawah' => 'Ekstrimitas Bawah',
            'ekstrimitas_bawah_ket' => 'Ekstrimitas Bawah Ket',
            'laborat' => 'Laborat',
            'radiologi' => 'Radiologi',
            'ekg' => 'Ekg',
            'spirometri' => 'Spirometri',
            'audiometri' => 'Audiometri',
            'treadmill' => 'Treadmill',
            'lainlain' => 'Lainlain',
            'merokok' => 'Merokok',
            'alkohol' => 'Alkohol',
            'kesimpulan' => 'Kesimpulan',
            'anjuran' => 'Anjuran',
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
