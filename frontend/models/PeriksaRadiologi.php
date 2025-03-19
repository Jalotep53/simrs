<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "periksa_radiologi".
 *
 * @property string $no_rawat
 * @property string $nip
 * @property string $kd_jenis_prw
 * @property string $tgl_periksa
 * @property string $jam
 * @property string $dokter_perujuk
 * @property float $bagian_rs
 * @property float $bhp
 * @property float $tarif_perujuk
 * @property float $tarif_tindakan_dokter
 * @property float $tarif_tindakan_petugas
 * @property float|null $kso
 * @property float|null $menejemen
 * @property float $biaya
 * @property string $kd_dokter
 * @property string|null $status
 * @property string $proyeksi
 * @property string $kV
 * @property string $mAS
 * @property string $FFD
 * @property string $BSF
 * @property string $inak
 * @property string $jml_penyinaran
 * @property string $dosis
 *
 * @property Dokter $dokterPerujuk
 * @property Dokter $kdDokter
 * @property JnsPerawatanRadiologi $kdJenisPrw
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PeriksaRadiologi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'periksa_radiologi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'nip', 'kd_jenis_prw', 'tgl_periksa', 'jam', 'dokter_perujuk', 'bagian_rs', 'bhp', 'tarif_perujuk', 'tarif_tindakan_dokter', 'tarif_tindakan_petugas', 'biaya', 'kd_dokter', 'proyeksi', 'kV', 'mAS', 'FFD', 'BSF', 'inak', 'jml_penyinaran', 'dosis'], 'required'],
            [['tgl_periksa', 'jam'], 'safe'],
            [['bagian_rs', 'bhp', 'tarif_perujuk', 'tarif_tindakan_dokter', 'tarif_tindakan_petugas', 'kso', 'menejemen', 'biaya'], 'number'],
            [['status'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['nip', 'dokter_perujuk', 'kd_dokter', 'dosis'], 'string', 'max' => 20],
            [['kd_jenis_prw'], 'string', 'max' => 15],
            [['proyeksi'], 'string', 'max' => 50],
            [['kV', 'mAS', 'FFD', 'BSF', 'inak', 'jml_penyinaran'], 'string', 'max' => 10],
            [['no_rawat', 'kd_jenis_prw', 'tgl_periksa', 'jam'], 'unique', 'targetAttribute' => ['no_rawat', 'kd_jenis_prw', 'tgl_periksa', 'jam']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['kd_jenis_prw'], 'exist', 'skipOnError' => true, 'targetClass' => JnsPerawatanRadiologi::class, 'targetAttribute' => ['kd_jenis_prw' => 'kd_jenis_prw']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
            [['dokter_perujuk'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['dokter_perujuk' => 'kd_dokter']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'nip' => 'Nip',
            'kd_jenis_prw' => 'Kd Jenis Prw',
            'tgl_periksa' => 'Tgl Periksa',
            'jam' => 'Jam',
            'dokter_perujuk' => 'Dokter Perujuk',
            'bagian_rs' => 'Bagian Rs',
            'bhp' => 'Bhp',
            'tarif_perujuk' => 'Tarif Perujuk',
            'tarif_tindakan_dokter' => 'Tarif Tindakan Dokter',
            'tarif_tindakan_petugas' => 'Tarif Tindakan Petugas',
            'kso' => 'Kso',
            'menejemen' => 'Menejemen',
            'biaya' => 'Biaya',
            'kd_dokter' => 'Kd Dokter',
            'status' => 'Status',
            'proyeksi' => 'Proyeksi',
            'kV' => 'K V',
            'mAS' => 'M As',
            'FFD' => 'Ffd',
            'BSF' => 'Bsf',
            'inak' => 'Inak',
            'jml_penyinaran' => 'Jml Penyinaran',
            'dosis' => 'Dosis',
        ];
    }

    /**
     * Gets query for [[DokterPerujuk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDokterPerujuk()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'dokter_perujuk']);
    }

    /**
     * Gets query for [[KdDokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokter()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[KdJenisPrw]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrw()
    {
        return $this->hasOne(JnsPerawatanRadiologi::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip']);
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
