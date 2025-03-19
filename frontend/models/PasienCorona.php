<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pasien_corona".
 *
 * @property string|null $no_pengenal
 * @property string $no_rkm_medis
 * @property string|null $inisial
 * @property string|null $nama_lengkap
 * @property string|null $tgl_masuk
 * @property string|null $kode_jk
 * @property string|null $nama_jk
 * @property string|null $tgl_lahir
 * @property string|null $kode_kewarganegaraan
 * @property string|null $nama_kewarganegaraan
 * @property string|null $kode_penularan
 * @property string|null $sumber_penularan
 * @property string|null $kd_kelurahan
 * @property string|null $nm_kelurahan
 * @property string|null $kd_kecamatan
 * @property string|null $nm_kecamatan
 * @property string|null $kd_kabupaten
 * @property string|null $nm_kabupaten
 * @property string|null $kd_propinsi
 * @property string|null $nm_propinsi
 * @property string|null $tgl_keluar
 * @property string|null $kode_statuskeluar
 * @property string|null $nama_statuskeluar
 * @property string|null $tgl_lapor
 * @property string|null $kode_statusrawat
 * @property string|null $nama_statusrawat
 * @property string|null $kode_statusisolasi
 * @property string|null $nama_statusisolasi
 * @property string|null $email
 * @property string|null $notelp
 * @property string|null $sebab_kematian
 * @property string $kode_jenis_pasien
 * @property string $nama_jenis_pasien
 *
 * @property DiagnosaCorona[] $diagnosaCoronas
 * @property Pasien $noRkmMedis
 */
class PasienCorona extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien_corona';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis', 'kode_jenis_pasien', 'nama_jenis_pasien'], 'required'],
            [['tgl_masuk', 'tgl_lahir', 'tgl_keluar', 'tgl_lapor'], 'safe'],
            [['no_pengenal', 'nm_kelurahan', 'nm_kecamatan', 'nm_kabupaten', 'nm_propinsi'], 'string', 'max' => 20],
            [['no_rkm_medis', 'inisial', 'kd_kelurahan'], 'string', 'max' => 15],
            [['nama_lengkap', 'sumber_penularan', 'nama_statuskeluar', 'nama_statusrawat', 'notelp', 'nama_jenis_pasien'], 'string', 'max' => 40],
            [['kode_jk'], 'string', 'max' => 1],
            [['nama_jk', 'kd_kecamatan'], 'string', 'max' => 10],
            [['kode_kewarganegaraan', 'kode_penularan', 'kode_statuskeluar', 'kode_statusrawat', 'kode_statusisolasi', 'kode_jenis_pasien'], 'string', 'max' => 5],
            [['nama_kewarganegaraan'], 'string', 'max' => 25],
            [['kd_kabupaten'], 'string', 'max' => 6],
            [['kd_propinsi'], 'string', 'max' => 3],
            [['nama_statusisolasi'], 'string', 'max' => 100],
            [['email'], 'string', 'max' => 50],
            [['sebab_kematian'], 'string', 'max' => 60],
            [['no_rkm_medis'], 'unique'],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_pengenal' => 'No Pengenal',
            'no_rkm_medis' => 'No Rkm Medis',
            'inisial' => 'Inisial',
            'nama_lengkap' => 'Nama Lengkap',
            'tgl_masuk' => 'Tgl Masuk',
            'kode_jk' => 'Kode Jk',
            'nama_jk' => 'Nama Jk',
            'tgl_lahir' => 'Tgl Lahir',
            'kode_kewarganegaraan' => 'Kode Kewarganegaraan',
            'nama_kewarganegaraan' => 'Nama Kewarganegaraan',
            'kode_penularan' => 'Kode Penularan',
            'sumber_penularan' => 'Sumber Penularan',
            'kd_kelurahan' => 'Kd Kelurahan',
            'nm_kelurahan' => 'Nm Kelurahan',
            'kd_kecamatan' => 'Kd Kecamatan',
            'nm_kecamatan' => 'Nm Kecamatan',
            'kd_kabupaten' => 'Kd Kabupaten',
            'nm_kabupaten' => 'Nm Kabupaten',
            'kd_propinsi' => 'Kd Propinsi',
            'nm_propinsi' => 'Nm Propinsi',
            'tgl_keluar' => 'Tgl Keluar',
            'kode_statuskeluar' => 'Kode Statuskeluar',
            'nama_statuskeluar' => 'Nama Statuskeluar',
            'tgl_lapor' => 'Tgl Lapor',
            'kode_statusrawat' => 'Kode Statusrawat',
            'nama_statusrawat' => 'Nama Statusrawat',
            'kode_statusisolasi' => 'Kode Statusisolasi',
            'nama_statusisolasi' => 'Nama Statusisolasi',
            'email' => 'Email',
            'notelp' => 'Notelp',
            'sebab_kematian' => 'Sebab Kematian',
            'kode_jenis_pasien' => 'Kode Jenis Pasien',
            'nama_jenis_pasien' => 'Nama Jenis Pasien',
        ];
    }

    /**
     * Gets query for [[DiagnosaCoronas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDiagnosaCoronas()
    {
        return $this->hasMany(DiagnosaCorona::class, ['no_rkm_medis' => 'no_rkm_medis']);
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
