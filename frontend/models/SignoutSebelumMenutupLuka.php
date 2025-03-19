<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "signout_sebelum_menutup_luka".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $sncn
 * @property string $tindakan
 * @property string $kd_dokter_bedah
 * @property string $kd_dokter_anestesi
 * @property string|null $verbal_tindakan
 * @property string|null $verbal_kelengkapan_kasa
 * @property string|null $verbal_instrumen
 * @property string|null $verbal_alat_tajam
 * @property string|null $kelengkapan_specimen_label
 * @property string|null $kelengkapan_specimen_formulir
 * @property string|null $peninjauan_kegiatan_dokter_bedah
 * @property string|null $peninjauan_kegiatan_dokter_anestesi
 * @property string|null $peninjauan_kegiatan_perawat_kamar_ok
 * @property string|null $perhatian_utama_fase_pemulihan
 * @property string|null $nip_perawat_ok
 *
 * @property Dokter $kdDokterAnestesi
 * @property Dokter $kdDokterBedah
 * @property Petugas $nipPerawatOk
 * @property RegPeriksa $noRawat
 */
class SignoutSebelumMenutupLuka extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'signout_sebelum_menutup_luka';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'sncn', 'tindakan', 'kd_dokter_bedah', 'kd_dokter_anestesi'], 'required'],
            [['tanggal'], 'safe'],
            [['verbal_tindakan', 'verbal_kelengkapan_kasa', 'verbal_instrumen', 'verbal_alat_tajam', 'kelengkapan_specimen_label', 'kelengkapan_specimen_formulir', 'peninjauan_kegiatan_dokter_bedah', 'peninjauan_kegiatan_dokter_anestesi', 'peninjauan_kegiatan_perawat_kamar_ok'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['sncn'], 'string', 'max' => 25],
            [['tindakan'], 'string', 'max' => 50],
            [['kd_dokter_bedah', 'kd_dokter_anestesi', 'nip_perawat_ok'], 'string', 'max' => 20],
            [['perhatian_utama_fase_pemulihan'], 'string', 'max' => 100],
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
            'verbal_tindakan' => 'Verbal Tindakan',
            'verbal_kelengkapan_kasa' => 'Verbal Kelengkapan Kasa',
            'verbal_instrumen' => 'Verbal Instrumen',
            'verbal_alat_tajam' => 'Verbal Alat Tajam',
            'kelengkapan_specimen_label' => 'Kelengkapan Specimen Label',
            'kelengkapan_specimen_formulir' => 'Kelengkapan Specimen Formulir',
            'peninjauan_kegiatan_dokter_bedah' => 'Peninjauan Kegiatan Dokter Bedah',
            'peninjauan_kegiatan_dokter_anestesi' => 'Peninjauan Kegiatan Dokter Anestesi',
            'peninjauan_kegiatan_perawat_kamar_ok' => 'Peninjauan Kegiatan Perawat Kamar Ok',
            'perhatian_utama_fase_pemulihan' => 'Perhatian Utama Fase Pemulihan',
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
