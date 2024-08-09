<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penjab".
 *
 * @property string $kd_pj
 * @property string $png_jawab
 * @property string $nama_perusahaan
 * @property string $alamat_asuransi
 * @property string $no_telp
 * @property string $attn
 * @property string $status
 *
 * @property AkunPiutang[] $akunPiutangs
 * @property BookingRegistrasi[] $bookingRegistrasis
 * @property DetailPiutangPasien[] $detailPiutangPasiens
 * @property JnsPerawatanInap[] $jnsPerawatanInaps
 * @property JnsPerawatanLab[] $jnsPerawatanLabs
 * @property JnsPerawatanRadiologi[] $jnsPerawatanRadiologis
 * @property JnsPerawatanUtd[] $jnsPerawatanUtds
 * @property JnsPerawatan[] $jnsPerawatans
 * @property JnsPerawatan[] $kdJenisPrws
 * @property Kamar[] $kdKamars
 * @property Rekening[] $kdReks
 * @property PaketOperasi[] $paketOperasis
 * @property Pasien[] $pasiens
 * @property PasswordAsuransi $passwordAsuransi
 * @property PenagihanPiutang[] $penagihanPiutangs
 * @property PenjabDokumenKerjasama $penjabDokumenKerjasama
 * @property RegPeriksa[] $regPeriksas
 * @property SetHargaKamar[] $setHargaKamars
 * @property SetHargaObatRalan $setHargaObatRalan
 * @property SetHargaObatRanap[] $setHargaObatRanaps
 * @property SetInputParsial $setInputParsial
 * @property SetOtomatisTindakanRalanDokterpetugas[] $setOtomatisTindakanRalanDokterpetugas
 * @property SetOtomatisTindakanRalanPetugas[] $setOtomatisTindakanRalanPetugas
 * @property SetOtomatisTindakanRalan[] $setOtomatisTindakanRalans
 * @property UbahPenjab[] $ubahPenjabs
 * @property UbahPenjab[] $ubahPenjabs0
 */
class Penjab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penjab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_pj', 'png_jawab', 'nama_perusahaan', 'alamat_asuransi', 'no_telp', 'attn', 'status'], 'required'],
            [['status'], 'string'],
            [['kd_pj'], 'string', 'max' => 3],
            [['png_jawab'], 'string', 'max' => 30],
            [['nama_perusahaan', 'attn'], 'string', 'max' => 60],
            [['alamat_asuransi'], 'string', 'max' => 130],
            [['no_telp'], 'string', 'max' => 40],
            [['kd_pj'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_pj' => 'Kd Pj',
            'png_jawab' => 'Png Jawab',
            'nama_perusahaan' => 'Nama Perusahaan',
            'alamat_asuransi' => 'Alamat Asuransi',
            'no_telp' => 'No Telp',
            'attn' => 'Attn',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[AkunPiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAkunPiutangs()
    {
        return $this->hasMany(AkunPiutang::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[BookingRegistrasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookingRegistrasis()
    {
        return $this->hasMany(BookingRegistrasi::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[DetailPiutangPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPiutangPasiens()
    {
        return $this->hasMany(DetailPiutangPasien::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[JnsPerawatanInaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJnsPerawatanInaps()
    {
        return $this->hasMany(JnsPerawatanInap::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[JnsPerawatanLabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJnsPerawatanLabs()
    {
        return $this->hasMany(JnsPerawatanLab::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[JnsPerawatanRadiologis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJnsPerawatanRadiologis()
    {
        return $this->hasMany(JnsPerawatanRadiologi::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[JnsPerawatanUtds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJnsPerawatanUtds()
    {
        return $this->hasMany(JnsPerawatanUtd::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[JnsPerawatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJnsPerawatans()
    {
        return $this->hasMany(JnsPerawatan::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[KdJenisPrws]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrws()
    {
        return $this->hasMany(JnsPerawatan::class, ['kd_jenis_prw' => 'kd_jenis_prw'])->viaTable('set_otomatis_tindakan_ralan_petugas', ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[KdKamars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdKamars()
    {
        return $this->hasMany(Kamar::class, ['kd_kamar' => 'kd_kamar'])->viaTable('set_harga_kamar', ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[KdReks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdReks()
    {
        return $this->hasMany(Rekening::class, ['kd_rek' => 'kd_rek'])->viaTable('akun_piutang', ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[PaketOperasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPaketOperasis()
    {
        return $this->hasMany(PaketOperasi::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[Pasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasiens()
    {
        return $this->hasMany(Pasien::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[PasswordAsuransi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasswordAsuransi()
    {
        return $this->hasOne(PasswordAsuransi::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[PenagihanPiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenagihanPiutangs()
    {
        return $this->hasMany(PenagihanPiutang::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[PenjabDokumenKerjasama]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenjabDokumenKerjasama()
    {
        return $this->hasOne(PenjabDokumenKerjasama::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[RegPeriksas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegPeriksas()
    {
        return $this->hasMany(RegPeriksa::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[SetHargaKamars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetHargaKamars()
    {
        return $this->hasMany(SetHargaKamar::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[SetHargaObatRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetHargaObatRalan()
    {
        return $this->hasOne(SetHargaObatRalan::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[SetHargaObatRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetHargaObatRanaps()
    {
        return $this->hasMany(SetHargaObatRanap::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[SetInputParsial]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetInputParsial()
    {
        return $this->hasOne(SetInputParsial::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[SetOtomatisTindakanRalanDokterpetugas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetOtomatisTindakanRalanDokterpetugas()
    {
        return $this->hasMany(SetOtomatisTindakanRalanDokterpetugas::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[SetOtomatisTindakanRalanPetugas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetOtomatisTindakanRalanPetugas()
    {
        return $this->hasMany(SetOtomatisTindakanRalanPetugas::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[SetOtomatisTindakanRalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetOtomatisTindakanRalans()
    {
        return $this->hasMany(SetOtomatisTindakanRalan::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[UbahPenjabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUbahPenjabs()
    {
        return $this->hasMany(UbahPenjab::class, ['kd_pj1' => 'kd_pj']);
    }

    /**
     * Gets query for [[UbahPenjabs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUbahPenjabs0()
    {
        return $this->hasMany(UbahPenjab::class, ['kd_pj2' => 'kd_pj']);
    }
}
