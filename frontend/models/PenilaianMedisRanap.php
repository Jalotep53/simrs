<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_medis_ranap".
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
 * @property string $mata
 * @property string $gigi
 * @property string $tht
 * @property string $thoraks
 * @property string $jantung
 * @property string $paru
 * @property string $abdomen
 * @property string $genital
 * @property string $ekstremitas
 * @property string $kulit
 * @property string $ket_fisik
 * @property string $ket_lokalis
 * @property string $lab
 * @property string $rad
 * @property string $penunjang
 * @property string $diagnosis
 * @property string $tata
 * @property string $edukasi
 *
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class PenilaianMedisRanap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_medis_ranap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'anamnesis', 'hubungan', 'rps', 'rpk', 'rpo', 'keadaan', 'gcs', 'kesadaran', 'rr', 'spo', 'kepala', 'mata', 'gigi', 'tht', 'thoraks', 'jantung', 'paru', 'abdomen', 'genital', 'ekstremitas', 'kulit', 'ket_fisik', 'ket_lokalis', 'lab', 'rad', 'penunjang', 'diagnosis', 'tata', 'edukasi'], 'required'],
            [['tanggal'], 'safe'],
            [['anamnesis', 'keadaan', 'kesadaran', 'kepala', 'mata', 'gigi', 'tht', 'thoraks', 'jantung', 'paru', 'abdomen', 'genital', 'ekstremitas', 'kulit', 'ket_fisik', 'ket_lokalis', 'lab', 'rad', 'penunjang', 'tata'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['hubungan', 'alergi'], 'string', 'max' => 100],
            [['keluhan_utama', 'rps'], 'string', 'max' => 2000],
            [['rpd', 'rpk', 'rpo', 'edukasi'], 'string', 'max' => 1000],
            [['gcs'], 'string', 'max' => 10],
            [['td'], 'string', 'max' => 8],
            [['nadi', 'rr', 'suhu', 'spo', 'bb', 'tb'], 'string', 'max' => 5],
            [['diagnosis'], 'string', 'max' => 500],
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
            'mata' => 'Mata',
            'gigi' => 'Gigi',
            'tht' => 'Tht',
            'thoraks' => 'Thoraks',
            'jantung' => 'Jantung',
            'paru' => 'Paru',
            'abdomen' => 'Abdomen',
            'genital' => 'Genital',
            'ekstremitas' => 'Ekstremitas',
            'kulit' => 'Kulit',
            'ket_fisik' => 'Ket Fisik',
            'ket_lokalis' => 'Ket Lokalis',
            'lab' => 'Lab',
            'rad' => 'Rad',
            'penunjang' => 'Penunjang',
            'diagnosis' => 'Diagnosis',
            'tata' => 'Tata',
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
