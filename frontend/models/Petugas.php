<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "petugas".
 *
 * @property string $nip
 * @property string|null $nama
 * @property string|null $jk
 * @property string|null $tmp_lahir
 * @property string|null $tgl_lahir
 * @property string|null $gol_darah
 * @property string|null $agama
 * @property string|null $stts_nikah
 * @property string|null $alamat
 * @property string|null $kd_jbtn
 * @property string|null $no_telp
 * @property string|null $status
 *
 * @property AsuhanGizi[] $asuhanGizis
 * @property BayarPemesananInventaris[] $bayarPemesananInventaris
 * @property BayarPemesananNonMedis[] $bayarPemesananNonMedis
 * @property BayarPemesanan[] $bayarPemesanans
 * @property CatatanAdimeGizi[] $catatanAdimeGizis
 * @property CatatanCekGds[] $catatanCekGds
 * @property CatatanInfusRalan[] $catatanInfusRalans
 * @property CatatanKeperawatanRalan[] $catatanKeperawatanRalans
 * @property CatatanKeperawatanRanap[] $catatanKeperawatanRanaps
 * @property CatatanKeseimbanganCairan[] $catatanKeseimbanganCairans
 * @property CatatanObservasiChbp[] $catatanObservasiChbps
 * @property CatatanObservasiIgd[] $catatanObservasiIgds
 * @property CatatanObservasiInduksiPersalinan[] $catatanObservasiInduksiPersalinans
 * @property CatatanObservasiRanapKebidanan[] $catatanObservasiRanapKebidanans
 * @property CatatanObservasiRanapPostpartum[] $catatanObservasiRanapPostparta
 * @property CatatanObservasiRanap[] $catatanObservasiRanaps
 * @property CatatanPersalinan[] $catatanPersalinans
 * @property ChecklistPostOperasi[] $checklistPostOperasis
 * @property ChecklistPostOperasi[] $checklistPostOperasis0
 * @property ChecklistPreOperasi[] $checklistPreOperasis
 * @property ChecklistPreOperasi[] $checklistPreOperasis0
 * @property Dapurpembelian[] $dapurpembelians
 * @property Dapurpengeluaran[] $dapurpengeluarans
 * @property Deposit[] $deposits
 * @property DeteksiDiniCorona[] $deteksiDiniCoronas
 * @property EdukasiPasienKeluargaRj[] $edukasiPasienKeluargaRjs
 * @property FollowUpDbd[] $followUpDbds
 * @property HasilTindakanEswl[] $hasilTindakanEswls
 * @property HibahObatBhp[] $hibahObatBhps
 * @property InsidenKeselamatanPasien[] $insidenKeselamatanPasiens
 * @property InventarisHibah[] $inventarisHibahs
 * @property InventarisPembelian[] $inventarisPembelians
 * @property InventarisPemesanan[] $inventarisPemesanans
 * @property InventarisPeminjaman[] $inventarisPeminjamen
 * @property InventarisTitipFaktur[] $inventarisTitipFakturs
 * @property IpsrsHibah[] $ipsrsHibahs
 * @property IpsrsTitipFaktur[] $ipsrsTitipFakturs
 * @property Ipsrspembelian[] $ipsrspembelians
 * @property Ipsrspemesanan[] $ipsrspemesanans
 * @property Ipsrspengeluaran[] $ipsrspengeluarans
 * @property Ipsrsreturbeli[] $ipsrsreturbelis
 * @property JawabanPioApoteker[] $jawabanPioApotekers
 * @property Jabatan $kdJbtn
 * @property KeslingLimbahB3medis[] $keslingLimbahB3medis
 * @property KeslingLimbahB3medisCair[] $keslingLimbahB3medisCairs
 * @property KeslingLimbahDomestik[] $keslingLimbahDomestiks
 * @property KeslingMutuAirLimbah[] $keslingMutuAirLimbahs
 * @property KeslingPemakaianAirPdam[] $keslingPemakaianAirPdams
 * @property KeslingPemakaianAirTanah[] $keslingPemakaianAirTanahs
 * @property KeslingPestControl[] $keslingPestControls
 * @property KonselingFarmasi[] $konselingFarmasis
 * @property LaporanAnestesi[] $laporanAnestesis
 * @property LaporanAnestesi[] $laporanAnestesis0
 * @property LaporanAnestesi[] $laporanAnestesis1
 * @property LaporanAnestesi[] $laporanAnestesis2
 * @property MonitoringAsuhanGizi[] $monitoringAsuhanGizis
 * @property MonitoringReaksiTranfusi[] $monitoringReaksiTranfusis
 * @property Pegawai $nip0
 * @property Operasi[] $operasis
 * @property Operasi[] $operasis0
 * @property Operasi[] $operasis1
 * @property Operasi[] $operasis10
 * @property Operasi[] $operasis11
 * @property Operasi[] $operasis12
 * @property Operasi[] $operasis13
 * @property Operasi[] $operasis14
 * @property Operasi[] $operasis2
 * @property Operasi[] $operasis3
 * @property Operasi[] $operasis4
 * @property Operasi[] $operasis5
 * @property Operasi[] $operasis6
 * @property Operasi[] $operasis7
 * @property Operasi[] $operasis8
 * @property Operasi[] $operasis9
 * @property Parkir[] $parkirs
 * @property PemantauanEwsNeonatus[] $pemantauanEwsNeonatuses
 * @property PemantauanMeowsObstetri[] $pemantauanMeowsObstetris
 * @property PemantauanPewsAnak[] $pemantauanPewsAnaks
 * @property PemantauanPewsDewasa[] $pemantauanPewsDewasas
 * @property PemasukanLain[] $pemasukanLains
 * @property Pembelian[] $pembelians
 * @property PemeliharaanGedung[] $pemeliharaanGedungs
 * @property PemeliharaanInventaris[] $pemeliharaanInventaris
 * @property Pemesanan[] $pemesanans
 * @property PeminjamanBerkas[] $peminjamanBerkas
 * @property PenatalaksanaanTerapiOkupasi[] $penatalaksanaanTerapiOkupasis
 * @property PengeluaranHarian[] $pengeluaranHarians
 * @property PengeluaranObatBhp[] $pengeluaranObatBhps
 * @property PengkajianRestrain[] $pengkajianRestrains
 * @property PenilaianAwalKeperawatanGigi[] $penilaianAwalKeperawatanGigis
 * @property PenilaianAwalKeperawatanIgd[] $penilaianAwalKeperawatanIgds
 * @property PenilaianAwalKeperawatanKebidananRanap[] $penilaianAwalKeperawatanKebidananRanaps
 * @property PenilaianAwalKeperawatanKebidananRanap[] $penilaianAwalKeperawatanKebidananRanaps0
 * @property PenilaianAwalKeperawatanKebidanan[] $penilaianAwalKeperawatanKebidanans
 * @property PenilaianAwalKeperawatanMata[] $penilaianAwalKeperawatanMatas
 * @property PenilaianAwalKeperawatanRalanBayi[] $penilaianAwalKeperawatanRalanBayis
 * @property PenilaianAwalKeperawatanRalanGeriatri[] $penilaianAwalKeperawatanRalanGeriatris
 * @property PenilaianAwalKeperawatanRalanPsikiatri[] $penilaianAwalKeperawatanRalanPsikiatris
 * @property PenilaianAwalKeperawatanRalan[] $penilaianAwalKeperawatanRalans
 * @property PenilaianAwalKeperawatanRanapNeonatus[] $penilaianAwalKeperawatanRanapNeonatuses
 * @property PenilaianAwalKeperawatanRanapNeonatus[] $penilaianAwalKeperawatanRanapNeonatuses0
 * @property PenilaianAwalKeperawatanRanap[] $penilaianAwalKeperawatanRanaps
 * @property PenilaianAwalKeperawatanRanap[] $penilaianAwalKeperawatanRanaps0
 * @property PenilaianLanjutanResikoJatuhAnak[] $penilaianLanjutanResikoJatuhAnaks
 * @property PenilaianLanjutanResikoJatuhDewasa[] $penilaianLanjutanResikoJatuhDewasas
 * @property PenilaianLanjutanResikoJatuhGeriatri[] $penilaianLanjutanResikoJatuhGeriatris
 * @property PenilaianLanjutanResikoJatuhLansia[] $penilaianLanjutanResikoJatuhLansias
 * @property PenilaianLanjutanResikoJatuhPsikiatri[] $penilaianLanjutanResikoJatuhPsikiatris
 * @property PenilaianLanjutanSkriningFungsional[] $penilaianLanjutanSkriningFungsionals
 * @property PenilaianLevelKecemasanRanapAnak[] $penilaianLevelKecemasanRanapAnaks
 * @property PenilaianPasienTerminal[] $penilaianPasienTerminals
 * @property PenilaianPsikologi[] $penilaianPsikologis
 * @property PenilaianRisikoDekubitus[] $penilaianRisikoDekubituses
 * @property PenilaianRisikoJatuhNeonatus[] $penilaianRisikoJatuhNeonatuses
 * @property PenilaianTambahanBeresikoMelarikanDiri[] $penilaianTambahanBeresikoMelarikanDiris
 * @property PenilaianTambahanBunuhDiri[] $penilaianTambahanBunuhDiris
 * @property PenilaianTambahanPerilakuKekerasan[] $penilaianTambahanPerilakuKekerasans
 * @property PenilaianTerapiWicara[] $penilaianTerapiWicaras
 * @property PenilaianUlangNyeri[] $penilaianUlangNyeris
 * @property Penjualan[] $penjualans
 * @property PerbaikanInventaris[] $perbaikanInventaris
 * @property PerencanaanPemulangan[] $perencanaanPemulangans
 * @property PeriksaLab[] $periksaLabs
 * @property PeriksaRadiologi[] $periksaRadiologis
 * @property PerpustakaanPeminjaman[] $perpustakaanPeminjamen
 * @property PersetujuanPenolakanTindakan[] $persetujuanPenolakanTindakans
 * @property PersetujuanPenundaanPelayanan[] $persetujuanPenundaanPelayanans
 * @property PiutangLainlain[] $piutangLainlains
 * @property Piutang[] $piutangs
 * @property RawatInapDrpr[] $rawatInapDrprs
 * @property RawatInapPr[] $rawatInapPrs
 * @property RawatJlDrpr[] $rawatJlDrprs
 * @property RawatJlPr[] $rawatJlPrs
 * @property RekonsiliasiObatKonfirmasi[] $rekonsiliasiObatKonfirmasis
 * @property RekonsiliasiObat[] $rekonsiliasiObats
 * @property Returbeli[] $returbelis
 * @property Returjual[] $returjuals
 * @property Returpiutang[] $returpiutangs
 * @property RvpKlaimBpjs[] $rvpKlaimBpjs
 * @property SigninSebelumAnestesi[] $signinSebelumAnestesis
 * @property SignoutSebelumMenutupLuka[] $signoutSebelumMenutupLukas
 * @property SkorAldrettePascaAnestesi[] $skorAldrettePascaAnestesis
 * @property SkorBromagePascaAnestesi[] $skorBromagePascaAnestesis
 * @property SkorStewardPascaAnestesi[] $skorStewardPascaAnestesis
 * @property SkriningGizi[] $skriningGizis
 * @property SkriningKekerasanPadaPerempuan[] $skriningKekerasanPadaPerempuans
 * @property SkriningKesehatanGigiMulutRemaja[] $skriningKesehatanGigiMulutRemajas
 * @property SkriningNutrisiAnak[] $skriningNutrisiAnaks
 * @property SkriningNutrisiDewasa[] $skriningNutrisiDewasas
 * @property SkriningNutrisiLansia[] $skriningNutrisiLansias
 * @property SkriningObesitas[] $skriningObesitas
 * @property SkriningPerilakuMerokokSekolahRemaja[] $skriningPerilakuMerokokSekolahRemajas
 * @property SkriningRawatJalan[] $skriningRawatJalans
 * @property SkriningRisikoKankerParu[] $skriningRisikoKankerParus
 * @property SkriningRisikoKankerPayudara[] $skriningRisikoKankerPayudaras
 * @property SkriningTbc[] $skriningTbcs
 * @property SuratKeteranganCovid[] $suratKeteranganCovs
 * @property SuratPernyataanPasienUmum[] $suratPernyataanPasienUmums
 * @property SuratPersetujuanRawatInap[] $suratPersetujuanRawatInaps
 * @property SuratPersetujuanUmum[] $suratPersetujuanUmums
 * @property SuratPulangAtasPermintaanSendiri[] $suratPulangAtasPermintaanSendiris
 * @property TelaahFarmasi[] $telaahFarmasis
 * @property TimeoutSebelumInsisi[] $timeoutSebelumInsisis
 * @property TitipFaktur[] $titipFakturs
 * @property TokoBayarPemesanan[] $tokoBayarPemesanans
 * @property Tokopembelian[] $tokopembelians
 * @property Tokopemesanan[] $tokopemesanans
 * @property Tokopenjualan[] $tokopenjualans
 * @property Tokopiutang[] $tokopiutangs
 * @property Tokoreturbeli[] $tokoreturbelis
 * @property Tokoreturjual[] $tokoreturjuals
 * @property Tokoreturpiutang[] $tokoreturpiutangs
 * @property TransferPasienAntarRuang[] $transferPasienAntarRuangs
 * @property TransferPasienAntarRuang[] $transferPasienAntarRuangs0
 * @property UtdCekalDarah[] $utdCekalDarahs
 * @property UtdDonor[] $utdDonors
 * @property UtdDonor[] $utdDonors0
 * @property UtdMedisRusak[] $utdMedisRusaks
 * @property UtdPemisahanKomponen[] $utdPemisahanKomponens
 * @property UtdPengambilanPenunjang[] $utdPengambilanPenunjangs
 * @property UtdPenunjangRusak[] $utdPenunjangRusaks
 * @property UtdPenyerahanDarah[] $utdPenyerahanDarahs
 */
