<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penyakit".
 *
 * @property string $kd_penyakit
 * @property string|null $nm_penyakit
 * @property string|null $ciri_ciri
 * @property string|null $keterangan
 * @property string|null $kd_ktg
 * @property string $status
 *
 * @property DataTb[] $dataTbs
 * @property DiagnosaPasien[] $diagnosaPasiens
 * @property Hemodialisa[] $hemodialisas
 * @property KategoriPenyakit $kdKtg
 * @property Databarang[] $kodeBrngs
 * @property TemplatePemeriksaanDokter[] $noTemplates
 * @property ObatPenyakit[] $obatPenyakits
 * @property PenyakitPd3i $penyakitPd3i
 * @property PerkiraanBiayaRanap[] $perkiraanBiayaRanaps
 * @property RujukMasuk[] $rujukMasuks
 * @property SatuSehatCondition[] $satuSehatConditions
 * @property TemplatePemeriksaanDokterPenyakit[] $templatePemeriksaanDokterPenyakits
 * @property TemporarySurveilensPenyakit[] $temporarySurveilensPenyakits
 * @property TemporarySurveilensPenyakit[] $temporarySurveilensPenyakits0
 */
class Penyakit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penyakit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_penyakit', 'status'], 'required'],
            [['ciri_ciri', 'status'], 'string'],
            [['kd_penyakit'], 'string', 'max' => 15],
            [['nm_penyakit'], 'string', 'max' => 100],
            [['keterangan'], 'string', 'max' => 60],
            [['kd_ktg'], 'string', 'max' => 8],
            [['kd_penyakit'], 'unique'],
            [['kd_ktg'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriPenyakit::class, 'targetAttribute' => ['kd_ktg' => 'kd_ktg']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_penyakit' => 'Kd Penyakit',
            'nm_penyakit' => 'Nm Penyakit',
            'ciri_ciri' => 'Ciri Ciri',
            'keterangan' => 'Keterangan',
            'kd_ktg' => 'Kd Ktg',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[DataTbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataTbs()
    {
        return $this->hasMany(DataTb::class, ['kode_icd_x' => 'kd_penyakit']);
    }

    /**
     * Gets query for [[DiagnosaPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDiagnosaPasiens()
    {
        return $this->hasMany(DiagnosaPasien::class, ['kd_penyakit' => 'kd_penyakit']);
    }

    /**
     * Gets query for [[Hemodialisas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHemodialisas()
    {
        return $this->hasMany(Hemodialisa::class, ['kd_penyakit' => 'kd_penyakit']);
    }

    /**
     * Gets query for [[KdKtg]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdKtg()
    {
        return $this->hasOne(KategoriPenyakit::class, ['kd_ktg' => 'kd_ktg']);
    }

    /**
     * Gets query for [[KodeBrngs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrngs()
    {
        return $this->hasMany(Databarang::class, ['kode_brng' => 'kode_brng'])->viaTable('obat_penyakit', ['kd_penyakit' => 'kd_penyakit']);
    }

    /**
     * Gets query for [[NoTemplates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoTemplates()
    {
        return $this->hasMany(TemplatePemeriksaanDokter::class, ['no_template' => 'no_template'])->viaTable('template_pemeriksaan_dokter_penyakit', ['kd_penyakit' => 'kd_penyakit']);
    }

    /**
     * Gets query for [[ObatPenyakits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObatPenyakits()
    {
        return $this->hasMany(ObatPenyakit::class, ['kd_penyakit' => 'kd_penyakit']);
    }

    /**
     * Gets query for [[PenyakitPd3i]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenyakitPd3i()
    {
        return $this->hasOne(PenyakitPd3i::class, ['kd_penyakit' => 'kd_penyakit']);
    }

    /**
     * Gets query for [[PerkiraanBiayaRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerkiraanBiayaRanaps()
    {
        return $this->hasMany(PerkiraanBiayaRanap::class, ['kd_penyakit' => 'kd_penyakit']);
    }

    /**
     * Gets query for [[RujukMasuks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRujukMasuks()
    {
        return $this->hasMany(RujukMasuk::class, ['kd_penyakit' => 'kd_penyakit']);
    }

    /**
     * Gets query for [[SatuSehatConditions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatConditions()
    {
        return $this->hasMany(SatuSehatCondition::class, ['kd_penyakit' => 'kd_penyakit']);
    }

    /**
     * Gets query for [[TemplatePemeriksaanDokterPenyakits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplatePemeriksaanDokterPenyakits()
    {
        return $this->hasMany(TemplatePemeriksaanDokterPenyakit::class, ['kd_penyakit' => 'kd_penyakit']);
    }

    /**
     * Gets query for [[TemporarySurveilensPenyakits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemporarySurveilensPenyakits()
    {
        return $this->hasMany(TemporarySurveilensPenyakit::class, ['kd_penyakit' => 'kd_penyakit']);
    }

    /**
     * Gets query for [[TemporarySurveilensPenyakits0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemporarySurveilensPenyakits0()
    {
        return $this->hasMany(TemporarySurveilensPenyakit::class, ['kd_penyakit2' => 'kd_penyakit']);
    }
}
