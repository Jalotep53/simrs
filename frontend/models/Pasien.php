<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property string $no_rkm_medis
 * @property string|null $nm_pasien
 * @property string|null $no_ktp
 * @property string|null $jk
 * @property string|null $tmp_lahir
 * @property string|null $tgl_lahir
 * @property string $nm_ibu
 * @property string|null $alamat
 * @property string|null $gol_darah
 * @property string|null $pekerjaan
 * @property string|null $stts_nikah
 * @property string|null $agama
 * @property string|null $tgl_daftar
 * @property string|null $no_tlp
 * @property string $umur
 * @property string $pnd
 * @property string|null $keluarga
 * @property string $namakeluarga
 * @property string $kd_pj
 * @property string|null $no_peserta
 * @property int $kd_kel
 * @property int $kd_kec
 * @property int $kd_kab
 * @property string $pekerjaanpj
 * @property string $alamatpj
 * @property string $kelurahanpj
 * @property string $kecamatanpj
 * @property string $kabupatenpj
 * @property string $perusahaan_pasien
 * @property int $suku_bangsa
 * @property int $bahasa_pasien
 * @property int $cacat_fisik
 * @property string $email
 * @property string $nip
 * @property int $kd_prop
 * @property string $propinsipj
 *
 * @property BahasaPasien $bahasaPasien
 * @property BayarPiutang[] $bayarPiutangs
 * @property BookingPeriksaDiterima[] $bookingPeriksaDiterimas
 * @property BookingRegistrasi[] $bookingRegistrasis
 * @property BridgingDukcapil $bridgingDukcapil
 * @property CacatFisik $cacatFisik
 * @property CatatanPasien $catatanPasien
 * @property PcareKegiatanKelompok[] $edus
 * @property Kabupaten $kdKab
 * @property Kecamatan $kdKec
 * @property Kelurahan $kdKel
 * @property Penjab $kdPj
 * @property Propinsi $kdProp
 * @property PasienBayi $pasienBayi
 * @property PasienCorona $pasienCorona
 * @property PasienMati $pasienMati
 * @property PasienPolri $pasienPolri
 * @property PasienTni $pasienTni
 * @property PcarePesertaKegiatanKelompok[] $pcarePesertaKegiatanKelompoks
 * @property PeminjamanBerkas[] $peminjamanBerkas
 * @property Pengaduan[] $pengaduans
 * @property Penjualan[] $penjualans
 * @property PersonalPasien $personalPasien
 * @property PerusahaanPasien $perusahaanPasien
 * @property PiutangPasien[] $piutangPasiens
 * @property Piutang[] $piutangs
 * @property ReferensiMobilejknBpjs[] $referensiMobilejknBpjs
 * @property ReferensiMobilejknBpjsBatal[] $referensiMobilejknBpjsBatals
 * @property RegPeriksa[] $regPeriksas
 * @property RetensiPasien[] $retensiPasiens
 * @property Returjual[] $returjuals
 * @property Returpiutang[] $returpiutangs
 * @property RiwayatImunisasi[] $riwayatImunisasis
 * @property RiwayatPersalinanPasien[] $riwayatPersalinanPasiens
 * @property RujukanranapDokterRs[] $rujukanranapDokterRs
 * @property Sidikjaripasien $sidikjaripasien
 * @property SkdpBpjs[] $skdpBpjs
 * @property SkriningRawatJalan[] $skriningRawatJalans
 * @property SukuBangsa $sukuBangsa
 * @property TagihanBpdJabar[] $tagihanBpdJabars
 * @property TagihanBpdJateng[] $tagihanBpdJatengs
 * @property TagihanBpdPapua[] $tagihanBpdPapuas
 * @property TagihanBriva[] $tagihanBrivas
 * @property TagihanMandiri[] $tagihanMandiris
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis', 'nm_ibu', 'umur', 'pnd', 'namakeluarga', 'kd_pj', 'kd_kel', 'kd_kec', 'kd_kab', 'pekerjaanpj', 'alamatpj', 'kelurahanpj', 'kecamatanpj', 'kabupatenpj', 'perusahaan_pasien', 'suku_bangsa', 'bahasa_pasien', 'cacat_fisik', 'email', 'nip', 'kd_prop', 'propinsipj'], 'required'],
            [['jk', 'gol_darah', 'stts_nikah', 'pnd', 'keluarga'], 'string'],
            [['tgl_lahir', 'tgl_daftar'], 'safe'],
            [['kd_kel', 'kd_kec', 'kd_kab', 'suku_bangsa', 'bahasa_pasien', 'cacat_fisik', 'kd_prop'], 'integer'],
            [['no_rkm_medis', 'tmp_lahir'], 'string', 'max' => 15],
            [['nm_pasien', 'nm_ibu', 'no_tlp'], 'string', 'max' => 40],
            [['no_ktp'], 'string', 'max' => 20],
            [['alamat'], 'string', 'max' => 200],
            [['pekerjaan', 'kelurahanpj', 'kecamatanpj', 'kabupatenpj'], 'string', 'max' => 60],
            [['agama'], 'string', 'max' => 12],
            [['umur', 'nip', 'propinsipj'], 'string', 'max' => 30],
            [['namakeluarga', 'email'], 'string', 'max' => 50],
            [['kd_pj'], 'string', 'max' => 3],
            [['no_peserta'], 'string', 'max' => 25],
            [['pekerjaanpj'], 'string', 'max' => 35],
            [['alamatpj'], 'string', 'max' => 100],
            [['perusahaan_pasien'], 'string', 'max' => 8],
            [['no_rkm_medis'], 'unique'],
            [['kd_pj'], 'exist', 'skipOnError' => true, 'targetClass' => Penjab::class, 'targetAttribute' => ['kd_pj' => 'kd_pj']],
            [['kd_kel'], 'exist', 'skipOnError' => true, 'targetClass' => Kelurahan::class, 'targetAttribute' => ['kd_kel' => 'kd_kel']],
            [['kd_kec'], 'exist', 'skipOnError' => true, 'targetClass' => Kecamatan::class, 'targetAttribute' => ['kd_kec' => 'kd_kec']],
            [['kd_kab'], 'exist', 'skipOnError' => true, 'targetClass' => Kabupaten::class, 'targetAttribute' => ['kd_kab' => 'kd_kab']],
            [['perusahaan_pasien'], 'exist', 'skipOnError' => true, 'targetClass' => PerusahaanPasien::class, 'targetAttribute' => ['perusahaan_pasien' => 'kode_perusahaan']],
            [['suku_bangsa'], 'exist', 'skipOnError' => true, 'targetClass' => SukuBangsa::class, 'targetAttribute' => ['suku_bangsa' => 'id']],
            [['bahasa_pasien'], 'exist', 'skipOnError' => true, 'targetClass' => BahasaPasien::class, 'targetAttribute' => ['bahasa_pasien' => 'id']],
            [['cacat_fisik'], 'exist', 'skipOnError' => true, 'targetClass' => CacatFisik::class, 'targetAttribute' => ['cacat_fisik' => 'id']],
            [['kd_prop'], 'exist', 'skipOnError' => true, 'targetClass' => Propinsi::class, 'targetAttribute' => ['kd_prop' => 'kd_prop']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rkm_medis' => 'No Rkm Medis',
            'nm_pasien' => 'Nm Pasien',
            'no_ktp' => 'No Ktp',
            'jk' => 'Jk',
            'tmp_lahir' => 'Tmp Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'nm_ibu' => 'Nm Ibu',
            'alamat' => 'Alamat',
            'gol_darah' => 'Gol Darah',
            'pekerjaan' => 'Pekerjaan',
            'stts_nikah' => 'Stts Nikah',
            'agama' => 'Agama',
            'tgl_daftar' => 'Tgl Daftar',
            'no_tlp' => 'No Tlp',
            'umur' => 'Umur',
            'pnd' => 'Pnd',
            'keluarga' => 'Keluarga',
            'namakeluarga' => 'Namakeluarga',
            'kd_pj' => 'Kd Pj',
            'no_peserta' => 'No Peserta',
            'kd_kel' => 'Kd Kel',
            'kd_kec' => 'Kd Kec',
            'kd_kab' => 'Kd Kab',
            'pekerjaanpj' => 'Pekerjaanpj',
            'alamatpj' => 'Alamatpj',
            'kelurahanpj' => 'Kelurahanpj',
            'kecamatanpj' => 'Kecamatanpj',
            'kabupatenpj' => 'Kabupatenpj',
            'perusahaan_pasien' => 'Perusahaan Pasien',
            'suku_bangsa' => 'Suku Bangsa',
            'bahasa_pasien' => 'Bahasa Pasien',
            'cacat_fisik' => 'Cacat Fisik',
            'email' => 'Email',
            'nip' => 'Nip',
            'kd_prop' => 'Kd Prop',
            'propinsipj' => 'Propinsipj',
        ];
    }

    /**
     * Gets query for [[BahasaPasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBahasaPasien()
    {
        return $this->hasOne(BahasaPasien::class, ['id' => 'bahasa_pasien']);
    }

    /**
     * Gets query for [[BayarPiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPiutangs()
    {
        return $this->hasMany(BayarPiutang::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[BookingPeriksaDiterimas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookingPeriksaDiterimas()
    {
        return $this->hasMany(BookingPeriksaDiterima::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[BookingRegistrasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookingRegistrasis()
    {
        return $this->hasMany(BookingRegistrasi::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[BridgingDukcapil]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBridgingDukcapil()
    {
        return $this->hasOne(BridgingDukcapil::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[CacatFisik]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCacatFisik()
    {
        return $this->hasOne(CacatFisik::class, ['id' => 'cacat_fisik']);
    }

    /**
     * Gets query for [[CatatanPasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatatanPasien()
    {
        return $this->hasOne(CatatanPasien::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[Edus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEdus()
    {
        return $this->hasMany(PcareKegiatanKelompok::class, ['eduId' => 'eduId'])->viaTable('pcare_peserta_kegiatan_kelompok', ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[KdKab]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdKab()
    {
        return $this->hasOne(Kabupaten::class, ['kd_kab' => 'kd_kab']);
    }

    /**
     * Gets query for [[KdKec]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdKec()
    {
        return $this->hasOne(Kecamatan::class, ['kd_kec' => 'kd_kec']);
    }

    /**
     * Gets query for [[KdKel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdKel()
    {
        return $this->hasOne(Kelurahan::class, ['kd_kel' => 'kd_kel']);
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
     * Gets query for [[KdProp]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdProp()
    {
        return $this->hasOne(Propinsi::class, ['kd_prop' => 'kd_prop']);
    }

    /**
     * Gets query for [[PasienBayi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasienBayi()
    {
        return $this->hasOne(PasienBayi::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[PasienCorona]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasienCorona()
    {
        return $this->hasOne(PasienCorona::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[PasienMati]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasienMati()
    {
        return $this->hasOne(PasienMati::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[PasienPolri]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasienPolri()
    {
        return $this->hasOne(PasienPolri::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[PasienTni]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasienTni()
    {
        return $this->hasOne(PasienTni::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[PcarePesertaKegiatanKelompoks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPcarePesertaKegiatanKelompoks()
    {
        return $this->hasMany(PcarePesertaKegiatanKelompok::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[PeminjamanBerkas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjamanBerkas()
    {
        return $this->hasMany(PeminjamanBerkas::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[Pengaduans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengaduans()
    {
        return $this->hasMany(Pengaduan::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[Penjualans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenjualans()
    {
        return $this->hasMany(Penjualan::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[PersonalPasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersonalPasien()
    {
        return $this->hasOne(PersonalPasien::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[PerusahaanPasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerusahaanPasien()
    {
        return $this->hasOne(PerusahaanPasien::class, ['kode_perusahaan' => 'perusahaan_pasien']);
    }

    /**
     * Gets query for [[PiutangPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPiutangPasiens()
    {
        return $this->hasMany(PiutangPasien::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[Piutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPiutangs()
    {
        return $this->hasMany(Piutang::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[ReferensiMobilejknBpjs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReferensiMobilejknBpjs()
    {
        return $this->hasMany(ReferensiMobilejknBpjs::class, ['norm' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[ReferensiMobilejknBpjsBatals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReferensiMobilejknBpjsBatals()
    {
        return $this->hasMany(ReferensiMobilejknBpjsBatal::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[RegPeriksas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegPeriksas()
    {
        return $this->hasMany(RegPeriksa::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[RetensiPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRetensiPasiens()
    {
        return $this->hasMany(RetensiPasien::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[Returjuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturjuals()
    {
        return $this->hasMany(Returjual::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[Returpiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturpiutangs()
    {
        return $this->hasMany(Returpiutang::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[RiwayatImunisasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatImunisasis()
    {
        return $this->hasMany(RiwayatImunisasi::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[RiwayatPersalinanPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatPersalinanPasiens()
    {
        return $this->hasMany(RiwayatPersalinanPasien::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[RujukanranapDokterRs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRujukanranapDokterRs()
    {
        return $this->hasMany(RujukanranapDokterRs::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[Sidikjaripasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSidikjaripasien()
    {
        return $this->hasOne(Sidikjaripasien::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[SkdpBpjs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkdpBpjs()
    {
        return $this->hasMany(SkdpBpjs::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[SkriningRawatJalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkriningRawatJalans()
    {
        return $this->hasMany(SkriningRawatJalan::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[SukuBangsa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSukuBangsa()
    {
        return $this->hasOne(SukuBangsa::class, ['id' => 'suku_bangsa']);
    }

    /**
     * Gets query for [[TagihanBpdJabars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTagihanBpdJabars()
    {
        return $this->hasMany(TagihanBpdJabar::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[TagihanBpdJatengs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTagihanBpdJatengs()
    {
        return $this->hasMany(TagihanBpdJateng::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[TagihanBpdPapuas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTagihanBpdPapuas()
    {
        return $this->hasMany(TagihanBpdPapua::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[TagihanBrivas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTagihanBrivas()
    {
        return $this->hasMany(TagihanBriva::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[TagihanMandiris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTagihanMandiris()
    {
        return $this->hasMany(TagihanMandiri::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }
}
