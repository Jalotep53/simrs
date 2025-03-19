<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_medis_ralan_neurologi".
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
 * @property string $kesadaran
 * @property string $status
 * @property string $td
 * @property string $nadi
 * @property string $suhu
 * @property string $rr
 * @property string $bb
 * @property string $nyeri
 * @property string $gcs
 * @property string $kepala
 * @property string $keterangan_kepala
 * @property string $thoraks
 * @property string $keterangan_thoraks
 * @property string $abdomen
 * @property string $keterangan_abdomen
 * @property string $ekstremitas
 * @property string $keterangan_ekstremitas
 * @property string $columna
 * @property string $keterangan_columna
 * @property string $muskulos
 * @property string $keterangan_muskulos
 * @property string $lainnya
 * @property string $lab
 * @property string $rad
 * @property string $penunjanglain
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
class PenilaianMedisRalanNeurologi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_medis_ralan_neurologi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'anamnesis', 'hubungan', 'rps', 'rpo', 'kesadaran', 'status', 'suhu', 'bb', 'gcs', 'kepala', 'keterangan_kepala', 'thoraks', 'keterangan_thoraks', 'abdomen', 'keterangan_abdomen', 'ekstremitas', 'keterangan_ekstremitas', 'columna', 'keterangan_columna', 'muskulos', 'keterangan_muskulos', 'lainnya', 'lab', 'rad', 'penunjanglain', 'diagnosis', 'diagnosis2', 'permasalahan', 'terapi', 'tindakan', 'edukasi'], 'required'],
            [['tanggal'], 'safe'],
            [['anamnesis', 'kesadaran', 'status', 'kepala', 'thoraks', 'abdomen', 'ekstremitas', 'columna', 'muskulos'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['hubungan', 'keterangan_kepala', 'keterangan_thoraks', 'keterangan_abdomen', 'keterangan_ekstremitas', 'keterangan_columna', 'keterangan_muskulos'], 'string', 'max' => 30],
            [['keluhan_utama', 'rps'], 'string', 'max' => 2000],
            [['rpd', 'rpo', 'lainnya'], 'string', 'max' => 1000],
            [['alergi', 'nyeri'], 'string', 'max' => 50],
            [['td'], 'string', 'max' => 8],
            [['nadi', 'suhu', 'rr', 'bb'], 'string', 'max' => 5],
            [['gcs'], 'string', 'max' => 10],
            [['lab', 'rad', 'penunjanglain', 'diagnosis', 'diagnosis2', 'permasalahan', 'terapi', 'tindakan', 'edukasi'], 'string', 'max' => 500],
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
            'kesadaran' => 'Kesadaran',
            'status' => 'Status',
            'td' => 'Td',
            'nadi' => 'Nadi',
            'suhu' => 'Suhu',
            'rr' => 'Rr',
            'bb' => 'Bb',
            'nyeri' => 'Nyeri',
            'gcs' => 'Gcs',
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
            'lab' => 'Lab',
            'rad' => 'Rad',
            'penunjanglain' => 'Penunjanglain',
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
