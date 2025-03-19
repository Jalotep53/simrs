<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "skdp_bpjs".
 *
 * @property string $tahun
 * @property string|null $no_rkm_medis
 * @property string $diagnosa
 * @property string $terapi
 * @property string|null $alasan1
 * @property string|null $alasan2
 * @property string|null $rtl1
 * @property string|null $rtl2
 * @property string|null $tanggal_datang
 * @property string $tanggal_rujukan
 * @property string $no_antrian
 * @property string|null $kd_dokter
 * @property string $status
 *
 * @property Dokter $kdDokter
 * @property Pasien $noRkmMedis
 */
class SkdpBpjs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skdp_bpjs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun', 'diagnosa', 'terapi', 'tanggal_rujukan', 'no_antrian', 'status'], 'required'],
            [['tahun', 'tanggal_datang', 'tanggal_rujukan'], 'safe'],
            [['status'], 'string'],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['diagnosa', 'alasan1', 'alasan2', 'rtl1', 'rtl2'], 'string', 'max' => 50],
            [['terapi'], 'string', 'max' => 200],
            [['no_antrian'], 'string', 'max' => 6],
            [['kd_dokter'], 'string', 'max' => 20],
            [['tahun', 'no_antrian'], 'unique', 'targetAttribute' => ['tahun', 'no_antrian']],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tahun' => 'Tahun',
            'no_rkm_medis' => 'No Rkm Medis',
            'diagnosa' => 'Diagnosa',
            'terapi' => 'Terapi',
            'alasan1' => 'Alasan1',
            'alasan2' => 'Alasan2',
            'rtl1' => 'Rtl1',
            'rtl2' => 'Rtl2',
            'tanggal_datang' => 'Tanggal Datang',
            'tanggal_rujukan' => 'Tanggal Rujukan',
            'no_antrian' => 'No Antrian',
            'kd_dokter' => 'Kd Dokter',
            'status' => 'Status',
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
     * Gets query for [[NoRkmMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRkmMedis()
    {
        return $this->hasOne(Pasien::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }
}
