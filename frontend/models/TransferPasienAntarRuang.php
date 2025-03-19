<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "transfer_pasien_antar_ruang".
 *
 * @property string $no_rawat
 * @property string $tanggal_masuk
 * @property string|null $tanggal_pindah
 * @property string|null $asal_ruang
 * @property string|null $ruang_selanjutnya
 * @property string|null $diagnosa_utama
 * @property string|null $diagnosa_sekunder
 * @property string|null $indikasi_pindah_ruang
 * @property string|null $keterangan_indikasi_pindah_ruang
 * @property string|null $prosedur_yang_sudah_dilakukan
 * @property string|null $obat_yang_telah_diberikan
 * @property string|null $metode_pemindahan_pasien
 * @property string|null $peralatan_yang_menyertai
 * @property string|null $keterangan_peralatan_yang_menyertai
 * @property string|null $pemeriksaan_penunjang_yang_dilakukan
 * @property string|null $pasien_keluarga_menyetujui
 * @property string|null $nama_menyetujui
 * @property string|null $hubungan_menyetujui
 * @property string|null $keluhan_utama_sebelum_transfer
 * @property string|null $keadaan_umum_sebelum_transfer
 * @property string|null $td_sebelum_transfer
 * @property string|null $nadi_sebelum_transfer
 * @property string|null $rr_sebelum_transfer
 * @property string|null $suhu_sebelum_transfer
 * @property string|null $keluhan_utama_sesudah_transfer
 * @property string|null $keadaan_umum_sesudah_transfer
 * @property string|null $td_sesudah_transfer
 * @property string|null $nadi_sesudah_transfer
 * @property string|null $rr_sesudah_transfer
 * @property string|null $suhu_sesudah_transfer
 * @property string $nip_menyerahkan
 * @property string $nip_menerima
 *
 * @property Petugas $nipMenerima
 * @property Petugas $nipMenyerahkan
 * @property RegPeriksa $noRawat
 */
class TransferPasienAntarRuang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transfer_pasien_antar_ruang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal_masuk', 'nip_menyerahkan', 'nip_menerima'], 'required'],
            [['tanggal_masuk', 'tanggal_pindah'], 'safe'],
            [['indikasi_pindah_ruang', 'metode_pemindahan_pasien', 'peralatan_yang_menyertai', 'pasien_keluarga_menyetujui', 'hubungan_menyetujui', 'keadaan_umum_sebelum_transfer', 'keadaan_umum_sesudah_transfer'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['asal_ruang', 'ruang_selanjutnya'], 'string', 'max' => 30],
            [['diagnosa_utama', 'keterangan_indikasi_pindah_ruang'], 'string', 'max' => 100],
            [['diagnosa_sekunder'], 'string', 'max' => 150],
            [['prosedur_yang_sudah_dilakukan'], 'string', 'max' => 800],
            [['obat_yang_telah_diberikan'], 'string', 'max' => 1200],
            [['keterangan_peralatan_yang_menyertai'], 'string', 'max' => 90],
            [['pemeriksaan_penunjang_yang_dilakukan'], 'string', 'max' => 700],
            [['nama_menyetujui'], 'string', 'max' => 50],
            [['keluhan_utama_sebelum_transfer', 'keluhan_utama_sesudah_transfer'], 'string', 'max' => 300],
            [['td_sebelum_transfer', 'td_sesudah_transfer'], 'string', 'max' => 7],
            [['nadi_sebelum_transfer', 'rr_sebelum_transfer', 'suhu_sebelum_transfer', 'nadi_sesudah_transfer', 'rr_sesudah_transfer', 'suhu_sesudah_transfer'], 'string', 'max' => 5],
            [['nip_menyerahkan', 'nip_menerima'], 'string', 'max' => 20],
            [['no_rawat', 'tanggal_masuk'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal_masuk']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nip_menyerahkan'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip_menyerahkan' => 'nip']],
            [['nip_menerima'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip_menerima' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tanggal_masuk' => 'Tanggal Masuk',
            'tanggal_pindah' => 'Tanggal Pindah',
            'asal_ruang' => 'Asal Ruang',
            'ruang_selanjutnya' => 'Ruang Selanjutnya',
            'diagnosa_utama' => 'Diagnosa Utama',
            'diagnosa_sekunder' => 'Diagnosa Sekunder',
            'indikasi_pindah_ruang' => 'Indikasi Pindah Ruang',
            'keterangan_indikasi_pindah_ruang' => 'Keterangan Indikasi Pindah Ruang',
            'prosedur_yang_sudah_dilakukan' => 'Prosedur Yang Sudah Dilakukan',
            'obat_yang_telah_diberikan' => 'Obat Yang Telah Diberikan',
            'metode_pemindahan_pasien' => 'Metode Pemindahan Pasien',
            'peralatan_yang_menyertai' => 'Peralatan Yang Menyertai',
            'keterangan_peralatan_yang_menyertai' => 'Keterangan Peralatan Yang Menyertai',
            'pemeriksaan_penunjang_yang_dilakukan' => 'Pemeriksaan Penunjang Yang Dilakukan',
            'pasien_keluarga_menyetujui' => 'Pasien Keluarga Menyetujui',
            'nama_menyetujui' => 'Nama Menyetujui',
            'hubungan_menyetujui' => 'Hubungan Menyetujui',
            'keluhan_utama_sebelum_transfer' => 'Keluhan Utama Sebelum Transfer',
            'keadaan_umum_sebelum_transfer' => 'Keadaan Umum Sebelum Transfer',
            'td_sebelum_transfer' => 'Td Sebelum Transfer',
            'nadi_sebelum_transfer' => 'Nadi Sebelum Transfer',
            'rr_sebelum_transfer' => 'Rr Sebelum Transfer',
            'suhu_sebelum_transfer' => 'Suhu Sebelum Transfer',
            'keluhan_utama_sesudah_transfer' => 'Keluhan Utama Sesudah Transfer',
            'keadaan_umum_sesudah_transfer' => 'Keadaan Umum Sesudah Transfer',
            'td_sesudah_transfer' => 'Td Sesudah Transfer',
            'nadi_sesudah_transfer' => 'Nadi Sesudah Transfer',
            'rr_sesudah_transfer' => 'Rr Sesudah Transfer',
            'suhu_sesudah_transfer' => 'Suhu Sesudah Transfer',
            'nip_menyerahkan' => 'Nip Menyerahkan',
            'nip_menerima' => 'Nip Menerima',
        ];
    }

    /**
     * Gets query for [[NipMenerima]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNipMenerima()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip_menerima']);
    }

    /**
     * Gets query for [[NipMenyerahkan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNipMenyerahkan()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip_menyerahkan']);
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
