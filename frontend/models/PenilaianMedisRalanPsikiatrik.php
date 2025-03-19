<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_medis_ralan_psikiatrik".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kd_dokter
 * @property string $anamnesis
 * @property string $hubungan
 * @property string $keluhan_utama
 * @property string $rps
 * @property string $rpd
 * @property string $rpk
 * @property string $rpo
 * @property string $alergi
 * @property string $penampilan
 * @property string $pembicaraan
 * @property string $psikomotor
 * @property string $sikap
 * @property string $mood
 * @property string $fungsi_kognitif
 * @property string $gangguan_persepsi
 * @property string $proses_pikir
 * @property string $pengendalian_impuls
 * @property string $tilikan
 * @property string $rta
 * @property string $keadaan
 * @property string $gcs
 * @property string $kesadaran
 * @property string $td
 * @property string $nadi
 * @property string $rr
 * @property string $suhu
 * @property string $spo
 * @property string $bb
 * @property string $tb
 * @property string $kepala
 * @property string $gigi
 * @property string $tht
 * @property string $thoraks
 * @property string $abdomen
 * @property string $genital
 * @property string $ekstremitas
 * @property string $kulit
 * @property string $ket_fisik
 * @property string $penunjang
 * @property string $diagnosis
 * @property string $tata
 * @property string $konsulrujuk
 *
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class PenilaianMedisRalanPsikiatrik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_medis_ralan_psikiatrik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'anamnesis', 'hubungan', 'rps', 'rpk', 'rpo', 'alergi', 'penampilan', 'pembicaraan', 'psikomotor', 'sikap', 'mood', 'fungsi_kognitif', 'gangguan_persepsi', 'proses_pikir', 'pengendalian_impuls', 'tilikan', 'rta', 'keadaan', 'gcs', 'kesadaran', 'rr', 'spo', 'kepala', 'gigi', 'tht', 'thoraks', 'abdomen', 'genital', 'ekstremitas', 'kulit', 'ket_fisik', 'penunjang', 'diagnosis', 'tata', 'konsulrujuk'], 'required'],
            [['tanggal'], 'safe'],
            [['anamnesis', 'keadaan', 'kesadaran', 'kepala', 'gigi', 'tht', 'thoraks', 'abdomen', 'genital', 'ekstremitas', 'kulit'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['hubungan'], 'string', 'max' => 30],
            [['keluhan_utama', 'rps'], 'string', 'max' => 2000],
            [['rpd', 'rpk', 'rpo', 'ket_fisik', 'penunjang', 'tata'], 'string', 'max' => 1000],
            [['alergi'], 'string', 'max' => 50],
            [['penampilan', 'pembicaraan', 'psikomotor', 'sikap', 'mood', 'fungsi_kognitif', 'gangguan_persepsi', 'proses_pikir', 'pengendalian_impuls', 'tilikan', 'rta'], 'string', 'max' => 200],
            [['gcs'], 'string', 'max' => 10],
            [['td'], 'string', 'max' => 8],
            [['nadi', 'rr', 'suhu', 'spo', 'bb', 'tb'], 'string', 'max' => 5],
            [['diagnosis'], 'string', 'max' => 300],
            [['konsulrujuk'], 'string', 'max' => 500],
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
            'rpk' => 'Rpk',
            'rpo' => 'Rpo',
            'alergi' => 'Alergi',
            'penampilan' => 'Penampilan',
            'pembicaraan' => 'Pembicaraan',
            'psikomotor' => 'Psikomotor',
            'sikap' => 'Sikap',
            'mood' => 'Mood',
            'fungsi_kognitif' => 'Fungsi Kognitif',
            'gangguan_persepsi' => 'Gangguan Persepsi',
            'proses_pikir' => 'Proses Pikir',
            'pengendalian_impuls' => 'Pengendalian Impuls',
            'tilikan' => 'Tilikan',
            'rta' => 'Rta',
            'keadaan' => 'Keadaan',
            'gcs' => 'Gcs',
            'kesadaran' => 'Kesadaran',
            'td' => 'Td',
            'nadi' => 'Nadi',
            'rr' => 'Rr',
            'suhu' => 'Suhu',
            'spo' => 'Spo',
            'bb' => 'Bb',
            'tb' => 'Tb',
            'kepala' => 'Kepala',
            'gigi' => 'Gigi',
            'tht' => 'Tht',
            'thoraks' => 'Thoraks',
            'abdomen' => 'Abdomen',
            'genital' => 'Genital',
            'ekstremitas' => 'Ekstremitas',
            'kulit' => 'Kulit',
            'ket_fisik' => 'Ket Fisik',
            'penunjang' => 'Penunjang',
            'diagnosis' => 'Diagnosis',
            'tata' => 'Tata',
            'konsulrujuk' => 'Konsulrujuk',
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
