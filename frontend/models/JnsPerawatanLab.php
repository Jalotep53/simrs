<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jns_perawatan_lab".
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
 * @property string $kategori
 *
 * @property BayarDetailPeriksaLabPerujuk[] $bayarDetailPeriksaLabPerujuks
 * @property BayarDetailPeriksaLab[] $bayarDetailPeriksaLabs
 * @property BayarPeriksaLabPerujuk[] $bayarPeriksaLabPerujuks
 * @property BayarPeriksaLab[] $bayarPeriksaLabs
 * @property DetailPeriksaLabpaGambar[] $detailPeriksaLabpaGambars
 * @property DetailPeriksaLabpa[] $detailPeriksaLabpas
 * @property DetailPeriksaLab[] $detailPeriksaLabs
 * @property InhealthTindakanLaborat $inhealthTindakanLaborat
 * @property Penjab $kdPj
 * @property TemplatePemeriksaanDokter[] $noTemplates
 * @property PermintaanLab[] $noorders
 * @property PermintaanLabmb[] $noorders0
 * @property PermintaanLabpa[] $noorders1
 * @property PeriksaLab[] $periksaLabs
 * @property PermintaanDetailPermintaanLabmb[] $permintaanDetailPermintaanLabmbs
 * @property PermintaanDetailPermintaanLab[] $permintaanDetailPermintaanLabs
 * @property PermintaanPemeriksaanLabmb[] $permintaanPemeriksaanLabmbs
 * @property PermintaanPemeriksaanLabpa[] $permintaanPemeriksaanLabpas
 * @property PermintaanPemeriksaanLab[] $permintaanPemeriksaanLabs
 * @property SatuSehatDiagnosticreportLabMb[] $satuSehatDiagnosticreportLabMbs
 * @property SatuSehatDiagnosticreportLab[] $satuSehatDiagnosticreportLabs
 * @property SatuSehatObservationLabMb[] $satuSehatObservationLabMbs
 * @property SatuSehatObservationLab[] $satuSehatObservationLabs
 * @property SatuSehatServicerequestLabMb[] $satuSehatServicerequestLabMbs
 * @property SatuSehatServicerequestLab[] $satuSehatServicerequestLabs
 * @property SatuSehatSpecimenLabMb[] $satuSehatSpecimenLabMbs
 * @property SatuSehatSpecimenLab[] $satuSehatSpecimenLabs
 * @property TemplateLaboratorium[] $templateLaboratoria
 * @property TemplatePemeriksaanDokterDetailPermintaanLab[] $templatePemeriksaanDokterDetailPermintaanLabs
 * @property TemplatePemeriksaanDokterPermintaanLab[] $templatePemeriksaanDokterPermintaanLabs
 */
