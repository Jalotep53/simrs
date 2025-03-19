<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_medis_ralan_geriatri".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kd_dokter
 * @property string $anamnesis
 * @property string $hubungan
 * @property string $keluhan_utama
 * @property string $rps
 * @property string $rpd
 * @property string $rpo
 * @property string $alergi
 * @property string $tulang_belakang
 * @property string $td
 * @property string $nadi
 * @property string $suhu
 * @property string $rr
 * @property string $kondisi_umum
 * @property string $status_psikologis_gds
 * @property string $kondisi_sosial
 * @property string $status_kognitif_mmse
 * @property string $kepala
 * @property string $keterangan_kepala
 * @property string $thoraks
 * @property string $keterangan_thoraks
 * @property string $abdomen
 * @property string $keterangan_abdomen
 * @property string $ekstremitas
 * @property string $keterangan_ekstremitas
 * @property string $Integument_kebersihan
 * @property string $Integument_warna
 * @property string $Integument_kelembaban
 * @property string $Integument_gangguan_kulit
 * @property string $status_fungsional
 * @property string $skrining_jatuh
 * @property string $status_nutrisi
 * @property string $lainnya
 * @property string $lab
 * @property string $rad
 * @property string $pemeriksaan
 * @property string $diagnosis
 * @property string $diagnosis2
 * @property string $permasalahan
 * @property string $terapi
 * @property string $tindakan
 * @property string $edukasi
 *
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class PenilaianMedisRalanGeriatri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_medis_ralan_geriatri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'anamnesis', 'hubungan', 'rps', 'rpo', 'tulang_belakang', 'suhu', 'kondisi_umum', 'status_psikologis_gds', 'kondisi_sosial', 'status_kognitif_mmse', 'kepala', 'keterangan_kepala', 'thoraks', 'keterangan_thoraks', 'abdomen', 'keterangan_abdomen', 'ekstremitas', 'keterangan_ekstremitas', 'Integument_kebersihan', 'Integument_warna', 'Integument_kelembaban', 'Integument_gangguan_kulit', 'status_fungsional', 'skrining_jatuh', 'status_nutrisi', 'lainnya', 'lab', 'rad', 'pemeriksaan', 'diagnosis', 'diagnosis2', 'permasalahan', 'terapi', 'tindakan', 'edukasi'], 'required'],
            [['tanggal'], 'safe'],
            [['anamnesis', 'tulang_belakang', 'status_psikologis_gds', 'status_kognitif_mmse', 'kepala', 'thoraks', 'abdomen', 'ekstremitas', 'Integument_kebersihan', 'Integument_warna', 'Integument_kelembaban', 'Integument_gangguan_kulit', 'status_fungsional', 'skrining_jatuh', 'status_nutrisi'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['hubungan'], 'string', 'max' => 30],
            [['keluhan_utama', 'rps'], 'string', 'max' => 2000],
            [['rpd', 'rpo', 'kondisi_umum', 'lainnya'], 'string', 'max' => 1000],
            [['alergi'], 'string', 'max' => 50],
            [['td'], 'string', 'max' => 8],
            [['nadi', 'suhu', 'rr'], 'string', 'max' => 5],
            [['kondisi_sosial', 'lab', 'rad', 'pemeriksaan', 'diagnosis', 'diagnosis2', 'permasalahan', 'terapi', 'tindakan', 'edukasi'], 'string', 'max' => 500],
            [['keterangan_kepala', 'keterangan_thoraks', 'keterangan_abdomen', 'keterangan_ekstremitas'], 'string', 'max' => 100],
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
            'rpo' => 'Rpo',
            'alergi' => 'Alergi',
            'tulang_belakang' => 'Tulang Belakang',
            'td' => 'Td',
            'nadi' => 'Nadi',
            'suhu' => 'Suhu',
            'rr' => 'Rr',
            'kondisi_umum' => 'Kondisi Umum',
            'status_psikologis_gds' => 'Status Psikologis Gds',
            'kondisi_sosial' => 'Kondisi Sosial',
            'status_kognitif_mmse' => 'Status Kognitif Mmse',
            'kepala' => 'Kepala',
            'keterangan_kepala' => 'Keterangan Kepala',
            'thoraks' => 'Thoraks',
            'keterangan_thoraks' => 'Keterangan Thoraks',
            'abdomen' => 'Abdomen',
            'keterangan_abdomen' => 'Keterangan Abdomen',
            'ekstremitas' => 'Ekstremitas',
            'keterangan_ekstremitas' => 'Keterangan Ekstremitas',
            'Integument_kebersihan' => 'Integument Kebersihan',
            'Integument_warna' => 'Integument Warna',
            'Integument_kelembaban' => 'Integument Kelembaban',
            'Integument_gangguan_kulit' => 'Integument Gangguan Kulit',
            'status_fungsional' => 'Status Fungsional',
            'skrining_jatuh' => 'Skrining Jatuh',
            'status_nutrisi' => 'Status Nutrisi',
            'lainnya' => 'Lainnya',
            'lab' => 'Lab',
            'rad' => 'Rad',
            'pemeriksaan' => 'Pemeriksaan',
            'diagnosis' => 'Diagnosis',
            'diagnosis2' => 'Diagnosis2',
            'permasalahan' => 'Permasalahan',
            'terapi' => 'Terapi',
            'tindakan' => 'Tindakan',
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
