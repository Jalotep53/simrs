<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ipsrsbarang".
 *
 * @property string $kode_brng
 * @property string $nama_brng
 * @property string $kode_sat
 * @property string|null $jenis
 * @property float $stok
 * @property float $harga
 * @property string $status
 *
 * @property BeriBhpRadiologi[] $beriBhpRadiologis
 * @property DetailPengajuanBarangNonmedis[] $detailPengajuanBarangNonmedis
 * @property DetailPermintaanNonMedis[] $detailPermintaanNonMedis
 * @property DetailSuratPemesananNonMedis[] $detailSuratPemesananNonMedis
 * @property IpsrsDetailHibah[] $ipsrsDetailHibahs
 * @property IpsrsDetailReturbeli[] $ipsrsDetailReturbelis
 * @property IpsrsRiwayatBarang[] $ipsrsRiwayatBarangs
 * @property Ipsrsdetailbeli[] $ipsrsdetailbelis
 * @property Ipsrsdetailpengeluaran[] $ipsrsdetailpengeluarans
 * @property Ipsrsdetailpesan[] $ipsrsdetailpesans
 * @property Ipsrsopname[] $ipsrsopnames
 * @property Ipsrsjenisbarang $jenis0
 * @property Kodesatuan $kodeSat
 * @property UtdDonor[] $noDonors
 * @property UtdPemisahanKomponen[] $noDonors0
 * @property IpsrsHibah[] $noHibahs
 * @property UtdPenyerahanDarah[] $noPenyerahans
 * @property UtdPengambilanPenunjang[] $utdPengambilanPenunjangs
 * @property UtdPenggunaanPenunjangDonor[] $utdPenggunaanPenunjangDonors
 * @property UtdPenggunaanPenunjangPemisahanKomponen[] $utdPenggunaanPenunjangPemisahanKomponens
 * @property UtdPenggunaanPenunjangPenyerahanDarah[] $utdPenggunaanPenunjangPenyerahanDarahs
 * @property UtdPenunjangRusak[] $utdPenunjangRusaks
 * @property UtdStokPenunjang $utdStokPenunjang
 */
class Ipsrsbarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ipsrsbarang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'nama_brng', 'kode_sat', 'stok', 'harga', 'status'], 'required'],
            [['stok', 'harga'], 'number'],
            [['status'], 'string'],
            [['kode_brng'], 'string', 'max' => 15],
            [['nama_brng'], 'string', 'max' => 80],
            [['kode_sat'], 'string', 'max' => 4],
            [['jenis'], 'string', 'max' => 5],
            [['kode_brng'], 'unique'],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
            [['jenis'], 'exist', 'skipOnError' => true, 'targetClass' => Ipsrsjenisbarang::class, 'targetAttribute' => ['jenis' => 'kd_jenis']],
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
     * Gets query for [[BeriBhpRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBeriBhpRadiologis()
    {
        return $this->hasMany(BeriBhpRadiologi::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[DetailPengajuanBarangNonmedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPengajuanBarangNonmedis()
    {
        return $this->hasMany(DetailPengajuanBarangNonmedis::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[DetailPermintaanNonMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPermintaanNonMedis()
    {
        return $this->hasMany(DetailPermintaanNonMedis::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[DetailSuratPemesananNonMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailSuratPemesananNonMedis()
    {
        return $this->hasMany(DetailSuratPemesananNonMedis::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[IpsrsDetailHibahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsDetailHibahs()
    {
        return $this->hasMany(IpsrsDetailHibah::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[IpsrsDetailReturbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsDetailReturbelis()
    {
        return $this->hasMany(IpsrsDetailReturbeli::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[IpsrsRiwayatBarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsRiwayatBarangs()
    {
        return $this->hasMany(IpsrsRiwayatBarang::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Ipsrsdetailbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsdetailbelis()
    {
        return $this->hasMany(Ipsrsdetailbeli::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Ipsrsdetailpengeluarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsdetailpengeluarans()
    {
        return $this->hasMany(Ipsrsdetailpengeluaran::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Ipsrsdetailpesans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsdetailpesans()
    {
        return $this->hasMany(Ipsrsdetailpesan::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Ipsrsopnames]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsopnames()
    {
        return $this->hasMany(Ipsrsopname::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Jenis0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenis0()
    {
        return $this->hasOne(Ipsrsjenisbarang::class, ['kd_jenis' => 'jenis']);
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
     * Gets query for [[NoDonors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoDonors()
    {
        return $this->hasMany(UtdDonor::class, ['no_donor' => 'no_donor'])->viaTable('utd_penggunaan_penunjang_donor', ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[NoDonors0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoDonors0()
    {
        return $this->hasMany(UtdPemisahanKomponen::class, ['no_donor' => 'no_donor'])->viaTable('utd_penggunaan_penunjang_pemisahan_komponen', ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[NoHibahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoHibahs()
    {
        return $this->hasMany(IpsrsHibah::class, ['no_hibah' => 'no_hibah'])->viaTable('ipsrs_detail_hibah', ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[NoPenyerahans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoPenyerahans()
    {
        return $this->hasMany(UtdPenyerahanDarah::class, ['no_penyerahan' => 'no_penyerahan'])->viaTable('utd_penggunaan_penunjang_penyerahan_darah', ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[UtdPengambilanPenunjangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPengambilanPenunjangs()
    {
        return $this->hasMany(UtdPengambilanPenunjang::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[UtdPenggunaanPenunjangDonors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPenggunaanPenunjangDonors()
    {
        return $this->hasMany(UtdPenggunaanPenunjangDonor::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[UtdPenggunaanPenunjangPemisahanKomponens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPenggunaanPenunjangPemisahanKomponens()
    {
        return $this->hasMany(UtdPenggunaanPenunjangPemisahanKomponen::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[UtdPenggunaanPenunjangPenyerahanDarahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPenggunaanPenunjangPenyerahanDarahs()
    {
        return $this->hasMany(UtdPenggunaanPenunjangPenyerahanDarah::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[UtdPenunjangRusaks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPenunjangRusaks()
    {
        return $this->hasMany(UtdPenunjangRusak::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[UtdStokPenunjang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdStokPenunjang()
    {
        return $this->hasOne(UtdStokPenunjang::class, ['kode_brng' => 'kode_brng']);
    }
}
