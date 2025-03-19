<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "data_tb".
 *
 * @property string $no_rawat
 * @property string|null $id_tb_03
 * @property string|null $id_periode_laporan
 * @property string|null $tanggal_buat_laporan
 * @property string|null $tahun_buat_laporan
 * @property int|null $kd_wasor
 * @property int|null $noregkab
 * @property string|null $id_propinsi
 * @property string|null $kd_kabupaten
 * @property string|null $id_kecamatan
 * @property string|null $id_kelurahan
 * @property string|null $nama_rujukan
 * @property string|null $sebutkan1
 * @property string|null $tipe_diagnosis
 * @property string|null $klasifikasi_lokasi_anatomi
 * @property string|null $klasifikasi_riwayat_pengobatan
 * @property string|null $klasifikasi_status_hiv
 * @property string|null $total_skoring_anak
 * @property string|null $konfirmasiSkoring5
 * @property string|null $konfirmasiSkoring6
 * @property string|null $tanggal_mulai_pengobatan
 * @property string|null $paduan_oat
 * @property string|null $sumber_obat
 * @property string|null $sebutkan
 * @property string|null $sebelum_pengobatan_hasil_mikroskopis
 * @property string|null $sebelum_pengobatan_hasil_tes_cepat
 * @property string|null $sebelum_pengobatan_hasil_biakan
 * @property string|null $noreglab_bulan_2
 * @property string|null $hasil_mikroskopis_bulan_2
 * @property string|null $noreglab_bulan_3
 * @property string|null $hasil_mikroskopis_bulan_3
 * @property string|null $noreglab_bulan_5
 * @property string|null $hasil_mikroskopis_bulan_5
 * @property string|null $akhir_pengobatan_noreglab
 * @property string|null $akhir_pengobatan_hasil_mikroskopis
 * @property string|null $tanggal_hasil_akhir_pengobatan
 * @property string|null $hasil_akhir_pengobatan
 * @property string|null $tanggal_dianjurkan_tes
 * @property string|null $tanggal_tes_hiv
 * @property string|null $hasil_tes_hiv
 * @property string|null $ppk
 * @property string|null $art
 * @property string|null $tb_dm
 * @property string|null $terapi_dm
 * @property string|null $pindah_ro
 * @property string|null $status_pengobatan
 * @property string|null $foto_toraks
 * @property string|null $toraks_tdk_dilakukan
 * @property string|null $keterangan
 * @property string|null $kode_icd_x
 *
 * @property Penyakit $kodeIcdX
 * @property RegPeriksa $noRawat
 */
