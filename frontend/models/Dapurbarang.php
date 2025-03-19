<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dapurbarang".
 *
 * @property string $kode_brng
 * @property string $nama_brng
 * @property string $kode_sat
 * @property string|null $jenis
 * @property float $stok
 * @property float $harga
 * @property string $status
 *
 * @property DapurDetailHibah[] $dapurDetailHibahs
 * @property DapurDetailReturbeli[] $dapurDetailReturbelis
 * @property DapurRiwayatBarang[] $dapurRiwayatBarangs
 * @property Dapurdetailbeli[] $dapurdetailbelis
 * @property Dapurdetailpengeluaran[] $dapurdetailpengeluarans
 * @property Dapurdetailpesan[] $dapurdetailpesans
 * @property Dapuropname[] $dapuropnames
 * @property DetailPengajuanBarangDapur[] $detailPengajuanBarangDapurs
 * @property DetailPermintaanDapur[] $detailPermintaanDapurs
 * @property DetailSuratPemesananDapur[] $detailSuratPemesananDapurs
 * @property Kodesatuan $kodeSat
 * @property DapurHibah[] $noHibahs
 */
class Dapurbarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dapurbarang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'nama_brng', 'kode_sat', 'stok', 'harga', 'status'], 'required'],
            [['jenis', 'status'], 'string'],
            [['stok', 'harga'], 'number'],
            [['kode_brng'], 'string', 'max' => 15],
            [['nama_brng'], 'string', 'max' => 80],
            [['kode_sat'], 'string', 'max' => 4],
            [['kode_brng'], 'unique'],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
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
            'harga' => 'Harga',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[DapurDetailHibahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDapurDetailHibahs()
    {
        return $this->hasMany(DapurDetailHibah::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[DapurDetailReturbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDapurDetailReturbelis()
    {
        return $this->hasMany(DapurDetailReturbeli::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[DapurRiwayatBarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDapurRiwayatBarangs()
    {
        return $this->hasMany(DapurRiwayatBarang::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Dapurdetailbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDapurdetailbelis()
    {
        return $this->hasMany(Dapurdetailbeli::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Dapurdetailpengeluarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDapurdetailpengeluarans()
    {
        return $this->hasMany(Dapurdetailpengeluaran::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Dapurdetailpesans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDapurdetailpesans()
    {
        return $this->hasMany(Dapurdetailpesan::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Dapuropnames]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDapuropnames()
    {
        return $this->hasMany(Dapuropname::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[DetailPengajuanBarangDapurs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPengajuanBarangDapurs()
    {
        return $this->hasMany(DetailPengajuanBarangDapur::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[DetailPermintaanDapurs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPermintaanDapurs()
    {
        return $this->hasMany(DetailPermintaanDapur::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[DetailSuratPemesananDapurs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailSuratPemesananDapurs()
    {
        return $this->hasMany(DetailSuratPemesananDapur::class, ['kode_brng' => 'kode_brng']);
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
     * Gets query for [[NoHibahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoHibahs()
    {
        return $this->hasMany(DapurHibah::class, ['no_hibah' => 'no_hibah'])->viaTable('dapur_detail_hibah', ['kode_brng' => 'kode_brng']);
    }
}
