<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_medis_ralan_tht".
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
 * @property string $td
 * @property string $nadi
 * @property string $rr
 * @property string $suhu
 * @property string $bb
 * @property string $tb
 * @property string $nyeri
 * @property string $status_nutrisi
 * @property string $kondisi
 * @property string $ket_lokalis
 * @property string $lab
 * @property string $rad
 * @property string $tes_pendengaran
 * @property string $penunjang
 * @property string $diagnosis
 * @property string $diagnosisbanding
 * @property string $permasalahan
 * @property string $terapi
 * @property string $tindakan
 * @property string $tatalaksana
 * @property string $edukasi
 *
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class PenilaianMedisRalanTht extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_medis_ralan_tht';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'anamnesis', 'hubungan', 'rps', 'rpo', 'rr', 'nyeri', 'status_nutrisi', 'kondisi', 'ket_lokalis', 'lab', 'rad', 'tes_pendengaran', 'penunjang', 'diagnosis', 'diagnosisbanding', 'permasalahan', 'terapi', 'tindakan', 'tatalaksana', 'edukasi'], 'required'],
            [['tanggal'], 'safe'],
            [['anamnesis', 'kondisi', 'ket_lokalis', 'lab', 'rad', 'tes_pendengaran', 'penunjang', 'permasalahan', 'terapi', 'tindakan', 'tatalaksana'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['hubungan'], 'string', 'max' => 30],
            [['keluhan_utama', 'rps'], 'string', 'max' => 2000],
            [['rpd', 'rpo', 'edukasi'], 'string', 'max' => 1000],
            [['alergi', 'nyeri', 'status_nutrisi'], 'string', 'max' => 50],
            [['td'], 'string', 'max' => 8],
            [['nadi', 'rr', 'suhu', 'bb', 'tb'], 'string', 'max' => 5],
            [['diagnosis', 'diagnosisbanding'], 'string', 'max' => 500],
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
            'td' => 'Td',
            'nadi' => 'Nadi',
            'rr' => 'Rr',
            'suhu' => 'Suhu',
            'bb' => 'Bb',
            'tb' => 'Tb',
            'nyeri' => 'Nyeri',
            'status_nutrisi' => 'Status Nutrisi',
            'kondisi' => 'Kondisi',
            'ket_lokalis' => 'Ket Lokalis',
            'lab' => 'Lab',
            'rad' => 'Rad',
            'tes_pendengaran' => 'Tes Pendengaran',
            'penunjang' => 'Penunjang',
            'diagnosis' => 'Diagnosis',
            'diagnosisbanding' => 'Diagnosisbanding',
            'permasalahan' => 'Permasalahan',
            'terapi' => 'Terapi',
            'tindakan' => 'Tindakan',
            'tatalaksana' => 'Tatalaksana',
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
