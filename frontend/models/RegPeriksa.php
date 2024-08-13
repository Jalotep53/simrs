<?php

namespace frontend\models;

use Yii;
use frontend\models\Dokter;
use frontend\models\Pasien;
use frontend\models\Penjab;
use frontend\models\KamarInap;
use frontend\models\Kamar;
use frontend\models\Bangsal;
use frontend\models\RawatJlDr;
use frontend\models\JnsPerawatan;
/**
 * This is the model class for table "reg_periksa".
 *
 * @property string|null $no_reg
 * @property string $no_rawat
 * @property string|null $tgl_registrasi
 * @property string|null $jam_reg
 * @property string|null $kd_dokter
 * @property string|null $no_rkm_medis
 * @property string|null $kd_poli
 * @property string|null $p_jawab
 * @property string|null $almt_pj
 * @property string|null $hubunganpj
 * @property float|null $biaya_reg
 * @property string|null $stts
 * @property string $stts_daftar
 * @property string $status_lanjut
 * @property string $kd_pj
 * @property int|null $umurdaftar
 * @property string|null $sttsumur
 * @property string $status_bayar
 * @property string $status_poli
 *
 * @property AsuhanGizi[] $asuhanGizis
 * @property AturanPakai[] $aturanPakais
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
 * @property BeriBhpRadiologi[] $beriBhpRadiologis
 * @property BeriObatOperasi[] $beriObatOperasis
 * @property BerkasDigitalPerawatan[] $berkasDigitalPerawatans
 * @property Billing[] $billings
 * @property BookingOperasi[] $bookingOperasis
 * @property BridgingInhealth[] $bridgingInhealths
 * @property BridgingSepInternal[] $bridgingSepInternals
 * @property BridgingSep[] $bridgingSeps
 * @property BridgingSuratPriBpjs[] $bridgingSuratPriBpjs
 * @property BuktiPersetujuanTransferPasienAntarRuang $buktiPersetujuanTransferPasienAntarRuang
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
 * @property CatatanPerawatan[] $catatanPerawatans
 * @property CatatanPersalinan $catatanPersalinan
 * @property ChecklistKriteriaKeluarHcu[] $checklistKriteriaKeluarHcus
 * @property ChecklistKriteriaKeluarIcu[] $checklistKriteriaKeluarIcus
 * @property ChecklistKriteriaMasukHcu[] $checklistKriteriaMasukHcus
 * @property ChecklistKriteriaMasukIcu[] $checklistKriteriaMasukIcus
 * @property ChecklistPostOperasi[] $checklistPostOperasis
 * @property ChecklistPreOperasi[] $checklistPreOperasis
 * @property DataHais[] $dataHais
 * @property DataKlasifikasiPasienRanap[] $dataKlasifikasiPasienRanaps
 * @property DataTb $dataTb
 * @property DataTriaseIgd $dataTriaseIgd
 * @property DataTriaseIgddetailSkala1[] $dataTriaseIgddetailSkala1s
 * @property DataTriaseIgddetailSkala2[] $dataTriaseIgddetailSkala2s
 * @property DataTriaseIgddetailSkala3[] $dataTriaseIgddetailSkala3s
 * @property DataTriaseIgddetailSkala4[] $dataTriaseIgddetailSkala4s
 * @property DataTriaseIgddetailSkala5[] $dataTriaseIgddetailSkala5s
 * @property DataTriaseIgdprimer $dataTriaseIgdprimer
 * @property DataTriaseIgdsekunder $dataTriaseIgdsekunder
 * @property Deposit[] $deposits
 * @property DetailBeriDiet[] $detailBeriDiets
 * @property DetailNotaInap[] $detailNotaInaps
 * @property DetailNotaJalan[] $detailNotaJalans
 * @property DetailObatRacikan[] $detailObatRacikans
 * @property DetailPemberianObat[] $detailPemberianObats
 * @property DetailPenagihanPiutang[] $detailPenagihanPiutangs
 * @property DetailPeriksaLabpaGambar[] $detailPeriksaLabpaGambars
 * @property DetailPeriksaLabpa[] $detailPeriksaLabpas
 * @property DetailPeriksaLab[] $detailPeriksaLabs
 * @property DetailPiutangPasien[] $detailPiutangPasiens
 * @property DeteksiDiniCorona $deteksiDiniCorona
 * @property DiagnosaPasien[] $diagnosaPasiens
 * @property DpjpRanap[] $dpjpRanaps
 * @property EdukasiPasienKeluargaRj $edukasiPasienKeluargaRj
 * @property FollowUpDbd[] $followUpDbds
 * @property GambarRadiologi[] $gambarRadiologis
 * @property HasilEndoskopiFaringLaring $hasilEndoskopiFaringLaring
 * @property HasilEndoskopiHidung $hasilEndoskopiHidung
 * @property HasilEndoskopiTelinga $hasilEndoskopiTelinga
 * @property HasilPemeriksaanEkg $hasilPemeriksaanEkg
 * @property HasilPemeriksaanUsg $hasilPemeriksaanUsg
 * @property HasilPemeriksaanUsgGynecologi $hasilPemeriksaanUsgGynecologi
 * @property HasilPemeriksaanUsgNeonatus $hasilPemeriksaanUsgNeonatus
 * @property HasilPemeriksaanUsgUrologi $hasilPemeriksaanUsgUrologi
 * @property HasilRadiologi[] $hasilRadiologis
 * @property HasilTindakanEswl[] $hasilTindakanEswls
 * @property Hemodialisa[] $hemodialisas
 * @property InacbgKlaimBaru2 $inacbgKlaimBaru2
 * @property InacbgNoklaimCorona $inacbgNoklaimCorona
 * @property InsidenKeselamatanPasien[] $insidenKeselamatanPasiens
 * @property KamarInap[] $kamarInaps
 * @property Dokter $kdDokter
 * @property Dokter[] $kdDokters
 * @property Dokter[] $kdDokters0
 * @property Penjab $kdPj
 * @property Poliklinik $kdPoli
 * @property MasterTriaseSkala1[] $kodeSkala1s
 * @property MasterTriaseSkala2[] $kodeSkala2s
 * @property MasterTriaseSkala3[] $kodeSkala3s
 * @property MasterTriaseSkala4[] $kodeSkala4s
 * @property MasterTriaseSkala5[] $kodeSkala5s
 * @property KonselingFarmasi $konselingFarmasi
 * @property KonsultasiMedik[] $konsultasiMediks
 * @property LaporanAnestesi[] $laporanAnestesis
 * @property LaporanOperasi[] $laporanOperasis
 * @property MonitoringAsuhanGizi[] $monitoringAsuhanGizis
 * @property MonitoringReaksiTranfusi[] $monitoringReaksiTranfusis
 * @property MppEvaluasiCatatan[] $mppEvaluasiCatatans
 * @property MppEvaluasiMasalah[] $mppEvaluasiMasalahs
 * @property MppEvaluasi[] $mppEvaluasis
 * @property MppSkrining[] $mppSkrinings
 * @property MutasiBerkas $mutasiBerkas
 * @property AkunBayar[] $namaBayars
 * @property AkunPiutang[] $namaBayars0
 * @property RegPeriksa[] $noRawat2s
 * @property RegPeriksa[] $noRawats
 * @property Pasien $noRkmMedis
 * @property PenagihanPiutang[] $noTagihans
 * @property NotaInap $notaInap
 * @property NotaJalan $notaJalan
 * @property ObatRacikan[] $obatRacikans
 * @property Operasi[] $operasis
 * @property PcareKunjunganUmum $pcareKunjunganUmum
 * @property PcareObatDiberikan[] $pcareObatDiberikans
 * @property PcarePendaftaran $pcarePendaftaran
 * @property PcareRujukInternal $pcareRujukInternal
 * @property PcareRujukKhusus $pcareRujukKhusus
 * @property PcareRujukSubspesialis $pcareRujukSubspesialis
 * @property PcareTindakanRalanDiberikan[] $pcareTindakanRalanDiberikans
 * @property PcareTindakanRanapDiberikan[] $pcareTindakanRanapDiberikans
 * @property PelayananInformasiObat[] $pelayananInformasiObats
 * @property PemantauanEwsNeonatus[] $pemantauanEwsNeonatuses
 * @property PemantauanMeowsObstetri[] $pemantauanMeowsObstetris
 * @property PemantauanPewsAnak[] $pemantauanPewsAnaks
 * @property PemantauanPewsDewasa[] $pemantauanPewsDewasas
 * @property PemeriksaanGinekologiRalan[] $pemeriksaanGinekologiRalans
 * @property PemeriksaanGinekologiRanap[] $pemeriksaanGinekologiRanaps
 * @property PemeriksaanObstetriRalan[] $pemeriksaanObstetriRalans
 * @property PemeriksaanObstetriRanap[] $pemeriksaanObstetriRanaps
 * @property PemeriksaanRalan[] $pemeriksaanRalans
 * @property PemeriksaanRanap[] $pemeriksaanRanaps
 * @property PenatalaksanaanTerapiOkupasi $penatalaksanaanTerapiOkupasi
 * @property PengembalianDeposit $pengembalianDeposit
 * @property PengkajianRestrain $pengkajianRestrain
 * @property PenguranganBiaya[] $penguranganBiayas
 * @property PenilaianAwalKeperawatanGigi $penilaianAwalKeperawatanGigi
 * @property PenilaianAwalKeperawatanIgd $penilaianAwalKeperawatanIgd
 * @property PenilaianAwalKeperawatanKebidanan $penilaianAwalKeperawatanKebidanan
 * @property PenilaianAwalKeperawatanKebidananRanap $penilaianAwalKeperawatanKebidananRanap
 * @property PenilaianAwalKeperawatanMata $penilaianAwalKeperawatanMata
 * @property PenilaianAwalKeperawatanRalan $penilaianAwalKeperawatanRalan
 * @property PenilaianAwalKeperawatanRalanBayi $penilaianAwalKeperawatanRalanBayi
 * @property PenilaianAwalKeperawatanRalanGeriatri $penilaianAwalKeperawatanRalanGeriatri
 * @property PenilaianAwalKeperawatanRalanPsikiatri $penilaianAwalKeperawatanRalanPsikiatri
 * @property PenilaianAwalKeperawatanRanap $penilaianAwalKeperawatanRanap
 * @property PenilaianAwalKeperawatanRanapNeonatus $penilaianAwalKeperawatanRanapNeonatus
 * @property PenilaianFisioterapi $penilaianFisioterapi
 * @property PenilaianKorbanKekerasan $penilaianKorbanKekerasan
 * @property PenilaianLanjutanResikoJatuhAnak[] $penilaianLanjutanResikoJatuhAnaks
 * @property PenilaianLanjutanResikoJatuhDewasa[] $penilaianLanjutanResikoJatuhDewasas
 * @property PenilaianLanjutanResikoJatuhPsikiatri[] $penilaianLanjutanResikoJatuhPsikiatris
 * @property PenilaianLanjutanSkriningFungsional[] $penilaianLanjutanSkriningFungsionals
 * @property PenilaianLevelKecemasanRanapAnak[] $penilaianLevelKecemasanRanapAnaks
 * @property PenilaianMcu $penilaianMcu
 * @property PenilaianMedisHemodialisa $penilaianMedisHemodialisa
 * @property PenilaianMedisIgd $penilaianMedisIgd
 * @property PenilaianMedisRalan $penilaianMedisRalan
 * @property PenilaianMedisRalanAnak $penilaianMedisRalanAnak
 * @property PenilaianMedisRalanBedah $penilaianMedisRalanBedah
 * @property PenilaianMedisRalanBedahMulut $penilaianMedisRalanBedahMulut
 * @property PenilaianMedisRalanGawatDaruratPsikiatri $penilaianMedisRalanGawatDaruratPsikiatri
 * @property PenilaianMedisRalanGeriatri $penilaianMedisRalanGeriatri
 * @property PenilaianMedisRalanKandungan $penilaianMedisRalanKandungan
 * @property PenilaianMedisRalanKulitdankelamin $penilaianMedisRalanKulitdankelamin
 * @property PenilaianMedisRalanMata $penilaianMedisRalanMata
 * @property PenilaianMedisRalanNeurologi $penilaianMedisRalanNeurologi
 * @property PenilaianMedisRalanOrthopedi $penilaianMedisRalanOrthopedi
 * @property PenilaianMedisRalanParu $penilaianMedisRalanParu
 * @property PenilaianMedisRalanPenyakitDalam $penilaianMedisRalanPenyakitDalam
 * @property PenilaianMedisRalanPsikiatrik $penilaianMedisRalanPsikiatrik
 * @property PenilaianMedisRalanRehabMedik $penilaianMedisRalanRehabMedik
 * @property PenilaianMedisRalanTht $penilaianMedisRalanTht
 * @property PenilaianMedisRanap $penilaianMedisRanap
 * @property PenilaianMedisRanapKandungan $penilaianMedisRanapKandungan
 * @property PenilaianPasienImunitasRendah $penilaianPasienImunitasRendah
 * @property PenilaianPasienKeracunan $penilaianPasienKeracunan
 * @property PenilaianPasienPenyakitMenular $penilaianPasienPenyakitMenular
 * @property PenilaianPasienTerminal $penilaianPasienTerminal
 * @property PenilaianPreAnestesi[] $penilaianPreAnestesis
 * @property PenilaianPreInduksi[] $penilaianPreInduksis
 * @property PenilaianPreOperasi[] $penilaianPreOperasis
 * @property PenilaianPsikologi $penilaianPsikologi
 * @property PenilaianRisikoDekubitus[] $penilaianRisikoDekubituses
 * @property PenilaianRisikoJatuhNeonatus[] $penilaianRisikoJatuhNeonatuses
 * @property PenilaianTambahanBeresikoMelarikanDiri $penilaianTambahanBeresikoMelarikanDiri
 * @property PenilaianTambahanBunuhDiri $penilaianTambahanBunuhDiri
 * @property PenilaianTambahanGeriatri $penilaianTambahanGeriatri
 * @property PenilaianTambahanPerilakuKekerasan $penilaianTambahanPerilakuKekerasan
 * @property PenilaianTerapiWicara $penilaianTerapiWicara
 * @property PenilaianUlangNyeri[] $penilaianUlangNyeris
 * @property PerawatanCorona $perawatanCorona
 * @property PerencanaanPemulangan $perencanaanPemulangan
 * @property PeriksaLab[] $periksaLabs
 * @property PeriksaRadiologi[] $periksaRadiologis
 * @property PerkiraanBiayaRanap $perkiraanBiayaRanap
 * @property PermintaanLabmb[] $permintaanLabmbs
 * @property PermintaanLabpa[] $permintaanLabpas
 * @property PermintaanLab[] $permintaanLabs
 * @property PermintaanObat[] $permintaanObats
 * @property PermintaanRadiologi[] $permintaanRadiologis
 * @property PermintaanRanap $permintaanRanap
 * @property PermintaanRegistrasi $permintaanRegistrasi
 * @property PermintaanResepPulang[] $permintaanResepPulangs
 * @property PermintaanStokObatPasien[] $permintaanStokObatPasiens
 * @property PersetujuanPenolakanTindakan[] $persetujuanPenolakanTindakans
 * @property PersetujuanPenundaanPelayanan[] $persetujuanPenundaanPelayanans
 * @property PiutangPasien $piutangPasien
 * @property ProsedurPasien[] $prosedurPasiens
 * @property RanapGabung[] $ranapGabungs
 * @property RanapGabung[] $ranapGabungs0
 * @property RawatInapDrpr[] $rawatInapDrprs
 * @property RawatInapDr[] $rawatInapDrs
 * @property RawatInapPr[] $rawatInapPrs
 * @property RawatJlDrpr[] $rawatJlDrprs
 * @property RawatJlDr[] $rawatJlDrs
 * @property RawatJlPr[] $rawatJlPrs
 * @property ReferensiMobilejknBpjsTaskid[] $referensiMobilejknBpjsTasks
 * @property RekonsiliasiObat[] $rekonsiliasiObats
 * @property ResepLuar[] $resepLuars
 * @property ResepObat[] $resepObats
 * @property ResepPulang[] $resepPulangs
 * @property ResumePasien $resumePasien
 * @property ResumePasienRanap $resumePasienRanap
 * @property Returpasien[] $returpasiens
 * @property RujukMasuk $rujukMasuk
 * @property RujukanInternalPoli[] $rujukanInternalPolis
 * @property Rujuk[] $rujuks
 * @property RvpKlaimBpjs $rvpKlaimBpjs
 * @property SaranKesanLab[] $saranKesanLabs
 * @property SatuSehatClinicalimpression[] $satuSehatClinicalimpressions
 * @property SatuSehatCondition[] $satuSehatConditions
 * @property SatuSehatDiet[] $satuSehatDiets
 * @property SatuSehatEncounter $satuSehatEncounter
 * @property SatuSehatImmunization[] $satuSehatImmunizations
 * @property SatuSehatMedicationdispense[] $satuSehatMedicationdispenses
 * @property SatuSehatObservationttvbb[] $satuSehatObservationttvbbs
 * @property SatuSehatObservationttvgcs[] $satuSehatObservationttvgcs
 * @property SatuSehatObservationttvkesadaran[] $satuSehatObservationttvkesadarans
 * @property SatuSehatObservationttvlp[] $satuSehatObservationttvlps
 * @property SatuSehatObservationttvnadi[] $satuSehatObservationttvnadis
 * @property SatuSehatObservationttvrespirasi[] $satuSehatObservationttvrespirasis
 * @property SatuSehatObservationttvspo2[] $satuSehatObservationttvspo2s
 * @property SatuSehatObservationttvsuhu[] $satuSehatObservationttvsuhus
 * @property SatuSehatObservationttvtb[] $satuSehatObservationttvtbs
 * @property SatuSehatObservationttvtensi[] $satuSehatObservationttvtensis
 * @property SatuSehatProcedure[] $satuSehatProcedures
 * @property SigninSebelumAnestesi[] $signinSebelumAnestesis
 * @property SignoutSebelumMenutupLuka[] $signoutSebelumMenutupLukas
 * @property SisaDietPasien[] $sisaDietPasiens
 * @property SisruteRujukanKeluar $sisruteRujukanKeluar
 * @property SkorAldrettePascaAnestesi[] $skorAldrettePascaAnestesis
 * @property SkorBromagePascaAnestesi[] $skorBromagePascaAnestesis
 * @property SkorStewardPascaAnestesi[] $skorStewardPascaAnestesis
 * @property SkriningGizi[] $skriningGizis
 * @property SkriningKekerasanPadaPerempuan $skriningKekerasanPadaPerempuan
 * @property SkriningKesehatanGigiMulutRemaja $skriningKesehatanGigiMulutRemaja
 * @property SkriningNutrisiAnak $skriningNutrisiAnak
 * @property SkriningNutrisiDewasa $skriningNutrisiDewasa
 * @property SkriningNutrisiLansia $skriningNutrisiLansia
 * @property SkriningObesitas $skriningObesitas
 * @property SkriningPerilakuMerokokSekolahRemaja $skriningPerilakuMerokokSekolahRemaja
 * @property SkriningRisikoKankerParu $skriningRisikoKankerParu
 * @property SkriningRisikoKankerPayudara $skriningRisikoKankerPayudara
 * @property SkriningTbc $skriningTbc
 * @property StokObatPasien[] $stokObatPasiens
 * @property SuratBebasTato[] $suratBebasTatos
 * @property SuratBebasTbc[] $suratBebasTbcs
 * @property SuratButaWarna[] $suratButaWarnas
 * @property SuratCutiHamil $suratCutiHamil
 * @property SuratHamil[] $suratHamils
 * @property SuratKeteranganCovid[] $suratKeteranganCovs
 * @property SuratKeteranganRawatInap[] $suratKeteranganRawatInaps
 * @property SuratKeteranganSehat[] $suratKeteranganSehats
 * @property SuratKewaspadaanKesehatan[] $suratKewaspadaanKesehatans
 * @property SuratPenolakanAnjuranMedis[] $suratPenolakanAnjuranMedis
 * @property SuratPernyataanPasienUmum[] $suratPernyataanPasienUmums
 * @property SuratPersetujuanRawatInap[] $suratPersetujuanRawatInaps
 * @property SuratPersetujuanUmum[] $suratPersetujuanUmums
 * @property SuratPulangAtasPermintaanSendiri[] $suratPulangAtasPermintaanSendiris
 * @property SuratSkbn[] $suratSkbns
 * @property Suratsakitpihak2[] $suratsakitpihak2s
 * @property Suratsakit[] $suratsakits
 * @property TagihanObatLangsung[] $tagihanObatLangsungs
 * @property TambahanBiaya[] $tambahanBiayas
 * @property TimeoutSebelumInsisi[] $timeoutSebelumInsisis
 * @property TransferPasienAntarRuang[] $transferPasienAntarRuangs
 * @property UbahPenjab[] $ubahPenjabs
 * @property UjiFungsiKfr $ujiFungsiKfr
 */
