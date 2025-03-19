<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "laporan_anestesi".
 *
 * @property string $no_rawat
 * @property string $mulai
 * @property string $selesai
 * @property string|null $tempat_pemantauan
 * @property string $tindakan_operasi
 * @property string $operator1
 * @property string $asisten_operator
 * @property string $dokter_anestesi
 * @property string $operator2
 * @property string $onloop
 * @property string $penata_anestesi
 * @property string $diagnosa_preop
 * @property string $diagnosa_postop
 * @property string|null $status_asa
 * @property string|null $karena
 * @property string|null $premedikasi
 * @property string $ttv_premedikasi_td
 * @property string $ttv_premedikasi_rr
 * @property string $ttv_premedikasi_hr
 * @property string $ttv_premedikasi_spo2
 * @property string $ttv_premedikasi_ekg
 * @property string $ttv_premedikasi_suhu
 * @property string $ttv_premedikasi_lain
 * @property string $lama_operasi
 * @property string $lama_anastesi
 * @property string $keadaan_umum_bb
 * @property string $keadaan_umum_tb
 * @property string $keadaan_umum_alergi
 * @property string $keadaan_umum_malampathy
 * @property string $keadaan_umum_e
 * @property string $keadaan_umum_v
 * @property string $keadaan_umum_m
 * @property string $jenis_anestesi_lokasi
 * @property string $jenis_anestesi_sedasi
 * @property string $jenis_anestesi_regional
 * @property string $jenis_anestesi_ga_ett
 * @property string $jenis_anestesi_ga_ntt
 * @property string $jenis_anestesi_ga_ema
 * @property string $jenis_anestesi_ga_bm
 * @property string $posisi
 * @property string $perdarahan
 * @property string $urine
 * @property string $komplikasi
 * @property string $ekstubasi
 * @property string $jumlah_pack
 * @property string $dipindahkan_ke
 * @property string $serah_terima_pasien
 * @property string $catatan
 * @property string $nip_recovery_room
 *
 * @property Petugas $asistenOperator
 * @property Dokter $dokterAnestesi
 * @property Petugas $nipRecoveryRoom
 * @property RegPeriksa $noRawat
 * @property Petugas $onloop0
 * @property Dokter $operator10
 * @property Dokter $operator20
 * @property Petugas $penataAnestesi
 */