class DataTb extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_tb';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat'], 'required'],
            [['id_periode_laporan', 'nama_rujukan', 'tipe_diagnosis', 'klasifikasi_lokasi_anatomi', 'klasifikasi_riwayat_pengobatan', 'klasifikasi_status_hiv', 'total_skoring_anak', 'konfirmasiSkoring5', 'konfirmasiSkoring6', 'sumber_obat', 'sebelum_pengobatan_hasil_mikroskopis', 'sebelum_pengobatan_hasil_tes_cepat', 'sebelum_pengobatan_hasil_biakan', 'hasil_mikroskopis_bulan_2', 'hasil_mikroskopis_bulan_3', 'hasil_mikroskopis_bulan_5', 'akhir_pengobatan_hasil_mikroskopis', 'hasil_akhir_pengobatan', 'hasil_tes_hiv', 'ppk', 'art', 'tb_dm', 'terapi_dm', 'pindah_ro', 'status_pengobatan', 'foto_toraks', 'toraks_tdk_dilakukan'], 'string'],
            [['tanggal_buat_laporan', 'tahun_buat_laporan', 'tanggal_mulai_pengobatan', 'tanggal_hasil_akhir_pengobatan', 'tanggal_dianjurkan_tes', 'tanggal_tes_hiv'], 'safe'],
            [['kd_wasor', 'noregkab'], 'integer'],
            [['no_rawat'], 'string', 'max' => 17],
            [['id_tb_03'], 'string', 'max' => 30],
            [['id_propinsi', 'kd_kabupaten', 'id_kecamatan', 'id_kelurahan', 'noreglab_bulan_2', 'noreglab_bulan_3', 'noreglab_bulan_5', 'akhir_pengobatan_noreglab', 'kode_icd_x'], 'string', 'max' => 15],
            [['sebutkan1', 'keterangan'], 'string', 'max' => 100],
            [['paduan_oat', 'sebutkan'], 'string', 'max' => 500],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kode_icd_x'], 'exist', 'skipOnError' => true, 'targetClass' => Penyakit::class, 'targetAttribute' => ['kode_icd_x' => 'kd_penyakit']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'id_tb_03' => 'Id Tb 03',
            'id_periode_laporan' => 'Id Periode Laporan',
            'tanggal_buat_laporan' => 'Tanggal Buat Laporan',
            'tahun_buat_laporan' => 'Tahun Buat Laporan',
            'kd_wasor' => 'Kd Wasor',
            'noregkab' => 'Noregkab',
            'id_propinsi' => 'Id Propinsi',
            'kd_kabupaten' => 'Kd Kabupaten',
            'id_kecamatan' => 'Id Kecamatan',
            'id_kelurahan' => 'Id Kelurahan',
            'nama_rujukan' => 'Nama Rujukan',
            'sebutkan1' => 'Sebutkan1',
            'tipe_diagnosis' => 'Tipe Diagnosis',
            'klasifikasi_lokasi_anatomi' => 'Klasifikasi Lokasi Anatomi',
            'klasifikasi_riwayat_pengobatan' => 'Klasifikasi Riwayat Pengobatan',
            'klasifikasi_status_hiv' => 'Klasifikasi Status Hiv',
            'total_skoring_anak' => 'Total Skoring Anak',
            'konfirmasiSkoring5' => 'Konfirmasi Skoring5',
            'konfirmasiSkoring6' => 'Konfirmasi Skoring6',
            'tanggal_mulai_pengobatan' => 'Tanggal Mulai Pengobatan',
            'paduan_oat' => 'Paduan Oat',
            'sumber_obat' => 'Sumber Obat',
            'sebutkan' => 'Sebutkan',
            'sebelum_pengobatan_hasil_mikroskopis' => 'Sebelum Pengobatan Hasil Mikroskopis',
            'sebelum_pengobatan_hasil_tes_cepat' => 'Sebelum Pengobatan Hasil Tes Cepat',
            'sebelum_pengobatan_hasil_biakan' => 'Sebelum Pengobatan Hasil Biakan',
            'noreglab_bulan_2' => 'Noreglab Bulan 2',
            'hasil_mikroskopis_bulan_2' => 'Hasil Mikroskopis Bulan 2',
            'noreglab_bulan_3' => 'Noreglab Bulan 3',
            'hasil_mikroskopis_bulan_3' => 'Hasil Mikroskopis Bulan 3',
            'noreglab_bulan_5' => 'Noreglab Bulan 5',
            'hasil_mikroskopis_bulan_5' => 'Hasil Mikroskopis Bulan 5',
            'akhir_pengobatan_noreglab' => 'Akhir Pengobatan Noreglab',
            'akhir_pengobatan_hasil_mikroskopis' => 'Akhir Pengobatan Hasil Mikroskopis',
            'tanggal_hasil_akhir_pengobatan' => 'Tanggal Hasil Akhir Pengobatan',
            'hasil_akhir_pengobatan' => 'Hasil Akhir Pengobatan',
            'tanggal_dianjurkan_tes' => 'Tanggal Dianjurkan Tes',
            'tanggal_tes_hiv' => 'Tanggal Tes Hiv',
            'hasil_tes_hiv' => 'Hasil Tes Hiv',
            'ppk' => 'Ppk',
            'art' => 'Art',
            'tb_dm' => 'Tb Dm',
            'terapi_dm' => 'Terapi Dm',
            'pindah_ro' => 'Pindah Ro',
            'status_pengobatan' => 'Status Pengobatan',
            'foto_toraks' => 'Foto Toraks',
            'toraks_tdk_dilakukan' => 'Toraks Tdk Dilakukan',
            'keterangan' => 'Keterangan',
            'kode_icd_x' => 'Kode Icd X',
        ];
    }

    /**
     * Gets query for [[KodeIcdX]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeIcdX()
    {
        return $this->hasOne(Penyakit::class, ['kd_penyakit' => 'kode_icd_x']);
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
}
