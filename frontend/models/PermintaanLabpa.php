<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "permintaan_labpa".
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
 * @property string|null $pengambilan_bahan
 * @property string|null $diperoleh_dengan
 * @property string|null $lokasi_jaringan
 * @property string|null $diawetkan_dengan
 * @property string|null $pernah_dilakukan_di
 * @property string|null $tanggal_pa_sebelumnya
 * @property string|null $nomor_pa_sebelumnya
 * @property string|null $diagnosa_pa_sebelumnya
 *
 * @property Dokter $dokterPerujuk
 * @property JnsPerawatanLab[] $kdJenisPrws
 * @property RegPeriksa $noRawat
 * @property PermintaanPemeriksaanLabpa[] $permintaanPemeriksaanLabpas
 */
class PermintaanLabpa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'permintaan_labpa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['noorder', 'no_rawat', 'tgl_permintaan', 'jam_permintaan', 'tgl_sampel', 'jam_sampel', 'tgl_hasil', 'jam_hasil', 'dokter_perujuk', 'status', 'informasi_tambahan', 'diagnosa_klinis'], 'required'],
            [['tgl_permintaan', 'jam_permintaan', 'tgl_sampel', 'jam_sampel', 'tgl_hasil', 'jam_hasil', 'pengambilan_bahan', 'tanggal_pa_sebelumnya'], 'safe'],
            [['status'], 'string'],
            [['noorder'], 'string', 'max' => 15],
            [['no_rawat'], 'string', 'max' => 17],
            [['dokter_perujuk', 'nomor_pa_sebelumnya'], 'string', 'max' => 20],
            [['informasi_tambahan'], 'string', 'max' => 60],
            [['diagnosa_klinis'], 'string', 'max' => 80],
            [['diperoleh_dengan', 'lokasi_jaringan', 'diawetkan_dengan'], 'string', 'max' => 40],
            [['pernah_dilakukan_di', 'diagnosa_pa_sebelumnya'], 'string', 'max' => 100],
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
            'pengambilan_bahan' => 'Pengambilan Bahan',
            'diperoleh_dengan' => 'Diperoleh Dengan',
            'lokasi_jaringan' => 'Lokasi Jaringan',
            'diawetkan_dengan' => 'Diawetkan Dengan',
            'pernah_dilakukan_di' => 'Pernah Dilakukan Di',
            'tanggal_pa_sebelumnya' => 'Tanggal Pa Sebelumnya',
            'nomor_pa_sebelumnya' => 'Nomor Pa Sebelumnya',
            'diagnosa_pa_sebelumnya' => 'Diagnosa Pa Sebelumnya',
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
        return $this->hasMany(JnsPerawatanLab::class, ['kd_jenis_prw' => 'kd_jenis_prw'])->viaTable('permintaan_pemeriksaan_labpa', ['noorder' => 'noorder']);
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
     * Gets query for [[PermintaanPemeriksaanLabpas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanPemeriksaanLabpas()
    {
        return $this->hasMany(PermintaanPemeriksaanLabpa::class, ['noorder' => 'noorder']);
    }
}
