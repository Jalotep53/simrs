<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tokobarang".
 *
 * @property string $kode_brng
 * @property string $nama_brng
 * @property string $kode_sat
 * @property string|null $jenis
 * @property float $stok
 * @property float $dasar
 * @property float $h_beli
 * @property float $distributor
 * @property float $grosir
 * @property float $retail
 * @property string $status
 *
 * @property Tokojenisbarang $jenis0
 * @property Kodesatuan $kodeSat
 * @property TokoDetailBeli[] $tokoDetailBelis
 * @property TokoDetailJual[] $tokoDetailJuals
 * @property TokoDetailPengajuanBarang[] $tokoDetailPengajuanBarangs
 * @property TokoDetailPesan[] $tokoDetailPesans
 * @property TokoDetailPiutang[] $tokoDetailPiutangs
 * @property TokoDetailReturbeli[] $tokoDetailReturbelis
 * @property TokoDetailReturjual[] $tokoDetailReturjuals
 * @property TokoDetailReturpiutang[] $tokoDetailReturpiutangs
 * @property TokoDetailSuratPemesanan[] $tokoDetailSuratPemesanans
 * @property TokoRiwayatBarang[] $tokoRiwayatBarangs
 * @property Tokoopname[] $tokoopnames
 */
class Tokobarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tokobarang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'nama_brng', 'kode_sat', 'stok', 'dasar', 'h_beli', 'distributor', 'grosir', 'retail', 'status'], 'required'],
            [['stok', 'dasar', 'h_beli', 'distributor', 'grosir', 'retail'], 'number'],
            [['status'], 'string'],
            [['kode_brng'], 'string', 'max' => 40],
            [['nama_brng'], 'string', 'max' => 80],
            [['kode_sat'], 'string', 'max' => 4],
            [['jenis'], 'string', 'max' => 5],
            [['kode_brng'], 'unique'],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
            [['jenis'], 'exist', 'skipOnError' => true, 'targetClass' => Tokojenisbarang::class, 'targetAttribute' => ['jenis' => 'kd_jenis']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_brng' => 'Kode Brng',
            'nama_brng' => 'Nama Brng',
            'kode_sat' => 'Kode Sat',
            'jenis' => 'Jenis',
            'stok' => 'Stok',
            'dasar' => 'Dasar',
            'h_beli' => 'H Beli',
            'distributor' => 'Distributor',
            'grosir' => 'Grosir',
            'retail' => 'Retail',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Jenis0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenis0()
    {
        return $this->hasOne(Tokojenisbarang::class, ['kd_jenis' => 'jenis']);
    }

    /**
     * Gets query for [[KodeSat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSat()
    {
        return $this->hasOne(Kodesatuan::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[TokoDetailBelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailBelis()
    {
        return $this->hasMany(TokoDetailBeli::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[TokoDetailJuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailJuals()
    {
        return $this->hasMany(TokoDetailJual::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[TokoDetailPengajuanBarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailPengajuanBarangs()
    {
        return $this->hasMany(TokoDetailPengajuanBarang::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[TokoDetailPesans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailPesans()
    {
        return $this->hasMany(TokoDetailPesan::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[TokoDetailPiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailPiutangs()
    {
        return $this->hasMany(TokoDetailPiutang::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[TokoDetailReturbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailReturbelis()
    {
        return $this->hasMany(TokoDetailReturbeli::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[TokoDetailReturjuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailReturjuals()
    {
        return $this->hasMany(TokoDetailReturjual::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[TokoDetailReturpiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailReturpiutangs()
    {
        return $this->hasMany(TokoDetailReturpiutang::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[TokoDetailSuratPemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailSuratPemesanans()
    {
        return $this->hasMany(TokoDetailSuratPemesanan::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[TokoRiwayatBarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoRiwayatBarangs()
    {
        return $this->hasMany(TokoRiwayatBarang::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Tokoopnames]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoopnames()
    {
        return $this->hasMany(Tokoopname::class, ['kode_brng' => 'kode_brng']);
    }
}
