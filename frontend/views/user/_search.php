<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\UserSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'penyakit') ?>

    <?= $form->field($model, 'obat_penyakit') ?>

    <?= $form->field($model, 'dokter') ?>

    <?php // echo $form->field($model, 'jadwal_praktek') ?>

    <?php // echo $form->field($model, 'petugas') ?>

    <?php // echo $form->field($model, 'pasien') ?>

    <?php // echo $form->field($model, 'registrasi') ?>

    <?php // echo $form->field($model, 'tindakan_ralan') ?>

    <?php // echo $form->field($model, 'kamar_inap') ?>

    <?php // echo $form->field($model, 'tindakan_ranap') ?>

    <?php // echo $form->field($model, 'operasi') ?>

    <?php // echo $form->field($model, 'rujukan_keluar') ?>

    <?php // echo $form->field($model, 'rujukan_masuk') ?>

    <?php // echo $form->field($model, 'beri_obat') ?>

    <?php // echo $form->field($model, 'resep_pulang') ?>

    <?php // echo $form->field($model, 'pasien_meninggal') ?>

    <?php // echo $form->field($model, 'diet_pasien') ?>

    <?php // echo $form->field($model, 'kelahiran_bayi') ?>

    <?php // echo $form->field($model, 'periksa_lab') ?>

    <?php // echo $form->field($model, 'periksa_radiologi') ?>

    <?php // echo $form->field($model, 'kasir_ralan') ?>

    <?php // echo $form->field($model, 'deposit_pasien') ?>

    <?php // echo $form->field($model, 'piutang_pasien') ?>

    <?php // echo $form->field($model, 'peminjaman_berkas') ?>

    <?php // echo $form->field($model, 'barcode') ?>

    <?php // echo $form->field($model, 'presensi_harian') ?>

    <?php // echo $form->field($model, 'presensi_bulanan') ?>

    <?php // echo $form->field($model, 'pegawai_admin') ?>

    <?php // echo $form->field($model, 'pegawai_user') ?>

    <?php // echo $form->field($model, 'suplier') ?>

    <?php // echo $form->field($model, 'satuan_barang') ?>

    <?php // echo $form->field($model, 'konversi_satuan') ?>

    <?php // echo $form->field($model, 'jenis_barang') ?>

    <?php // echo $form->field($model, 'obat') ?>

    <?php // echo $form->field($model, 'stok_opname_obat') ?>

    <?php // echo $form->field($model, 'stok_obat_pasien') ?>

    <?php // echo $form->field($model, 'pengadaan_obat') ?>

    <?php // echo $form->field($model, 'pemesanan_obat') ?>

    <?php // echo $form->field($model, 'penjualan_obat') ?>

    <?php // echo $form->field($model, 'piutang_obat') ?>

    <?php // echo $form->field($model, 'retur_ke_suplier') ?>

    <?php // echo $form->field($model, 'retur_dari_pembeli') ?>

    <?php // echo $form->field($model, 'retur_obat_ranap') ?>

    <?php // echo $form->field($model, 'retur_piutang_pasien') ?>

    <?php // echo $form->field($model, 'keuntungan_penjualan') ?>

    <?php // echo $form->field($model, 'keuntungan_beri_obat') ?>

    <?php // echo $form->field($model, 'sirkulasi_obat') ?>

    <?php // echo $form->field($model, 'ipsrs_barang') ?>

    <?php // echo $form->field($model, 'ipsrs_pengadaan_barang') ?>

    <?php // echo $form->field($model, 'ipsrs_stok_keluar') ?>

    <?php // echo $form->field($model, 'ipsrs_rekap_pengadaan') ?>

    <?php // echo $form->field($model, 'ipsrs_rekap_stok_keluar') ?>

    <?php // echo $form->field($model, 'ipsrs_pengeluaran_harian') ?>

    <?php // echo $form->field($model, 'inventaris_jenis') ?>

    <?php // echo $form->field($model, 'inventaris_kategori') ?>

    <?php // echo $form->field($model, 'inventaris_merk') ?>

    <?php // echo $form->field($model, 'inventaris_ruang') ?>

    <?php // echo $form->field($model, 'inventaris_produsen') ?>

    <?php // echo $form->field($model, 'inventaris_koleksi') ?>

    <?php // echo $form->field($model, 'inventaris_inventaris') ?>

    <?php // echo $form->field($model, 'inventaris_sirkulasi') ?>

    <?php // echo $form->field($model, 'parkir_jenis') ?>

    <?php // echo $form->field($model, 'parkir_in') ?>

    <?php // echo $form->field($model, 'parkir_out') ?>

    <?php // echo $form->field($model, 'parkir_rekap_harian') ?>

    <?php // echo $form->field($model, 'parkir_rekap_bulanan') ?>

    <?php // echo $form->field($model, 'informasi_kamar') ?>

    <?php // echo $form->field($model, 'harian_tindakan_poli') ?>

    <?php // echo $form->field($model, 'obat_per_poli') ?>

    <?php // echo $form->field($model, 'obat_per_kamar') ?>

    <?php // echo $form->field($model, 'obat_per_dokter_ralan') ?>

    <?php // echo $form->field($model, 'obat_per_dokter_ranap') ?>

    <?php // echo $form->field($model, 'harian_dokter') ?>

    <?php // echo $form->field($model, 'bulanan_dokter') ?>

    <?php // echo $form->field($model, 'harian_paramedis') ?>

    <?php // echo $form->field($model, 'bulanan_paramedis') ?>

    <?php // echo $form->field($model, 'pembayaran_ralan') ?>

    <?php // echo $form->field($model, 'pembayaran_ranap') ?>

    <?php // echo $form->field($model, 'rekap_pembayaran_ralan') ?>

    <?php // echo $form->field($model, 'rekap_pembayaran_ranap') ?>

    <?php // echo $form->field($model, 'tagihan_masuk') ?>

    <?php // echo $form->field($model, 'tambahan_biaya') ?>

    <?php // echo $form->field($model, 'potongan_biaya') ?>

    <?php // echo $form->field($model, 'resep_obat') ?>

    <?php // echo $form->field($model, 'resume_pasien') ?>

    <?php // echo $form->field($model, 'penyakit_ralan') ?>

    <?php // echo $form->field($model, 'penyakit_ranap') ?>

    <?php // echo $form->field($model, 'kamar') ?>

    <?php // echo $form->field($model, 'tarif_ralan') ?>

    <?php // echo $form->field($model, 'tarif_ranap') ?>

    <?php // echo $form->field($model, 'tarif_lab') ?>

    <?php // echo $form->field($model, 'tarif_radiologi') ?>

    <?php // echo $form->field($model, 'tarif_operasi') ?>

    <?php // echo $form->field($model, 'akun_rekening') ?>

    <?php // echo $form->field($model, 'rekening_tahun') ?>

    <?php // echo $form->field($model, 'posting_jurnal') ?>

    <?php // echo $form->field($model, 'buku_besar') ?>

    <?php // echo $form->field($model, 'cashflow') ?>

    <?php // echo $form->field($model, 'keuangan') ?>

    <?php // echo $form->field($model, 'pengeluaran') ?>

    <?php // echo $form->field($model, 'setup_pjlab') ?>

    <?php // echo $form->field($model, 'setup_otolokasi') ?>

    <?php // echo $form->field($model, 'setup_jam_kamin') ?>

    <?php // echo $form->field($model, 'setup_embalase') ?>

    <?php // echo $form->field($model, 'tracer_login') ?>

    <?php // echo $form->field($model, 'display') ?>

    <?php // echo $form->field($model, 'set_harga_obat') ?>

    <?php // echo $form->field($model, 'set_penggunaan_tarif') ?>

    <?php // echo $form->field($model, 'set_oto_ralan') ?>

    <?php // echo $form->field($model, 'biaya_harian') ?>

    <?php // echo $form->field($model, 'biaya_masuk_sekali') ?>

    <?php // echo $form->field($model, 'set_no_rm') ?>

    <?php // echo $form->field($model, 'billing_ralan') ?>

    <?php // echo $form->field($model, 'billing_ranap') ?>

    <?php // echo $form->field($model, 'jm_ranap_dokter') ?>

    <?php // echo $form->field($model, 'igd') ?>

    <?php // echo $form->field($model, 'barcoderalan') ?>

    <?php // echo $form->field($model, 'barcoderanap') ?>

    <?php // echo $form->field($model, 'set_harga_obat_ralan') ?>

    <?php // echo $form->field($model, 'set_harga_obat_ranap') ?>

    <?php // echo $form->field($model, 'penyakit_pd3i') ?>

    <?php // echo $form->field($model, 'surveilans_pd3i') ?>

    <?php // echo $form->field($model, 'surveilans_ralan') ?>

    <?php // echo $form->field($model, 'diagnosa_pasien') ?>

    <?php // echo $form->field($model, 'surveilans_ranap') ?>

    <?php // echo $form->field($model, 'pny_takmenular_ranap') ?>

    <?php // echo $form->field($model, 'pny_takmenular_ralan') ?>

    <?php // echo $form->field($model, 'kunjungan_ralan') ?>

    <?php // echo $form->field($model, 'rl32') ?>

    <?php // echo $form->field($model, 'rl33') ?>

    <?php // echo $form->field($model, 'rl37') ?>

    <?php // echo $form->field($model, 'rl38') ?>

    <?php // echo $form->field($model, 'harian_tindakan_dokter') ?>

    <?php // echo $form->field($model, 'sms') ?>

    <?php // echo $form->field($model, 'sidikjari') ?>

    <?php // echo $form->field($model, 'jam_masuk') ?>

    <?php // echo $form->field($model, 'jadwal_pegawai') ?>

    <?php // echo $form->field($model, 'parkir_barcode') ?>

    <?php // echo $form->field($model, 'set_nota') ?>

    <?php // echo $form->field($model, 'dpjp_ranap') ?>

    <?php // echo $form->field($model, 'mutasi_barang') ?>

    <?php // echo $form->field($model, 'rl34') ?>

    <?php // echo $form->field($model, 'rl36') ?>

    <?php // echo $form->field($model, 'fee_visit_dokter') ?>

    <?php // echo $form->field($model, 'fee_bacaan_ekg') ?>

    <?php // echo $form->field($model, 'fee_rujukan_rontgen') ?>

    <?php // echo $form->field($model, 'fee_rujukan_ranap') ?>

    <?php // echo $form->field($model, 'fee_ralan') ?>

    <?php // echo $form->field($model, 'akun_bayar') ?>

    <?php // echo $form->field($model, 'bayar_pemesanan_obat') ?>

    <?php // echo $form->field($model, 'obat_per_dokter_peresep') ?>

    <?php // echo $form->field($model, 'ipsrs_jenis_barang') ?>

    <?php // echo $form->field($model, 'pemasukan_lain') ?>

    <?php // echo $form->field($model, 'pengaturan_rekening') ?>

    <?php // echo $form->field($model, 'closing_kasir') ?>

    <?php // echo $form->field($model, 'keterlambatan_presensi') ?>

    <?php // echo $form->field($model, 'set_harga_kamar') ?>

    <?php // echo $form->field($model, 'rekap_per_shift') ?>

    <?php // echo $form->field($model, 'bpjs_cek_nik') ?>

    <?php // echo $form->field($model, 'bpjs_cek_kartu') ?>

    <?php // echo $form->field($model, 'bpjs_cek_riwayat') ?>

    <?php // echo $form->field($model, 'obat_per_cara_bayar') ?>

    <?php // echo $form->field($model, 'kunjungan_ranap') ?>

    <?php // echo $form->field($model, 'bayar_piutang') ?>

    <?php // echo $form->field($model, 'payment_point') ?>

    <?php // echo $form->field($model, 'bpjs_cek_nomor_rujukan') ?>

    <?php // echo $form->field($model, 'icd9') ?>

    <?php // echo $form->field($model, 'darurat_stok') ?>

    <?php // echo $form->field($model, 'retensi_rm') ?>

    <?php // echo $form->field($model, 'temporary_presensi') ?>

    <?php // echo $form->field($model, 'jurnal_harian') ?>

    <?php // echo $form->field($model, 'sirkulasi_obat2') ?>

    <?php // echo $form->field($model, 'edit_registrasi') ?>

    <?php // echo $form->field($model, 'bpjs_referensi_diagnosa') ?>

    <?php // echo $form->field($model, 'bpjs_referensi_poli') ?>

    <?php // echo $form->field($model, 'industrifarmasi') ?>

    <?php // echo $form->field($model, 'harian_js') ?>

    <?php // echo $form->field($model, 'bulanan_js') ?>

    <?php // echo $form->field($model, 'harian_paket_bhp') ?>

    <?php // echo $form->field($model, 'bulanan_paket_bhp') ?>

    <?php // echo $form->field($model, 'piutang_pasien2') ?>

    <?php // echo $form->field($model, 'bpjs_referensi_faskes') ?>

    <?php // echo $form->field($model, 'bpjs_sep') ?>

    <?php // echo $form->field($model, 'pengambilan_utd') ?>

    <?php // echo $form->field($model, 'tarif_utd') ?>

    <?php // echo $form->field($model, 'pengambilan_utd2') ?>

    <?php // echo $form->field($model, 'utd_medis_rusak') ?>

    <?php // echo $form->field($model, 'pengambilan_penunjang_utd') ?>

    <?php // echo $form->field($model, 'pengambilan_penunjang_utd2') ?>

    <?php // echo $form->field($model, 'utd_penunjang_rusak') ?>

    <?php // echo $form->field($model, 'suplier_penunjang') ?>

    <?php // echo $form->field($model, 'utd_donor') ?>

    <?php // echo $form->field($model, 'bpjs_monitoring_klaim') ?>

    <?php // echo $form->field($model, 'utd_cekal_darah') ?>

    <?php // echo $form->field($model, 'utd_komponen_darah') ?>

    <?php // echo $form->field($model, 'utd_stok_darah') ?>

    <?php // echo $form->field($model, 'utd_pemisahan_darah') ?>

    <?php // echo $form->field($model, 'harian_kamar') ?>

    <?php // echo $form->field($model, 'rincian_piutang_pasien') ?>

    <?php // echo $form->field($model, 'keuntungan_beri_obat_nonpiutang') ?>

    <?php // echo $form->field($model, 'reklasifikasi_ralan') ?>

    <?php // echo $form->field($model, 'reklasifikasi_ranap') ?>

    <?php // echo $form->field($model, 'utd_penyerahan_darah') ?>

    <?php // echo $form->field($model, 'hutang_obat') ?>

    <?php // echo $form->field($model, 'riwayat_obat_alkes_bhp') ?>

    <?php // echo $form->field($model, 'sensus_harian_poli') ?>

    <?php // echo $form->field($model, 'rl4a') ?>

    <?php // echo $form->field($model, 'aplicare_referensi_kamar') ?>

    <?php // echo $form->field($model, 'aplicare_ketersediaan_kamar') ?>

    <?php // echo $form->field($model, 'inacbg_klaim_baru_otomatis') ?>

    <?php // echo $form->field($model, 'inacbg_klaim_baru_manual') ?>

    <?php // echo $form->field($model, 'inacbg_coder_nik') ?>

    <?php // echo $form->field($model, 'mutasi_berkas') ?>

    <?php // echo $form->field($model, 'akun_piutang') ?>

    <?php // echo $form->field($model, 'harian_kso') ?>

    <?php // echo $form->field($model, 'bulanan_kso') ?>

    <?php // echo $form->field($model, 'harian_menejemen') ?>

    <?php // echo $form->field($model, 'bulanan_menejemen') ?>

    <?php // echo $form->field($model, 'inhealth_cek_eligibilitas') ?>

    <?php // echo $form->field($model, 'inhealth_referensi_jenpel_ruang_rawat') ?>

    <?php // echo $form->field($model, 'inhealth_referensi_poli') ?>

    <?php // echo $form->field($model, 'inhealth_referensi_faskes') ?>

    <?php // echo $form->field($model, 'inhealth_sjp') ?>

    <?php // echo $form->field($model, 'piutang_ralan') ?>

    <?php // echo $form->field($model, 'piutang_ranap') ?>

    <?php // echo $form->field($model, 'detail_piutang_penjab') ?>

    <?php // echo $form->field($model, 'lama_pelayanan_ralan') ?>

    <?php // echo $form->field($model, 'catatan_pasien') ?>

    <?php // echo $form->field($model, 'rl4b') ?>

    <?php // echo $form->field($model, 'rl4asebab') ?>

    <?php // echo $form->field($model, 'rl4bsebab') ?>

    <?php // echo $form->field($model, 'data_HAIs') ?>

    <?php // echo $form->field($model, 'harian_HAIs') ?>

    <?php // echo $form->field($model, 'bulanan_HAIs') ?>

    <?php // echo $form->field($model, 'hitung_bor') ?>

    <?php // echo $form->field($model, 'perusahaan_pasien') ?>

    <?php // echo $form->field($model, 'resep_dokter') ?>

    <?php // echo $form->field($model, 'lama_pelayanan_apotek') ?>

    <?php // echo $form->field($model, 'hitung_alos') ?>

    <?php // echo $form->field($model, 'detail_tindakan') ?>

    <?php // echo $form->field($model, 'rujukan_poli_internal') ?>

    <?php // echo $form->field($model, 'rekap_poli_anak') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_poli') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_perdokter') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_perpekerjaan') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_perpendidikan') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_pertahun') ?>

    <?php // echo $form->field($model, 'berkas_digital_perawatan') ?>

    <?php // echo $form->field($model, 'penyakit_menular_ranap') ?>

    <?php // echo $form->field($model, 'penyakit_menular_ralan') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_perbulan') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_pertanggal') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_demografi') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_statusdaftartahun') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_statusdaftartahun2') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_statusdaftarbulan') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_statusdaftarbulan2') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_statusdaftartanggal') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_statusdaftartanggal2') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_statusbataltahun') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_statusbatalbulan') ?>

    <?php // echo $form->field($model, 'pcare_cek_penyakit') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_statusbataltanggal') ?>

    <?php // echo $form->field($model, 'kategori_barang') ?>

    <?php // echo $form->field($model, 'golongan_barang') ?>

    <?php // echo $form->field($model, 'pemberian_obat_pertanggal') ?>

    <?php // echo $form->field($model, 'penjualan_obat_pertanggal') ?>

    <?php // echo $form->field($model, 'pcare_cek_kesadaran') ?>

    <?php // echo $form->field($model, 'pembatalan_periksa_dokter') ?>

    <?php // echo $form->field($model, 'pembayaran_per_unit') ?>

    <?php // echo $form->field($model, 'rekap_pembayaran_per_unit') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_percarabayar') ?>

    <?php // echo $form->field($model, 'ipsrs_pengadaan_pertanggal') ?>

    <?php // echo $form->field($model, 'ipsrs_stokkeluar_pertanggal') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_ranaptahun') ?>

    <?php // echo $form->field($model, 'pcare_cek_rujukan') ?>

    <?php // echo $form->field($model, 'grafik_lab_ralantahun') ?>

    <?php // echo $form->field($model, 'grafik_rad_ralantahun') ?>

    <?php // echo $form->field($model, 'cek_entry_ralan') ?>

    <?php // echo $form->field($model, 'inacbg_klaim_baru_manual2') ?>

    <?php // echo $form->field($model, 'permintaan_medis') ?>

    <?php // echo $form->field($model, 'rekap_permintaan_medis') ?>

    <?php // echo $form->field($model, 'surat_pemesanan_medis') ?>

    <?php // echo $form->field($model, 'permintaan_non_medis') ?>

    <?php // echo $form->field($model, 'rekap_permintaan_non_medis') ?>

    <?php // echo $form->field($model, 'surat_pemesanan_non_medis') ?>

    <?php // echo $form->field($model, 'grafik_per_perujuk') ?>

    <?php // echo $form->field($model, 'bpjs_cek_prosedur') ?>

    <?php // echo $form->field($model, 'bpjs_cek_kelas_rawat') ?>

    <?php // echo $form->field($model, 'bpjs_cek_dokter') ?>

    <?php // echo $form->field($model, 'bpjs_cek_spesialistik') ?>

    <?php // echo $form->field($model, 'bpjs_cek_ruangrawat') ?>

    <?php // echo $form->field($model, 'bpjs_cek_carakeluar') ?>

    <?php // echo $form->field($model, 'bpjs_cek_pasca_pulang') ?>

    <?php // echo $form->field($model, 'detail_tindakan_okvk') ?>

    <?php // echo $form->field($model, 'billing_parsial') ?>

    <?php // echo $form->field($model, 'bpjs_cek_nomor_rujukan_rs') ?>

    <?php // echo $form->field($model, 'bpjs_cek_rujukan_kartu_pcare') ?>

    <?php // echo $form->field($model, 'bpjs_cek_rujukan_kartu_rs') ?>

    <?php // echo $form->field($model, 'akses_depo_obat') ?>

    <?php // echo $form->field($model, 'bpjs_rujukan_keluar') ?>

    <?php // echo $form->field($model, 'grafik_lab_ralanbulan') ?>

    <?php // echo $form->field($model, 'pengeluaran_stok_apotek') ?>

    <?php // echo $form->field($model, 'grafik_rad_ralanbulan') ?>

    <?php // echo $form->field($model, 'detailjmdokter2') ?>

    <?php // echo $form->field($model, 'pengaduan_pasien') ?>

    <?php // echo $form->field($model, 'grafik_lab_ralanhari') ?>

    <?php // echo $form->field($model, 'grafik_rad_ralanhari') ?>

    <?php // echo $form->field($model, 'sensus_harian_ralan') ?>

    <?php // echo $form->field($model, 'metode_racik') ?>

    <?php // echo $form->field($model, 'pembayaran_akun_bayar') ?>

    <?php // echo $form->field($model, 'pengguna_obat_resep') ?>

    <?php // echo $form->field($model, 'rekap_pemesanan') ?>

    <?php // echo $form->field($model, 'master_berkas_pegawai') ?>

    <?php // echo $form->field($model, 'berkas_kepegawaian') ?>

    <?php // echo $form->field($model, 'riwayat_jabatan') ?>

    <?php // echo $form->field($model, 'riwayat_pendidikan') ?>

    <?php // echo $form->field($model, 'riwayat_naik_gaji') ?>

    <?php // echo $form->field($model, 'kegiatan_ilmiah') ?>

    <?php // echo $form->field($model, 'riwayat_penghargaan') ?>

    <?php // echo $form->field($model, 'riwayat_penelitian') ?>

    <?php // echo $form->field($model, 'penerimaan_non_medis') ?>

    <?php // echo $form->field($model, 'bayar_pesan_non_medis') ?>

    <?php // echo $form->field($model, 'hutang_barang_non_medis') ?>

    <?php // echo $form->field($model, 'rekap_pemesanan_non_medis') ?>

    <?php // echo $form->field($model, 'insiden_keselamatan') ?>

    <?php // echo $form->field($model, 'insiden_keselamatan_pasien') ?>

    <?php // echo $form->field($model, 'grafik_ikp_pertahun') ?>

    <?php // echo $form->field($model, 'grafik_ikp_perbulan') ?>

    <?php // echo $form->field($model, 'grafik_ikp_pertanggal') ?>

    <?php // echo $form->field($model, 'riwayat_data_batch') ?>

    <?php // echo $form->field($model, 'grafik_ikp_jenis') ?>

    <?php // echo $form->field($model, 'grafik_ikp_dampak') ?>

    <?php // echo $form->field($model, 'piutang_akun_piutang') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_per_agama') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_per_umur') ?>

    <?php // echo $form->field($model, 'suku_bangsa') ?>

    <?php // echo $form->field($model, 'bahasa_pasien') ?>

    <?php // echo $form->field($model, 'golongan_tni') ?>

    <?php // echo $form->field($model, 'satuan_tni') ?>

    <?php // echo $form->field($model, 'jabatan_tni') ?>

    <?php // echo $form->field($model, 'pangkat_tni') ?>

    <?php // echo $form->field($model, 'golongan_polri') ?>

    <?php // echo $form->field($model, 'satuan_polri') ?>

    <?php // echo $form->field($model, 'jabatan_polri') ?>

    <?php // echo $form->field($model, 'pangkat_polri') ?>

    <?php // echo $form->field($model, 'cacat_fisik') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_suku') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_bahasa') ?>

    <?php // echo $form->field($model, 'booking_operasi') ?>

    <?php // echo $form->field($model, 'mapping_poli_bpjs') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_per_cacat') ?>

    <?php // echo $form->field($model, 'barang_cssd') ?>

    <?php // echo $form->field($model, 'skdp_bpjs') ?>

    <?php // echo $form->field($model, 'booking_registrasi') ?>

    <?php // echo $form->field($model, 'bpjs_cek_propinsi') ?>

    <?php // echo $form->field($model, 'bpjs_cek_kabupaten') ?>

    <?php // echo $form->field($model, 'bpjs_cek_kecamatan') ?>

    <?php // echo $form->field($model, 'bpjs_cek_dokterdpjp') ?>

    <?php // echo $form->field($model, 'bpjs_cek_riwayat_rujukanrs') ?>

    <?php // echo $form->field($model, 'bpjs_cek_tanggal_rujukan') ?>

    <?php // echo $form->field($model, 'permintaan_lab') ?>

    <?php // echo $form->field($model, 'permintaan_radiologi') ?>

    <?php // echo $form->field($model, 'surat_indeks') ?>

    <?php // echo $form->field($model, 'surat_map') ?>

    <?php // echo $form->field($model, 'surat_almari') ?>

    <?php // echo $form->field($model, 'surat_rak') ?>

    <?php // echo $form->field($model, 'surat_ruang') ?>

    <?php // echo $form->field($model, 'surat_klasifikasi') ?>

    <?php // echo $form->field($model, 'surat_status') ?>

    <?php // echo $form->field($model, 'surat_sifat') ?>

    <?php // echo $form->field($model, 'surat_balas') ?>

    <?php // echo $form->field($model, 'surat_masuk') ?>

    <?php // echo $form->field($model, 'pcare_cek_dokter') ?>

    <?php // echo $form->field($model, 'pcare_cek_poli') ?>

    <?php // echo $form->field($model, 'pcare_cek_provider') ?>

    <?php // echo $form->field($model, 'pcare_cek_statuspulang') ?>

    <?php // echo $form->field($model, 'pcare_cek_spesialis') ?>

    <?php // echo $form->field($model, 'pcare_cek_subspesialis') ?>

    <?php // echo $form->field($model, 'pcare_cek_sarana') ?>

    <?php // echo $form->field($model, 'pcare_cek_khusus') ?>

    <?php // echo $form->field($model, 'pcare_cek_obat') ?>

    <?php // echo $form->field($model, 'pcare_cek_tindakan') ?>

    <?php // echo $form->field($model, 'pcare_cek_faskessubspesialis') ?>

    <?php // echo $form->field($model, 'pcare_cek_faskesalihrawat') ?>

    <?php // echo $form->field($model, 'pcare_cek_faskesthalasemia') ?>

    <?php // echo $form->field($model, 'pcare_mapping_obat') ?>

    <?php // echo $form->field($model, 'pcare_mapping_tindakan') ?>

    <?php // echo $form->field($model, 'pcare_club_prolanis') ?>

    <?php // echo $form->field($model, 'pcare_mapping_poli') ?>

    <?php // echo $form->field($model, 'pcare_kegiatan_kelompok') ?>

    <?php // echo $form->field($model, 'pcare_mapping_tindakan_ranap') ?>

    <?php // echo $form->field($model, 'pcare_peserta_kegiatan_kelompok') ?>

    <?php // echo $form->field($model, 'sirkulasi_obat3') ?>

    <?php // echo $form->field($model, 'bridging_pcare_daftar') ?>

    <?php // echo $form->field($model, 'pcare_mapping_dokter') ?>

    <?php // echo $form->field($model, 'ranap_per_ruang') ?>

    <?php // echo $form->field($model, 'penyakit_ranap_cara_bayar') ?>

    <?php // echo $form->field($model, 'anggota_militer_dirawat') ?>

    <?php // echo $form->field($model, 'set_input_parsial') ?>

    <?php // echo $form->field($model, 'lama_pelayanan_radiologi') ?>

    <?php // echo $form->field($model, 'lama_pelayanan_lab') ?>

    <?php // echo $form->field($model, 'bpjs_cek_sep') ?>

    <?php // echo $form->field($model, 'catatan_perawatan') ?>

    <?php // echo $form->field($model, 'surat_keluar') ?>

    <?php // echo $form->field($model, 'kegiatan_farmasi') ?>

    <?php // echo $form->field($model, 'stok_opname_logistik') ?>

    <?php // echo $form->field($model, 'sirkulasi_non_medis') ?>

    <?php // echo $form->field($model, 'rekap_lab_pertahun') ?>

    <?php // echo $form->field($model, 'perujuk_lab_pertahun') ?>

    <?php // echo $form->field($model, 'rekap_radiologi_pertahun') ?>

    <?php // echo $form->field($model, 'perujuk_radiologi_pertahun') ?>

    <?php // echo $form->field($model, 'jumlah_porsi_diet') ?>

    <?php // echo $form->field($model, 'jumlah_macam_diet') ?>

    <?php // echo $form->field($model, 'payment_point2') ?>

    <?php // echo $form->field($model, 'pembayaran_akun_bayar2') ?>

    <?php // echo $form->field($model, 'hapus_nota_salah') ?>

    <?php // echo $form->field($model, 'pengkajian_askep') ?>

    <?php // echo $form->field($model, 'hais_perbangsal') ?>

    <?php // echo $form->field($model, 'ppn_obat') ?>

    <?php // echo $form->field($model, 'saldo_akun_perbulan') ?>

    <?php // echo $form->field($model, 'display_apotek') ?>

    <?php // echo $form->field($model, 'sisrute_referensi_faskes') ?>

    <?php // echo $form->field($model, 'sisrute_referensi_alasanrujuk') ?>

    <?php // echo $form->field($model, 'sisrute_referensi_diagnosa') ?>

    <?php // echo $form->field($model, 'sisrute_rujukan_masuk') ?>

    <?php // echo $form->field($model, 'sisrute_rujukan_keluar') ?>

    <?php // echo $form->field($model, 'bpjs_cek_skdp') ?>

    <?php // echo $form->field($model, 'data_batch') ?>

    <?php // echo $form->field($model, 'kunjungan_permintaan_lab') ?>

    <?php // echo $form->field($model, 'kunjungan_permintaan_lab2') ?>

    <?php // echo $form->field($model, 'kunjungan_permintaan_radiologi') ?>

    <?php // echo $form->field($model, 'kunjungan_permintaan_radiologi2') ?>

    <?php // echo $form->field($model, 'pcare_pemberian_obat') ?>

    <?php // echo $form->field($model, 'pcare_pemberian_tindakan') ?>

    <?php // echo $form->field($model, 'pembayaran_akun_bayar3') ?>

    <?php // echo $form->field($model, 'password_asuransi') ?>

    <?php // echo $form->field($model, 'kemenkes_sitt') ?>

    <?php // echo $form->field($model, 'siranap_ketersediaan_kamar') ?>

    <?php // echo $form->field($model, 'grafik_tb_periodelaporan') ?>

    <?php // echo $form->field($model, 'grafik_tb_rujukan') ?>

    <?php // echo $form->field($model, 'grafik_tb_riwayat') ?>

    <?php // echo $form->field($model, 'grafik_tb_tipediagnosis') ?>

    <?php // echo $form->field($model, 'grafik_tb_statushiv') ?>

    <?php // echo $form->field($model, 'grafik_tb_skoringanak') ?>

    <?php // echo $form->field($model, 'grafik_tb_konfirmasiskoring5') ?>

    <?php // echo $form->field($model, 'grafik_tb_konfirmasiskoring6') ?>

    <?php // echo $form->field($model, 'grafik_tb_sumberobat') ?>

    <?php // echo $form->field($model, 'grafik_tb_hasilakhirpengobatan') ?>

    <?php // echo $form->field($model, 'grafik_tb_hasilteshiv') ?>

    <?php // echo $form->field($model, 'kadaluarsa_batch') ?>

    <?php // echo $form->field($model, 'sisa_stok') ?>

    <?php // echo $form->field($model, 'obat_per_resep') ?>

    <?php // echo $form->field($model, 'pemakaian_air_pdam') ?>

    <?php // echo $form->field($model, 'limbah_b3_medis') ?>

    <?php // echo $form->field($model, 'grafik_air_pdam_pertanggal') ?>

    <?php // echo $form->field($model, 'grafik_air_pdam_perbulan') ?>

    <?php // echo $form->field($model, 'grafik_limbahb3_pertanggal') ?>

    <?php // echo $form->field($model, 'grafik_limbahb3_perbulan') ?>

    <?php // echo $form->field($model, 'limbah_domestik') ?>

    <?php // echo $form->field($model, 'grafik_limbahdomestik_pertanggal') ?>

    <?php // echo $form->field($model, 'grafik_limbahdomestik_perbulan') ?>

    <?php // echo $form->field($model, 'mutu_air_limbah') ?>

    <?php // echo $form->field($model, 'pest_control') ?>

    <?php // echo $form->field($model, 'ruang_perpustakaan') ?>

    <?php // echo $form->field($model, 'kategori_perpustakaan') ?>

    <?php // echo $form->field($model, 'jenis_perpustakaan') ?>

    <?php // echo $form->field($model, 'pengarang_perpustakaan') ?>

    <?php // echo $form->field($model, 'penerbit_perpustakaan') ?>

    <?php // echo $form->field($model, 'koleksi_perpustakaan') ?>

    <?php // echo $form->field($model, 'inventaris_perpustakaan') ?>

    <?php // echo $form->field($model, 'set_peminjaman_perpustakaan') ?>

    <?php // echo $form->field($model, 'denda_perpustakaan') ?>

    <?php // echo $form->field($model, 'anggota_perpustakaan') ?>

    <?php // echo $form->field($model, 'peminjaman_perpustakaan') ?>

    <?php // echo $form->field($model, 'bayar_denda_perpustakaan') ?>

    <?php // echo $form->field($model, 'ebook_perpustakaan') ?>

    <?php // echo $form->field($model, 'jenis_cidera_k3rs') ?>

    <?php // echo $form->field($model, 'penyebab_k3rs') ?>

    <?php // echo $form->field($model, 'jenis_luka_k3rs') ?>

    <?php // echo $form->field($model, 'lokasi_kejadian_k3rs') ?>

    <?php // echo $form->field($model, 'dampak_cidera_k3rs') ?>

    <?php // echo $form->field($model, 'jenis_pekerjaan_k3rs') ?>

    <?php // echo $form->field($model, 'bagian_tubuh_k3rs') ?>

    <?php // echo $form->field($model, 'peristiwa_k3rs') ?>

    <?php // echo $form->field($model, 'grafik_k3_pertahun') ?>

    <?php // echo $form->field($model, 'grafik_k3_perbulan') ?>

    <?php // echo $form->field($model, 'grafik_k3_pertanggal') ?>

    <?php // echo $form->field($model, 'grafik_k3_perjeniscidera') ?>

    <?php // echo $form->field($model, 'grafik_k3_perpenyebab') ?>

    <?php // echo $form->field($model, 'grafik_k3_perjenisluka') ?>

    <?php // echo $form->field($model, 'grafik_k3_lokasikejadian') ?>

    <?php // echo $form->field($model, 'grafik_k3_dampakcidera') ?>

    <?php // echo $form->field($model, 'grafik_k3_perjenispekerjaan') ?>

    <?php // echo $form->field($model, 'grafik_k3_perbagiantubuh') ?>

    <?php // echo $form->field($model, 'jenis_cidera_k3rstahun') ?>

    <?php // echo $form->field($model, 'penyebab_k3rstahun') ?>

    <?php // echo $form->field($model, 'jenis_luka_k3rstahun') ?>

    <?php // echo $form->field($model, 'lokasi_kejadian_k3rstahun') ?>

    <?php // echo $form->field($model, 'dampak_cidera_k3rstahun') ?>

    <?php // echo $form->field($model, 'jenis_pekerjaan_k3rstahun') ?>

    <?php // echo $form->field($model, 'bagian_tubuh_k3rstahun') ?>

    <?php // echo $form->field($model, 'sekrining_rawat_jalan') ?>

    <?php // echo $form->field($model, 'bpjs_histori_pelayanan') ?>

    <?php // echo $form->field($model, 'rekap_mutasi_berkas') ?>

    <?php // echo $form->field($model, 'skrining_ralan_pernapasan_pertahun') ?>

    <?php // echo $form->field($model, 'pengajuan_barang_medis') ?>

    <?php // echo $form->field($model, 'pengajuan_barang_nonmedis') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_ranapbulan') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_ranaptanggal') ?>

    <?php // echo $form->field($model, 'grafik_kunjungan_ranap_peruang') ?>

    <?php // echo $form->field($model, 'kunjungan_bangsal_pertahun') ?>

    <?php // echo $form->field($model, 'grafik_jenjang_jabatanpegawai') ?>

    <?php // echo $form->field($model, 'grafik_bidangpegawai') ?>

    <?php // echo $form->field($model, 'grafik_departemenpegawai') ?>

    <?php // echo $form->field($model, 'grafik_pendidikanpegawai') ?>

    <?php // echo $form->field($model, 'grafik_sttswppegawai') ?>

    <?php // echo $form->field($model, 'grafik_sttskerjapegawai') ?>

    <?php // echo $form->field($model, 'grafik_sttspulangranap') ?>

    <?php // echo $form->field($model, 'kip_pasien_ranap') ?>

    <?php // echo $form->field($model, 'kip_pasien_ralan') ?>

    <?php // echo $form->field($model, 'bpjs_mapping_dokterdpjp') ?>

    <?php // echo $form->field($model, 'data_triase_igd') ?>

    <?php // echo $form->field($model, 'master_triase_skala1') ?>

    <?php // echo $form->field($model, 'master_triase_skala2') ?>

    <?php // echo $form->field($model, 'master_triase_skala3') ?>

    <?php // echo $form->field($model, 'master_triase_skala4') ?>

    <?php // echo $form->field($model, 'master_triase_skala5') ?>

    <?php // echo $form->field($model, 'master_triase_pemeriksaan') ?>

    <?php // echo $form->field($model, 'master_triase_macamkasus') ?>

    <?php // echo $form->field($model, 'rekap_permintaan_diet') ?>

    <?php // echo $form->field($model, 'daftar_pasien_ranap') ?>

    <?php // echo $form->field($model, 'daftar_pasien_ranaptni') ?>

    <?php // echo $form->field($model, 'pengajuan_asetinventaris') ?>

    <?php // echo $form->field($model, 'item_apotek_jenis') ?>

    <?php // echo $form->field($model, 'item_apotek_kategori') ?>

    <?php // echo $form->field($model, 'item_apotek_golongan') ?>

    <?php // echo $form->field($model, 'item_apotek_industrifarmasi') ?>

    <?php // echo $form->field($model, '10_obat_terbanyak_poli') ?>

    <?php // echo $form->field($model, 'grafik_pengajuan_aset_urgensi') ?>

    <?php // echo $form->field($model, 'grafik_pengajuan_aset_status') ?>

    <?php // echo $form->field($model, 'grafik_pengajuan_aset_departemen') ?>

    <?php // echo $form->field($model, 'rekap_pengajuan_aset_departemen') ?>

    <?php // echo $form->field($model, 'grafik_kelompok_jabatanpegawai') ?>

    <?php // echo $form->field($model, 'grafik_resiko_kerjapegawai') ?>

    <?php // echo $form->field($model, 'grafik_emergency_indexpegawai') ?>

    <?php // echo $form->field($model, 'grafik_inventaris_ruang') ?>

    <?php // echo $form->field($model, 'harian_HAIs2') ?>

    <?php // echo $form->field($model, 'grafik_inventaris_jenis') ?>

    <?php // echo $form->field($model, 'data_resume_pasien') ?>

    <?php // echo $form->field($model, 'perkiraan_biaya_ranap') ?>

    <?php // echo $form->field($model, 'rekap_obat_poli') ?>

    <?php // echo $form->field($model, 'rekap_obat_pasien') ?>

    <?php // echo $form->field($model, 'permintaan_perbaikan_inventaris') ?>

    <?php // echo $form->field($model, 'grafik_HAIs_pasienbangsal') ?>

    <?php // echo $form->field($model, 'grafik_HAIs_pasienbulan') ?>

    <?php // echo $form->field($model, 'grafik_HAIs_laju_vap') ?>

    <?php // echo $form->field($model, 'grafik_HAIs_laju_iad') ?>

    <?php // echo $form->field($model, 'grafik_HAIs_laju_pleb') ?>

    <?php // echo $form->field($model, 'grafik_HAIs_laju_isk') ?>

    <?php // echo $form->field($model, 'grafik_HAIs_laju_ilo') ?>

    <?php // echo $form->field($model, 'grafik_HAIs_laju_hap') ?>

    <?php // echo $form->field($model, 'inhealth_mapping_poli') ?>

    <?php // echo $form->field($model, 'inhealth_mapping_dokter') ?>

    <?php // echo $form->field($model, 'inhealth_mapping_tindakan_ralan') ?>

    <?php // echo $form->field($model, 'inhealth_mapping_tindakan_ranap') ?>

    <?php // echo $form->field($model, 'inhealth_mapping_tindakan_radiologi') ?>

    <?php // echo $form->field($model, 'inhealth_mapping_tindakan_laborat') ?>

    <?php // echo $form->field($model, 'inhealth_mapping_tindakan_operasi') ?>

    <?php // echo $form->field($model, 'hibah_obat_bhp') ?>

    <?php // echo $form->field($model, 'asal_hibah') ?>

    <?php // echo $form->field($model, 'asuhan_gizi') ?>

    <?php // echo $form->field($model, 'inhealth_kirim_tagihan') ?>

    <?php // echo $form->field($model, 'sirkulasi_obat4') ?>

    <?php // echo $form->field($model, 'sirkulasi_obat5') ?>

    <?php // echo $form->field($model, 'sirkulasi_non_medis2') ?>

    <?php // echo $form->field($model, 'monitoring_asuhan_gizi') ?>

    <?php // echo $form->field($model, 'penerimaan_obat_perbulan') ?>

    <?php // echo $form->field($model, 'rekap_kunjungan') ?>

    <?php // echo $form->field($model, 'surat_sakit') ?>

    <?php // echo $form->field($model, 'penilaian_awal_keperawatan_ralan') ?>

    <?php // echo $form->field($model, 'permintaan_diet') ?>

    <?php // echo $form->field($model, 'master_masalah_keperawatan') ?>

    <?php // echo $form->field($model, 'pengajuan_cuti') ?>

    <?php // echo $form->field($model, 'kedatangan_pasien') ?>

    <?php // echo $form->field($model, 'utd_pendonor') ?>

    <?php // echo $form->field($model, 'toko_suplier') ?>

    <?php // echo $form->field($model, 'toko_jenis') ?>

    <?php // echo $form->field($model, 'toko_set_harga') ?>

    <?php // echo $form->field($model, 'toko_barang') ?>

    <?php // echo $form->field($model, 'penagihan_piutang_pasien') ?>

    <?php // echo $form->field($model, 'akun_penagihan_piutang') ?>

    <?php // echo $form->field($model, 'stok_opname_toko') ?>

    <?php // echo $form->field($model, 'toko_riwayat_barang') ?>

    <?php // echo $form->field($model, 'toko_surat_pemesanan') ?>

    <?php // echo $form->field($model, 'toko_pengajuan_barang') ?>

    <?php // echo $form->field($model, 'toko_penerimaan_barang') ?>

    <?php // echo $form->field($model, 'toko_pengadaan_barang') ?>

    <?php // echo $form->field($model, 'toko_hutang') ?>

    <?php // echo $form->field($model, 'toko_bayar_pemesanan') ?>

    <?php // echo $form->field($model, 'toko_member') ?>

    <?php // echo $form->field($model, 'toko_penjualan') ?>

    <?php // echo $form->field($model, 'registrasi_poli_per_tanggal') ?>

    <?php // echo $form->field($model, 'toko_piutang') ?>

    <?php // echo $form->field($model, 'toko_retur_beli') ?>

    <?php // echo $form->field($model, 'ipsrs_returbeli') ?>

    <?php // echo $form->field($model, 'ipsrs_riwayat_barang') ?>

    <?php // echo $form->field($model, 'pasien_corona') ?>

    <?php // echo $form->field($model, 'toko_pendapatan_harian') ?>

    <?php // echo $form->field($model, 'diagnosa_pasien_corona') ?>

    <?php // echo $form->field($model, 'perawatan_pasien_corona') ?>

    <?php // echo $form->field($model, 'penilaian_awal_keperawatan_gigi') ?>

    <?php // echo $form->field($model, 'master_masalah_keperawatan_gigi') ?>

    <?php // echo $form->field($model, 'toko_bayar_piutang') ?>

    <?php // echo $form->field($model, 'toko_piutang_harian') ?>

    <?php // echo $form->field($model, 'toko_penjualan_harian') ?>

    <?php // echo $form->field($model, 'deteksi_corona') ?>

    <?php // echo $form->field($model, 'penilaian_awal_keperawatan_kebidanan') ?>

    <?php // echo $form->field($model, 'pengumuman_epasien') ?>

    <?php // echo $form->field($model, 'surat_hamil') ?>

    <?php // echo $form->field($model, 'set_tarif_online') ?>

    <?php // echo $form->field($model, 'booking_periksa') ?>

    <?php // echo $form->field($model, 'toko_sirkulasi') ?>

    <?php // echo $form->field($model, 'toko_retur_jual') ?>

    <?php // echo $form->field($model, 'toko_retur_piutang') ?>

    <?php // echo $form->field($model, 'toko_sirkulasi2') ?>

    <?php // echo $form->field($model, 'toko_keuntungan_barang') ?>

    <?php // echo $form->field($model, 'zis_pengeluaran_penerima_dankes') ?>

    <?php // echo $form->field($model, 'zis_penghasilan_penerima_dankes') ?>

    <?php // echo $form->field($model, 'zis_ukuran_rumah_penerima_dankes') ?>

    <?php // echo $form->field($model, 'zis_dinding_rumah_penerima_dankes') ?>

    <?php // echo $form->field($model, 'zis_lantai_rumah_penerima_dankes') ?>

    <?php // echo $form->field($model, 'zis_atap_rumah_penerima_dankes') ?>

    <?php // echo $form->field($model, 'zis_kepemilikan_rumah_penerima_dankes') ?>

    <?php // echo $form->field($model, 'zis_kamar_mandi_penerima_dankes') ?>

    <?php // echo $form->field($model, 'zis_dapur_rumah_penerima_dankes') ?>

    <?php // echo $form->field($model, 'zis_kursi_rumah_penerima_dankes') ?>

    <?php // echo $form->field($model, 'zis_kategori_phbs_penerima_dankes') ?>

    <?php // echo $form->field($model, 'zis_elektronik_penerima_dankes') ?>

    <?php // echo $form->field($model, 'zis_ternak_penerima_dankes') ?>

    <?php // echo $form->field($model, 'zis_jenis_simpanan_penerima_dankes') ?>

    <?php // echo $form->field($model, 'penilaian_awal_keperawatan_anak') ?>

    <?php // echo $form->field($model, 'zis_kategori_asnaf_penerima_dankes') ?>

    <?php // echo $form->field($model, 'master_masalah_keperawatan_anak') ?>

    <?php // echo $form->field($model, 'master_imunisasi') ?>

    <?php // echo $form->field($model, 'zis_patologis_penerima_dankes') ?>

    <?php // echo $form->field($model, 'pcare_cek_kartu') ?>

    <?php // echo $form->field($model, 'surat_bebas_narkoba') ?>

    <?php // echo $form->field($model, 'surat_keterangan_covid') ?>

    <?php // echo $form->field($model, 'pemakaian_air_tanah') ?>

    <?php // echo $form->field($model, 'grafik_air_tanah_pertanggal') ?>

    <?php // echo $form->field($model, 'grafik_air_tanah_perbulan') ?>

    <?php // echo $form->field($model, 'lama_pelayanan_poli') ?>

    <?php // echo $form->field($model, 'hemodialisa') ?>

    <?php // echo $form->field($model, 'laporan_tahunan_irj') ?>

    <?php // echo $form->field($model, 'grafik_harian_hemodialisa') ?>

    <?php // echo $form->field($model, 'grafik_bulanan_hemodialisa') ?>

    <?php // echo $form->field($model, 'grafik_tahunan_hemodialisa') ?>

    <?php // echo $form->field($model, 'grafik_bulanan_meninggal') ?>

    <?php // echo $form->field($model, 'perbaikan_inventaris') ?>

    <?php // echo $form->field($model, 'surat_cuti_hamil') ?>

    <?php // echo $form->field($model, 'permintaan_stok_obat_pasien') ?>

    <?php // echo $form->field($model, 'pemeliharaan_inventaris') ?>

    <?php // echo $form->field($model, 'klasifikasi_pasien_ranap') ?>

    <?php // echo $form->field($model, 'bulanan_klasifikasi_pasien_ranap') ?>

    <?php // echo $form->field($model, 'harian_klasifikasi_pasien_ranap') ?>

    <?php // echo $form->field($model, 'klasifikasi_pasien_perbangsal') ?>

    <?php // echo $form->field($model, 'soap_perawatan') ?>

    <?php // echo $form->field($model, 'klaim_rawat_jalan') ?>

    <?php // echo $form->field($model, 'skrining_gizi') ?>

    <?php // echo $form->field($model, 'lama_penyiapan_rm') ?>

    <?php // echo $form->field($model, 'dosis_radiologi') ?>

    <?php // echo $form->field($model, 'demografi_umur_kunjungan') ?>

    <?php // echo $form->field($model, 'jam_diet_pasien') ?>

    <?php // echo $form->field($model, 'rvu_bpjs') ?>

    <?php // echo $form->field($model, 'verifikasi_penerimaan_farmasi') ?>

    <?php // echo $form->field($model, 'verifikasi_penerimaan_logistik') ?>

    <?php // echo $form->field($model, 'pemeriksaan_lab_pa') ?>

    <?php // echo $form->field($model, 'ringkasan_pengajuan_obat') ?>

    <?php // echo $form->field($model, 'ringkasan_pemesanan_obat') ?>

    <?php // echo $form->field($model, 'ringkasan_pengadaan_obat') ?>

    <?php // echo $form->field($model, 'ringkasan_penerimaan_obat') ?>

    <?php // echo $form->field($model, 'ringkasan_hibah_obat') ?>

    <?php // echo $form->field($model, 'ringkasan_penjualan_obat') ?>

    <?php // echo $form->field($model, 'ringkasan_beri_obat') ?>

    <?php // echo $form->field($model, 'ringkasan_piutang_obat') ?>

    <?php // echo $form->field($model, 'ringkasan_stok_keluar_obat') ?>

    <?php // echo $form->field($model, 'ringkasan_retur_suplier_obat') ?>

    <?php // echo $form->field($model, 'ringkasan_retur_pembeli_obat') ?>

    <?php // echo $form->field($model, 'penilaian_awal_keperawatan_ranapkebidanan') ?>

    <?php // echo $form->field($model, 'ringkasan_pengajuan_nonmedis') ?>

    <?php // echo $form->field($model, 'ringkasan_pemesanan_nonmedis') ?>

    <?php // echo $form->field($model, 'ringkasan_pengadaan_nonmedis') ?>

    <?php // echo $form->field($model, 'ringkasan_penerimaan_nonmedis') ?>

    <?php // echo $form->field($model, 'ringkasan_stokkeluar_nonmedis') ?>

    <?php // echo $form->field($model, 'ringkasan_returbeli_nonmedis') ?>

    <?php // echo $form->field($model, 'omset_penerimaan') ?>

    <?php // echo $form->field($model, 'validasi_penagihan_piutang') ?>

    <?php // echo $form->field($model, 'permintaan_ranap') ?>

    <?php // echo $form->field($model, 'bpjs_diagnosa_prb') ?>

    <?php // echo $form->field($model, 'bpjs_obat_prb') ?>

    <?php // echo $form->field($model, 'bpjs_surat_kontrol') ?>

    <?php // echo $form->field($model, 'penggunaan_bhp_ok') ?>

    <?php // echo $form->field($model, 'surat_keterangan_rawat_inap') ?>

    <?php // echo $form->field($model, 'surat_keterangan_sehat') ?>

    <?php // echo $form->field($model, 'pendapatan_per_carabayar') ?>

    <?php // echo $form->field($model, 'akun_host_to_host_bank_jateng') ?>

    <?php // echo $form->field($model, 'pembayaran_bank_jateng') ?>

    <?php // echo $form->field($model, 'bpjs_surat_pri') ?>

    <?php // echo $form->field($model, 'ringkasan_tindakan') ?>

    <?php // echo $form->field($model, 'lama_pelayanan_pasien') ?>

    <?php // echo $form->field($model, 'surat_sakit_pihak_2') ?>

    <?php // echo $form->field($model, 'tagihan_hutang_obat') ?>

    <?php // echo $form->field($model, 'referensi_mobilejkn_bpjs') ?>

    <?php // echo $form->field($model, 'batal_pendaftaran_mobilejkn_bpjs') ?>

    <?php // echo $form->field($model, 'lama_operasi') ?>

    <?php // echo $form->field($model, 'grafik_inventaris_kategori') ?>

    <?php // echo $form->field($model, 'grafik_inventaris_merk') ?>

    <?php // echo $form->field($model, 'grafik_inventaris_produsen') ?>

    <?php // echo $form->field($model, 'pengembalian_deposit_pasien') ?>

    <?php // echo $form->field($model, 'validasi_tagihan_hutang_obat') ?>

    <?php // echo $form->field($model, 'piutang_obat_belum_lunas') ?>

    <?php // echo $form->field($model, 'integrasi_briapi') ?>

    <?php // echo $form->field($model, 'pengadaan_aset_inventaris') ?>

    <?php // echo $form->field($model, 'akun_aset_inventaris') ?>

    <?php // echo $form->field($model, 'suplier_inventaris') ?>

    <?php // echo $form->field($model, 'penerimaan_aset_inventaris') ?>

    <?php // echo $form->field($model, 'bayar_pemesanan_iventaris') ?>

    <?php // echo $form->field($model, 'hutang_aset_inventaris') ?>

    <?php // echo $form->field($model, 'hibah_aset_inventaris') ?>

    <?php // echo $form->field($model, 'titip_faktur_non_medis') ?>

    <?php // echo $form->field($model, 'validasi_tagihan_non_medis') ?>

    <?php // echo $form->field($model, 'titip_faktur_aset') ?>

    <?php // echo $form->field($model, 'validasi_tagihan_aset') ?>

    <?php // echo $form->field($model, 'hibah_non_medis') ?>

    <?php // echo $form->field($model, 'pcare_alasan_tacc') ?>

    <?php // echo $form->field($model, 'resep_luar') ?>

    <?php // echo $form->field($model, 'surat_bebas_tbc') ?>

    <?php // echo $form->field($model, 'surat_buta_warna') ?>

    <?php // echo $form->field($model, 'surat_bebas_tato') ?>

    <?php // echo $form->field($model, 'surat_kewaspadaan_kesehatan') ?>

    <?php // echo $form->field($model, 'grafik_porsidiet_pertanggal') ?>

    <?php // echo $form->field($model, 'grafik_porsidiet_perbulan') ?>

    <?php // echo $form->field($model, 'grafik_porsidiet_pertahun') ?>

    <?php // echo $form->field($model, 'grafik_porsidiet_perbangsal') ?>

    <?php // echo $form->field($model, 'penilaian_awal_medis_ralan') ?>

    <?php // echo $form->field($model, 'master_masalah_keperawatan_mata') ?>

    <?php // echo $form->field($model, 'penilaian_awal_keperawatan_mata') ?>

    <?php // echo $form->field($model, 'penilaian_awal_medis_ranap') ?>

    <?php // echo $form->field($model, 'penilaian_awal_medis_ranap_kebidanan') ?>

    <?php // echo $form->field($model, 'penilaian_awal_medis_ralan_kebidanan') ?>

    <?php // echo $form->field($model, 'penilaian_awal_medis_igd') ?>

    <?php // echo $form->field($model, 'penilaian_awal_medis_ralan_anak') ?>

    <?php // echo $form->field($model, 'bpjs_referensi_poli_hfis') ?>

    <?php // echo $form->field($model, 'bpjs_referensi_dokter_hfis') ?>

    <?php // echo $form->field($model, 'bpjs_referensi_jadwal_hfis') ?>

    <?php // echo $form->field($model, 'penilaian_fisioterapi') ?>

    <?php // echo $form->field($model, 'bpjs_program_prb') ?>

    <?php // echo $form->field($model, 'bpjs_suplesi_jasaraharja') ?>

    <?php // echo $form->field($model, 'bpjs_data_induk_kecelakaan') ?>

    <?php // echo $form->field($model, 'bpjs_sep_internal') ?>

    <?php // echo $form->field($model, 'bpjs_klaim_jasa_raharja') ?>

    <?php // echo $form->field($model, 'bpjs_daftar_finger_print') ?>

    <?php // echo $form->field($model, 'bpjs_rujukan_khusus') ?>

    <?php // echo $form->field($model, 'pemeliharaan_gedung') ?>

    <?php // echo $form->field($model, 'grafik_perbaikan_inventaris_pertanggal') ?>

    <?php // echo $form->field($model, 'grafik_perbaikan_inventaris_perbulan') ?>

    <?php // echo $form->field($model, 'grafik_perbaikan_inventaris_pertahun') ?>

    <?php // echo $form->field($model, 'grafik_perbaikan_inventaris_perpelaksana_status') ?>

    <?php // echo $form->field($model, 'penilaian_mcu') ?>

    <?php // echo $form->field($model, 'peminjam_piutang') ?>

    <?php // echo $form->field($model, 'piutang_lainlain') ?>

    <?php // echo $form->field($model, 'cara_bayar') ?>

    <?php // echo $form->field($model, 'audit_kepatuhan_apd') ?>

    <?php // echo $form->field($model, 'bpjs_task_id') ?>

    <?php // echo $form->field($model, 'bayar_piutang_lain') ?>

    <?php // echo $form->field($model, 'pembayaran_akun_bayar4') ?>

    <?php // echo $form->field($model, 'stok_akhir_farmasi_pertanggal') ?>

    <?php // echo $form->field($model, 'riwayat_kamar_pasien') ?>

    <?php // echo $form->field($model, 'uji_fungsi_kfr') ?>

    <?php // echo $form->field($model, 'hapus_berkas_digital_perawatan') ?>

    <?php // echo $form->field($model, 'kategori_pengeluaran_harian') ?>

    <?php // echo $form->field($model, 'kategori_pemasukan_lain') ?>

    <?php // echo $form->field($model, 'pembayaran_akun_bayar5') ?>

    <?php // echo $form->field($model, 'ruang_ok') ?>

    <?php // echo $form->field($model, 'telaah_resep') ?>

    <?php // echo $form->field($model, 'jasa_tindakan_pasien') ?>

    <?php // echo $form->field($model, 'permintaan_resep_pulang') ?>

    <?php // echo $form->field($model, 'rekap_jm_dokter') ?>

    <?php // echo $form->field($model, 'status_data_rm') ?>

    <?php // echo $form->field($model, 'ubah_petugas_lab_pk') ?>

    <?php // echo $form->field($model, 'ubah_petugas_lab_pa') ?>

    <?php // echo $form->field($model, 'ubah_petugas_radiologi') ?>

    <?php // echo $form->field($model, 'gabung_norawat') ?>

    <?php // echo $form->field($model, 'gabung_rm') ?>

    <?php // echo $form->field($model, 'ringkasan_biaya_obat_pasien_pertanggal') ?>

    <?php // echo $form->field($model, 'master_masalah_keperawatan_igd') ?>

    <?php // echo $form->field($model, 'penilaian_awal_keperawatan_igd') ?>

    <?php // echo $form->field($model, 'bpjs_referensi_dpho_apotek') ?>

    <?php // echo $form->field($model, 'bpjs_referensi_poli_apotek') ?>

    <?php // echo $form->field($model, 'bayar_jm_dokter') ?>

    <?php // echo $form->field($model, 'bpjs_referensi_faskes_apotek') ?>

    <?php // echo $form->field($model, 'bpjs_referensi_spesialistik_apotek') ?>

    <?php // echo $form->field($model, 'pembayaran_briva') ?>

    <?php // echo $form->field($model, 'penilaian_awal_keperawatan_ranap') ?>

    <?php // echo $form->field($model, 'nilai_penerimaan_vendor_farmasi_perbulan') ?>

    <?php // echo $form->field($model, 'akun_bayar_hutang') ?>

    <?php // echo $form->field($model, 'master_rencana_keperawatan') ?>

    <?php // echo $form->field($model, 'laporan_tahunan_igd') ?>

    <?php // echo $form->field($model, 'obat_bhp_tidakbergerak') ?>

    <?php // echo $form->field($model, 'ringkasan_hutang_vendor_farmasi') ?>

    <?php // echo $form->field($model, 'nilai_penerimaan_vendor_nonmedis_perbulan') ?>

    <?php // echo $form->field($model, 'ringkasan_hutang_vendor_nonmedis') ?>

    <?php // echo $form->field($model, 'master_rencana_keperawatan_anak') ?>

    <?php // echo $form->field($model, 'anggota_polri_dirawat') ?>

    <?php // echo $form->field($model, 'daftar_pasien_ranap_polri') ?>

    <?php // echo $form->field($model, 'soap_ralan_polri') ?>

    <?php // echo $form->field($model, 'soap_ranap_polri') ?>

    <?php // echo $form->field($model, 'laporan_penyakit_polri') ?>

    <?php // echo $form->field($model, 'jumlah_pengunjung_ralan_polri') ?>

    <?php // echo $form->field($model, 'catatan_observasi_igd') ?>

    <?php // echo $form->field($model, 'catatan_observasi_ranap') ?>

    <?php // echo $form->field($model, 'catatan_observasi_ranap_kebidanan') ?>

    <?php // echo $form->field($model, 'catatan_observasi_ranap_postpartum') ?>

    <?php // echo $form->field($model, 'penilaian_awal_medis_ralan_tht') ?>

    <?php // echo $form->field($model, 'penilaian_psikologi') ?>

    <?php // echo $form->field($model, 'audit_cuci_tangan_medis') ?>

    <?php // echo $form->field($model, 'audit_pembuangan_limbah') ?>

    <?php // echo $form->field($model, 'ruang_audit_kepatuhan') ?>

    <?php // echo $form->field($model, 'audit_pembuangan_benda_tajam') ?>

    <?php // echo $form->field($model, 'audit_penanganan_darah') ?>

    <?php // echo $form->field($model, 'audit_pengelolaan_linen_kotor') ?>

    <?php // echo $form->field($model, 'audit_penempatan_pasien') ?>

    <?php // echo $form->field($model, 'audit_kamar_jenazah') ?>

    <?php // echo $form->field($model, 'audit_bundle_iadp') ?>

    <?php // echo $form->field($model, 'audit_bundle_ido') ?>

    <?php // echo $form->field($model, 'audit_fasilitas_kebersihan_tangan') ?>

    <?php // echo $form->field($model, 'audit_fasilitas_apd') ?>

    <?php // echo $form->field($model, 'audit_pembuangan_limbah_cair_infeksius') ?>

    <?php // echo $form->field($model, 'audit_sterilisasi_alat') ?>

    <?php // echo $form->field($model, 'penilaian_awal_medis_ralan_psikiatri') ?>

    <?php // echo $form->field($model, 'persetujuan_penolakan_tindakan') ?>

    <?php // echo $form->field($model, 'audit_bundle_isk') ?>

    <?php // echo $form->field($model, 'audit_bundle_plabsi') ?>

    <?php // echo $form->field($model, 'audit_bundle_vap') ?>

    <?php // echo $form->field($model, 'akun_host_to_host_bank_papua') ?>

    <?php // echo $form->field($model, 'pembayaran_bank_papua') ?>

    <?php // echo $form->field($model, 'penilaian_awal_medis_ralan_penyakit_dalam') ?>

    <?php // echo $form->field($model, 'penilaian_awal_medis_ralan_mata') ?>

    <?php // echo $form->field($model, 'penilaian_awal_medis_ralan_neurologi') ?>

    <?php // echo $form->field($model, 'sirkulasi_obat6') ?>

    <?php // echo $form->field($model, 'penilaian_awal_medis_ralan_orthopedi') ?>

    <?php // echo $form->field($model, 'penilaian_awal_medis_ralan_bedah') ?>

    <?php // echo $form->field($model, 'integrasi_khanza_health_services') ?>

    <?php // echo $form->field($model, 'soap_ralan_tni') ?>

    <?php // echo $form->field($model, 'soap_ranap_tni') ?>

    <?php // echo $form->field($model, 'jumlah_pengunjung_ralan_tni') ?>

    <?php // echo $form->field($model, 'laporan_penyakit_tni') ?>

    <?php // echo $form->field($model, 'catatan_keperawatan_ranap') ?>

    <?php // echo $form->field($model, 'master_rencana_keperawatan_gigi') ?>

    <?php // echo $form->field($model, 'master_rencana_keperawatan_mata') ?>

    <?php // echo $form->field($model, 'master_rencana_keperawatan_igd') ?>

    <?php // echo $form->field($model, 'master_masalah_keperawatan_psikiatri') ?>

    <?php // echo $form->field($model, 'master_rencana_keperawatan_psikiatri') ?>

    <?php // echo $form->field($model, 'penilaian_awal_keperawatan_psikiatri') ?>

    <?php // echo $form->field($model, 'pemantauan_pews_anak') ?>

    <?php // echo $form->field($model, 'surat_pulang_atas_permintaan_sendiri') ?>

    <?php // echo $form->field($model, 'template_hasil_radiologi') ?>

    <?php // echo $form->field($model, 'laporan_bulanan_irj') ?>

    <?php // echo $form->field($model, 'template_pemeriksaan') ?>

    <?php // echo $form->field($model, 'pemeriksaan_lab_mb') ?>

    <?php // echo $form->field($model, 'ubah_petugas_lab_mb') ?>

    <?php // echo $form->field($model, 'penilaian_pre_operasi') ?>

    <?php // echo $form->field($model, 'penilaian_pre_anestesi') ?>

    <?php // echo $form->field($model, 'perencanaan_pemulangan') ?>

    <?php // echo $form->field($model, 'penilaian_lanjutan_resiko_jatuh_dewasa') ?>

    <?php // echo $form->field($model, 'penilaian_lanjutan_resiko_jatuh_anak') ?>

    <?php // echo $form->field($model, 'penilaian_awal_medis_ralan_geriatri') ?>

    <?php // echo $form->field($model, 'penilaian_tambahan_pasien_geriatri') ?>

    <?php // echo $form->field($model, 'skrining_nutrisi_dewasa') ?>

    <?php // echo $form->field($model, 'skrining_nutrisi_lansia') ?>

    <?php // echo $form->field($model, 'hasil_pemeriksaan_usg') ?>

    <?php // echo $form->field($model, 'skrining_nutrisi_anak') ?>

    <?php // echo $form->field($model, 'akun_host_to_host_bank_jabar') ?>

    <?php // echo $form->field($model, 'pembayaran_bank_jabar') ?>

    <?php // echo $form->field($model, 'surat_pernyataan_pasien_umum') ?>

    <?php // echo $form->field($model, 'konseling_farmasi') ?>

    <?php // echo $form->field($model, 'pelayanan_informasi_obat') ?>

    <?php // echo $form->field($model, 'jawaban_pio_apoteker') ?>

    <?php // echo $form->field($model, 'surat_persetujuan_umum') ?>

    <?php // echo $form->field($model, 'transfer_pasien_antar_ruang') ?>

    <?php // echo $form->field($model, 'satu_sehat_referensi_dokter') ?>

    <?php // echo $form->field($model, 'satu_sehat_referensi_pasien') ?>

    <?php // echo $form->field($model, 'satu_sehat_mapping_departemen') ?>

    <?php // echo $form->field($model, 'satu_sehat_mapping_lokasi') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_encounter') ?>

    <?php // echo $form->field($model, 'catatan_cek_gds') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_condition') ?>

    <?php // echo $form->field($model, 'checklist_pre_operasi') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_observationttv') ?>

    <?php // echo $form->field($model, 'signin_sebelum_anestesi') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_procedure') ?>

    <?php // echo $form->field($model, 'operasi_per_bulan') ?>

    <?php // echo $form->field($model, 'timeout_sebelum_insisi') ?>

    <?php // echo $form->field($model, 'signout_sebelum_menutup_luka') ?>

    <?php // echo $form->field($model, 'dapur_barang') ?>

    <?php // echo $form->field($model, 'dapur_opname') ?>

    <?php // echo $form->field($model, 'satu_sehat_mapping_vaksin') ?>

    <?php // echo $form->field($model, 'dapur_suplier') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_Immunization') ?>

    <?php // echo $form->field($model, 'checklist_post_operasi') ?>

    <?php // echo $form->field($model, 'dapur_pembelian') ?>

    <?php // echo $form->field($model, 'dapur_stok_keluar') ?>

    <?php // echo $form->field($model, 'dapur_riwayat_barang') ?>

    <?php // echo $form->field($model, 'permintaan_dapur') ?>

    <?php // echo $form->field($model, 'rekonsiliasi_obat') ?>

    <?php // echo $form->field($model, 'biaya_pengadaan_dapur') ?>

    <?php // echo $form->field($model, 'rekap_pengadaan_dapur') ?>

    <?php // echo $form->field($model, 'kesling_limbah_b3medis_cair') ?>

    <?php // echo $form->field($model, 'grafik_limbahb3cair_pertanggal') ?>

    <?php // echo $form->field($model, 'grafik_limbahb3cair_perbulan') ?>

    <?php // echo $form->field($model, 'rekap_biaya_registrasi') ?>

    <?php // echo $form->field($model, 'konfirmasi_rekonsiliasi_obat') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_clinicalimpression') ?>

    <?php // echo $form->field($model, 'penilaian_pasien_terminal') ?>

    <?php // echo $form->field($model, 'surat_persetujuan_rawat_inap') ?>

    <?php // echo $form->field($model, 'monitoring_reaksi_tranfusi') ?>

    <?php // echo $form->field($model, 'penilaian_korban_kekerasan') ?>

    <?php // echo $form->field($model, 'penilaian_lanjutan_resiko_jatuh_lansia') ?>

    <?php // echo $form->field($model, 'penilaian_pasien_penyakit_menular') ?>

    <?php // echo $form->field($model, 'mpp_skrining') ?>

    <?php // echo $form->field($model, 'edukasi_pasien_keluarga_rj') ?>

    <?php // echo $form->field($model, 'pemantauan_pews_dewasa') ?>

    <?php // echo $form->field($model, 'penilaian_tambahan_bunuh_diri') ?>

    <?php // echo $form->field($model, 'bpjs_antrean_pertanggal') ?>

    <?php // echo $form->field($model, 'penilaian_tambahan_perilaku_kekerasan') ?>

    <?php // echo $form->field($model, 'penilaian_tambahan_beresiko_melarikan_diri') ?>

    <?php // echo $form->field($model, 'persetujuan_penundaan_pelayanan') ?>

    <?php // echo $form->field($model, 'sisa_diet_pasien') ?>

    <?php // echo $form->field($model, 'penilaian_awal_medis_ralan_bedah_mulut') ?>

    <?php // echo $form->field($model, 'penilaian_pasien_keracunan') ?>

    <?php // echo $form->field($model, 'pemantauan_meows_obstetri') ?>

    <?php // echo $form->field($model, 'catatan_adime_gizi') ?>

    <?php // echo $form->field($model, 'pengajuan_biaya') ?>

    <?php // echo $form->field($model, 'penilaian_awal_keperawatan_ralan_geriatri') ?>

    <?php // echo $form->field($model, 'master_masalah_keperawatan_geriatri') ?>

    <?php // echo $form->field($model, 'master_rencana_keperawatan_geriatri') ?>

    <?php // echo $form->field($model, 'checklist_kriteria_masuk_hcu') ?>

    <?php // echo $form->field($model, 'checklist_kriteria_keluar_hcu') ?>

    <?php // echo $form->field($model, 'penilaian_risiko_dekubitus') ?>

    <?php // echo $form->field($model, 'master_menolak_anjuran_medis') ?>

    <?php // echo $form->field($model, 'penolakan_anjuran_medis') ?>

    <?php // echo $form->field($model, 'laporan_tahunan_penolakan_anjuran_medis') ?>

    <?php // echo $form->field($model, 'template_laporan_operasi') ?>

    <?php // echo $form->field($model, 'hasil_tindakan_eswl') ?>

    <?php // echo $form->field($model, 'checklist_kriteria_masuk_icu') ?>

    <?php // echo $form->field($model, 'checklist_kriteria_keluar_icu') ?>

    <?php // echo $form->field($model, 'akses_dokter_lain_rawat_jalan') ?>

    <?php // echo $form->field($model, 'follow_up_dbd') ?>

    <?php // echo $form->field($model, 'penilaian_risiko_jatuh_neonatus') ?>

    <?php // echo $form->field($model, 'persetujuan_pengajuan_biaya') ?>

    <?php // echo $form->field($model, 'pemeriksaan_fisik_ralan_per_penyakit') ?>

    <?php // echo $form->field($model, 'penilaian_lanjutan_resiko_jatuh_geriatri') ?>

    <?php // echo $form->field($model, 'pemantauan_ews_neonatus') ?>

    <?php // echo $form->field($model, 'validasi_persetujuan_pengajuan_biaya') ?>

    <?php // echo $form->field($model, 'riwayat_perawatan_icare_bpjs') ?>

    <?php // echo $form->field($model, 'rekap_pengajuan_biaya') ?>

    <?php // echo $form->field($model, 'penilaian_awal_medis_ralan_kulit_kelamin') ?>

    <?php // echo $form->field($model, 'akun_host_to_host_bank_mandiri') ?>

    <?php // echo $form->field($model, 'penilaian_medis_hemodialisa') ?>

    <?php // echo $form->field($model, 'penilaian_level_kecemasan_ranap_anak') ?>

    <?php // echo $form->field($model, 'penilaian_lanjutan_resiko_jatuh_psikiatri') ?>

    <?php // echo $form->field($model, 'penilaian_lanjutan_skrining_fungsional') ?>

    <?php // echo $form->field($model, 'penilaian_medis_ralan_rehab_medik') ?>

    <?php // echo $form->field($model, 'laporan_anestesi') ?>

    <?php // echo $form->field($model, 'template_persetujuan_penolakan_tindakan') ?>

    <?php // echo $form->field($model, 'penilaian_medis_ralan_gawat_darurat_psikiatri') ?>

    <?php // echo $form->field($model, 'bpjs_referensi_setting_apotek') ?>

    <?php // echo $form->field($model, 'bpjs_referensi_obat_apotek') ?>

    <?php // echo $form->field($model, 'bpjs_mapping_obat_apotek') ?>

    <?php // echo $form->field($model, 'pembayaran_bank_mandiri') ?>

    <?php // echo $form->field($model, 'penilaian_ulang_nyeri') ?>

    <?php // echo $form->field($model, 'penilaian_terapi_wicara') ?>

    <?php // echo $form->field($model, 'bpjs_obat_23hari_apotek') ?>

    <?php // echo $form->field($model, 'pengkajian_restrain') ?>

    <?php // echo $form->field($model, 'bpjs_kunjungan_sep_apotek') ?>

    <?php // echo $form->field($model, 'bpjs_monitoring_klaim_apotek') ?>

    <?php // echo $form->field($model, 'bpjs_daftar_pelayanan_obat_apotek') ?>

    <?php // echo $form->field($model, 'penilaian_awal_medis_ralan_paru') ?>

    <?php // echo $form->field($model, 'catatan_keperawatan_ralan') ?>

    <?php // echo $form->field($model, 'catatan_persalinan') ?>

    <?php // echo $form->field($model, 'skor_aldrette_pasca_anestesi') ?>

    <?php // echo $form->field($model, 'skor_steward_pasca_anestesi') ?>

    <?php // echo $form->field($model, 'skor_bromage_pasca_anestesi') ?>

    <?php // echo $form->field($model, 'penilaian_pre_induksi') ?>

    <?php // echo $form->field($model, 'hasil_usg_urologi') ?>

    <?php // echo $form->field($model, 'hasil_usg_gynecologi') ?>

    <?php // echo $form->field($model, 'hasil_pemeriksaan_ekg') ?>

    <?php // echo $form->field($model, 'hapus_edit_sep_bpjs') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_diet') ?>

    <?php // echo $form->field($model, 'satu_sehat_mapping_obat') ?>

    <?php // echo $form->field($model, 'dapur_ringkasan_pembelian') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_medication') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_medicationrequest') ?>

    <?php // echo $form->field($model, 'penatalaksanaan_terapi_okupasi') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_medicationdispense') ?>

    <?php // echo $form->field($model, 'hasil_usg_neonatus') ?>

    <?php // echo $form->field($model, 'hasil_endoskopi_faring_laring') ?>

    <?php // echo $form->field($model, 'satu_sehat_mapping_radiologi') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_servicerequest_radiologi') ?>

    <?php // echo $form->field($model, 'hasil_endoskopi_hidung') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_specimen_radiologi') ?>

    <?php // echo $form->field($model, 'master_masalah_keperawatan_neonatus') ?>

    <?php // echo $form->field($model, 'master_rencana_keperawatan_neonatus') ?>

    <?php // echo $form->field($model, 'penilaian_awal_keperawatan_ranap_neonatus') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_observation_radiologi') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_diagnosticreport_radiologi') ?>

    <?php // echo $form->field($model, 'hasil_endoskopi_telinga') ?>

    <?php // echo $form->field($model, 'satu_sehat_mapping_lab') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_servicerequest_lab') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_servicerequest_labmb') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_specimen_lab') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_specimen_labmb') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_observation_lab') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_observation_labmb') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_diagnosticreport_lab') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_diagnosticreport_labmb') ?>

    <?php // echo $form->field($model, 'kepatuhan_kelengkapan_keselamatan_bedah') ?>

    <?php // echo $form->field($model, 'nilai_piutang_perjenis_bayar_per_bulan') ?>

    <?php // echo $form->field($model, 'ringkasan_piutang_jenis_bayar') ?>

    <?php // echo $form->field($model, 'penilaian_pasien_imunitas_rendah') ?>

    <?php // echo $form->field($model, 'balance_cairan') ?>

    <?php // echo $form->field($model, 'catatan_observasi_chbp') ?>

    <?php // echo $form->field($model, 'catatan_observasi_induksi_persalinan') ?>

    <?php // echo $form->field($model, 'skp_kategori_penilaian') ?>

    <?php // echo $form->field($model, 'skp_kriteria_penilaian') ?>

    <?php // echo $form->field($model, 'skp_penilaian') ?>

    <?php // echo $form->field($model, 'referensi_poli_mobilejknfktp') ?>

    <?php // echo $form->field($model, 'referensi_dokter_mobilejknfktp') ?>

    <?php // echo $form->field($model, 'skp_rekapitulasi_penilaian') ?>

    <?php // echo $form->field($model, 'pembayaran_pihak_ke3_bankmandiri') ?>

    <?php // echo $form->field($model, 'metode_pembayaran_bankmandiri') ?>

    <?php // echo $form->field($model, 'bank_tujuan_transfer_bankmandiri') ?>

    <?php // echo $form->field($model, 'kodetransaksi_tujuan_transfer_bankmandiri') ?>

    <?php // echo $form->field($model, 'konsultasi_medik') ?>

    <?php // echo $form->field($model, 'jawaban_konsultasi_medik') ?>

    <?php // echo $form->field($model, 'pcare_cek_alergi') ?>

    <?php // echo $form->field($model, 'pcare_cek_prognosa') ?>

    <?php // echo $form->field($model, 'data_sasaran_usiaproduktif') ?>

    <?php // echo $form->field($model, 'data_sasaran_usialansia') ?>

    <?php // echo $form->field($model, 'skrining_perilaku_merokok_sekolah_remaja') ?>

    <?php // echo $form->field($model, 'skrining_kekerasan_pada_perempuan') ?>

    <?php // echo $form->field($model, 'skrining_obesitas') ?>

    <?php // echo $form->field($model, 'skrining_risiko_kanker_payudara') ?>

    <?php // echo $form->field($model, 'skrining_risiko_kanker_paru') ?>

    <?php // echo $form->field($model, 'skrining_tbc') ?>

    <?php // echo $form->field($model, 'skrining_kesehatan_gigi_mulut_remaja') ?>

    <?php // echo $form->field($model, 'penilaian_awal_keperawatan_ranap_bayi') ?>

    <?php // echo $form->field($model, 'booking_mcu_perusahaan') ?>

    <?php // echo $form->field($model, 'catatan_observasi_restrain_nonfarma') ?>

    <?php // echo $form->field($model, 'catatan_observasi_ventilator') ?>

    <?php // echo $form->field($model, 'catatan_anestesi_sedasi') ?>

    <?php // echo $form->field($model, 'skrining_puma') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_careplan') ?>

    <?php // echo $form->field($model, 'satu_sehat_kirim_medicationstatement') ?>

    <?php // echo $form->field($model, 'skrining_adiksi_nikotin') ?>

    <?php // echo $form->field($model, 'skrining_thalassemia') ?>

    <?php // echo $form->field($model, 'skrining_instrumen_sdq') ?>

    <?php // echo $form->field($model, 'skrining_instrumen_srq') ?>

    <?php // echo $form->field($model, 'checklist_pemberian_fibrinolitik') ?>

    <?php // echo $form->field($model, 'skrining_kanker_kolorektal') ?>

    <?php // echo $form->field($model, 'dapur_pemesanan') ?>

    <?php // echo $form->field($model, 'bayar_pesan_dapur') ?>

    <?php // echo $form->field($model, 'hutang_dapur') ?>

    <?php // echo $form->field($model, 'titip_faktur_dapur') ?>

    <?php // echo $form->field($model, 'validasi_tagihan_dapur') ?>

    <?php // echo $form->field($model, 'surat_pemesanan_dapur') ?>

    <?php // echo $form->field($model, 'pengajuan_barang_dapur') ?>

    <?php // echo $form->field($model, 'dapur_returbeli') ?>

    <?php // echo $form->field($model, 'hibah_dapur') ?>

    <?php // echo $form->field($model, 'ringkasan_penerimaan_dapur') ?>

    <?php // echo $form->field($model, 'ringkasan_pengajuan_dapur') ?>

    <?php // echo $form->field($model, 'ringkasan_pemesanan_dapur') ?>

    <?php // echo $form->field($model, 'ringkasan_returbeli_dapur') ?>

    <?php // echo $form->field($model, 'ringkasan_stokkeluar_dapur') ?>

    <?php // echo $form->field($model, 'dapur_stokkeluar_pertanggal') ?>

    <?php // echo $form->field($model, 'sirkulasi_dapur') ?>

    <?php // echo $form->field($model, 'sirkulasi_dapur2') ?>

    <?php // echo $form->field($model, 'verifikasi_penerimaan_dapur') ?>

    <?php // echo $form->field($model, 'nilai_penerimaan_vendor_dapur_perbulan') ?>

    <?php // echo $form->field($model, 'ringkasan_hutang_vendor_dapur') ?>

    <?php // echo $form->field($model, 'penilaian_psikologi_klinis') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
