<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "checklist_pre_operasi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $sncn
 * @property string $tindakan
 * @property string $kd_dokter_bedah
 * @property string $kd_dokter_anestesi
 * @property string|null $identitas
 * @property string|null $surat_ijin_bedah
 * @property string|null $surat_ijin_anestesi
 * @property string|null $surat_ijin_transfusi
 * @property string|null $penandaan_area_operasi
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
 * @property string|null $persiapan_darah
 * @property string|null $keterangan_persiapan_darah
 * @property string|null $perlengkapan_khusus
 * @property string|null $nip_petugas_ruangan
 * @property string|null $nip_perawat_ok
 *
 * @property Dokter $kdDokterAnestesi
 * @property Dokter $kdDokterBedah
 * @property Petugas $nipPerawatOk
 * @property Petugas $nipPetugasRuangan
 * @property RegPeriksa $noRawat
 */
class ChecklistPreOperasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'checklist_pre_operasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'sncn', 'tindakan', 'kd_dokter_bedah', 'kd_dokter_anestesi'], 'required'],
            [['tanggal'], 'safe'],
            [['identitas', 'surat_ijin_bedah', 'surat_ijin_anestesi', 'surat_ijin_transfusi', 'penandaan_area_operasi', 'keadaan_umum', 'pemeriksaan_penunjang_rontgen', 'pemeriksaan_penunjang_ekg', 'pemeriksaan_penunjang_usg', 'pemeriksaan_penunjang_ctscan', 'pemeriksaan_penunjang_mri', 'persiapan_darah', 'perlengkapan_khusus'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['sncn'], 'string', 'max' => 25],
            [['tindakan'], 'string', 'max' => 50],
            [['kd_dokter_bedah', 'kd_dokter_anestesi', 'keterangan_pemeriksaan_penunjang_rontgen', 'keterangan_pemeriksaan_penunjang_ekg', 'keterangan_pemeriksaan_penunjang_usg', 'keterangan_pemeriksaan_penunjang_ctscan', 'keterangan_pemeriksaan_penunjang_mri', 'keterangan_persiapan_darah', 'nip_petugas_ruangan', 'nip_perawat_ok'], 'string', 'max' => 20],
            [['no_rawat', 'tanggal'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nip_petugas_ruangan'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip_petugas_ruangan' => 'nip']],
            [['nip_perawat_ok'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip_perawat_ok' => 'nip']],
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
            'identitas' => 'Identitas',
            'surat_ijin_bedah' => 'Surat Ijin Bedah',
            'surat_ijin_anestesi' => 'Surat Ijin Anestesi',
            'surat_ijin_transfusi' => 'Surat Ijin Transfusi',
            'penandaan_area_operasi' => 'Penandaan Area Operasi',
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
            'persiapan_darah' => 'Persiapan Darah',
            'keterangan_persiapan_darah' => 'Keterangan Persiapan Darah',
            'perlengkapan_khusus' => 'Perlengkapan Khusus',
            'nip_petugas_ruangan' => 'Nip Petugas Ruangan',
            'nip_perawat_ok' => 'Nip Perawat Ok',
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
     * Gets query for [[NipPerawatOk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNipPerawatOk()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip_perawat_ok']);
    }

    /**
     * Gets query for [[NipPetugasRuangan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNipPetugasRuangan()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip_petugas_ruangan']);
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
