<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "periksa_lab".
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
 * @property string $kategori
 *
 * @property Dokter $dokterPerujuk
 * @property Dokter $kdDokter
 * @property JnsPerawatanLab $kdJenisPrw
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PeriksaLab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'periksa_lab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'nip', 'kd_jenis_prw', 'tgl_periksa', 'jam', 'dokter_perujuk', 'bagian_rs', 'bhp', 'tarif_perujuk', 'tarif_tindakan_dokter', 'tarif_tindakan_petugas', 'biaya', 'kd_dokter', 'kategori'], 'required'],
            [['tgl_periksa', 'jam'], 'safe'],
            [['bagian_rs', 'bhp', 'tarif_perujuk', 'tarif_tindakan_dokter', 'tarif_tindakan_petugas', 'kso', 'menejemen', 'biaya'], 'number'],
            [['status', 'kategori'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['nip', 'dokter_perujuk', 'kd_dokter'], 'string', 'max' => 20],
            [['kd_jenis_prw'], 'string', 'max' => 15],
            [['no_rawat', 'kd_jenis_prw', 'tgl_periksa', 'jam'], 'unique', 'targetAttribute' => ['no_rawat', 'kd_jenis_prw', 'tgl_periksa', 'jam']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['kd_jenis_prw'], 'exist', 'skipOnError' => true, 'targetClass' => JnsPerawatanLab::class, 'targetAttribute' => ['kd_jenis_prw' => 'kd_jenis_prw']],
            [['dokter_perujuk'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['dokter_perujuk' => 'kd_dokter']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
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
            'kategori' => 'Kategori',
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
        return $this->hasOne(JnsPerawatanLab::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
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
