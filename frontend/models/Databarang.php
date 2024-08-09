<?php

namespace frontend\models;

use Yii;
use frontend\models\ObatBmhpOksigen;
use frontend\models\KatObatBmhpOksigen;

/**
 * This is the model class for table "databarang".
 *
 * @property string $kode_brng
 * @property string|null $nama_brng
 * @property string $kode_satbesar
 * @property string|null $kode_sat
 * @property string|null $letak_barang
 * @property float $dasar
 * @property float|null $h_beli
 * @property float|null $ralan
 * @property float|null $kelas1
 * @property float|null $kelas2
 * @property float|null $kelas3
 * @property float|null $utama
 * @property float|null $vip
 * @property float|null $vvip
 * @property float|null $beliluar
 * @property float|null $jualbebas
 * @property float|null $karyawan
 * @property float|null $stokminimal
 * @property string|null $kdjns
 * @property float $isi
 * @property float $kapasitas
 * @property string|null $expire
 * @property string $status
 * @property string|null $kode_industri
 * @property string|null $kode_kategori
 * @property string|null $kode_golongan
 *
 * @property AturanPakai[] $aturanPakais
 * @property DataBatch[] $dataBatches
 * @property DetailObatRacikanJual[] $detailObatRacikanJuals
 * @property DetailObatRacikan[] $detailObatRacikans
 * @property DetailPemberianObat[] $detailPemberianObats
 * @property DetailPengajuanBarangMedis[] $detailPengajuanBarangMedis
 * @property DetailPengeluaranObatBhp[] $detailPengeluaranObatBhps
 * @property DetailPermintaanMedis[] $detailPermintaanMedis
 * @property DetailPermintaanResepPulang[] $detailPermintaanResepPulangs
 * @property DetailPermintaanStokObatPasien[] $detailPermintaanStokObatPasiens
 * @property DetailSuratPemesananMedis[] $detailSuratPemesananMedis
 * @property Detailbeli[] $detailbelis
 * @property DetailhibahObatBhp[] $detailhibahObatBhps
 * @property Detailjual[] $detailjuals
 * @property Detailpesan[] $detailpesans
 * @property Detailpiutang[] $detailpiutangs
 * @property Detreturbeli[] $detreturbelis
 * @property Detreturjual[] $detreturjuals
 * @property Detreturpiutang[] $detreturpiutangs
 * @property Gudangbarang[] $gudangbarangs
 * @property Penyakit[] $kdPenyakits
 * @property Jenis $kdjns0
 * @property GolonganBarang $kodeGolongan
 * @property Industrifarmasi $kodeIndustri
 * @property KategoriBarang $kodeKategori
 * @property Kodesatuan $kodeSat
 * @property Kodesatuan $kodeSatbesar
 * @property MapingObatApotekBpjs[] $mapingObatApotekBpjs
 * @property MapingObatPcare $mapingObatPcare
 * @property Mutasibarang[] $mutasibarangs
 * @property UtdDonor[] $noDonors
 * @property UtdPemisahanKomponen[] $noDonors0
 * @property PengeluaranObatBhp[] $noKeluars
 * @property UtdPenyerahanDarah[] $noPenyerahans
 * @property ResepLuar[] $noReseps
 * @property ResepObat[] $noReseps0
 * @property TemplatePemeriksaanDokter[] $noTemplates
 * @property ObatPenyakit[] $obatPenyakits
 * @property Opname[] $opnames
 * @property PermintaanObat[] $permintaanObats
 * @property ResepDokterRacikanDetail[] $resepDokterRacikanDetails
 * @property ResepDokter[] $resepDokters
 * @property ResepLuarObat[] $resepLuarObats
 * @property ResepLuarRacikanDetail[] $resepLuarRacikanDetails
 * @property ResepPulang[] $resepPulangs
 * @property Returpasien[] $returpasiens
 * @property RiwayatBarangMedis[] $riwayatBarangMedis
 * @property SatuSehatImmunization[] $satuSehatImmunizations
 * @property SatuSehatMappingObat $satuSehatMappingObat
 * @property SatuSehatMappingVaksin $satuSehatMappingVaksin
 * @property SatuSehatMedication $satuSehatMedication
 * @property SatuSehatMedicationdispense[] $satuSehatMedicationdispenses
 * @property SatuSehatMedicationrequestRacikan[] $satuSehatMedicationrequestRacikans
 * @property SatuSehatMedicationrequest[] $satuSehatMedicationrequests
 * @property Setpenjualanperbarang $setpenjualanperbarang
 * @property StokObatPasien[] $stokObatPasiens
 * @property Tampbeli1 $tampbeli1
 * @property Tampjual1 $tampjual1
 * @property Tamppiutang[] $tamppiutangs
 * @property Tampreturbeli[] $tampreturbelis
 * @property Tampreturjual[] $tampreturjuals
 * @property Tampreturpiutang[] $tampreturpiutangs
 * @property TemplatePemeriksaanDokterResepRacikanDetail[] $templatePemeriksaanDokterResepRacikanDetails
 * @property TemplatePemeriksaanDokterResep[] $templatePemeriksaanDokterReseps
 * @property UtdMedisRusak[] $utdMedisRusaks
 * @property UtdPengambilanMedis[] $utdPengambilanMedis
 * @property UtdPenggunaanMedisDonor[] $utdPenggunaanMedisDonors
 * @property UtdPenggunaanMedisPemisahanKomponen[] $utdPenggunaanMedisPemisahanKomponens
 * @property UtdPenggunaanMedisPenyerahanDarah[] $utdPenggunaanMedisPenyerahanDarahs
 * @property UtdStokMedis $utdStokMedis
 */
class Databarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'databarang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'kode_satbesar', 'dasar', 'isi', 'kapasitas', 'status'], 'required'],
            [['dasar', 'h_beli', 'ralan', 'kelas1', 'kelas2', 'kelas3', 'utama', 'vip', 'vvip', 'beliluar', 'jualbebas', 'karyawan', 'stokminimal', 'isi', 'kapasitas'], 'number'],
            [['expire'], 'safe'],
            [['status'], 'string'],
            [['kode_brng'], 'string', 'max' => 15],
            [['nama_brng'], 'string', 'max' => 80],
            [['kode_satbesar', 'kode_sat', 'kdjns', 'kode_kategori', 'kode_golongan'], 'string', 'max' => 4],
            [['letak_barang'], 'string', 'max' => 100],
            [['kode_industri'], 'string', 'max' => 5],
            [['kode_brng'], 'unique'],
            [['kdjns'], 'exist', 'skipOnError' => true, 'targetClass' => Jenis::class, 'targetAttribute' => ['kdjns' => 'kdjns']],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
            [['kode_industri'], 'exist', 'skipOnError' => true, 'targetClass' => Industrifarmasi::class, 'targetAttribute' => ['kode_industri' => 'kode_industri']],
            [['kode_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriBarang::class, 'targetAttribute' => ['kode_kategori' => 'kode']],
            [['kode_golongan'], 'exist', 'skipOnError' => true, 'targetClass' => GolonganBarang::class, 'targetAttribute' => ['kode_golongan' => 'kode']],
            [['kode_satbesar'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_satbesar' => 'kode_sat']],
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
            'kode_satbesar' => 'Kode Satbesar',
            'kode_sat' => 'Kode Sat',
            'letak_barang' => 'Letak Barang',
            'dasar' => 'Dasar',
            'h_beli' => 'H Beli',
            'ralan' => 'Ralan',
            'kelas1' => 'Kelas1',
            'kelas2' => 'Kelas2',
            'kelas3' => 'Kelas3',
            'utama' => 'Utama',
            'vip' => 'Vip',
            'vvip' => 'Vvip',
            'beliluar' => 'Beliluar',
            'jualbebas' => 'Jualbebas',
            'karyawan' => 'Karyawan',
            'stokminimal' => 'Stokminimal',
            'kdjns' => 'Kdjns',
            'isi' => 'Isi',
            'kapasitas' => 'Kapasitas',
            'expire' => 'Expire',
            'status' => 'Status',
            'kode_industri' => 'Kode Industri',
            'kode_kategori' => 'Kode Kategori',
            'kode_golongan' => 'Kode Golongan',
        ];
    }

    /**
     * Gets query for [[AturanPakais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAturanPakais()
    {
        return $this->hasMany(AturanPakai::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[DataBatches]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataBatches()
    {
        return $this->hasMany(DataBatch::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[DetailObatRacikanJuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailObatRacikanJuals()
    {
        return $this->hasMany(DetailObatRacikanJual::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[DetailObatRacikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailObatRacikans()
    {
        return $this->hasMany(DetailObatRacikan::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[DetailPemberianObats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPemberianObats()
    {
        return $this->hasMany(DetailPemberianObat::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[DetailPengajuanBarangMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPengajuanBarangMedis()
    {
        return $this->hasMany(DetailPengajuanBarangMedis::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[DetailPengeluaranObatBhps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPengeluaranObatBhps()
    {
        return $this->hasMany(DetailPengeluaranObatBhp::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[DetailPermintaanMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPermintaanMedis()
    {
        return $this->hasMany(DetailPermintaanMedis::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[DetailPermintaanResepPulangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPermintaanResepPulangs()
    {
        return $this->hasMany(DetailPermintaanResepPulang::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[DetailPermintaanStokObatPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPermintaanStokObatPasiens()
    {
        return $this->hasMany(DetailPermintaanStokObatPasien::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[DetailSuratPemesananMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailSuratPemesananMedis()
    {
        return $this->hasMany(DetailSuratPemesananMedis::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Detailbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailbelis()
    {
        return $this->hasMany(Detailbeli::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[DetailhibahObatBhps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailhibahObatBhps()
    {
        return $this->hasMany(DetailhibahObatBhp::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Detailjuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailjuals()
    {
        return $this->hasMany(Detailjual::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Detailpesans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailpesans()
    {
        return $this->hasMany(Detailpesan::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Detailpiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailpiutangs()
    {
        return $this->hasMany(Detailpiutang::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Detreturbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetreturbelis()
    {
        return $this->hasMany(Detreturbeli::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Detreturjuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetreturjuals()
    {
        return $this->hasMany(Detreturjual::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Detreturpiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetreturpiutangs()
    {
        return $this->hasMany(Detreturpiutang::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Gudangbarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGudangbarangs()
    {
        return $this->hasMany(Gudangbarang::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[KdPenyakits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPenyakits()
    {
        return $this->hasMany(Penyakit::class, ['kd_penyakit' => 'kd_penyakit'])->viaTable('obat_penyakit', ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Kdjns0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdjns0()
    {
        return $this->hasOne(Jenis::class, ['kdjns' => 'kdjns']);
    }

    /**
     * Gets query for [[KodeGolongan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeGolongan()
    {
        return $this->hasOne(GolonganBarang::class, ['kode' => 'kode_golongan']);
    }

    /**
     * Gets query for [[KodeIndustri]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeIndustri()
    {
        return $this->hasOne(Industrifarmasi::class, ['kode_industri' => 'kode_industri']);
    }

    /**
     * Gets query for [[KodeKategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeKategori()
    {
        return $this->hasOne(KategoriBarang::class, ['kode' => 'kode_kategori']);
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
     * Gets query for [[KodeSatbesar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSatbesar()
    {
        return $this->hasOne(Kodesatuan::class, ['kode_sat' => 'kode_satbesar']);
    }

    /**
     * Gets query for [[MapingObatApotekBpjs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMapingObatApotekBpjs()
    {
        return $this->hasMany(MapingObatApotekBpjs::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[MapingObatPcare]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMapingObatPcare()
    {
        return $this->hasOne(MapingObatPcare::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Mutasibarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMutasibarangs()
    {
        return $this->hasMany(Mutasibarang::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[NoDonors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoDonors()
    {
        return $this->hasMany(UtdDonor::class, ['no_donor' => 'no_donor'])->viaTable('utd_penggunaan_medis_donor', ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[NoDonors0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoDonors0()
    {
        return $this->hasMany(UtdPemisahanKomponen::class, ['no_donor' => 'no_donor'])->viaTable('utd_penggunaan_medis_pemisahan_komponen', ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[NoKeluars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoKeluars()
    {
        return $this->hasMany(PengeluaranObatBhp::class, ['no_keluar' => 'no_keluar'])->viaTable('detail_pengeluaran_obat_bhp', ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[NoPenyerahans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoPenyerahans()
    {
        return $this->hasMany(UtdPenyerahanDarah::class, ['no_penyerahan' => 'no_penyerahan'])->viaTable('utd_penggunaan_medis_penyerahan_darah', ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[NoReseps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoReseps()
    {
        return $this->hasMany(ResepLuar::class, ['no_resep' => 'no_resep'])->viaTable('resep_luar_obat', ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[NoReseps0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoReseps0()
    {
        return $this->hasMany(ResepObat::class, ['no_resep' => 'no_resep'])->viaTable('satu_sehat_medicationrequest', ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[NoTemplates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoTemplates()
    {
        return $this->hasMany(TemplatePemeriksaanDokter::class, ['no_template' => 'no_template'])->viaTable('template_pemeriksaan_dokter_resep', ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[ObatPenyakits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObatPenyakits()
    {
        return $this->hasMany(ObatPenyakit::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Opnames]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOpnames()
    {
        return $this->hasMany(Opname::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[PermintaanObats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanObats()
    {
        return $this->hasMany(PermintaanObat::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[ResepDokterRacikanDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResepDokterRacikanDetails()
    {
        return $this->hasMany(ResepDokterRacikanDetail::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[ResepDokters]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResepDokters()
    {
        return $this->hasMany(ResepDokter::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[ResepLuarObats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResepLuarObats()
    {
        return $this->hasMany(ResepLuarObat::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[ResepLuarRacikanDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResepLuarRacikanDetails()
    {
        return $this->hasMany(ResepLuarRacikanDetail::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[ResepPulangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResepPulangs()
    {
        return $this->hasMany(ResepPulang::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Returpasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturpasiens()
    {
        return $this->hasMany(Returpasien::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[RiwayatBarangMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatBarangMedis()
    {
        return $this->hasMany(RiwayatBarangMedis::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[SatuSehatImmunizations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatImmunizations()
    {
        return $this->hasMany(SatuSehatImmunization::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[SatuSehatMappingObat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMappingObat()
    {
        return $this->hasOne(SatuSehatMappingObat::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[SatuSehatMappingVaksin]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMappingVaksin()
    {
        return $this->hasOne(SatuSehatMappingVaksin::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[SatuSehatMedication]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMedication()
    {
        return $this->hasOne(SatuSehatMedication::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[SatuSehatMedicationdispenses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMedicationdispenses()
    {
        return $this->hasMany(SatuSehatMedicationdispense::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[SatuSehatMedicationrequestRacikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMedicationrequestRacikans()
    {
        return $this->hasMany(SatuSehatMedicationrequestRacikan::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[SatuSehatMedicationrequests]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMedicationrequests()
    {
        return $this->hasMany(SatuSehatMedicationrequest::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Setpenjualanperbarang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetpenjualanperbarang()
    {
        return $this->hasOne(Setpenjualanperbarang::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[StokObatPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStokObatPasiens()
    {
        return $this->hasMany(StokObatPasien::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Tampbeli1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTampbeli1()
    {
        return $this->hasOne(Tampbeli1::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Tampjual1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTampjual1()
    {
        return $this->hasOne(Tampjual1::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Tamppiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTamppiutangs()
    {
        return $this->hasMany(Tamppiutang::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Tampreturbelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTampreturbelis()
    {
        return $this->hasMany(Tampreturbeli::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Tampreturjuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTampreturjuals()
    {
        return $this->hasMany(Tampreturjual::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[Tampreturpiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTampreturpiutangs()
    {
        return $this->hasMany(Tampreturpiutang::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[TemplatePemeriksaanDokterResepRacikanDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplatePemeriksaanDokterResepRacikanDetails()
    {
        return $this->hasMany(TemplatePemeriksaanDokterResepRacikanDetail::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[TemplatePemeriksaanDokterReseps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplatePemeriksaanDokterReseps()
    {
        return $this->hasMany(TemplatePemeriksaanDokterResep::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[UtdMedisRusaks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdMedisRusaks()
    {
        return $this->hasMany(UtdMedisRusak::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[UtdPengambilanMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPengambilanMedis()
    {
        return $this->hasMany(UtdPengambilanMedis::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[UtdPenggunaanMedisDonors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPenggunaanMedisDonors()
    {
        return $this->hasMany(UtdPenggunaanMedisDonor::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[UtdPenggunaanMedisPemisahanKomponens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPenggunaanMedisPemisahanKomponens()
    {
        return $this->hasMany(UtdPenggunaanMedisPemisahanKomponen::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[UtdPenggunaanMedisPenyerahanDarahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPenggunaanMedisPenyerahanDarahs()
    {
        return $this->hasMany(UtdPenggunaanMedisPenyerahanDarah::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[UtdStokMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdStokMedis()
    {
        return $this->hasOne(UtdStokMedis::class, ['kode_brng' => 'kode_brng']);
    }
    public function getObatBmhpOksigen(){
        return $this->hasMany(ObatBmhpOksigen::class, ['kode_brng'=> 'kode_brng']);
    }
}
