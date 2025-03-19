<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_akun".
 *
 * @property string|null $Pengadaan_Obat
 * @property string|null $Pemesanan_Obat
 * @property string|null $Kontra_Pemesanan_Obat
 * @property string|null $Bayar_Pemesanan_Obat
 * @property string|null $Penjualan_Obat
 * @property string|null $Piutang_Obat
 * @property string|null $Kontra_Piutang_Obat
 * @property string|null $Retur_Ke_Suplayer
 * @property string|null $Kontra_Retur_Ke_Suplayer
 * @property string|null $Retur_Dari_pembeli
 * @property string|null $Kontra_Retur_Dari_Pembeli
 * @property string|null $Retur_Piutang_Obat
 * @property string|null $Kontra_Retur_Piutang_Obat
 * @property string|null $Pengadaan_Ipsrs
 * @property string|null $Stok_Keluar_Ipsrs
 * @property string|null $Kontra_Stok_Keluar_Ipsrs
 * @property string|null $Bayar_Piutang_Pasien
 * @property string|null $Pengambilan_Utd
 * @property string|null $Kontra_Pengambilan_Utd
 * @property string|null $Pengambilan_Penunjang_Utd
 * @property string|null $Kontra_Pengambilan_Penunjang_Utd
 * @property string|null $Penyerahan_Darah
 * @property string $Stok_Keluar_Medis
 * @property string $Kontra_Stok_Keluar_Medis
 * @property string|null $HPP_Obat_Jual_Bebas
 * @property string|null $Persediaan_Obat_Jual_Bebas
 * @property string $Penerimaan_NonMedis
 * @property string $Kontra_Penerimaan_NonMedis
 * @property string $Bayar_Pemesanan_Non_Medis
 * @property string $Hibah_Obat
 * @property string $Kontra_Hibah_Obat
 * @property string|null $Penerimaan_Toko
 * @property string|null $Kontra_Penerimaan_Toko
 * @property string $Pengadaan_Toko
 * @property string|null $Bayar_Pemesanan_Toko
 * @property string|null $Penjualan_Toko
 * @property string|null $HPP_Barang_Toko
 * @property string|null $Persediaan_Barang_Toko
 * @property string|null $Piutang_Toko
 * @property string|null $Kontra_Piutang_Toko
 * @property string|null $Retur_Beli_Toko
 * @property string|null $Kontra_Retur_Beli_Toko
 * @property string|null $Retur_Beli_Non_Medis
 * @property string|null $Kontra_Retur_Beli_Non_Medis
 * @property string|null $Retur_Jual_Toko
 * @property string|null $Kontra_Retur_Jual_Toko
 * @property string|null $Retur_Piutang_Toko
 * @property string|null $Kontra_Retur_Piutang_Toko
 * @property string $Kerugian_Klaim_BPJS_RVP
 * @property string $Lebih_Bayar_Klaim_BPJS_RVP
 * @property string $Piutang_BPJS_RVP
 * @property string $Kontra_Penerimaan_AsetInventaris
 * @property string $Kontra_Hibah_Aset
 * @property string $Hibah_Non_Medis
 * @property string $Kontra_Hibah_Non_Medis
 * @property string $Bayar_JM_Dokter
 * @property string $PPN_Masukan
 * @property string $Pengadaan_Dapur
 * @property string $Stok_Keluar_Dapur
 * @property string $Kontra_Stok_Keluar_Dapur
 * @property string $PPN_Keluaran
 * @property string $Diskon_Piutang
 * @property string $Piutang_Tidak_Terbayar
 * @property string $Lebih_Bayar_Piutang
 *
 * @property Rekening $bayarJMDokter
 * @property Rekening $bayarPemesananNonMedis
 * @property Rekening $bayarPemesananObat
 * @property Rekening $bayarPemesananToko
 * @property Rekening $bayarPiutangPasien
 * @property Rekening $diskonPiutang
 * @property Rekening $hPPBarangToko
 * @property Rekening $hPPObatJualBebas
 * @property Rekening $hibahNonMedis
 * @property Rekening $hibahObat
 * @property Rekening $kerugianKlaimBPJSRVP
 * @property Rekening $kontraHibahAset
 * @property Rekening $kontraHibahNonMedis
 * @property Rekening $kontraHibahObat
 * @property Rekening $kontraPemesananObat
 * @property Rekening $kontraPenerimaanAsetInventaris
 * @property Rekening $kontraPenerimaanNonMedis
 * @property Rekening $kontraPenerimaanToko
 * @property Rekening $kontraPengambilanPenunjangUtd
 * @property Rekening $kontraPengambilanUtd
 * @property Rekening $kontraPiutangObat
 * @property Rekening $kontraPiutangToko
 * @property Rekening $kontraReturBeliNonMedis
 * @property Rekening $kontraReturBeliToko
 * @property Rekening $kontraReturDariPembeli
 * @property Rekening $kontraReturJualToko
 * @property Rekening $kontraReturKeSuplayer
 * @property Rekening $kontraReturPiutangObat
 * @property Rekening $kontraReturPiutangToko
 * @property Rekening $kontraStokKeluarDapur
 * @property Rekening $kontraStokKeluarIpsrs
 * @property Rekening $kontraStokKeluarMedis
 * @property Rekening $lebihBayarKlaimBPJSRVP
 * @property Rekening $lebihBayarPiutang
 * @property Rekening $pPNKeluaran
 * @property Rekening $pPNMasukan
 * @property Rekening $pemesananObat
 * @property Rekening $penerimaanNonMedis
 * @property Rekening $penerimaanToko
 * @property Rekening $pengadaanDapur
 * @property Rekening $pengadaanIpsrs
 * @property Rekening $pengadaanObat
 * @property Rekening $pengadaanToko
 * @property Rekening $pengambilanPenunjangUtd
 * @property Rekening $pengambilanUtd
 * @property Rekening $penjualanObat
 * @property Rekening $penjualanToko
 * @property Rekening $penyerahanDarah
 * @property Rekening $persediaanBarangToko
 * @property Rekening $persediaanObatJualBebas
 * @property Rekening $piutangBPJSRVP
 * @property Rekening $piutangObat
 * @property Rekening $piutangTidakTerbayar
 * @property Rekening $piutangToko
 * @property Rekening $returBeliNonMedis
 * @property Rekening $returBeliToko
 * @property Rekening $returDariPembeli
 * @property Rekening $returJualToko
 * @property Rekening $returKeSuplayer
 * @property Rekening $returPiutangObat
 * @property Rekening $returPiutangToko
 * @property Rekening $stokKeluarDapur
 * @property Rekening $stokKeluarIpsrs
 * @property Rekening $stokKeluarMedis
 */
