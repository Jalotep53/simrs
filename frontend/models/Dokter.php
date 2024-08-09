<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dokter".
 *
 * @property string $kd_dokter
 * @property string|null $nm_dokter
 * @property string|null $jk
 * @property string|null $tmp_lahir
 * @property string|null $tgl_lahir
 * @property string|null $gol_drh
 * @property string|null $agama
 * @property string|null $almt_tgl
 * @property string|null $no_telp
 * @property string|null $stts_nikah
 * @property string|null $kd_sps
 * @property string|null $alumni
 * @property string|null $no_ijn_praktek
 * @property string $status
 *
 * @property BayarJmDokter[] $bayarJmDokters
 * @property BookingOperasi[] $bookingOperasis
 * @property BookingRegistrasi[] $bookingRegistrasis
 * @property CatatanPerawatan[] $catatanPerawatans
 * @property CatatanPersalinan[] $catatanPersalinans
 * @property ChecklistPostOperasi[] $checklistPostOperasis
 * @property ChecklistPostOperasi[] $checklistPostOperasis0
 * @property ChecklistPreOperasi[] $checklistPreOperasis
 * @property ChecklistPreOperasi[] $checklistPreOperasis0
 * @property DpjpRanap[] $dpjpRanaps
 * @property HasilEndoskopiFaringLaring[] $hasilEndoskopiFaringLarings
 * @property HasilEndoskopiHidung[] $hasilEndoskopiHidungs
 * @property HasilEndoskopiTelinga[] $hasilEndoskopiTelingas
 * @property HasilPemeriksaanEkg[] $hasilPemeriksaanEkgs
 * @property HasilPemeriksaanUsgGynecologi[] $hasilPemeriksaanUsgGynecologis
 * @property HasilPemeriksaanUsgNeonatus[] $hasilPemeriksaanUsgNeonatuses
 * @property HasilPemeriksaanUsgUrologi[] $hasilPemeriksaanUsgUrologis
 * @property HasilPemeriksaanUsg[] $hasilPemeriksaanUsgs
 * @property HasilTindakanEswl[] $hasilTindakanEswls
 * @property Hemodialisa[] $hemodialisas
 * @property InhealthMapingDokter $inhealthMapingDokter
 * @property Jadwal[] $jadwals
 * @property Pegawai $kdDokter
 * @property Spesialis $kdSps
 * @property KonsultasiMedik[] $konsultasiMediks
 * @property KonsultasiMedik[] $konsultasiMediks0
 * @property LaporanAnestesi[] $laporanAnestesis
 * @property LaporanAnestesi[] $laporanAnestesis0
 * @property LaporanAnestesi[] $laporanAnestesis1
 * @property MapingDokterDpjpvclaim $mapingDokterDpjpvclaim
 * @property MapingDokterPcare $mapingDokterPcare
 * @property MppEvaluasi[] $mppEvaluasis
 * @property MppEvaluasi[] $mppEvaluasis0
 * @property RegPeriksa[] $noRawats
 * @property RegPeriksa[] $noRawats0
 * @property Operasi[] $operasis
 * @property Operasi[] $operasis0
 * @property Operasi[] $operasis1
 * @property Operasi[] $operasis2
 * @property Operasi[] $operasis3
 * @property Operasi[] $operasis4
 * @property Operasi[] $operasis5
 * @property PasienMati[] $pasienMatis
 * @property PenilaianAwalKeperawatanKebidananRanap[] $penilaianAwalKeperawatanKebidananRanaps
 * @property PenilaianAwalKeperawatanRanapNeonatus[] $penilaianAwalKeperawatanRanapNeonatuses
 * @property PenilaianAwalKeperawatanRanap[] $penilaianAwalKeperawatanRanaps
 * @property PenilaianMcu[] $penilaianMcus
 * @property PenilaianMedisHemodialisa[] $penilaianMedisHemodialisas
 * @property PenilaianMedisIgd[] $penilaianMedisIgds
 * @property PenilaianMedisRalanAnak[] $penilaianMedisRalanAnaks
 * @property PenilaianMedisRalanBedahMulut[] $penilaianMedisRalanBedahMuluts
 * @property PenilaianMedisRalanBedah[] $penilaianMedisRalanBedahs
 * @property PenilaianMedisRalanGawatDaruratPsikiatri[] $penilaianMedisRalanGawatDaruratPsikiatris
 * @property PenilaianMedisRalanGeriatri[] $penilaianMedisRalanGeriatris
 * @property PenilaianMedisRalanKandungan[] $penilaianMedisRalanKandungans
 * @property PenilaianMedisRalanKulitdankelamin[] $penilaianMedisRalanKulitdankelamins
 * @property PenilaianMedisRalanMata[] $penilaianMedisRalanMatas
 * @property PenilaianMedisRalanNeurologi[] $penilaianMedisRalanNeurologis
 * @property PenilaianMedisRalanOrthopedi[] $penilaianMedisRalanOrthopedis
 * @property PenilaianMedisRalanParu[] $penilaianMedisRalanParus
 * @property PenilaianMedisRalanPenyakitDalam[] $penilaianMedisRalanPenyakitDalams
 * @property PenilaianMedisRalanPsikiatrik[] $penilaianMedisRalanPsikiatriks
 * @property PenilaianMedisRalanRehabMedik[] $penilaianMedisRalanRehabMediks
 * @property PenilaianMedisRalanTht[] $penilaianMedisRalanThts
 * @property PenilaianMedisRalan[] $penilaianMedisRalans
 * @property PenilaianMedisRanapKandungan[] $penilaianMedisRanapKandungans
 * @property PenilaianMedisRanap[] $penilaianMedisRanaps
 * @property PenilaianPasienImunitasRendah[] $penilaianPasienImunitasRendahs
 * @property PenilaianPasienKeracunan[] $penilaianPasienKeracunans
 * @property PenilaianPasienPenyakitMenular[] $penilaianPasienPenyakitMenulars
 * @property PenilaianPreAnestesi[] $penilaianPreAnestesis
 * @property PenilaianPreInduksi[] $penilaianPreInduksis
 * @property PenilaianPreOperasi[] $penilaianPreOperasis
 * @property PeriksaLab[] $periksaLabs
 * @property PeriksaLab[] $periksaLabs0
 * @property PeriksaRadiologi[] $periksaRadiologis
 * @property PeriksaRadiologi[] $periksaRadiologis0
 * @property PermintaanLabmb[] $permintaanLabmbs
 * @property PermintaanLabpa[] $permintaanLabpas
 * @property PermintaanLab[] $permintaanLabs
 * @property PermintaanRadiologi[] $permintaanRadiologis
 * @property PermintaanResepPulang[] $permintaanResepPulangs
 * @property PermintaanStokObatPasien[] $permintaanStokObatPasiens
 * @property PersetujuanPenolakanTindakan[] $persetujuanPenolakanTindakans
 * @property PersetujuanPenundaanPelayanan[] $persetujuanPenundaanPelayanans
 * @property RawatInapDrpr[] $rawatInapDrprs
 * @property RawatInapDr[] $rawatInapDrs
 * @property RawatJlDrpr[] $rawatJlDrprs
 * @property RawatJlDr[] $rawatJlDrs
 * @property RegPeriksa[] $regPeriksas
 * @property ResepLuar[] $resepLuars
 * @property ResepObat[] $resepObats
 * @property ResumePasienRanap[] $resumePasienRanaps
 * @property ResumePasien[] $resumePasiens
 * @property RujukanInternalPoli[] $rujukanInternalPolis
 * @property RujukanranapDokterRs[] $rujukanranapDokterRs
 * @property Rujuk[] $rujuks
 * @property SetOtomatisTindakanRalanDokterpetugas[] $setOtomatisTindakanRalanDokterpetugas
 * @property SetOtomatisTindakanRalan[] $setOtomatisTindakanRalans
 * @property SetPjlab[] $setPjlabs
 * @property SetPjlab[] $setPjlabs0
 * @property SetPjlab[] $setPjlabs1
 * @property SetPjlab[] $setPjlabs2
 * @property SetPjlab[] $setPjlabs3
 * @property SetPjlab[] $setPjlabs4
 * @property SigninSebelumAnestesi[] $signinSebelumAnestesis
 * @property SigninSebelumAnestesi[] $signinSebelumAnestesis0
 * @property SignoutSebelumMenutupLuka[] $signoutSebelumMenutupLukas
 * @property SignoutSebelumMenutupLuka[] $signoutSebelumMenutupLukas0
 * @property SkdpBpjs[] $skdpBpjs
 * @property SkorAldrettePascaAnestesi[] $skorAldrettePascaAnestesis
 * @property SkorBromagePascaAnestesi[] $skorBromagePascaAnestesis
 * @property SkorStewardPascaAnestesi[] $skorStewardPascaAnestesis
 * @property SuratBebasTbc[] $suratBebasTbcs
 * @property SuratKeteranganCovid[] $suratKeteranganCovs
 * @property SuratSkbn[] $suratSkbns
 * @property TemplatePemeriksaanDokter[] $templatePemeriksaanDokters
 * @property TimeoutSebelumInsisi[] $timeoutSebelumInsisis
 * @property TimeoutSebelumInsisi[] $timeoutSebelumInsisis0
 * @property UjiFungsiKfr[] $ujiFungsiKfrs
 */
