<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bayar_jm_dokter".
 *
 * @property string $no_bayar
 * @property string|null $tanggal
 * @property string|null $kd_dokter
 * @property float|null $besar_bayar
 * @property string $nama_bayar
 * @property string $keterangan
 * @property float $rawatjalan
 * @property float $rawatinap
 * @property float $labrawatjalan
 * @property float $labrawatinap
 * @property float $radrawatjalan
 * @property float $radrawatinap
 * @property float $operasiralan
 * @property float $operasiranap
 *
 * @property BayarDetailPeriksaLabPerujuk[] $bayarDetailPeriksaLabPerujuks
 * @property BayarDetailPeriksaLab[] $bayarDetailPeriksaLabs
 * @property BayarOperasiDokterAnak[] $bayarOperasiDokterAnaks
 * @property BayarOperasiDokterAnestesi[] $bayarOperasiDokterAnestesis
 * @property BayarOperasiDokterPjanak[] $bayarOperasiDokterPjanaks
 * @property BayarOperasiDokterUmum[] $bayarOperasiDokterUmums
 * @property BayarOperasiOperator1[] $bayarOperasiOperator1s
 * @property BayarOperasiOperator2[] $bayarOperasiOperator2s
 * @property BayarOperasiOperator3[] $bayarOperasiOperator3s
 * @property BayarPeriksaLabPerujuk[] $bayarPeriksaLabPerujuks
 * @property BayarPeriksaLab[] $bayarPeriksaLabs
 * @property BayarPeriksaRadiologiPerujuk[] $bayarPeriksaRadiologiPerujuks
 * @property BayarPeriksaRadiologi[] $bayarPeriksaRadiologis
 * @property BayarRawatInapDrpr[] $bayarRawatInapDrprs
 * @property BayarRawatInapDr[] $bayarRawatInapDrs
 * @property BayarRawatJlDrpr[] $bayarRawatJlDrprs
 * @property BayarRawatJlDr[] $bayarRawatJlDrs
 * @property Dokter $kdDokter
 * @property AkunBayarHutang $namaBayar
 */
