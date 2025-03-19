<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "timeout_sebelum_insisi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $sncn
 * @property string $tindakan
 * @property string $kd_dokter_bedah
 * @property string $kd_dokter_anestesi
 * @property string|null $verbal_identitas
 * @property string|null $verbal_tindakan
 * @property string|null $verbal_area_insisi
 * @property string|null $penandaan_area_operasi
 * @property string $lama_operasi
 * @property string|null $penayangan_radiologi
 * @property string|null $penayangan_ctscan
 * @property string|null $penayangan_mri
 * @property string|null $antibiotik_profilaks
 * @property string $nama_antibiotik
 * @property string $jam_pemberian
 * @property string $antisipasi_kehilangan_darah
 * @property string|null $hal_khusus
 * @property string $hal_khusus_diperhatikan
 * @property string|null $tanggal_steril
 * @property string|null $petujuk_sterilisasi
 * @property string|null $verifikasi_preoperatif
 * @property string|null $nip_perawat_ok
 *
 * @property Dokter $kdDokterAnestesi
 * @property Dokter $kdDokterBedah
 * @property Petugas $nipPerawatOk
 * @property RegPeriksa $noRawat
 */
class TimeoutSebelumInsisi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'timeout_sebelum_insisi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'sncn', 'tindakan', 'kd_dokter_bedah', 'kd_dokter_anestesi', 'lama_operasi', 'nama_antibiotik', 'jam_pemberian', 'antisipasi_kehilangan_darah', 'hal_khusus_diperhatikan'], 'required'],
            [['tanggal', 'tanggal_steril'], 'safe'],
            [['verbal_identitas', 'verbal_tindakan', 'verbal_area_insisi', 'penandaan_area_operasi', 'penayangan_radiologi', 'penayangan_ctscan', 'penayangan_mri', 'antibiotik_profilaks', 'hal_khusus', 'petujuk_sterilisasi', 'verifikasi_preoperatif'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['sncn'], 'string', 'max' => 25],
            [['tindakan', 'nama_antibiotik', 'antisipasi_kehilangan_darah'], 'string', 'max' => 50],
            [['kd_dokter_bedah', 'kd_dokter_anestesi', 'nip_perawat_ok'], 'string', 'max' => 20],
            [['lama_operasi', 'jam_pemberian'], 'string', 'max' => 10],
            [['hal_khusus_diperhatikan'], 'string', 'max' => 100],
            [['no_rawat', 'tanggal'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
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
            'verbal_identitas' => 'Verbal Identitas',
            'verbal_tindakan' => 'Verbal Tindakan',
            'verbal_area_insisi' => 'Verbal Area Insisi',
            'penandaan_area_operasi' => 'Penandaan Area Operasi',
            'lama_operasi' => 'Lama Operasi',
            'penayangan_radiologi' => 'Penayangan Radiologi',
            'penayangan_ctscan' => 'Penayangan Ctscan',
            'penayangan_mri' => 'Penayangan Mri',
            'antibiotik_profilaks' => 'Antibiotik Profilaks',
            'nama_antibiotik' => 'Nama Antibiotik',
            'jam_pemberian' => 'Jam Pemberian',
            'antisipasi_kehilangan_darah' => 'Antisipasi Kehilangan Darah',
            'hal_khusus' => 'Hal Khusus',
            'hal_khusus_diperhatikan' => 'Hal Khusus Diperhatikan',
            'tanggal_steril' => 'Tanggal Steril',
            'petujuk_sterilisasi' => 'Petujuk Sterilisasi',
            'verifikasi_preoperatif' => 'Verifikasi Preoperatif',
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
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
