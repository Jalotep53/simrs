<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "template_pemeriksaan_dokter".
 *
 * @property string $no_template
 * @property string|null $kd_dokter
 * @property string|null $keluhan
 * @property string|null $pemeriksaan
 * @property string|null $penilaian
 * @property string $rencana
 * @property string $instruksi
 * @property string|null $evaluasi
 *
 * @property Dokter $kdDokter
 * @property JnsPerawatanLab[] $kdJenisPrws
 * @property JnsPerawatanRadiologi[] $kdJenisPrws0
 * @property JnsPerawatan[] $kdJenisPrws1
 * @property Penyakit[] $kdPenyakits
 * @property Databarang[] $kodeBrngs
 * @property Icd9[] $kodes
 * @property TemplatePemeriksaanDokterDetailPermintaanLab[] $templatePemeriksaanDokterDetailPermintaanLabs
 * @property TemplatePemeriksaanDokterPenyakit[] $templatePemeriksaanDokterPenyakits
 * @property TemplatePemeriksaanDokterPermintaanLab[] $templatePemeriksaanDokterPermintaanLabs
 * @property TemplatePemeriksaanDokterPermintaanRadiologi[] $templatePemeriksaanDokterPermintaanRadiologis
 * @property TemplatePemeriksaanDokterProsedur[] $templatePemeriksaanDokterProsedurs
 * @property TemplatePemeriksaanDokterResepRacikanDetail[] $templatePemeriksaanDokterResepRacikanDetails
 * @property TemplatePemeriksaanDokterResepRacikan[] $templatePemeriksaanDokterResepRacikans
 * @property TemplatePemeriksaanDokterResep[] $templatePemeriksaanDokterReseps
 * @property TemplatePemeriksaanDokterTindakan[] $templatePemeriksaanDokterTindakans
 */
class TemplatePemeriksaanDokter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'template_pemeriksaan_dokter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_template', 'rencana', 'instruksi'], 'required'],
            [['no_template', 'kd_dokter'], 'string', 'max' => 20],
            [['keluhan', 'pemeriksaan', 'penilaian', 'rencana', 'instruksi', 'evaluasi'], 'string', 'max' => 2000],
            [['no_template'], 'unique'],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_template' => 'No Template',
            'kd_dokter' => 'Kd Dokter',
            'keluhan' => 'Keluhan',
            'pemeriksaan' => 'Pemeriksaan',
            'penilaian' => 'Penilaian',
            'rencana' => 'Rencana',
            'instruksi' => 'Instruksi',
            'evaluasi' => 'Evaluasi',
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
     * Gets query for [[KdJenisPrws]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrws()
    {
        return $this->hasMany(JnsPerawatanLab::class, ['kd_jenis_prw' => 'kd_jenis_prw'])->viaTable('template_pemeriksaan_dokter_permintaan_lab', ['no_template' => 'no_template']);
    }

    /**
     * Gets query for [[KdJenisPrws0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrws0()
    {
        return $this->hasMany(JnsPerawatanRadiologi::class, ['kd_jenis_prw' => 'kd_jenis_prw'])->viaTable('template_pemeriksaan_dokter_permintaan_radiologi', ['no_template' => 'no_template']);
    }

    /**
     * Gets query for [[KdJenisPrws1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrws1()
    {
        return $this->hasMany(JnsPerawatan::class, ['kd_jenis_prw' => 'kd_jenis_prw'])->viaTable('template_pemeriksaan_dokter_tindakan', ['no_template' => 'no_template']);
    }

    /**
     * Gets query for [[KdPenyakits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPenyakits()
    {
        return $this->hasMany(Penyakit::class, ['kd_penyakit' => 'kd_penyakit'])->viaTable('template_pemeriksaan_dokter_penyakit', ['no_template' => 'no_template']);
    }

    /**
     * Gets query for [[KodeBrngs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrngs()
    {
        return $this->hasMany(Databarang::class, ['kode_brng' => 'kode_brng'])->viaTable('template_pemeriksaan_dokter_resep', ['no_template' => 'no_template']);
    }

    /**
     * Gets query for [[Kodes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodes()
    {
        return $this->hasMany(Icd9::class, ['kode' => 'kode'])->viaTable('template_pemeriksaan_dokter_prosedur', ['no_template' => 'no_template']);
    }

    /**
     * Gets query for [[TemplatePemeriksaanDokterDetailPermintaanLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplatePemeriksaanDokterDetailPermintaanLabs()
    {
        return $this->hasMany(TemplatePemeriksaanDokterDetailPermintaanLab::class, ['no_template' => 'no_template']);
    }

    /**
     * Gets query for [[TemplatePemeriksaanDokterPenyakits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplatePemeriksaanDokterPenyakits()
    {
        return $this->hasMany(TemplatePemeriksaanDokterPenyakit::class, ['no_template' => 'no_template']);
    }

    /**
     * Gets query for [[TemplatePemeriksaanDokterPermintaanLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplatePemeriksaanDokterPermintaanLabs()
    {
        return $this->hasMany(TemplatePemeriksaanDokterPermintaanLab::class, ['no_template' => 'no_template']);
    }

    /**
     * Gets query for [[TemplatePemeriksaanDokterPermintaanRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplatePemeriksaanDokterPermintaanRadiologis()
    {
        return $this->hasMany(TemplatePemeriksaanDokterPermintaanRadiologi::class, ['no_template' => 'no_template']);
    }

    /**
     * Gets query for [[TemplatePemeriksaanDokterProsedurs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplatePemeriksaanDokterProsedurs()
    {
        return $this->hasMany(TemplatePemeriksaanDokterProsedur::class, ['no_template' => 'no_template']);
    }

    /**
     * Gets query for [[TemplatePemeriksaanDokterResepRacikanDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplatePemeriksaanDokterResepRacikanDetails()
    {
        return $this->hasMany(TemplatePemeriksaanDokterResepRacikanDetail::class, ['no_template' => 'no_template']);
    }

    /**
     * Gets query for [[TemplatePemeriksaanDokterResepRacikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplatePemeriksaanDokterResepRacikans()
    {
        return $this->hasMany(TemplatePemeriksaanDokterResepRacikan::class, ['no_template' => 'no_template']);
    }

    /**
     * Gets query for [[TemplatePemeriksaanDokterReseps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplatePemeriksaanDokterReseps()
    {
        return $this->hasMany(TemplatePemeriksaanDokterResep::class, ['no_template' => 'no_template']);
    }

    /**
     * Gets query for [[TemplatePemeriksaanDokterTindakans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplatePemeriksaanDokterTindakans()
    {
        return $this->hasMany(TemplatePemeriksaanDokterTindakan::class, ['no_template' => 'no_template']);
    }
}
