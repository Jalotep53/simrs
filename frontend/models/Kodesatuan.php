<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kodesatuan".
 *
 * @property string $kode_sat
 * @property string|null $satuan
 *
 * @property BeriBhpRadiologi[] $beriBhpRadiologis
 * @property DapurDetailHibah[] $dapurDetailHibahs
 * @property DapurDetailReturbeli[] $dapurDetailReturbelis
 * @property Dapurbarang[] $dapurbarangs
 * @property Dapurdetailbeli[] $dapurdetailbelis
 * @property Dapurdetailpengeluaran[] $dapurdetailpengeluarans
 * @property Dapurdetailpesan[] $dapurdetailpesans
 * @property Databarang[] $databarangs
 * @property Databarang[] $databarangs0
 * @property DetailPengajuanBarangDapur[] $detailPengajuanBarangDapurs
 * @property DetailPengajuanBarangMedis[] $detailPengajuanBarangMedis
 * @property DetailPengajuanBarangNonmedis[] $detailPengajuanBarangNonmedis
 * @property DetailPengeluaranObatBhp[] $detailPengeluaranObatBhps
 * @property DetailPermintaanDapur[] $detailPermintaanDapurs
 * @property DetailPermintaanMedis[] $detailPermintaanMedis
 * @property DetailPermintaanNonMedis[] $detailPermintaanNonMedis
 * @property DetailSuratPemesananDapur[] $detailSuratPemesananDapurs
 * @property DetailSuratPemesananMedis[] $detailSuratPemesananMedis
 * @property DetailSuratPemesananNonMedis[] $detailSuratPemesananNonMedis
 * @property Detailbeli[] $detailbelis
 * @property DetailhibahObatBhp[] $detailhibahObatBhps
 * @property Detailjual[] $detailjuals
 * @property Detailpesan[] $detailpesans
 * @property Detailpiutang[] $detailpiutangs
 * @property Detreturbeli[] $detreturbelis
 * @property Detreturjual[] $detreturjuals
 * @property Detreturpiutang[] $detreturpiutangs
 * @property IpsrsDetailHibah[] $ipsrsDetailHibahs
 * @property IpsrsDetailReturbeli[] $ipsrsDetailReturbelis
 * @property Ipsrsbarang[] $ipsrsbarangs
 * @property Ipsrsdetailbeli[] $ipsrsdetailbelis
 * @property Ipsrsdetailpengeluaran[] $ipsrsdetailpengeluarans
 * @property Ipsrsdetailpesan[] $ipsrsdetailpesans
 * @property KonverSat[] $konverSats
 * @property ObatbhpOk[] $obatbhpOks
 * @property TokoDetailBeli[] $tokoDetailBelis
 * @property TokoDetailJual[] $tokoDetailJuals
 * @property TokoDetailPengajuanBarang[] $tokoDetailPengajuanBarangs
 * @property TokoDetailPesan[] $tokoDetailPesans
 * @property TokoDetailPiutang[] $tokoDetailPiutangs
 * @property TokoDetailReturbeli[] $tokoDetailReturbelis
 * @property TokoDetailReturjual[] $tokoDetailReturjuals
 * @property TokoDetailReturpiutang[] $tokoDetailReturpiutangs
 * @property TokoDetailSuratPemesanan[] $tokoDetailSuratPemesanans
 * @property Tokobarang[] $tokobarangs
 */
