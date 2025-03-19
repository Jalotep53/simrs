<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "checklist_post_operasi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $sncn
 * @property string $tindakan
 * @property string $kd_dokter_bedah
 * @property string $kd_dokter_anestesi
 * @property string|null $keadaan_umum
 * @property string|null $pemeriksaan_penunjang_rontgen
 * @property string|null $keterangan_pemeriksaan_penunjang_rontgen
 * @property string|null $pemeriksaan_penunjang_ekg
 * @property string|null $keterangan_pemeriksaan_penunjang_ekg
 * @property string|null $pemeriksaan_penunjang_usg
 * @property string|null $keterangan_pemeriksaan_penunjang_usg
 * @property string|null $pemeriksaan_penunjang_ctscan
 * @property string|null $keterangan_pemeriksaan_penunjang_ctscan
 * @property string|null $pemeriksaan_penunjang_mri
 * @property string|null $keterangan_pemeriksaan_penunjang_mri
 * @property string|null $jenis_cairan_infus
 * @property string|null $kateter_urine
 * @property string|null $tanggal_pemasangan_kateter
 * @property string|null $warna_kateter
 * @property string|null $jumlah_kateter
 * @property string|null $area_luka_operasi
 * @property string|null $drain
 * @property string|null $jumlah_drain
 * @property string|null $letak_drain
 * @property string|null $warna_drain
 * @property string|null $jaringan_pa
 * @property string|null $nip_perawat_ok
 * @property string|null $nip_perawat_anestesi
 *
 * @property Dokter $kdDokterAnestesi
 * @property Dokter $kdDokterBedah
 * @property Petugas $nipPerawatAnestesi
 * @property Petugas $nipPerawatOk
 * @property RegPeriksa $noRawat
 */
class ChecklistPostOperasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'checklist_post_operasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'sncn', 'tindakan', 'kd_dokter_bedah', 'kd_dokter_anestesi'], 'required'],
            [['tanggal', 'tanggal_pemasangan_kateter'], 'safe'],
            [['keadaan_umum', 'pemeriksaan_penunjang_rontgen', 'pemeriksaan_penunjang_ekg', 'pemeriksaan_penunjang_usg', 'pemeriksaan_penunjang_ctscan', 'pemeriksaan_penunjang_mri', 'kateter_urine', 'warna_kateter', 'drain', 'jaringan_pa'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['sncn'], 'string', 'max' => 25],
            [['tindakan'], 'string', 'max' => 50],
            [['kd_dokter_bedah', 'kd_dokter_anestesi', 'keterangan_pemeriksaan_penunjang_rontgen', 'keterangan_pemeriksaan_penunjang_ekg', 'keterangan_pemeriksaan_penunjang_usg', 'keterangan_pemeriksaan_penunjang_ctscan', 'keterangan_pemeriksaan_penunjang_mri', 'nip_perawat_ok', 'nip_perawat_anestesi'], 'string', 'max' => 20],
            [['jenis_cairan_infus', 'letak_drain'], 'string', 'max' => 40],
            [['jumlah_kateter'], 'string', 'max' => 4],
            [['area_luka_operasi'], 'string', 'max' => 120],
            [['jumlah_drain'], 'string', 'max' => 2],
            [['warna_drain'], 'string', 'max' => 30],
            [['no_rawat', 'tanggal'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nip_perawat_ok'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip_perawat_ok' => 'nip']],
            [['nip_perawat_anestesi'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip_perawat_anestesi' => 'nip']],
            [['kd_dokter_anestesi'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter_anestesi' => 'kd_dokter']],
            [['kd_dokter_bedah'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter_bedah' => 'kd_dokter']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tanggal' => 'Tanggal',
            'sncn' => 'Sncn',
            'tindakan' => 'Tindakan',
            'kd_dokter_bedah' => 'Kd Dokter Bedah',
            'kd_dokter_anestesi' => 'Kd Dokter Anestesi',
            'keadaan_umum' => 'Keadaan Umum',
            'pemeriksaan_penunjang_rontgen' => 'Pemeriksaan Penunjang Rontgen',
            'keterangan_pemeriksaan_penunjang_rontgen' => 'Keterangan Pemeriksaan Penunjang Rontgen',
            'pemeriksaan_penunjang_ekg' => 'Pemeriksaan Penunjang Ekg',
            'keterangan_pemeriksaan_penunjang_ekg' => 'Keterangan Pemeriksaan Penunjang Ekg',
            'pemeriksaan_penunjang_usg' => 'Pemeriksaan Penunjang Usg',
            'keterangan_pemeriksaan_penunjang_usg' => 'Keterangan Pemeriksaan Penunjang Usg',
            'pemeriksaan_penunjang_ctscan' => 'Pemeriksaan Penunjang Ctscan',
            'keterangan_pemeriksaan_penunjang_ctscan' => 'Keterangan Pemeriksaan Penunjang Ctscan',
            'pemeriksaan_penunjang_mri' => 'Pemeriksaan Penunjang Mri',
            'keterangan_pemeriksaan_penunjang_mri' => 'Keterangan Pemeriksaan Penunjang Mri',
            'jenis_cairan_infus' => 'Jenis Cairan Infus',
            'kateter_urine' => 'Kateter Urine',
            'tanggal_pemasangan_kateter' => 'Tanggal Pemasangan Kateter',
            'warna_kateter' => 'Warna Kateter',
            'jumlah_kateter' => 'Jumlah Kateter',
            'area_luka_operasi' => 'Area Luka Operasi',
            'drain' => 'Drain',
            'jumlah_drain' => 'Jumlah Drain',
            'letak_drain' => 'Letak Drain',
            'warna_drain' => 'Warna Drain',
            'jaringan_pa' => 'Jaringan Pa',
            'nip_perawat_ok' => 'Nip Perawat Ok',
            'nip_perawat_anestesi' => 'Nip Perawat Anestesi',
        ];
    }

    /**
     * Gets query for [[KdDokterAnestesi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokterAnestesi()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokter_anestesi']);
    }

    /**
     * Gets query for [[KdDokterBedah]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokterBedah()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokter_bedah']);
    }

    /**
     * Gets query for [[NipPerawatAnestesi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNipPerawatAnestesi()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip_perawat_anestesi']);
    }

    /**
     * Gets query for [[NipPerawatOk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNipPerawatOk()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip_perawat_ok']);
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