class RegPeriksa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reg_periksa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'stts_daftar', 'status_lanjut', 'kd_pj', 'status_bayar', 'status_poli'], 'required'],
            [['tgl_registrasi', 'jam_reg'], 'safe'],
            [['biaya_reg'], 'number'],
            [['stts', 'stts_daftar', 'status_lanjut', 'sttsumur', 'status_bayar', 'status_poli'], 'string'],
            [['umurdaftar'], 'integer'],
            [['no_reg'], 'string', 'max' => 8],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter', 'hubunganpj'], 'string', 'max' => 20],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['kd_poli'], 'string', 'max' => 5],
            [['p_jawab'], 'string', 'max' => 100],
            [['almt_pj'], 'string', 'max' => 200],
            [['kd_pj'], 'string', 'max' => 3],
            [['no_rawat'], 'unique'],
            [['kd_poli'], 'exist', 'skipOnError' => true, 'targetClass' => Poliklinik::class, 'targetAttribute' => ['kd_poli' => 'kd_poli']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
            [['kd_pj'], 'exist', 'skipOnError' => true, 'targetClass' => Penjab::class, 'targetAttribute' => ['kd_pj' => 'kd_pj']],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_reg' => 'No Reg',
            'no_rawat' => 'No Rawat',
            'tgl_registrasi' => 'Tgl Registrasi',
            'jam_reg' => 'Jam Reg',
            'kd_dokter' => 'Kd Dokter',
            'no_rkm_medis' => 'No Rkm Medis',
            'kd_poli' => 'Kd Poli',
            'p_jawab' => 'P Jawab',
            'almt_pj' => 'Almt Pj',
            'hubunganpj' => 'Hubunganpj',
            'biaya_reg' => 'Biaya Reg',
            'stts' => 'Stts',
            'stts_daftar' => 'Stts Daftar',
            'status_lanjut' => 'Status Lanjut',
            'kd_pj' => 'Kd Pj',
            'umurdaftar' => 'Umurdaftar',
            'sttsumur' => 'Sttsumur',
            'status_bayar' => 'Status Bayar',
            'status_poli' => 'Status Poli',
        ];
    }

    /**
     * Gets query for [[AsuhanGizis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAsuhanGizis()
    {
        return $this->hasMany(AsuhanGizi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[AturanPakais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAturanPakais()
    {
        return $this->hasMany(AturanPakai::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BayarDetailPeriksaLabPerujuks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarDetailPeriksaLabPerujuks()
    {
        return $this->hasMany(BayarDetailPeriksaLabPerujuk::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BayarDetailPeriksaLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarDetailPeriksaLabs()
    {
        return $this->hasMany(BayarDetailPeriksaLab::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BayarOperasiDokterAnaks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarOperasiDokterAnaks()
    {
        return $this->hasMany(BayarOperasiDokterAnak::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BayarOperasiDokterAnestesis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarOperasiDokterAnestesis()
    {
        return $this->hasMany(BayarOperasiDokterAnestesi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BayarOperasiDokterPjanaks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarOperasiDokterPjanaks()
    {
        return $this->hasMany(BayarOperasiDokterPjanak::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BayarOperasiDokterUmums]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarOperasiDokterUmums()
    {
        return $this->hasMany(BayarOperasiDokterUmum::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BayarOperasiOperator1s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarOperasiOperator1s()
    {
        return $this->hasMany(BayarOperasiOperator1::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BayarOperasiOperator2s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarOperasiOperator2s()
    {
        return $this->hasMany(BayarOperasiOperator2::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BayarOperasiOperator3s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarOperasiOperator3s()
    {
        return $this->hasMany(BayarOperasiOperator3::class, ['no_rawat' => 'no_rawat']);
    }
    public function getNamaKamar($no_rawat){
        $kamarInap = KamarInap::find()->where(['no_rawat' => $no_rawat])->one();
//        var_dump($kamarInap);die;
        $kamar = Kamar::find()->where(['kd_kamar'=> $kamarInap->kd_kamar])->one();
//        var_dump($kamar);die;
        $bangsal = Bangsal::find()->where(['kd_bangsal'=> $kamar->kd_bangsal])->one();
        
        return $bangsal->nm_bangsal;
    }
     public function getTanggalMasuk($no_rawat){
        $kamarInap = KamarInap::find()->where(['no_rawat' => $no_rawat])->one();
//        var_dump($kamarInap);die;
        $kamar = Kamar::find()->where(['kd_kamar'=> $kamarInap->kd_kamar])->one();
//        var_dump($kamar);die;
        $bangsal = Bangsal::find()->where(['kd_bangsal'=> $kamar->kd_bangsal])->one();
        
        return $kamarInap->tgl_masuk;
    }
    /**
     * Gets query for [[BayarPeriksaLabPerujuks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPeriksaLabPerujuks()
    {
        return $this->hasMany(BayarPeriksaLabPerujuk::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BayarPeriksaLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPeriksaLabs()
    {
        return $this->hasMany(BayarPeriksaLab::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BayarPeriksaRadiologiPerujuks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPeriksaRadiologiPerujuks()
    {
        return $this->hasMany(BayarPeriksaRadiologiPerujuk::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BayarPeriksaRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPeriksaRadiologis()
    {
        return $this->hasMany(BayarPeriksaRadiologi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BayarRawatInapDrprs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarRawatInapDrprs()
    {
        return $this->hasMany(BayarRawatInapDrpr::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BayarRawatInapDrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarRawatInapDrs()
    {
        return $this->hasMany(BayarRawatInapDr::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BayarRawatJlDrprs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarRawatJlDrprs()
    {
        return $this->hasMany(BayarRawatJlDrpr::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BayarRawatJlDrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarRawatJlDrs()
    {
        return $this->hasMany(BayarRawatJlDr::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BeriBhpRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBeriBhpRadiologis()
    {
        return $this->hasMany(BeriBhpRadiologi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BeriObatOperasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBeriObatOperasis()
    {
        return $this->hasMany(BeriObatOperasi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BerkasDigitalPerawatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBerkasDigitalPerawatans()
    {
        return $this->hasMany(BerkasDigitalPerawatan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[Billings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillings()
    {
        return $this->hasMany(Billing::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BookingOperasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookingOperasis()
    {
        return $this->hasMany(BookingOperasi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BridgingInhealths]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBridgingInhealths()
    {
        return $this->hasMany(BridgingInhealth::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BridgingSepInternals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBridgingSepInternals()
    {
        return $this->hasMany(BridgingSepInternal::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BridgingSeps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBridgingSeps()
    {
        return $this->hasMany(BridgingSep::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BridgingSuratPriBpjs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBridgingSuratPriBpjs()
    {
        return $this->hasMany(BridgingSuratPriBpjs::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[BuktiPersetujuanTransferPasienAntarRuang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuktiPersetujuanTransferPasienAntarRuang()
    {
        return $this->hasOne(BuktiPersetujuanTransferPasienAntarRuang::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[CatatanAdimeGizis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanAdimeGizis()
    {
        return $this->hasMany(CatatanAdimeGizi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[CatatanCekGds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanCekGds()
    {
        return $this->hasMany(CatatanCekGds::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[CatatanInfusRalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanInfusRalans()
    {
        return $this->hasMany(CatatanInfusRalan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[CatatanKeperawatanRalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanKeperawatanRalans()
    {
        return $this->hasMany(CatatanKeperawatanRalan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[CatatanKeperawatanRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanKeperawatanRanaps()
    {
        return $this->hasMany(CatatanKeperawatanRanap::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[CatatanKeseimbanganCairans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanKeseimbanganCairans()
    {
        return $this->hasMany(CatatanKeseimbanganCairan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[CatatanObservasiChbps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanObservasiChbps()
    {
        return $this->hasMany(CatatanObservasiChbp::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[CatatanObservasiIgds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanObservasiIgds()
    {
        return $this->hasMany(CatatanObservasiIgd::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[CatatanObservasiInduksiPersalinans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanObservasiInduksiPersalinans()
    {
        return $this->hasMany(CatatanObservasiInduksiPersalinan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[CatatanObservasiRanapKebidanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanObservasiRanapKebidanans()
    {
        return $this->hasMany(CatatanObservasiRanapKebidanan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[CatatanObservasiRanapPostparta]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanObservasiRanapPostparta()
    {
        return $this->hasMany(CatatanObservasiRanapPostpartum::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[CatatanObservasiRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanObservasiRanaps()
    {
        return $this->hasMany(CatatanObservasiRanap::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[CatatanPerawatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanPerawatans()
    {
        return $this->hasMany(CatatanPerawatan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[CatatanPersalinan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanPersalinan()
    {
        return $this->hasOne(CatatanPersalinan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[ChecklistKriteriaKeluarHcus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChecklistKriteriaKeluarHcus()
    {
        return $this->hasMany(ChecklistKriteriaKeluarHcu::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[ChecklistKriteriaKeluarIcus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChecklistKriteriaKeluarIcus()
    {
        return $this->hasMany(ChecklistKriteriaKeluarIcu::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[ChecklistKriteriaMasukHcus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChecklistKriteriaMasukHcus()
    {
        return $this->hasMany(ChecklistKriteriaMasukHcu::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[ChecklistKriteriaMasukIcus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChecklistKriteriaMasukIcus()
    {
        return $this->hasMany(ChecklistKriteriaMasukIcu::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[ChecklistPostOperasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChecklistPostOperasis()
    {
        return $this->hasMany(ChecklistPostOperasi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[ChecklistPreOperasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChecklistPreOperasis()
    {
        return $this->hasMany(ChecklistPreOperasi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DataHais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataHais()
    {
        return $this->hasMany(DataHais::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DataKlasifikasiPasienRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataKlasifikasiPasienRanaps()
    {
        return $this->hasMany(DataKlasifikasiPasienRanap::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DataTb]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataTb()
    {
        return $this->hasOne(DataTb::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DataTriaseIgd]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataTriaseIgd()
    {
        return $this->hasOne(DataTriaseIgd::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DataTriaseIgddetailSkala1s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataTriaseIgddetailSkala1s()
    {
        return $this->hasMany(DataTriaseIgddetailSkala1::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DataTriaseIgddetailSkala2s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataTriaseIgddetailSkala2s()
    {
        return $this->hasMany(DataTriaseIgddetailSkala2::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DataTriaseIgddetailSkala3s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataTriaseIgddetailSkala3s()
    {
        return $this->hasMany(DataTriaseIgddetailSkala3::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DataTriaseIgddetailSkala4s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataTriaseIgddetailSkala4s()
    {
        return $this->hasMany(DataTriaseIgddetailSkala4::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DataTriaseIgddetailSkala5s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataTriaseIgddetailSkala5s()
    {
        return $this->hasMany(DataTriaseIgddetailSkala5::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DataTriaseIgdprimer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataTriaseIgdprimer()
    {
        return $this->hasOne(DataTriaseIgdprimer::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DataTriaseIgdsekunder]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataTriaseIgdsekunder()
    {
        return $this->hasOne(DataTriaseIgdsekunder::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[Deposits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeposits()
    {
        return $this->hasMany(Deposit::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DetailBeriDiets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailBeriDiets()
    {
        return $this->hasMany(DetailBeriDiet::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DetailNotaInaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailNotaInaps()
    {
        return $this->hasMany(DetailNotaInap::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DetailNotaJalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailNotaJalans()
    {
        return $this->hasMany(DetailNotaJalan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DetailObatRacikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailObatRacikans()
    {
        return $this->hasMany(DetailObatRacikan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DetailPemberianObats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPemberianObats()
    {
        return $this->hasMany(DetailPemberianObat::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DetailPenagihanPiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPenagihanPiutangs()
    {
        return $this->hasMany(DetailPenagihanPiutang::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DetailPeriksaLabpaGambars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPeriksaLabpaGambars()
    {
        return $this->hasMany(DetailPeriksaLabpaGambar::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DetailPeriksaLabpas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPeriksaLabpas()
    {
        return $this->hasMany(DetailPeriksaLabpa::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DetailPeriksaLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPeriksaLabs()
    {
        return $this->hasMany(DetailPeriksaLab::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DetailPiutangPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPiutangPasiens()
    {
        return $this->hasMany(DetailPiutangPasien::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DeteksiDiniCorona]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeteksiDiniCorona()
    {
        return $this->hasOne(DeteksiDiniCorona::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DiagnosaPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDiagnosaPasiens()
    {
        return $this->hasMany(DiagnosaPasien::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[DpjpRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDpjpRanaps()
    {
        return $this->hasMany(DpjpRanap::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[EdukasiPasienKeluargaRj]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEdukasiPasienKeluargaRj()
    {
        return $this->hasOne(EdukasiPasienKeluargaRj::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[FollowUpDbds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFollowUpDbds()
    {
        return $this->hasMany(FollowUpDbd::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[GambarRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGambarRadiologis()
    {
        return $this->hasMany(GambarRadiologi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[HasilEndoskopiFaringLaring]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilEndoskopiFaringLaring()
    {
        return $this->hasOne(HasilEndoskopiFaringLaring::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[HasilEndoskopiHidung]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilEndoskopiHidung()
    {
        return $this->hasOne(HasilEndoskopiHidung::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[HasilEndoskopiTelinga]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilEndoskopiTelinga()
    {
        return $this->hasOne(HasilEndoskopiTelinga::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[HasilPemeriksaanEkg]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilPemeriksaanEkg()
    {
        return $this->hasOne(HasilPemeriksaanEkg::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[HasilPemeriksaanUsg]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilPemeriksaanUsg()
    {
        return $this->hasOne(HasilPemeriksaanUsg::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[HasilPemeriksaanUsgGynecologi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilPemeriksaanUsgGynecologi()
    {
        return $this->hasOne(HasilPemeriksaanUsgGynecologi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[HasilPemeriksaanUsgNeonatus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilPemeriksaanUsgNeonatus()
    {
        return $this->hasOne(HasilPemeriksaanUsgNeonatus::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[HasilPemeriksaanUsgUrologi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilPemeriksaanUsgUrologi()
    {
        return $this->hasOne(HasilPemeriksaanUsgUrologi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[HasilRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilRadiologis()
    {
        return $this->hasMany(HasilRadiologi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[HasilTindakanEswls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilTindakanEswls()
    {
        return $this->hasMany(HasilTindakanEswl::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[Hemodialisas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHemodialisas()
    {
        return $this->hasMany(Hemodialisa::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[InacbgKlaimBaru2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInacbgKlaimBaru2()
    {
        return $this->hasOne(InacbgKlaimBaru2::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[InacbgNoklaimCorona]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInacbgNoklaimCorona()
    {
        return $this->hasOne(InacbgNoklaimCorona::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[InsidenKeselamatanPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInsidenKeselamatanPasiens()
    {
        return $this->hasMany(InsidenKeselamatanPasien::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[KamarInaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKamarInaps()
    {
        return $this->hasMany(KamarInap::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[KdDokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDokter()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[KdDokters]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokters()
    {
        return $this->hasMany(Dokter::class, ['kd_dokter' => 'kd_dokter'])->viaTable('dpjp_ranap', ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[KdDokters0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokters0()
    {
        return $this->hasMany(Dokter::class, ['kd_dokter' => 'kd_dokter'])->viaTable('rujukan_internal_poli', ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[KdPj]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPj()
    {
        return $this->hasOne(Penjab::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[KdPoli]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPoli()
    {
        return $this->hasOne(Poliklinik::class, ['kd_poli' => 'kd_poli']);
    }

    /**
     * Gets query for [[KodeSkala1s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSkala1s()
    {
        return $this->hasMany(MasterTriaseSkala1::class, ['kode_skala1' => 'kode_skala1'])->viaTable('data_triase_igddetail_skala1', ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[KodeSkala2s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSkala2s()
    {
        return $this->hasMany(MasterTriaseSkala2::class, ['kode_skala2' => 'kode_skala2'])->viaTable('data_triase_igddetail_skala2', ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[KodeSkala3s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSkala3s()
    {
        return $this->hasMany(MasterTriaseSkala3::class, ['kode_skala3' => 'kode_skala3'])->viaTable('data_triase_igddetail_skala3', ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[KodeSkala4s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSkala4s()
    {
        return $this->hasMany(MasterTriaseSkala4::class, ['kode_skala4' => 'kode_skala4'])->viaTable('data_triase_igddetail_skala4', ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[KodeSkala5s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSkala5s()
    {
        return $this->hasMany(MasterTriaseSkala5::class, ['kode_skala5' => 'kode_skala5'])->viaTable('data_triase_igddetail_skala5', ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[KonselingFarmasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKonselingFarmasi()
    {
        return $this->hasOne(KonselingFarmasi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[KonsultasiMediks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKonsultasiMediks()
    {
        return $this->hasMany(KonsultasiMedik::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[LaporanAnestesis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporanAnestesis()
    {
        return $this->hasMany(LaporanAnestesi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[LaporanOperasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporanOperasis()
    {
        return $this->hasMany(LaporanOperasi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[MonitoringAsuhanGizis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMonitoringAsuhanGizis()
    {
        return $this->hasMany(MonitoringAsuhanGizi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[MonitoringReaksiTranfusis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMonitoringReaksiTranfusis()
    {
        return $this->hasMany(MonitoringReaksiTranfusi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[MppEvaluasiCatatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMppEvaluasiCatatans()
    {
        return $this->hasMany(MppEvaluasiCatatan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[MppEvaluasiMasalahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMppEvaluasiMasalahs()
    {
        return $this->hasMany(MppEvaluasiMasalah::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[MppEvaluasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMppEvaluasis()
    {
        return $this->hasMany(MppEvaluasi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[MppSkrinings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMppSkrinings()
    {
        return $this->hasMany(MppSkrining::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[MutasiBerkas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMutasiBerkas()
    {
        return $this->hasOne(MutasiBerkas::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[NamaBayars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNamaBayars()
    {
        return $this->hasMany(AkunBayar::class, ['nama_bayar' => 'nama_bayar'])->viaTable('detail_nota_jalan', ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[NamaBayars0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNamaBayars0()
    {
        return $this->hasMany(AkunPiutang::class, ['nama_bayar' => 'nama_bayar'])->viaTable('detail_piutang_pasien', ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[NoRawat2s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat2s()
    {
        return $this->hasMany(RegPeriksa::class, ['no_rawat' => 'no_rawat2'])->viaTable('ranap_gabung', ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[NoRawats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawats()
    {
        return $this->hasMany(RegPeriksa::class, ['no_rawat' => 'no_rawat'])->viaTable('ranap_gabung', ['no_rawat2' => 'no_rawat']);
    }

    /**
     * Gets query for [[NoRkmMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRkmMedis()
    {
        return $this->hasOne(Pasien::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[NoTagihans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoTagihans()
    {
        return $this->hasMany(PenagihanPiutang::class, ['no_tagihan' => 'no_tagihan'])->viaTable('detail_penagihan_piutang', ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[NotaInap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotaInap()
    {
        return $this->hasOne(NotaInap::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[NotaJalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotaJalan()
    {
        return $this->hasOne(NotaJalan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[ObatRacikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObatRacikans()
    {
        return $this->hasMany(ObatRacikan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[Operasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis()
    {
        return $this->hasMany(Operasi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PcareKunjunganUmum]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPcareKunjunganUmum()
    {
        return $this->hasOne(PcareKunjunganUmum::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PcareObatDiberikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPcareObatDiberikans()
    {
        return $this->hasMany(PcareObatDiberikan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PcarePendaftaran]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPcarePendaftaran()
    {
        return $this->hasOne(PcarePendaftaran::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PcareRujukInternal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPcareRujukInternal()
    {
        return $this->hasOne(PcareRujukInternal::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PcareRujukKhusus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPcareRujukKhusus()
    {
        return $this->hasOne(PcareRujukKhusus::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PcareRujukSubspesialis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPcareRujukSubspesialis()
    {
        return $this->hasOne(PcareRujukSubspesialis::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PcareTindakanRalanDiberikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPcareTindakanRalanDiberikans()
    {
        return $this->hasMany(PcareTindakanRalanDiberikan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PcareTindakanRanapDiberikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPcareTindakanRanapDiberikans()
    {
        return $this->hasMany(PcareTindakanRanapDiberikan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PelayananInformasiObats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPelayananInformasiObats()
    {
        return $this->hasMany(PelayananInformasiObat::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PemantauanEwsNeonatuses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemantauanEwsNeonatuses()
    {
        return $this->hasMany(PemantauanEwsNeonatus::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PemantauanMeowsObstetris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemantauanMeowsObstetris()
    {
        return $this->hasMany(PemantauanMeowsObstetri::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PemantauanPewsAnaks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemantauanPewsAnaks()
    {
        return $this->hasMany(PemantauanPewsAnak::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PemantauanPewsDewasas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemantauanPewsDewasas()
    {
        return $this->hasMany(PemantauanPewsDewasa::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PemeriksaanGinekologiRalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemeriksaanGinekologiRalans()
    {
        return $this->hasMany(PemeriksaanGinekologiRalan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PemeriksaanGinekologiRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemeriksaanGinekologiRanaps()
    {
        return $this->hasMany(PemeriksaanGinekologiRanap::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PemeriksaanObstetriRalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemeriksaanObstetriRalans()
    {
        return $this->hasMany(PemeriksaanObstetriRalan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PemeriksaanObstetriRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemeriksaanObstetriRanaps()
    {
        return $this->hasMany(PemeriksaanObstetriRanap::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PemeriksaanRalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemeriksaanRalans()
    {
        return $this->hasMany(PemeriksaanRalan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PemeriksaanRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemeriksaanRanaps()
    {
        return $this->hasMany(PemeriksaanRanap::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenatalaksanaanTerapiOkupasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenatalaksanaanTerapiOkupasi()
    {
        return $this->hasOne(PenatalaksanaanTerapiOkupasi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PengembalianDeposit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengembalianDeposit()
    {
        return $this->hasOne(PengembalianDeposit::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PengkajianRestrain]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengkajianRestrain()
    {
        return $this->hasOne(PengkajianRestrain::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenguranganBiayas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenguranganBiayas()
    {
        return $this->hasMany(PenguranganBiaya::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanGigi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanGigi()
    {
        return $this->hasOne(PenilaianAwalKeperawatanGigi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanIgd]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanIgd()
    {
        return $this->hasOne(PenilaianAwalKeperawatanIgd::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanKebidanan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanKebidanan()
    {
        return $this->hasOne(PenilaianAwalKeperawatanKebidanan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanKebidananRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanKebidananRanap()
    {
        return $this->hasOne(PenilaianAwalKeperawatanKebidananRanap::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanMata]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanMata()
    {
        return $this->hasOne(PenilaianAwalKeperawatanMata::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRalan()
    {
        return $this->hasOne(PenilaianAwalKeperawatanRalan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRalanBayi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRalanBayi()
    {
        return $this->hasOne(PenilaianAwalKeperawatanRalanBayi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRalanGeriatri]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRalanGeriatri()
    {
        return $this->hasOne(PenilaianAwalKeperawatanRalanGeriatri::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRalanPsikiatri]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRalanPsikiatri()
    {
        return $this->hasOne(PenilaianAwalKeperawatanRalanPsikiatri::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRanap()
    {
        return $this->hasOne(PenilaianAwalKeperawatanRanap::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRanapNeonatus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRanapNeonatus()
    {
        return $this->hasOne(PenilaianAwalKeperawatanRanapNeonatus::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianFisioterapi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianFisioterapi()
    {
        return $this->hasOne(PenilaianFisioterapi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianKorbanKekerasan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKorbanKekerasan()
    {
        return $this->hasOne(PenilaianKorbanKekerasan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianLanjutanResikoJatuhAnaks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianLanjutanResikoJatuhAnaks()
    {
        return $this->hasMany(PenilaianLanjutanResikoJatuhAnak::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianLanjutanResikoJatuhDewasas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianLanjutanResikoJatuhDewasas()
    {
        return $this->hasMany(PenilaianLanjutanResikoJatuhDewasa::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianLanjutanResikoJatuhPsikiatris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianLanjutanResikoJatuhPsikiatris()
    {
        return $this->hasMany(PenilaianLanjutanResikoJatuhPsikiatri::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianLanjutanSkriningFungsionals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianLanjutanSkriningFungsionals()
    {
        return $this->hasMany(PenilaianLanjutanSkriningFungsional::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianLevelKecemasanRanapAnaks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianLevelKecemasanRanapAnaks()
    {
        return $this->hasMany(PenilaianLevelKecemasanRanapAnak::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianMcu]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMcu()
    {
        return $this->hasOne(PenilaianMcu::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianMedisHemodialisa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisHemodialisa()
    {
        return $this->hasOne(PenilaianMedisHemodialisa::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianMedisIgd]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisIgd()
    {
        return $this->hasOne(PenilaianMedisIgd::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianMedisRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalan()
    {
        return $this->hasOne(PenilaianMedisRalan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanAnak]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanAnak()
    {
        return $this->hasOne(PenilaianMedisRalanAnak::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanBedah]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanBedah()
    {
        return $this->hasOne(PenilaianMedisRalanBedah::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanBedahMulut]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanBedahMulut()
    {
        return $this->hasOne(PenilaianMedisRalanBedahMulut::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanGawatDaruratPsikiatri]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanGawatDaruratPsikiatri()
    {
        return $this->hasOne(PenilaianMedisRalanGawatDaruratPsikiatri::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanGeriatri]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanGeriatri()
    {
        return $this->hasOne(PenilaianMedisRalanGeriatri::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanKandungan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanKandungan()
    {
        return $this->hasOne(PenilaianMedisRalanKandungan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanKulitdankelamin]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanKulitdankelamin()
    {
        return $this->hasOne(PenilaianMedisRalanKulitdankelamin::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanMata]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanMata()
    {
        return $this->hasOne(PenilaianMedisRalanMata::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanNeurologi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanNeurologi()
    {
        return $this->hasOne(PenilaianMedisRalanNeurologi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanOrthopedi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanOrthopedi()
    {
        return $this->hasOne(PenilaianMedisRalanOrthopedi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanParu]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanParu()
    {
        return $this->hasOne(PenilaianMedisRalanParu::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanPenyakitDalam]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanPenyakitDalam()
    {
        return $this->hasOne(PenilaianMedisRalanPenyakitDalam::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanPsikiatrik]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanPsikiatrik()
    {
        return $this->hasOne(PenilaianMedisRalanPsikiatrik::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanRehabMedik]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanRehabMedik()
    {
        return $this->hasOne(PenilaianMedisRalanRehabMedik::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanTht]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanTht()
    {
        return $this->hasOne(PenilaianMedisRalanTht::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianMedisRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRanap()
    {
        return $this->hasOne(PenilaianMedisRanap::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianMedisRanapKandungan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRanapKandungan()
    {
        return $this->hasOne(PenilaianMedisRanapKandungan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianPasienImunitasRendah]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPasienImunitasRendah()
    {
        return $this->hasOne(PenilaianPasienImunitasRendah::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianPasienKeracunan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPasienKeracunan()
    {
        return $this->hasOne(PenilaianPasienKeracunan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianPasienPenyakitMenular]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPasienPenyakitMenular()
    {
        return $this->hasOne(PenilaianPasienPenyakitMenular::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianPasienTerminal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPasienTerminal()
    {
        return $this->hasOne(PenilaianPasienTerminal::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianPreAnestesis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPreAnestesis()
    {
        return $this->hasMany(PenilaianPreAnestesi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianPreInduksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPreInduksis()
    {
        return $this->hasMany(PenilaianPreInduksi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianPreOperasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPreOperasis()
    {
        return $this->hasMany(PenilaianPreOperasi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianPsikologi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPsikologi()
    {
        return $this->hasOne(PenilaianPsikologi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianRisikoDekubituses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianRisikoDekubituses()
    {
        return $this->hasMany(PenilaianRisikoDekubitus::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianRisikoJatuhNeonatuses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianRisikoJatuhNeonatuses()
    {
        return $this->hasMany(PenilaianRisikoJatuhNeonatus::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianTambahanBeresikoMelarikanDiri]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianTambahanBeresikoMelarikanDiri()
    {
        return $this->hasOne(PenilaianTambahanBeresikoMelarikanDiri::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianTambahanBunuhDiri]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianTambahanBunuhDiri()
    {
        return $this->hasOne(PenilaianTambahanBunuhDiri::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianTambahanGeriatri]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianTambahanGeriatri()
    {
        return $this->hasOne(PenilaianTambahanGeriatri::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianTambahanPerilakuKekerasan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianTambahanPerilakuKekerasan()
    {
        return $this->hasOne(PenilaianTambahanPerilakuKekerasan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianTerapiWicara]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianTerapiWicara()
    {
        return $this->hasOne(PenilaianTerapiWicara::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PenilaianUlangNyeris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianUlangNyeris()
    {
        return $this->hasMany(PenilaianUlangNyeri::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PerawatanCorona]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerawatanCorona()
    {
        return $this->hasOne(PerawatanCorona::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PerencanaanPemulangan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerencanaanPemulangan()
    {
        return $this->hasOne(PerencanaanPemulangan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PeriksaLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeriksaLabs()
    {
        return $this->hasMany(PeriksaLab::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PeriksaRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeriksaRadiologis()
    {
        return $this->hasMany(PeriksaRadiologi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PerkiraanBiayaRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerkiraanBiayaRanap()
    {
        return $this->hasOne(PerkiraanBiayaRanap::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PermintaanLabmbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanLabmbs()
    {
        return $this->hasMany(PermintaanLabmb::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PermintaanLabpas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanLabpas()
    {
        return $this->hasMany(PermintaanLabpa::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PermintaanLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanLabs()
    {
        return $this->hasMany(PermintaanLab::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PermintaanObats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanObats()
    {
        return $this->hasMany(PermintaanObat::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PermintaanRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanRadiologis()
    {
        return $this->hasMany(PermintaanRadiologi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PermintaanRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanRanap()
    {
        return $this->hasOne(PermintaanRanap::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PermintaanRegistrasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanRegistrasi()
    {
        return $this->hasOne(PermintaanRegistrasi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PermintaanResepPulangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanResepPulangs()
    {
        return $this->hasMany(PermintaanResepPulang::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PermintaanStokObatPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanStokObatPasiens()
    {
        return $this->hasMany(PermintaanStokObatPasien::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PersetujuanPenolakanTindakans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersetujuanPenolakanTindakans()
    {
        return $this->hasMany(PersetujuanPenolakanTindakan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PersetujuanPenundaanPelayanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersetujuanPenundaanPelayanans()
    {
        return $this->hasMany(PersetujuanPenundaanPelayanan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[PiutangPasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPiutangPasien()
    {
        return $this->hasOne(PiutangPasien::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[ProsedurPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProsedurPasiens()
    {
        return $this->hasMany(ProsedurPasien::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[RanapGabungs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRanapGabungs()
    {
        return $this->hasMany(RanapGabung::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[RanapGabungs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRanapGabungs0()
    {
        return $this->hasMany(RanapGabung::class, ['no_rawat2' => 'no_rawat']);
    }

    /**
     * Gets query for [[RawatInapDrprs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatInapDrprs()
    {
        return $this->hasMany(RawatInapDrpr::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[RawatInapDrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatInapDrs()
    {
        return $this->hasMany(RawatInapDr::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[RawatInapPrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatInapPrs()
    {
        return $this->hasMany(RawatInapPr::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[RawatJlDrprs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatJlDrprs()
    {
        return $this->hasMany(RawatJlDrpr::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[RawatJlDrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatJlDrs()
    {
        return $this->hasMany(RawatJlDr::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[RawatJlPrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatJlPrs()
    {
        return $this->hasMany(RawatJlPr::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[ReferensiMobilejknBpjsTasks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReferensiMobilejknBpjsTasks()
    {
        return $this->hasMany(ReferensiMobilejknBpjsTaskid::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[RekonsiliasiObats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRekonsiliasiObats()
    {
        return $this->hasMany(RekonsiliasiObat::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[ResepLuars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResepLuars()
    {
        return $this->hasMany(ResepLuar::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[ResepObats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResepObats()
    {
        return $this->hasMany(ResepObat::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[ResepPulangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResepPulangs()
    {
        return $this->hasMany(ResepPulang::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[ResumePasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResumePasien()
    {
        return $this->hasOne(ResumePasien::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[ResumePasienRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResumePasienRanap()
    {
        return $this->hasOne(ResumePasienRanap::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[Returpasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturpasiens()
    {
        return $this->hasMany(Returpasien::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[RujukMasuk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRujukMasuk()
    {
        return $this->hasOne(RujukMasuk::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[RujukanInternalPolis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRujukanInternalPolis()
    {
        return $this->hasMany(RujukanInternalPoli::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[Rujuks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRujuks()
    {
        return $this->hasMany(Rujuk::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[RvpKlaimBpjs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRvpKlaimBpjs()
    {
        return $this->hasOne(RvpKlaimBpjs::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SaranKesanLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSaranKesanLabs()
    {
        return $this->hasMany(SaranKesanLab::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SatuSehatClinicalimpressions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatClinicalimpressions()
    {
        return $this->hasMany(SatuSehatClinicalimpression::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SatuSehatConditions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatConditions()
    {
        return $this->hasMany(SatuSehatCondition::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SatuSehatDiets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatDiets()
    {
        return $this->hasMany(SatuSehatDiet::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SatuSehatEncounter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatEncounter()
    {
        return $this->hasOne(SatuSehatEncounter::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SatuSehatImmunizations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatImmunizations()
    {
        return $this->hasMany(SatuSehatImmunization::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SatuSehatMedicationdispenses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMedicationdispenses()
    {
        return $this->hasMany(SatuSehatMedicationdispense::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SatuSehatObservationttvbbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatObservationttvbbs()
    {
        return $this->hasMany(SatuSehatObservationttvbb::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SatuSehatObservationttvgcs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatObservationttvgcs()
    {
        return $this->hasMany(SatuSehatObservationttvgcs::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SatuSehatObservationttvkesadarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatObservationttvkesadarans()
    {
        return $this->hasMany(SatuSehatObservationttvkesadaran::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SatuSehatObservationttvlps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatObservationttvlps()
    {
        return $this->hasMany(SatuSehatObservationttvlp::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SatuSehatObservationttvnadis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatObservationttvnadis()
    {
        return $this->hasMany(SatuSehatObservationttvnadi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SatuSehatObservationttvrespirasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatObservationttvrespirasis()
    {
        return $this->hasMany(SatuSehatObservationttvrespirasi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SatuSehatObservationttvspo2s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatObservationttvspo2s()
    {
        return $this->hasMany(SatuSehatObservationttvspo2::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SatuSehatObservationttvsuhus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatObservationttvsuhus()
    {
        return $this->hasMany(SatuSehatObservationttvsuhu::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SatuSehatObservationttvtbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatObservationttvtbs()
    {
        return $this->hasMany(SatuSehatObservationttvtb::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SatuSehatObservationttvtensis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatObservationttvtensis()
    {
        return $this->hasMany(SatuSehatObservationttvtensi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SatuSehatProcedures]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatProcedures()
    {
        return $this->hasMany(SatuSehatProcedure::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SigninSebelumAnestesis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSigninSebelumAnestesis()
    {
        return $this->hasMany(SigninSebelumAnestesi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SignoutSebelumMenutupLukas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSignoutSebelumMenutupLukas()
    {
        return $this->hasMany(SignoutSebelumMenutupLuka::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SisaDietPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSisaDietPasiens()
    {
        return $this->hasMany(SisaDietPasien::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SisruteRujukanKeluar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSisruteRujukanKeluar()
    {
        return $this->hasOne(SisruteRujukanKeluar::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SkorAldrettePascaAnestesis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkorAldrettePascaAnestesis()
    {
        return $this->hasMany(SkorAldrettePascaAnestesi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SkorBromagePascaAnestesis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkorBromagePascaAnestesis()
    {
        return $this->hasMany(SkorBromagePascaAnestesi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SkorStewardPascaAnestesis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkorStewardPascaAnestesis()
    {
        return $this->hasMany(SkorStewardPascaAnestesi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SkriningGizis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningGizis()
    {
        return $this->hasMany(SkriningGizi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SkriningKekerasanPadaPerempuan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningKekerasanPadaPerempuan()
    {
        return $this->hasOne(SkriningKekerasanPadaPerempuan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SkriningKesehatanGigiMulutRemaja]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningKesehatanGigiMulutRemaja()
    {
        return $this->hasOne(SkriningKesehatanGigiMulutRemaja::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SkriningNutrisiAnak]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningNutrisiAnak()
    {
        return $this->hasOne(SkriningNutrisiAnak::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SkriningNutrisiDewasa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningNutrisiDewasa()
    {
        return $this->hasOne(SkriningNutrisiDewasa::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SkriningNutrisiLansia]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningNutrisiLansia()
    {
        return $this->hasOne(SkriningNutrisiLansia::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SkriningObesitas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningObesitas()
    {
        return $this->hasOne(SkriningObesitas::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SkriningPerilakuMerokokSekolahRemaja]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningPerilakuMerokokSekolahRemaja()
    {
        return $this->hasOne(SkriningPerilakuMerokokSekolahRemaja::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SkriningRisikoKankerParu]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningRisikoKankerParu()
    {
        return $this->hasOne(SkriningRisikoKankerParu::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SkriningRisikoKankerPayudara]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningRisikoKankerPayudara()
    {
        return $this->hasOne(SkriningRisikoKankerPayudara::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SkriningTbc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningTbc()
    {
        return $this->hasOne(SkriningTbc::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[StokObatPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStokObatPasiens()
    {
        return $this->hasMany(StokObatPasien::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SuratBebasTatos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratBebasTatos()
    {
        return $this->hasMany(SuratBebasTato::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SuratBebasTbcs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratBebasTbcs()
    {
        return $this->hasMany(SuratBebasTbc::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SuratButaWarnas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratButaWarnas()
    {
        return $this->hasMany(SuratButaWarna::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SuratCutiHamil]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratCutiHamil()
    {
        return $this->hasOne(SuratCutiHamil::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SuratHamils]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratHamils()
    {
        return $this->hasMany(SuratHamil::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SuratKeteranganCovs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeteranganCovs()
    {
        return $this->hasMany(SuratKeteranganCovid::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SuratKeteranganRawatInaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeteranganRawatInaps()
    {
        return $this->hasMany(SuratKeteranganRawatInap::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SuratKeteranganSehats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeteranganSehats()
    {
        return $this->hasMany(SuratKeteranganSehat::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SuratKewaspadaanKesehatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKewaspadaanKesehatans()
    {
        return $this->hasMany(SuratKewaspadaanKesehatan::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SuratPenolakanAnjuranMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPenolakanAnjuranMedis()
    {
        return $this->hasMany(SuratPenolakanAnjuranMedis::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SuratPernyataanPasienUmums]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPernyataanPasienUmums()
    {
        return $this->hasMany(SuratPernyataanPasienUmum::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SuratPersetujuanRawatInaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPersetujuanRawatInaps()
    {
        return $this->hasMany(SuratPersetujuanRawatInap::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SuratPersetujuanUmums]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPersetujuanUmums()
    {
        return $this->hasMany(SuratPersetujuanUmum::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SuratPulangAtasPermintaanSendiris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPulangAtasPermintaanSendiris()
    {
        return $this->hasMany(SuratPulangAtasPermintaanSendiri::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[SuratSkbns]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratSkbns()
    {
        return $this->hasMany(SuratSkbn::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[Suratsakitpihak2s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratsakitpihak2s()
    {
        return $this->hasMany(Suratsakitpihak2::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[Suratsakits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratsakits()
    {
        return $this->hasMany(Suratsakit::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[TagihanObatLangsungs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTagihanObatLangsungs()
    {
        return $this->hasMany(TagihanObatLangsung::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[TambahanBiayas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTambahanBiayas()
    {
        return $this->hasMany(TambahanBiaya::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[TimeoutSebelumInsisis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTimeoutSebelumInsisis()
    {
        return $this->hasMany(TimeoutSebelumInsisi::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[TransferPasienAntarRuangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransferPasienAntarRuangs()
    {
        return $this->hasMany(TransferPasienAntarRuang::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[UbahPenjabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUbahPenjabs()
    {
        return $this->hasMany(UbahPenjab::class, ['no_rawat' => 'no_rawat']);
    }

    /**
     * Gets query for [[UjiFungsiKfr]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUjiFungsiKfr()
    {
        return $this->hasOne(UjiFungsiKfr::class, ['no_rawat' => 'no_rawat']);
    }
    public function getNamaTindakan(){
        $rawatJldr = RawatJlDr::find()->where(['kd_jenis_prw' => 'kd_jenis_prw'])->all();
        
        return $rawatJldr;
    }
}
