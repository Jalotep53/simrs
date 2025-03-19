<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rekening".
 *
 * @property string $kd_rek
 * @property string|null $nm_rek
 * @property string|null $tipe
 * @property string|null $balance
 * @property string|null $level
 *
 * @property AkunAsetInventaris[] $akunAsetInventaris
 * @property AkunBayarHutang[] $akunBayarHutangs
 * @property AkunBayar[] $akunBayars
 * @property AkunPenagihanPiutang $akunPenagihanPiutang
 * @property AkunPiutang[] $akunPiutangs
 * @property BayarPiutangLainlain[] $bayarPiutangLainlains
 * @property BayarPiutang[] $bayarPiutangs
 * @property BayarPiutang[] $bayarPiutangs0
 * @property BayarPiutang[] $bayarPiutangs1
 * @property BayarPiutang[] $bayarPiutangs2
 * @property Dapurpembelian[] $dapurpembelians
 * @property Detailjurnal[] $detailjurnals
 * @property InventarisHibah[] $inventarisHibahs
 * @property InventarisPembelian[] $inventarisPembelians
 * @property InventarisPembelian[] $inventarisPembelians0
 * @property Ipsrspembelian[] $ipsrspembelians
 * @property KategoriPemasukanLain[] $kategoriPemasukanLains
 * @property KategoriPemasukanLain[] $kategoriPemasukanLains0
 * @property KategoriPengeluaranHarian[] $kategoriPengeluaranHarians
 * @property KategoriPengeluaranHarian[] $kategoriPengeluaranHarians0
 * @property Penjab[] $kdPjs
 * @property Rekening[] $kdReks
 * @property Rekening[] $kdReks0
 * @property MatrikAkunJnsPerawatanInap[] $matrikAkunJnsPerawatanInaps
 * @property MatrikAkunJnsPerawatanInap[] $matrikAkunJnsPerawatanInaps0
 * @property MatrikAkunJnsPerawatanInap[] $matrikAkunJnsPerawatanInaps1
 * @property MatrikAkunJnsPerawatanInap[] $matrikAkunJnsPerawatanInaps10
 * @property MatrikAkunJnsPerawatanInap[] $matrikAkunJnsPerawatanInaps11
 * @property MatrikAkunJnsPerawatanInap[] $matrikAkunJnsPerawatanInaps2
 * @property MatrikAkunJnsPerawatanInap[] $matrikAkunJnsPerawatanInaps3
 * @property MatrikAkunJnsPerawatanInap[] $matrikAkunJnsPerawatanInaps4
 * @property MatrikAkunJnsPerawatanInap[] $matrikAkunJnsPerawatanInaps5
 * @property MatrikAkunJnsPerawatanInap[] $matrikAkunJnsPerawatanInaps6
 * @property MatrikAkunJnsPerawatanInap[] $matrikAkunJnsPerawatanInaps7
 * @property MatrikAkunJnsPerawatanInap[] $matrikAkunJnsPerawatanInaps8
 * @property MatrikAkunJnsPerawatanInap[] $matrikAkunJnsPerawatanInaps9
 * @property MatrikAkunJnsPerawatan[] $matrikAkunJnsPerawatans
 * @property MatrikAkunJnsPerawatan[] $matrikAkunJnsPerawatans0
 * @property MatrikAkunJnsPerawatan[] $matrikAkunJnsPerawatans1
 * @property MatrikAkunJnsPerawatan[] $matrikAkunJnsPerawatans10
 * @property MatrikAkunJnsPerawatan[] $matrikAkunJnsPerawatans11
 * @property MatrikAkunJnsPerawatan[] $matrikAkunJnsPerawatans2
 * @property MatrikAkunJnsPerawatan[] $matrikAkunJnsPerawatans3
 * @property MatrikAkunJnsPerawatan[] $matrikAkunJnsPerawatans4
 * @property MatrikAkunJnsPerawatan[] $matrikAkunJnsPerawatans5
 * @property MatrikAkunJnsPerawatan[] $matrikAkunJnsPerawatans6
 * @property MatrikAkunJnsPerawatan[] $matrikAkunJnsPerawatans7
 * @property MatrikAkunJnsPerawatan[] $matrikAkunJnsPerawatans8
 * @property MatrikAkunJnsPerawatan[] $matrikAkunJnsPerawatans9
 * @property Pembelian[] $pembelians
 * @property Peminjampiutang[] $peminjampiutangs
 * @property PenagihanPiutang[] $penagihanPiutangs
 * @property Penjualan[] $penjualans
 * @property PiutangLainlain[] $piutangLainlains
 * @property Rekeningtahun[] $rekeningtahuns
 * @property RvpKlaimBpjs[] $rvpKlaimBpjs
 * @property RvpKlaimBpjs[] $rvpKlaimBpjs0
 * @property SetAkun2[] $setAkun2s
 * @property SetAkun2[] $setAkun2s0
 * @property SetAkun2[] $setAkun2s1
 * @property SetAkun2[] $setAkun2s2
 * @property SetAkun2[] $setAkun2s3
 * @property SetAkun2[] $setAkun2s4
 * @property SetAkun2[] $setAkun2s5
 * @property SetAkunBankbri $setAkunBankbri
 * @property SetAkunBankjabar[] $setAkunBankjabars
 * @property SetAkunBankjateng $setAkunBankjateng
 * @property SetAkunBankpapua $setAkunBankpapua
 * @property SetAkunMandiri $setAkunMandiri
 * @property SetAkunMandiri $setAkunMandiri0
 * @property SetAkunRalan[] $setAkunRalans
 * @property SetAkunRalan[] $setAkunRalans0
 * @property SetAkunRalan[] $setAkunRalans1
 * @property SetAkunRalan[] $setAkunRalans10
 * @property SetAkunRalan[] $setAkunRalans11
 * @property SetAkunRalan[] $setAkunRalans12
 * @property SetAkunRalan[] $setAkunRalans13
 * @property SetAkunRalan[] $setAkunRalans14
 * @property SetAkunRalan[] $setAkunRalans15
 * @property SetAkunRalan[] $setAkunRalans16
 * @property SetAkunRalan[] $setAkunRalans17
 * @property SetAkunRalan[] $setAkunRalans18
 * @property SetAkunRalan[] $setAkunRalans19
 * @property SetAkunRalan[] $setAkunRalans2
 * @property SetAkunRalan[] $setAkunRalans20
 * @property SetAkunRalan[] $setAkunRalans21
 * @property SetAkunRalan[] $setAkunRalans22
 * @property SetAkunRalan[] $setAkunRalans23
 * @property SetAkunRalan[] $setAkunRalans24
 * @property SetAkunRalan[] $setAkunRalans25
 * @property SetAkunRalan[] $setAkunRalans26
 * @property SetAkunRalan[] $setAkunRalans27
 * @property SetAkunRalan[] $setAkunRalans28
 * @property SetAkunRalan[] $setAkunRalans29
 * @property SetAkunRalan[] $setAkunRalans3
 * @property SetAkunRalan[] $setAkunRalans30
 * @property SetAkunRalan[] $setAkunRalans31
 * @property SetAkunRalan[] $setAkunRalans32
 * @property SetAkunRalan[] $setAkunRalans33
 * @property SetAkunRalan[] $setAkunRalans34
 * @property SetAkunRalan[] $setAkunRalans35
 * @property SetAkunRalan[] $setAkunRalans36
 * @property SetAkunRalan[] $setAkunRalans37
 * @property SetAkunRalan[] $setAkunRalans38
 * @property SetAkunRalan[] $setAkunRalans39
 * @property SetAkunRalan[] $setAkunRalans4
 * @property SetAkunRalan[] $setAkunRalans40
 * @property SetAkunRalan[] $setAkunRalans41
 * @property SetAkunRalan[] $setAkunRalans42
 * @property SetAkunRalan[] $setAkunRalans43
 * @property SetAkunRalan[] $setAkunRalans44
 * @property SetAkunRalan[] $setAkunRalans45
 * @property SetAkunRalan[] $setAkunRalans46
 * @property SetAkunRalan[] $setAkunRalans47
 * @property SetAkunRalan[] $setAkunRalans48
 * @property SetAkunRalan[] $setAkunRalans49
 * @property SetAkunRalan[] $setAkunRalans5
 * @property SetAkunRalan[] $setAkunRalans50
 * @property SetAkunRalan[] $setAkunRalans51
 * @property SetAkunRalan[] $setAkunRalans52
 * @property SetAkunRalan[] $setAkunRalans53
 * @property SetAkunRalan[] $setAkunRalans54
 * @property SetAkunRalan[] $setAkunRalans55
 * @property SetAkunRalan[] $setAkunRalans56
 * @property SetAkunRalan[] $setAkunRalans57
 * @property SetAkunRalan[] $setAkunRalans58
 * @property SetAkunRalan[] $setAkunRalans59
 * @property SetAkunRalan[] $setAkunRalans6
 * @property SetAkunRalan[] $setAkunRalans7
 * @property SetAkunRalan[] $setAkunRalans8
 * @property SetAkunRalan[] $setAkunRalans9
 * @property SetAkunRanap2[] $setAkunRanap2s
 * @property SetAkunRanap2[] $setAkunRanap2s0
 * @property SetAkunRanap2[] $setAkunRanap2s1
 * @property SetAkunRanap2[] $setAkunRanap2s2
 * @property SetAkunRanap2[] $setAkunRanap2s3
 * @property SetAkunRanap[] $setAkunRanaps
 * @property SetAkunRanap[] $setAkunRanaps0
 * @property SetAkunRanap[] $setAkunRanaps1
 * @property SetAkunRanap[] $setAkunRanaps10
 * @property SetAkunRanap[] $setAkunRanaps11
 * @property SetAkunRanap[] $setAkunRanaps12
 * @property SetAkunRanap[] $setAkunRanaps13
 * @property SetAkunRanap[] $setAkunRanaps14
 * @property SetAkunRanap[] $setAkunRanaps15
 * @property SetAkunRanap[] $setAkunRanaps16
 * @property SetAkunRanap[] $setAkunRanaps17
 * @property SetAkunRanap[] $setAkunRanaps18
 * @property SetAkunRanap[] $setAkunRanaps19
 * @property SetAkunRanap[] $setAkunRanaps2
 * @property SetAkunRanap[] $setAkunRanaps20
 * @property SetAkunRanap[] $setAkunRanaps21
 * @property SetAkunRanap[] $setAkunRanaps22
 * @property SetAkunRanap[] $setAkunRanaps23
 * @property SetAkunRanap[] $setAkunRanaps24
 * @property SetAkunRanap[] $setAkunRanaps25
 * @property SetAkunRanap[] $setAkunRanaps26
 * @property SetAkunRanap[] $setAkunRanaps27
 * @property SetAkunRanap[] $setAkunRanaps28
 * @property SetAkunRanap[] $setAkunRanaps29
 * @property SetAkunRanap[] $setAkunRanaps3
 * @property SetAkunRanap[] $setAkunRanaps30
 * @property SetAkunRanap[] $setAkunRanaps31
 * @property SetAkunRanap[] $setAkunRanaps32
 * @property SetAkunRanap[] $setAkunRanaps33
 * @property SetAkunRanap[] $setAkunRanaps34
 * @property SetAkunRanap[] $setAkunRanaps35
 * @property SetAkunRanap[] $setAkunRanaps36
 * @property SetAkunRanap[] $setAkunRanaps37
 * @property SetAkunRanap[] $setAkunRanaps38
 * @property SetAkunRanap[] $setAkunRanaps39
 * @property SetAkunRanap[] $setAkunRanaps4
 * @property SetAkunRanap[] $setAkunRanaps40
 * @property SetAkunRanap[] $setAkunRanaps41
 * @property SetAkunRanap[] $setAkunRanaps42
 * @property SetAkunRanap[] $setAkunRanaps43
 * @property SetAkunRanap[] $setAkunRanaps44
 * @property SetAkunRanap[] $setAkunRanaps45
 * @property SetAkunRanap[] $setAkunRanaps46
 * @property SetAkunRanap[] $setAkunRanaps47
 * @property SetAkunRanap[] $setAkunRanaps48
 * @property SetAkunRanap[] $setAkunRanaps49
 * @property SetAkunRanap[] $setAkunRanaps5
 * @property SetAkunRanap[] $setAkunRanaps50
 * @property SetAkunRanap[] $setAkunRanaps51
 * @property SetAkunRanap[] $setAkunRanaps52
 * @property SetAkunRanap[] $setAkunRanaps53
 * @property SetAkunRanap[] $setAkunRanaps54
 * @property SetAkunRanap[] $setAkunRanaps55
 * @property SetAkunRanap[] $setAkunRanaps56
 * @property SetAkunRanap[] $setAkunRanaps57
 * @property SetAkunRanap[] $setAkunRanaps58
 * @property SetAkunRanap[] $setAkunRanaps59
 * @property SetAkunRanap[] $setAkunRanaps6
 * @property SetAkunRanap[] $setAkunRanaps60
 * @property SetAkunRanap[] $setAkunRanaps61
 * @property SetAkunRanap[] $setAkunRanaps62
 * @property SetAkunRanap[] $setAkunRanaps7
 * @property SetAkunRanap[] $setAkunRanaps8
 * @property SetAkunRanap[] $setAkunRanaps9
 * @property SetAkun[] $setAkuns
 * @property SetAkun[] $setAkuns0
 * @property SetAkun[] $setAkuns1
 * @property SetAkun[] $setAkuns10
 * @property SetAkun[] $setAkuns11
 * @property SetAkun[] $setAkuns12
 * @property SetAkun[] $setAkuns13
 * @property SetAkun[] $setAkuns14
 * @property SetAkun[] $setAkuns15
 * @property SetAkun[] $setAkuns16
 * @property SetAkun[] $setAkuns17
 * @property SetAkun[] $setAkuns18
 * @property SetAkun[] $setAkuns19
 * @property SetAkun[] $setAkuns2
 * @property SetAkun[] $setAkuns20
 * @property SetAkun[] $setAkuns21
 * @property SetAkun[] $setAkuns22
 * @property SetAkun[] $setAkuns23
 * @property SetAkun[] $setAkuns24
 * @property SetAkun[] $setAkuns25
 * @property SetAkun[] $setAkuns26
 * @property SetAkun[] $setAkuns27
 * @property SetAkun[] $setAkuns28
 * @property SetAkun[] $setAkuns29
 * @property SetAkun[] $setAkuns3
 * @property SetAkun[] $setAkuns30
 * @property SetAkun[] $setAkuns31
 * @property SetAkun[] $setAkuns32
 * @property SetAkun[] $setAkuns33
 * @property SetAkun[] $setAkuns34
 * @property SetAkun[] $setAkuns35
 * @property SetAkun[] $setAkuns36
 * @property SetAkun[] $setAkuns37
 * @property SetAkun[] $setAkuns38
 * @property SetAkun[] $setAkuns39
 * @property SetAkun[] $setAkuns4
 * @property SetAkun[] $setAkuns40
 * @property SetAkun[] $setAkuns41
 * @property SetAkun[] $setAkuns42
 * @property SetAkun[] $setAkuns43
 * @property SetAkun[] $setAkuns44
 * @property SetAkun[] $setAkuns45
 * @property SetAkun[] $setAkuns46
 * @property SetAkun[] $setAkuns47
 * @property SetAkun[] $setAkuns48
 * @property SetAkun[] $setAkuns49
 * @property SetAkun[] $setAkuns5
 * @property SetAkun[] $setAkuns50
 * @property SetAkun[] $setAkuns51
 * @property SetAkun[] $setAkuns52
 * @property SetAkun[] $setAkuns53
 * @property SetAkun[] $setAkuns54
 * @property SetAkun[] $setAkuns55
 * @property SetAkun[] $setAkuns56
 * @property SetAkun[] $setAkuns57
 * @property SetAkun[] $setAkuns58
 * @property SetAkun[] $setAkuns59
 * @property SetAkun[] $setAkuns6
 * @property SetAkun[] $setAkuns60
 * @property SetAkun[] $setAkuns61
 * @property SetAkun[] $setAkuns62
 * @property SetAkun[] $setAkuns7
 * @property SetAkun[] $setAkuns8
 * @property SetAkun[] $setAkuns9
 * @property Subrekening $subrekening
 * @property Subrekening[] $subrekenings
 * @property TokoBayarPiutang[] $tokoBayarPiutangs
 * @property TokoBayarPiutang[] $tokoBayarPiutangs0
 * @property Tokopenjualan[] $tokopenjualans
 * @property UtdPenyerahanDarah[] $utdPenyerahanDarahs
 */