class JnsPerawatanLab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jns_perawatan_lab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis_prw', 'bhp', 'tarif_perujuk', 'tarif_tindakan_dokter', 'kd_pj', 'status', 'kelas', 'kategori'], 'required'],
            [['bagian_rs', 'bhp', 'tarif_perujuk', 'tarif_tindakan_dokter', 'tarif_tindakan_petugas', 'kso', 'menejemen', 'total_byr'], 'number'],
            [['status', 'kelas', 'kategori'], 'string'],
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
            'kategori' => 'Kategori',
        ];
    }

    /**
     * Gets query for [[BayarDetailPeriksaLabPerujuks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarDetailPeriksaLabPerujuks()
    {
        return $this->hasMany(BayarDetailPeriksaLabPerujuk::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[BayarDetailPeriksaLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarDetailPeriksaLabs()
    {
        return $this->hasMany(BayarDetailPeriksaLab::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[BayarPeriksaLabPerujuks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPeriksaLabPerujuks()
    {
        return $this->hasMany(BayarPeriksaLabPerujuk::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[BayarPeriksaLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPeriksaLabs()
    {
        return $this->hasMany(BayarPeriksaLab::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[DetailPeriksaLabpaGambars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPeriksaLabpaGambars()
    {
        return $this->hasMany(DetailPeriksaLabpaGambar::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[DetailPeriksaLabpas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPeriksaLabpas()
    {
        return $this->hasMany(DetailPeriksaLabpa::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[DetailPeriksaLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPeriksaLabs()
    {
        return $this->hasMany(DetailPeriksaLab::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[InhealthTindakanLaborat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInhealthTindakanLaborat()
    {
        return $this->hasOne(InhealthTindakanLaborat::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
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
        return $this->hasMany(TemplatePemeriksaanDokter::class, ['no_template' => 'no_template'])->viaTable('template_pemeriksaan_dokter_permintaan_lab', ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[Noorders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoorders()
    {
        return $this->hasMany(PermintaanLab::class, ['noorder' => 'noorder'])->viaTable('permintaan_pemeriksaan_lab', ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[Noorders0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoorders0()
    {
        return $this->hasMany(PermintaanLabmb::class, ['noorder' => 'noorder'])->viaTable('permintaan_pemeriksaan_labmb', ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[Noorders1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoorders1()
    {
        return $this->hasMany(PermintaanLabpa::class, ['noorder' => 'noorder'])->viaTable('permintaan_pemeriksaan_labpa', ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[PeriksaLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeriksaLabs()
    {
        return $this->hasMany(PeriksaLab::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[PermintaanDetailPermintaanLabmbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanDetailPermintaanLabmbs()
    {
        return $this->hasMany(PermintaanDetailPermintaanLabmb::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[PermintaanDetailPermintaanLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanDetailPermintaanLabs()
    {
        return $this->hasMany(PermintaanDetailPermintaanLab::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[PermintaanPemeriksaanLabmbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanPemeriksaanLabmbs()
    {
        return $this->hasMany(PermintaanPemeriksaanLabmb::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[PermintaanPemeriksaanLabpas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanPemeriksaanLabpas()
    {
        return $this->hasMany(PermintaanPemeriksaanLabpa::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[PermintaanPemeriksaanLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanPemeriksaanLabs()
    {
        return $this->hasMany(PermintaanPemeriksaanLab::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[SatuSehatDiagnosticreportLabMbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatDiagnosticreportLabMbs()
    {
        return $this->hasMany(SatuSehatDiagnosticreportLabMb::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[SatuSehatDiagnosticreportLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatDiagnosticreportLabs()
    {
        return $this->hasMany(SatuSehatDiagnosticreportLab::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[SatuSehatObservationLabMbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatObservationLabMbs()
    {
        return $this->hasMany(SatuSehatObservationLabMb::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[SatuSehatObservationLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatObservationLabs()
    {
        return $this->hasMany(SatuSehatObservationLab::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[SatuSehatServicerequestLabMbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatServicerequestLabMbs()
    {
        return $this->hasMany(SatuSehatServicerequestLabMb::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[SatuSehatServicerequestLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatServicerequestLabs()
    {
        return $this->hasMany(SatuSehatServicerequestLab::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[SatuSehatSpecimenLabMbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatSpecimenLabMbs()
    {
        return $this->hasMany(SatuSehatSpecimenLabMb::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[SatuSehatSpecimenLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatSpecimenLabs()
    {
        return $this->hasMany(SatuSehatSpecimenLab::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[TemplateLaboratoria]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplateLaboratoria()
    {
        return $this->hasMany(TemplateLaboratorium::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[TemplatePemeriksaanDokterDetailPermintaanLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplatePemeriksaanDokterDetailPermintaanLabs()
    {
        return $this->hasMany(TemplatePemeriksaanDokterDetailPermintaanLab::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[TemplatePemeriksaanDokterPermintaanLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplatePemeriksaanDokterPermintaanLabs()
    {
        return $this->hasMany(TemplatePemeriksaanDokterPermintaanLab::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }
}