class SetAkun extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_akun';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Stok_Keluar_Medis', 'Kontra_Stok_Keluar_Medis', 'Penerimaan_NonMedis', 'Kontra_Penerimaan_NonMedis', 'Bayar_Pemesanan_Non_Medis', 'Hibah_Obat', 'Kontra_Hibah_Obat', 'Pengadaan_Toko', 'Kerugian_Klaim_BPJS_RVP', 'Lebih_Bayar_Klaim_BPJS_RVP', 'Piutang_BPJS_RVP', 'Kontra_Penerimaan_AsetInventaris', 'Kontra_Hibah_Aset', 'Hibah_Non_Medis', 'Kontra_Hibah_Non_Medis', 'Bayar_JM_Dokter', 'PPN_Masukan', 'Pengadaan_Dapur', 'Stok_Keluar_Dapur', 'Kontra_Stok_Keluar_Dapur', 'PPN_Keluaran', 'Diskon_Piutang', 'Piutang_Tidak_Terbayar', 'Lebih_Bayar_Piutang'], 'required'],
            [['Pengadaan_Obat', 'Pemesanan_Obat', 'Kontra_Pemesanan_Obat', 'Bayar_Pemesanan_Obat', 'Penjualan_Obat', 'Piutang_Obat', 'Kontra_Piutang_Obat', 'Retur_Ke_Suplayer', 'Kontra_Retur_Ke_Suplayer', 'Retur_Dari_pembeli', 'Kontra_Retur_Dari_Pembeli', 'Retur_Piutang_Obat', 'Kontra_Retur_Piutang_Obat', 'Pengadaan_Ipsrs', 'Stok_Keluar_Ipsrs', 'Kontra_Stok_Keluar_Ipsrs', 'Bayar_Piutang_Pasien', 'Pengambilan_Utd', 'Kontra_Pengambilan_Utd', 'Pengambilan_Penunjang_Utd', 'Kontra_Pengambilan_Penunjang_Utd', 'Penyerahan_Darah', 'Stok_Keluar_Medis', 'Kontra_Stok_Keluar_Medis', 'HPP_Obat_Jual_Bebas', 'Persediaan_Obat_Jual_Bebas', 'Penerimaan_NonMedis', 'Kontra_Penerimaan_NonMedis', 'Bayar_Pemesanan_Non_Medis', 'Hibah_Obat', 'Kontra_Hibah_Obat', 'Penerimaan_Toko', 'Kontra_Penerimaan_Toko', 'Pengadaan_Toko', 'Bayar_Pemesanan_Toko', 'Penjualan_Toko', 'HPP_Barang_Toko', 'Persediaan_Barang_Toko', 'Piutang_Toko', 'Kontra_Piutang_Toko', 'Retur_Beli_Toko', 'Kontra_Retur_Beli_Toko', 'Retur_Beli_Non_Medis', 'Kontra_Retur_Beli_Non_Medis', 'Retur_Jual_Toko', 'Kontra_Retur_Jual_Toko', 'Retur_Piutang_Toko', 'Kontra_Retur_Piutang_Toko', 'Kerugian_Klaim_BPJS_RVP', 'Lebih_Bayar_Klaim_BPJS_RVP', 'Piutang_BPJS_RVP', 'Kontra_Penerimaan_AsetInventaris', 'Kontra_Hibah_Aset', 'Hibah_Non_Medis', 'Kontra_Hibah_Non_Medis', 'Bayar_JM_Dokter', 'PPN_Masukan', 'Pengadaan_Dapur', 'Stok_Keluar_Dapur', 'Kontra_Stok_Keluar_Dapur', 'PPN_Keluaran', 'Diskon_Piutang', 'Piutang_Tidak_Terbayar', 'Lebih_Bayar_Piutang'], 'string', 'max' => 15],
            [['Pengadaan_Obat'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Pengadaan_Obat' => 'kd_rek']],
            [['Retur_Dari_pembeli'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Retur_Dari_pembeli' => 'kd_rek']],
            [['Kontra_Retur_Dari_Pembeli'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kontra_Retur_Dari_Pembeli' => 'kd_rek']],
            [['Retur_Piutang_Obat'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Retur_Piutang_Obat' => 'kd_rek']],
            [['Kontra_Retur_Piutang_Obat'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kontra_Retur_Piutang_Obat' => 'kd_rek']],
            [['Pengadaan_Ipsrs'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Pengadaan_Ipsrs' => 'kd_rek']],
            [['Stok_Keluar_Ipsrs'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Stok_Keluar_Ipsrs' => 'kd_rek']],
            [['Kontra_Stok_Keluar_Ipsrs'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kontra_Stok_Keluar_Ipsrs' => 'kd_rek']],
            [['Bayar_Piutang_Pasien'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Bayar_Piutang_Pasien' => 'kd_rek']],
            [['Pengambilan_Utd'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Pengambilan_Utd' => 'kd_rek']],
            [['Kontra_Pengambilan_Utd'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kontra_Pengambilan_Utd' => 'kd_rek']],
            [['Pemesanan_Obat'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Pemesanan_Obat' => 'kd_rek']],
            [['Pengambilan_Penunjang_Utd'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Pengambilan_Penunjang_Utd' => 'kd_rek']],
            [['Kontra_Pengambilan_Penunjang_Utd'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kontra_Pengambilan_Penunjang_Utd' => 'kd_rek']],
            [['Penyerahan_Darah'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Penyerahan_Darah' => 'kd_rek']],
            [['Stok_Keluar_Medis'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Stok_Keluar_Medis' => 'kd_rek']],
            [['Kontra_Stok_Keluar_Medis'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kontra_Stok_Keluar_Medis' => 'kd_rek']],
            [['HPP_Obat_Jual_Bebas'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['HPP_Obat_Jual_Bebas' => 'kd_rek']],
            [['Persediaan_Obat_Jual_Bebas'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Persediaan_Obat_Jual_Bebas' => 'kd_rek']],
            [['Penerimaan_NonMedis'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Penerimaan_NonMedis' => 'kd_rek']],
            [['Kontra_Penerimaan_NonMedis'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kontra_Penerimaan_NonMedis' => 'kd_rek']],
            [['Bayar_Pemesanan_Non_Medis'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Bayar_Pemesanan_Non_Medis' => 'kd_rek']],
            [['Kontra_Pemesanan_Obat'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kontra_Pemesanan_Obat' => 'kd_rek']],
            [['Hibah_Obat'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Hibah_Obat' => 'kd_rek']],
            [['Kontra_Hibah_Obat'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kontra_Hibah_Obat' => 'kd_rek']],
            [['Penerimaan_Toko'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Penerimaan_Toko' => 'kd_rek']],
            [['Kontra_Penerimaan_Toko'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kontra_Penerimaan_Toko' => 'kd_rek']],
            [['Pengadaan_Toko'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Pengadaan_Toko' => 'kd_rek']],
            [['Bayar_Pemesanan_Toko'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Bayar_Pemesanan_Toko' => 'kd_rek']],
            [['Penjualan_Toko'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Penjualan_Toko' => 'kd_rek']],
            [['HPP_Barang_Toko'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['HPP_Barang_Toko' => 'kd_rek']],
            [['Persediaan_Barang_Toko'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Persediaan_Barang_Toko' => 'kd_rek']],
            [['Piutang_Toko'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Piutang_Toko' => 'kd_rek']],
            [['Bayar_Pemesanan_Obat'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Bayar_Pemesanan_Obat' => 'kd_rek']],
            [['Kontra_Piutang_Toko'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kontra_Piutang_Toko' => 'kd_rek']],
            [['Retur_Beli_Toko'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Retur_Beli_Toko' => 'kd_rek']],
            [['Kontra_Retur_Beli_Toko'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kontra_Retur_Beli_Toko' => 'kd_rek']],
            [['Retur_Beli_Non_Medis'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Retur_Beli_Non_Medis' => 'kd_rek']],
            [['Kontra_Retur_Beli_Non_Medis'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kontra_Retur_Beli_Non_Medis' => 'kd_rek']],
            [['Retur_Jual_Toko'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Retur_Jual_Toko' => 'kd_rek']],
            [['Kontra_Retur_Jual_Toko'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kontra_Retur_Jual_Toko' => 'kd_rek']],
            [['Retur_Piutang_Toko'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Retur_Piutang_Toko' => 'kd_rek']],
            [['Kontra_Retur_Piutang_Toko'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kontra_Retur_Piutang_Toko' => 'kd_rek']],
            [['Kerugian_Klaim_BPJS_RVP'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kerugian_Klaim_BPJS_RVP' => 'kd_rek']],
            [['Penjualan_Obat'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Penjualan_Obat' => 'kd_rek']],
            [['Lebih_Bayar_Klaim_BPJS_RVP'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Lebih_Bayar_Klaim_BPJS_RVP' => 'kd_rek']],
            [['Piutang_BPJS_RVP'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Piutang_BPJS_RVP' => 'kd_rek']],
            [['Kontra_Penerimaan_AsetInventaris'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kontra_Penerimaan_AsetInventaris' => 'kd_rek']],
            [['Kontra_Hibah_Aset'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kontra_Hibah_Aset' => 'kd_rek']],
            [['Hibah_Non_Medis'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Hibah_Non_Medis' => 'kd_rek']],
            [['Kontra_Hibah_Non_Medis'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kontra_Hibah_Non_Medis' => 'kd_rek']],
            [['Bayar_JM_Dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Bayar_JM_Dokter' => 'kd_rek']],
            [['PPN_Masukan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['PPN_Masukan' => 'kd_rek']],
            [['Pengadaan_Dapur'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Pengadaan_Dapur' => 'kd_rek']],
            [['Stok_Keluar_Dapur'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Stok_Keluar_Dapur' => 'kd_rek']],
            [['Piutang_Obat'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Piutang_Obat' => 'kd_rek']],
            [['Kontra_Stok_Keluar_Dapur'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kontra_Stok_Keluar_Dapur' => 'kd_rek']],
            [['PPN_Keluaran'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['PPN_Keluaran' => 'kd_rek']],
            [['Diskon_Piutang'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Diskon_Piutang' => 'kd_rek']],
            [['Piutang_Tidak_Terbayar'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Piutang_Tidak_Terbayar' => 'kd_rek']],
            [['Lebih_Bayar_Piutang'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Lebih_Bayar_Piutang' => 'kd_rek']],
            [['Kontra_Piutang_Obat'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kontra_Piutang_Obat' => 'kd_rek']],
            [['Retur_Ke_Suplayer'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Retur_Ke_Suplayer' => 'kd_rek']],
            [['Kontra_Retur_Ke_Suplayer'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kontra_Retur_Ke_Suplayer' => 'kd_rek']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Pengadaan_Obat' => 'Pengadaan Obat',
            'Pemesanan_Obat' => 'Pemesanan Obat',
            'Kontra_Pemesanan_Obat' => 'Kontra Pemesanan Obat',
            'Bayar_Pemesanan_Obat' => 'Bayar Pemesanan Obat',
            'Penjualan_Obat' => 'Penjualan Obat',
            'Piutang_Obat' => 'Piutang Obat',
            'Kontra_Piutang_Obat' => 'Kontra Piutang Obat',
            'Retur_Ke_Suplayer' => 'Retur Ke Suplayer',
            'Kontra_Retur_Ke_Suplayer' => 'Kontra Retur Ke Suplayer',
            'Retur_Dari_pembeli' => 'Retur Dari Pembeli',
            'Kontra_Retur_Dari_Pembeli' => 'Kontra Retur Dari Pembeli',
            'Retur_Piutang_Obat' => 'Retur Piutang Obat',
            'Kontra_Retur_Piutang_Obat' => 'Kontra Retur Piutang Obat',
            'Pengadaan_Ipsrs' => 'Pengadaan Ipsrs',
            'Stok_Keluar_Ipsrs' => 'Stok Keluar Ipsrs',
            'Kontra_Stok_Keluar_Ipsrs' => 'Kontra Stok Keluar Ipsrs',
            'Bayar_Piutang_Pasien' => 'Bayar Piutang Pasien',
            'Pengambilan_Utd' => 'Pengambilan Utd',
            'Kontra_Pengambilan_Utd' => 'Kontra Pengambilan Utd',
            'Pengambilan_Penunjang_Utd' => 'Pengambilan Penunjang Utd',
            'Kontra_Pengambilan_Penunjang_Utd' => 'Kontra Pengambilan Penunjang Utd',
            'Penyerahan_Darah' => 'Penyerahan Darah',
            'Stok_Keluar_Medis' => 'Stok Keluar Medis',
            'Kontra_Stok_Keluar_Medis' => 'Kontra Stok Keluar Medis',
            'HPP_Obat_Jual_Bebas' => 'Hpp Obat Jual Bebas',
            'Persediaan_Obat_Jual_Bebas' => 'Persediaan Obat Jual Bebas',
            'Penerimaan_NonMedis' => 'Penerimaan Non Medis',
            'Kontra_Penerimaan_NonMedis' => 'Kontra Penerimaan Non Medis',
            'Bayar_Pemesanan_Non_Medis' => 'Bayar Pemesanan Non Medis',
            'Hibah_Obat' => 'Hibah Obat',
            'Kontra_Hibah_Obat' => 'Kontra Hibah Obat',
            'Penerimaan_Toko' => 'Penerimaan Toko',
            'Kontra_Penerimaan_Toko' => 'Kontra Penerimaan Toko',
            'Pengadaan_Toko' => 'Pengadaan Toko',
            'Bayar_Pemesanan_Toko' => 'Bayar Pemesanan Toko',
            'Penjualan_Toko' => 'Penjualan Toko',
            'HPP_Barang_Toko' => 'Hpp Barang Toko',
            'Persediaan_Barang_Toko' => 'Persediaan Barang Toko',
            'Piutang_Toko' => 'Piutang Toko',
            'Kontra_Piutang_Toko' => 'Kontra Piutang Toko',
            'Retur_Beli_Toko' => 'Retur Beli Toko',
            'Kontra_Retur_Beli_Toko' => 'Kontra Retur Beli Toko',
            'Retur_Beli_Non_Medis' => 'Retur Beli Non Medis',
            'Kontra_Retur_Beli_Non_Medis' => 'Kontra Retur Beli Non Medis',
            'Retur_Jual_Toko' => 'Retur Jual Toko',
            'Kontra_Retur_Jual_Toko' => 'Kontra Retur Jual Toko',
            'Retur_Piutang_Toko' => 'Retur Piutang Toko',
            'Kontra_Retur_Piutang_Toko' => 'Kontra Retur Piutang Toko',
            'Kerugian_Klaim_BPJS_RVP' => 'Kerugian Klaim Bpjs Rvp',
            'Lebih_Bayar_Klaim_BPJS_RVP' => 'Lebih Bayar Klaim Bpjs Rvp',
            'Piutang_BPJS_RVP' => 'Piutang Bpjs Rvp',
            'Kontra_Penerimaan_AsetInventaris' => 'Kontra Penerimaan Aset Inventaris',
            'Kontra_Hibah_Aset' => 'Kontra Hibah Aset',
            'Hibah_Non_Medis' => 'Hibah Non Medis',
            'Kontra_Hibah_Non_Medis' => 'Kontra Hibah Non Medis',
            'Bayar_JM_Dokter' => 'Bayar Jm Dokter',
            'PPN_Masukan' => 'Ppn Masukan',
            'Pengadaan_Dapur' => 'Pengadaan Dapur',
            'Stok_Keluar_Dapur' => 'Stok Keluar Dapur',
            'Kontra_Stok_Keluar_Dapur' => 'Kontra Stok Keluar Dapur',
            'PPN_Keluaran' => 'Ppn Keluaran',
            'Diskon_Piutang' => 'Diskon Piutang',
            'Piutang_Tidak_Terbayar' => 'Piutang Tidak Terbayar',
            'Lebih_Bayar_Piutang' => 'Lebih Bayar Piutang',
        ];
    }

    /**
     * Gets query for [[BayarJMDokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarJMDokter()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Bayar_JM_Dokter']);
    }

    /**
     * Gets query for [[BayarPemesananNonMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPemesananNonMedis()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Bayar_Pemesanan_Non_Medis']);
    }

    /**
     * Gets query for [[BayarPemesananObat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPemesananObat()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Bayar_Pemesanan_Obat']);
    }

    /**
     * Gets query for [[BayarPemesananToko]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPemesananToko()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Bayar_Pemesanan_Toko']);
    }

    /**
     * Gets query for [[BayarPiutangPasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPiutangPasien()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Bayar_Piutang_Pasien']);
    }

    /**
     * Gets query for [[DiskonPiutang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDiskonPiutang()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Diskon_Piutang']);
    }

    /**
     * Gets query for [[HPPBarangToko]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHPPBarangToko()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'HPP_Barang_Toko']);
    }

    /**
     * Gets query for [[HPPObatJualBebas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHPPObatJualBebas()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'HPP_Obat_Jual_Bebas']);
    }

    /**
     * Gets query for [[HibahNonMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHibahNonMedis()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Hibah_Non_Medis']);
    }

    /**
     * Gets query for [[HibahObat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHibahObat()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Hibah_Obat']);
    }

    /**
     * Gets query for [[KerugianKlaimBPJSRVP]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKerugianKlaimBPJSRVP()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kerugian_Klaim_BPJS_RVP']);
    }

    /**
     * Gets query for [[KontraHibahAset]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKontraHibahAset()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kontra_Hibah_Aset']);
    }

    /**
     * Gets query for [[KontraHibahNonMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKontraHibahNonMedis()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kontra_Hibah_Non_Medis']);
    }

    /**
     * Gets query for [[KontraHibahObat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKontraHibahObat()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kontra_Hibah_Obat']);
    }

    /**
     * Gets query for [[KontraPemesananObat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKontraPemesananObat()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kontra_Pemesanan_Obat']);
    }

    /**
     * Gets query for [[KontraPenerimaanAsetInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKontraPenerimaanAsetInventaris()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kontra_Penerimaan_AsetInventaris']);
    }

    /**
     * Gets query for [[KontraPenerimaanNonMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKontraPenerimaanNonMedis()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kontra_Penerimaan_NonMedis']);
    }

    /**
     * Gets query for [[KontraPenerimaanToko]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKontraPenerimaanToko()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kontra_Penerimaan_Toko']);
    }

    /**
     * Gets query for [[KontraPengambilanPenunjangUtd]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKontraPengambilanPenunjangUtd()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kontra_Pengambilan_Penunjang_Utd']);
    }

    /**
     * Gets query for [[KontraPengambilanUtd]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKontraPengambilanUtd()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kontra_Pengambilan_Utd']);
    }

    /**
     * Gets query for [[KontraPiutangObat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKontraPiutangObat()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kontra_Piutang_Obat']);
    }

    /**
     * Gets query for [[KontraPiutangToko]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKontraPiutangToko()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kontra_Piutang_Toko']);
    }

    /**
     * Gets query for [[KontraReturBeliNonMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKontraReturBeliNonMedis()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kontra_Retur_Beli_Non_Medis']);
    }

    /**
     * Gets query for [[KontraReturBeliToko]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKontraReturBeliToko()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kontra_Retur_Beli_Toko']);
    }

    /**
     * Gets query for [[KontraReturDariPembeli]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKontraReturDariPembeli()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kontra_Retur_Dari_Pembeli']);
    }

    /**
     * Gets query for [[KontraReturJualToko]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKontraReturJualToko()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kontra_Retur_Jual_Toko']);
    }

    /**
     * Gets query for [[KontraReturKeSuplayer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKontraReturKeSuplayer()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kontra_Retur_Ke_Suplayer']);
    }

    /**
     * Gets query for [[KontraReturPiutangObat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKontraReturPiutangObat()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kontra_Retur_Piutang_Obat']);
    }

    /**
     * Gets query for [[KontraReturPiutangToko]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKontraReturPiutangToko()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kontra_Retur_Piutang_Toko']);
    }

    /**
     * Gets query for [[KontraStokKeluarDapur]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKontraStokKeluarDapur()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kontra_Stok_Keluar_Dapur']);
    }

    /**
     * Gets query for [[KontraStokKeluarIpsrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKontraStokKeluarIpsrs()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kontra_Stok_Keluar_Ipsrs']);
    }

    /**
     * Gets query for [[KontraStokKeluarMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKontraStokKeluarMedis()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kontra_Stok_Keluar_Medis']);
    }

    /**
     * Gets query for [[LebihBayarKlaimBPJSRVP]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLebihBayarKlaimBPJSRVP()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Lebih_Bayar_Klaim_BPJS_RVP']);
    }

    /**
     * Gets query for [[LebihBayarPiutang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLebihBayarPiutang()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Lebih_Bayar_Piutang']);
    }

    /**
     * Gets query for [[PPNKeluaran]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPPNKeluaran()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'PPN_Keluaran']);
    }

    /**
     * Gets query for [[PPNMasukan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPPNMasukan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'PPN_Masukan']);
    }

    /**
     * Gets query for [[PemesananObat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemesananObat()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Pemesanan_Obat']);
    }

    /**
     * Gets query for [[PenerimaanNonMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenerimaanNonMedis()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Penerimaan_NonMedis']);
    }

    /**
     * Gets query for [[PenerimaanToko]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenerimaanToko()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Penerimaan_Toko']);
    }

    /**
     * Gets query for [[PengadaanDapur]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengadaanDapur()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Pengadaan_Dapur']);
    }

    /**
     * Gets query for [[PengadaanIpsrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengadaanIpsrs()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Pengadaan_Ipsrs']);
    }

    /**
     * Gets query for [[PengadaanObat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengadaanObat()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Pengadaan_Obat']);
    }

    /**
     * Gets query for [[PengadaanToko]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengadaanToko()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Pengadaan_Toko']);
    }

    /**
     * Gets query for [[PengambilanPenunjangUtd]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengambilanPenunjangUtd()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Pengambilan_Penunjang_Utd']);
    }

    /**
     * Gets query for [[PengambilanUtd]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengambilanUtd()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Pengambilan_Utd']);
    }

    /**
     * Gets query for [[PenjualanObat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenjualanObat()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Penjualan_Obat']);
    }

    /**
     * Gets query for [[PenjualanToko]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenjualanToko()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Penjualan_Toko']);
    }

    /**
     * Gets query for [[PenyerahanDarah]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenyerahanDarah()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Penyerahan_Darah']);
    }

    /**
     * Gets query for [[PersediaanBarangToko]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersediaanBarangToko()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Persediaan_Barang_Toko']);
    }

    /**
     * Gets query for [[PersediaanObatJualBebas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersediaanObatJualBebas()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Persediaan_Obat_Jual_Bebas']);
    }

    /**
     * Gets query for [[PiutangBPJSRVP]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPiutangBPJSRVP()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Piutang_BPJS_RVP']);
    }

    /**
     * Gets query for [[PiutangObat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPiutangObat()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Piutang_Obat']);
    }

    /**
     * Gets query for [[PiutangTidakTerbayar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPiutangTidakTerbayar()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Piutang_Tidak_Terbayar']);
    }

    /**
     * Gets query for [[PiutangToko]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPiutangToko()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Piutang_Toko']);
    }

    /**
     * Gets query for [[ReturBeliNonMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturBeliNonMedis()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Retur_Beli_Non_Medis']);
    }

    /**
     * Gets query for [[ReturBeliToko]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturBeliToko()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Retur_Beli_Toko']);
    }

    /**
     * Gets query for [[ReturDariPembeli]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturDariPembeli()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Retur_Dari_pembeli']);
    }

    /**
     * Gets query for [[ReturJualToko]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturJualToko()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Retur_Jual_Toko']);
    }

    /**
     * Gets query for [[ReturKeSuplayer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturKeSuplayer()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Retur_Ke_Suplayer']);
    }

    /**
     * Gets query for [[ReturPiutangObat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturPiutangObat()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Retur_Piutang_Obat']);
    }

    /**
     * Gets query for [[ReturPiutangToko]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturPiutangToko()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Retur_Piutang_Toko']);
    }

    /**
     * Gets query for [[StokKeluarDapur]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStokKeluarDapur()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Stok_Keluar_Dapur']);
    }

    /**
     * Gets query for [[StokKeluarIpsrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStokKeluarIpsrs()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Stok_Keluar_Ipsrs']);
    }

    /**
     * Gets query for [[StokKeluarMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStokKeluarMedis()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Stok_Keluar_Medis']);
    }
}
