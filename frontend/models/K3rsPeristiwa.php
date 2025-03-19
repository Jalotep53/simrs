<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "k3rs_peristiwa".
 *
 * @property string $no_k3rs
 * @property string $tgl_insiden
 * @property string $waktu_insiden
 * @property string $kode_pekerjaan
 * @property string $tgl_pelaporan
 * @property string $waktu_pelaporan
 * @property string $kode_lokasi
 * @property string $kronologi_kejadian
 * @property string $kode_penyebab
 * @property string $nik
 * @property string $kategori_cidera
 * @property string $kode_cidera
 * @property string $kode_luka
 * @property string $kode_bagian
 * @property int $lt
 * @property string $penyebab_langsung_kondisi
 * @property string $penyebab_langsung_tindakan
 * @property string $penyebab_tidak_langsung_pribadi
 * @property string $penyebab_tidak_langsung_pekerjaan
 * @property string $barang_bukti
 * @property string $kode_dampak
 * @property string $nik_pelapor
 * @property string $perbaikan_jenis_tindakan
 * @property string $perbaikan_rencana_tindakan
 * @property string $perbaikan_target
 * @property string $perbaikan_wewenang
 * @property string $nik_timk3
 * @property string $catatan
 *
 * @property K3rsBagianTubuh $kodeBagian
 * @property K3rsJenisCidera $kodeCidera
 * @property K3rsDampakCidera $kodeDampak
 * @property K3rsLokasiKejadian $kodeLokasi
 * @property K3rsJenisLuka $kodeLuka
 * @property K3rsJenisPekerjaan $kodePekerjaan
 * @property K3rsPenyebab $kodePenyebab
 * @property Pegawai $nik0
 * @property Pegawai $nikPelapor
 * @property Pegawai $nikTimk3
 */
