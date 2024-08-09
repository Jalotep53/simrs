<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id
 * @property string $nik
 * @property string $nama
 * @property string $jk
 * @property string $jbtn
 * @property string $jnj_jabatan
 * @property string $kode_kelompok
 * @property string $kode_resiko
 * @property string $kode_emergency
 * @property string $departemen
 * @property string $bidang
 * @property string $stts_wp
 * @property string $stts_kerja
 * @property string $npwp
 * @property string $pendidikan
 * @property float $gapok
 * @property string $tmp_lahir
 * @property string $tgl_lahir
 * @property string $alamat
 * @property string $kota
 * @property string $mulai_kerja
 * @property string $ms_kerja
 * @property string $indexins
 * @property string $bpd
 * @property string $rekening
 * @property string $stts_aktif
 * @property int $wajibmasuk
 * @property float $pengurang
 * @property int $indek
 * @property string|null $mulai_kontrak
 * @property int $cuti_diambil
 * @property float $dankes
 * @property string|null $photo
 * @property string $no_ktp
 *
 * @property AmbilDankes[] $ambilDankes
 * @property AngsuranKoperasi[] $angsuranKoperasis
 * @property AuditBundleIadp[] $auditBundleIadps
 * @property AuditCuciTanganMedis[] $auditCuciTanganMedis
 * @property AuditKepatuhanApd[] $auditKepatuhanApds
 * @property Barcode $barcode
 * @property BerkasPegawai[] $berkasPegawais
 * @property Bidang $bidang0
 * @property Bank $bpd0
 * @property ChecklistKriteriaKeluarHcu[] $checklistKriteriaKeluarHcus
 * @property ChecklistKriteriaKeluarIcu[] $checklistKriteriaKeluarIcus
 * @property ChecklistKriteriaMasukHcu[] $checklistKriteriaMasukHcus
 * @property ChecklistKriteriaMasukIcu[] $checklistKriteriaMasukIcus
 * @property DataTriaseIgdprimer[] $dataTriaseIgdprimers
 * @property DataTriaseIgdsekunder[] $dataTriaseIgdsekunders
 * @property Departemen $departemen0
 * @property Dokter $dokter
 * @property EvaluasiKinerjaPegawai[] $evaluasiKinerjaPegawais
 * @property InacbgCoderNik $inacbgCoderNik
 * @property Departemen $indexins0
 * @property JadwalPegawai[] $jadwalPegawais
 * @property JadwalTambahan[] $jadwalTambahans
 * @property JasaLain[] $jasaLains
 * @property Jgmlm[] $jgmlms
 * @property JnjJabatan $jnjJabatan
 * @property Jumpasien[] $jumpasiens
 * @property K3rsPeristiwa[] $k3rsPeristiwas
 * @property K3rsPeristiwa[] $k3rsPeristiwas0
 * @property K3rsPeristiwa[] $k3rsPeristiwas1
 * @property Kasift $kasift
 * @property Keanggotaan $keanggotaan
 * @property Ketidakhadiran[] $ketidakhadirans
 * @property EmergencyIndex $kodeEmergency
 * @property KelompokJabatan $kodeKelompok
 * @property ResikoKerja $kodeResiko
 * @property MppEvaluasiCatatan[] $mppEvaluasiCatatans
 * @property MppEvaluasi[] $mppEvaluasis
 * @property MppSkrining[] $mppSkrinings
 * @property PasienBayi[] $pasienBayis
 * @property PembagianAkte $pembagianAkte
 * @property PembagianResume $pembagianResume
 * @property PembagianTuslah $pembagianTuslah
 * @property PembagianWarung $pembagianWarung
 * @property PemeriksaanRalan[] $pemeriksaanRalans
 * @property PemeriksaanRanap[] $pemeriksaanRanaps
 * @property PeminjamanKoperasi[] $peminjamanKoperasis
 * @property PenagihanPiutang[] $penagihanPiutangs
 * @property PenagihanPiutang[] $penagihanPiutangs0
 * @property PencapaianKinerjaPegawai[] $pencapaianKinerjaPegawais
 * @property Pendidikan $pendidikan0
 * @property PengajuanBarangMedis[] $pengajuanBarangMedis
 * @property PengajuanBarangNonmedis[] $pengajuanBarangNonmedis
 * @property PengajuanBiaya[] $pengajuanBiayas
 * @property PengajuanBiaya[] $pengajuanBiayas0
 * @property PengajuanCuti[] $pengajuanCutis
 * @property PengajuanCuti[] $pengajuanCutis0
 * @property PengajuanInventaris[] $pengajuanInventaris
 * @property PengajuanInventaris[] $pengajuanInventaris0
 * @property PengumumanEpasien[] $pengumumanEpasiens
 * @property PenilaianFisioterapi[] $penilaianFisioterapis
 * @property PenilaianKorbanKekerasan[] $penilaianKorbanKekerasans
 * @property PenilaianTambahanGeriatri[] $penilaianTambahanGeriatris
 * @property PermintaanDapur[] $permintaanDapurs
 * @property PermintaanMedis[] $permintaanMedis
 * @property PermintaanNonMedis[] $permintaanNonMedis
 * @property PermintaanPerbaikanInventaris[] $permintaanPerbaikanInventaris
 * @property Petugas $petugas
 * @property PnmTnjBulanan[] $pnmTnjBulanans
 * @property PnmTnjHarian[] $pnmTnjHarians
 * @property Potongan[] $potongans
 * @property Presensi[] $presensis
 * @property Rawatjalan[] $rawatjalans
 * @property RekapPresensi[] $rekapPresensis
 * @property RiwayatJabatan[] $riwayatJabatans
 * @property RiwayatNaikGaji[] $riwayatNaikGajis
 * @property RiwayatPendidikan[] $riwayatPendidikans
 * @property RiwayatPenelitian[] $riwayatPenelitians
 * @property RiwayatPenghargaan[] $riwayatPenghargaans
 * @property RiwayatSeminar[] $riwayatSeminars
 * @property Sidikjari $sidikjari
 * @property SkpPenilaian[] $skpPenilaians
 * @property SkpPenilaian[] $skpPenilaians0
 * @property SkpRekapitulasiPenilaian[] $skpRekapitulasiPenilaians
 * @property SkpRekapitulasiPenilaian[] $skpRekapitulasiPenilaians0
 * @property SttsKerja $sttsKerja
 * @property SttsWp $sttsWp
 * @property SuratPemesananMedis[] $suratPemesananMedis
 * @property SuratPemesananNonMedis[] $suratPemesananNonMedis
 * @property SuratPenolakanAnjuranMedis[] $suratPenolakanAnjuranMedis
 * @property Tambahjaga[] $tambahjagas
 * @property TemporaryPresensi $temporaryPresensi
 * @property Tindakan[] $tindakans
 * @property MasterTunjanganBulanan[] $tnjs
 * @property MasterTunjanganHarian[] $tnjs0
 * @property TokoPengajuanBarang[] $tokoPengajuanBarangs
 * @property TokoSuratPemesanan[] $tokoSuratPemesanans
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nik', 'nama', 'jk', 'jbtn', 'jnj_jabatan', 'kode_kelompok', 'kode_resiko', 'kode_emergency', 'departemen', 'bidang', 'stts_wp', 'stts_kerja', 'npwp', 'pendidikan', 'gapok', 'tmp_lahir', 'tgl_lahir', 'alamat', 'kota', 'mulai_kerja', 'ms_kerja', 'indexins', 'bpd', 'rekening', 'stts_aktif', 'wajibmasuk', 'pengurang', 'indek', 'cuti_diambil', 'dankes', 'no_ktp'], 'required'],
            [['jk', 'ms_kerja', 'stts_aktif'], 'string'],
            [['gapok', 'pengurang', 'dankes'], 'number'],
            [['tgl_lahir', 'mulai_kerja', 'mulai_kontrak'], 'safe'],
            [['wajibmasuk', 'indek', 'cuti_diambil'], 'integer'],
            [['nik', 'tmp_lahir', 'kota', 'no_ktp'], 'string', 'max' => 20],
            [['nama', 'bpd'], 'string', 'max' => 50],
            [['jbtn', 'rekening'], 'string', 'max' => 25],
            [['jnj_jabatan', 'stts_wp'], 'string', 'max' => 5],
            [['kode_kelompok', 'kode_resiko', 'kode_emergency', 'stts_kerja'], 'string', 'max' => 3],
            [['departemen', 'indexins'], 'string', 'max' => 4],
            [['bidang', 'npwp'], 'string', 'max' => 15],
            [['pendidikan'], 'string', 'max' => 80],
            [['alamat'], 'string', 'max' => 60],
            [['photo'], 'string', 'max' => 500],
            [['nik'], 'unique'],
            [['jnj_jabatan'], 'exist', 'skipOnError' => true, 'targetClass' => JnjJabatan::class, 'targetAttribute' => ['jnj_jabatan' => 'kode']],
            [['kode_kelompok'], 'exist', 'skipOnError' => true, 'targetClass' => KelompokJabatan::class, 'targetAttribute' => ['kode_kelompok' => 'kode_kelompok']],
            [['kode_resiko'], 'exist', 'skipOnError' => true, 'targetClass' => ResikoKerja::class, 'targetAttribute' => ['kode_resiko' => 'kode_resiko']],
            [['departemen'], 'exist', 'skipOnError' => true, 'targetClass' => Departemen::class, 'targetAttribute' => ['departemen' => 'dep_id']],
            [['bidang'], 'exist', 'skipOnError' => true, 'targetClass' => Bidang::class, 'targetAttribute' => ['bidang' => 'nama']],
            [['stts_wp'], 'exist', 'skipOnError' => true, 'targetClass' => SttsWp::class, 'targetAttribute' => ['stts_wp' => 'stts']],
            [['stts_kerja'], 'exist', 'skipOnError' => true, 'targetClass' => SttsKerja::class, 'targetAttribute' => ['stts_kerja' => 'stts']],
            [['pendidikan'], 'exist', 'skipOnError' => true, 'targetClass' => Pendidikan::class, 'targetAttribute' => ['pendidikan' => 'tingkat']],
            [['indexins'], 'exist', 'skipOnError' => true, 'targetClass' => Departemen::class, 'targetAttribute' => ['indexins' => 'dep_id']],
            [['bpd'], 'exist', 'skipOnError' => true, 'targetClass' => Bank::class, 'targetAttribute' => ['bpd' => 'namabank']],
            [['kode_emergency'], 'exist', 'skipOnError' => true, 'targetClass' => EmergencyIndex::class, 'targetAttribute' => ['kode_emergency' => 'kode_emergency']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nik' => 'Nik',
            'nama' => 'Nama',
            'jk' => 'Jk',
            'jbtn' => 'Jbtn',
            'jnj_jabatan' => 'Jnj Jabatan',
            'kode_kelompok' => 'Kode Kelompok',
            'kode_resiko' => 'Kode Resiko',
            'kode_emergency' => 'Kode Emergency',
            'departemen' => 'Departemen',
            'bidang' => 'Bidang',
            'stts_wp' => 'Stts Wp',
            'stts_kerja' => 'Stts Kerja',
            'npwp' => 'Npwp',
            'pendidikan' => 'Pendidikan',
            'gapok' => 'Gapok',
            'tmp_lahir' => 'Tmp Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'alamat' => 'Alamat',
            'kota' => 'Kota',
            'mulai_kerja' => 'Mulai Kerja',
            'ms_kerja' => 'Ms Kerja',
            'indexins' => 'Indexins',
            'bpd' => 'Bpd',
            'rekening' => 'Rekening',
            'stts_aktif' => 'Stts Aktif',
            'wajibmasuk' => 'Wajibmasuk',
            'pengurang' => 'Pengurang',
            'indek' => 'Indek',
            'mulai_kontrak' => 'Mulai Kontrak',
            'cuti_diambil' => 'Cuti Diambil',
            'dankes' => 'Dankes',
            'photo' => 'Photo',
            'no_ktp' => 'No Ktp',
        ];
    }

    /**
     * Gets query for [[AmbilDankes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAmbilDankes()
    {
        return $this->hasMany(AmbilDankes::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[AngsuranKoperasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAngsuranKoperasis()
    {
        return $this->hasMany(AngsuranKoperasi::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[AuditBundleIadps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditBundleIadps()
    {
        return $this->hasMany(AuditBundleIadp::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[AuditCuciTanganMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditCuciTanganMedis()
    {
        return $this->hasMany(AuditCuciTanganMedis::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[AuditKepatuhanApds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuditKepatuhanApds()
    {
        return $this->hasMany(AuditKepatuhanApd::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[Barcode]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarcode()
    {
        return $this->hasOne(Barcode::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[BerkasPegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBerkasPegawais()
    {
        return $this->hasMany(BerkasPegawai::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[Bidang0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBidang0()
    {
        return $this->hasOne(Bidang::class, ['nama' => 'bidang']);
    }

    /**
     * Gets query for [[Bpd0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBpd0()
    {
        return $this->hasOne(Bank::class, ['namabank' => 'bpd']);
    }

    /**
     * Gets query for [[ChecklistKriteriaKeluarHcus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChecklistKriteriaKeluarHcus()
    {
        return $this->hasMany(ChecklistKriteriaKeluarHcu::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[ChecklistKriteriaKeluarIcus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChecklistKriteriaKeluarIcus()
    {
        return $this->hasMany(ChecklistKriteriaKeluarIcu::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[ChecklistKriteriaMasukHcus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChecklistKriteriaMasukHcus()
    {
        return $this->hasMany(ChecklistKriteriaMasukHcu::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[ChecklistKriteriaMasukIcus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChecklistKriteriaMasukIcus()
    {
        return $this->hasMany(ChecklistKriteriaMasukIcu::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[DataTriaseIgdprimers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataTriaseIgdprimers()
    {
        return $this->hasMany(DataTriaseIgdprimer::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[DataTriaseIgdsekunders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataTriaseIgdsekunders()
    {
        return $this->hasMany(DataTriaseIgdsekunder::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[Departemen0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartemen0()
    {
        return $this->hasOne(Departemen::class, ['dep_id' => 'departemen']);
    }

    /**
     * Gets query for [[Dokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDokter()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'nik']);
    }

    /**
     * Gets query for [[EvaluasiKinerjaPegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEvaluasiKinerjaPegawais()
    {
        return $this->hasMany(EvaluasiKinerjaPegawai::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[InacbgCoderNik]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInacbgCoderNik()
    {
        return $this->hasOne(InacbgCoderNik::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[Indexins0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIndexins0()
    {
        return $this->hasOne(Departemen::class, ['dep_id' => 'indexins']);
    }

    /**
     * Gets query for [[JadwalPegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJadwalPegawais()
    {
        return $this->hasMany(JadwalPegawai::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[JadwalTambahans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJadwalTambahans()
    {
        return $this->hasMany(JadwalTambahan::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[JasaLains]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJasaLains()
    {
        return $this->hasMany(JasaLain::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[Jgmlms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJgmlms()
    {
        return $this->hasMany(Jgmlm::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[JnjJabatan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJnjJabatan()
    {
        return $this->hasOne(JnjJabatan::class, ['kode' => 'jnj_jabatan']);
    }

    /**
     * Gets query for [[Jumpasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJumpasiens()
    {
        return $this->hasMany(Jumpasien::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[K3rsPeristiwas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getK3rsPeristiwas()
    {
        return $this->hasMany(K3rsPeristiwa::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[K3rsPeristiwas0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getK3rsPeristiwas0()
    {
        return $this->hasMany(K3rsPeristiwa::class, ['nik_pelapor' => 'nik']);
    }

    /**
     * Gets query for [[K3rsPeristiwas1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getK3rsPeristiwas1()
    {
        return $this->hasMany(K3rsPeristiwa::class, ['nik_timk3' => 'nik']);
    }

    /**
     * Gets query for [[Kasift]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKasift()
    {
        return $this->hasOne(Kasift::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[Keanggotaan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeanggotaan()
    {
        return $this->hasOne(Keanggotaan::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[Ketidakhadirans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKetidakhadirans()
    {
        return $this->hasMany(Ketidakhadiran::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[KodeEmergency]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeEmergency()
    {
        return $this->hasOne(EmergencyIndex::class, ['kode_emergency' => 'kode_emergency']);
    }

    /**
     * Gets query for [[KodeKelompok]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeKelompok()
    {
        return $this->hasOne(KelompokJabatan::class, ['kode_kelompok' => 'kode_kelompok']);
    }

    /**
     * Gets query for [[KodeResiko]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeResiko()
    {
        return $this->hasOne(ResikoKerja::class, ['kode_resiko' => 'kode_resiko']);
    }

    /**
     * Gets query for [[MppEvaluasiCatatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMppEvaluasiCatatans()
    {
        return $this->hasMany(MppEvaluasiCatatan::class, ['nip' => 'nik']);
    }

    /**
     * Gets query for [[MppEvaluasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMppEvaluasis()
    {
        return $this->hasMany(MppEvaluasi::class, ['nip' => 'nik']);
    }

    /**
     * Gets query for [[MppSkrinings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMppSkrinings()
    {
        return $this->hasMany(MppSkrining::class, ['nip' => 'nik']);
    }

    /**
     * Gets query for [[PasienBayis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasienBayis()
    {
        return $this->hasMany(PasienBayi::class, ['penolong' => 'nik']);
    }

    /**
     * Gets query for [[PembagianAkte]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembagianAkte()
    {
        return $this->hasOne(PembagianAkte::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[PembagianResume]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembagianResume()
    {
        return $this->hasOne(PembagianResume::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[PembagianTuslah]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembagianTuslah()
    {
        return $this->hasOne(PembagianTuslah::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[PembagianWarung]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembagianWarung()
    {
        return $this->hasOne(PembagianWarung::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[PemeriksaanRalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemeriksaanRalans()
    {
        return $this->hasMany(PemeriksaanRalan::class, ['nip' => 'nik']);
    }

    /**
     * Gets query for [[PemeriksaanRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemeriksaanRanaps()
    {
        return $this->hasMany(PemeriksaanRanap::class, ['nip' => 'nik']);
    }

    /**
     * Gets query for [[PeminjamanKoperasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjamanKoperasis()
    {
        return $this->hasMany(PeminjamanKoperasi::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[PenagihanPiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenagihanPiutangs()
    {
        return $this->hasMany(PenagihanPiutang::class, ['nip' => 'nik']);
    }

    /**
     * Gets query for [[PenagihanPiutangs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenagihanPiutangs0()
    {
        return $this->hasMany(PenagihanPiutang::class, ['nip_menyetujui' => 'nik']);
    }

    /**
     * Gets query for [[PencapaianKinerjaPegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPencapaianKinerjaPegawais()
    {
        return $this->hasMany(PencapaianKinerjaPegawai::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[Pendidikan0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPendidikan0()
    {
        return $this->hasOne(Pendidikan::class, ['tingkat' => 'pendidikan']);
    }

    /**
     * Gets query for [[PengajuanBarangMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengajuanBarangMedis()
    {
        return $this->hasMany(PengajuanBarangMedis::class, ['nip' => 'nik']);
    }

    /**
     * Gets query for [[PengajuanBarangNonmedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengajuanBarangNonmedis()
    {
        return $this->hasMany(PengajuanBarangNonmedis::class, ['nip' => 'nik']);
    }

    /**
     * Gets query for [[PengajuanBiayas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengajuanBiayas()
    {
        return $this->hasMany(PengajuanBiaya::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[PengajuanBiayas0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengajuanBiayas0()
    {
        return $this->hasMany(PengajuanBiaya::class, ['nik_pj' => 'nik']);
    }

    /**
     * Gets query for [[PengajuanCutis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengajuanCutis()
    {
        return $this->hasMany(PengajuanCuti::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[PengajuanCutis0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengajuanCutis0()
    {
        return $this->hasMany(PengajuanCuti::class, ['nik_pj' => 'nik']);
    }

    /**
     * Gets query for [[PengajuanInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengajuanInventaris()
    {
        return $this->hasMany(PengajuanInventaris::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[PengajuanInventaris0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengajuanInventaris0()
    {
        return $this->hasMany(PengajuanInventaris::class, ['nik_pj' => 'nik']);
    }

    /**
     * Gets query for [[PengumumanEpasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengumumanEpasiens()
    {
        return $this->hasMany(PengumumanEpasien::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[PenilaianFisioterapis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianFisioterapis()
    {
        return $this->hasMany(PenilaianFisioterapi::class, ['nip' => 'nik']);
    }

    /**
     * Gets query for [[PenilaianKorbanKekerasans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianKorbanKekerasans()
    {
        return $this->hasMany(PenilaianKorbanKekerasan::class, ['nip' => 'nik']);
    }

    /**
     * Gets query for [[PenilaianTambahanGeriatris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianTambahanGeriatris()
    {
        return $this->hasMany(PenilaianTambahanGeriatri::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[PermintaanDapurs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanDapurs()
    {
        return $this->hasMany(PermintaanDapur::class, ['nip' => 'nik']);
    }

    /**
     * Gets query for [[PermintaanMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanMedis()
    {
        return $this->hasMany(PermintaanMedis::class, ['nip' => 'nik']);
    }

    /**
     * Gets query for [[PermintaanNonMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanNonMedis()
    {
        return $this->hasMany(PermintaanNonMedis::class, ['nip' => 'nik']);
    }

    /**
     * Gets query for [[PermintaanPerbaikanInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanPerbaikanInventaris()
    {
        return $this->hasMany(PermintaanPerbaikanInventaris::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[Petugas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPetugas()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nik']);
    }

    /**
     * Gets query for [[PnmTnjBulanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPnmTnjBulanans()
    {
        return $this->hasMany(PnmTnjBulanan::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[PnmTnjHarians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPnmTnjHarians()
    {
        return $this->hasMany(PnmTnjHarian::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[Potongans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPotongans()
    {
        return $this->hasMany(Potongan::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[Presensis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPresensis()
    {
        return $this->hasMany(Presensi::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[Rawatjalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatjalans()
    {
        return $this->hasMany(Rawatjalan::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[RekapPresensis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRekapPresensis()
    {
        return $this->hasMany(RekapPresensi::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[RiwayatJabatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatJabatans()
    {
        return $this->hasMany(RiwayatJabatan::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[RiwayatNaikGajis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatNaikGajis()
    {
        return $this->hasMany(RiwayatNaikGaji::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[RiwayatPendidikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatPendidikans()
    {
        return $this->hasMany(RiwayatPendidikan::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[RiwayatPenelitians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatPenelitians()
    {
        return $this->hasMany(RiwayatPenelitian::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[RiwayatPenghargaans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatPenghargaans()
    {
        return $this->hasMany(RiwayatPenghargaan::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[RiwayatSeminars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatSeminars()
    {
        return $this->hasMany(RiwayatSeminar::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[Sidikjari]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSidikjari()
    {
        return $this->hasOne(Sidikjari::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[SkpPenilaians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkpPenilaians()
    {
        return $this->hasMany(SkpPenilaian::class, ['nik_dinilai' => 'nik']);
    }

    /**
     * Gets query for [[SkpPenilaians0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkpPenilaians0()
    {
        return $this->hasMany(SkpPenilaian::class, ['nik_penilai' => 'nik']);
    }

    /**
     * Gets query for [[SkpRekapitulasiPenilaians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkpRekapitulasiPenilaians()
    {
        return $this->hasMany(SkpRekapitulasiPenilaian::class, ['nik_dinilai' => 'nik']);
    }

    /**
     * Gets query for [[SkpRekapitulasiPenilaians0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkpRekapitulasiPenilaians0()
    {
        return $this->hasMany(SkpRekapitulasiPenilaian::class, ['nik_penilai' => 'nik']);
    }

    /**
     * Gets query for [[SttsKerja]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSttsKerja()
    {
        return $this->hasOne(SttsKerja::class, ['stts' => 'stts_kerja']);
    }

    /**
     * Gets query for [[SttsWp]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSttsWp()
    {
        return $this->hasOne(SttsWp::class, ['stts' => 'stts_wp']);
    }

    /**
     * Gets query for [[SuratPemesananMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPemesananMedis()
    {
        return $this->hasMany(SuratPemesananMedis::class, ['nip' => 'nik']);
    }

    /**
     * Gets query for [[SuratPemesananNonMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPemesananNonMedis()
    {
        return $this->hasMany(SuratPemesananNonMedis::class, ['nip' => 'nik']);
    }

    /**
     * Gets query for [[SuratPenolakanAnjuranMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPenolakanAnjuranMedis()
    {
        return $this->hasMany(SuratPenolakanAnjuranMedis::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[Tambahjagas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTambahjagas()
    {
        return $this->hasMany(Tambahjaga::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[TemporaryPresensi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemporaryPresensi()
    {
        return $this->hasOne(TemporaryPresensi::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[Tindakans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTindakans()
    {
        return $this->hasMany(Tindakan::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[Tnjs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTnjs()
    {
        return $this->hasMany(MasterTunjanganBulanan::class, ['id' => 'id_tnj'])->viaTable('pnm_tnj_bulanan', ['id' => 'id']);
    }

    /**
     * Gets query for [[Tnjs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTnjs0()
    {
        return $this->hasMany(MasterTunjanganHarian::class, ['id' => 'id_tnj'])->viaTable('pnm_tnj_harian', ['id' => 'id']);
    }

    /**
     * Gets query for [[TokoPengajuanBarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoPengajuanBarangs()
    {
        return $this->hasMany(TokoPengajuanBarang::class, ['nip' => 'nik']);
    }

    /**
     * Gets query for [[TokoSuratPemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoSuratPemesanans()
    {
        return $this->hasMany(TokoSuratPemesanan::class, ['nip' => 'nik']);
    }
}
