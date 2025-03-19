<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "permintaan_labmb".
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
 * @property JnsPerawatanLab[] $kdJenisPrws
 * @property RegPeriksa $noRawat
 * @property PermintaanDetailPermintaanLabmb[] $permintaanDetailPermintaanLabmbs
 * @property PermintaanPemeriksaanLabmb[] $permintaanPemeriksaanLabmbs
 * @property SatuSehatDiagnosticreportLabMb[] $satuSehatDiagnosticreportLabMbs
 * @property SatuSehatObservationLabMb[] $satuSehatObservationLabMbs
 * @property SatuSehatServicerequestLabMb[] $satuSehatServicerequestLabMbs
 * @property SatuSehatSpecimenLabMb[] $satuSehatSpecimenLabMbs
 */
class PermintaanLabmb extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'permintaan_labmb';
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
            [['dokter_perujuk'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['dokter_perujuk' => 'kd_dokter']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
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
        return $this->hasMany(JnsPerawatanLab::class, ['kd_jenis_prw' => 'kd_jenis_prw'])->viaTable('permintaan_pemeriksaan_labmb', ['noorder' => 'noorder']);
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
     * Gets query for [[PermintaanDetailPermintaanLabmbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanDetailPermintaanLabmbs()
    {
        return $this->hasMany(PermintaanDetailPermintaanLabmb::class, ['noorder' => 'noorder']);
    }

    /**
     * Gets query for [[PermintaanPemeriksaanLabmbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanPemeriksaanLabmbs()
    {
        return $this->hasMany(PermintaanPemeriksaanLabmb::class, ['noorder' => 'noorder']);
    }

    /**
     * Gets query for [[SatuSehatDiagnosticreportLabMbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatDiagnosticreportLabMbs()
    {
        return $this->hasMany(SatuSehatDiagnosticreportLabMb::class, ['noorder' => 'noorder']);
    }

    /**
     * Gets query for [[SatuSehatObservationLabMbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatObservationLabMbs()
    {
        return $this->hasMany(SatuSehatObservationLabMb::class, ['noorder' => 'noorder']);
    }

    /**
     * Gets query for [[SatuSehatServicerequestLabMbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatServicerequestLabMbs()
    {
        return $this->hasMany(SatuSehatServicerequestLabMb::class, ['noorder' => 'noorder']);
    }

    /**
     * Gets query for [[SatuSehatSpecimenLabMbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatSpecimenLabMbs()
    {
        return $this->hasMany(SatuSehatSpecimenLabMb::class, ['noorder' => 'noorder']);
    }
}
