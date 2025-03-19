<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jns_perawatan_radiologi".
 *
 * @property string $kd_jenis_prw
 * @property string|null $nm_perawatan
 * @property float|null $bagian_rs
 * @property float $bhp
 * @property float $tarif_perujuk
 * @property float $tarif_tindakan_dokter
 * @property float|null $tarif_tindakan_petugas
 * @property float|null $kso
 * @property float|null $menejemen
 * @property float|null $total_byr
 * @property string $kd_pj
 * @property string $status
 * @property string $kelas
 *
 * @property BayarPeriksaRadiologiPerujuk[] $bayarPeriksaRadiologiPerujuks
 * @property BayarPeriksaRadiologi[] $bayarPeriksaRadiologis
 * @property InhealthTindakanRadiologi $inhealthTindakanRadiologi
 * @property Penjab $kdPj
 * @property TemplatePemeriksaanDokter[] $noTemplates
 * @property PermintaanRadiologi[] $noorders
 * @property PermintaanRadiologi[] $noorders0
 * @property PermintaanRadiologi[] $noorders1
 * @property PermintaanRadiologi[] $noorders2
 * @property PermintaanRadiologi[] $noorders3
 * @property PeriksaRadiologi[] $periksaRadiologis
 * @property PermintaanPemeriksaanRadiologi[] $permintaanPemeriksaanRadiologis
 * @property SatuSehatDiagnosticreportRadiologi[] $satuSehatDiagnosticreportRadiologis
 * @property SatuSehatMappingRadiologi $satuSehatMappingRadiologi
 * @property SatuSehatObservationRadiologi[] $satuSehatObservationRadiologis
 * @property SatuSehatServicerequestRadiologi[] $satuSehatServicerequestRadiologis
 * @property SatuSehatSpecimenRadiologi[] $satuSehatSpecimenRadiologis
 * @property TemplatePemeriksaanDokterPermintaanRadiologi[] $templatePemeriksaanDokterPermintaanRadiologis
 */
class JnsPerawatanRadiologi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jns_perawatan_radiologi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis_prw', 'bhp', 'tarif_perujuk', 'tarif_tindakan_dokter', 'kd_pj', 'status', 'kelas'], 'required'],
            [['bagian_rs', 'bhp', 'tarif_perujuk', 'tarif_tindakan_dokter', 'tarif_tindakan_petugas', 'kso', 'menejemen', 'total_byr'], 'number'],
            [['status', 'kelas'], 'string'],
            [['kd_jenis_prw'], 'string', 'max' => 15],
            [['nm_perawatan'], 'string', 'max' => 80],
            [['kd_pj'], 'string', 'max' => 3],
            [['kd_jenis_prw'], 'unique'],
            [['kd_pj'], 'exist', 'skipOnError' => true, 'targetClass' => Penjab::class, 'targetAttribute' => ['kd_pj' => 'kd_pj']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_jenis_prw' => 'Kd Jenis Prw',
            'nm_perawatan' => 'Nm Perawatan',
            'bagian_rs' => 'Bagian Rs',
            'bhp' => 'Bhp',
            'tarif_perujuk' => 'Tarif Perujuk',
            'tarif_tindakan_dokter' => 'Tarif Tindakan Dokter',
            'tarif_tindakan_petugas' => 'Tarif Tindakan Petugas',
            'kso' => 'Kso',
            'menejemen' => 'Menejemen',
            'total_byr' => 'Total Byr',
            'kd_pj' => 'Kd Pj',
            'status' => 'Status',
            'kelas' => 'Kelas',
        ];
    }

    /**
     * Gets query for [[BayarPeriksaRadiologiPerujuks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPeriksaRadiologiPerujuks()
    {
        return $this->hasMany(BayarPeriksaRadiologiPerujuk::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[BayarPeriksaRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPeriksaRadiologis()
    {
        return $this->hasMany(BayarPeriksaRadiologi::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[InhealthTindakanRadiologi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInhealthTindakanRadiologi()
    {
        return $this->hasOne(InhealthTindakanRadiologi::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[KdPj]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPj()
    {
        return $this->hasOne(Penjab::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[NoTemplates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoTemplates()
    {
        return $this->hasMany(TemplatePemeriksaanDokter::class, ['no_template' => 'no_template'])->viaTable('template_pemeriksaan_dokter_permintaan_radiologi', ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[Noorders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoorders()
    {
        return $this->hasMany(PermintaanRadiologi::class, ['noorder' => 'noorder'])->viaTable('permintaan_pemeriksaan_radiologi', ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[Noorders0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoorders0()
    {
        return $this->hasMany(PermintaanRadiologi::class, ['noorder' => 'noorder'])->viaTable('satu_sehat_diagnosticreport_radiologi', ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[Noorders1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoorders1()
    {
        return $this->hasMany(PermintaanRadiologi::class, ['noorder' => 'noorder'])->viaTable('satu_sehat_observation_radiologi', ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[Noorders2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoorders2()
    {
        return $this->hasMany(PermintaanRadiologi::class, ['noorder' => 'noorder'])->viaTable('satu_sehat_servicerequest_radiologi', ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[Noorders3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoorders3()
    {
        return $this->hasMany(PermintaanRadiologi::class, ['noorder' => 'noorder'])->viaTable('satu_sehat_specimen_radiologi', ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[PeriksaRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeriksaRadiologis()
    {
        return $this->hasMany(PeriksaRadiologi::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[PermintaanPemeriksaanRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanPemeriksaanRadiologis()
    {
        return $this->hasMany(PermintaanPemeriksaanRadiologi::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[SatuSehatDiagnosticreportRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatDiagnosticreportRadiologis()
    {
        return $this->hasMany(SatuSehatDiagnosticreportRadiologi::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[SatuSehatMappingRadiologi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMappingRadiologi()
    {
        return $this->hasOne(SatuSehatMappingRadiologi::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[SatuSehatObservationRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatObservationRadiologis()
    {
        return $this->hasMany(SatuSehatObservationRadiologi::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[SatuSehatServicerequestRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatServicerequestRadiologis()
    {
        return $this->hasMany(SatuSehatServicerequestRadiologi::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[SatuSehatSpecimenRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatSpecimenRadiologis()
    {
        return $this->hasMany(SatuSehatSpecimenRadiologi::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[TemplatePemeriksaanDokterPermintaanRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplatePemeriksaanDokterPermintaanRadiologis()
    {
        return $this->hasMany(TemplatePemeriksaanDokterPermintaanRadiologi::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }
}