class Kodesatuan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kodesatuan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_sat'], 'required'],
            [['kode_sat'], 'string', 'max' => 4],
            [['satuan'], 'string', 'max' => 30],
            [['kode_sat'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_sat' => 'Kode Sat',
            'satuan' => 'Satuan',
        ];
    }

    /**
     * Gets query for [[BeriBhpRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBeriBhpRadiologis()
    {
        return $this->hasMany(BeriBhpRadiologi::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[DapurDetailHibahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDapurDetailHibahs()
    {
        return $this->hasMany(DapurDetailHibah::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[DapurDetailReturbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDapurDetailReturbelis()
    {
        return $this->hasMany(DapurDetailReturbeli::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[Dapurbarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDapurbarangs()
    {
        return $this->hasMany(Dapurbarang::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[Dapurdetailbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDapurdetailbelis()
    {
        return $this->hasMany(Dapurdetailbeli::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[Dapurdetailpengeluarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDapurdetailpengeluarans()
    {
        return $this->hasMany(Dapurdetailpengeluaran::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[Dapurdetailpesans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDapurdetailpesans()
    {
        return $this->hasMany(Dapurdetailpesan::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[Databarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDatabarangs()
    {
        return $this->hasMany(Databarang::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[Databarangs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDatabarangs0()
    {
        return $this->hasMany(Databarang::class, ['kode_satbesar' => 'kode_sat']);
    }

    /**
     * Gets query for [[DetailPengajuanBarangDapurs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPengajuanBarangDapurs()
    {
        return $this->hasMany(DetailPengajuanBarangDapur::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[DetailPengajuanBarangMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPengajuanBarangMedis()
    {
        return $this->hasMany(DetailPengajuanBarangMedis::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[DetailPengajuanBarangNonmedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPengajuanBarangNonmedis()
    {
        return $this->hasMany(DetailPengajuanBarangNonmedis::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[DetailPengeluaranObatBhps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPengeluaranObatBhps()
    {
        return $this->hasMany(DetailPengeluaranObatBhp::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[DetailPermintaanDapurs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPermintaanDapurs()
    {
        return $this->hasMany(DetailPermintaanDapur::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[DetailPermintaanMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPermintaanMedis()
    {
        return $this->hasMany(DetailPermintaanMedis::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[DetailPermintaanNonMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPermintaanNonMedis()
    {
        return $this->hasMany(DetailPermintaanNonMedis::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[DetailSuratPemesananDapurs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailSuratPemesananDapurs()
    {
        return $this->hasMany(DetailSuratPemesananDapur::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[DetailSuratPemesananMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailSuratPemesananMedis()
    {
        return $this->hasMany(DetailSuratPemesananMedis::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[DetailSuratPemesananNonMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailSuratPemesananNonMedis()
    {
        return $this->hasMany(DetailSuratPemesananNonMedis::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[Detailbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailbelis()
    {
        return $this->hasMany(Detailbeli::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[DetailhibahObatBhps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailhibahObatBhps()
    {
        return $this->hasMany(DetailhibahObatBhp::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[Detailjuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailjuals()
    {
        return $this->hasMany(Detailjual::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[Detailpesans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailpesans()
    {
        return $this->hasMany(Detailpesan::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[Detailpiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailpiutangs()
    {
        return $this->hasMany(Detailpiutang::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[Detreturbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetreturbelis()
    {
        return $this->hasMany(Detreturbeli::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[Detreturjuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetreturjuals()
    {
        return $this->hasMany(Detreturjual::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[Detreturpiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetreturpiutangs()
    {
        return $this->hasMany(Detreturpiutang::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[IpsrsDetailHibahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsDetailHibahs()
    {
        return $this->hasMany(IpsrsDetailHibah::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[IpsrsDetailReturbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsDetailReturbelis()
    {
        return $this->hasMany(IpsrsDetailReturbeli::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[Ipsrsbarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsbarangs()
    {
        return $this->hasMany(Ipsrsbarang::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[Ipsrsdetailbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsdetailbelis()
    {
        return $this->hasMany(Ipsrsdetailbeli::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[Ipsrsdetailpengeluarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsdetailpengeluarans()
    {
        return $this->hasMany(Ipsrsdetailpengeluaran::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[Ipsrsdetailpesans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsdetailpesans()
    {
        return $this->hasMany(Ipsrsdetailpesan::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[KonverSats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKonverSats()
    {
        return $this->hasMany(KonverSat::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[ObatbhpOks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObatbhpOks()
    {
        return $this->hasMany(ObatbhpOk::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[TokoDetailBelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailBelis()
    {
        return $this->hasMany(TokoDetailBeli::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[TokoDetailJuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailJuals()
    {
        return $this->hasMany(TokoDetailJual::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[TokoDetailPengajuanBarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailPengajuanBarangs()
    {
        return $this->hasMany(TokoDetailPengajuanBarang::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[TokoDetailPesans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailPesans()
    {
        return $this->hasMany(TokoDetailPesan::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[TokoDetailPiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailPiutangs()
    {
        return $this->hasMany(TokoDetailPiutang::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[TokoDetailReturbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailReturbelis()
    {
        return $this->hasMany(TokoDetailReturbeli::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[TokoDetailReturjuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailReturjuals()
    {
        return $this->hasMany(TokoDetailReturjual::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[TokoDetailReturpiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailReturpiutangs()
    {
        return $this->hasMany(TokoDetailReturpiutang::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[TokoDetailSuratPemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailSuratPemesanans()
    {
        return $this->hasMany(TokoDetailSuratPemesanan::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[Tokobarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokobarangs()
    {
        return $this->hasMany(Tokobarang::class, ['kode_sat' => 'kode_sat']);
    }
}
