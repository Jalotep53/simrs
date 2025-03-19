<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "skp_penilaian".
 *
 * @property string $nomor_penilaian
 * @property string|null $nik_dinilai
 * @property string|null $nik_penilai
 * @property string|null $tanggal
 * @property string|null $keterangan
 * @property string|null $status
 *
 * @property SkpKriteriaPenilaian[] $kodeKriterias
 * @property Pegawai $nikDinilai
 * @property Pegawai $nikPenilai
 * @property SkpRekapitulasiPenilaian[] $nomorRekapitulasis
 * @property SkpDetailPenilaian[] $skpDetailPenilaians
 * @property SkpDetailRekapitulasiPenilaian[] $skpDetailRekapitulasiPenilaians
 */
class SkpPenilaian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skp_penilaian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomor_penilaian'], 'required'],
            [['tanggal'], 'safe'],
            [['status'], 'string'],
            [['nomor_penilaian', 'nik_dinilai', 'nik_penilai'], 'string', 'max' => 20],
            [['keterangan'], 'string', 'max' => 100],
            [['nomor_penilaian'], 'unique'],
            [['nik_dinilai'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nik_dinilai' => 'nik']],
            [['nik_penilai'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nik_penilai' => 'nik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nomor_penilaian' => 'Nomor Penilaian',
            'nik_dinilai' => 'Nik Dinilai',
            'nik_penilai' => 'Nik Penilai',
            'tanggal' => 'Tanggal',
            'keterangan' => 'Keterangan',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[KodeKriterias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeKriterias()
    {
        return $this->hasMany(SkpKriteriaPenilaian::class, ['kode_kriteria' => 'kode_kriteria'])->viaTable('skp_detail_penilaian', ['nomor_penilaian' => 'nomor_penilaian']);
    }

    /**
     * Gets query for [[NikDinilai]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNikDinilai()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nik_dinilai']);
    }

    /**
     * Gets query for [[NikPenilai]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNikPenilai()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nik_penilai']);
    }

    /**
     * Gets query for [[NomorRekapitulasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNomorRekapitulasis()
    {
        return $this->hasMany(SkpRekapitulasiPenilaian::class, ['nomor_rekapitulasi' => 'nomor_rekapitulasi'])->viaTable('skp_detail_rekapitulasi_penilaian', ['nomor_penilaian' => 'nomor_penilaian']);
    }

    /**
     * Gets query for [[SkpDetailPenilaians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkpDetailPenilaians()
    {
        return $this->hasMany(SkpDetailPenilaian::class, ['nomor_penilaian' => 'nomor_penilaian']);
    }

    /**
     * Gets query for [[SkpDetailRekapitulasiPenilaians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkpDetailRekapitulasiPenilaians()
    {
        return $this->hasMany(SkpDetailRekapitulasiPenilaian::class, ['nomor_penilaian' => 'nomor_penilaian']);
    }
}
