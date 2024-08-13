<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jns_perawatan".
 *
 * @property string $kd_jenis_prw
 * @property string|null $nm_perawatan
 * @property string|null $kd_kategori
 * @property float|null $material
 * @property float $bhp
 * @property float|null $tarif_tindakandr
 * @property float|null $tarif_tindakanpr
 * @property float|null $kso
 * @property float|null $menejemen
 * @property float|null $total_byrdr
 * @property float|null $total_byrpr
 * @property float $total_byrdrpr
 * @property string $kd_pj
 * @property string $kd_poli
 * @property string $status
 *
 * @property BayarRawatJlDrpr[] $bayarRawatJlDrprs
 * @property BayarRawatJlDr[] $bayarRawatJlDrs
 * @property InhealthTindakanRalan $inhealthTindakanRalan
 * @property KategoriPerawatan $kdKategori
 * @property Penjab $kdPj
 * @property Penjab[] $kdPjs
 * @property Poliklinik $kdPoli
 * @property MapingTindakanPcare $mapingTindakanPcare
 * @property MatrikAkunJnsPerawatan $matrikAkunJnsPerawatan
 * @property TemplatePemeriksaanDokter[] $noTemplates
 * @property RawatJlDrpr[] $rawatJlDrprs
 * @property RawatJlDr[] $rawatJlDrs
 * @property RawatJlPr[] $rawatJlPrs
 * @property SetOtomatisTindakanRalanDokterpetugas[] $setOtomatisTindakanRalanDokterpetugas
 * @property SetOtomatisTindakanRalanPetugas[] $setOtomatisTindakanRalanPetugas
 * @property SetOtomatisTindakanRalan[] $setOtomatisTindakanRalans
 * @property SetTarifOnline $setTarifOnline
 * @property TemplatePemeriksaanDokterTindakan[] $templatePemeriksaanDokterTindakans
 */
class JnsPerawatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jns_perawatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis_prw', 'bhp', 'total_byrdrpr', 'kd_pj', 'kd_poli', 'status'], 'required'],
            [['material', 'bhp', 'tarif_tindakandr', 'tarif_tindakanpr', 'kso', 'menejemen', 'total_byrdr', 'total_byrpr', 'total_byrdrpr'], 'number'],
            [['status'], 'string'],
            [['kd_jenis_prw'], 'string', 'max' => 15],
            [['nm_perawatan'], 'string', 'max' => 80],
            [['kd_kategori', 'kd_poli'], 'string', 'max' => 5],
            [['kd_pj'], 'string', 'max' => 3],
            [['kd_jenis_prw'], 'unique'],
            [['kd_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriPerawatan::class, 'targetAttribute' => ['kd_kategori' => 'kd_kategori']],
            [['kd_pj'], 'exist', 'skipOnError' => true, 'targetClass' => Penjab::class, 'targetAttribute' => ['kd_pj' => 'kd_pj']],
            [['kd_poli'], 'exist', 'skipOnError' => true, 'targetClass' => Poliklinik::class, 'targetAttribute' => ['kd_poli' => 'kd_poli']],
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
            'kd_kategori' => 'Kd Kategori',
            'material' => 'Material',
            'bhp' => 'Bhp',
            'tarif_tindakandr' => 'Tarif Tindakandr',
            'tarif_tindakanpr' => 'Tarif Tindakanpr',
            'kso' => 'Kso',
            'menejemen' => 'Menejemen',
            'total_byrdr' => 'Total Byrdr',
            'total_byrpr' => 'Total Byrpr',
            'total_byrdrpr' => 'Total Byrdrpr',
            'kd_pj' => 'Kd Pj',
            'kd_poli' => 'Kd Poli',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[BayarRawatJlDrprs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarRawatJlDrprs()
    {
        return $this->hasMany(BayarRawatJlDrpr::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[BayarRawatJlDrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarRawatJlDrs()
    {
        return $this->hasMany(BayarRawatJlDr::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[InhealthTindakanRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInhealthTindakanRalan()
    {
        return $this->hasOne(InhealthTindakanRalan::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[KdKategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdKategori()
    {
        return $this->hasOne(KategoriPerawatan::class, ['kd_kategori' => 'kd_kategori']);
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
     * Gets query for [[KdPjs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPjs()
    {
        return $this->hasMany(Penjab::class, ['kd_pj' => 'kd_pj'])->viaTable('set_otomatis_tindakan_ralan_petugas', ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[KdPoli]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPoli()
    {
        return $this->hasOne(Poliklinik::class, ['kd_poli' => 'kd_poli']);
    }

    /**
     * Gets query for [[MapingTindakanPcare]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMapingTindakanPcare()
    {
        return $this->hasOne(MapingTindakanPcare::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatan()
    {
        return $this->hasOne(MatrikAkunJnsPerawatan::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[NoTemplates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoTemplates()
    {
        return $this->hasMany(TemplatePemeriksaanDokter::class, ['no_template' => 'no_template'])->viaTable('template_pemeriksaan_dokter_tindakan', ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[RawatJlDrprs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatJlDrprs()
    {
        return $this->hasMany(RawatJlDrpr::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[RawatJlDrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatJlDrs()
    {
        return $this->hasMany(RawatJlDr::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[RawatJlPrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatJlPrs()
    {
        return $this->hasMany(RawatJlPr::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[SetOtomatisTindakanRalanDokterpetugas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetOtomatisTindakanRalanDokterpetugas()
    {
        return $this->hasMany(SetOtomatisTindakanRalanDokterpetugas::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[SetOtomatisTindakanRalanPetugas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetOtomatisTindakanRalanPetugas()
    {
        return $this->hasMany(SetOtomatisTindakanRalanPetugas::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[SetOtomatisTindakanRalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetOtomatisTindakanRalans()
    {
        return $this->hasMany(SetOtomatisTindakanRalan::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[SetTarifOnline]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetTarifOnline()
    {
        return $this->hasOne(SetTarifOnline::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[TemplatePemeriksaanDokterTindakans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplatePemeriksaanDokterTindakans()
    {
        return $this->hasMany(TemplatePemeriksaanDokterTindakan::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }
}