class Petugas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'petugas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip'], 'required'],
            [['jk', 'gol_darah', 'stts_nikah', 'status'], 'string'],
            [['tgl_lahir'], 'safe'],
            [['nip', 'tmp_lahir'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 50],
            [['agama'], 'string', 'max' => 12],
            [['alamat'], 'string', 'max' => 60],
            [['kd_jbtn'], 'string', 'max' => 4],
            [['no_telp'], 'string', 'max' => 13],
            [['nip'], 'unique'],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nip' => 'nik']],
            [['kd_jbtn'], 'exist', 'skipOnError' => true, 'targetClass' => Jabatan::class, 'targetAttribute' => ['kd_jbtn' => 'kd_jbtn']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nip' => 'Nip',
            'nama' => 'Nama',
            'jk' => 'Jk',
            'tmp_lahir' => 'Tmp Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'gol_darah' => 'Gol Darah',
            'agama' => 'Agama',
            'stts_nikah' => 'Stts Nikah',
            'alamat' => 'Alamat',
            'kd_jbtn' => 'Kd Jbtn',
            'no_telp' => 'No Telp',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[AsuhanGizis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAsuhanGizis()
    {
        return $this->hasMany(AsuhanGizi::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[BayarPemesananInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPemesananInventaris()
    {
        return $this->hasMany(BayarPemesananInventaris::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[BayarPemesananNonMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPemesananNonMedis()
    {
        return $this->hasMany(BayarPemesananNonMedis::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[BayarPemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPemesanans()
    {
        return $this->hasMany(BayarPemesanan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[CatatanAdimeGizis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanAdimeGizis()
    {
        return $this->hasMany(CatatanAdimeGizi::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[CatatanCekGds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanCekGds()
    {
        return $this->hasMany(CatatanCekGds::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[CatatanInfusRalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanInfusRalans()
    {
        return $this->hasMany(CatatanInfusRalan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[CatatanKeperawatanRalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanKeperawatanRalans()
    {
        return $this->hasMany(CatatanKeperawatanRalan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[CatatanKeperawatanRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanKeperawatanRanaps()
    {
        return $this->hasMany(CatatanKeperawatanRanap::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[CatatanKeseimbanganCairans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanKeseimbanganCairans()
    {
        return $this->hasMany(CatatanKeseimbanganCairan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[CatatanObservasiChbps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanObservasiChbps()
    {
        return $this->hasMany(CatatanObservasiChbp::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[CatatanObservasiIgds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanObservasiIgds()
    {
        return $this->hasMany(CatatanObservasiIgd::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[CatatanObservasiInduksiPersalinans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanObservasiInduksiPersalinans()
    {
        return $this->hasMany(CatatanObservasiInduksiPersalinan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[CatatanObservasiRanapKebidanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanObservasiRanapKebidanans()
    {
        return $this->hasMany(CatatanObservasiRanapKebidanan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[CatatanObservasiRanapPostparta]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanObservasiRanapPostparta()
    {
        return $this->hasMany(CatatanObservasiRanapPostpartum::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[CatatanObservasiRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanObservasiRanaps()
    {
        return $this->hasMany(CatatanObservasiRanap::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[CatatanPersalinans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanPersalinans()
    {
        return $this->hasMany(CatatanPersalinan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[ChecklistPostOperasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChecklistPostOperasis()
    {
        return $this->hasMany(ChecklistPostOperasi::class, ['nip_perawat_ok' => 'nip']);
    }

    /**
     * Gets query for [[ChecklistPostOperasis0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChecklistPostOperasis0()
    {
        return $this->hasMany(ChecklistPostOperasi::class, ['nip_perawat_anestesi' => 'nip']);
    }

    /**
     * Gets query for [[ChecklistPreOperasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChecklistPreOperasis()
    {
        return $this->hasMany(ChecklistPreOperasi::class, ['nip_petugas_ruangan' => 'nip']);
    }

    /**
     * Gets query for [[ChecklistPreOperasis0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChecklistPreOperasis0()
    {
        return $this->hasMany(ChecklistPreOperasi::class, ['nip_perawat_ok' => 'nip']);
    }

    /**
     * Gets query for [[Dapurpembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDapurpembelians()
    {
        return $this->hasMany(Dapurpembelian::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Dapurpengeluarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDapurpengeluarans()
    {
        return $this->hasMany(Dapurpengeluaran::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Deposits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeposits()
    {
        return $this->hasMany(Deposit::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[DeteksiDiniCoronas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeteksiDiniCoronas()
    {
        return $this->hasMany(DeteksiDiniCorona::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[EdukasiPasienKeluargaRjs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEdukasiPasienKeluargaRjs()
    {
        return $this->hasMany(EdukasiPasienKeluargaRj::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[FollowUpDbds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFollowUpDbds()
    {
        return $this->hasMany(FollowUpDbd::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[HasilTindakanEswls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilTindakanEswls()
    {
        return $this->hasMany(HasilTindakanEswl::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[HibahObatBhps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHibahObatBhps()
    {
        return $this->hasMany(HibahObatBhp::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[InsidenKeselamatanPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInsidenKeselamatanPasiens()
    {
        return $this->hasMany(InsidenKeselamatanPasien::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[InventarisHibahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisHibahs()
    {
        return $this->hasMany(InventarisHibah::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[InventarisPembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisPembelians()
    {
        return $this->hasMany(InventarisPembelian::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[InventarisPemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisPemesanans()
    {
        return $this->hasMany(InventarisPemesanan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[InventarisPeminjamen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisPeminjamen()
    {
        return $this->hasMany(InventarisPeminjaman::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[InventarisTitipFakturs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisTitipFakturs()
    {
        return $this->hasMany(InventarisTitipFaktur::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[IpsrsHibahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsHibahs()
    {
        return $this->hasMany(IpsrsHibah::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[IpsrsTitipFakturs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsTitipFakturs()
    {
        return $this->hasMany(IpsrsTitipFaktur::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Ipsrspembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrspembelians()
    {
        return $this->hasMany(Ipsrspembelian::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Ipsrspemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrspemesanans()
    {
        return $this->hasMany(Ipsrspemesanan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Ipsrspengeluarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrspengeluarans()
    {
        return $this->hasMany(Ipsrspengeluaran::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Ipsrsreturbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsreturbelis()
    {
        return $this->hasMany(Ipsrsreturbeli::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[JawabanPioApotekers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJawabanPioApotekers()
    {
        return $this->hasMany(JawabanPioApoteker::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[KdJbtn]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJbtn()
    {
        return $this->hasOne(Jabatan::class, ['kd_jbtn' => 'kd_jbtn']);
    }

    /**
     * Gets query for [[KeslingLimbahB3medis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeslingLimbahB3medis()
    {
        return $this->hasMany(KeslingLimbahB3medis::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[KeslingLimbahB3medisCairs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeslingLimbahB3medisCairs()
    {
        return $this->hasMany(KeslingLimbahB3medisCair::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[KeslingLimbahDomestiks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeslingLimbahDomestiks()
    {
        return $this->hasMany(KeslingLimbahDomestik::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[KeslingMutuAirLimbahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeslingMutuAirLimbahs()
    {
        return $this->hasMany(KeslingMutuAirLimbah::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[KeslingPemakaianAirPdams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeslingPemakaianAirPdams()
    {
        return $this->hasMany(KeslingPemakaianAirPdam::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[KeslingPemakaianAirTanahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeslingPemakaianAirTanahs()
    {
        return $this->hasMany(KeslingPemakaianAirTanah::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[KeslingPestControls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeslingPestControls()
    {
        return $this->hasMany(KeslingPestControl::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[KonselingFarmasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKonselingFarmasis()
    {
        return $this->hasMany(KonselingFarmasi::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[LaporanAnestesis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporanAnestesis()
    {
        return $this->hasMany(LaporanAnestesi::class, ['asisten_operator' => 'nip']);
    }

    /**
     * Gets query for [[LaporanAnestesis0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporanAnestesis0()
    {
        return $this->hasMany(LaporanAnestesi::class, ['penata_anestesi' => 'nip']);
    }

    /**
     * Gets query for [[LaporanAnestesis1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporanAnestesis1()
    {
        return $this->hasMany(LaporanAnestesi::class, ['onloop' => 'nip']);
    }

    /**
     * Gets query for [[LaporanAnestesis2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporanAnestesis2()
    {
        return $this->hasMany(LaporanAnestesi::class, ['nip_recovery_room' => 'nip']);
    }

    /**
     * Gets query for [[MonitoringAsuhanGizis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMonitoringAsuhanGizis()
    {
        return $this->hasMany(MonitoringAsuhanGizi::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[MonitoringReaksiTranfusis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMonitoringReaksiTranfusis()
    {
        return $this->hasMany(MonitoringReaksiTranfusi::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nip']);
    }

    /**
     * Gets query for [[Operasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis()
    {
        return $this->hasMany(Operasi::class, ['asisten_operator1' => 'nip']);
    }

    /**
     * Gets query for [[Operasis0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis0()
    {
        return $this->hasMany(Operasi::class, ['asisten_operator2' => 'nip']);
    }

    /**
     * Gets query for [[Operasis1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis1()
    {
        return $this->hasMany(Operasi::class, ['instrumen' => 'nip']);
    }

    /**
     * Gets query for [[Operasis10]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis10()
    {
        return $this->hasMany(Operasi::class, ['omloop3' => 'nip']);
    }

    /**
     * Gets query for [[Operasis11]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis11()
    {
        return $this->hasMany(Operasi::class, ['asisten_operator3' => 'nip']);
    }

    /**
     * Gets query for [[Operasis12]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis12()
    {
        return $this->hasMany(Operasi::class, ['asisten_anestesi2' => 'nip']);
    }

    /**
     * Gets query for [[Operasis13]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis13()
    {
        return $this->hasMany(Operasi::class, ['omloop4' => 'nip']);
    }

    /**
     * Gets query for [[Operasis14]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis14()
    {
        return $this->hasMany(Operasi::class, ['omloop5' => 'nip']);
    }

    /**
     * Gets query for [[Operasis2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis2()
    {
        return $this->hasMany(Operasi::class, ['perawaat_resusitas' => 'nip']);
    }

    /**
     * Gets query for [[Operasis3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis3()
    {
        return $this->hasMany(Operasi::class, ['asisten_anestesi' => 'nip']);
    }

    /**
     * Gets query for [[Operasis4]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis4()
    {
        return $this->hasMany(Operasi::class, ['bidan' => 'nip']);
    }

    /**
     * Gets query for [[Operasis5]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis5()
    {
        return $this->hasMany(Operasi::class, ['perawat_luar' => 'nip']);
    }

    /**
     * Gets query for [[Operasis6]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis6()
    {
        return $this->hasMany(Operasi::class, ['bidan2' => 'nip']);
    }

    /**
     * Gets query for [[Operasis7]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis7()
    {
        return $this->hasMany(Operasi::class, ['bidan3' => 'nip']);
    }

    /**
     * Gets query for [[Operasis8]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis8()
    {
        return $this->hasMany(Operasi::class, ['omloop' => 'nip']);
    }

    /**
     * Gets query for [[Operasis9]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis9()
    {
        return $this->hasMany(Operasi::class, ['omloop2' => 'nip']);
    }

    /**
     * Gets query for [[Parkirs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParkirs()
    {
        return $this->hasMany(Parkir::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PemantauanEwsNeonatuses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemantauanEwsNeonatuses()
    {
        return $this->hasMany(PemantauanEwsNeonatus::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PemantauanMeowsObstetris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemantauanMeowsObstetris()
    {
        return $this->hasMany(PemantauanMeowsObstetri::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PemantauanPewsAnaks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemantauanPewsAnaks()
    {
        return $this->hasMany(PemantauanPewsAnak::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PemantauanPewsDewasas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemantauanPewsDewasas()
    {
        return $this->hasMany(PemantauanPewsDewasa::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PemasukanLains]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemasukanLains()
    {
        return $this->hasMany(PemasukanLain::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Pembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembelians()
    {
        return $this->hasMany(Pembelian::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PemeliharaanGedungs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemeliharaanGedungs()
    {
        return $this->hasMany(PemeliharaanGedung::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PemeliharaanInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemeliharaanInventaris()
    {
        return $this->hasMany(PemeliharaanInventaris::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Pemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemesanans()
    {
        return $this->hasMany(Pemesanan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PeminjamanBerkas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjamanBerkas()
    {
        return $this->hasMany(PeminjamanBerkas::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenatalaksanaanTerapiOkupasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenatalaksanaanTerapiOkupasis()
    {
        return $this->hasMany(PenatalaksanaanTerapiOkupasi::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PengeluaranHarians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengeluaranHarians()
    {
        return $this->hasMany(PengeluaranHarian::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PengeluaranObatBhps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengeluaranObatBhps()
    {
        return $this->hasMany(PengeluaranObatBhp::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PengkajianRestrains]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengkajianRestrains()
    {
        return $this->hasMany(PengkajianRestrain::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanGigis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanGigis()
    {
        return $this->hasMany(PenilaianAwalKeperawatanGigi::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanIgds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanIgds()
    {
        return $this->hasMany(PenilaianAwalKeperawatanIgd::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanKebidananRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanKebidananRanaps()
    {
        return $this->hasMany(PenilaianAwalKeperawatanKebidananRanap::class, ['nip1' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanKebidananRanaps0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanKebidananRanaps0()
    {
        return $this->hasMany(PenilaianAwalKeperawatanKebidananRanap::class, ['nip2' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanKebidanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanKebidanans()
    {
        return $this->hasMany(PenilaianAwalKeperawatanKebidanan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanMatas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanMatas()
    {
        return $this->hasMany(PenilaianAwalKeperawatanMata::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRalanBayis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRalanBayis()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalanBayi::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRalanGeriatris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRalanGeriatris()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalanGeriatri::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRalanPsikiatris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRalanPsikiatris()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalanPsikiatri::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRalans()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRanapNeonatuses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRanapNeonatuses()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRanapNeonatus::class, ['nip1' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRanapNeonatuses0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRanapNeonatuses0()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRanapNeonatus::class, ['nip2' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRanaps()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRanap::class, ['nip1' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRanaps0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRanaps0()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRanap::class, ['nip2' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianLanjutanResikoJatuhAnaks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianLanjutanResikoJatuhAnaks()
    {
        return $this->hasMany(PenilaianLanjutanResikoJatuhAnak::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianLanjutanResikoJatuhDewasas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianLanjutanResikoJatuhDewasas()
    {
        return $this->hasMany(PenilaianLanjutanResikoJatuhDewasa::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianLanjutanResikoJatuhGeriatris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianLanjutanResikoJatuhGeriatris()
    {
        return $this->hasMany(PenilaianLanjutanResikoJatuhGeriatri::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianLanjutanResikoJatuhLansias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianLanjutanResikoJatuhLansias()
    {
        return $this->hasMany(PenilaianLanjutanResikoJatuhLansia::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianLanjutanResikoJatuhPsikiatris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianLanjutanResikoJatuhPsikiatris()
    {
        return $this->hasMany(PenilaianLanjutanResikoJatuhPsikiatri::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianLanjutanSkriningFungsionals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianLanjutanSkriningFungsionals()
    {
        return $this->hasMany(PenilaianLanjutanSkriningFungsional::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianLevelKecemasanRanapAnaks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianLevelKecemasanRanapAnaks()
    {
        return $this->hasMany(PenilaianLevelKecemasanRanapAnak::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianPasienTerminals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPasienTerminals()
    {
        return $this->hasMany(PenilaianPasienTerminal::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianPsikologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPsikologis()
    {
        return $this->hasMany(PenilaianPsikologi::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianRisikoDekubituses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianRisikoDekubituses()
    {
        return $this->hasMany(PenilaianRisikoDekubitus::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianRisikoJatuhNeonatuses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianRisikoJatuhNeonatuses()
    {
        return $this->hasMany(PenilaianRisikoJatuhNeonatus::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianTambahanBeresikoMelarikanDiris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianTambahanBeresikoMelarikanDiris()
    {
        return $this->hasMany(PenilaianTambahanBeresikoMelarikanDiri::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianTambahanBunuhDiris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianTambahanBunuhDiris()
    {
        return $this->hasMany(PenilaianTambahanBunuhDiri::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianTambahanPerilakuKekerasans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianTambahanPerilakuKekerasans()
    {
        return $this->hasMany(PenilaianTambahanPerilakuKekerasan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianTerapiWicaras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianTerapiWicaras()
    {
        return $this->hasMany(PenilaianTerapiWicara::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PenilaianUlangNyeris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianUlangNyeris()
    {
        return $this->hasMany(PenilaianUlangNyeri::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Penjualans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenjualans()
    {
        return $this->hasMany(Penjualan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PerbaikanInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerbaikanInventaris()
    {
        return $this->hasMany(PerbaikanInventaris::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PerencanaanPemulangans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerencanaanPemulangans()
    {
        return $this->hasMany(PerencanaanPemulangan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PeriksaLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeriksaLabs()
    {
        return $this->hasMany(PeriksaLab::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PeriksaRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeriksaRadiologis()
    {
        return $this->hasMany(PeriksaRadiologi::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PerpustakaanPeminjamen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerpustakaanPeminjamen()
    {
        return $this->hasMany(PerpustakaanPeminjaman::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PersetujuanPenolakanTindakans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersetujuanPenolakanTindakans()
    {
        return $this->hasMany(PersetujuanPenolakanTindakan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PersetujuanPenundaanPelayanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersetujuanPenundaanPelayanans()
    {
        return $this->hasMany(PersetujuanPenundaanPelayanan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[PiutangLainlains]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPiutangLainlains()
    {
        return $this->hasMany(PiutangLainlain::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Piutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPiutangs()
    {
        return $this->hasMany(Piutang::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[RawatInapDrprs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatInapDrprs()
    {
        return $this->hasMany(RawatInapDrpr::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[RawatInapPrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatInapPrs()
    {
        return $this->hasMany(RawatInapPr::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[RawatJlDrprs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatJlDrprs()
    {
        return $this->hasMany(RawatJlDrpr::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[RawatJlPrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatJlPrs()
    {
        return $this->hasMany(RawatJlPr::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[RekonsiliasiObatKonfirmasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRekonsiliasiObatKonfirmasis()
    {
        return $this->hasMany(RekonsiliasiObatKonfirmasi::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[RekonsiliasiObats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRekonsiliasiObats()
    {
        return $this->hasMany(RekonsiliasiObat::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Returbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturbelis()
    {
        return $this->hasMany(Returbeli::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Returjuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturjuals()
    {
        return $this->hasMany(Returjual::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Returpiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturpiutangs()
    {
        return $this->hasMany(Returpiutang::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[RvpKlaimBpjs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRvpKlaimBpjs()
    {
        return $this->hasMany(RvpKlaimBpjs::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[SigninSebelumAnestesis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSigninSebelumAnestesis()
    {
        return $this->hasMany(SigninSebelumAnestesi::class, ['nip_perawat_ok' => 'nip']);
    }

    /**
     * Gets query for [[SignoutSebelumMenutupLukas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSignoutSebelumMenutupLukas()
    {
        return $this->hasMany(SignoutSebelumMenutupLuka::class, ['nip_perawat_ok' => 'nip']);
    }

    /**
     * Gets query for [[SkorAldrettePascaAnestesis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkorAldrettePascaAnestesis()
    {
        return $this->hasMany(SkorAldrettePascaAnestesi::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[SkorBromagePascaAnestesis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkorBromagePascaAnestesis()
    {
        return $this->hasMany(SkorBromagePascaAnestesi::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[SkorStewardPascaAnestesis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkorStewardPascaAnestesis()
    {
        return $this->hasMany(SkorStewardPascaAnestesi::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[SkriningGizis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningGizis()
    {
        return $this->hasMany(SkriningGizi::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[SkriningKekerasanPadaPerempuans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningKekerasanPadaPerempuans()
    {
        return $this->hasMany(SkriningKekerasanPadaPerempuan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[SkriningKesehatanGigiMulutRemajas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningKesehatanGigiMulutRemajas()
    {
        return $this->hasMany(SkriningKesehatanGigiMulutRemaja::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[SkriningNutrisiAnaks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningNutrisiAnaks()
    {
        return $this->hasMany(SkriningNutrisiAnak::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[SkriningNutrisiDewasas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningNutrisiDewasas()
    {
        return $this->hasMany(SkriningNutrisiDewasa::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[SkriningNutrisiLansias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningNutrisiLansias()
    {
        return $this->hasMany(SkriningNutrisiLansia::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[SkriningObesitas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningObesitas()
    {
        return $this->hasMany(SkriningObesitas::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[SkriningPerilakuMerokokSekolahRemajas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningPerilakuMerokokSekolahRemajas()
    {
        return $this->hasMany(SkriningPerilakuMerokokSekolahRemaja::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[SkriningRawatJalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningRawatJalans()
    {
        return $this->hasMany(SkriningRawatJalan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[SkriningRisikoKankerParus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningRisikoKankerParus()
    {
        return $this->hasMany(SkriningRisikoKankerParu::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[SkriningRisikoKankerPayudaras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningRisikoKankerPayudaras()
    {
        return $this->hasMany(SkriningRisikoKankerPayudara::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[SkriningTbcs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningTbcs()
    {
        return $this->hasMany(SkriningTbc::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[SuratKeteranganCovs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeteranganCovs()
    {
        return $this->hasMany(SuratKeteranganCovid::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[SuratPernyataanPasienUmums]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPernyataanPasienUmums()
    {
        return $this->hasMany(SuratPernyataanPasienUmum::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[SuratPersetujuanRawatInaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPersetujuanRawatInaps()
    {
        return $this->hasMany(SuratPersetujuanRawatInap::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[SuratPersetujuanUmums]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPersetujuanUmums()
    {
        return $this->hasMany(SuratPersetujuanUmum::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[SuratPulangAtasPermintaanSendiris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPulangAtasPermintaanSendiris()
    {
        return $this->hasMany(SuratPulangAtasPermintaanSendiri::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[TelaahFarmasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTelaahFarmasis()
    {
        return $this->hasMany(TelaahFarmasi::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[TimeoutSebelumInsisis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTimeoutSebelumInsisis()
    {
        return $this->hasMany(TimeoutSebelumInsisi::class, ['nip_perawat_ok' => 'nip']);
    }

    /**
     * Gets query for [[TitipFakturs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTitipFakturs()
    {
        return $this->hasMany(TitipFaktur::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[TokoBayarPemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoBayarPemesanans()
    {
        return $this->hasMany(TokoBayarPemesanan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Tokopembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokopembelians()
    {
        return $this->hasMany(Tokopembelian::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Tokopemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokopemesanans()
    {
        return $this->hasMany(Tokopemesanan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Tokopenjualans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokopenjualans()
    {
        return $this->hasMany(Tokopenjualan::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Tokopiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokopiutangs()
    {
        return $this->hasMany(Tokopiutang::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Tokoreturbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoreturbelis()
    {
        return $this->hasMany(Tokoreturbeli::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Tokoreturjuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoreturjuals()
    {
        return $this->hasMany(Tokoreturjual::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Tokoreturpiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoreturpiutangs()
    {
        return $this->hasMany(Tokoreturpiutang::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[TransferPasienAntarRuangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransferPasienAntarRuangs()
    {
        return $this->hasMany(TransferPasienAntarRuang::class, ['nip_menyerahkan' => 'nip']);
    }

    /**
     * Gets query for [[TransferPasienAntarRuangs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransferPasienAntarRuangs0()
    {
        return $this->hasMany(TransferPasienAntarRuang::class, ['nip_menerima' => 'nip']);
    }

    /**
     * Gets query for [[UtdCekalDarahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdCekalDarahs()
    {
        return $this->hasMany(UtdCekalDarah::class, ['petugas_pemusnahan' => 'nip']);
    }

    /**
     * Gets query for [[UtdDonors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdDonors()
    {
        return $this->hasMany(UtdDonor::class, ['petugas_aftap' => 'nip']);
    }

    /**
     * Gets query for [[UtdDonors0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdDonors0()
    {
        return $this->hasMany(UtdDonor::class, ['petugas_u_saring' => 'nip']);
    }

    /**
     * Gets query for [[UtdMedisRusaks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdMedisRusaks()
    {
        return $this->hasMany(UtdMedisRusak::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[UtdPemisahanKomponens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPemisahanKomponens()
    {
        return $this->hasMany(UtdPemisahanKomponen::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[UtdPengambilanPenunjangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPengambilanPenunjangs()
    {
        return $this->hasMany(UtdPengambilanPenunjang::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[UtdPenunjangRusaks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPenunjangRusaks()
    {
        return $this->hasMany(UtdPenunjangRusak::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[UtdPenyerahanDarahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPenyerahanDarahs()
    {
        return $this->hasMany(UtdPenyerahanDarah::class, ['nip_cross' => 'nip']);
    }
}
