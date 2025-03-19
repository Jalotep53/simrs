<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pcare_rujuk_khusus".
 *
 * @property string $no_rawat
 * @property string|null $noKunjungan
 * @property string|null $tglDaftar
 * @property string|null $no_rkm_medis
 * @property string|null $nm_pasien
 * @property string|null $noKartu
 * @property string|null $kdPoli
 * @property string|null $nmPoli
 * @property string|null $keluhan
 * @property string|null $kdSadar
 * @property string|null $nmSadar
 * @property string|null $sistole
 * @property string|null $diastole
 * @property string|null $beratBadan
 * @property string|null $tinggiBadan
 * @property string|null $respRate
 * @property string|null $heartRate
 * @property string|null $terapi
 * @property string|null $kdStatusPulang
 * @property string|null $nmStatusPulang
 * @property string|null $tglPulang
 * @property string|null $kdDokter
 * @property string|null $nmDokter
 * @property string|null $kdDiag1
 * @property string|null $nmDiag1
 * @property string|null $kdDiag2
 * @property string|null $nmDiag2
 * @property string|null $kdDiag3
 * @property string|null $nmDiag3
 * @property string|null $tglEstRujuk
 * @property string|null $kdPPK
 * @property string|null $kdKhusus
 * @property string|null $nmKhusus
 * @property string|null $kdSubSpesialis
 * @property string|null $nmSubSpesialis
 * @property string|null $catatan
 * @property string|null $kdTACC
 * @property string|null $nmTACC
 * @property string|null $alasanTACC
 * @property string $KdAlergiMakanan
 * @property string $NmAlergiMakanan
 * @property string $KdAlergiUdara
 * @property string $NmAlergiUdara
 * @property string $KdAlergiObat
 * @property string $NmAlergiObat
 * @property string $KdPrognosa
 * @property string $NmPrognosa
 * @property string $terapi_non_obat
 * @property string $bmhp
 *
 * @property RegPeriksa $noRawat
 */
class PcareRujukKhusus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pcare_rujuk_khusus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'KdAlergiMakanan', 'NmAlergiMakanan', 'KdAlergiUdara', 'NmAlergiUdara', 'KdAlergiObat', 'NmAlergiObat', 'KdPrognosa', 'NmPrognosa', 'terapi_non_obat', 'bmhp'], 'required'],
            [['tglDaftar', 'tglPulang', 'tglEstRujuk'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['noKunjungan', 'nm_pasien'], 'string', 'max' => 40],
            [['no_rkm_medis', 'kdPPK'], 'string', 'max' => 15],
            [['noKartu'], 'string', 'max' => 25],
            [['kdPoli', 'kdSadar', 'beratBadan', 'tinggiBadan', 'kdStatusPulang', 'kdKhusus', 'kdSubSpesialis', 'kdTACC', 'KdAlergiMakanan', 'KdAlergiUdara', 'KdAlergiObat', 'KdPrognosa'], 'string', 'max' => 5],
            [['nmPoli', 'nmSadar', 'nmStatusPulang', 'nmDokter', 'nmKhusus', 'nmSubSpesialis', 'nmTACC', 'NmAlergiMakanan', 'NmAlergiUdara', 'NmAlergiObat'], 'string', 'max' => 50],
            [['keluhan', 'nmDiag1', 'nmDiag2', 'nmDiag3', 'alasanTACC'], 'string', 'max' => 400],
            [['sistole', 'diastole', 'respRate', 'heartRate'], 'string', 'max' => 3],
            [['terapi', 'terapi_non_obat', 'bmhp'], 'string', 'max' => 2000],
            [['kdDokter'], 'string', 'max' => 20],
            [['kdDiag1', 'kdDiag2', 'kdDiag3'], 'string', 'max' => 10],
            [['catatan'], 'string', 'max' => 150],
            [['NmPrognosa'], 'string', 'max' => 100],
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
            'noKunjungan' => 'No Kunjungan',
            'tglDaftar' => 'Tgl Daftar',
            'no_rkm_medis' => 'No Rkm Medis',
            'nm_pasien' => 'Nm Pasien',
            'noKartu' => 'No Kartu',
            'kdPoli' => 'Kd Poli',
            'nmPoli' => 'Nm Poli',
            'keluhan' => 'Keluhan',
            'kdSadar' => 'Kd Sadar',
            'nmSadar' => 'Nm Sadar',
            'sistole' => 'Sistole',
            'diastole' => 'Diastole',
            'beratBadan' => 'Berat Badan',
            'tinggiBadan' => 'Tinggi Badan',
            'respRate' => 'Resp Rate',
            'heartRate' => 'Heart Rate',
            'terapi' => 'Terapi',
            'kdStatusPulang' => 'Kd Status Pulang',
            'nmStatusPulang' => 'Nm Status Pulang',
            'tglPulang' => 'Tgl Pulang',
            'kdDokter' => 'Kd Dokter',
            'nmDokter' => 'Nm Dokter',
            'kdDiag1' => 'Kd Diag1',
            'nmDiag1' => 'Nm Diag1',
            'kdDiag2' => 'Kd Diag2',
            'nmDiag2' => 'Nm Diag2',
            'kdDiag3' => 'Kd Diag3',
            'nmDiag3' => 'Nm Diag3',
            'tglEstRujuk' => 'Tgl Est Rujuk',
            'kdPPK' => 'Kd Ppk',
            'kdKhusus' => 'Kd Khusus',
            'nmKhusus' => 'Nm Khusus',
            'kdSubSpesialis' => 'Kd Sub Spesialis',
            'nmSubSpesialis' => 'Nm Sub Spesialis',
            'catatan' => 'Catatan',
            'kdTACC' => 'Kd Tacc',
            'nmTACC' => 'Nm Tacc',
            'alasanTACC' => 'Alasan Tacc',
            'KdAlergiMakanan' => 'Kd Alergi Makanan',
            'NmAlergiMakanan' => 'Nm Alergi Makanan',
            'KdAlergiUdara' => 'Kd Alergi Udara',
            'NmAlergiUdara' => 'Nm Alergi Udara',
            'KdAlergiObat' => 'Kd Alergi Obat',
            'NmAlergiObat' => 'Nm Alergi Obat',
            'KdPrognosa' => 'Kd Prognosa',
            'NmPrognosa' => 'Nm Prognosa',
            'terapi_non_obat' => 'Terapi Non Obat',
            'bmhp' => 'Bmhp',
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