class BayarJmDokter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bayar_jm_dokter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_bayar', 'nama_bayar', 'keterangan', 'rawatjalan', 'rawatinap', 'labrawatjalan', 'labrawatinap', 'radrawatjalan', 'radrawatinap', 'operasiralan', 'operasiranap'], 'required'],
            [['tanggal'], 'safe'],
            [['besar_bayar', 'rawatjalan', 'rawatinap', 'labrawatjalan', 'labrawatinap', 'radrawatjalan', 'radrawatinap', 'operasiralan', 'operasiranap'], 'number'],
            [['no_bayar'], 'string', 'max' => 30],
            [['kd_dokter'], 'string', 'max' => 20],
            [['nama_bayar'], 'string', 'max' => 50],
            [['keterangan'], 'string', 'max' => 70],
            [['no_bayar'], 'unique'],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
            [['nama_bayar'], 'exist', 'skipOnError' => true, 'targetClass' => AkunBayarHutang::class, 'targetAttribute' => ['nama_bayar' => 'nama_bayar']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_bayar' => 'No Bayar',
            'tanggal' => 'Tanggal',
            'kd_dokter' => 'Kd Dokter',
            'besar_bayar' => 'Besar Bayar',
            'nama_bayar' => 'Nama Bayar',
            'keterangan' => 'Keterangan',
            'rawatjalan' => 'Rawatjalan',
            'rawatinap' => 'Rawatinap',
            'labrawatjalan' => 'Labrawatjalan',
            'labrawatinap' => 'Labrawatinap',
            'radrawatjalan' => 'Radrawatjalan',
            'radrawatinap' => 'Radrawatinap',
            'operasiralan' => 'Operasiralan',
            'operasiranap' => 'Operasiranap',
        ];
    }

    /**
     * Gets query for [[BayarDetailPeriksaLabPerujuks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarDetailPeriksaLabPerujuks()
    {
        return $this->hasMany(BayarDetailPeriksaLabPerujuk::class, ['no_bayar' => 'no_bayar']);
    }

    /**
     * Gets query for [[BayarDetailPeriksaLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarDetailPeriksaLabs()
    {
        return $this->hasMany(BayarDetailPeriksaLab::class, ['no_bayar' => 'no_bayar']);
    }

    /**
     * Gets query for [[BayarOperasiDokterAnaks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarOperasiDokterAnaks()
    {
        return $this->hasMany(BayarOperasiDokterAnak::class, ['no_bayar' => 'no_bayar']);
    }

    /**
     * Gets query for [[BayarOperasiDokterAnestesis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarOperasiDokterAnestesis()
    {
        return $this->hasMany(BayarOperasiDokterAnestesi::class, ['no_bayar' => 'no_bayar']);
    }

    /**
     * Gets query for [[BayarOperasiDokterPjanaks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarOperasiDokterPjanaks()
    {
        return $this->hasMany(BayarOperasiDokterPjanak::class, ['no_bayar' => 'no_bayar']);
    }

    /**
     * Gets query for [[BayarOperasiDokterUmums]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarOperasiDokterUmums()
    {
        return $this->hasMany(BayarOperasiDokterUmum::class, ['no_bayar' => 'no_bayar']);
    }

    /**
     * Gets query for [[BayarOperasiOperator1s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarOperasiOperator1s()
    {
        return $this->hasMany(BayarOperasiOperator1::class, ['no_bayar' => 'no_bayar']);
    }

    /**
     * Gets query for [[BayarOperasiOperator2s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarOperasiOperator2s()
    {
        return $this->hasMany(BayarOperasiOperator2::class, ['no_bayar' => 'no_bayar']);
    }

    /**
     * Gets query for [[BayarOperasiOperator3s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarOperasiOperator3s()
    {
        return $this->hasMany(BayarOperasiOperator3::class, ['no_bayar' => 'no_bayar']);
    }

    /**
     * Gets query for [[BayarPeriksaLabPerujuks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPeriksaLabPerujuks()
    {
        return $this->hasMany(BayarPeriksaLabPerujuk::class, ['no_bayar' => 'no_bayar']);
    }

    /**
     * Gets query for [[BayarPeriksaLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPeriksaLabs()
    {
        return $this->hasMany(BayarPeriksaLab::class, ['no_bayar' => 'no_bayar']);
    }

    /**
     * Gets query for [[BayarPeriksaRadiologiPerujuks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPeriksaRadiologiPerujuks()
    {
        return $this->hasMany(BayarPeriksaRadiologiPerujuk::class, ['no_bayar' => 'no_bayar']);
    }

    /**
     * Gets query for [[BayarPeriksaRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPeriksaRadiologis()
    {
        return $this->hasMany(BayarPeriksaRadiologi::class, ['no_bayar' => 'no_bayar']);
    }

    /**
     * Gets query for [[BayarRawatInapDrprs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarRawatInapDrprs()
    {
        return $this->hasMany(BayarRawatInapDrpr::class, ['no_bayar' => 'no_bayar']);
    }

    /**
     * Gets query for [[BayarRawatInapDrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarRawatInapDrs()
    {
        return $this->hasMany(BayarRawatInapDr::class, ['no_bayar' => 'no_bayar']);
    }

    /**
     * Gets query for [[BayarRawatJlDrprs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarRawatJlDrprs()
    {
        return $this->hasMany(BayarRawatJlDrpr::class, ['no_bayar' => 'no_bayar']);
    }

    /**
     * Gets query for [[BayarRawatJlDrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarRawatJlDrs()
    {
        return $this->hasMany(BayarRawatJlDr::class, ['no_bayar' => 'no_bayar']);
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
     * Gets query for [[NamaBayar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNamaBayar()
    {
        return $this->hasOne(AkunBayarHutang::class, ['nama_bayar' => 'nama_bayar']);
    }
}