class Rekening extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rekening';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_rek'], 'required'],
            [['tipe', 'balance', 'level'], 'string'],
            [['kd_rek'], 'string', 'max' => 15],
            [['nm_rek'], 'string', 'max' => 100],
            [['kd_rek'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_rek' => 'Kd Rek',
            'nm_rek' => 'Nm Rek',
            'tipe' => 'Tipe',
            'balance' => 'Balance',
            'level' => 'Level',
        ];
    }

    /**
     * Gets query for [[AkunAsetInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAkunAsetInventaris()
    {
        return $this->hasMany(AkunAsetInventaris::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[AkunBayarHutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAkunBayarHutangs()
    {
        return $this->hasMany(AkunBayarHutang::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[AkunBayars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAkunBayars()
    {
        return $this->hasMany(AkunBayar::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[AkunPenagihanPiutang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAkunPenagihanPiutang()
    {
        return $this->hasOne(AkunPenagihanPiutang::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[AkunPiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAkunPiutangs()
    {
        return $this->hasMany(AkunPiutang::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[BayarPiutangLainlains]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPiutangLainlains()
    {
        return $this->hasMany(BayarPiutangLainlain::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[BayarPiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPiutangs()
    {
        return $this->hasMany(BayarPiutang::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[BayarPiutangs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPiutangs0()
    {
        return $this->hasMany(BayarPiutang::class, ['kd_rek_kontra' => 'kd_rek']);
    }

    /**
     * Gets query for [[BayarPiutangs1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPiutangs1()
    {
        return $this->hasMany(BayarPiutang::class, ['kd_rek_diskon_piutang' => 'kd_rek']);
    }

    /**
     * Gets query for [[BayarPiutangs2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPiutangs2()
    {
        return $this->hasMany(BayarPiutang::class, ['kd_rek_tidak_terbayar' => 'kd_rek']);
    }

    /**
     * Gets query for [[Dapurpembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDapurpembelians()
    {
        return $this->hasMany(Dapurpembelian::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[Detailjurnals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailjurnals()
    {
        return $this->hasMany(Detailjurnal::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[InventarisHibahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisHibahs()
    {
        return $this->hasMany(InventarisHibah::class, ['kd_rek_aset' => 'kd_rek']);
    }

    /**
     * Gets query for [[InventarisPembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisPembelians()
    {
        return $this->hasMany(InventarisPembelian::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[InventarisPembelians0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisPembelians0()
    {
        return $this->hasMany(InventarisPembelian::class, ['kd_rek_aset' => 'kd_rek']);
    }

    /**
     * Gets query for [[Ipsrspembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrspembelians()
    {
        return $this->hasMany(Ipsrspembelian::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[KategoriPemasukanLains]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriPemasukanLains()
    {
        return $this->hasMany(KategoriPemasukanLain::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[KategoriPemasukanLains0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriPemasukanLains0()
    {
        return $this->hasMany(KategoriPemasukanLain::class, ['kd_rek2' => 'kd_rek']);
    }

    /**
     * Gets query for [[KategoriPengeluaranHarians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriPengeluaranHarians()
    {
        return $this->hasMany(KategoriPengeluaranHarian::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[KategoriPengeluaranHarians0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriPengeluaranHarians0()
    {
        return $this->hasMany(KategoriPengeluaranHarian::class, ['kd_rek2' => 'kd_rek']);
    }

    /**
     * Gets query for [[KdPjs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPjs()
    {
        return $this->hasMany(Penjab::class, ['kd_pj' => 'kd_pj'])->viaTable('akun_piutang', ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[KdReks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdReks()
    {
        return $this->hasMany(Rekening::class, ['kd_rek' => 'kd_rek'])->viaTable('set_akun_mandiri', ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[KdReks0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdReks0()
    {
        return $this->hasMany(Rekening::class, ['kd_rek' => 'kd_rek'])->viaTable('set_akun_mandiri', ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatanInaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatanInaps()
    {
        return $this->hasMany(MatrikAkunJnsPerawatanInap::class, ['beban_kso' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatanInaps0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatanInaps0()
    {
        return $this->hasMany(MatrikAkunJnsPerawatanInap::class, ['beban_menejemen' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatanInaps1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatanInaps1()
    {
        return $this->hasMany(MatrikAkunJnsPerawatanInap::class, ['hpp_persediaan' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatanInaps10]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatanInaps10()
    {
        return $this->hasMany(MatrikAkunJnsPerawatanInap::class, ['beban_jasa_paramedis' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatanInaps11]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatanInaps11()
    {
        return $this->hasMany(MatrikAkunJnsPerawatanInap::class, ['beban_jasa_sarana' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatanInaps2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatanInaps2()
    {
        return $this->hasMany(MatrikAkunJnsPerawatanInap::class, ['pendapatan_tindakan' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatanInaps3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatanInaps3()
    {
        return $this->hasMany(MatrikAkunJnsPerawatanInap::class, ['persediaan_bhp' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatanInaps4]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatanInaps4()
    {
        return $this->hasMany(MatrikAkunJnsPerawatanInap::class, ['utang_jasa_dokter' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatanInaps5]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatanInaps5()
    {
        return $this->hasMany(MatrikAkunJnsPerawatanInap::class, ['utang_jasa_paramedis' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatanInaps6]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatanInaps6()
    {
        return $this->hasMany(MatrikAkunJnsPerawatanInap::class, ['utang_jasa_sarana' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatanInaps7]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatanInaps7()
    {
        return $this->hasMany(MatrikAkunJnsPerawatanInap::class, ['utang_kso' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatanInaps8]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatanInaps8()
    {
        return $this->hasMany(MatrikAkunJnsPerawatanInap::class, ['utang_menejemen' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatanInaps9]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatanInaps9()
    {
        return $this->hasMany(MatrikAkunJnsPerawatanInap::class, ['beban_jasa_dokter' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatans()
    {
        return $this->hasMany(MatrikAkunJnsPerawatan::class, ['utang_jasa_dokter' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatans0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatans0()
    {
        return $this->hasMany(MatrikAkunJnsPerawatan::class, ['utang_jasa_paramedis' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatans1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatans1()
    {
        return $this->hasMany(MatrikAkunJnsPerawatan::class, ['utang_jasa_sarana' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatans10]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatans10()
    {
        return $this->hasMany(MatrikAkunJnsPerawatan::class, ['pendapatan_tindakan' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatans11]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatans11()
    {
        return $this->hasMany(MatrikAkunJnsPerawatan::class, ['persediaan_bhp' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatans2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatans2()
    {
        return $this->hasMany(MatrikAkunJnsPerawatan::class, ['utang_kso' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatans3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatans3()
    {
        return $this->hasMany(MatrikAkunJnsPerawatan::class, ['utang_menejemen' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatans4]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatans4()
    {
        return $this->hasMany(MatrikAkunJnsPerawatan::class, ['beban_jasa_dokter' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatans5]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatans5()
    {
        return $this->hasMany(MatrikAkunJnsPerawatan::class, ['beban_jasa_paramedis' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatans6]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatans6()
    {
        return $this->hasMany(MatrikAkunJnsPerawatan::class, ['beban_jasa_sarana' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatans7]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatans7()
    {
        return $this->hasMany(MatrikAkunJnsPerawatan::class, ['beban_kso' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatans8]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatans8()
    {
        return $this->hasMany(MatrikAkunJnsPerawatan::class, ['beban_menejemen' => 'kd_rek']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatans9]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatans9()
    {
        return $this->hasMany(MatrikAkunJnsPerawatan::class, ['hpp_persediaan' => 'kd_rek']);
    }

    /**
     * Gets query for [[Pembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembelians()
    {
        return $this->hasMany(Pembelian::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[Peminjampiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjampiutangs()
    {
        return $this->hasMany(Peminjampiutang::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[PenagihanPiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenagihanPiutangs()
    {
        return $this->hasMany(PenagihanPiutang::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[Penjualans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenjualans()
    {
        return $this->hasMany(Penjualan::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[PiutangLainlains]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPiutangLainlains()
    {
        return $this->hasMany(PiutangLainlain::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[Rekeningtahuns]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRekeningtahuns()
    {
        return $this->hasMany(Rekeningtahun::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[RvpKlaimBpjs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRvpKlaimBpjs()
    {
        return $this->hasMany(RvpKlaimBpjs::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[RvpKlaimBpjs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRvpKlaimBpjs0()
    {
        return $this->hasMany(RvpKlaimBpjs::class, ['kd_rek_kontra' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkun2s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkun2s()
    {
        return $this->hasMany(SetAkun2::class, ['Bayar_Pemesanan_Dapur' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkun2s0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkun2s0()
    {
        return $this->hasMany(SetAkun2::class, ['Kontra_Penerimaan_Dapur' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkun2s1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkun2s1()
    {
        return $this->hasMany(SetAkun2::class, ['Kontra_Retur_Beli_Dapur' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkun2s2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkun2s2()
    {
        return $this->hasMany(SetAkun2::class, ['Penerimaan_Dapur' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkun2s3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkun2s3()
    {
        return $this->hasMany(SetAkun2::class, ['Retur_Beli_Dapur' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkun2s4]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkun2s4()
    {
        return $this->hasMany(SetAkun2::class, ['Hibah_Dapur' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkun2s5]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkun2s5()
    {
        return $this->hasMany(SetAkun2::class, ['Kontra_Hibah_Dapur' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunBankbri]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunBankbri()
    {
        return $this->hasOne(SetAkunBankbri::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunBankjabars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunBankjabars()
    {
        return $this->hasMany(SetAkunBankjabar::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunBankjateng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunBankjateng()
    {
        return $this->hasOne(SetAkunBankjateng::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunBankpapua]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunBankpapua()
    {
        return $this->hasOne(SetAkunBankpapua::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunMandiri]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunMandiri()
    {
        return $this->hasOne(SetAkunMandiri::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunMandiri0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunMandiri0()
    {
        return $this->hasOne(SetAkunMandiri::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans()
    {
        return $this->hasMany(SetAkunRalan::class, ['Tindakan_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans0()
    {
        return $this->hasMany(SetAkunRalan::class, ['Utang_Jasa_Medik_Dokter_Laborat_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans1()
    {
        return $this->hasMany(SetAkunRalan::class, ['Beban_Jasa_Medik_Petugas_Laborat_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans10]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans10()
    {
        return $this->hasMany(SetAkunRalan::class, ['Beban_Jasa_Medik_Dokter_Tindakan_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans11]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans11()
    {
        return $this->hasMany(SetAkunRalan::class, ['Beban_Jasa_Medik_Petugas_Radiologi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans12]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans12()
    {
        return $this->hasMany(SetAkunRalan::class, ['Utang_Jasa_Medik_Petugas_Radiologi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans13]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans13()
    {
        return $this->hasMany(SetAkunRalan::class, ['Beban_Kso_Radiologi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans14]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans14()
    {
        return $this->hasMany(SetAkunRalan::class, ['Utang_Kso_Radiologi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans15]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans15()
    {
        return $this->hasMany(SetAkunRalan::class, ['HPP_Persediaan_Radiologi_Rawat_Jalan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans16]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans16()
    {
        return $this->hasMany(SetAkunRalan::class, ['Persediaan_BHP_Radiologi_Rawat_Jalan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans17]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans17()
    {
        return $this->hasMany(SetAkunRalan::class, ['Obat_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans18]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans18()
    {
        return $this->hasMany(SetAkunRalan::class, ['HPP_Obat_Rawat_Jalan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans19]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans19()
    {
        return $this->hasMany(SetAkunRalan::class, ['Persediaan_Obat_Rawat_Jalan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans2()
    {
        return $this->hasMany(SetAkunRalan::class, ['Utang_Jasa_Medik_Petugas_Laborat_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans20]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans20()
    {
        return $this->hasMany(SetAkunRalan::class, ['Registrasi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans21]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans21()
    {
        return $this->hasMany(SetAkunRalan::class, ['Utang_Jasa_Medik_Dokter_Tindakan_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans22]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans22()
    {
        return $this->hasMany(SetAkunRalan::class, ['Operasi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans23]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans23()
    {
        return $this->hasMany(SetAkunRalan::class, ['Beban_Jasa_Medik_Dokter_Operasi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans24]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans24()
    {
        return $this->hasMany(SetAkunRalan::class, ['Utang_Jasa_Medik_Dokter_Operasi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans25]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans25()
    {
        return $this->hasMany(SetAkunRalan::class, ['Beban_Jasa_Medik_Paramedis_Operasi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans26]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans26()
    {
        return $this->hasMany(SetAkunRalan::class, ['Utang_Jasa_Medik_Paramedis_Operasi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans27]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans27()
    {
        return $this->hasMany(SetAkunRalan::class, ['HPP_Obat_Operasi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans28]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans28()
    {
        return $this->hasMany(SetAkunRalan::class, ['Persediaan_Obat_Kamar_Operasi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans29]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans29()
    {
        return $this->hasMany(SetAkunRalan::class, ['Tambahan_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans3()
    {
        return $this->hasMany(SetAkunRalan::class, ['Beban_Kso_Laborat_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans30]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans30()
    {
        return $this->hasMany(SetAkunRalan::class, ['Potongan_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans31]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans31()
    {
        return $this->hasMany(SetAkunRalan::class, ['Beban_Jasa_Menejemen_Tindakan_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans32]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans32()
    {
        return $this->hasMany(SetAkunRalan::class, ['Beban_Jasa_Medik_Paramedis_Tindakan_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans33]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans33()
    {
        return $this->hasMany(SetAkunRalan::class, ['Beban_Jasa_Sarana_Tindakan_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans34]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans34()
    {
        return $this->hasMany(SetAkunRalan::class, ['HPP_BHP_Tindakan_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans35]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans35()
    {
        return $this->hasMany(SetAkunRalan::class, ['Utang_Jasa_Menejemen_Tindakan_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans36]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans36()
    {
        return $this->hasMany(SetAkunRalan::class, ['Utang_Jasa_Sarana_Tindakan_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans37]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans37()
    {
        return $this->hasMany(SetAkunRalan::class, ['Persediaan_BHP_Tindakan_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans38]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans38()
    {
        return $this->hasMany(SetAkunRalan::class, ['Suspen_Piutang_Tindakan_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans39]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans39()
    {
        return $this->hasMany(SetAkunRalan::class, ['Suspen_Piutang_Laborat_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans4]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans4()
    {
        return $this->hasMany(SetAkunRalan::class, ['Utang_Kso_Laborat_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans40]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans40()
    {
        return $this->hasMany(SetAkunRalan::class, ['Suspen_Piutang_Radiologi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans41]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans41()
    {
        return $this->hasMany(SetAkunRalan::class, ['Suspen_Piutang_Obat_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans42]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans42()
    {
        return $this->hasMany(SetAkunRalan::class, ['Suspen_Piutang_Operasi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans43]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans43()
    {
        return $this->hasMany(SetAkunRalan::class, ['Utang_Jasa_Medik_Paramedis_Tindakan_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans44]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans44()
    {
        return $this->hasMany(SetAkunRalan::class, ['Beban_Jasa_Sarana_Laborat_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans45]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans45()
    {
        return $this->hasMany(SetAkunRalan::class, ['Utang_Jasa_Sarana_Laborat_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans46]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans46()
    {
        return $this->hasMany(SetAkunRalan::class, ['Beban_Jasa_Perujuk_Laborat_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans47]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans47()
    {
        return $this->hasMany(SetAkunRalan::class, ['Utang_Jasa_Perujuk_Laborat_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans48]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans48()
    {
        return $this->hasMany(SetAkunRalan::class, ['Beban_Jasa_Menejemen_Laborat_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans49]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans49()
    {
        return $this->hasMany(SetAkunRalan::class, ['Utang_Jasa_Menejemen_Laborat_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans5]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans5()
    {
        return $this->hasMany(SetAkunRalan::class, ['HPP_Persediaan_Laborat_Rawat_Jalan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans50]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans50()
    {
        return $this->hasMany(SetAkunRalan::class, ['Beban_Jasa_Sarana_Radiologi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans51]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans51()
    {
        return $this->hasMany(SetAkunRalan::class, ['Utang_Jasa_Sarana_Radiologi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans52]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans52()
    {
        return $this->hasMany(SetAkunRalan::class, ['Beban_Jasa_Perujuk_Radiologi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans53]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans53()
    {
        return $this->hasMany(SetAkunRalan::class, ['Utang_Jasa_Perujuk_Radiologi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans54]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans54()
    {
        return $this->hasMany(SetAkunRalan::class, ['Beban_KSO_Tindakan_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans55]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans55()
    {
        return $this->hasMany(SetAkunRalan::class, ['Beban_Jasa_Menejemen_Radiologi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans56]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans56()
    {
        return $this->hasMany(SetAkunRalan::class, ['Utang_Jasa_Menejemen_Radiologi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans57]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans57()
    {
        return $this->hasMany(SetAkunRalan::class, ['Utang_KSO_Tindakan_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans58]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans58()
    {
        return $this->hasMany(SetAkunRalan::class, ['Laborat_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans59]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans59()
    {
        return $this->hasMany(SetAkunRalan::class, ['Beban_Jasa_Medik_Dokter_Laborat_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans6]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans6()
    {
        return $this->hasMany(SetAkunRalan::class, ['Persediaan_BHP_Laborat_Rawat_Jalan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans7]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans7()
    {
        return $this->hasMany(SetAkunRalan::class, ['Radiologi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans8]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans8()
    {
        return $this->hasMany(SetAkunRalan::class, ['Beban_Jasa_Medik_Dokter_Radiologi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRalans9]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRalans9()
    {
        return $this->hasMany(SetAkunRalan::class, ['Utang_Jasa_Medik_Dokter_Radiologi_Ralan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanap2s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanap2s()
    {
        return $this->hasMany(SetAkunRanap2::class, ['Persediaan_Obat_Kamar_Operasi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanap2s0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanap2s0()
    {
        return $this->hasMany(SetAkunRanap2::class, ['Harian_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanap2s1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanap2s1()
    {
        return $this->hasMany(SetAkunRanap2::class, ['Uang_Muka_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanap2s2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanap2s2()
    {
        return $this->hasMany(SetAkunRanap2::class, ['Piutang_Pasien_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanap2s3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanap2s3()
    {
        return $this->hasMany(SetAkunRanap2::class, ['Sisa_Uang_Muka_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps()
    {
        return $this->hasMany(SetAkunRanap::class, ['Suspen_Piutang_Tindakan_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps0()
    {
        return $this->hasMany(SetAkunRanap::class, ['Laborat_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps1()
    {
        return $this->hasMany(SetAkunRanap::class, ['Beban_Jasa_Medik_Dokter_Laborat_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps10]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps10()
    {
        return $this->hasMany(SetAkunRanap::class, ['Tindakan_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps11]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps11()
    {
        return $this->hasMany(SetAkunRanap::class, ['Radiologi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps12]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps12()
    {
        return $this->hasMany(SetAkunRanap::class, ['Beban_Jasa_Medik_Dokter_Radiologi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps13]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps13()
    {
        return $this->hasMany(SetAkunRanap::class, ['Utang_Jasa_Medik_Dokter_Radiologi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps14]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps14()
    {
        return $this->hasMany(SetAkunRanap::class, ['Beban_Jasa_Medik_Petugas_Radiologi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps15]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps15()
    {
        return $this->hasMany(SetAkunRanap::class, ['Utang_Jasa_Medik_Petugas_Radiologi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps16]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps16()
    {
        return $this->hasMany(SetAkunRanap::class, ['Beban_Kso_Radiologi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps17]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps17()
    {
        return $this->hasMany(SetAkunRanap::class, ['Utang_Kso_Radiologi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps18]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps18()
    {
        return $this->hasMany(SetAkunRanap::class, ['HPP_Persediaan_Radiologi_Rawat_Inap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps19]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps19()
    {
        return $this->hasMany(SetAkunRanap::class, ['Persediaan_BHP_Radiologi_Rawat_Inap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps2()
    {
        return $this->hasMany(SetAkunRanap::class, ['Utang_Jasa_Medik_Dokter_Laborat_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps20]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps20()
    {
        return $this->hasMany(SetAkunRanap::class, ['Obat_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps21]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps21()
    {
        return $this->hasMany(SetAkunRanap::class, ['Beban_Jasa_Medik_Dokter_Tindakan_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps22]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps22()
    {
        return $this->hasMany(SetAkunRanap::class, ['Registrasi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps23]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps23()
    {
        return $this->hasMany(SetAkunRanap::class, ['Service_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps24]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps24()
    {
        return $this->hasMany(SetAkunRanap::class, ['Tambahan_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps25]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps25()
    {
        return $this->hasMany(SetAkunRanap::class, ['Potongan_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps26]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps26()
    {
        return $this->hasMany(SetAkunRanap::class, ['Retur_Obat_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps27]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps27()
    {
        return $this->hasMany(SetAkunRanap::class, ['Resep_Pulang_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps28]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps28()
    {
        return $this->hasMany(SetAkunRanap::class, ['Kamar_Inap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps29]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps29()
    {
        return $this->hasMany(SetAkunRanap::class, ['Operasi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps3()
    {
        return $this->hasMany(SetAkunRanap::class, ['Beban_Jasa_Medik_Petugas_Laborat_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps30]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps30()
    {
        return $this->hasMany(SetAkunRanap::class, ['Utang_Jasa_Medik_Dokter_Tindakan_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps31]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps31()
    {
        return $this->hasMany(SetAkunRanap::class, ['Suspen_Piutang_Obat_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps32]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps32()
    {
        return $this->hasMany(SetAkunRanap::class, ['HPP_Obat_Rawat_Inap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps33]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps33()
    {
        return $this->hasMany(SetAkunRanap::class, ['Persediaan_Obat_Rawat_Inap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps34]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps34()
    {
        return $this->hasMany(SetAkunRanap::class, ['Suspen_Piutang_Operasi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps35]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps35()
    {
        return $this->hasMany(SetAkunRanap::class, ['Beban_Jasa_Medik_Dokter_Operasi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps36]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps36()
    {
        return $this->hasMany(SetAkunRanap::class, ['Utang_Jasa_Medik_Dokter_Operasi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps37]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps37()
    {
        return $this->hasMany(SetAkunRanap::class, ['Beban_Jasa_Medik_Paramedis_Operasi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps38]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps38()
    {
        return $this->hasMany(SetAkunRanap::class, ['Utang_Jasa_Medik_Paramedis_Operasi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps39]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps39()
    {
        return $this->hasMany(SetAkunRanap::class, ['HPP_Obat_Operasi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps4]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps4()
    {
        return $this->hasMany(SetAkunRanap::class, ['Utang_Jasa_Medik_Petugas_Laborat_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps40]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps40()
    {
        return $this->hasMany(SetAkunRanap::class, ['Beban_Jasa_Medik_Paramedis_Tindakan_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps41]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps41()
    {
        return $this->hasMany(SetAkunRanap::class, ['Beban_Jasa_Menejemen_Tindakan_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps42]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps42()
    {
        return $this->hasMany(SetAkunRanap::class, ['Beban_Jasa_Sarana_Tindakan_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps43]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps43()
    {
        return $this->hasMany(SetAkunRanap::class, ['HPP_BHP_Tindakan_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps44]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps44()
    {
        return $this->hasMany(SetAkunRanap::class, ['Utang_Jasa_Menejemen_Tindakan_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps45]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps45()
    {
        return $this->hasMany(SetAkunRanap::class, ['Utang_Jasa_Sarana_Tindakan_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps46]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps46()
    {
        return $this->hasMany(SetAkunRanap::class, ['Persediaan_BHP_Tindakan_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps47]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps47()
    {
        return $this->hasMany(SetAkunRanap::class, ['Beban_Jasa_Sarana_Laborat_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps48]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps48()
    {
        return $this->hasMany(SetAkunRanap::class, ['Utang_Jasa_Sarana_Laborat_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps49]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps49()
    {
        return $this->hasMany(SetAkunRanap::class, ['Beban_Jasa_Perujuk_Laborat_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps5]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps5()
    {
        return $this->hasMany(SetAkunRanap::class, ['Beban_Kso_Laborat_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps50]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps50()
    {
        return $this->hasMany(SetAkunRanap::class, ['Utang_Jasa_Perujuk_Laborat_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps51]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps51()
    {
        return $this->hasMany(SetAkunRanap::class, ['Utang_Jasa_Medik_Paramedis_Tindakan_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps52]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps52()
    {
        return $this->hasMany(SetAkunRanap::class, ['Beban_Jasa_Menejemen_Laborat_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps53]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps53()
    {
        return $this->hasMany(SetAkunRanap::class, ['Utang_Jasa_Menejemen_Laborat_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps54]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps54()
    {
        return $this->hasMany(SetAkunRanap::class, ['Beban_Jasa_Sarana_Radiologi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps55]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps55()
    {
        return $this->hasMany(SetAkunRanap::class, ['Utang_Jasa_Sarana_Radiologi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps56]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps56()
    {
        return $this->hasMany(SetAkunRanap::class, ['Beban_Jasa_Perujuk_Radiologi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps57]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps57()
    {
        return $this->hasMany(SetAkunRanap::class, ['Utang_Jasa_Perujuk_Radiologi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps58]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps58()
    {
        return $this->hasMany(SetAkunRanap::class, ['Beban_Jasa_Menejemen_Radiologi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps59]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps59()
    {
        return $this->hasMany(SetAkunRanap::class, ['Utang_Jasa_Menejemen_Radiologi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps6]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps6()
    {
        return $this->hasMany(SetAkunRanap::class, ['Utang_Kso_Laborat_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps60]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps60()
    {
        return $this->hasMany(SetAkunRanap::class, ['Beban_KSO_Tindakan_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps61]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps61()
    {
        return $this->hasMany(SetAkunRanap::class, ['Utang_KSO_Tindakan_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps62]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps62()
    {
        return $this->hasMany(SetAkunRanap::class, ['Suspen_Piutang_Laborat_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps7]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps7()
    {
        return $this->hasMany(SetAkunRanap::class, ['HPP_Persediaan_Laborat_Rawat_inap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps8]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps8()
    {
        return $this->hasMany(SetAkunRanap::class, ['Persediaan_BHP_Laborat_Rawat_Inap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkunRanaps9]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkunRanaps9()
    {
        return $this->hasMany(SetAkunRanap::class, ['Suspen_Piutang_Radiologi_Ranap' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns()
    {
        return $this->hasMany(SetAkun::class, ['Pengadaan_Obat' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns0()
    {
        return $this->hasMany(SetAkun::class, ['Retur_Dari_pembeli' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns1()
    {
        return $this->hasMany(SetAkun::class, ['Kontra_Retur_Dari_Pembeli' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns10]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns10()
    {
        return $this->hasMany(SetAkun::class, ['Pemesanan_Obat' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns11]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns11()
    {
        return $this->hasMany(SetAkun::class, ['Pengambilan_Penunjang_Utd' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns12]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns12()
    {
        return $this->hasMany(SetAkun::class, ['Kontra_Pengambilan_Penunjang_Utd' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns13]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns13()
    {
        return $this->hasMany(SetAkun::class, ['Penyerahan_Darah' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns14]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns14()
    {
        return $this->hasMany(SetAkun::class, ['Stok_Keluar_Medis' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns15]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns15()
    {
        return $this->hasMany(SetAkun::class, ['Kontra_Stok_Keluar_Medis' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns16]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns16()
    {
        return $this->hasMany(SetAkun::class, ['HPP_Obat_Jual_Bebas' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns17]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns17()
    {
        return $this->hasMany(SetAkun::class, ['Persediaan_Obat_Jual_Bebas' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns18]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns18()
    {
        return $this->hasMany(SetAkun::class, ['Penerimaan_NonMedis' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns19]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns19()
    {
        return $this->hasMany(SetAkun::class, ['Kontra_Penerimaan_NonMedis' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns2()
    {
        return $this->hasMany(SetAkun::class, ['Retur_Piutang_Obat' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns20]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns20()
    {
        return $this->hasMany(SetAkun::class, ['Bayar_Pemesanan_Non_Medis' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns21]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns21()
    {
        return $this->hasMany(SetAkun::class, ['Kontra_Pemesanan_Obat' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns22]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns22()
    {
        return $this->hasMany(SetAkun::class, ['Hibah_Obat' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns23]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns23()
    {
        return $this->hasMany(SetAkun::class, ['Kontra_Hibah_Obat' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns24]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns24()
    {
        return $this->hasMany(SetAkun::class, ['Penerimaan_Toko' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns25]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns25()
    {
        return $this->hasMany(SetAkun::class, ['Kontra_Penerimaan_Toko' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns26]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns26()
    {
        return $this->hasMany(SetAkun::class, ['Pengadaan_Toko' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns27]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns27()
    {
        return $this->hasMany(SetAkun::class, ['Bayar_Pemesanan_Toko' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns28]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns28()
    {
        return $this->hasMany(SetAkun::class, ['Penjualan_Toko' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns29]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns29()
    {
        return $this->hasMany(SetAkun::class, ['HPP_Barang_Toko' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns3()
    {
        return $this->hasMany(SetAkun::class, ['Kontra_Retur_Piutang_Obat' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns30]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns30()
    {
        return $this->hasMany(SetAkun::class, ['Persediaan_Barang_Toko' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns31]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns31()
    {
        return $this->hasMany(SetAkun::class, ['Piutang_Toko' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns32]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns32()
    {
        return $this->hasMany(SetAkun::class, ['Bayar_Pemesanan_Obat' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns33]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns33()
    {
        return $this->hasMany(SetAkun::class, ['Kontra_Piutang_Toko' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns34]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns34()
    {
        return $this->hasMany(SetAkun::class, ['Retur_Beli_Toko' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns35]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns35()
    {
        return $this->hasMany(SetAkun::class, ['Kontra_Retur_Beli_Toko' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns36]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns36()
    {
        return $this->hasMany(SetAkun::class, ['Retur_Beli_Non_Medis' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns37]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns37()
    {
        return $this->hasMany(SetAkun::class, ['Kontra_Retur_Beli_Non_Medis' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns38]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns38()
    {
        return $this->hasMany(SetAkun::class, ['Retur_Jual_Toko' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns39]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns39()
    {
        return $this->hasMany(SetAkun::class, ['Kontra_Retur_Jual_Toko' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns4]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns4()
    {
        return $this->hasMany(SetAkun::class, ['Pengadaan_Ipsrs' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns40]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns40()
    {
        return $this->hasMany(SetAkun::class, ['Retur_Piutang_Toko' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns41]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns41()
    {
        return $this->hasMany(SetAkun::class, ['Kontra_Retur_Piutang_Toko' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns42]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns42()
    {
        return $this->hasMany(SetAkun::class, ['Kerugian_Klaim_BPJS_RVP' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns43]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns43()
    {
        return $this->hasMany(SetAkun::class, ['Penjualan_Obat' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns44]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns44()
    {
        return $this->hasMany(SetAkun::class, ['Lebih_Bayar_Klaim_BPJS_RVP' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns45]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns45()
    {
        return $this->hasMany(SetAkun::class, ['Piutang_BPJS_RVP' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns46]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns46()
    {
        return $this->hasMany(SetAkun::class, ['Kontra_Penerimaan_AsetInventaris' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns47]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns47()
    {
        return $this->hasMany(SetAkun::class, ['Kontra_Hibah_Aset' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns48]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns48()
    {
        return $this->hasMany(SetAkun::class, ['Hibah_Non_Medis' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns49]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns49()
    {
        return $this->hasMany(SetAkun::class, ['Kontra_Hibah_Non_Medis' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns5]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns5()
    {
        return $this->hasMany(SetAkun::class, ['Stok_Keluar_Ipsrs' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns50]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns50()
    {
        return $this->hasMany(SetAkun::class, ['Bayar_JM_Dokter' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns51]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns51()
    {
        return $this->hasMany(SetAkun::class, ['PPN_Masukan' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns52]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns52()
    {
        return $this->hasMany(SetAkun::class, ['Pengadaan_Dapur' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns53]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns53()
    {
        return $this->hasMany(SetAkun::class, ['Stok_Keluar_Dapur' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns54]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns54()
    {
        return $this->hasMany(SetAkun::class, ['Piutang_Obat' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns55]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns55()
    {
        return $this->hasMany(SetAkun::class, ['Kontra_Stok_Keluar_Dapur' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns56]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns56()
    {
        return $this->hasMany(SetAkun::class, ['PPN_Keluaran' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns57]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns57()
    {
        return $this->hasMany(SetAkun::class, ['Diskon_Piutang' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns58]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns58()
    {
        return $this->hasMany(SetAkun::class, ['Piutang_Tidak_Terbayar' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns59]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns59()
    {
        return $this->hasMany(SetAkun::class, ['Lebih_Bayar_Piutang' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns6]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns6()
    {
        return $this->hasMany(SetAkun::class, ['Kontra_Stok_Keluar_Ipsrs' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns60]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns60()
    {
        return $this->hasMany(SetAkun::class, ['Kontra_Piutang_Obat' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns61]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns61()
    {
        return $this->hasMany(SetAkun::class, ['Retur_Ke_Suplayer' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns62]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns62()
    {
        return $this->hasMany(SetAkun::class, ['Kontra_Retur_Ke_Suplayer' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns7]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns7()
    {
        return $this->hasMany(SetAkun::class, ['Bayar_Piutang_Pasien' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns8]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns8()
    {
        return $this->hasMany(SetAkun::class, ['Pengambilan_Utd' => 'kd_rek']);
    }

    /**
     * Gets query for [[SetAkuns9]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetAkuns9()
    {
        return $this->hasMany(SetAkun::class, ['Kontra_Pengambilan_Utd' => 'kd_rek']);
    }

    /**
     * Gets query for [[Subrekening]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubrekening()
    {
        return $this->hasOne(Subrekening::class, ['kd_rek2' => 'kd_rek']);
    }

    /**
     * Gets query for [[Subrekenings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubrekenings()
    {
        return $this->hasMany(Subrekening::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[TokoBayarPiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoBayarPiutangs()
    {
        return $this->hasMany(TokoBayarPiutang::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[TokoBayarPiutangs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoBayarPiutangs0()
    {
        return $this->hasMany(TokoBayarPiutang::class, ['kd_rek_kontra' => 'kd_rek']);
    }

    /**
     * Gets query for [[Tokopenjualans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokopenjualans()
    {
        return $this->hasMany(Tokopenjualan::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[UtdPenyerahanDarahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPenyerahanDarahs()
    {
        return $this->hasMany(UtdPenyerahanDarah::class, ['kd_rek' => 'kd_rek']);
    }
}
