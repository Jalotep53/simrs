<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pcare_pendaftaran".
 *
 * @property string $no_rawat
 * @property string $tglDaftar
 * @property string $no_rkm_medis
 * @property string $nm_pasien
 * @property string $kdProviderPeserta
 * @property string $noKartu
 * @property string $kdPoli
 * @property string $nmPoli
 * @property string $keluhan
 * @property string $kunjSakit
 * @property string $sistole
 * @property string $diastole
 * @property string $beratBadan
 * @property string $tinggiBadan
 * @property string $respRate
 * @property string $lingkar_perut
 * @property string $heartRate
 * @property string $rujukBalik
 * @property string $kdTkp
 * @property string $noUrut
 * @property string $status
 *
 * @property RegPeriksa $noRawat
 */
class PcarePendaftaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pcare_pendaftaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tglDaftar', 'no_rkm_medis', 'nm_pasien', 'kdProviderPeserta', 'noKartu', 'kdPoli', 'nmPoli', 'keluhan', 'kunjSakit', 'sistole', 'diastole', 'beratBadan', 'tinggiBadan', 'respRate', 'lingkar_perut', 'heartRate', 'rujukBalik', 'kdTkp', 'noUrut', 'status'], 'required'],
            [['tglDaftar'], 'safe'],
            [['kunjSakit', 'kdTkp', 'status'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['no_rkm_medis', 'kdProviderPeserta'], 'string', 'max' => 15],
            [['nm_pasien'], 'string', 'max' => 40],
            [['noKartu'], 'string', 'max' => 25],
            [['kdPoli', 'beratBadan', 'tinggiBadan', 'lingkar_perut', 'noUrut'], 'string', 'max' => 5],
            [['nmPoli'], 'string', 'max' => 50],
            [['keluhan'], 'string', 'max' => 400],
            [['sistole', 'diastole', 'respRate', 'heartRate', 'rujukBalik'], 'string', 'max' => 3],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tglDaftar' => 'Tgl Daftar',
            'no_rkm_medis' => 'No Rkm Medis',
            'nm_pasien' => 'Nm Pasien',
            'kdProviderPeserta' => 'Kd Provider Peserta',
            'noKartu' => 'No Kartu',
            'kdPoli' => 'Kd Poli',
            'nmPoli' => 'Nm Poli',
            'keluhan' => 'Keluhan',
            'kunjSakit' => 'Kunj Sakit',
            'sistole' => 'Sistole',
            'diastole' => 'Diastole',
            'beratBadan' => 'Berat Badan',
            'tinggiBadan' => 'Tinggi Badan',
            'respRate' => 'Resp Rate',
            'lingkar_perut' => 'Lingkar Perut',
            'heartRate' => 'Heart Rate',
            'rujukBalik' => 'Rujuk Balik',
            'kdTkp' => 'Kd Tkp',
            'noUrut' => 'No Urut',
            'status' => 'Status',
        ];
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
