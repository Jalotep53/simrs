<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_medis_ralan_bedah_mulut".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kd_dokter
 * @property string $anamnesis
 * @property string $hubungan
 * @property string $keluhan_utama
 * @property string $rps
 * @property string $rpk
 * @property string $alergi
 * @property string $keadaan
 * @property string $kesadaran
 * @property string $nyeri
 * @property string $td
 * @property string $nadi
 * @property string $suhu
 * @property string $rr
 * @property string $bb
 * @property string $tb
 * @property string $status_nutrisi
 * @property string $kulit
 * @property string $keterangan_kulit
 * @property string $kepala
 * @property string $keterangan_kepala
 * @property string $mata
 * @property string $keterangan_mata
 * @property string $leher
 * @property string $keterangan_leher
 * @property string $kelenjar
 * @property string $keterangan_kelenjar
 * @property string $dada
 * @property string $keterangan_dada
 * @property string $perut
 * @property string $keterangan_perut
 * @property string $ekstremitas
 * @property string $keterangan_ekstremitas
 * @property string $wajah
 * @property string $intra
 * @property string $gigigeligi
 * @property string $lab
 * @property string $rad
 * @property string $penunjang
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
class PenilaianMedisRalanBedahMulut extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_medis_ralan_bedah_mulut';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'anamnesis', 'hubungan', 'rps', 'rpk', 'keadaan', 'kesadaran', 'nyeri', 'suhu', 'bb', 'tb', 'kulit', 'keterangan_kulit', 'kepala', 'keterangan_kepala', 'mata', 'keterangan_mata', 'leher', 'keterangan_leher', 'kelenjar', 'keterangan_kelenjar', 'dada', 'keterangan_dada', 'perut', 'keterangan_perut', 'ekstremitas', 'keterangan_ekstremitas', 'wajah', 'intra', 'gigigeligi', 'lab', 'rad', 'penunjang', 'diagnosis', 'diagnosis2', 'permasalahan', 'terapi', 'tindakan', 'edukasi'], 'required'],
            [['tanggal'], 'safe'],
            [['anamnesis', 'keadaan', 'kesadaran', 'nyeri', 'kulit', 'kepala', 'mata', 'leher', 'kelenjar', 'dada', 'perut', 'ekstremitas'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['hubungan', 'keterangan_kulit', 'keterangan_kepala', 'keterangan_mata', 'keterangan_leher', 'keterangan_kelenjar', 'keterangan_dada', 'keterangan_perut', 'keterangan_ekstremitas'], 'string', 'max' => 30],
            [['keluhan_utama', 'rps'], 'string', 'max' => 2000],
            [['rpk', 'wajah', 'intra', 'gigigeligi', 'permasalahan', 'terapi', 'tindakan', 'edukasi'], 'string', 'max' => 1000],
            [['alergi', 'status_nutrisi'], 'string', 'max' => 50],
            [['td'], 'string', 'max' => 8],
            [['nadi', 'suhu', 'rr', 'bb', 'tb'], 'string', 'max' => 5],
            [['lab', 'rad', 'penunjang'], 'string', 'max' => 300],
            [['diagnosis', 'diagnosis2'], 'string', 'max' => 500],
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
            'rpk' => 'Rpk',
            'alergi' => 'Alergi',
            'keadaan' => 'Keadaan',
            'kesadaran' => 'Kesadaran',
            'nyeri' => 'Nyeri',
            'td' => 'Td',
            'nadi' => 'Nadi',
            'suhu' => 'Suhu',
            'rr' => 'Rr',
            'bb' => 'Bb',
            'tb' => 'Tb',
            'status_nutrisi' => 'Status Nutrisi',
            'kulit' => 'Kulit',
            'keterangan_kulit' => 'Keterangan Kulit',
            'kepala' => 'Kepala',
            'keterangan_kepala' => 'Keterangan Kepala',
            'mata' => 'Mata',
            'keterangan_mata' => 'Keterangan Mata',
            'leher' => 'Leher',
            'keterangan_leher' => 'Keterangan Leher',
            'kelenjar' => 'Kelenjar',
            'keterangan_kelenjar' => 'Keterangan Kelenjar',
            'dada' => 'Dada',
            'keterangan_dada' => 'Keterangan Dada',
            'perut' => 'Perut',
            'keterangan_perut' => 'Keterangan Perut',
            'ekstremitas' => 'Ekstremitas',
            'keterangan_ekstremitas' => 'Keterangan Ekstremitas',
            'wajah' => 'Wajah',
            'intra' => 'Intra',
            'gigigeligi' => 'Gigigeligi',
            'lab' => 'Lab',
            'rad' => 'Rad',
            'penunjang' => 'Penunjang',
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
