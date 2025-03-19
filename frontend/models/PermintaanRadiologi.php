<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "permintaan_radiologi".
 *
 * @property string $noorder
 * @property string $no_rawat
 * @property string $tgl_permintaan
 * @property string $jam_permintaan
 * @property string $tgl_sampel
 * @property string $jam_sampel
 * @property string $tgl_hasil
 * @property string $jam_hasil
 * @property string $dokter_perujuk
 * @property string $status
 * @property string $informasi_tambahan
 * @property string $diagnosa_klinis
 *
 * @property Dokter $dokterPerujuk
 * @property JnsPerawatanRadiologi[] $kdJenisPrws
 * @property JnsPerawatanRadiologi[] $kdJenisPrws0
 * @property JnsPerawatanRadiologi[] $kdJenisPrws1
 * @property JnsPerawatanRadiologi[] $kdJenisPrws2
 * @property JnsPerawatanRadiologi[] $kdJenisPrws3
 * @property RegPeriksa $noRawat
 * @property PermintaanPemeriksaanRadiologi[] $permintaanPemeriksaanRadiologis
 * @property SatuSehatDiagnosticreportRadiologi[] $satuSehatDiagnosticreportRadiologis
 * @property SatuSehatObservationRadiologi[] $satuSehatObservationRadiologis
 * @property SatuSehatServicerequestRadiologi[] $satuSehatServicerequestRadiologis
 * @property SatuSehatSpecimenRadiologi[] $satuSehatSpecimenRadiologis
 */
class PermintaanRadiologi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'permintaan_radiologi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['noorder', 'no_rawat', 'tgl_permintaan', 'jam_permintaan', 'tgl_sampel', 'jam_sampel', 'tgl_hasil', 'jam_hasil', 'dokter_perujuk', 'status', 'informasi_tambahan', 'diagnosa_klinis'], 'required'],
            [['tgl_permintaan', 'jam_permintaan', 'tgl_sampel', 'jam_sampel', 'tgl_hasil', 'jam_hasil'], 'safe'],
            [['status'], 'string'],
            [['noorder'], 'string', 'max' => 15],
            [['no_rawat'], 'string', 'max' => 17],
            [['dokter_perujuk'], 'string', 'max' => 20],
            [['informasi_tambahan'], 'string', 'max' => 60],
            [['diagnosa_klinis'], 'string', 'max' => 80],
            [['noorder'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['dokter_perujuk'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['dokter_perujuk' => 'kd_dokter']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'noorder' => 'Noorder',
            'no_rawat' => 'No Rawat',
            'tgl_permintaan' => 'Tgl Permintaan',
            'jam_permintaan' => 'Jam Permintaan',
            'tgl_sampel' => 'Tgl Sampel',
            'jam_sampel' => 'Jam Sampel',
            'tgl_hasil' => 'Tgl Hasil',
            'jam_hasil' => 'Jam Hasil',
            'dokter_perujuk' => 'Dokter Perujuk',
            'status' => 'Status',
            'informasi_tambahan' => 'Informasi Tambahan',
            'diagnosa_klinis' => 'Diagnosa Klinis',
        ];
    }

    /**
     * Gets query for [[DokterPerujuk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDokterPerujuk()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'dokter_perujuk']);
    }

    /**
     * Gets query for [[KdJenisPrws]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrws()
    {
        return $this->hasMany(JnsPerawatanRadiologi::class, ['kd_jenis_prw' => 'kd_jenis_prw'])->viaTable('permintaan_pemeriksaan_radiologi', ['noorder' => 'noorder']);
    }

    /**
     * Gets query for [[KdJenisPrws0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrws0()
    {
        return $this->hasMany(JnsPerawatanRadiologi::class, ['kd_jenis_prw' => 'kd_jenis_prw'])->viaTable('satu_sehat_diagnosticreport_radiologi', ['noorder' => 'noorder']);
    }

    /**
     * Gets query for [[KdJenisPrws1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrws1()
    {
        return $this->hasMany(JnsPerawatanRadiologi::class, ['kd_jenis_prw' => 'kd_jenis_prw'])->viaTable('satu_sehat_observation_radiologi', ['noorder' => 'noorder']);
    }

    /**
     * Gets query for [[KdJenisPrws2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrws2()
    {
        return $this->hasMany(JnsPerawatanRadiologi::class, ['kd_jenis_prw' => 'kd_jenis_prw'])->viaTable('satu_sehat_servicerequest_radiologi', ['noorder' => 'noorder']);
    }

    /**
     * Gets query for [[KdJenisPrws3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrws3()
    {
        return $this->hasMany(JnsPerawatanRadiologi::class, ['kd_jenis_prw' => 'kd_jenis_prw'])->viaTable('satu_sehat_specimen_radiologi', ['noorder' => 'noorder']);
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

    /**
     * Gets query for [[PermintaanPemeriksaanRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanPemeriksaanRadiologis()
    {
        return $this->hasMany(PermintaanPemeriksaanRadiologi::class, ['noorder' => 'noorder']);
    }

    /**
     * Gets query for [[SatuSehatDiagnosticreportRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatDiagnosticreportRadiologis()
    {
        return $this->hasMany(SatuSehatDiagnosticreportRadiologi::class, ['noorder' => 'noorder']);
    }

    /**
     * Gets query for [[SatuSehatObservationRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatObservationRadiologis()
    {
        return $this->hasMany(SatuSehatObservationRadiologi::class, ['noorder' => 'noorder']);
    }

    /**
     * Gets query for [[SatuSehatServicerequestRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatServicerequestRadiologis()
    {
        return $this->hasMany(SatuSehatServicerequestRadiologi::class, ['noorder' => 'noorder']);
    }

    /**
     * Gets query for [[SatuSehatSpecimenRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatSpecimenRadiologis()
    {
        return $this->hasMany(SatuSehatSpecimenRadiologi::class, ['noorder' => 'noorder']);
    }
}