class K3rsPeristiwa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'k3rs_peristiwa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_k3rs', 'tgl_insiden', 'waktu_insiden', 'kode_pekerjaan', 'tgl_pelaporan', 'waktu_pelaporan', 'kode_lokasi', 'kronologi_kejadian', 'kode_penyebab', 'nik', 'kategori_cidera', 'kode_cidera', 'kode_luka', 'kode_bagian', 'lt', 'penyebab_langsung_kondisi', 'penyebab_langsung_tindakan', 'penyebab_tidak_langsung_pribadi', 'penyebab_tidak_langsung_pekerjaan', 'barang_bukti', 'kode_dampak', 'nik_pelapor', 'perbaikan_jenis_tindakan', 'perbaikan_rencana_tindakan', 'perbaikan_target', 'perbaikan_wewenang', 'nik_timk3', 'catatan'], 'required'],
            [['tgl_insiden', 'waktu_insiden', 'tgl_pelaporan', 'waktu_pelaporan', 'perbaikan_target'], 'safe'],
            [['kategori_cidera', 'barang_bukti', 'perbaikan_jenis_tindakan'], 'string'],
            [['lt'], 'integer'],
            [['no_k3rs', 'nik', 'nik_pelapor', 'nik_timk3'], 'string', 'max' => 20],
            [['kode_pekerjaan', 'kode_lokasi', 'kode_penyebab', 'kode_cidera', 'kode_luka', 'kode_bagian', 'kode_dampak'], 'string', 'max' => 5],
            [['kronologi_kejadian'], 'string', 'max' => 300],
            [['penyebab_langsung_kondisi', 'penyebab_langsung_tindakan', 'penyebab_tidak_langsung_pribadi', 'penyebab_tidak_langsung_pekerjaan', 'perbaikan_wewenang'], 'string', 'max' => 100],
            [['perbaikan_rencana_tindakan', 'catatan'], 'string', 'max' => 200],
            [['no_k3rs'], 'unique'],
            [['kode_cidera'], 'exist', 'skipOnError' => true, 'targetClass' => K3rsJenisCidera::class, 'targetAttribute' => ['kode_cidera' => 'kode_cidera']],
            [['kode_bagian'], 'exist', 'skipOnError' => true, 'targetClass' => K3rsBagianTubuh::class, 'targetAttribute' => ['kode_bagian' => 'kode_bagian']],
            [['kode_dampak'], 'exist', 'skipOnError' => true, 'targetClass' => K3rsDampakCidera::class, 'targetAttribute' => ['kode_dampak' => 'kode_dampak']],
            [['kode_lokasi'], 'exist', 'skipOnError' => true, 'targetClass' => K3rsLokasiKejadian::class, 'targetAttribute' => ['kode_lokasi' => 'kode_lokasi']],
            [['kode_luka'], 'exist', 'skipOnError' => true, 'targetClass' => K3rsJenisLuka::class, 'targetAttribute' => ['kode_luka' => 'kode_luka']],
            [['kode_pekerjaan'], 'exist', 'skipOnError' => true, 'targetClass' => K3rsJenisPekerjaan::class, 'targetAttribute' => ['kode_pekerjaan' => 'kode_pekerjaan']],
            [['kode_penyebab'], 'exist', 'skipOnError' => true, 'targetClass' => K3rsPenyebab::class, 'targetAttribute' => ['kode_penyebab' => 'kode_penyebab']],
            [['nik'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nik' => 'nik']],
            [['nik_pelapor'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nik_pelapor' => 'nik']],
            [['nik_timk3'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nik_timk3' => 'nik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_k3rs' => 'No K3rs',
            'tgl_insiden' => 'Tgl Insiden',
            'waktu_insiden' => 'Waktu Insiden',
            'kode_pekerjaan' => 'Kode Pekerjaan',
            'tgl_pelaporan' => 'Tgl Pelaporan',
            'waktu_pelaporan' => 'Waktu Pelaporan',
            'kode_lokasi' => 'Kode Lokasi',
            'kronologi_kejadian' => 'Kronologi Kejadian',
            'kode_penyebab' => 'Kode Penyebab',
            'nik' => 'Nik',
            'kategori_cidera' => 'Kategori Cidera',
            'kode_cidera' => 'Kode Cidera',
            'kode_luka' => 'Kode Luka',
            'kode_bagian' => 'Kode Bagian',
            'lt' => 'Lt',
            'penyebab_langsung_kondisi' => 'Penyebab Langsung Kondisi',
            'penyebab_langsung_tindakan' => 'Penyebab Langsung Tindakan',
            'penyebab_tidak_langsung_pribadi' => 'Penyebab Tidak Langsung Pribadi',
            'penyebab_tidak_langsung_pekerjaan' => 'Penyebab Tidak Langsung Pekerjaan',
            'barang_bukti' => 'Barang Bukti',
            'kode_dampak' => 'Kode Dampak',
            'nik_pelapor' => 'Nik Pelapor',
            'perbaikan_jenis_tindakan' => 'Perbaikan Jenis Tindakan',
            'perbaikan_rencana_tindakan' => 'Perbaikan Rencana Tindakan',
            'perbaikan_target' => 'Perbaikan Target',
            'perbaikan_wewenang' => 'Perbaikan Wewenang',
            'nik_timk3' => 'Nik Timk3',
            'catatan' => 'Catatan',
        ];
    }

    /**
     * Gets query for [[KodeBagian]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBagian()
    {
        return $this->hasOne(K3rsBagianTubuh::class, ['kode_bagian' => 'kode_bagian']);
    }

    /**
     * Gets query for [[KodeCidera]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeCidera()
    {
        return $this->hasOne(K3rsJenisCidera::class, ['kode_cidera' => 'kode_cidera']);
    }

    /**
     * Gets query for [[KodeDampak]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeDampak()
    {
        return $this->hasOne(K3rsDampakCidera::class, ['kode_dampak' => 'kode_dampak']);
    }

    /**
     * Gets query for [[KodeLokasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeLokasi()
    {
        return $this->hasOne(K3rsLokasiKejadian::class, ['kode_lokasi' => 'kode_lokasi']);
    }

    /**
     * Gets query for [[KodeLuka]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeLuka()
    {
        return $this->hasOne(K3rsJenisLuka::class, ['kode_luka' => 'kode_luka']);
    }

    /**
     * Gets query for [[KodePekerjaan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodePekerjaan()
    {
        return $this->hasOne(K3rsJenisPekerjaan::class, ['kode_pekerjaan' => 'kode_pekerjaan']);
    }

    /**
     * Gets query for [[KodePenyebab]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodePenyebab()
    {
        return $this->hasOne(K3rsPenyebab::class, ['kode_penyebab' => 'kode_penyebab']);
    }

    /**
     * Gets query for [[Nik0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNik0()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[NikPelapor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNikPelapor()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nik_pelapor']);
    }

    /**
     * Gets query for [[NikTimk3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNikTimk3()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nik_timk3']);
    }
}
