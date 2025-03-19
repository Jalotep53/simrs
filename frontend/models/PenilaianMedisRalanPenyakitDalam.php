<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_medis_ralan_penyakit_dalam".
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
 * @property string $kondisi
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
 * @property string $keterangan_thorak
 * @property string $abdomen
 * @property string $keterangan_abdomen
 * @property string $ekstremitas
 * @property string $keterangan_ekstremitas
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
class PenilaianMedisRalanPenyakitDalam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_medis_ralan_penyakit_dalam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'anamnesis', 'hubungan', 'rps', 'rpo', 'kondisi', 'status', 'suhu', 'bb', 'gcs', 'kepala', 'keterangan_kepala', 'thoraks', 'keterangan_thorak', 'abdomen', 'keterangan_abdomen', 'ekstremitas', 'keterangan_ekstremitas', 'lainnya', 'lab', 'rad', 'penunjanglain', 'diagnosis', 'diagnosis2', 'permasalahan', 'terapi', 'tindakan', 'edukasi'], 'required'],
            [['tanggal'], 'safe'],
            [['anamnesis', 'kepala', 'thoraks', 'abdomen', 'ekstremitas'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['hubungan', 'keterangan_kepala', 'keterangan_thorak', 'keterangan_abdomen', 'keterangan_ekstremitas'], 'string', 'max' => 30],
            [['keluhan_utama', 'rps'], 'string', 'max' => 2000],
            [['rpd', 'rpo', 'lainnya', 'lab', 'rad', 'penunjanglain'], 'string', 'max' => 1000],
            [['alergi', 'nyeri'], 'string', 'max' => 50],
            [['kondisi', 'diagnosis', 'diagnosis2', 'permasalahan', 'terapi', 'edukasi'], 'string', 'max' => 500],
            [['status'], 'string', 'max' => 100],
            [['td'], 'string', 'max' => 8],
            [['nadi', 'suhu', 'rr', 'bb'], 'string', 'max' => 5],
            [['gcs'], 'string', 'max' => 10],
            [['tindakan'], 'string', 'max' => 200],
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
            'kondisi' => 'Kondisi',
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
            'keterangan_thorak' => 'Keterangan Thorak',
            'abdomen' => 'Abdomen',
            'keterangan_abdomen' => 'Keterangan Abdomen',
            'ekstremitas' => 'Ekstremitas',
            'keterangan_ekstremitas' => 'Keterangan Ekstremitas',
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