class LaporanAnestesi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'laporan_anestesi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'mulai', 'selesai', 'tindakan_operasi', 'operator1', 'asisten_operator', 'dokter_anestesi', 'operator2', 'onloop', 'penata_anestesi', 'diagnosa_preop', 'diagnosa_postop', 'ttv_premedikasi_td', 'ttv_premedikasi_rr', 'ttv_premedikasi_hr', 'ttv_premedikasi_spo2', 'ttv_premedikasi_ekg', 'ttv_premedikasi_suhu', 'ttv_premedikasi_lain', 'lama_operasi', 'lama_anastesi', 'keadaan_umum_bb', 'keadaan_umum_tb', 'keadaan_umum_alergi', 'keadaan_umum_malampathy', 'keadaan_umum_e', 'keadaan_umum_v', 'keadaan_umum_m', 'jenis_anestesi_lokasi', 'jenis_anestesi_sedasi', 'jenis_anestesi_regional', 'jenis_anestesi_ga_ett', 'jenis_anestesi_ga_ntt', 'jenis_anestesi_ga_ema', 'jenis_anestesi_ga_bm', 'posisi', 'perdarahan', 'urine', 'komplikasi', 'ekstubasi', 'jumlah_pack', 'dipindahkan_ke', 'serah_terima_pasien', 'catatan', 'nip_recovery_room'], 'required'],
            [['mulai', 'selesai'], 'safe'],
            [['tempat_pemantauan', 'status_asa', 'jenis_anestesi_sedasi', 'jenis_anestesi_regional', 'jenis_anestesi_ga_ett', 'jenis_anestesi_ga_ntt', 'jenis_anestesi_ga_ema', 'jenis_anestesi_ga_bm', 'serah_terima_pasien'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['tindakan_operasi'], 'string', 'max' => 60],
            [['operator1', 'asisten_operator', 'dokter_anestesi', 'operator2', 'onloop', 'penata_anestesi', 'nip_recovery_room'], 'string', 'max' => 20],
            [['diagnosa_preop', 'diagnosa_postop', 'catatan'], 'string', 'max' => 100],
            [['karena', 'posisi', 'perdarahan', 'urine', 'komplikasi', 'ekstubasi', 'dipindahkan_ke'], 'string', 'max' => 40],
            [['premedikasi'], 'string', 'max' => 500],
            [['ttv_premedikasi_td'], 'string', 'max' => 8],
            [['ttv_premedikasi_rr', 'ttv_premedikasi_hr', 'ttv_premedikasi_spo2', 'ttv_premedikasi_ekg', 'ttv_premedikasi_suhu', 'keadaan_umum_bb', 'keadaan_umum_tb'], 'string', 'max' => 5],
            [['ttv_premedikasi_lain', 'jenis_anestesi_lokasi'], 'string', 'max' => 30],
            [['lama_operasi', 'lama_anastesi', 'jumlah_pack'], 'string', 'max' => 10],
            [['keadaan_umum_alergi', 'keadaan_umum_malampathy'], 'string', 'max' => 50],
            [['keadaan_umum_e', 'keadaan_umum_v', 'keadaan_umum_m'], 'string', 'max' => 1],
            [['no_rawat', 'mulai'], 'unique', 'targetAttribute' => ['no_rawat', 'mulai']],
            [['operator1'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['operator1' => 'kd_dokter']],
            [['operator2'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['operator2' => 'kd_dokter']],
            [['dokter_anestesi'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['dokter_anestesi' => 'kd_dokter']],
            [['asisten_operator'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['asisten_operator' => 'nip']],
            [['penata_anestesi'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['penata_anestesi' => 'nip']],
            [['onloop'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['onloop' => 'nip']],
            [['nip_recovery_room'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip_recovery_room' => 'nip']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'mulai' => 'Mulai',
            'selesai' => 'Selesai',
            'tempat_pemantauan' => 'Tempat Pemantauan',
            'tindakan_operasi' => 'Tindakan Operasi',
            'operator1' => 'Operator1',
            'asisten_operator' => 'Asisten Operator',
            'dokter_anestesi' => 'Dokter Anestesi',
            'operator2' => 'Operator2',
            'onloop' => 'Onloop',
            'penata_anestesi' => 'Penata Anestesi',
            'diagnosa_preop' => 'Diagnosa Preop',
            'diagnosa_postop' => 'Diagnosa Postop',
            'status_asa' => 'Status Asa',
            'karena' => 'Karena',
            'premedikasi' => 'Premedikasi',
            'ttv_premedikasi_td' => 'Ttv Premedikasi Td',
            'ttv_premedikasi_rr' => 'Ttv Premedikasi Rr',
            'ttv_premedikasi_hr' => 'Ttv Premedikasi Hr',
            'ttv_premedikasi_spo2' => 'Ttv Premedikasi Spo2',
            'ttv_premedikasi_ekg' => 'Ttv Premedikasi Ekg',
            'ttv_premedikasi_suhu' => 'Ttv Premedikasi Suhu',
            'ttv_premedikasi_lain' => 'Ttv Premedikasi Lain',
            'lama_operasi' => 'Lama Operasi',
            'lama_anastesi' => 'Lama Anastesi',
            'keadaan_umum_bb' => 'Keadaan Umum Bb',
            'keadaan_umum_tb' => 'Keadaan Umum Tb',
            'keadaan_umum_alergi' => 'Keadaan Umum Alergi',
            'keadaan_umum_malampathy' => 'Keadaan Umum Malampathy',
            'keadaan_umum_e' => 'Keadaan Umum E',
            'keadaan_umum_v' => 'Keadaan Umum V',
            'keadaan_umum_m' => 'Keadaan Umum M',
            'jenis_anestesi_lokasi' => 'Jenis Anestesi Lokasi',
            'jenis_anestesi_sedasi' => 'Jenis Anestesi Sedasi',
            'jenis_anestesi_regional' => 'Jenis Anestesi Regional',
            'jenis_anestesi_ga_ett' => 'Jenis Anestesi Ga Ett',
            'jenis_anestesi_ga_ntt' => 'Jenis Anestesi Ga Ntt',
            'jenis_anestesi_ga_ema' => 'Jenis Anestesi Ga Ema',
            'jenis_anestesi_ga_bm' => 'Jenis Anestesi Ga Bm',
            'posisi' => 'Posisi',
            'perdarahan' => 'Perdarahan',
            'urine' => 'Urine',
            'komplikasi' => 'Komplikasi',
            'ekstubasi' => 'Ekstubasi',
            'jumlah_pack' => 'Jumlah Pack',
            'dipindahkan_ke' => 'Dipindahkan Ke',
            'serah_terima_pasien' => 'Serah Terima Pasien',
            'catatan' => 'Catatan',
            'nip_recovery_room' => 'Nip Recovery Room',
        ];
    }

    /**
     * Gets query for [[AsistenOperator]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAsistenOperator()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'asisten_operator']);
    }

    /**
     * Gets query for [[DokterAnestesi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDokterAnestesi()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'dokter_anestesi']);
    }

    /**
     * Gets query for [[NipRecoveryRoom]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNipRecoveryRoom()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip_recovery_room']);
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
     * Gets query for [[Onloop0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOnloop0()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'onloop']);
    }

    /**
     * Gets query for [[Operator10]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperator10()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'operator1']);
    }

    /**
     * Gets query for [[Operator20]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperator20()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'operator2']);
    }

    /**
     * Gets query for [[PenataAnestesi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenataAnestesi()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'penata_anestesi']);
    }
}
