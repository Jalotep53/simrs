<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "signin_sebelum_anestesi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $sncn
 * @property string $tindakan
 * @property string $kd_dokter_bedah
 * @property string $kd_dokter_anestesi
 * @property string|null $identitas
 * @property string|null $penandaan_area_operasi
 * @property string|null $alergi
 * @property string|null $resiko_aspirasi
 * @property string|null $resiko_aspirasi_rencana_antisipasi
 * @property string|null $resiko_kehilangan_darah
 * @property string|null $resiko_kehilangan_darah_line
 * @property string|null $resiko_kehilangan_darah_rencana_antisipasi
 * @property string|null $kesiapan_alat_obat_anestesi
 * @property string|null $kesiapan_alat_obat_anestesi_rencana_antisipasi
 * @property string|null $nip_perawat_ok
 *
 * @property Dokter $kdDokterAnestesi
 * @property Dokter $kdDokterBedah
 * @property Petugas $nipPerawatOk
 * @property RegPeriksa $noRawat
 */
class SigninSebelumAnestesi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'signin_sebelum_anestesi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'sncn', 'tindakan', 'kd_dokter_bedah', 'kd_dokter_anestesi'], 'required'],
            [['tanggal'], 'safe'],
            [['identitas', 'penandaan_area_operasi', 'resiko_aspirasi', 'resiko_kehilangan_darah', 'kesiapan_alat_obat_anestesi'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['sncn'], 'string', 'max' => 25],
            [['tindakan', 'resiko_aspirasi_rencana_antisipasi', 'resiko_kehilangan_darah_rencana_antisipasi', 'kesiapan_alat_obat_anestesi_rencana_antisipasi'], 'string', 'max' => 50],
            [['kd_dokter_bedah', 'kd_dokter_anestesi', 'nip_perawat_ok'], 'string', 'max' => 20],
            [['alergi', 'resiko_kehilangan_darah_line'], 'string', 'max' => 30],
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
            'identitas' => 'Identitas',
            'penandaan_area_operasi' => 'Penandaan Area Operasi',
            'alergi' => 'Alergi',
            'resiko_aspirasi' => 'Resiko Aspirasi',
            'resiko_aspirasi_rencana_antisipasi' => 'Resiko Aspirasi Rencana Antisipasi',
            'resiko_kehilangan_darah' => 'Resiko Kehilangan Darah',
            'resiko_kehilangan_darah_line' => 'Resiko Kehilangan Darah Line',
            'resiko_kehilangan_darah_rencana_antisipasi' => 'Resiko Kehilangan Darah Rencana Antisipasi',
            'kesiapan_alat_obat_anestesi' => 'Kesiapan Alat Obat Anestesi',
            'kesiapan_alat_obat_anestesi_rencana_antisipasi' => 'Kesiapan Alat Obat Anestesi Rencana Antisipasi',
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