class Dokter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dokter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_dokter', 'status'], 'required'],
            [['jk', 'gol_drh', 'stts_nikah', 'status'], 'string'],
            [['tgl_lahir'], 'safe'],
            [['kd_dokter', 'tmp_lahir'], 'string', 'max' => 20],
            [['nm_dokter'], 'string', 'max' => 50],
            [['agama'], 'string', 'max' => 12],
            [['almt_tgl', 'alumni'], 'string', 'max' => 60],
            [['no_telp'], 'string', 'max' => 13],
            [['kd_sps'], 'string', 'max' => 5],
            [['no_ijn_praktek'], 'string', 'max' => 120],
            [['kd_dokter'], 'unique'],
            [['kd_sps'], 'exist', 'skipOnError' => true, 'targetClass' => Spesialis::class, 'targetAttribute' => ['kd_sps' => 'kd_sps']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['kd_dokter' => 'nik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_dokter' => 'Kd Dokter',
            'nm_dokter' => 'Nm Dokter',
            'jk' => 'Jk',
            'tmp_lahir' => 'Tmp Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'gol_drh' => 'Gol Drh',
            'agama' => 'Agama',
            'almt_tgl' => 'Almt Tgl',
            'no_telp' => 'No Telp',
            'stts_nikah' => 'Stts Nikah',
            'kd_sps' => 'Kd Sps',
            'alumni' => 'Alumni',
            'no_ijn_praktek' => 'No Ijn Praktek',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[BayarJmDokters]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarJmDokters()
    {
        return $this->hasMany(BayarJmDokter::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[BookingOperasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookingOperasis()
    {
        return $this->hasMany(BookingOperasi::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[BookingRegistrasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookingRegistrasis()
    {
        return $this->hasMany(BookingRegistrasi::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[CatatanPerawatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanPerawatans()
    {
        return $this->hasMany(CatatanPerawatan::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[CatatanPersalinans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanPersalinans()
    {
        return $this->hasMany(CatatanPersalinan::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[ChecklistPostOperasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChecklistPostOperasis()
    {
        return $this->hasMany(ChecklistPostOperasi::class, ['kd_dokter_anestesi' => 'kd_dokter']);
    }

    /**
     * Gets query for [[ChecklistPostOperasis0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChecklistPostOperasis0()
    {
        return $this->hasMany(ChecklistPostOperasi::class, ['kd_dokter_bedah' => 'kd_dokter']);
    }

    /**
     * Gets query for [[ChecklistPreOperasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChecklistPreOperasis()
    {
        return $this->hasMany(ChecklistPreOperasi::class, ['kd_dokter_anestesi' => 'kd_dokter']);
    }

    /**
     * Gets query for [[ChecklistPreOperasis0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChecklistPreOperasis0()
    {
        return $this->hasMany(ChecklistPreOperasi::class, ['kd_dokter_bedah' => 'kd_dokter']);
    }

    /**
     * Gets query for [[DpjpRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDpjpRanaps()
    {
        return $this->hasMany(DpjpRanap::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[HasilEndoskopiFaringLarings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilEndoskopiFaringLarings()
    {
        return $this->hasMany(HasilEndoskopiFaringLaring::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[HasilEndoskopiHidungs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilEndoskopiHidungs()
    {
        return $this->hasMany(HasilEndoskopiHidung::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[HasilEndoskopiTelingas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilEndoskopiTelingas()
    {
        return $this->hasMany(HasilEndoskopiTelinga::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[HasilPemeriksaanEkgs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilPemeriksaanEkgs()
    {
        return $this->hasMany(HasilPemeriksaanEkg::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[HasilPemeriksaanUsgGynecologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilPemeriksaanUsgGynecologis()
    {
        return $this->hasMany(HasilPemeriksaanUsgGynecologi::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[HasilPemeriksaanUsgNeonatuses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilPemeriksaanUsgNeonatuses()
    {
        return $this->hasMany(HasilPemeriksaanUsgNeonatus::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[HasilPemeriksaanUsgUrologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilPemeriksaanUsgUrologis()
    {
        return $this->hasMany(HasilPemeriksaanUsgUrologi::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[HasilPemeriksaanUsgs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilPemeriksaanUsgs()
    {
        return $this->hasMany(HasilPemeriksaanUsg::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[HasilTindakanEswls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilTindakanEswls()
    {
        return $this->hasMany(HasilTindakanEswl::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[Hemodialisas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHemodialisas()
    {
        return $this->hasMany(Hemodialisa::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[InhealthMapingDokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInhealthMapingDokter()
    {
        return $this->hasOne(InhealthMapingDokter::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[Jadwals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJadwals()
    {
        return $this->hasMany(Jadwal::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[KdDokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokter()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'kd_dokter']);
    }

    /**
     * Gets query for [[KdSps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdSps()
    {
        return $this->hasOne(Spesialis::class, ['kd_sps' => 'kd_sps']);
    }

    /**
     * Gets query for [[KonsultasiMediks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKonsultasiMediks()
    {
        return $this->hasMany(KonsultasiMedik::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[KonsultasiMediks0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKonsultasiMediks0()
    {
        return $this->hasMany(KonsultasiMedik::class, ['kd_dokter_dikonsuli' => 'kd_dokter']);
    }

    /**
     * Gets query for [[LaporanAnestesis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporanAnestesis()
    {
        return $this->hasMany(LaporanAnestesi::class, ['operator1' => 'kd_dokter']);
    }

    /**
     * Gets query for [[LaporanAnestesis0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporanAnestesis0()
    {
        return $this->hasMany(LaporanAnestesi::class, ['operator2' => 'kd_dokter']);
    }

    /**
     * Gets query for [[LaporanAnestesis1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporanAnestesis1()
    {
        return $this->hasMany(LaporanAnestesi::class, ['dokter_anestesi' => 'kd_dokter']);
    }

    /**
     * Gets query for [[MapingDokterDpjpvclaim]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMapingDokterDpjpvclaim()
    {
        return $this->hasOne(MapingDokterDpjpvclaim::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[MapingDokterPcare]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMapingDokterPcare()
    {
        return $this->hasOne(MapingDokterPcare::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[MppEvaluasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMppEvaluasis()
    {
        return $this->hasMany(MppEvaluasi::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[MppEvaluasis0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMppEvaluasis0()
    {
        return $this->hasMany(MppEvaluasi::class, ['kd_konsulan' => 'kd_dokter']);
    }

    /**
     * Gets query for [[NoRawats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawats()
    {
        return $this->hasMany(RegPeriksa::class, ['no_rawat' => 'no_rawat'])->viaTable('dpjp_ranap', ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[NoRawats0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawats0()
    {
        return $this->hasMany(RegPeriksa::class, ['no_rawat' => 'no_rawat'])->viaTable('rujukan_internal_poli', ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[Operasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis()
    {
        return $this->hasMany(Operasi::class, ['operator1' => 'kd_dokter']);
    }

    /**
     * Gets query for [[Operasis0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis0()
    {
        return $this->hasMany(Operasi::class, ['operator2' => 'kd_dokter']);
    }

    /**
     * Gets query for [[Operasis1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis1()
    {
        return $this->hasMany(Operasi::class, ['operator3' => 'kd_dokter']);
    }

    /**
     * Gets query for [[Operasis2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis2()
    {
        return $this->hasMany(Operasi::class, ['dokter_anak' => 'kd_dokter']);
    }

    /**
     * Gets query for [[Operasis3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis3()
    {
        return $this->hasMany(Operasi::class, ['dokter_anestesi' => 'kd_dokter']);
    }

    /**
     * Gets query for [[Operasis4]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis4()
    {
        return $this->hasMany(Operasi::class, ['dokter_pjanak' => 'kd_dokter']);
    }

    /**
     * Gets query for [[Operasis5]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis5()
    {
        return $this->hasMany(Operasi::class, ['dokter_umum' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PasienMatis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasienMatis()
    {
        return $this->hasMany(PasienMati::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanKebidananRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanKebidananRanaps()
    {
        return $this->hasMany(PenilaianAwalKeperawatanKebidananRanap::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRanapNeonatuses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRanapNeonatuses()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRanapNeonatus::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRanaps()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRanap::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianMcus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMcus()
    {
        return $this->hasMany(PenilaianMcu::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianMedisHemodialisas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisHemodialisas()
    {
        return $this->hasMany(PenilaianMedisHemodialisa::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianMedisIgds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisIgds()
    {
        return $this->hasMany(PenilaianMedisIgd::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanAnaks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanAnaks()
    {
        return $this->hasMany(PenilaianMedisRalanAnak::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanBedahMuluts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanBedahMuluts()
    {
        return $this->hasMany(PenilaianMedisRalanBedahMulut::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanBedahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanBedahs()
    {
        return $this->hasMany(PenilaianMedisRalanBedah::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanGawatDaruratPsikiatris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanGawatDaruratPsikiatris()
    {
        return $this->hasMany(PenilaianMedisRalanGawatDaruratPsikiatri::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanGeriatris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanGeriatris()
    {
        return $this->hasMany(PenilaianMedisRalanGeriatri::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanKandungans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanKandungans()
    {
        return $this->hasMany(PenilaianMedisRalanKandungan::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanKulitdankelamins]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanKulitdankelamins()
    {
        return $this->hasMany(PenilaianMedisRalanKulitdankelamin::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanMatas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanMatas()
    {
        return $this->hasMany(PenilaianMedisRalanMata::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanNeurologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanNeurologis()
    {
        return $this->hasMany(PenilaianMedisRalanNeurologi::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanOrthopedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanOrthopedis()
    {
        return $this->hasMany(PenilaianMedisRalanOrthopedi::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanParus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanParus()
    {
        return $this->hasMany(PenilaianMedisRalanParu::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanPenyakitDalams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanPenyakitDalams()
    {
        return $this->hasMany(PenilaianMedisRalanPenyakitDalam::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanPsikiatriks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanPsikiatriks()
    {
        return $this->hasMany(PenilaianMedisRalanPsikiatrik::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanRehabMediks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanRehabMediks()
    {
        return $this->hasMany(PenilaianMedisRalanRehabMedik::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianMedisRalanThts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalanThts()
    {
        return $this->hasMany(PenilaianMedisRalanTht::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianMedisRalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRalans()
    {
        return $this->hasMany(PenilaianMedisRalan::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianMedisRanapKandungans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRanapKandungans()
    {
        return $this->hasMany(PenilaianMedisRanapKandungan::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianMedisRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianMedisRanaps()
    {
        return $this->hasMany(PenilaianMedisRanap::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianPasienImunitasRendahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPasienImunitasRendahs()
    {
        return $this->hasMany(PenilaianPasienImunitasRendah::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianPasienKeracunans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPasienKeracunans()
    {
        return $this->hasMany(PenilaianPasienKeracunan::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianPasienPenyakitMenulars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPasienPenyakitMenulars()
    {
        return $this->hasMany(PenilaianPasienPenyakitMenular::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianPreAnestesis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPreAnestesis()
    {
        return $this->hasMany(PenilaianPreAnestesi::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianPreInduksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPreInduksis()
    {
        return $this->hasMany(PenilaianPreInduksi::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PenilaianPreOperasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPreOperasis()
    {
        return $this->hasMany(PenilaianPreOperasi::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PeriksaLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeriksaLabs()
    {
        return $this->hasMany(PeriksaLab::class, ['dokter_perujuk' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PeriksaLabs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeriksaLabs0()
    {
        return $this->hasMany(PeriksaLab::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PeriksaRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeriksaRadiologis()
    {
        return $this->hasMany(PeriksaRadiologi::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PeriksaRadiologis0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeriksaRadiologis0()
    {
        return $this->hasMany(PeriksaRadiologi::class, ['dokter_perujuk' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PermintaanLabmbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanLabmbs()
    {
        return $this->hasMany(PermintaanLabmb::class, ['dokter_perujuk' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PermintaanLabpas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanLabpas()
    {
        return $this->hasMany(PermintaanLabpa::class, ['dokter_perujuk' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PermintaanLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanLabs()
    {
        return $this->hasMany(PermintaanLab::class, ['dokter_perujuk' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PermintaanRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanRadiologis()
    {
        return $this->hasMany(PermintaanRadiologi::class, ['dokter_perujuk' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PermintaanResepPulangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanResepPulangs()
    {
        return $this->hasMany(PermintaanResepPulang::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PermintaanStokObatPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanStokObatPasiens()
    {
        return $this->hasMany(PermintaanStokObatPasien::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PersetujuanPenolakanTindakans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersetujuanPenolakanTindakans()
    {
        return $this->hasMany(PersetujuanPenolakanTindakan::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[PersetujuanPenundaanPelayanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersetujuanPenundaanPelayanans()
    {
        return $this->hasMany(PersetujuanPenundaanPelayanan::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[RawatInapDrprs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatInapDrprs()
    {
        return $this->hasMany(RawatInapDrpr::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[RawatInapDrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatInapDrs()
    {
        return $this->hasMany(RawatInapDr::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[RawatJlDrprs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatJlDrprs()
    {
        return $this->hasMany(RawatJlDrpr::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[RawatJlDrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatJlDrs()
    {
        return $this->hasMany(RawatJlDr::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[RegPeriksas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegPeriksas()
    {
        return $this->hasMany(RegPeriksa::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[ResepLuars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResepLuars()
    {
        return $this->hasMany(ResepLuar::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[ResepObats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResepObats()
    {
        return $this->hasMany(ResepObat::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[ResumePasienRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResumePasienRanaps()
    {
        return $this->hasMany(ResumePasienRanap::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[ResumePasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResumePasiens()
    {
        return $this->hasMany(ResumePasien::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[RujukanInternalPolis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRujukanInternalPolis()
    {
        return $this->hasMany(RujukanInternalPoli::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[RujukanranapDokterRs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRujukanranapDokterRs()
    {
        return $this->hasMany(RujukanranapDokterRs::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[Rujuks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRujuks()
    {
        return $this->hasMany(Rujuk::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[SetOtomatisTindakanRalanDokterpetugas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetOtomatisTindakanRalanDokterpetugas()
    {
        return $this->hasMany(SetOtomatisTindakanRalanDokterpetugas::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[SetOtomatisTindakanRalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetOtomatisTindakanRalans()
    {
        return $this->hasMany(SetOtomatisTindakanRalan::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[SetPjlabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetPjlabs()
    {
        return $this->hasMany(SetPjlab::class, ['kd_dokterlab' => 'kd_dokter']);
    }

    /**
     * Gets query for [[SetPjlabs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetPjlabs0()
    {
        return $this->hasMany(SetPjlab::class, ['kd_dokterrad' => 'kd_dokter']);
    }

    /**
     * Gets query for [[SetPjlabs1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetPjlabs1()
    {
        return $this->hasMany(SetPjlab::class, ['kd_dokterhemodialisa' => 'kd_dokter']);
    }

    /**
     * Gets query for [[SetPjlabs2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetPjlabs2()
    {
        return $this->hasMany(SetPjlab::class, ['kd_dokterutd' => 'kd_dokter']);
    }

    /**
     * Gets query for [[SetPjlabs3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetPjlabs3()
    {
        return $this->hasMany(SetPjlab::class, ['kd_dokterlabpa' => 'kd_dokter']);
    }

    /**
     * Gets query for [[SetPjlabs4]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetPjlabs4()
    {
        return $this->hasMany(SetPjlab::class, ['kd_dokterlabmb' => 'kd_dokter']);
    }

    /**
     * Gets query for [[SigninSebelumAnestesis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSigninSebelumAnestesis()
    {
        return $this->hasMany(SigninSebelumAnestesi::class, ['kd_dokter_anestesi' => 'kd_dokter']);
    }

    /**
     * Gets query for [[SigninSebelumAnestesis0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSigninSebelumAnestesis0()
    {
        return $this->hasMany(SigninSebelumAnestesi::class, ['kd_dokter_bedah' => 'kd_dokter']);
    }

    /**
     * Gets query for [[SignoutSebelumMenutupLukas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSignoutSebelumMenutupLukas()
    {
        return $this->hasMany(SignoutSebelumMenutupLuka::class, ['kd_dokter_anestesi' => 'kd_dokter']);
    }

    /**
     * Gets query for [[SignoutSebelumMenutupLukas0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSignoutSebelumMenutupLukas0()
    {
        return $this->hasMany(SignoutSebelumMenutupLuka::class, ['kd_dokter_bedah' => 'kd_dokter']);
    }

    /**
     * Gets query for [[SkdpBpjs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkdpBpjs()
    {
        return $this->hasMany(SkdpBpjs::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[SkorAldrettePascaAnestesis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkorAldrettePascaAnestesis()
    {
        return $this->hasMany(SkorAldrettePascaAnestesi::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[SkorBromagePascaAnestesis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkorBromagePascaAnestesis()
    {
        return $this->hasMany(SkorBromagePascaAnestesi::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[SkorStewardPascaAnestesis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkorStewardPascaAnestesis()
    {
        return $this->hasMany(SkorStewardPascaAnestesi::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[SuratBebasTbcs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratBebasTbcs()
    {
        return $this->hasMany(SuratBebasTbc::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[SuratKeteranganCovs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeteranganCovs()
    {
        return $this->hasMany(SuratKeteranganCovid::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[SuratSkbns]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratSkbns()
    {
        return $this->hasMany(SuratSkbn::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[TemplatePemeriksaanDokters]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplatePemeriksaanDokters()
    {
        return $this->hasMany(TemplatePemeriksaanDokter::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[TimeoutSebelumInsisis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTimeoutSebelumInsisis()
    {
        return $this->hasMany(TimeoutSebelumInsisi::class, ['kd_dokter_anestesi' => 'kd_dokter']);
    }

    /**
     * Gets query for [[TimeoutSebelumInsisis0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTimeoutSebelumInsisis0()
    {
        return $this->hasMany(TimeoutSebelumInsisi::class, ['kd_dokter_bedah' => 'kd_dokter']);
    }

    /**
     * Gets query for [[UjiFungsiKfrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUjiFungsiKfrs()
    {
        return $this->hasMany(UjiFungsiKfr::class, ['kd_dokter' => 'kd_dokter']);
    }
}
