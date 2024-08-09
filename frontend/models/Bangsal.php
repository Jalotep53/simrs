<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bangsal".
 *
 * @property string $kd_bangsal
 * @property string|null $nm_bangsal
 * @property string|null $status
 *
 * @property AplicareKetersediaanKamar[] $aplicareKetersediaanKamars
 * @property DetailPemberianObat[] $detailPemberianObats
 * @property Gudangbarang[] $gudangbarangs
 * @property HibahObatBhp[] $hibahObatBhps
 * @property JnsPerawatanInap[] $jnsPerawatanInaps
 * @property Kamar[] $kamars
 * @property Bangsal[] $kdBangsals
 * @property Bangsal[] $kdDepos
 * @property Poliklinik[] $kdPolis
 * @property Mutasibarang[] $mutasibarangs
 * @property Mutasibarang[] $mutasibarangs0
 * @property Opname[] $opnames
 * @property Pembelian[] $pembelians
 * @property Pemesanan[] $pemesanans
 * @property PengeluaranObatBhp[] $pengeluaranObatBhps
 * @property Penjualan[] $penjualans
 * @property PermintaanMedis[] $permintaanMedis
 * @property PermintaanMedis[] $permintaanMedis0
 * @property Piutang[] $piutangs
 * @property ResepPulang[] $resepPulangs
 * @property Returbeli[] $returbelis
 * @property Returjual[] $returjuals
 * @property Returpiutang[] $returpiutangs
 * @property RiwayatBarangMedis[] $riwayatBarangMedis
 * @property SatuSehatMappingLokasiDepoFarmasi $satuSehatMappingLokasiDepoFarmasi
 * @property SetDepoRalan[] $setDepoRalans
 * @property SetDepoRanap[] $setDepoRanaps
 * @property SetDepoRanap[] $setDepoRanaps0
 * @property SetLokasi[] $setLokasis
 * @property SiranapKetersediaanKamar[] $siranapKetersediaanKamars
 * @property StokObatPasien[] $stokObatPasiens
 * @property UtdPengambilanMedis[] $utdPengambilanMedis
 */
class Bangsal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bangsal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_bangsal'], 'required'],
            [['status'], 'string'],
            [['kd_bangsal'], 'string', 'max' => 5],
            [['nm_bangsal'], 'string', 'max' => 30],
            [['kd_bangsal'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_bangsal' => 'Kd Bangsal',
            'nm_bangsal' => 'Nm Bangsal',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[AplicareKetersediaanKamars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAplicareKetersediaanKamars()
    {
        return $this->hasMany(AplicareKetersediaanKamar::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[DetailPemberianObats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPemberianObats()
    {
        return $this->hasMany(DetailPemberianObat::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[Gudangbarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGudangbarangs()
    {
        return $this->hasMany(Gudangbarang::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[HibahObatBhps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHibahObatBhps()
    {
        return $this->hasMany(HibahObatBhp::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[JnsPerawatanInaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJnsPerawatanInaps()
    {
        return $this->hasMany(JnsPerawatanInap::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[Kamars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKamars()
    {
        return $this->hasMany(Kamar::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[KdBangsals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdBangsals()
    {
        return $this->hasMany(Bangsal::class, ['kd_bangsal' => 'kd_bangsal'])->viaTable('set_depo_ranap', ['kd_depo' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[KdDepos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDepos()
    {
        return $this->hasMany(Bangsal::class, ['kd_bangsal' => 'kd_depo'])->viaTable('set_depo_ranap', ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[KdPolis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPolis()
    {
        return $this->hasMany(Poliklinik::class, ['kd_poli' => 'kd_poli'])->viaTable('set_depo_ralan', ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[Mutasibarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMutasibarangs()
    {
        return $this->hasMany(Mutasibarang::class, ['kd_bangsaldari' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[Mutasibarangs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMutasibarangs0()
    {
        return $this->hasMany(Mutasibarang::class, ['kd_bangsalke' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[Opnames]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOpnames()
    {
        return $this->hasMany(Opname::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[Pembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembelians()
    {
        return $this->hasMany(Pembelian::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[Pemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemesanans()
    {
        return $this->hasMany(Pemesanan::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[PengeluaranObatBhps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengeluaranObatBhps()
    {
        return $this->hasMany(PengeluaranObatBhp::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[Penjualans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenjualans()
    {
        return $this->hasMany(Penjualan::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[PermintaanMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanMedis()
    {
        return $this->hasMany(PermintaanMedis::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[PermintaanMedis0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanMedis0()
    {
        return $this->hasMany(PermintaanMedis::class, ['kd_bangsaltujuan' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[Piutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPiutangs()
    {
        return $this->hasMany(Piutang::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[ResepPulangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResepPulangs()
    {
        return $this->hasMany(ResepPulang::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[Returbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturbelis()
    {
        return $this->hasMany(Returbeli::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[Returjuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturjuals()
    {
        return $this->hasMany(Returjual::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[Returpiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturpiutangs()
    {
        return $this->hasMany(Returpiutang::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[RiwayatBarangMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatBarangMedis()
    {
        return $this->hasMany(RiwayatBarangMedis::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[SatuSehatMappingLokasiDepoFarmasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMappingLokasiDepoFarmasi()
    {
        return $this->hasOne(SatuSehatMappingLokasiDepoFarmasi::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[SetDepoRalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetDepoRalans()
    {
        return $this->hasMany(SetDepoRalan::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[SetDepoRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetDepoRanaps()
    {
        return $this->hasMany(SetDepoRanap::class, ['kd_depo' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[SetDepoRanaps0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetDepoRanaps0()
    {
        return $this->hasMany(SetDepoRanap::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[SetLokasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetLokasis()
    {
        return $this->hasMany(SetLokasi::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[SiranapKetersediaanKamars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSiranapKetersediaanKamars()
    {
        return $this->hasMany(SiranapKetersediaanKamar::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[StokObatPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStokObatPasiens()
    {
        return $this->hasMany(StokObatPasien::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[UtdPengambilanMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPengambilanMedis()
    {
        return $this->hasMany(UtdPengambilanMedis::class, ['kd_bangsal_dr' => 'kd_bangsal']);
    }
}
