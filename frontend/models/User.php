<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property string $id_user
 * @property string $password
 * @property string $penyakit
 * @property string $obat_penyakit
 * @property string $dokter
 * @property string $jadwal_praktek
 * @property string $petugas
 * @property string $pasien
 * @property string $registrasi
 * @property string $tindakan_ralan
 * @property string $kamar_inap
 * @property string $tindakan_ranap
 * @property string $operasi
 * @property string $rujukan_keluar
 * @property string $rujukan_masuk
 * @property string $beri_obat
 * @property string $resep_pulang
 * @property string $pasien_meninggal
 * @property string $diet_pasien
 * @property string $kelahiran_bayi
 * @property string $periksa_lab
 * @property string $periksa_radiologi
 * @property string $kasir_ralan
 * @property string $deposit_pasien
 * @property string $piutang_pasien
 * @property string $peminjaman_berkas
 * @property string $barcode
 * @property string $presensi_harian
 * @property string $presensi_bulanan
 * @property string $pegawai_admin
 * @property string $pegawai_user
 * @property string $suplier
 * @property string $satuan_barang
 * @property string $konversi_satuan
 * @property string $jenis_barang
 * @property string $obat
 * @property string $stok_opname_obat
 * @property string $stok_obat_pasien
 * @property string $pengadaan_obat
 * @property string $pemesanan_obat
 * @property string $penjualan_obat
 * @property string $piutang_obat
 * @property string $retur_ke_suplier
 * @property string $retur_dari_pembeli
 * @property string $retur_obat_ranap
 * @property string $retur_piutang_pasien
 * @property string $keuntungan_penjualan
 * @property string $keuntungan_beri_obat
 * @property string $sirkulasi_obat
 * @property string $ipsrs_barang
 * @property string $ipsrs_pengadaan_barang
 * @property string $ipsrs_stok_keluar
 * @property string $ipsrs_rekap_pengadaan
 * @property string $ipsrs_rekap_stok_keluar
 * @property string $ipsrs_pengeluaran_harian
 * @property string $inventaris_jenis
 * @property string $inventaris_kategori
 * @property string $inventaris_merk
 * @property string $inventaris_ruang
 * @property string $inventaris_produsen
 * @property string $inventaris_koleksi
 * @property string $inventaris_inventaris
 * @property string $inventaris_sirkulasi
 * @property string $parkir_jenis
 * @property string $parkir_in
 * @property string $parkir_out
 * @property string $parkir_rekap_harian
 * @property string $parkir_rekap_bulanan
 * @property string $informasi_kamar
 * @property string $harian_tindakan_poli
 * @property string $obat_per_poli
 * @property string $obat_per_kamar
 * @property string $obat_per_dokter_ralan
 * @property string $obat_per_dokter_ranap
 * @property string $harian_dokter
 * @property string $bulanan_dokter
 * @property string $harian_paramedis
 * @property string $bulanan_paramedis
 * @property string $pembayaran_ralan
 * @property string $pembayaran_ranap
 * @property string $rekap_pembayaran_ralan
 * @property string $rekap_pembayaran_ranap
 * @property string $tagihan_masuk
 * @property string $tambahan_biaya
 * @property string $potongan_biaya
 * @property string $resep_obat
 * @property string $resume_pasien
 * @property string $penyakit_ralan
 * @property string $penyakit_ranap
 * @property string $kamar
 * @property string $tarif_ralan
 * @property string $tarif_ranap
 * @property string $tarif_lab
 * @property string $tarif_radiologi
 * @property string $tarif_operasi
 * @property string $akun_rekening
 * @property string $rekening_tahun
 * @property string $posting_jurnal
 * @property string $buku_besar
 * @property string $cashflow
 * @property string $keuangan
 * @property string $pengeluaran
 * @property string $setup_pjlab
 * @property string $setup_otolokasi
 * @property string $setup_jam_kamin
 * @property string $setup_embalase
 * @property string $tracer_login
 * @property string $display
 * @property string $set_harga_obat
 * @property string $set_penggunaan_tarif
 * @property string $set_oto_ralan
 * @property string $biaya_harian
 * @property string $biaya_masuk_sekali
 * @property string $set_no_rm
 * @property string $billing_ralan
 * @property string $billing_ranap
 * @property string $jm_ranap_dokter
 * @property string $igd
 * @property string $barcoderalan
 * @property string $barcoderanap
 * @property string $set_harga_obat_ralan
 * @property string $set_harga_obat_ranap
 * @property string $penyakit_pd3i
 * @property string $surveilans_pd3i
 * @property string $surveilans_ralan
 * @property string $diagnosa_pasien
 * @property string $surveilans_ranap
 * @property string $pny_takmenular_ranap
 * @property string $pny_takmenular_ralan
 * @property string $kunjungan_ralan
 * @property string $rl32
 * @property string $rl33
 * @property string $rl37
 * @property string $rl38
 * @property string $harian_tindakan_dokter
 * @property string $sms
 * @property string $sidikjari
 * @property string $jam_masuk
 * @property string $jadwal_pegawai
 * @property string $parkir_barcode
 * @property string $set_nota
 * @property string $dpjp_ranap
 * @property string $mutasi_barang
 * @property string|null $rl34
 * @property string $rl36
 * @property string|null $fee_visit_dokter
 * @property string|null $fee_bacaan_ekg
 * @property string|null $fee_rujukan_rontgen
 * @property string|null $fee_rujukan_ranap
 * @property string|null $fee_ralan
 * @property string|null $akun_bayar
 * @property string|null $bayar_pemesanan_obat
 * @property string|null $obat_per_dokter_peresep
 * @property string|null $ipsrs_jenis_barang
 * @property string|null $pemasukan_lain
 * @property string|null $pengaturan_rekening
 * @property string|null $closing_kasir
 * @property string|null $keterlambatan_presensi
 * @property string|null $set_harga_kamar
 * @property string|null $rekap_per_shift
 * @property string|null $bpjs_cek_nik
 * @property string|null $bpjs_cek_kartu
 * @property string|null $bpjs_cek_riwayat
 * @property string|null $obat_per_cara_bayar
 * @property string|null $kunjungan_ranap
 * @property string|null $bayar_piutang
 * @property string|null $payment_point
 * @property string|null $bpjs_cek_nomor_rujukan
 * @property string|null $icd9
 * @property string|null $darurat_stok
 * @property string|null $retensi_rm
 * @property string|null $temporary_presensi
 * @property string|null $jurnal_harian
 * @property string|null $sirkulasi_obat2
 * @property string|null $edit_registrasi
 * @property string|null $bpjs_referensi_diagnosa
 * @property string|null $bpjs_referensi_poli
 * @property string|null $industrifarmasi
 * @property string|null $harian_js
 * @property string|null $bulanan_js
 * @property string|null $harian_paket_bhp
 * @property string|null $bulanan_paket_bhp
 * @property string|null $piutang_pasien2
 * @property string|null $bpjs_referensi_faskes
 * @property string|null $bpjs_sep
 * @property string|null $pengambilan_utd
 * @property string|null $tarif_utd
 * @property string|null $pengambilan_utd2
 * @property string|null $utd_medis_rusak
 * @property string|null $pengambilan_penunjang_utd
 * @property string|null $pengambilan_penunjang_utd2
 * @property string|null $utd_penunjang_rusak
 * @property string|null $suplier_penunjang
 * @property string|null $utd_donor
 * @property string|null $bpjs_monitoring_klaim
 * @property string|null $utd_cekal_darah
 * @property string|null $utd_komponen_darah
 * @property string|null $utd_stok_darah
 * @property string|null $utd_pemisahan_darah
 * @property string|null $harian_kamar
 * @property string|null $rincian_piutang_pasien
 * @property string|null $keuntungan_beri_obat_nonpiutang
 * @property string|null $reklasifikasi_ralan
 * @property string|null $reklasifikasi_ranap
 * @property string|null $utd_penyerahan_darah
 * @property string|null $hutang_obat
 * @property string|null $riwayat_obat_alkes_bhp
 * @property string|null $sensus_harian_poli
 * @property string|null $rl4a
 * @property string|null $aplicare_referensi_kamar
 * @property string|null $aplicare_ketersediaan_kamar
 * @property string|null $inacbg_klaim_baru_otomatis
 * @property string|null $inacbg_klaim_baru_manual
 * @property string|null $inacbg_coder_nik
 * @property string|null $mutasi_berkas
 * @property string|null $akun_piutang
 * @property string|null $harian_kso
 * @property string|null $bulanan_kso
 * @property string|null $harian_menejemen
 * @property string|null $bulanan_menejemen
 * @property string|null $inhealth_cek_eligibilitas
 * @property string|null $inhealth_referensi_jenpel_ruang_rawat
 * @property string|null $inhealth_referensi_poli
 * @property string|null $inhealth_referensi_faskes
 * @property string|null $inhealth_sjp
 * @property string|null $piutang_ralan
 * @property string|null $piutang_ranap
 * @property string|null $detail_piutang_penjab
 * @property string|null $lama_pelayanan_ralan
 * @property string|null $catatan_pasien
 * @property string|null $rl4b
 * @property string|null $rl4asebab
 * @property string|null $rl4bsebab
 * @property string|null $data_HAIs
 * @property string|null $harian_HAIs
 * @property string|null $bulanan_HAIs
 * @property string|null $hitung_bor
 * @property string|null $perusahaan_pasien
 * @property string|null $resep_dokter
 * @property string|null $lama_pelayanan_apotek
 * @property string|null $hitung_alos
 * @property string|null $detail_tindakan
 * @property string|null $rujukan_poli_internal
 * @property string|null $rekap_poli_anak
 * @property string|null $grafik_kunjungan_poli
 * @property string|null $grafik_kunjungan_perdokter
 * @property string|null $grafik_kunjungan_perpekerjaan
 * @property string|null $grafik_kunjungan_perpendidikan
 * @property string|null $grafik_kunjungan_pertahun
 * @property string|null $berkas_digital_perawatan
 * @property string|null $penyakit_menular_ranap
 * @property string|null $penyakit_menular_ralan
 * @property string|null $grafik_kunjungan_perbulan
 * @property string|null $grafik_kunjungan_pertanggal
 * @property string|null $grafik_kunjungan_demografi
 * @property string|null $grafik_kunjungan_statusdaftartahun
 * @property string|null $grafik_kunjungan_statusdaftartahun2
 * @property string|null $grafik_kunjungan_statusdaftarbulan
 * @property string|null $grafik_kunjungan_statusdaftarbulan2
 * @property string|null $grafik_kunjungan_statusdaftartanggal
 * @property string|null $grafik_kunjungan_statusdaftartanggal2
 * @property string|null $grafik_kunjungan_statusbataltahun
 * @property string|null $grafik_kunjungan_statusbatalbulan
 * @property string|null $pcare_cek_penyakit
 * @property string|null $grafik_kunjungan_statusbataltanggal
 * @property string|null $kategori_barang
 * @property string|null $golongan_barang
 * @property string|null $pemberian_obat_pertanggal
 * @property string|null $penjualan_obat_pertanggal
 * @property string|null $pcare_cek_kesadaran
 * @property string|null $pembatalan_periksa_dokter
 * @property string|null $pembayaran_per_unit
 * @property string|null $rekap_pembayaran_per_unit
 * @property string|null $grafik_kunjungan_percarabayar
 * @property string|null $ipsrs_pengadaan_pertanggal
 * @property string|null $ipsrs_stokkeluar_pertanggal
 * @property string|null $grafik_kunjungan_ranaptahun
 * @property string|null $pcare_cek_rujukan
 * @property string|null $grafik_lab_ralantahun
 * @property string|null $grafik_rad_ralantahun
 * @property string|null $cek_entry_ralan
 * @property string|null $inacbg_klaim_baru_manual2
 * @property string|null $permintaan_medis
 * @property string|null $rekap_permintaan_medis
 * @property string|null $surat_pemesanan_medis
 * @property string|null $permintaan_non_medis
 * @property string|null $rekap_permintaan_non_medis
 * @property string|null $surat_pemesanan_non_medis
 * @property string $grafik_per_perujuk
 * @property string|null $bpjs_cek_prosedur
 * @property string|null $bpjs_cek_kelas_rawat
 * @property string|null $bpjs_cek_dokter
 * @property string|null $bpjs_cek_spesialistik
 * @property string|null $bpjs_cek_ruangrawat
 * @property string|null $bpjs_cek_carakeluar
 * @property string|null $bpjs_cek_pasca_pulang
 * @property string|null $detail_tindakan_okvk
 * @property string|null $billing_parsial
 * @property string|null $bpjs_cek_nomor_rujukan_rs
 * @property string|null $bpjs_cek_rujukan_kartu_pcare
 * @property string|null $bpjs_cek_rujukan_kartu_rs
 * @property string|null $akses_depo_obat
 * @property string|null $bpjs_rujukan_keluar
 * @property string|null $grafik_lab_ralanbulan
 * @property string|null $pengeluaran_stok_apotek
 * @property string|null $grafik_rad_ralanbulan
 * @property string|null $detailjmdokter2
 * @property string|null $pengaduan_pasien
 * @property string|null $grafik_lab_ralanhari
 * @property string|null $grafik_rad_ralanhari
 * @property string|null $sensus_harian_ralan
 * @property string|null $metode_racik
 * @property string|null $pembayaran_akun_bayar
 * @property string|null $pengguna_obat_resep
 * @property string|null $rekap_pemesanan
 * @property string|null $master_berkas_pegawai
 * @property string|null $berkas_kepegawaian
 * @property string|null $riwayat_jabatan
 * @property string|null $riwayat_pendidikan
 * @property string|null $riwayat_naik_gaji
 * @property string|null $kegiatan_ilmiah
 * @property string|null $riwayat_penghargaan
 * @property string|null $riwayat_penelitian
 * @property string|null $penerimaan_non_medis
 * @property string|null $bayar_pesan_non_medis
 * @property string|null $hutang_barang_non_medis
 * @property string|null $rekap_pemesanan_non_medis
 * @property string|null $insiden_keselamatan
 * @property string|null $insiden_keselamatan_pasien
 * @property string|null $grafik_ikp_pertahun
 * @property string|null $grafik_ikp_perbulan
 * @property string|null $grafik_ikp_pertanggal
 * @property string|null $riwayat_data_batch
 * @property string|null $grafik_ikp_jenis
 * @property string|null $grafik_ikp_dampak
 * @property string|null $piutang_akun_piutang
 * @property string|null $grafik_kunjungan_per_agama
 * @property string|null $grafik_kunjungan_per_umur
 * @property string|null $suku_bangsa
 * @property string|null $bahasa_pasien
 * @property string|null $golongan_tni
 * @property string|null $satuan_tni
 * @property string|null $jabatan_tni
 * @property string|null $pangkat_tni
 * @property string|null $golongan_polri
 * @property string|null $satuan_polri
 * @property string|null $jabatan_polri
 * @property string|null $pangkat_polri
 * @property string|null $cacat_fisik
 * @property string|null $grafik_kunjungan_suku
 * @property string|null $grafik_kunjungan_bahasa
 * @property string|null $booking_operasi
 * @property string|null $mapping_poli_bpjs
 * @property string|null $grafik_kunjungan_per_cacat
 * @property string|null $barang_cssd
 * @property string|null $skdp_bpjs
 * @property string|null $booking_registrasi
 * @property string|null $bpjs_cek_propinsi
 * @property string|null $bpjs_cek_kabupaten
 * @property string|null $bpjs_cek_kecamatan
 * @property string|null $bpjs_cek_dokterdpjp
 * @property string|null $bpjs_cek_riwayat_rujukanrs
 * @property string|null $bpjs_cek_tanggal_rujukan
 * @property string|null $permintaan_lab
 * @property string|null $permintaan_radiologi
 * @property string|null $surat_indeks
 * @property string|null $surat_map
 * @property string|null $surat_almari
 * @property string|null $surat_rak
 * @property string|null $surat_ruang
 * @property string|null $surat_klasifikasi
 * @property string|null $surat_status
 * @property string|null $surat_sifat
 * @property string $surat_balas
 * @property string|null $surat_masuk
 * @property string|null $pcare_cek_dokter
 * @property string|null $pcare_cek_poli
 * @property string|null $pcare_cek_provider
 * @property string|null $pcare_cek_statuspulang
 * @property string|null $pcare_cek_spesialis
 * @property string|null $pcare_cek_subspesialis
 * @property string|null $pcare_cek_sarana
 * @property string|null $pcare_cek_khusus
 * @property string|null $pcare_cek_obat
 * @property string|null $pcare_cek_tindakan
 * @property string|null $pcare_cek_faskessubspesialis
 * @property string|null $pcare_cek_faskesalihrawat
 * @property string|null $pcare_cek_faskesthalasemia
 * @property string|null $pcare_mapping_obat
 * @property string|null $pcare_mapping_tindakan
 * @property string|null $pcare_club_prolanis
 * @property string|null $pcare_mapping_poli
 * @property string|null $pcare_kegiatan_kelompok
 * @property string|null $pcare_mapping_tindakan_ranap
 * @property string|null $pcare_peserta_kegiatan_kelompok
 * @property string|null $sirkulasi_obat3
 * @property string|null $bridging_pcare_daftar
 * @property string|null $pcare_mapping_dokter
 * @property string|null $ranap_per_ruang
 * @property string|null $penyakit_ranap_cara_bayar
 * @property string|null $anggota_militer_dirawat
 * @property string|null $set_input_parsial
 * @property string|null $lama_pelayanan_radiologi
 * @property string|null $lama_pelayanan_lab
 * @property string|null $bpjs_cek_sep
 * @property string|null $catatan_perawatan
 * @property string|null $surat_keluar
 * @property string|null $kegiatan_farmasi
 * @property string|null $stok_opname_logistik
 * @property string|null $sirkulasi_non_medis
 * @property string|null $rekap_lab_pertahun
 * @property string|null $perujuk_lab_pertahun
 * @property string|null $rekap_radiologi_pertahun
 * @property string|null $perujuk_radiologi_pertahun
 * @property string|null $jumlah_porsi_diet
 * @property string|null $jumlah_macam_diet
 * @property string|null $payment_point2
 * @property string|null $pembayaran_akun_bayar2
 * @property string|null $hapus_nota_salah
 * @property string|null $pengkajian_askep
 * @property string|null $hais_perbangsal
 * @property string|null $ppn_obat
 * @property string|null $saldo_akun_perbulan
 * @property string|null $display_apotek
 * @property string|null $sisrute_referensi_faskes
 * @property string|null $sisrute_referensi_alasanrujuk
 * @property string|null $sisrute_referensi_diagnosa
 * @property string|null $sisrute_rujukan_masuk
 * @property string|null $sisrute_rujukan_keluar
 * @property string|null $bpjs_cek_skdp
 * @property string|null $data_batch
 * @property string|null $kunjungan_permintaan_lab
 * @property string|null $kunjungan_permintaan_lab2
 * @property string|null $kunjungan_permintaan_radiologi
 * @property string|null $kunjungan_permintaan_radiologi2
 * @property string|null $pcare_pemberian_obat
 * @property string $pcare_pemberian_tindakan
 * @property string|null $pembayaran_akun_bayar3
 * @property string|null $password_asuransi
 * @property string $kemenkes_sitt
 * @property string|null $siranap_ketersediaan_kamar
 * @property string|null $grafik_tb_periodelaporan
 * @property string|null $grafik_tb_rujukan
 * @property string|null $grafik_tb_riwayat
 * @property string|null $grafik_tb_tipediagnosis
 * @property string|null $grafik_tb_statushiv
 * @property string|null $grafik_tb_skoringanak
 * @property string|null $grafik_tb_konfirmasiskoring5
 * @property string|null $grafik_tb_konfirmasiskoring6
 * @property string|null $grafik_tb_sumberobat
 * @property string|null $grafik_tb_hasilakhirpengobatan
 * @property string $grafik_tb_hasilteshiv
 * @property string $kadaluarsa_batch
 * @property string|null $sisa_stok
 * @property string|null $obat_per_resep
 * @property string|null $pemakaian_air_pdam
 * @property string|null $limbah_b3_medis
 * @property string|null $grafik_air_pdam_pertanggal
 * @property string|null $grafik_air_pdam_perbulan
 * @property string|null $grafik_limbahb3_pertanggal
 * @property string|null $grafik_limbahb3_perbulan
 * @property string|null $limbah_domestik
 * @property string|null $grafik_limbahdomestik_pertanggal
 * @property string|null $grafik_limbahdomestik_perbulan
 * @property string|null $mutu_air_limbah
 * @property string|null $pest_control
 * @property string|null $ruang_perpustakaan
 * @property string|null $kategori_perpustakaan
 * @property string|null $jenis_perpustakaan
 * @property string|null $pengarang_perpustakaan
 * @property string|null $penerbit_perpustakaan
 * @property string|null $koleksi_perpustakaan
 * @property string|null $inventaris_perpustakaan
 * @property string|null $set_peminjaman_perpustakaan
 * @property string|null $denda_perpustakaan
 * @property string|null $anggota_perpustakaan
 * @property string|null $peminjaman_perpustakaan
 * @property string|null $bayar_denda_perpustakaan
 * @property string|null $ebook_perpustakaan
 * @property string|null $jenis_cidera_k3rs
 * @property string|null $penyebab_k3rs
 * @property string|null $jenis_luka_k3rs
 * @property string|null $lokasi_kejadian_k3rs
 * @property string|null $dampak_cidera_k3rs
 * @property string|null $jenis_pekerjaan_k3rs
 * @property string|null $bagian_tubuh_k3rs
 * @property string|null $peristiwa_k3rs
 * @property string|null $grafik_k3_pertahun
 * @property string|null $grafik_k3_perbulan
 * @property string|null $grafik_k3_pertanggal
 * @property string|null $grafik_k3_perjeniscidera
 * @property string|null $grafik_k3_perpenyebab
 * @property string|null $grafik_k3_perjenisluka
 * @property string|null $grafik_k3_lokasikejadian
 * @property string|null $grafik_k3_dampakcidera
 * @property string|null $grafik_k3_perjenispekerjaan
 * @property string|null $grafik_k3_perbagiantubuh
 * @property string|null $jenis_cidera_k3rstahun
 * @property string|null $penyebab_k3rstahun
 * @property string|null $jenis_luka_k3rstahun
 * @property string|null $lokasi_kejadian_k3rstahun
 * @property string|null $dampak_cidera_k3rstahun
 * @property string|null $jenis_pekerjaan_k3rstahun
 * @property string|null $bagian_tubuh_k3rstahun
 * @property string|null $sekrining_rawat_jalan
 * @property string|null $bpjs_histori_pelayanan
 * @property string|null $rekap_mutasi_berkas
 * @property string|null $skrining_ralan_pernapasan_pertahun
 * @property string|null $pengajuan_barang_medis
 * @property string|null $pengajuan_barang_nonmedis
 * @property string|null $grafik_kunjungan_ranapbulan
 * @property string|null $grafik_kunjungan_ranaptanggal
 * @property string|null $grafik_kunjungan_ranap_peruang
 * @property string|null $kunjungan_bangsal_pertahun
 * @property string|null $grafik_jenjang_jabatanpegawai
 * @property string|null $grafik_bidangpegawai
 * @property string|null $grafik_departemenpegawai
 * @property string|null $grafik_pendidikanpegawai
 * @property string|null $grafik_sttswppegawai
 * @property string|null $grafik_sttskerjapegawai
 * @property string|null $grafik_sttspulangranap
 * @property string|null $kip_pasien_ranap
 * @property string|null $kip_pasien_ralan
 * @property string|null $bpjs_mapping_dokterdpjp
 * @property string|null $data_triase_igd
 * @property string|null $master_triase_skala1
 * @property string|null $master_triase_skala2
 * @property string|null $master_triase_skala3
 * @property string|null $master_triase_skala4
 * @property string|null $master_triase_skala5
 * @property string|null $master_triase_pemeriksaan
 * @property string|null $master_triase_macamkasus
 * @property string|null $rekap_permintaan_diet
 * @property string|null $daftar_pasien_ranap
 * @property string|null $daftar_pasien_ranaptni
 * @property string|null $pengajuan_asetinventaris
 * @property string|null $item_apotek_jenis
 * @property string|null $item_apotek_kategori
 * @property string|null $item_apotek_golongan
 * @property string|null $item_apotek_industrifarmasi
 * @property string|null $10_obat_terbanyak_poli
 * @property string|null $grafik_pengajuan_aset_urgensi
 * @property string|null $grafik_pengajuan_aset_status
 * @property string|null $grafik_pengajuan_aset_departemen
 * @property string|null $rekap_pengajuan_aset_departemen
 * @property string|null $grafik_kelompok_jabatanpegawai
 * @property string|null $grafik_resiko_kerjapegawai
 * @property string|null $grafik_emergency_indexpegawai
 * @property string|null $grafik_inventaris_ruang
 * @property string|null $harian_HAIs2
 * @property string|null $grafik_inventaris_jenis
 * @property string|null $data_resume_pasien
 * @property string|null $perkiraan_biaya_ranap
 * @property string|null $rekap_obat_poli
 * @property string|null $rekap_obat_pasien
 * @property string|null $permintaan_perbaikan_inventaris
 * @property string|null $grafik_HAIs_pasienbangsal
 * @property string|null $grafik_HAIs_pasienbulan
 * @property string|null $grafik_HAIs_laju_vap
 * @property string|null $grafik_HAIs_laju_iad
 * @property string|null $grafik_HAIs_laju_pleb
 * @property string|null $grafik_HAIs_laju_isk
 * @property string|null $grafik_HAIs_laju_ilo
 * @property string|null $grafik_HAIs_laju_hap
 * @property string|null $inhealth_mapping_poli
 * @property string|null $inhealth_mapping_dokter
 * @property string|null $inhealth_mapping_tindakan_ralan
 * @property string|null $inhealth_mapping_tindakan_ranap
 * @property string|null $inhealth_mapping_tindakan_radiologi
 * @property string|null $inhealth_mapping_tindakan_laborat
 * @property string|null $inhealth_mapping_tindakan_operasi
 * @property string|null $hibah_obat_bhp
 * @property string|null $asal_hibah
 * @property string|null $asuhan_gizi
 * @property string|null $inhealth_kirim_tagihan
 * @property string|null $sirkulasi_obat4
 * @property string|null $sirkulasi_obat5
 * @property string|null $sirkulasi_non_medis2
 * @property string|null $monitoring_asuhan_gizi
 * @property string|null $penerimaan_obat_perbulan
 * @property string|null $rekap_kunjungan
 * @property string|null $surat_sakit
 * @property string|null $penilaian_awal_keperawatan_ralan
 * @property string|null $permintaan_diet
 * @property string|null $master_masalah_keperawatan
 * @property string|null $pengajuan_cuti
 * @property string|null $kedatangan_pasien
 * @property string|null $utd_pendonor
 * @property string|null $toko_suplier
 * @property string|null $toko_jenis
 * @property string|null $toko_set_harga
 * @property string|null $toko_barang
 * @property string|null $penagihan_piutang_pasien
 * @property string|null $akun_penagihan_piutang
 * @property string|null $stok_opname_toko
 * @property string|null $toko_riwayat_barang
 * @property string|null $toko_surat_pemesanan
 * @property string|null $toko_pengajuan_barang
 * @property string|null $toko_penerimaan_barang
 * @property string|null $toko_pengadaan_barang
 * @property string|null $toko_hutang
 * @property string|null $toko_bayar_pemesanan
 * @property string|null $toko_member
 * @property string|null $toko_penjualan
 * @property string|null $registrasi_poli_per_tanggal
 * @property string|null $toko_piutang
 * @property string|null $toko_retur_beli
 * @property string|null $ipsrs_returbeli
 * @property string|null $ipsrs_riwayat_barang
 * @property string|null $pasien_corona
 * @property string|null $toko_pendapatan_harian
 * @property string|null $diagnosa_pasien_corona
 * @property string|null $perawatan_pasien_corona
 * @property string|null $penilaian_awal_keperawatan_gigi
 * @property string|null $master_masalah_keperawatan_gigi
 * @property string|null $toko_bayar_piutang
 * @property string|null $toko_piutang_harian
 * @property string|null $toko_penjualan_harian
 * @property string|null $deteksi_corona
 * @property string|null $penilaian_awal_keperawatan_kebidanan
 * @property string|null $pengumuman_epasien
 * @property string|null $surat_hamil
 * @property string|null $set_tarif_online
 * @property string|null $booking_periksa
 * @property string|null $toko_sirkulasi
 * @property string|null $toko_retur_jual
 * @property string|null $toko_retur_piutang
 * @property string|null $toko_sirkulasi2
 * @property string|null $toko_keuntungan_barang
 * @property string|null $zis_pengeluaran_penerima_dankes
 * @property string|null $zis_penghasilan_penerima_dankes
 * @property string|null $zis_ukuran_rumah_penerima_dankes
 * @property string|null $zis_dinding_rumah_penerima_dankes
 * @property string|null $zis_lantai_rumah_penerima_dankes
 * @property string|null $zis_atap_rumah_penerima_dankes
 * @property string|null $zis_kepemilikan_rumah_penerima_dankes
 * @property string|null $zis_kamar_mandi_penerima_dankes
 * @property string|null $zis_dapur_rumah_penerima_dankes
 * @property string|null $zis_kursi_rumah_penerima_dankes
 * @property string|null $zis_kategori_phbs_penerima_dankes
 * @property string|null $zis_elektronik_penerima_dankes
 * @property string|null $zis_ternak_penerima_dankes
 * @property string|null $zis_jenis_simpanan_penerima_dankes
 * @property string|null $penilaian_awal_keperawatan_anak
 * @property string|null $zis_kategori_asnaf_penerima_dankes
 * @property string|null $master_masalah_keperawatan_anak
 * @property string|null $master_imunisasi
 * @property string|null $zis_patologis_penerima_dankes
 * @property string|null $pcare_cek_kartu
 * @property string|null $surat_bebas_narkoba
 * @property string|null $surat_keterangan_covid
 * @property string|null $pemakaian_air_tanah
 * @property string|null $grafik_air_tanah_pertanggal
 * @property string|null $grafik_air_tanah_perbulan
 * @property string|null $lama_pelayanan_poli
 * @property string|null $hemodialisa
 * @property string|null $laporan_tahunan_irj
 * @property string|null $grafik_harian_hemodialisa
 * @property string|null $grafik_bulanan_hemodialisa
 * @property string|null $grafik_tahunan_hemodialisa
 * @property string|null $grafik_bulanan_meninggal
 * @property string|null $perbaikan_inventaris
 * @property string|null $surat_cuti_hamil
 * @property string|null $permintaan_stok_obat_pasien
 * @property string|null $pemeliharaan_inventaris
 * @property string|null $klasifikasi_pasien_ranap
 * @property string|null $bulanan_klasifikasi_pasien_ranap
 * @property string|null $harian_klasifikasi_pasien_ranap
 * @property string|null $klasifikasi_pasien_perbangsal
 * @property string|null $soap_perawatan
 * @property string|null $klaim_rawat_jalan
 * @property string|null $skrining_gizi
 * @property string|null $lama_penyiapan_rm
 * @property string|null $dosis_radiologi
 * @property string|null $demografi_umur_kunjungan
 * @property string|null $jam_diet_pasien
 * @property string|null $rvu_bpjs
 * @property string|null $verifikasi_penerimaan_farmasi
 * @property string|null $verifikasi_penerimaan_logistik
 * @property string|null $pemeriksaan_lab_pa
 * @property string|null $ringkasan_pengajuan_obat
 * @property string|null $ringkasan_pemesanan_obat
 * @property string|null $ringkasan_pengadaan_obat
 * @property string|null $ringkasan_penerimaan_obat
 * @property string|null $ringkasan_hibah_obat
 * @property string|null $ringkasan_penjualan_obat
 * @property string|null $ringkasan_beri_obat
 * @property string|null $ringkasan_piutang_obat
 * @property string|null $ringkasan_stok_keluar_obat
 * @property string|null $ringkasan_retur_suplier_obat
 * @property string|null $ringkasan_retur_pembeli_obat
 * @property string|null $penilaian_awal_keperawatan_ranapkebidanan
 * @property string|null $ringkasan_pengajuan_nonmedis
 * @property string|null $ringkasan_pemesanan_nonmedis
 * @property string|null $ringkasan_pengadaan_nonmedis
 * @property string|null $ringkasan_penerimaan_nonmedis
 * @property string|null $ringkasan_stokkeluar_nonmedis
 * @property string|null $ringkasan_returbeli_nonmedis
 * @property string|null $omset_penerimaan
 * @property string|null $validasi_penagihan_piutang
 * @property string|null $permintaan_ranap
 * @property string|null $bpjs_diagnosa_prb
 * @property string|null $bpjs_obat_prb
 * @property string|null $bpjs_surat_kontrol
 * @property string|null $penggunaan_bhp_ok
 * @property string|null $surat_keterangan_rawat_inap
 * @property string|null $surat_keterangan_sehat
 * @property string|null $pendapatan_per_carabayar
 * @property string|null $akun_host_to_host_bank_jateng
 * @property string|null $pembayaran_bank_jateng
 * @property string|null $bpjs_surat_pri
 * @property string|null $ringkasan_tindakan
 * @property string|null $lama_pelayanan_pasien
 * @property string|null $surat_sakit_pihak_2
 * @property string|null $tagihan_hutang_obat
 * @property string|null $referensi_mobilejkn_bpjs
 * @property string|null $batal_pendaftaran_mobilejkn_bpjs
 * @property string|null $lama_operasi
 * @property string|null $grafik_inventaris_kategori
 * @property string|null $grafik_inventaris_merk
 * @property string|null $grafik_inventaris_produsen
 * @property string|null $pengembalian_deposit_pasien
 * @property string|null $validasi_tagihan_hutang_obat
 * @property string|null $piutang_obat_belum_lunas
 * @property string|null $integrasi_briapi
 * @property string|null $pengadaan_aset_inventaris
 * @property string|null $akun_aset_inventaris
 * @property string|null $suplier_inventaris
 * @property string|null $penerimaan_aset_inventaris
 * @property string|null $bayar_pemesanan_iventaris
 * @property string|null $hutang_aset_inventaris
 * @property string|null $hibah_aset_inventaris
 * @property string|null $titip_faktur_non_medis
 * @property string|null $validasi_tagihan_non_medis
 * @property string|null $titip_faktur_aset
 * @property string|null $validasi_tagihan_aset
 * @property string|null $hibah_non_medis
 * @property string|null $pcare_alasan_tacc
 * @property string|null $resep_luar
 * @property string|null $surat_bebas_tbc
 * @property string|null $surat_buta_warna
 * @property string|null $surat_bebas_tato
 * @property string|null $surat_kewaspadaan_kesehatan
 * @property string|null $grafik_porsidiet_pertanggal
 * @property string|null $grafik_porsidiet_perbulan
 * @property string|null $grafik_porsidiet_pertahun
 * @property string|null $grafik_porsidiet_perbangsal
 * @property string|null $penilaian_awal_medis_ralan
 * @property string|null $master_masalah_keperawatan_mata
 * @property string|null $penilaian_awal_keperawatan_mata
 * @property string|null $penilaian_awal_medis_ranap
 * @property string|null $penilaian_awal_medis_ranap_kebidanan
 * @property string|null $penilaian_awal_medis_ralan_kebidanan
 * @property string|null $penilaian_awal_medis_igd
 * @property string|null $penilaian_awal_medis_ralan_anak
 * @property string|null $bpjs_referensi_poli_hfis
 * @property string|null $bpjs_referensi_dokter_hfis
 * @property string|null $bpjs_referensi_jadwal_hfis
 * @property string|null $penilaian_fisioterapi
 * @property string|null $bpjs_program_prb
 * @property string|null $bpjs_suplesi_jasaraharja
 * @property string|null $bpjs_data_induk_kecelakaan
 * @property string|null $bpjs_sep_internal
 * @property string|null $bpjs_klaim_jasa_raharja
 * @property string|null $bpjs_daftar_finger_print
 * @property string|null $bpjs_rujukan_khusus
 * @property string|null $pemeliharaan_gedung
 * @property string|null $grafik_perbaikan_inventaris_pertanggal
 * @property string|null $grafik_perbaikan_inventaris_perbulan
 * @property string|null $grafik_perbaikan_inventaris_pertahun
 * @property string|null $grafik_perbaikan_inventaris_perpelaksana_status
 * @property string|null $penilaian_mcu
 * @property string $peminjam_piutang
 * @property string|null $piutang_lainlain
 * @property string|null $cara_bayar
 * @property string|null $audit_kepatuhan_apd
 * @property string|null $bpjs_task_id
 * @property string|null $bayar_piutang_lain
 * @property string|null $pembayaran_akun_bayar4
 * @property string|null $stok_akhir_farmasi_pertanggal
 * @property string|null $riwayat_kamar_pasien
 * @property string|null $uji_fungsi_kfr
 * @property string|null $hapus_berkas_digital_perawatan
 * @property string|null $kategori_pengeluaran_harian
 * @property string|null $kategori_pemasukan_lain
 * @property string|null $pembayaran_akun_bayar5
 * @property string|null $ruang_ok
 * @property string|null $telaah_resep
 * @property string|null $jasa_tindakan_pasien
 * @property string|null $permintaan_resep_pulang
 * @property string|null $rekap_jm_dokter
 * @property string|null $status_data_rm
 * @property string|null $ubah_petugas_lab_pk
 * @property string|null $ubah_petugas_lab_pa
 * @property string|null $ubah_petugas_radiologi
 * @property string|null $gabung_norawat
 * @property string|null $gabung_rm
 * @property string|null $ringkasan_biaya_obat_pasien_pertanggal
 * @property string|null $master_masalah_keperawatan_igd
 * @property string|null $penilaian_awal_keperawatan_igd
 * @property string|null $bpjs_referensi_dpho_apotek
 * @property string|null $bpjs_referensi_poli_apotek
 * @property string|null $bayar_jm_dokter
 * @property string|null $bpjs_referensi_faskes_apotek
 * @property string|null $bpjs_referensi_spesialistik_apotek
 * @property string|null $pembayaran_briva
 * @property string|null $penilaian_awal_keperawatan_ranap
 * @property string|null $nilai_penerimaan_vendor_farmasi_perbulan
 * @property string|null $akun_bayar_hutang
 * @property string|null $master_rencana_keperawatan
 * @property string|null $laporan_tahunan_igd
 * @property string|null $obat_bhp_tidakbergerak
 * @property string|null $ringkasan_hutang_vendor_farmasi
 * @property string|null $nilai_penerimaan_vendor_nonmedis_perbulan
 * @property string|null $ringkasan_hutang_vendor_nonmedis
 * @property string|null $master_rencana_keperawatan_anak
 * @property string|null $anggota_polri_dirawat
 * @property string|null $daftar_pasien_ranap_polri
 * @property string|null $soap_ralan_polri
 * @property string|null $soap_ranap_polri
 * @property string|null $laporan_penyakit_polri
 * @property string|null $jumlah_pengunjung_ralan_polri
 * @property string|null $catatan_observasi_igd
 * @property string|null $catatan_observasi_ranap
 * @property string|null $catatan_observasi_ranap_kebidanan
 * @property string|null $catatan_observasi_ranap_postpartum
 * @property string|null $penilaian_awal_medis_ralan_tht
 * @property string|null $penilaian_psikologi
 * @property string|null $audit_cuci_tangan_medis
 * @property string|null $audit_pembuangan_limbah
 * @property string|null $ruang_audit_kepatuhan
 * @property string|null $audit_pembuangan_benda_tajam
 * @property string|null $audit_penanganan_darah
 * @property string|null $audit_pengelolaan_linen_kotor
 * @property string|null $audit_penempatan_pasien
 * @property string|null $audit_kamar_jenazah
 * @property string|null $audit_bundle_iadp
 * @property string|null $audit_bundle_ido
 * @property string|null $audit_fasilitas_kebersihan_tangan
 * @property string|null $audit_fasilitas_apd
 * @property string|null $audit_pembuangan_limbah_cair_infeksius
 * @property string|null $audit_sterilisasi_alat
 * @property string|null $penilaian_awal_medis_ralan_psikiatri
 * @property string|null $persetujuan_penolakan_tindakan
 * @property string|null $audit_bundle_isk
 * @property string|null $audit_bundle_plabsi
 * @property string|null $audit_bundle_vap
 * @property string|null $akun_host_to_host_bank_papua
 * @property string|null $pembayaran_bank_papua
 * @property string|null $penilaian_awal_medis_ralan_penyakit_dalam
 * @property string|null $penilaian_awal_medis_ralan_mata
 * @property string|null $penilaian_awal_medis_ralan_neurologi
 * @property string|null $sirkulasi_obat6
 * @property string|null $penilaian_awal_medis_ralan_orthopedi
 * @property string|null $penilaian_awal_medis_ralan_bedah
 * @property string|null $integrasi_khanza_health_services
 * @property string|null $soap_ralan_tni
 * @property string|null $soap_ranap_tni
 * @property string|null $jumlah_pengunjung_ralan_tni
 * @property string|null $laporan_penyakit_tni
 * @property string|null $catatan_keperawatan_ranap
 * @property string|null $master_rencana_keperawatan_gigi
 * @property string|null $master_rencana_keperawatan_mata
 * @property string|null $master_rencana_keperawatan_igd
 * @property string|null $master_masalah_keperawatan_psikiatri
 * @property string|null $master_rencana_keperawatan_psikiatri
 * @property string|null $penilaian_awal_keperawatan_psikiatri
 * @property string|null $pemantauan_pews_anak
 * @property string|null $surat_pulang_atas_permintaan_sendiri
 * @property string|null $template_hasil_radiologi
 * @property string|null $laporan_bulanan_irj
 * @property string|null $template_pemeriksaan
 * @property string|null $pemeriksaan_lab_mb
 * @property string|null $ubah_petugas_lab_mb
 * @property string|null $penilaian_pre_operasi
 * @property string|null $penilaian_pre_anestesi
 * @property string|null $perencanaan_pemulangan
 * @property string|null $penilaian_lanjutan_resiko_jatuh_dewasa
 * @property string|null $penilaian_lanjutan_resiko_jatuh_anak
 * @property string|null $penilaian_awal_medis_ralan_geriatri
 * @property string|null $penilaian_tambahan_pasien_geriatri
 * @property string|null $skrining_nutrisi_dewasa
 * @property string|null $skrining_nutrisi_lansia
 * @property string|null $hasil_pemeriksaan_usg
 * @property string|null $skrining_nutrisi_anak
 * @property string|null $akun_host_to_host_bank_jabar
 * @property string|null $pembayaran_bank_jabar
 * @property string|null $surat_pernyataan_pasien_umum
 * @property string|null $konseling_farmasi
 * @property string|null $pelayanan_informasi_obat
 * @property string|null $jawaban_pio_apoteker
 * @property string|null $surat_persetujuan_umum
 * @property string|null $transfer_pasien_antar_ruang
 * @property string|null $satu_sehat_referensi_dokter
 * @property string|null $satu_sehat_referensi_pasien
 * @property string|null $satu_sehat_mapping_departemen
 * @property string|null $satu_sehat_mapping_lokasi
 * @property string|null $satu_sehat_kirim_encounter
 * @property string|null $catatan_cek_gds
 * @property string|null $satu_sehat_kirim_condition
 * @property string|null $checklist_pre_operasi
 * @property string|null $satu_sehat_kirim_observationttv
 * @property string|null $signin_sebelum_anestesi
 * @property string|null $satu_sehat_kirim_procedure
 * @property string|null $operasi_per_bulan
 * @property string|null $timeout_sebelum_insisi
 * @property string|null $signout_sebelum_menutup_luka
 * @property string|null $dapur_barang
 * @property string|null $dapur_opname
 * @property string|null $satu_sehat_mapping_vaksin
 * @property string|null $dapur_suplier
 * @property string|null $satu_sehat_kirim_Immunization
 * @property string|null $checklist_post_operasi
 * @property string|null $dapur_pembelian
 * @property string|null $dapur_stok_keluar
 * @property string|null $dapur_riwayat_barang
 * @property string|null $permintaan_dapur
 * @property string|null $rekonsiliasi_obat
 * @property string|null $biaya_pengadaan_dapur
 * @property string|null $rekap_pengadaan_dapur
 * @property string|null $kesling_limbah_b3medis_cair
 * @property string|null $grafik_limbahb3cair_pertanggal
 * @property string|null $grafik_limbahb3cair_perbulan
 * @property string|null $rekap_biaya_registrasi
 * @property string|null $konfirmasi_rekonsiliasi_obat
 * @property string $satu_sehat_kirim_clinicalimpression
 * @property string|null $penilaian_pasien_terminal
 * @property string|null $surat_persetujuan_rawat_inap
 * @property string|null $monitoring_reaksi_tranfusi
 * @property string|null $penilaian_korban_kekerasan
 * @property string|null $penilaian_lanjutan_resiko_jatuh_lansia
 * @property string|null $penilaian_pasien_penyakit_menular
 * @property string|null $mpp_skrining
 * @property string|null $edukasi_pasien_keluarga_rj
 * @property string|null $pemantauan_pews_dewasa
 * @property string|null $penilaian_tambahan_bunuh_diri
 * @property string|null $bpjs_antrean_pertanggal
 * @property string|null $penilaian_tambahan_perilaku_kekerasan
 * @property string|null $penilaian_tambahan_beresiko_melarikan_diri
 * @property string|null $persetujuan_penundaan_pelayanan
 * @property string|null $sisa_diet_pasien
 * @property string|null $penilaian_awal_medis_ralan_bedah_mulut
 * @property string|null $penilaian_pasien_keracunan
 * @property string|null $pemantauan_meows_obstetri
 * @property string|null $catatan_adime_gizi
 * @property string|null $pengajuan_biaya
 * @property string|null $penilaian_awal_keperawatan_ralan_geriatri
 * @property string|null $master_masalah_keperawatan_geriatri
 * @property string|null $master_rencana_keperawatan_geriatri
 * @property string|null $checklist_kriteria_masuk_hcu
 * @property string|null $checklist_kriteria_keluar_hcu
 * @property string|null $penilaian_risiko_dekubitus
 * @property string|null $master_menolak_anjuran_medis
 * @property string|null $penolakan_anjuran_medis
 * @property string|null $laporan_tahunan_penolakan_anjuran_medis
 * @property string|null $template_laporan_operasi
 * @property string|null $hasil_tindakan_eswl
 * @property string|null $checklist_kriteria_masuk_icu
 * @property string|null $checklist_kriteria_keluar_icu
 * @property string|null $akses_dokter_lain_rawat_jalan
 * @property string|null $follow_up_dbd
 * @property string|null $penilaian_risiko_jatuh_neonatus
 * @property string|null $persetujuan_pengajuan_biaya
 * @property string|null $pemeriksaan_fisik_ralan_per_penyakit
 * @property string|null $penilaian_lanjutan_resiko_jatuh_geriatri
 * @property string|null $pemantauan_ews_neonatus
 * @property string|null $validasi_persetujuan_pengajuan_biaya
 * @property string|null $riwayat_perawatan_icare_bpjs
 * @property string|null $rekap_pengajuan_biaya
 * @property string|null $penilaian_awal_medis_ralan_kulit_kelamin
 * @property string|null $akun_host_to_host_bank_mandiri
 * @property string|null $penilaian_medis_hemodialisa
 * @property string|null $penilaian_level_kecemasan_ranap_anak
 * @property string|null $penilaian_lanjutan_resiko_jatuh_psikiatri
 * @property string|null $penilaian_lanjutan_skrining_fungsional
 * @property string|null $penilaian_medis_ralan_rehab_medik
 * @property string|null $laporan_anestesi
 * @property string $template_persetujuan_penolakan_tindakan
 * @property string|null $penilaian_medis_ralan_gawat_darurat_psikiatri
 * @property string|null $bpjs_referensi_setting_apotek
 * @property string|null $bpjs_referensi_obat_apotek
 * @property string|null $bpjs_mapping_obat_apotek
 * @property string|null $pembayaran_bank_mandiri
 * @property string|null $penilaian_ulang_nyeri
 * @property string|null $penilaian_terapi_wicara
 * @property string|null $bpjs_obat_23hari_apotek
 * @property string|null $pengkajian_restrain
 * @property string|null $bpjs_kunjungan_sep_apotek
 * @property string|null $bpjs_monitoring_klaim_apotek
 * @property string|null $bpjs_daftar_pelayanan_obat_apotek
 * @property string|null $penilaian_awal_medis_ralan_paru
 * @property string|null $catatan_keperawatan_ralan
 * @property string|null $catatan_persalinan
 * @property string|null $skor_aldrette_pasca_anestesi
 * @property string|null $skor_steward_pasca_anestesi
 * @property string|null $skor_bromage_pasca_anestesi
 * @property string|null $penilaian_pre_induksi
 * @property string|null $hasil_usg_urologi
 * @property string|null $hasil_usg_gynecologi
 * @property string|null $hasil_pemeriksaan_ekg
 * @property string|null $hapus_edit_sep_bpjs
 * @property string|null $satu_sehat_kirim_diet
 * @property string|null $satu_sehat_mapping_obat
 * @property string|null $dapur_ringkasan_pembelian
 * @property string|null $satu_sehat_kirim_medication
 * @property string|null $satu_sehat_kirim_medicationrequest
 * @property string|null $penatalaksanaan_terapi_okupasi
 * @property string|null $satu_sehat_kirim_medicationdispense
 * @property string|null $hasil_usg_neonatus
 * @property string|null $hasil_endoskopi_faring_laring
 * @property string|null $satu_sehat_mapping_radiologi
 * @property string|null $satu_sehat_kirim_servicerequest_radiologi
 * @property string|null $hasil_endoskopi_hidung
 * @property string|null $satu_sehat_kirim_specimen_radiologi
 * @property string|null $master_masalah_keperawatan_neonatus
 * @property string|null $master_rencana_keperawatan_neonatus
 * @property string|null $penilaian_awal_keperawatan_ranap_neonatus
 * @property string|null $satu_sehat_kirim_observation_radiologi
 * @property string|null $satu_sehat_kirim_diagnosticreport_radiologi
 * @property string|null $hasil_endoskopi_telinga
 * @property string|null $satu_sehat_mapping_lab
 * @property string|null $satu_sehat_kirim_servicerequest_lab
 * @property string|null $satu_sehat_kirim_servicerequest_labmb
 * @property string|null $satu_sehat_kirim_specimen_lab
 * @property string|null $satu_sehat_kirim_specimen_labmb
 * @property string|null $satu_sehat_kirim_observation_lab
 * @property string|null $satu_sehat_kirim_observation_labmb
 * @property string|null $satu_sehat_kirim_diagnosticreport_lab
 * @property string|null $satu_sehat_kirim_diagnosticreport_labmb
 * @property string|null $kepatuhan_kelengkapan_keselamatan_bedah
 * @property string|null $nilai_piutang_perjenis_bayar_per_bulan
 * @property string|null $ringkasan_piutang_jenis_bayar
 * @property string|null $penilaian_pasien_imunitas_rendah
 * @property string|null $balance_cairan
 * @property string|null $catatan_observasi_chbp
 * @property string|null $catatan_observasi_induksi_persalinan
 * @property string|null $skp_kategori_penilaian
 * @property string|null $skp_kriteria_penilaian
 * @property string|null $skp_penilaian
 * @property string|null $referensi_poli_mobilejknfktp
 * @property string|null $referensi_dokter_mobilejknfktp
 * @property string|null $skp_rekapitulasi_penilaian
 * @property string|null $pembayaran_pihak_ke3_bankmandiri
 * @property string|null $metode_pembayaran_bankmandiri
 * @property string|null $bank_tujuan_transfer_bankmandiri
 * @property string|null $kodetransaksi_tujuan_transfer_bankmandiri
 * @property string|null $konsultasi_medik
 * @property string|null $jawaban_konsultasi_medik
 * @property string|null $pcare_cek_alergi
 * @property string|null $pcare_cek_prognosa
 * @property string|null $data_sasaran_usiaproduktif
 * @property string|null $data_sasaran_usialansia
 * @property string|null $skrining_perilaku_merokok_sekolah_remaja
 * @property string|null $skrining_kekerasan_pada_perempuan
 * @property string|null $skrining_obesitas
 * @property string|null $skrining_risiko_kanker_payudara
 * @property string|null $skrining_risiko_kanker_paru
 * @property string|null $skrining_tbc
 * @property string|null $skrining_kesehatan_gigi_mulut_remaja
 * @property string|null $penilaian_awal_keperawatan_ranap_bayi
 * @property string|null $booking_mcu_perusahaan
 * @property string|null $catatan_observasi_restrain_nonfarma
 * @property string|null $catatan_observasi_ventilator
 * @property string|null $catatan_anestesi_sedasi
 * @property string|null $skrining_puma
 * @property string|null $satu_sehat_kirim_careplan
 * @property string|null $satu_sehat_kirim_medicationstatement
 * @property string|null $skrining_adiksi_nikotin
 * @property string|null $skrining_thalassemia
 * @property string|null $skrining_instrumen_sdq
 * @property string|null $skrining_instrumen_srq
 * @property string|null $checklist_pemberian_fibrinolitik
 * @property string|null $skrining_kanker_kolorektal
 * @property string|null $dapur_pemesanan
 * @property string|null $bayar_pesan_dapur
 * @property string|null $hutang_dapur
 * @property string|null $titip_faktur_dapur
 * @property string|null $validasi_tagihan_dapur
 * @property string|null $surat_pemesanan_dapur
 * @property string|null $pengajuan_barang_dapur
 * @property string|null $dapur_returbeli
 * @property string|null $hibah_dapur
 * @property string|null $ringkasan_penerimaan_dapur
 * @property string|null $ringkasan_pengajuan_dapur
 * @property string|null $ringkasan_pemesanan_dapur
 * @property string|null $ringkasan_returbeli_dapur
 * @property string|null $ringkasan_stokkeluar_dapur
 * @property string|null $dapur_stokkeluar_pertanggal
 * @property string|null $sirkulasi_dapur
 * @property string|null $sirkulasi_dapur2
 * @property string|null $verifikasi_penerimaan_dapur
 * @property string|null $nilai_penerimaan_vendor_dapur_perbulan
 * @property string|null $ringkasan_hutang_vendor_dapur
 * @property string|null $penilaian_psikologi_klinis
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'password', 'penyakit', 'obat_penyakit', 'dokter', 'jadwal_praktek', 'petugas', 'pasien', 'registrasi', 'tindakan_ralan', 'kamar_inap', 'tindakan_ranap', 'operasi', 'rujukan_keluar', 'rujukan_masuk', 'beri_obat', 'resep_pulang', 'pasien_meninggal', 'diet_pasien', 'kelahiran_bayi', 'periksa_lab', 'periksa_radiologi', 'kasir_ralan', 'deposit_pasien', 'piutang_pasien', 'peminjaman_berkas', 'barcode', 'presensi_harian', 'presensi_bulanan', 'pegawai_admin', 'pegawai_user', 'suplier', 'satuan_barang', 'konversi_satuan', 'jenis_barang', 'obat', 'stok_opname_obat', 'stok_obat_pasien', 'pengadaan_obat', 'pemesanan_obat', 'penjualan_obat', 'piutang_obat', 'retur_ke_suplier', 'retur_dari_pembeli', 'retur_obat_ranap', 'retur_piutang_pasien', 'keuntungan_penjualan', 'keuntungan_beri_obat', 'sirkulasi_obat', 'ipsrs_barang', 'ipsrs_pengadaan_barang', 'ipsrs_stok_keluar', 'ipsrs_rekap_pengadaan', 'ipsrs_rekap_stok_keluar', 'ipsrs_pengeluaran_harian', 'inventaris_jenis', 'inventaris_kategori', 'inventaris_merk', 'inventaris_ruang', 'inventaris_produsen', 'inventaris_koleksi', 'inventaris_inventaris', 'inventaris_sirkulasi', 'parkir_jenis', 'parkir_in', 'parkir_out', 'parkir_rekap_harian', 'parkir_rekap_bulanan', 'informasi_kamar', 'harian_tindakan_poli', 'obat_per_poli', 'obat_per_kamar', 'obat_per_dokter_ralan', 'obat_per_dokter_ranap', 'harian_dokter', 'bulanan_dokter', 'harian_paramedis', 'bulanan_paramedis', 'pembayaran_ralan', 'pembayaran_ranap', 'rekap_pembayaran_ralan', 'rekap_pembayaran_ranap', 'tagihan_masuk', 'tambahan_biaya', 'potongan_biaya', 'resep_obat', 'resume_pasien', 'penyakit_ralan', 'penyakit_ranap', 'kamar', 'tarif_ralan', 'tarif_ranap', 'tarif_lab', 'tarif_radiologi', 'tarif_operasi', 'akun_rekening', 'rekening_tahun', 'posting_jurnal', 'buku_besar', 'cashflow', 'keuangan', 'pengeluaran', 'setup_pjlab', 'setup_otolokasi', 'setup_jam_kamin', 'setup_embalase', 'tracer_login', 'display', 'set_harga_obat', 'set_penggunaan_tarif', 'set_oto_ralan', 'biaya_harian', 'biaya_masuk_sekali', 'set_no_rm', 'billing_ralan', 'billing_ranap', 'jm_ranap_dokter', 'igd', 'barcoderalan', 'barcoderanap', 'set_harga_obat_ralan', 'set_harga_obat_ranap', 'penyakit_pd3i', 'surveilans_pd3i', 'surveilans_ralan', 'diagnosa_pasien', 'surveilans_ranap', 'pny_takmenular_ranap', 'pny_takmenular_ralan', 'kunjungan_ralan', 'rl32', 'rl33', 'rl37', 'rl38', 'harian_tindakan_dokter', 'sms', 'sidikjari', 'jam_masuk', 'jadwal_pegawai', 'parkir_barcode', 'set_nota', 'dpjp_ranap', 'mutasi_barang', 'rl36', 'grafik_per_perujuk', 'surat_balas', 'pcare_pemberian_tindakan', 'kemenkes_sitt', 'grafik_tb_hasilteshiv', 'kadaluarsa_batch', 'peminjam_piutang', 'satu_sehat_kirim_clinicalimpression', 'template_persetujuan_penolakan_tindakan'], 'required'],
            [['password', 'penyakit', 'obat_penyakit', 'dokter', 'jadwal_praktek', 'petugas', 'pasien', 'registrasi', 'tindakan_ralan', 'kamar_inap', 'tindakan_ranap', 'operasi', 'rujukan_keluar', 'rujukan_masuk', 'beri_obat', 'resep_pulang', 'pasien_meninggal', 'diet_pasien', 'kelahiran_bayi', 'periksa_lab', 'periksa_radiologi', 'kasir_ralan', 'deposit_pasien', 'piutang_pasien', 'peminjaman_berkas', 'barcode', 'presensi_harian', 'presensi_bulanan', 'pegawai_admin', 'pegawai_user', 'suplier', 'satuan_barang', 'konversi_satuan', 'jenis_barang', 'obat', 'stok_opname_obat', 'stok_obat_pasien', 'pengadaan_obat', 'pemesanan_obat', 'penjualan_obat', 'piutang_obat', 'retur_ke_suplier', 'retur_dari_pembeli', 'retur_obat_ranap', 'retur_piutang_pasien', 'keuntungan_penjualan', 'keuntungan_beri_obat', 'sirkulasi_obat', 'ipsrs_barang', 'ipsrs_pengadaan_barang', 'ipsrs_stok_keluar', 'ipsrs_rekap_pengadaan', 'ipsrs_rekap_stok_keluar', 'ipsrs_pengeluaran_harian', 'inventaris_jenis', 'inventaris_kategori', 'inventaris_merk', 'inventaris_ruang', 'inventaris_produsen', 'inventaris_koleksi', 'inventaris_inventaris', 'inventaris_sirkulasi', 'parkir_jenis', 'parkir_in', 'parkir_out', 'parkir_rekap_harian', 'parkir_rekap_bulanan', 'informasi_kamar', 'harian_tindakan_poli', 'obat_per_poli', 'obat_per_kamar', 'obat_per_dokter_ralan', 'obat_per_dokter_ranap', 'harian_dokter', 'bulanan_dokter', 'harian_paramedis', 'bulanan_paramedis', 'pembayaran_ralan', 'pembayaran_ranap', 'rekap_pembayaran_ralan', 'rekap_pembayaran_ranap', 'tagihan_masuk', 'tambahan_biaya', 'potongan_biaya', 'resep_obat', 'resume_pasien', 'penyakit_ralan', 'penyakit_ranap', 'kamar', 'tarif_ralan', 'tarif_ranap', 'tarif_lab', 'tarif_radiologi', 'tarif_operasi', 'akun_rekening', 'rekening_tahun', 'posting_jurnal', 'buku_besar', 'cashflow', 'keuangan', 'pengeluaran', 'setup_pjlab', 'setup_otolokasi', 'setup_jam_kamin', 'setup_embalase', 'tracer_login', 'display', 'set_harga_obat', 'set_penggunaan_tarif', 'set_oto_ralan', 'biaya_harian', 'biaya_masuk_sekali', 'set_no_rm', 'billing_ralan', 'billing_ranap', 'jm_ranap_dokter', 'igd', 'barcoderalan', 'barcoderanap', 'set_harga_obat_ralan', 'set_harga_obat_ranap', 'penyakit_pd3i', 'surveilans_pd3i', 'surveilans_ralan', 'diagnosa_pasien', 'surveilans_ranap', 'pny_takmenular_ranap', 'pny_takmenular_ralan', 'kunjungan_ralan', 'rl32', 'rl33', 'rl37', 'rl38', 'harian_tindakan_dokter', 'sms', 'sidikjari', 'jam_masuk', 'jadwal_pegawai', 'parkir_barcode', 'set_nota', 'dpjp_ranap', 'mutasi_barang', 'rl34', 'rl36', 'fee_visit_dokter', 'fee_bacaan_ekg', 'fee_rujukan_rontgen', 'fee_rujukan_ranap', 'fee_ralan', 'akun_bayar', 'bayar_pemesanan_obat', 'obat_per_dokter_peresep', 'ipsrs_jenis_barang', 'pemasukan_lain', 'pengaturan_rekening', 'closing_kasir', 'keterlambatan_presensi', 'set_harga_kamar', 'rekap_per_shift', 'bpjs_cek_nik', 'bpjs_cek_kartu', 'bpjs_cek_riwayat', 'obat_per_cara_bayar', 'kunjungan_ranap', 'bayar_piutang', 'payment_point', 'bpjs_cek_nomor_rujukan', 'icd9', 'darurat_stok', 'retensi_rm', 'temporary_presensi', 'jurnal_harian', 'sirkulasi_obat2', 'edit_registrasi', 'bpjs_referensi_diagnosa', 'bpjs_referensi_poli', 'industrifarmasi', 'harian_js', 'bulanan_js', 'harian_paket_bhp', 'bulanan_paket_bhp', 'piutang_pasien2', 'bpjs_referensi_faskes', 'bpjs_sep', 'pengambilan_utd', 'tarif_utd', 'pengambilan_utd2', 'utd_medis_rusak', 'pengambilan_penunjang_utd', 'pengambilan_penunjang_utd2', 'utd_penunjang_rusak', 'suplier_penunjang', 'utd_donor', 'bpjs_monitoring_klaim', 'utd_cekal_darah', 'utd_komponen_darah', 'utd_stok_darah', 'utd_pemisahan_darah', 'harian_kamar', 'rincian_piutang_pasien', 'keuntungan_beri_obat_nonpiutang', 'reklasifikasi_ralan', 'reklasifikasi_ranap', 'utd_penyerahan_darah', 'hutang_obat', 'riwayat_obat_alkes_bhp', 'sensus_harian_poli', 'rl4a', 'aplicare_referensi_kamar', 'aplicare_ketersediaan_kamar', 'inacbg_klaim_baru_otomatis', 'inacbg_klaim_baru_manual', 'inacbg_coder_nik', 'mutasi_berkas', 'akun_piutang', 'harian_kso', 'bulanan_kso', 'harian_menejemen', 'bulanan_menejemen', 'inhealth_cek_eligibilitas', 'inhealth_referensi_jenpel_ruang_rawat', 'inhealth_referensi_poli', 'inhealth_referensi_faskes', 'inhealth_sjp', 'piutang_ralan', 'piutang_ranap', 'detail_piutang_penjab', 'lama_pelayanan_ralan', 'catatan_pasien', 'rl4b', 'rl4asebab', 'rl4bsebab', 'data_HAIs', 'harian_HAIs', 'bulanan_HAIs', 'hitung_bor', 'perusahaan_pasien', 'resep_dokter', 'lama_pelayanan_apotek', 'hitung_alos', 'detail_tindakan', 'rujukan_poli_internal', 'rekap_poli_anak', 'grafik_kunjungan_poli', 'grafik_kunjungan_perdokter', 'grafik_kunjungan_perpekerjaan', 'grafik_kunjungan_perpendidikan', 'grafik_kunjungan_pertahun', 'berkas_digital_perawatan', 'penyakit_menular_ranap', 'penyakit_menular_ralan', 'grafik_kunjungan_perbulan', 'grafik_kunjungan_pertanggal', 'grafik_kunjungan_demografi', 'grafik_kunjungan_statusdaftartahun', 'grafik_kunjungan_statusdaftartahun2', 'grafik_kunjungan_statusdaftarbulan', 'grafik_kunjungan_statusdaftarbulan2', 'grafik_kunjungan_statusdaftartanggal', 'grafik_kunjungan_statusdaftartanggal2', 'grafik_kunjungan_statusbataltahun', 'grafik_kunjungan_statusbatalbulan', 'pcare_cek_penyakit', 'grafik_kunjungan_statusbataltanggal', 'kategori_barang', 'golongan_barang', 'pemberian_obat_pertanggal', 'penjualan_obat_pertanggal', 'pcare_cek_kesadaran', 'pembatalan_periksa_dokter', 'pembayaran_per_unit', 'rekap_pembayaran_per_unit', 'grafik_kunjungan_percarabayar', 'ipsrs_pengadaan_pertanggal', 'ipsrs_stokkeluar_pertanggal', 'grafik_kunjungan_ranaptahun', 'pcare_cek_rujukan', 'grafik_lab_ralantahun', 'grafik_rad_ralantahun', 'cek_entry_ralan', 'inacbg_klaim_baru_manual2', 'permintaan_medis', 'rekap_permintaan_medis', 'surat_pemesanan_medis', 'permintaan_non_medis', 'rekap_permintaan_non_medis', 'surat_pemesanan_non_medis', 'grafik_per_perujuk', 'bpjs_cek_prosedur', 'bpjs_cek_kelas_rawat', 'bpjs_cek_dokter', 'bpjs_cek_spesialistik', 'bpjs_cek_ruangrawat', 'bpjs_cek_carakeluar', 'bpjs_cek_pasca_pulang', 'detail_tindakan_okvk', 'billing_parsial', 'bpjs_cek_nomor_rujukan_rs', 'bpjs_cek_rujukan_kartu_pcare', 'bpjs_cek_rujukan_kartu_rs', 'akses_depo_obat', 'bpjs_rujukan_keluar', 'grafik_lab_ralanbulan', 'pengeluaran_stok_apotek', 'grafik_rad_ralanbulan', 'detailjmdokter2', 'pengaduan_pasien', 'grafik_lab_ralanhari', 'grafik_rad_ralanhari', 'sensus_harian_ralan', 'metode_racik', 'pembayaran_akun_bayar', 'pengguna_obat_resep', 'rekap_pemesanan', 'master_berkas_pegawai', 'berkas_kepegawaian', 'riwayat_jabatan', 'riwayat_pendidikan', 'riwayat_naik_gaji', 'kegiatan_ilmiah', 'riwayat_penghargaan', 'riwayat_penelitian', 'penerimaan_non_medis', 'bayar_pesan_non_medis', 'hutang_barang_non_medis', 'rekap_pemesanan_non_medis', 'insiden_keselamatan', 'insiden_keselamatan_pasien', 'grafik_ikp_pertahun', 'grafik_ikp_perbulan', 'grafik_ikp_pertanggal', 'riwayat_data_batch', 'grafik_ikp_jenis', 'grafik_ikp_dampak', 'piutang_akun_piutang', 'grafik_kunjungan_per_agama', 'grafik_kunjungan_per_umur', 'suku_bangsa', 'bahasa_pasien', 'golongan_tni', 'satuan_tni', 'jabatan_tni', 'pangkat_tni', 'golongan_polri', 'satuan_polri', 'jabatan_polri', 'pangkat_polri', 'cacat_fisik', 'grafik_kunjungan_suku', 'grafik_kunjungan_bahasa', 'booking_operasi', 'mapping_poli_bpjs', 'grafik_kunjungan_per_cacat', 'barang_cssd', 'skdp_bpjs', 'booking_registrasi', 'bpjs_cek_propinsi', 'bpjs_cek_kabupaten', 'bpjs_cek_kecamatan', 'bpjs_cek_dokterdpjp', 'bpjs_cek_riwayat_rujukanrs', 'bpjs_cek_tanggal_rujukan', 'permintaan_lab', 'permintaan_radiologi', 'surat_indeks', 'surat_map', 'surat_almari', 'surat_rak', 'surat_ruang', 'surat_klasifikasi', 'surat_status', 'surat_sifat', 'surat_balas', 'surat_masuk', 'pcare_cek_dokter', 'pcare_cek_poli', 'pcare_cek_provider', 'pcare_cek_statuspulang', 'pcare_cek_spesialis', 'pcare_cek_subspesialis', 'pcare_cek_sarana', 'pcare_cek_khusus', 'pcare_cek_obat', 'pcare_cek_tindakan', 'pcare_cek_faskessubspesialis', 'pcare_cek_faskesalihrawat', 'pcare_cek_faskesthalasemia', 'pcare_mapping_obat', 'pcare_mapping_tindakan', 'pcare_club_prolanis', 'pcare_mapping_poli', 'pcare_kegiatan_kelompok', 'pcare_mapping_tindakan_ranap', 'pcare_peserta_kegiatan_kelompok', 'sirkulasi_obat3', 'bridging_pcare_daftar', 'pcare_mapping_dokter', 'ranap_per_ruang', 'penyakit_ranap_cara_bayar', 'anggota_militer_dirawat', 'set_input_parsial', 'lama_pelayanan_radiologi', 'lama_pelayanan_lab', 'bpjs_cek_sep', 'catatan_perawatan', 'surat_keluar', 'kegiatan_farmasi', 'stok_opname_logistik', 'sirkulasi_non_medis', 'rekap_lab_pertahun', 'perujuk_lab_pertahun', 'rekap_radiologi_pertahun', 'perujuk_radiologi_pertahun', 'jumlah_porsi_diet', 'jumlah_macam_diet', 'payment_point2', 'pembayaran_akun_bayar2', 'hapus_nota_salah', 'pengkajian_askep', 'hais_perbangsal', 'ppn_obat', 'saldo_akun_perbulan', 'display_apotek', 'sisrute_referensi_faskes', 'sisrute_referensi_alasanrujuk', 'sisrute_referensi_diagnosa', 'sisrute_rujukan_masuk', 'sisrute_rujukan_keluar', 'bpjs_cek_skdp', 'data_batch', 'kunjungan_permintaan_lab', 'kunjungan_permintaan_lab2', 'kunjungan_permintaan_radiologi', 'kunjungan_permintaan_radiologi2', 'pcare_pemberian_obat', 'pcare_pemberian_tindakan', 'pembayaran_akun_bayar3', 'password_asuransi', 'kemenkes_sitt', 'siranap_ketersediaan_kamar', 'grafik_tb_periodelaporan', 'grafik_tb_rujukan', 'grafik_tb_riwayat', 'grafik_tb_tipediagnosis', 'grafik_tb_statushiv', 'grafik_tb_skoringanak', 'grafik_tb_konfirmasiskoring5', 'grafik_tb_konfirmasiskoring6', 'grafik_tb_sumberobat', 'grafik_tb_hasilakhirpengobatan', 'grafik_tb_hasilteshiv', 'kadaluarsa_batch', 'sisa_stok', 'obat_per_resep', 'pemakaian_air_pdam', 'limbah_b3_medis', 'grafik_air_pdam_pertanggal', 'grafik_air_pdam_perbulan', 'grafik_limbahb3_pertanggal', 'grafik_limbahb3_perbulan', 'limbah_domestik', 'grafik_limbahdomestik_pertanggal', 'grafik_limbahdomestik_perbulan', 'mutu_air_limbah', 'pest_control', 'ruang_perpustakaan', 'kategori_perpustakaan', 'jenis_perpustakaan', 'pengarang_perpustakaan', 'penerbit_perpustakaan', 'koleksi_perpustakaan', 'inventaris_perpustakaan', 'set_peminjaman_perpustakaan', 'denda_perpustakaan', 'anggota_perpustakaan', 'peminjaman_perpustakaan', 'bayar_denda_perpustakaan', 'ebook_perpustakaan', 'jenis_cidera_k3rs', 'penyebab_k3rs', 'jenis_luka_k3rs', 'lokasi_kejadian_k3rs', 'dampak_cidera_k3rs', 'jenis_pekerjaan_k3rs', 'bagian_tubuh_k3rs', 'peristiwa_k3rs', 'grafik_k3_pertahun', 'grafik_k3_perbulan', 'grafik_k3_pertanggal', 'grafik_k3_perjeniscidera', 'grafik_k3_perpenyebab', 'grafik_k3_perjenisluka', 'grafik_k3_lokasikejadian', 'grafik_k3_dampakcidera', 'grafik_k3_perjenispekerjaan', 'grafik_k3_perbagiantubuh', 'jenis_cidera_k3rstahun', 'penyebab_k3rstahun', 'jenis_luka_k3rstahun', 'lokasi_kejadian_k3rstahun', 'dampak_cidera_k3rstahun', 'jenis_pekerjaan_k3rstahun', 'bagian_tubuh_k3rstahun', 'sekrining_rawat_jalan', 'bpjs_histori_pelayanan', 'rekap_mutasi_berkas', 'skrining_ralan_pernapasan_pertahun', 'pengajuan_barang_medis', 'pengajuan_barang_nonmedis', 'grafik_kunjungan_ranapbulan', 'grafik_kunjungan_ranaptanggal', 'grafik_kunjungan_ranap_peruang', 'kunjungan_bangsal_pertahun', 'grafik_jenjang_jabatanpegawai', 'grafik_bidangpegawai', 'grafik_departemenpegawai', 'grafik_pendidikanpegawai', 'grafik_sttswppegawai', 'grafik_sttskerjapegawai', 'grafik_sttspulangranap', 'kip_pasien_ranap', 'kip_pasien_ralan', 'bpjs_mapping_dokterdpjp', 'data_triase_igd', 'master_triase_skala1', 'master_triase_skala2', 'master_triase_skala3', 'master_triase_skala4', 'master_triase_skala5', 'master_triase_pemeriksaan', 'master_triase_macamkasus', 'rekap_permintaan_diet', 'daftar_pasien_ranap', 'daftar_pasien_ranaptni', 'pengajuan_asetinventaris', 'item_apotek_jenis', 'item_apotek_kategori', 'item_apotek_golongan', 'item_apotek_industrifarmasi', '10_obat_terbanyak_poli', 'grafik_pengajuan_aset_urgensi', 'grafik_pengajuan_aset_status', 'grafik_pengajuan_aset_departemen', 'rekap_pengajuan_aset_departemen', 'grafik_kelompok_jabatanpegawai', 'grafik_resiko_kerjapegawai', 'grafik_emergency_indexpegawai', 'grafik_inventaris_ruang', 'harian_HAIs2', 'grafik_inventaris_jenis', 'data_resume_pasien', 'perkiraan_biaya_ranap', 'rekap_obat_poli', 'rekap_obat_pasien', 'permintaan_perbaikan_inventaris', 'grafik_HAIs_pasienbangsal', 'grafik_HAIs_pasienbulan', 'grafik_HAIs_laju_vap', 'grafik_HAIs_laju_iad', 'grafik_HAIs_laju_pleb', 'grafik_HAIs_laju_isk', 'grafik_HAIs_laju_ilo', 'grafik_HAIs_laju_hap', 'inhealth_mapping_poli', 'inhealth_mapping_dokter', 'inhealth_mapping_tindakan_ralan', 'inhealth_mapping_tindakan_ranap', 'inhealth_mapping_tindakan_radiologi', 'inhealth_mapping_tindakan_laborat', 'inhealth_mapping_tindakan_operasi', 'hibah_obat_bhp', 'asal_hibah', 'asuhan_gizi', 'inhealth_kirim_tagihan', 'sirkulasi_obat4', 'sirkulasi_obat5', 'sirkulasi_non_medis2', 'monitoring_asuhan_gizi', 'penerimaan_obat_perbulan', 'rekap_kunjungan', 'surat_sakit', 'penilaian_awal_keperawatan_ralan', 'permintaan_diet', 'master_masalah_keperawatan', 'pengajuan_cuti', 'kedatangan_pasien', 'utd_pendonor', 'toko_suplier', 'toko_jenis', 'toko_set_harga', 'toko_barang', 'penagihan_piutang_pasien', 'akun_penagihan_piutang', 'stok_opname_toko', 'toko_riwayat_barang', 'toko_surat_pemesanan', 'toko_pengajuan_barang', 'toko_penerimaan_barang', 'toko_pengadaan_barang', 'toko_hutang', 'toko_bayar_pemesanan', 'toko_member', 'toko_penjualan', 'registrasi_poli_per_tanggal', 'toko_piutang', 'toko_retur_beli', 'ipsrs_returbeli', 'ipsrs_riwayat_barang', 'pasien_corona', 'toko_pendapatan_harian', 'diagnosa_pasien_corona', 'perawatan_pasien_corona', 'penilaian_awal_keperawatan_gigi', 'master_masalah_keperawatan_gigi', 'toko_bayar_piutang', 'toko_piutang_harian', 'toko_penjualan_harian', 'deteksi_corona', 'penilaian_awal_keperawatan_kebidanan', 'pengumuman_epasien', 'surat_hamil', 'set_tarif_online', 'booking_periksa', 'toko_sirkulasi', 'toko_retur_jual', 'toko_retur_piutang', 'toko_sirkulasi2', 'toko_keuntungan_barang', 'zis_pengeluaran_penerima_dankes', 'zis_penghasilan_penerima_dankes', 'zis_ukuran_rumah_penerima_dankes', 'zis_dinding_rumah_penerima_dankes', 'zis_lantai_rumah_penerima_dankes', 'zis_atap_rumah_penerima_dankes', 'zis_kepemilikan_rumah_penerima_dankes', 'zis_kamar_mandi_penerima_dankes', 'zis_dapur_rumah_penerima_dankes', 'zis_kursi_rumah_penerima_dankes', 'zis_kategori_phbs_penerima_dankes', 'zis_elektronik_penerima_dankes', 'zis_ternak_penerima_dankes', 'zis_jenis_simpanan_penerima_dankes', 'penilaian_awal_keperawatan_anak', 'zis_kategori_asnaf_penerima_dankes', 'master_masalah_keperawatan_anak', 'master_imunisasi', 'zis_patologis_penerima_dankes', 'pcare_cek_kartu', 'surat_bebas_narkoba', 'surat_keterangan_covid', 'pemakaian_air_tanah', 'grafik_air_tanah_pertanggal', 'grafik_air_tanah_perbulan', 'lama_pelayanan_poli', 'hemodialisa', 'laporan_tahunan_irj', 'grafik_harian_hemodialisa', 'grafik_bulanan_hemodialisa', 'grafik_tahunan_hemodialisa', 'grafik_bulanan_meninggal', 'perbaikan_inventaris', 'surat_cuti_hamil', 'permintaan_stok_obat_pasien', 'pemeliharaan_inventaris', 'klasifikasi_pasien_ranap', 'bulanan_klasifikasi_pasien_ranap', 'harian_klasifikasi_pasien_ranap', 'klasifikasi_pasien_perbangsal', 'soap_perawatan', 'klaim_rawat_jalan', 'skrining_gizi', 'lama_penyiapan_rm', 'dosis_radiologi', 'demografi_umur_kunjungan', 'jam_diet_pasien', 'rvu_bpjs', 'verifikasi_penerimaan_farmasi', 'verifikasi_penerimaan_logistik', 'pemeriksaan_lab_pa', 'ringkasan_pengajuan_obat', 'ringkasan_pemesanan_obat', 'ringkasan_pengadaan_obat', 'ringkasan_penerimaan_obat', 'ringkasan_hibah_obat', 'ringkasan_penjualan_obat', 'ringkasan_beri_obat', 'ringkasan_piutang_obat', 'ringkasan_stok_keluar_obat', 'ringkasan_retur_suplier_obat', 'ringkasan_retur_pembeli_obat', 'penilaian_awal_keperawatan_ranapkebidanan', 'ringkasan_pengajuan_nonmedis', 'ringkasan_pemesanan_nonmedis', 'ringkasan_pengadaan_nonmedis', 'ringkasan_penerimaan_nonmedis', 'ringkasan_stokkeluar_nonmedis', 'ringkasan_returbeli_nonmedis', 'omset_penerimaan', 'validasi_penagihan_piutang', 'permintaan_ranap', 'bpjs_diagnosa_prb', 'bpjs_obat_prb', 'bpjs_surat_kontrol', 'penggunaan_bhp_ok', 'surat_keterangan_rawat_inap', 'surat_keterangan_sehat', 'pendapatan_per_carabayar', 'akun_host_to_host_bank_jateng', 'pembayaran_bank_jateng', 'bpjs_surat_pri', 'ringkasan_tindakan', 'lama_pelayanan_pasien', 'surat_sakit_pihak_2', 'tagihan_hutang_obat', 'referensi_mobilejkn_bpjs', 'batal_pendaftaran_mobilejkn_bpjs', 'lama_operasi', 'grafik_inventaris_kategori', 'grafik_inventaris_merk', 'grafik_inventaris_produsen', 'pengembalian_deposit_pasien', 'validasi_tagihan_hutang_obat', 'piutang_obat_belum_lunas', 'integrasi_briapi', 'pengadaan_aset_inventaris', 'akun_aset_inventaris', 'suplier_inventaris', 'penerimaan_aset_inventaris', 'bayar_pemesanan_iventaris', 'hutang_aset_inventaris', 'hibah_aset_inventaris', 'titip_faktur_non_medis', 'validasi_tagihan_non_medis', 'titip_faktur_aset', 'validasi_tagihan_aset', 'hibah_non_medis', 'pcare_alasan_tacc', 'resep_luar', 'surat_bebas_tbc', 'surat_buta_warna', 'surat_bebas_tato', 'surat_kewaspadaan_kesehatan', 'grafik_porsidiet_pertanggal', 'grafik_porsidiet_perbulan', 'grafik_porsidiet_pertahun', 'grafik_porsidiet_perbangsal', 'penilaian_awal_medis_ralan', 'master_masalah_keperawatan_mata', 'penilaian_awal_keperawatan_mata', 'penilaian_awal_medis_ranap', 'penilaian_awal_medis_ranap_kebidanan', 'penilaian_awal_medis_ralan_kebidanan', 'penilaian_awal_medis_igd', 'penilaian_awal_medis_ralan_anak', 'bpjs_referensi_poli_hfis', 'bpjs_referensi_dokter_hfis', 'bpjs_referensi_jadwal_hfis', 'penilaian_fisioterapi', 'bpjs_program_prb', 'bpjs_suplesi_jasaraharja', 'bpjs_data_induk_kecelakaan', 'bpjs_sep_internal', 'bpjs_klaim_jasa_raharja', 'bpjs_daftar_finger_print', 'bpjs_rujukan_khusus', 'pemeliharaan_gedung', 'grafik_perbaikan_inventaris_pertanggal', 'grafik_perbaikan_inventaris_perbulan', 'grafik_perbaikan_inventaris_pertahun', 'grafik_perbaikan_inventaris_perpelaksana_status', 'penilaian_mcu', 'peminjam_piutang', 'piutang_lainlain', 'cara_bayar', 'audit_kepatuhan_apd', 'bpjs_task_id', 'bayar_piutang_lain', 'pembayaran_akun_bayar4', 'stok_akhir_farmasi_pertanggal', 'riwayat_kamar_pasien', 'uji_fungsi_kfr', 'hapus_berkas_digital_perawatan', 'kategori_pengeluaran_harian', 'kategori_pemasukan_lain', 'pembayaran_akun_bayar5', 'ruang_ok', 'telaah_resep', 'jasa_tindakan_pasien', 'permintaan_resep_pulang', 'rekap_jm_dokter', 'status_data_rm', 'ubah_petugas_lab_pk', 'ubah_petugas_lab_pa', 'ubah_petugas_radiologi', 'gabung_norawat', 'gabung_rm', 'ringkasan_biaya_obat_pasien_pertanggal', 'master_masalah_keperawatan_igd', 'penilaian_awal_keperawatan_igd', 'bpjs_referensi_dpho_apotek', 'bpjs_referensi_poli_apotek', 'bayar_jm_dokter', 'bpjs_referensi_faskes_apotek', 'bpjs_referensi_spesialistik_apotek', 'pembayaran_briva', 'penilaian_awal_keperawatan_ranap', 'nilai_penerimaan_vendor_farmasi_perbulan', 'akun_bayar_hutang', 'master_rencana_keperawatan', 'laporan_tahunan_igd', 'obat_bhp_tidakbergerak', 'ringkasan_hutang_vendor_farmasi', 'nilai_penerimaan_vendor_nonmedis_perbulan', 'ringkasan_hutang_vendor_nonmedis', 'master_rencana_keperawatan_anak', 'anggota_polri_dirawat', 'daftar_pasien_ranap_polri', 'soap_ralan_polri', 'soap_ranap_polri', 'laporan_penyakit_polri', 'jumlah_pengunjung_ralan_polri', 'catatan_observasi_igd', 'catatan_observasi_ranap', 'catatan_observasi_ranap_kebidanan', 'catatan_observasi_ranap_postpartum', 'penilaian_awal_medis_ralan_tht', 'penilaian_psikologi', 'audit_cuci_tangan_medis', 'audit_pembuangan_limbah', 'ruang_audit_kepatuhan', 'audit_pembuangan_benda_tajam', 'audit_penanganan_darah', 'audit_pengelolaan_linen_kotor', 'audit_penempatan_pasien', 'audit_kamar_jenazah', 'audit_bundle_iadp', 'audit_bundle_ido', 'audit_fasilitas_kebersihan_tangan', 'audit_fasilitas_apd', 'audit_pembuangan_limbah_cair_infeksius', 'audit_sterilisasi_alat', 'penilaian_awal_medis_ralan_psikiatri', 'persetujuan_penolakan_tindakan', 'audit_bundle_isk', 'audit_bundle_plabsi', 'audit_bundle_vap', 'akun_host_to_host_bank_papua', 'pembayaran_bank_papua', 'penilaian_awal_medis_ralan_penyakit_dalam', 'penilaian_awal_medis_ralan_mata', 'penilaian_awal_medis_ralan_neurologi', 'sirkulasi_obat6', 'penilaian_awal_medis_ralan_orthopedi', 'penilaian_awal_medis_ralan_bedah', 'integrasi_khanza_health_services', 'soap_ralan_tni', 'soap_ranap_tni', 'jumlah_pengunjung_ralan_tni', 'laporan_penyakit_tni', 'catatan_keperawatan_ranap', 'master_rencana_keperawatan_gigi', 'master_rencana_keperawatan_mata', 'master_rencana_keperawatan_igd', 'master_masalah_keperawatan_psikiatri', 'master_rencana_keperawatan_psikiatri', 'penilaian_awal_keperawatan_psikiatri', 'pemantauan_pews_anak', 'surat_pulang_atas_permintaan_sendiri', 'template_hasil_radiologi', 'laporan_bulanan_irj', 'template_pemeriksaan', 'pemeriksaan_lab_mb', 'ubah_petugas_lab_mb', 'penilaian_pre_operasi', 'penilaian_pre_anestesi', 'perencanaan_pemulangan', 'penilaian_lanjutan_resiko_jatuh_dewasa', 'penilaian_lanjutan_resiko_jatuh_anak', 'penilaian_awal_medis_ralan_geriatri', 'penilaian_tambahan_pasien_geriatri', 'skrining_nutrisi_dewasa', 'skrining_nutrisi_lansia', 'hasil_pemeriksaan_usg', 'skrining_nutrisi_anak', 'akun_host_to_host_bank_jabar', 'pembayaran_bank_jabar', 'surat_pernyataan_pasien_umum', 'konseling_farmasi', 'pelayanan_informasi_obat', 'jawaban_pio_apoteker', 'surat_persetujuan_umum', 'transfer_pasien_antar_ruang', 'satu_sehat_referensi_dokter', 'satu_sehat_referensi_pasien', 'satu_sehat_mapping_departemen', 'satu_sehat_mapping_lokasi', 'satu_sehat_kirim_encounter', 'catatan_cek_gds', 'satu_sehat_kirim_condition', 'checklist_pre_operasi', 'satu_sehat_kirim_observationttv', 'signin_sebelum_anestesi', 'satu_sehat_kirim_procedure', 'operasi_per_bulan', 'timeout_sebelum_insisi', 'signout_sebelum_menutup_luka', 'dapur_barang', 'dapur_opname', 'satu_sehat_mapping_vaksin', 'dapur_suplier', 'satu_sehat_kirim_Immunization', 'checklist_post_operasi', 'dapur_pembelian', 'dapur_stok_keluar', 'dapur_riwayat_barang', 'permintaan_dapur', 'rekonsiliasi_obat', 'biaya_pengadaan_dapur', 'rekap_pengadaan_dapur', 'kesling_limbah_b3medis_cair', 'grafik_limbahb3cair_pertanggal', 'grafik_limbahb3cair_perbulan', 'rekap_biaya_registrasi', 'konfirmasi_rekonsiliasi_obat', 'satu_sehat_kirim_clinicalimpression', 'penilaian_pasien_terminal', 'surat_persetujuan_rawat_inap', 'monitoring_reaksi_tranfusi', 'penilaian_korban_kekerasan', 'penilaian_lanjutan_resiko_jatuh_lansia', 'penilaian_pasien_penyakit_menular', 'mpp_skrining', 'edukasi_pasien_keluarga_rj', 'pemantauan_pews_dewasa', 'penilaian_tambahan_bunuh_diri', 'bpjs_antrean_pertanggal', 'penilaian_tambahan_perilaku_kekerasan', 'penilaian_tambahan_beresiko_melarikan_diri', 'persetujuan_penundaan_pelayanan', 'sisa_diet_pasien', 'penilaian_awal_medis_ralan_bedah_mulut', 'penilaian_pasien_keracunan', 'pemantauan_meows_obstetri', 'catatan_adime_gizi', 'pengajuan_biaya', 'penilaian_awal_keperawatan_ralan_geriatri', 'master_masalah_keperawatan_geriatri', 'master_rencana_keperawatan_geriatri', 'checklist_kriteria_masuk_hcu', 'checklist_kriteria_keluar_hcu', 'penilaian_risiko_dekubitus', 'master_menolak_anjuran_medis', 'penolakan_anjuran_medis', 'laporan_tahunan_penolakan_anjuran_medis', 'template_laporan_operasi', 'hasil_tindakan_eswl', 'checklist_kriteria_masuk_icu', 'checklist_kriteria_keluar_icu', 'akses_dokter_lain_rawat_jalan', 'follow_up_dbd', 'penilaian_risiko_jatuh_neonatus', 'persetujuan_pengajuan_biaya', 'pemeriksaan_fisik_ralan_per_penyakit', 'penilaian_lanjutan_resiko_jatuh_geriatri', 'pemantauan_ews_neonatus', 'validasi_persetujuan_pengajuan_biaya', 'riwayat_perawatan_icare_bpjs', 'rekap_pengajuan_biaya', 'penilaian_awal_medis_ralan_kulit_kelamin', 'akun_host_to_host_bank_mandiri', 'penilaian_medis_hemodialisa', 'penilaian_level_kecemasan_ranap_anak', 'penilaian_lanjutan_resiko_jatuh_psikiatri', 'penilaian_lanjutan_skrining_fungsional', 'penilaian_medis_ralan_rehab_medik', 'laporan_anestesi', 'template_persetujuan_penolakan_tindakan', 'penilaian_medis_ralan_gawat_darurat_psikiatri', 'bpjs_referensi_setting_apotek', 'bpjs_referensi_obat_apotek', 'bpjs_mapping_obat_apotek', 'pembayaran_bank_mandiri', 'penilaian_ulang_nyeri', 'penilaian_terapi_wicara', 'bpjs_obat_23hari_apotek', 'pengkajian_restrain', 'bpjs_kunjungan_sep_apotek', 'bpjs_monitoring_klaim_apotek', 'bpjs_daftar_pelayanan_obat_apotek', 'penilaian_awal_medis_ralan_paru', 'catatan_keperawatan_ralan', 'catatan_persalinan', 'skor_aldrette_pasca_anestesi', 'skor_steward_pasca_anestesi', 'skor_bromage_pasca_anestesi', 'penilaian_pre_induksi', 'hasil_usg_urologi', 'hasil_usg_gynecologi', 'hasil_pemeriksaan_ekg', 'hapus_edit_sep_bpjs', 'satu_sehat_kirim_diet', 'satu_sehat_mapping_obat', 'dapur_ringkasan_pembelian', 'satu_sehat_kirim_medication', 'satu_sehat_kirim_medicationrequest', 'penatalaksanaan_terapi_okupasi', 'satu_sehat_kirim_medicationdispense', 'hasil_usg_neonatus', 'hasil_endoskopi_faring_laring', 'satu_sehat_mapping_radiologi', 'satu_sehat_kirim_servicerequest_radiologi', 'hasil_endoskopi_hidung', 'satu_sehat_kirim_specimen_radiologi', 'master_masalah_keperawatan_neonatus', 'master_rencana_keperawatan_neonatus', 'penilaian_awal_keperawatan_ranap_neonatus', 'satu_sehat_kirim_observation_radiologi', 'satu_sehat_kirim_diagnosticreport_radiologi', 'hasil_endoskopi_telinga', 'satu_sehat_mapping_lab', 'satu_sehat_kirim_servicerequest_lab', 'satu_sehat_kirim_servicerequest_labmb', 'satu_sehat_kirim_specimen_lab', 'satu_sehat_kirim_specimen_labmb', 'satu_sehat_kirim_observation_lab', 'satu_sehat_kirim_observation_labmb', 'satu_sehat_kirim_diagnosticreport_lab', 'satu_sehat_kirim_diagnosticreport_labmb', 'kepatuhan_kelengkapan_keselamatan_bedah', 'nilai_piutang_perjenis_bayar_per_bulan', 'ringkasan_piutang_jenis_bayar', 'penilaian_pasien_imunitas_rendah', 'balance_cairan', 'catatan_observasi_chbp', 'catatan_observasi_induksi_persalinan', 'skp_kategori_penilaian', 'skp_kriteria_penilaian', 'skp_penilaian', 'referensi_poli_mobilejknfktp', 'referensi_dokter_mobilejknfktp', 'skp_rekapitulasi_penilaian', 'pembayaran_pihak_ke3_bankmandiri', 'metode_pembayaran_bankmandiri', 'bank_tujuan_transfer_bankmandiri', 'kodetransaksi_tujuan_transfer_bankmandiri', 'konsultasi_medik', 'jawaban_konsultasi_medik', 'pcare_cek_alergi', 'pcare_cek_prognosa', 'data_sasaran_usiaproduktif', 'data_sasaran_usialansia', 'skrining_perilaku_merokok_sekolah_remaja', 'skrining_kekerasan_pada_perempuan', 'skrining_obesitas', 'skrining_risiko_kanker_payudara', 'skrining_risiko_kanker_paru', 'skrining_tbc', 'skrining_kesehatan_gigi_mulut_remaja', 'penilaian_awal_keperawatan_ranap_bayi', 'booking_mcu_perusahaan', 'catatan_observasi_restrain_nonfarma', 'catatan_observasi_ventilator', 'catatan_anestesi_sedasi', 'skrining_puma', 'satu_sehat_kirim_careplan', 'satu_sehat_kirim_medicationstatement', 'skrining_adiksi_nikotin', 'skrining_thalassemia', 'skrining_instrumen_sdq', 'skrining_instrumen_srq', 'checklist_pemberian_fibrinolitik', 'skrining_kanker_kolorektal', 'dapur_pemesanan', 'bayar_pesan_dapur', 'hutang_dapur', 'titip_faktur_dapur', 'validasi_tagihan_dapur', 'surat_pemesanan_dapur', 'pengajuan_barang_dapur', 'dapur_returbeli', 'hibah_dapur', 'ringkasan_penerimaan_dapur', 'ringkasan_pengajuan_dapur', 'ringkasan_pemesanan_dapur', 'ringkasan_returbeli_dapur', 'ringkasan_stokkeluar_dapur', 'dapur_stokkeluar_pertanggal', 'sirkulasi_dapur', 'sirkulasi_dapur2', 'verifikasi_penerimaan_dapur', 'nilai_penerimaan_vendor_dapur_perbulan', 'ringkasan_hutang_vendor_dapur', 'penilaian_psikologi_klinis'], 'string'],
            [['id_user'], 'string', 'max' => 700],
            [['id_user'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'password' => 'Password',
            'penyakit' => 'Penyakit',
            'obat_penyakit' => 'Obat Penyakit',
            'dokter' => 'Dokter',
            'jadwal_praktek' => 'Jadwal Praktek',
            'petugas' => 'Petugas',
            'pasien' => 'Pasien',
            'registrasi' => 'Registrasi',
            'tindakan_ralan' => 'Tindakan Ralan',
            'kamar_inap' => 'Kamar Inap',
            'tindakan_ranap' => 'Tindakan Ranap',
            'operasi' => 'Operasi',
            'rujukan_keluar' => 'Rujukan Keluar',
            'rujukan_masuk' => 'Rujukan Masuk',
            'beri_obat' => 'Beri Obat',
            'resep_pulang' => 'Resep Pulang',
            'pasien_meninggal' => 'Pasien Meninggal',
            'diet_pasien' => 'Diet Pasien',
            'kelahiran_bayi' => 'Kelahiran Bayi',
            'periksa_lab' => 'Periksa Lab',
            'periksa_radiologi' => 'Periksa Radiologi',
            'kasir_ralan' => 'Kasir Ralan',
            'deposit_pasien' => 'Deposit Pasien',
            'piutang_pasien' => 'Piutang Pasien',
            'peminjaman_berkas' => 'Peminjaman Berkas',
            'barcode' => 'Barcode',
            'presensi_harian' => 'Presensi Harian',
            'presensi_bulanan' => 'Presensi Bulanan',
            'pegawai_admin' => 'Pegawai Admin',
            'pegawai_user' => 'Pegawai User',
            'suplier' => 'Suplier',
            'satuan_barang' => 'Satuan Barang',
            'konversi_satuan' => 'Konversi Satuan',
            'jenis_barang' => 'Jenis Barang',
            'obat' => 'Obat',
            'stok_opname_obat' => 'Stok Opname Obat',
            'stok_obat_pasien' => 'Stok Obat Pasien',
            'pengadaan_obat' => 'Pengadaan Obat',
            'pemesanan_obat' => 'Pemesanan Obat',
            'penjualan_obat' => 'Penjualan Obat',
            'piutang_obat' => 'Piutang Obat',
            'retur_ke_suplier' => 'Retur Ke Suplier',
            'retur_dari_pembeli' => 'Retur Dari Pembeli',
            'retur_obat_ranap' => 'Retur Obat Ranap',
            'retur_piutang_pasien' => 'Retur Piutang Pasien',
            'keuntungan_penjualan' => 'Keuntungan Penjualan',
            'keuntungan_beri_obat' => 'Keuntungan Beri Obat',
            'sirkulasi_obat' => 'Sirkulasi Obat',
            'ipsrs_barang' => 'Ipsrs Barang',
            'ipsrs_pengadaan_barang' => 'Ipsrs Pengadaan Barang',
            'ipsrs_stok_keluar' => 'Ipsrs Stok Keluar',
            'ipsrs_rekap_pengadaan' => 'Ipsrs Rekap Pengadaan',
            'ipsrs_rekap_stok_keluar' => 'Ipsrs Rekap Stok Keluar',
            'ipsrs_pengeluaran_harian' => 'Ipsrs Pengeluaran Harian',
            'inventaris_jenis' => 'Inventaris Jenis',
            'inventaris_kategori' => 'Inventaris Kategori',
            'inventaris_merk' => 'Inventaris Merk',
            'inventaris_ruang' => 'Inventaris Ruang',
            'inventaris_produsen' => 'Inventaris Produsen',
            'inventaris_koleksi' => 'Inventaris Koleksi',
            'inventaris_inventaris' => 'Inventaris Inventaris',
            'inventaris_sirkulasi' => 'Inventaris Sirkulasi',
            'parkir_jenis' => 'Parkir Jenis',
            'parkir_in' => 'Parkir In',
            'parkir_out' => 'Parkir Out',
            'parkir_rekap_harian' => 'Parkir Rekap Harian',
            'parkir_rekap_bulanan' => 'Parkir Rekap Bulanan',
            'informasi_kamar' => 'Informasi Kamar',
            'harian_tindakan_poli' => 'Harian Tindakan Poli',
            'obat_per_poli' => 'Obat Per Poli',
            'obat_per_kamar' => 'Obat Per Kamar',
            'obat_per_dokter_ralan' => 'Obat Per Dokter Ralan',
            'obat_per_dokter_ranap' => 'Obat Per Dokter Ranap',
            'harian_dokter' => 'Harian Dokter',
            'bulanan_dokter' => 'Bulanan Dokter',
            'harian_paramedis' => 'Harian Paramedis',
            'bulanan_paramedis' => 'Bulanan Paramedis',
            'pembayaran_ralan' => 'Pembayaran Ralan',
            'pembayaran_ranap' => 'Pembayaran Ranap',
            'rekap_pembayaran_ralan' => 'Rekap Pembayaran Ralan',
            'rekap_pembayaran_ranap' => 'Rekap Pembayaran Ranap',
            'tagihan_masuk' => 'Tagihan Masuk',
            'tambahan_biaya' => 'Tambahan Biaya',
            'potongan_biaya' => 'Potongan Biaya',
            'resep_obat' => 'Resep Obat',
            'resume_pasien' => 'Resume Pasien',
            'penyakit_ralan' => 'Penyakit Ralan',
            'penyakit_ranap' => 'Penyakit Ranap',
            'kamar' => 'Kamar',
            'tarif_ralan' => 'Tarif Ralan',
            'tarif_ranap' => 'Tarif Ranap',
            'tarif_lab' => 'Tarif Lab',
            'tarif_radiologi' => 'Tarif Radiologi',
            'tarif_operasi' => 'Tarif Operasi',
            'akun_rekening' => 'Akun Rekening',
            'rekening_tahun' => 'Rekening Tahun',
            'posting_jurnal' => 'Posting Jurnal',
            'buku_besar' => 'Buku Besar',
            'cashflow' => 'Cashflow',
            'keuangan' => 'Keuangan',
            'pengeluaran' => 'Pengeluaran',
            'setup_pjlab' => 'Setup Pjlab',
            'setup_otolokasi' => 'Setup Otolokasi',
            'setup_jam_kamin' => 'Setup Jam Kamin',
            'setup_embalase' => 'Setup Embalase',
            'tracer_login' => 'Tracer Login',
            'display' => 'Display',
            'set_harga_obat' => 'Set Harga Obat',
            'set_penggunaan_tarif' => 'Set Penggunaan Tarif',
            'set_oto_ralan' => 'Set Oto Ralan',
            'biaya_harian' => 'Biaya Harian',
            'biaya_masuk_sekali' => 'Biaya Masuk Sekali',
            'set_no_rm' => 'Set No Rm',
            'billing_ralan' => 'Billing Ralan',
            'billing_ranap' => 'Billing Ranap',
            'jm_ranap_dokter' => 'Jm Ranap Dokter',
            'igd' => 'Igd',
            'barcoderalan' => 'Barcoderalan',
            'barcoderanap' => 'Barcoderanap',
            'set_harga_obat_ralan' => 'Set Harga Obat Ralan',
            'set_harga_obat_ranap' => 'Set Harga Obat Ranap',
            'penyakit_pd3i' => 'Penyakit Pd3i',
            'surveilans_pd3i' => 'Surveilans Pd3i',
            'surveilans_ralan' => 'Surveilans Ralan',
            'diagnosa_pasien' => 'Diagnosa Pasien',
            'surveilans_ranap' => 'Surveilans Ranap',
            'pny_takmenular_ranap' => 'Pny Takmenular Ranap',
            'pny_takmenular_ralan' => 'Pny Takmenular Ralan',
            'kunjungan_ralan' => 'Kunjungan Ralan',
            'rl32' => 'Rl32',
            'rl33' => 'Rl33',
            'rl37' => 'Rl37',
            'rl38' => 'Rl38',
            'harian_tindakan_dokter' => 'Harian Tindakan Dokter',
            'sms' => 'Sms',
            'sidikjari' => 'Sidikjari',
            'jam_masuk' => 'Jam Masuk',
            'jadwal_pegawai' => 'Jadwal Pegawai',
            'parkir_barcode' => 'Parkir Barcode',
            'set_nota' => 'Set Nota',
            'dpjp_ranap' => 'Dpjp Ranap',
            'mutasi_barang' => 'Mutasi Barang',
            'rl34' => 'Rl34',
            'rl36' => 'Rl36',
            'fee_visit_dokter' => 'Fee Visit Dokter',
            'fee_bacaan_ekg' => 'Fee Bacaan Ekg',
            'fee_rujukan_rontgen' => 'Fee Rujukan Rontgen',
            'fee_rujukan_ranap' => 'Fee Rujukan Ranap',
            'fee_ralan' => 'Fee Ralan',
            'akun_bayar' => 'Akun Bayar',
            'bayar_pemesanan_obat' => 'Bayar Pemesanan Obat',
            'obat_per_dokter_peresep' => 'Obat Per Dokter Peresep',
            'ipsrs_jenis_barang' => 'Ipsrs Jenis Barang',
            'pemasukan_lain' => 'Pemasukan Lain',
            'pengaturan_rekening' => 'Pengaturan Rekening',
            'closing_kasir' => 'Closing Kasir',
            'keterlambatan_presensi' => 'Keterlambatan Presensi',
            'set_harga_kamar' => 'Set Harga Kamar',
            'rekap_per_shift' => 'Rekap Per Shift',
            'bpjs_cek_nik' => 'Bpjs Cek Nik',
            'bpjs_cek_kartu' => 'Bpjs Cek Kartu',
            'bpjs_cek_riwayat' => 'Bpjs Cek Riwayat',
            'obat_per_cara_bayar' => 'Obat Per Cara Bayar',
            'kunjungan_ranap' => 'Kunjungan Ranap',
            'bayar_piutang' => 'Bayar Piutang',
            'payment_point' => 'Payment Point',
            'bpjs_cek_nomor_rujukan' => 'Bpjs Cek Nomor Rujukan',
            'icd9' => 'Icd9',
            'darurat_stok' => 'Darurat Stok',
            'retensi_rm' => 'Retensi Rm',
            'temporary_presensi' => 'Temporary Presensi',
            'jurnal_harian' => 'Jurnal Harian',
            'sirkulasi_obat2' => 'Sirkulasi Obat2',
            'edit_registrasi' => 'Edit Registrasi',
            'bpjs_referensi_diagnosa' => 'Bpjs Referensi Diagnosa',
            'bpjs_referensi_poli' => 'Bpjs Referensi Poli',
            'industrifarmasi' => 'Industrifarmasi',
            'harian_js' => 'Harian Js',
            'bulanan_js' => 'Bulanan Js',
            'harian_paket_bhp' => 'Harian Paket Bhp',
            'bulanan_paket_bhp' => 'Bulanan Paket Bhp',
            'piutang_pasien2' => 'Piutang Pasien2',
            'bpjs_referensi_faskes' => 'Bpjs Referensi Faskes',
            'bpjs_sep' => 'Bpjs Sep',
            'pengambilan_utd' => 'Pengambilan Utd',
            'tarif_utd' => 'Tarif Utd',
            'pengambilan_utd2' => 'Pengambilan Utd2',
            'utd_medis_rusak' => 'Utd Medis Rusak',
            'pengambilan_penunjang_utd' => 'Pengambilan Penunjang Utd',
            'pengambilan_penunjang_utd2' => 'Pengambilan Penunjang Utd2',
            'utd_penunjang_rusak' => 'Utd Penunjang Rusak',
            'suplier_penunjang' => 'Suplier Penunjang',
            'utd_donor' => 'Utd Donor',
            'bpjs_monitoring_klaim' => 'Bpjs Monitoring Klaim',
            'utd_cekal_darah' => 'Utd Cekal Darah',
            'utd_komponen_darah' => 'Utd Komponen Darah',
            'utd_stok_darah' => 'Utd Stok Darah',
            'utd_pemisahan_darah' => 'Utd Pemisahan Darah',
            'harian_kamar' => 'Harian Kamar',
            'rincian_piutang_pasien' => 'Rincian Piutang Pasien',
            'keuntungan_beri_obat_nonpiutang' => 'Keuntungan Beri Obat Nonpiutang',
            'reklasifikasi_ralan' => 'Reklasifikasi Ralan',
            'reklasifikasi_ranap' => 'Reklasifikasi Ranap',
            'utd_penyerahan_darah' => 'Utd Penyerahan Darah',
            'hutang_obat' => 'Hutang Obat',
            'riwayat_obat_alkes_bhp' => 'Riwayat Obat Alkes Bhp',
            'sensus_harian_poli' => 'Sensus Harian Poli',
            'rl4a' => 'Rl4a',
            'aplicare_referensi_kamar' => 'Aplicare Referensi Kamar',
            'aplicare_ketersediaan_kamar' => 'Aplicare Ketersediaan Kamar',
            'inacbg_klaim_baru_otomatis' => 'Inacbg Klaim Baru Otomatis',
            'inacbg_klaim_baru_manual' => 'Inacbg Klaim Baru Manual',
            'inacbg_coder_nik' => 'Inacbg Coder Nik',
            'mutasi_berkas' => 'Mutasi Berkas',
            'akun_piutang' => 'Akun Piutang',
            'harian_kso' => 'Harian Kso',
            'bulanan_kso' => 'Bulanan Kso',
            'harian_menejemen' => 'Harian Menejemen',
            'bulanan_menejemen' => 'Bulanan Menejemen',
            'inhealth_cek_eligibilitas' => 'Inhealth Cek Eligibilitas',
            'inhealth_referensi_jenpel_ruang_rawat' => 'Inhealth Referensi Jenpel Ruang Rawat',
            'inhealth_referensi_poli' => 'Inhealth Referensi Poli',
            'inhealth_referensi_faskes' => 'Inhealth Referensi Faskes',
            'inhealth_sjp' => 'Inhealth Sjp',
            'piutang_ralan' => 'Piutang Ralan',
            'piutang_ranap' => 'Piutang Ranap',
            'detail_piutang_penjab' => 'Detail Piutang Penjab',
            'lama_pelayanan_ralan' => 'Lama Pelayanan Ralan',
            'catatan_pasien' => 'Catatan Pasien',
            'rl4b' => 'Rl4b',
            'rl4asebab' => 'Rl4asebab',
            'rl4bsebab' => 'Rl4bsebab',
            'data_HAIs' => 'Data Ha Is',
            'harian_HAIs' => 'Harian Ha Is',
            'bulanan_HAIs' => 'Bulanan Ha Is',
            'hitung_bor' => 'Hitung Bor',
            'perusahaan_pasien' => 'Perusahaan Pasien',
            'resep_dokter' => 'Resep Dokter',
            'lama_pelayanan_apotek' => 'Lama Pelayanan Apotek',
            'hitung_alos' => 'Hitung Alos',
            'detail_tindakan' => 'Detail Tindakan',
            'rujukan_poli_internal' => 'Rujukan Poli Internal',
            'rekap_poli_anak' => 'Rekap Poli Anak',
            'grafik_kunjungan_poli' => 'Grafik Kunjungan Poli',
            'grafik_kunjungan_perdokter' => 'Grafik Kunjungan Perdokter',
            'grafik_kunjungan_perpekerjaan' => 'Grafik Kunjungan Perpekerjaan',
            'grafik_kunjungan_perpendidikan' => 'Grafik Kunjungan Perpendidikan',
            'grafik_kunjungan_pertahun' => 'Grafik Kunjungan Pertahun',
            'berkas_digital_perawatan' => 'Berkas Digital Perawatan',
            'penyakit_menular_ranap' => 'Penyakit Menular Ranap',
            'penyakit_menular_ralan' => 'Penyakit Menular Ralan',
            'grafik_kunjungan_perbulan' => 'Grafik Kunjungan Perbulan',
            'grafik_kunjungan_pertanggal' => 'Grafik Kunjungan Pertanggal',
            'grafik_kunjungan_demografi' => 'Grafik Kunjungan Demografi',
            'grafik_kunjungan_statusdaftartahun' => 'Grafik Kunjungan Statusdaftartahun',
            'grafik_kunjungan_statusdaftartahun2' => 'Grafik Kunjungan Statusdaftartahun2',
            'grafik_kunjungan_statusdaftarbulan' => 'Grafik Kunjungan Statusdaftarbulan',
            'grafik_kunjungan_statusdaftarbulan2' => 'Grafik Kunjungan Statusdaftarbulan2',
            'grafik_kunjungan_statusdaftartanggal' => 'Grafik Kunjungan Statusdaftartanggal',
            'grafik_kunjungan_statusdaftartanggal2' => 'Grafik Kunjungan Statusdaftartanggal2',
            'grafik_kunjungan_statusbataltahun' => 'Grafik Kunjungan Statusbataltahun',
            'grafik_kunjungan_statusbatalbulan' => 'Grafik Kunjungan Statusbatalbulan',
            'pcare_cek_penyakit' => 'Pcare Cek Penyakit',
            'grafik_kunjungan_statusbataltanggal' => 'Grafik Kunjungan Statusbataltanggal',
            'kategori_barang' => 'Kategori Barang',
            'golongan_barang' => 'Golongan Barang',
            'pemberian_obat_pertanggal' => 'Pemberian Obat Pertanggal',
            'penjualan_obat_pertanggal' => 'Penjualan Obat Pertanggal',
            'pcare_cek_kesadaran' => 'Pcare Cek Kesadaran',
            'pembatalan_periksa_dokter' => 'Pembatalan Periksa Dokter',
            'pembayaran_per_unit' => 'Pembayaran Per Unit',
            'rekap_pembayaran_per_unit' => 'Rekap Pembayaran Per Unit',
            'grafik_kunjungan_percarabayar' => 'Grafik Kunjungan Percarabayar',
            'ipsrs_pengadaan_pertanggal' => 'Ipsrs Pengadaan Pertanggal',
            'ipsrs_stokkeluar_pertanggal' => 'Ipsrs Stokkeluar Pertanggal',
            'grafik_kunjungan_ranaptahun' => 'Grafik Kunjungan Ranaptahun',
            'pcare_cek_rujukan' => 'Pcare Cek Rujukan',
            'grafik_lab_ralantahun' => 'Grafik Lab Ralantahun',
            'grafik_rad_ralantahun' => 'Grafik Rad Ralantahun',
            'cek_entry_ralan' => 'Cek Entry Ralan',
            'inacbg_klaim_baru_manual2' => 'Inacbg Klaim Baru Manual2',
            'permintaan_medis' => 'Permintaan Medis',
            'rekap_permintaan_medis' => 'Rekap Permintaan Medis',
            'surat_pemesanan_medis' => 'Surat Pemesanan Medis',
            'permintaan_non_medis' => 'Permintaan Non Medis',
            'rekap_permintaan_non_medis' => 'Rekap Permintaan Non Medis',
            'surat_pemesanan_non_medis' => 'Surat Pemesanan Non Medis',
            'grafik_per_perujuk' => 'Grafik Per Perujuk',
            'bpjs_cek_prosedur' => 'Bpjs Cek Prosedur',
            'bpjs_cek_kelas_rawat' => 'Bpjs Cek Kelas Rawat',
            'bpjs_cek_dokter' => 'Bpjs Cek Dokter',
            'bpjs_cek_spesialistik' => 'Bpjs Cek Spesialistik',
            'bpjs_cek_ruangrawat' => 'Bpjs Cek Ruangrawat',
            'bpjs_cek_carakeluar' => 'Bpjs Cek Carakeluar',
            'bpjs_cek_pasca_pulang' => 'Bpjs Cek Pasca Pulang',
            'detail_tindakan_okvk' => 'Detail Tindakan Okvk',
            'billing_parsial' => 'Billing Parsial',
            'bpjs_cek_nomor_rujukan_rs' => 'Bpjs Cek Nomor Rujukan Rs',
            'bpjs_cek_rujukan_kartu_pcare' => 'Bpjs Cek Rujukan Kartu Pcare',
            'bpjs_cek_rujukan_kartu_rs' => 'Bpjs Cek Rujukan Kartu Rs',
            'akses_depo_obat' => 'Akses Depo Obat',
            'bpjs_rujukan_keluar' => 'Bpjs Rujukan Keluar',
            'grafik_lab_ralanbulan' => 'Grafik Lab Ralanbulan',
            'pengeluaran_stok_apotek' => 'Pengeluaran Stok Apotek',
            'grafik_rad_ralanbulan' => 'Grafik Rad Ralanbulan',
            'detailjmdokter2' => 'Detailjmdokter2',
            'pengaduan_pasien' => 'Pengaduan Pasien',
            'grafik_lab_ralanhari' => 'Grafik Lab Ralanhari',
            'grafik_rad_ralanhari' => 'Grafik Rad Ralanhari',
            'sensus_harian_ralan' => 'Sensus Harian Ralan',
            'metode_racik' => 'Metode Racik',
            'pembayaran_akun_bayar' => 'Pembayaran Akun Bayar',
            'pengguna_obat_resep' => 'Pengguna Obat Resep',
            'rekap_pemesanan' => 'Rekap Pemesanan',
            'master_berkas_pegawai' => 'Master Berkas Pegawai',
            'berkas_kepegawaian' => 'Berkas Kepegawaian',
            'riwayat_jabatan' => 'Riwayat Jabatan',
            'riwayat_pendidikan' => 'Riwayat Pendidikan',
            'riwayat_naik_gaji' => 'Riwayat Naik Gaji',
            'kegiatan_ilmiah' => 'Kegiatan Ilmiah',
            'riwayat_penghargaan' => 'Riwayat Penghargaan',
            'riwayat_penelitian' => 'Riwayat Penelitian',
            'penerimaan_non_medis' => 'Penerimaan Non Medis',
            'bayar_pesan_non_medis' => 'Bayar Pesan Non Medis',
            'hutang_barang_non_medis' => 'Hutang Barang Non Medis',
            'rekap_pemesanan_non_medis' => 'Rekap Pemesanan Non Medis',
            'insiden_keselamatan' => 'Insiden Keselamatan',
            'insiden_keselamatan_pasien' => 'Insiden Keselamatan Pasien',
            'grafik_ikp_pertahun' => 'Grafik Ikp Pertahun',
            'grafik_ikp_perbulan' => 'Grafik Ikp Perbulan',
            'grafik_ikp_pertanggal' => 'Grafik Ikp Pertanggal',
            'riwayat_data_batch' => 'Riwayat Data Batch',
            'grafik_ikp_jenis' => 'Grafik Ikp Jenis',
            'grafik_ikp_dampak' => 'Grafik Ikp Dampak',
            'piutang_akun_piutang' => 'Piutang Akun Piutang',
            'grafik_kunjungan_per_agama' => 'Grafik Kunjungan Per Agama',
            'grafik_kunjungan_per_umur' => 'Grafik Kunjungan Per Umur',
            'suku_bangsa' => 'Suku Bangsa',
            'bahasa_pasien' => 'Bahasa Pasien',
            'golongan_tni' => 'Golongan Tni',
            'satuan_tni' => 'Satuan Tni',
            'jabatan_tni' => 'Jabatan Tni',
            'pangkat_tni' => 'Pangkat Tni',
            'golongan_polri' => 'Golongan Polri',
            'satuan_polri' => 'Satuan Polri',
            'jabatan_polri' => 'Jabatan Polri',
            'pangkat_polri' => 'Pangkat Polri',
            'cacat_fisik' => 'Cacat Fisik',
            'grafik_kunjungan_suku' => 'Grafik Kunjungan Suku',
            'grafik_kunjungan_bahasa' => 'Grafik Kunjungan Bahasa',
            'booking_operasi' => 'Booking Operasi',
            'mapping_poli_bpjs' => 'Mapping Poli Bpjs',
            'grafik_kunjungan_per_cacat' => 'Grafik Kunjungan Per Cacat',
            'barang_cssd' => 'Barang Cssd',
            'skdp_bpjs' => 'Skdp Bpjs',
            'booking_registrasi' => 'Booking Registrasi',
            'bpjs_cek_propinsi' => 'Bpjs Cek Propinsi',
            'bpjs_cek_kabupaten' => 'Bpjs Cek Kabupaten',
            'bpjs_cek_kecamatan' => 'Bpjs Cek Kecamatan',
            'bpjs_cek_dokterdpjp' => 'Bpjs Cek Dokterdpjp',
            'bpjs_cek_riwayat_rujukanrs' => 'Bpjs Cek Riwayat Rujukanrs',
            'bpjs_cek_tanggal_rujukan' => 'Bpjs Cek Tanggal Rujukan',
            'permintaan_lab' => 'Permintaan Lab',
            'permintaan_radiologi' => 'Permintaan Radiologi',
            'surat_indeks' => 'Surat Indeks',
            'surat_map' => 'Surat Map',
            'surat_almari' => 'Surat Almari',
            'surat_rak' => 'Surat Rak',
            'surat_ruang' => 'Surat Ruang',
            'surat_klasifikasi' => 'Surat Klasifikasi',
            'surat_status' => 'Surat Status',
            'surat_sifat' => 'Surat Sifat',
            'surat_balas' => 'Surat Balas',
            'surat_masuk' => 'Surat Masuk',
            'pcare_cek_dokter' => 'Pcare Cek Dokter',
            'pcare_cek_poli' => 'Pcare Cek Poli',
            'pcare_cek_provider' => 'Pcare Cek Provider',
            'pcare_cek_statuspulang' => 'Pcare Cek Statuspulang',
            'pcare_cek_spesialis' => 'Pcare Cek Spesialis',
            'pcare_cek_subspesialis' => 'Pcare Cek Subspesialis',
            'pcare_cek_sarana' => 'Pcare Cek Sarana',
            'pcare_cek_khusus' => 'Pcare Cek Khusus',
            'pcare_cek_obat' => 'Pcare Cek Obat',
            'pcare_cek_tindakan' => 'Pcare Cek Tindakan',
            'pcare_cek_faskessubspesialis' => 'Pcare Cek Faskessubspesialis',
            'pcare_cek_faskesalihrawat' => 'Pcare Cek Faskesalihrawat',
            'pcare_cek_faskesthalasemia' => 'Pcare Cek Faskesthalasemia',
            'pcare_mapping_obat' => 'Pcare Mapping Obat',
            'pcare_mapping_tindakan' => 'Pcare Mapping Tindakan',
            'pcare_club_prolanis' => 'Pcare Club Prolanis',
            'pcare_mapping_poli' => 'Pcare Mapping Poli',
            'pcare_kegiatan_kelompok' => 'Pcare Kegiatan Kelompok',
            'pcare_mapping_tindakan_ranap' => 'Pcare Mapping Tindakan Ranap',
            'pcare_peserta_kegiatan_kelompok' => 'Pcare Peserta Kegiatan Kelompok',
            'sirkulasi_obat3' => 'Sirkulasi Obat3',
            'bridging_pcare_daftar' => 'Bridging Pcare Daftar',
            'pcare_mapping_dokter' => 'Pcare Mapping Dokter',
            'ranap_per_ruang' => 'Ranap Per Ruang',
            'penyakit_ranap_cara_bayar' => 'Penyakit Ranap Cara Bayar',
            'anggota_militer_dirawat' => 'Anggota Militer Dirawat',
            'set_input_parsial' => 'Set Input Parsial',
            'lama_pelayanan_radiologi' => 'Lama Pelayanan Radiologi',
            'lama_pelayanan_lab' => 'Lama Pelayanan Lab',
            'bpjs_cek_sep' => 'Bpjs Cek Sep',
            'catatan_perawatan' => 'Catatan Perawatan',
            'surat_keluar' => 'Surat Keluar',
            'kegiatan_farmasi' => 'Kegiatan Farmasi',
            'stok_opname_logistik' => 'Stok Opname Logistik',
            'sirkulasi_non_medis' => 'Sirkulasi Non Medis',
            'rekap_lab_pertahun' => 'Rekap Lab Pertahun',
            'perujuk_lab_pertahun' => 'Perujuk Lab Pertahun',
            'rekap_radiologi_pertahun' => 'Rekap Radiologi Pertahun',
            'perujuk_radiologi_pertahun' => 'Perujuk Radiologi Pertahun',
            'jumlah_porsi_diet' => 'Jumlah Porsi Diet',
            'jumlah_macam_diet' => 'Jumlah Macam Diet',
            'payment_point2' => 'Payment Point2',
            'pembayaran_akun_bayar2' => 'Pembayaran Akun Bayar2',
            'hapus_nota_salah' => 'Hapus Nota Salah',
            'pengkajian_askep' => 'Pengkajian Askep',
            'hais_perbangsal' => 'Hais Perbangsal',
            'ppn_obat' => 'Ppn Obat',
            'saldo_akun_perbulan' => 'Saldo Akun Perbulan',
            'display_apotek' => 'Display Apotek',
            'sisrute_referensi_faskes' => 'Sisrute Referensi Faskes',
            'sisrute_referensi_alasanrujuk' => 'Sisrute Referensi Alasanrujuk',
            'sisrute_referensi_diagnosa' => 'Sisrute Referensi Diagnosa',
            'sisrute_rujukan_masuk' => 'Sisrute Rujukan Masuk',
            'sisrute_rujukan_keluar' => 'Sisrute Rujukan Keluar',
            'bpjs_cek_skdp' => 'Bpjs Cek Skdp',
            'data_batch' => 'Data Batch',
            'kunjungan_permintaan_lab' => 'Kunjungan Permintaan Lab',
            'kunjungan_permintaan_lab2' => 'Kunjungan Permintaan Lab2',
            'kunjungan_permintaan_radiologi' => 'Kunjungan Permintaan Radiologi',
            'kunjungan_permintaan_radiologi2' => 'Kunjungan Permintaan Radiologi2',
            'pcare_pemberian_obat' => 'Pcare Pemberian Obat',
            'pcare_pemberian_tindakan' => 'Pcare Pemberian Tindakan',
            'pembayaran_akun_bayar3' => 'Pembayaran Akun Bayar3',
            'password_asuransi' => 'Password Asuransi',
            'kemenkes_sitt' => 'Kemenkes Sitt',
            'siranap_ketersediaan_kamar' => 'Siranap Ketersediaan Kamar',
            'grafik_tb_periodelaporan' => 'Grafik Tb Periodelaporan',
            'grafik_tb_rujukan' => 'Grafik Tb Rujukan',
            'grafik_tb_riwayat' => 'Grafik Tb Riwayat',
            'grafik_tb_tipediagnosis' => 'Grafik Tb Tipediagnosis',
            'grafik_tb_statushiv' => 'Grafik Tb Statushiv',
            'grafik_tb_skoringanak' => 'Grafik Tb Skoringanak',
            'grafik_tb_konfirmasiskoring5' => 'Grafik Tb Konfirmasiskoring5',
            'grafik_tb_konfirmasiskoring6' => 'Grafik Tb Konfirmasiskoring6',
            'grafik_tb_sumberobat' => 'Grafik Tb Sumberobat',
            'grafik_tb_hasilakhirpengobatan' => 'Grafik Tb Hasilakhirpengobatan',
            'grafik_tb_hasilteshiv' => 'Grafik Tb Hasilteshiv',
            'kadaluarsa_batch' => 'Kadaluarsa Batch',
            'sisa_stok' => 'Sisa Stok',
            'obat_per_resep' => 'Obat Per Resep',
            'pemakaian_air_pdam' => 'Pemakaian Air Pdam',
            'limbah_b3_medis' => 'Limbah B3 Medis',
            'grafik_air_pdam_pertanggal' => 'Grafik Air Pdam Pertanggal',
            'grafik_air_pdam_perbulan' => 'Grafik Air Pdam Perbulan',
            'grafik_limbahb3_pertanggal' => 'Grafik Limbahb3 Pertanggal',
            'grafik_limbahb3_perbulan' => 'Grafik Limbahb3 Perbulan',
            'limbah_domestik' => 'Limbah Domestik',
            'grafik_limbahdomestik_pertanggal' => 'Grafik Limbahdomestik Pertanggal',
            'grafik_limbahdomestik_perbulan' => 'Grafik Limbahdomestik Perbulan',
            'mutu_air_limbah' => 'Mutu Air Limbah',
            'pest_control' => 'Pest Control',
            'ruang_perpustakaan' => 'Ruang Perpustakaan',
            'kategori_perpustakaan' => 'Kategori Perpustakaan',
            'jenis_perpustakaan' => 'Jenis Perpustakaan',
            'pengarang_perpustakaan' => 'Pengarang Perpustakaan',
            'penerbit_perpustakaan' => 'Penerbit Perpustakaan',
            'koleksi_perpustakaan' => 'Koleksi Perpustakaan',
            'inventaris_perpustakaan' => 'Inventaris Perpustakaan',
            'set_peminjaman_perpustakaan' => 'Set Peminjaman Perpustakaan',
            'denda_perpustakaan' => 'Denda Perpustakaan',
            'anggota_perpustakaan' => 'Anggota Perpustakaan',
            'peminjaman_perpustakaan' => 'Peminjaman Perpustakaan',
            'bayar_denda_perpustakaan' => 'Bayar Denda Perpustakaan',
            'ebook_perpustakaan' => 'Ebook Perpustakaan',
            'jenis_cidera_k3rs' => 'Jenis Cidera K3rs',
            'penyebab_k3rs' => 'Penyebab K3rs',
            'jenis_luka_k3rs' => 'Jenis Luka K3rs',
            'lokasi_kejadian_k3rs' => 'Lokasi Kejadian K3rs',
            'dampak_cidera_k3rs' => 'Dampak Cidera K3rs',
            'jenis_pekerjaan_k3rs' => 'Jenis Pekerjaan K3rs',
            'bagian_tubuh_k3rs' => 'Bagian Tubuh K3rs',
            'peristiwa_k3rs' => 'Peristiwa K3rs',
            'grafik_k3_pertahun' => 'Grafik K3 Pertahun',
            'grafik_k3_perbulan' => 'Grafik K3 Perbulan',
            'grafik_k3_pertanggal' => 'Grafik K3 Pertanggal',
            'grafik_k3_perjeniscidera' => 'Grafik K3 Perjeniscidera',
            'grafik_k3_perpenyebab' => 'Grafik K3 Perpenyebab',
            'grafik_k3_perjenisluka' => 'Grafik K3 Perjenisluka',
            'grafik_k3_lokasikejadian' => 'Grafik K3 Lokasikejadian',
            'grafik_k3_dampakcidera' => 'Grafik K3 Dampakcidera',
            'grafik_k3_perjenispekerjaan' => 'Grafik K3 Perjenispekerjaan',
            'grafik_k3_perbagiantubuh' => 'Grafik K3 Perbagiantubuh',
            'jenis_cidera_k3rstahun' => 'Jenis Cidera K3rstahun',
            'penyebab_k3rstahun' => 'Penyebab K3rstahun',
            'jenis_luka_k3rstahun' => 'Jenis Luka K3rstahun',
            'lokasi_kejadian_k3rstahun' => 'Lokasi Kejadian K3rstahun',
            'dampak_cidera_k3rstahun' => 'Dampak Cidera K3rstahun',
            'jenis_pekerjaan_k3rstahun' => 'Jenis Pekerjaan K3rstahun',
            'bagian_tubuh_k3rstahun' => 'Bagian Tubuh K3rstahun',
            'sekrining_rawat_jalan' => 'Sekrining Rawat Jalan',
            'bpjs_histori_pelayanan' => 'Bpjs Histori Pelayanan',
            'rekap_mutasi_berkas' => 'Rekap Mutasi Berkas',
            'skrining_ralan_pernapasan_pertahun' => 'Skrining Ralan Pernapasan Pertahun',
            'pengajuan_barang_medis' => 'Pengajuan Barang Medis',
            'pengajuan_barang_nonmedis' => 'Pengajuan Barang Nonmedis',
            'grafik_kunjungan_ranapbulan' => 'Grafik Kunjungan Ranapbulan',
            'grafik_kunjungan_ranaptanggal' => 'Grafik Kunjungan Ranaptanggal',
            'grafik_kunjungan_ranap_peruang' => 'Grafik Kunjungan Ranap Peruang',
            'kunjungan_bangsal_pertahun' => 'Kunjungan Bangsal Pertahun',
            'grafik_jenjang_jabatanpegawai' => 'Grafik Jenjang Jabatanpegawai',
            'grafik_bidangpegawai' => 'Grafik Bidangpegawai',
            'grafik_departemenpegawai' => 'Grafik Departemenpegawai',
            'grafik_pendidikanpegawai' => 'Grafik Pendidikanpegawai',
            'grafik_sttswppegawai' => 'Grafik Sttswppegawai',
            'grafik_sttskerjapegawai' => 'Grafik Sttskerjapegawai',
            'grafik_sttspulangranap' => 'Grafik Sttspulangranap',
            'kip_pasien_ranap' => 'Kip Pasien Ranap',
            'kip_pasien_ralan' => 'Kip Pasien Ralan',
            'bpjs_mapping_dokterdpjp' => 'Bpjs Mapping Dokterdpjp',
            'data_triase_igd' => 'Data Triase Igd',
            'master_triase_skala1' => 'Master Triase Skala1',
            'master_triase_skala2' => 'Master Triase Skala2',
            'master_triase_skala3' => 'Master Triase Skala3',
            'master_triase_skala4' => 'Master Triase Skala4',
            'master_triase_skala5' => 'Master Triase Skala5',
            'master_triase_pemeriksaan' => 'Master Triase Pemeriksaan',
            'master_triase_macamkasus' => 'Master Triase Macamkasus',
            'rekap_permintaan_diet' => 'Rekap Permintaan Diet',
            'daftar_pasien_ranap' => 'Daftar Pasien Ranap',
            'daftar_pasien_ranaptni' => 'Daftar Pasien Ranaptni',
            'pengajuan_asetinventaris' => 'Pengajuan Asetinventaris',
            'item_apotek_jenis' => 'Item Apotek Jenis',
            'item_apotek_kategori' => 'Item Apotek Kategori',
            'item_apotek_golongan' => 'Item Apotek Golongan',
            'item_apotek_industrifarmasi' => 'Item Apotek Industrifarmasi',
            '10_obat_terbanyak_poli' => '10 Obat Terbanyak Poli',
            'grafik_pengajuan_aset_urgensi' => 'Grafik Pengajuan Aset Urgensi',
            'grafik_pengajuan_aset_status' => 'Grafik Pengajuan Aset Status',
            'grafik_pengajuan_aset_departemen' => 'Grafik Pengajuan Aset Departemen',
            'rekap_pengajuan_aset_departemen' => 'Rekap Pengajuan Aset Departemen',
            'grafik_kelompok_jabatanpegawai' => 'Grafik Kelompok Jabatanpegawai',
            'grafik_resiko_kerjapegawai' => 'Grafik Resiko Kerjapegawai',
            'grafik_emergency_indexpegawai' => 'Grafik Emergency Indexpegawai',
            'grafik_inventaris_ruang' => 'Grafik Inventaris Ruang',
            'harian_HAIs2' => 'Harian Ha Is2',
            'grafik_inventaris_jenis' => 'Grafik Inventaris Jenis',
            'data_resume_pasien' => 'Data Resume Pasien',
            'perkiraan_biaya_ranap' => 'Perkiraan Biaya Ranap',
            'rekap_obat_poli' => 'Rekap Obat Poli',
            'rekap_obat_pasien' => 'Rekap Obat Pasien',
            'permintaan_perbaikan_inventaris' => 'Permintaan Perbaikan Inventaris',
            'grafik_HAIs_pasienbangsal' => 'Grafik Ha Is Pasienbangsal',
            'grafik_HAIs_pasienbulan' => 'Grafik Ha Is Pasienbulan',
            'grafik_HAIs_laju_vap' => 'Grafik Ha Is Laju Vap',
            'grafik_HAIs_laju_iad' => 'Grafik Ha Is Laju Iad',
            'grafik_HAIs_laju_pleb' => 'Grafik Ha Is Laju Pleb',
            'grafik_HAIs_laju_isk' => 'Grafik Ha Is Laju Isk',
            'grafik_HAIs_laju_ilo' => 'Grafik Ha Is Laju Ilo',
            'grafik_HAIs_laju_hap' => 'Grafik Ha Is Laju Hap',
            'inhealth_mapping_poli' => 'Inhealth Mapping Poli',
            'inhealth_mapping_dokter' => 'Inhealth Mapping Dokter',
            'inhealth_mapping_tindakan_ralan' => 'Inhealth Mapping Tindakan Ralan',
            'inhealth_mapping_tindakan_ranap' => 'Inhealth Mapping Tindakan Ranap',
            'inhealth_mapping_tindakan_radiologi' => 'Inhealth Mapping Tindakan Radiologi',
            'inhealth_mapping_tindakan_laborat' => 'Inhealth Mapping Tindakan Laborat',
            'inhealth_mapping_tindakan_operasi' => 'Inhealth Mapping Tindakan Operasi',
            'hibah_obat_bhp' => 'Hibah Obat Bhp',
            'asal_hibah' => 'Asal Hibah',
            'asuhan_gizi' => 'Asuhan Gizi',
            'inhealth_kirim_tagihan' => 'Inhealth Kirim Tagihan',
            'sirkulasi_obat4' => 'Sirkulasi Obat4',
            'sirkulasi_obat5' => 'Sirkulasi Obat5',
            'sirkulasi_non_medis2' => 'Sirkulasi Non Medis2',
            'monitoring_asuhan_gizi' => 'Monitoring Asuhan Gizi',
            'penerimaan_obat_perbulan' => 'Penerimaan Obat Perbulan',
            'rekap_kunjungan' => 'Rekap Kunjungan',
            'surat_sakit' => 'Surat Sakit',
            'penilaian_awal_keperawatan_ralan' => 'Penilaian Awal Keperawatan Ralan',
            'permintaan_diet' => 'Permintaan Diet',
            'master_masalah_keperawatan' => 'Master Masalah Keperawatan',
            'pengajuan_cuti' => 'Pengajuan Cuti',
            'kedatangan_pasien' => 'Kedatangan Pasien',
            'utd_pendonor' => 'Utd Pendonor',
            'toko_suplier' => 'Toko Suplier',
            'toko_jenis' => 'Toko Jenis',
            'toko_set_harga' => 'Toko Set Harga',
            'toko_barang' => 'Toko Barang',
            'penagihan_piutang_pasien' => 'Penagihan Piutang Pasien',
            'akun_penagihan_piutang' => 'Akun Penagihan Piutang',
            'stok_opname_toko' => 'Stok Opname Toko',
            'toko_riwayat_barang' => 'Toko Riwayat Barang',
            'toko_surat_pemesanan' => 'Toko Surat Pemesanan',
            'toko_pengajuan_barang' => 'Toko Pengajuan Barang',
            'toko_penerimaan_barang' => 'Toko Penerimaan Barang',
            'toko_pengadaan_barang' => 'Toko Pengadaan Barang',
            'toko_hutang' => 'Toko Hutang',
            'toko_bayar_pemesanan' => 'Toko Bayar Pemesanan',
            'toko_member' => 'Toko Member',
            'toko_penjualan' => 'Toko Penjualan',
            'registrasi_poli_per_tanggal' => 'Registrasi Poli Per Tanggal',
            'toko_piutang' => 'Toko Piutang',
            'toko_retur_beli' => 'Toko Retur Beli',
            'ipsrs_returbeli' => 'Ipsrs Returbeli',
            'ipsrs_riwayat_barang' => 'Ipsrs Riwayat Barang',
            'pasien_corona' => 'Pasien Corona',
            'toko_pendapatan_harian' => 'Toko Pendapatan Harian',
            'diagnosa_pasien_corona' => 'Diagnosa Pasien Corona',
            'perawatan_pasien_corona' => 'Perawatan Pasien Corona',
            'penilaian_awal_keperawatan_gigi' => 'Penilaian Awal Keperawatan Gigi',
            'master_masalah_keperawatan_gigi' => 'Master Masalah Keperawatan Gigi',
            'toko_bayar_piutang' => 'Toko Bayar Piutang',
            'toko_piutang_harian' => 'Toko Piutang Harian',
            'toko_penjualan_harian' => 'Toko Penjualan Harian',
            'deteksi_corona' => 'Deteksi Corona',
            'penilaian_awal_keperawatan_kebidanan' => 'Penilaian Awal Keperawatan Kebidanan',
            'pengumuman_epasien' => 'Pengumuman Epasien',
            'surat_hamil' => 'Surat Hamil',
            'set_tarif_online' => 'Set Tarif Online',
            'booking_periksa' => 'Booking Periksa',
            'toko_sirkulasi' => 'Toko Sirkulasi',
            'toko_retur_jual' => 'Toko Retur Jual',
            'toko_retur_piutang' => 'Toko Retur Piutang',
            'toko_sirkulasi2' => 'Toko Sirkulasi2',
            'toko_keuntungan_barang' => 'Toko Keuntungan Barang',
            'zis_pengeluaran_penerima_dankes' => 'Zis Pengeluaran Penerima Dankes',
            'zis_penghasilan_penerima_dankes' => 'Zis Penghasilan Penerima Dankes',
            'zis_ukuran_rumah_penerima_dankes' => 'Zis Ukuran Rumah Penerima Dankes',
            'zis_dinding_rumah_penerima_dankes' => 'Zis Dinding Rumah Penerima Dankes',
            'zis_lantai_rumah_penerima_dankes' => 'Zis Lantai Rumah Penerima Dankes',
            'zis_atap_rumah_penerima_dankes' => 'Zis Atap Rumah Penerima Dankes',
            'zis_kepemilikan_rumah_penerima_dankes' => 'Zis Kepemilikan Rumah Penerima Dankes',
            'zis_kamar_mandi_penerima_dankes' => 'Zis Kamar Mandi Penerima Dankes',
            'zis_dapur_rumah_penerima_dankes' => 'Zis Dapur Rumah Penerima Dankes',
            'zis_kursi_rumah_penerima_dankes' => 'Zis Kursi Rumah Penerima Dankes',
            'zis_kategori_phbs_penerima_dankes' => 'Zis Kategori Phbs Penerima Dankes',
            'zis_elektronik_penerima_dankes' => 'Zis Elektronik Penerima Dankes',
            'zis_ternak_penerima_dankes' => 'Zis Ternak Penerima Dankes',
            'zis_jenis_simpanan_penerima_dankes' => 'Zis Jenis Simpanan Penerima Dankes',
            'penilaian_awal_keperawatan_anak' => 'Penilaian Awal Keperawatan Anak',
            'zis_kategori_asnaf_penerima_dankes' => 'Zis Kategori Asnaf Penerima Dankes',
            'master_masalah_keperawatan_anak' => 'Master Masalah Keperawatan Anak',
            'master_imunisasi' => 'Master Imunisasi',
            'zis_patologis_penerima_dankes' => 'Zis Patologis Penerima Dankes',
            'pcare_cek_kartu' => 'Pcare Cek Kartu',
            'surat_bebas_narkoba' => 'Surat Bebas Narkoba',
            'surat_keterangan_covid' => 'Surat Keterangan Covid',
            'pemakaian_air_tanah' => 'Pemakaian Air Tanah',
            'grafik_air_tanah_pertanggal' => 'Grafik Air Tanah Pertanggal',
            'grafik_air_tanah_perbulan' => 'Grafik Air Tanah Perbulan',
            'lama_pelayanan_poli' => 'Lama Pelayanan Poli',
            'hemodialisa' => 'Hemodialisa',
            'laporan_tahunan_irj' => 'Laporan Tahunan Irj',
            'grafik_harian_hemodialisa' => 'Grafik Harian Hemodialisa',
            'grafik_bulanan_hemodialisa' => 'Grafik Bulanan Hemodialisa',
            'grafik_tahunan_hemodialisa' => 'Grafik Tahunan Hemodialisa',
            'grafik_bulanan_meninggal' => 'Grafik Bulanan Meninggal',
            'perbaikan_inventaris' => 'Perbaikan Inventaris',
            'surat_cuti_hamil' => 'Surat Cuti Hamil',
            'permintaan_stok_obat_pasien' => 'Permintaan Stok Obat Pasien',
            'pemeliharaan_inventaris' => 'Pemeliharaan Inventaris',
            'klasifikasi_pasien_ranap' => 'Klasifikasi Pasien Ranap',
            'bulanan_klasifikasi_pasien_ranap' => 'Bulanan Klasifikasi Pasien Ranap',
            'harian_klasifikasi_pasien_ranap' => 'Harian Klasifikasi Pasien Ranap',
            'klasifikasi_pasien_perbangsal' => 'Klasifikasi Pasien Perbangsal',
            'soap_perawatan' => 'Soap Perawatan',
            'klaim_rawat_jalan' => 'Klaim Rawat Jalan',
            'skrining_gizi' => 'Skrining Gizi',
            'lama_penyiapan_rm' => 'Lama Penyiapan Rm',
            'dosis_radiologi' => 'Dosis Radiologi',
            'demografi_umur_kunjungan' => 'Demografi Umur Kunjungan',
            'jam_diet_pasien' => 'Jam Diet Pasien',
            'rvu_bpjs' => 'Rvu Bpjs',
            'verifikasi_penerimaan_farmasi' => 'Verifikasi Penerimaan Farmasi',
            'verifikasi_penerimaan_logistik' => 'Verifikasi Penerimaan Logistik',
            'pemeriksaan_lab_pa' => 'Pemeriksaan Lab Pa',
            'ringkasan_pengajuan_obat' => 'Ringkasan Pengajuan Obat',
            'ringkasan_pemesanan_obat' => 'Ringkasan Pemesanan Obat',
            'ringkasan_pengadaan_obat' => 'Ringkasan Pengadaan Obat',
            'ringkasan_penerimaan_obat' => 'Ringkasan Penerimaan Obat',
            'ringkasan_hibah_obat' => 'Ringkasan Hibah Obat',
            'ringkasan_penjualan_obat' => 'Ringkasan Penjualan Obat',
            'ringkasan_beri_obat' => 'Ringkasan Beri Obat',
            'ringkasan_piutang_obat' => 'Ringkasan Piutang Obat',
            'ringkasan_stok_keluar_obat' => 'Ringkasan Stok Keluar Obat',
            'ringkasan_retur_suplier_obat' => 'Ringkasan Retur Suplier Obat',
            'ringkasan_retur_pembeli_obat' => 'Ringkasan Retur Pembeli Obat',
            'penilaian_awal_keperawatan_ranapkebidanan' => 'Penilaian Awal Keperawatan Ranapkebidanan',
            'ringkasan_pengajuan_nonmedis' => 'Ringkasan Pengajuan Nonmedis',
            'ringkasan_pemesanan_nonmedis' => 'Ringkasan Pemesanan Nonmedis',
            'ringkasan_pengadaan_nonmedis' => 'Ringkasan Pengadaan Nonmedis',
            'ringkasan_penerimaan_nonmedis' => 'Ringkasan Penerimaan Nonmedis',
            'ringkasan_stokkeluar_nonmedis' => 'Ringkasan Stokkeluar Nonmedis',
            'ringkasan_returbeli_nonmedis' => 'Ringkasan Returbeli Nonmedis',
            'omset_penerimaan' => 'Omset Penerimaan',
            'validasi_penagihan_piutang' => 'Validasi Penagihan Piutang',
            'permintaan_ranap' => 'Permintaan Ranap',
            'bpjs_diagnosa_prb' => 'Bpjs Diagnosa Prb',
            'bpjs_obat_prb' => 'Bpjs Obat Prb',
            'bpjs_surat_kontrol' => 'Bpjs Surat Kontrol',
            'penggunaan_bhp_ok' => 'Penggunaan Bhp Ok',
            'surat_keterangan_rawat_inap' => 'Surat Keterangan Rawat Inap',
            'surat_keterangan_sehat' => 'Surat Keterangan Sehat',
            'pendapatan_per_carabayar' => 'Pendapatan Per Carabayar',
            'akun_host_to_host_bank_jateng' => 'Akun Host To Host Bank Jateng',
            'pembayaran_bank_jateng' => 'Pembayaran Bank Jateng',
            'bpjs_surat_pri' => 'Bpjs Surat Pri',
            'ringkasan_tindakan' => 'Ringkasan Tindakan',
            'lama_pelayanan_pasien' => 'Lama Pelayanan Pasien',
            'surat_sakit_pihak_2' => 'Surat Sakit Pihak 2',
            'tagihan_hutang_obat' => 'Tagihan Hutang Obat',
            'referensi_mobilejkn_bpjs' => 'Referensi Mobilejkn Bpjs',
            'batal_pendaftaran_mobilejkn_bpjs' => 'Batal Pendaftaran Mobilejkn Bpjs',
            'lama_operasi' => 'Lama Operasi',
            'grafik_inventaris_kategori' => 'Grafik Inventaris Kategori',
            'grafik_inventaris_merk' => 'Grafik Inventaris Merk',
            'grafik_inventaris_produsen' => 'Grafik Inventaris Produsen',
            'pengembalian_deposit_pasien' => 'Pengembalian Deposit Pasien',
            'validasi_tagihan_hutang_obat' => 'Validasi Tagihan Hutang Obat',
            'piutang_obat_belum_lunas' => 'Piutang Obat Belum Lunas',
            'integrasi_briapi' => 'Integrasi Briapi',
            'pengadaan_aset_inventaris' => 'Pengadaan Aset Inventaris',
            'akun_aset_inventaris' => 'Akun Aset Inventaris',
            'suplier_inventaris' => 'Suplier Inventaris',
            'penerimaan_aset_inventaris' => 'Penerimaan Aset Inventaris',
            'bayar_pemesanan_iventaris' => 'Bayar Pemesanan Iventaris',
            'hutang_aset_inventaris' => 'Hutang Aset Inventaris',
            'hibah_aset_inventaris' => 'Hibah Aset Inventaris',
            'titip_faktur_non_medis' => 'Titip Faktur Non Medis',
            'validasi_tagihan_non_medis' => 'Validasi Tagihan Non Medis',
            'titip_faktur_aset' => 'Titip Faktur Aset',
            'validasi_tagihan_aset' => 'Validasi Tagihan Aset',
            'hibah_non_medis' => 'Hibah Non Medis',
            'pcare_alasan_tacc' => 'Pcare Alasan Tacc',
            'resep_luar' => 'Resep Luar',
            'surat_bebas_tbc' => 'Surat Bebas Tbc',
            'surat_buta_warna' => 'Surat Buta Warna',
            'surat_bebas_tato' => 'Surat Bebas Tato',
            'surat_kewaspadaan_kesehatan' => 'Surat Kewaspadaan Kesehatan',
            'grafik_porsidiet_pertanggal' => 'Grafik Porsidiet Pertanggal',
            'grafik_porsidiet_perbulan' => 'Grafik Porsidiet Perbulan',
            'grafik_porsidiet_pertahun' => 'Grafik Porsidiet Pertahun',
            'grafik_porsidiet_perbangsal' => 'Grafik Porsidiet Perbangsal',
            'penilaian_awal_medis_ralan' => 'Penilaian Awal Medis Ralan',
            'master_masalah_keperawatan_mata' => 'Master Masalah Keperawatan Mata',
            'penilaian_awal_keperawatan_mata' => 'Penilaian Awal Keperawatan Mata',
            'penilaian_awal_medis_ranap' => 'Penilaian Awal Medis Ranap',
            'penilaian_awal_medis_ranap_kebidanan' => 'Penilaian Awal Medis Ranap Kebidanan',
            'penilaian_awal_medis_ralan_kebidanan' => 'Penilaian Awal Medis Ralan Kebidanan',
            'penilaian_awal_medis_igd' => 'Penilaian Awal Medis Igd',
            'penilaian_awal_medis_ralan_anak' => 'Penilaian Awal Medis Ralan Anak',
            'bpjs_referensi_poli_hfis' => 'Bpjs Referensi Poli Hfis',
            'bpjs_referensi_dokter_hfis' => 'Bpjs Referensi Dokter Hfis',
            'bpjs_referensi_jadwal_hfis' => 'Bpjs Referensi Jadwal Hfis',
            'penilaian_fisioterapi' => 'Penilaian Fisioterapi',
            'bpjs_program_prb' => 'Bpjs Program Prb',
            'bpjs_suplesi_jasaraharja' => 'Bpjs Suplesi Jasaraharja',
            'bpjs_data_induk_kecelakaan' => 'Bpjs Data Induk Kecelakaan',
            'bpjs_sep_internal' => 'Bpjs Sep Internal',
            'bpjs_klaim_jasa_raharja' => 'Bpjs Klaim Jasa Raharja',
            'bpjs_daftar_finger_print' => 'Bpjs Daftar Finger Print',
            'bpjs_rujukan_khusus' => 'Bpjs Rujukan Khusus',
            'pemeliharaan_gedung' => 'Pemeliharaan Gedung',
            'grafik_perbaikan_inventaris_pertanggal' => 'Grafik Perbaikan Inventaris Pertanggal',
            'grafik_perbaikan_inventaris_perbulan' => 'Grafik Perbaikan Inventaris Perbulan',
            'grafik_perbaikan_inventaris_pertahun' => 'Grafik Perbaikan Inventaris Pertahun',
            'grafik_perbaikan_inventaris_perpelaksana_status' => 'Grafik Perbaikan Inventaris Perpelaksana Status',
            'penilaian_mcu' => 'Penilaian Mcu',
            'peminjam_piutang' => 'Peminjam Piutang',
            'piutang_lainlain' => 'Piutang Lainlain',
            'cara_bayar' => 'Cara Bayar',
            'audit_kepatuhan_apd' => 'Audit Kepatuhan Apd',
            'bpjs_task_id' => 'Bpjs Task ID',
            'bayar_piutang_lain' => 'Bayar Piutang Lain',
            'pembayaran_akun_bayar4' => 'Pembayaran Akun Bayar4',
            'stok_akhir_farmasi_pertanggal' => 'Stok Akhir Farmasi Pertanggal',
            'riwayat_kamar_pasien' => 'Riwayat Kamar Pasien',
            'uji_fungsi_kfr' => 'Uji Fungsi Kfr',
            'hapus_berkas_digital_perawatan' => 'Hapus Berkas Digital Perawatan',
            'kategori_pengeluaran_harian' => 'Kategori Pengeluaran Harian',
            'kategori_pemasukan_lain' => 'Kategori Pemasukan Lain',
            'pembayaran_akun_bayar5' => 'Pembayaran Akun Bayar5',
            'ruang_ok' => 'Ruang Ok',
            'telaah_resep' => 'Telaah Resep',
            'jasa_tindakan_pasien' => 'Jasa Tindakan Pasien',
            'permintaan_resep_pulang' => 'Permintaan Resep Pulang',
            'rekap_jm_dokter' => 'Rekap Jm Dokter',
            'status_data_rm' => 'Status Data Rm',
            'ubah_petugas_lab_pk' => 'Ubah Petugas Lab Pk',
            'ubah_petugas_lab_pa' => 'Ubah Petugas Lab Pa',
            'ubah_petugas_radiologi' => 'Ubah Petugas Radiologi',
            'gabung_norawat' => 'Gabung Norawat',
            'gabung_rm' => 'Gabung Rm',
            'ringkasan_biaya_obat_pasien_pertanggal' => 'Ringkasan Biaya Obat Pasien Pertanggal',
            'master_masalah_keperawatan_igd' => 'Master Masalah Keperawatan Igd',
            'penilaian_awal_keperawatan_igd' => 'Penilaian Awal Keperawatan Igd',
            'bpjs_referensi_dpho_apotek' => 'Bpjs Referensi Dpho Apotek',
            'bpjs_referensi_poli_apotek' => 'Bpjs Referensi Poli Apotek',
            'bayar_jm_dokter' => 'Bayar Jm Dokter',
            'bpjs_referensi_faskes_apotek' => 'Bpjs Referensi Faskes Apotek',
            'bpjs_referensi_spesialistik_apotek' => 'Bpjs Referensi Spesialistik Apotek',
            'pembayaran_briva' => 'Pembayaran Briva',
            'penilaian_awal_keperawatan_ranap' => 'Penilaian Awal Keperawatan Ranap',
            'nilai_penerimaan_vendor_farmasi_perbulan' => 'Nilai Penerimaan Vendor Farmasi Perbulan',
            'akun_bayar_hutang' => 'Akun Bayar Hutang',
            'master_rencana_keperawatan' => 'Master Rencana Keperawatan',
            'laporan_tahunan_igd' => 'Laporan Tahunan Igd',
            'obat_bhp_tidakbergerak' => 'Obat Bhp Tidakbergerak',
            'ringkasan_hutang_vendor_farmasi' => 'Ringkasan Hutang Vendor Farmasi',
            'nilai_penerimaan_vendor_nonmedis_perbulan' => 'Nilai Penerimaan Vendor Nonmedis Perbulan',
            'ringkasan_hutang_vendor_nonmedis' => 'Ringkasan Hutang Vendor Nonmedis',
            'master_rencana_keperawatan_anak' => 'Master Rencana Keperawatan Anak',
            'anggota_polri_dirawat' => 'Anggota Polri Dirawat',
            'daftar_pasien_ranap_polri' => 'Daftar Pasien Ranap Polri',
            'soap_ralan_polri' => 'Soap Ralan Polri',
            'soap_ranap_polri' => 'Soap Ranap Polri',
            'laporan_penyakit_polri' => 'Laporan Penyakit Polri',
            'jumlah_pengunjung_ralan_polri' => 'Jumlah Pengunjung Ralan Polri',
            'catatan_observasi_igd' => 'Catatan Observasi Igd',
            'catatan_observasi_ranap' => 'Catatan Observasi Ranap',
            'catatan_observasi_ranap_kebidanan' => 'Catatan Observasi Ranap Kebidanan',
            'catatan_observasi_ranap_postpartum' => 'Catatan Observasi Ranap Postpartum',
            'penilaian_awal_medis_ralan_tht' => 'Penilaian Awal Medis Ralan Tht',
            'penilaian_psikologi' => 'Penilaian Psikologi',
            'audit_cuci_tangan_medis' => 'Audit Cuci Tangan Medis',
            'audit_pembuangan_limbah' => 'Audit Pembuangan Limbah',
            'ruang_audit_kepatuhan' => 'Ruang Audit Kepatuhan',
            'audit_pembuangan_benda_tajam' => 'Audit Pembuangan Benda Tajam',
            'audit_penanganan_darah' => 'Audit Penanganan Darah',
            'audit_pengelolaan_linen_kotor' => 'Audit Pengelolaan Linen Kotor',
            'audit_penempatan_pasien' => 'Audit Penempatan Pasien',
            'audit_kamar_jenazah' => 'Audit Kamar Jenazah',
            'audit_bundle_iadp' => 'Audit Bundle Iadp',
            'audit_bundle_ido' => 'Audit Bundle Ido',
            'audit_fasilitas_kebersihan_tangan' => 'Audit Fasilitas Kebersihan Tangan',
            'audit_fasilitas_apd' => 'Audit Fasilitas Apd',
            'audit_pembuangan_limbah_cair_infeksius' => 'Audit Pembuangan Limbah Cair Infeksius',
            'audit_sterilisasi_alat' => 'Audit Sterilisasi Alat',
            'penilaian_awal_medis_ralan_psikiatri' => 'Penilaian Awal Medis Ralan Psikiatri',
            'persetujuan_penolakan_tindakan' => 'Persetujuan Penolakan Tindakan',
            'audit_bundle_isk' => 'Audit Bundle Isk',
            'audit_bundle_plabsi' => 'Audit Bundle Plabsi',
            'audit_bundle_vap' => 'Audit Bundle Vap',
            'akun_host_to_host_bank_papua' => 'Akun Host To Host Bank Papua',
            'pembayaran_bank_papua' => 'Pembayaran Bank Papua',
            'penilaian_awal_medis_ralan_penyakit_dalam' => 'Penilaian Awal Medis Ralan Penyakit Dalam',
            'penilaian_awal_medis_ralan_mata' => 'Penilaian Awal Medis Ralan Mata',
            'penilaian_awal_medis_ralan_neurologi' => 'Penilaian Awal Medis Ralan Neurologi',
            'sirkulasi_obat6' => 'Sirkulasi Obat6',
            'penilaian_awal_medis_ralan_orthopedi' => 'Penilaian Awal Medis Ralan Orthopedi',
            'penilaian_awal_medis_ralan_bedah' => 'Penilaian Awal Medis Ralan Bedah',
            'integrasi_khanza_health_services' => 'Integrasi Khanza Health Services',
            'soap_ralan_tni' => 'Soap Ralan Tni',
            'soap_ranap_tni' => 'Soap Ranap Tni',
            'jumlah_pengunjung_ralan_tni' => 'Jumlah Pengunjung Ralan Tni',
            'laporan_penyakit_tni' => 'Laporan Penyakit Tni',
            'catatan_keperawatan_ranap' => 'Catatan Keperawatan Ranap',
            'master_rencana_keperawatan_gigi' => 'Master Rencana Keperawatan Gigi',
            'master_rencana_keperawatan_mata' => 'Master Rencana Keperawatan Mata',
            'master_rencana_keperawatan_igd' => 'Master Rencana Keperawatan Igd',
            'master_masalah_keperawatan_psikiatri' => 'Master Masalah Keperawatan Psikiatri',
            'master_rencana_keperawatan_psikiatri' => 'Master Rencana Keperawatan Psikiatri',
            'penilaian_awal_keperawatan_psikiatri' => 'Penilaian Awal Keperawatan Psikiatri',
            'pemantauan_pews_anak' => 'Pemantauan Pews Anak',
            'surat_pulang_atas_permintaan_sendiri' => 'Surat Pulang Atas Permintaan Sendiri',
            'template_hasil_radiologi' => 'Template Hasil Radiologi',
            'laporan_bulanan_irj' => 'Laporan Bulanan Irj',
            'template_pemeriksaan' => 'Template Pemeriksaan',
            'pemeriksaan_lab_mb' => 'Pemeriksaan Lab Mb',
            'ubah_petugas_lab_mb' => 'Ubah Petugas Lab Mb',
            'penilaian_pre_operasi' => 'Penilaian Pre Operasi',
            'penilaian_pre_anestesi' => 'Penilaian Pre Anestesi',
            'perencanaan_pemulangan' => 'Perencanaan Pemulangan',
            'penilaian_lanjutan_resiko_jatuh_dewasa' => 'Penilaian Lanjutan Resiko Jatuh Dewasa',
            'penilaian_lanjutan_resiko_jatuh_anak' => 'Penilaian Lanjutan Resiko Jatuh Anak',
            'penilaian_awal_medis_ralan_geriatri' => 'Penilaian Awal Medis Ralan Geriatri',
            'penilaian_tambahan_pasien_geriatri' => 'Penilaian Tambahan Pasien Geriatri',
            'skrining_nutrisi_dewasa' => 'Skrining Nutrisi Dewasa',
            'skrining_nutrisi_lansia' => 'Skrining Nutrisi Lansia',
            'hasil_pemeriksaan_usg' => 'Hasil Pemeriksaan Usg',
            'skrining_nutrisi_anak' => 'Skrining Nutrisi Anak',
            'akun_host_to_host_bank_jabar' => 'Akun Host To Host Bank Jabar',
            'pembayaran_bank_jabar' => 'Pembayaran Bank Jabar',
            'surat_pernyataan_pasien_umum' => 'Surat Pernyataan Pasien Umum',
            'konseling_farmasi' => 'Konseling Farmasi',
            'pelayanan_informasi_obat' => 'Pelayanan Informasi Obat',
            'jawaban_pio_apoteker' => 'Jawaban Pio Apoteker',
            'surat_persetujuan_umum' => 'Surat Persetujuan Umum',
            'transfer_pasien_antar_ruang' => 'Transfer Pasien Antar Ruang',
            'satu_sehat_referensi_dokter' => 'Satu Sehat Referensi Dokter',
            'satu_sehat_referensi_pasien' => 'Satu Sehat Referensi Pasien',
            'satu_sehat_mapping_departemen' => 'Satu Sehat Mapping Departemen',
            'satu_sehat_mapping_lokasi' => 'Satu Sehat Mapping Lokasi',
            'satu_sehat_kirim_encounter' => 'Satu Sehat Kirim Encounter',
            'catatan_cek_gds' => 'Catatan Cek Gds',
            'satu_sehat_kirim_condition' => 'Satu Sehat Kirim Condition',
            'checklist_pre_operasi' => 'Checklist Pre Operasi',
            'satu_sehat_kirim_observationttv' => 'Satu Sehat Kirim Observationttv',
            'signin_sebelum_anestesi' => 'Signin Sebelum Anestesi',
            'satu_sehat_kirim_procedure' => 'Satu Sehat Kirim Procedure',
            'operasi_per_bulan' => 'Operasi Per Bulan',
            'timeout_sebelum_insisi' => 'Timeout Sebelum Insisi',
            'signout_sebelum_menutup_luka' => 'Signout Sebelum Menutup Luka',
            'dapur_barang' => 'Dapur Barang',
            'dapur_opname' => 'Dapur Opname',
            'satu_sehat_mapping_vaksin' => 'Satu Sehat Mapping Vaksin',
            'dapur_suplier' => 'Dapur Suplier',
            'satu_sehat_kirim_Immunization' => 'Satu Sehat Kirim Immunization',
            'checklist_post_operasi' => 'Checklist Post Operasi',
            'dapur_pembelian' => 'Dapur Pembelian',
            'dapur_stok_keluar' => 'Dapur Stok Keluar',
            'dapur_riwayat_barang' => 'Dapur Riwayat Barang',
            'permintaan_dapur' => 'Permintaan Dapur',
            'rekonsiliasi_obat' => 'Rekonsiliasi Obat',
            'biaya_pengadaan_dapur' => 'Biaya Pengadaan Dapur',
            'rekap_pengadaan_dapur' => 'Rekap Pengadaan Dapur',
            'kesling_limbah_b3medis_cair' => 'Kesling Limbah B3medis Cair',
            'grafik_limbahb3cair_pertanggal' => 'Grafik Limbahb3cair Pertanggal',
            'grafik_limbahb3cair_perbulan' => 'Grafik Limbahb3cair Perbulan',
            'rekap_biaya_registrasi' => 'Rekap Biaya Registrasi',
            'konfirmasi_rekonsiliasi_obat' => 'Konfirmasi Rekonsiliasi Obat',
            'satu_sehat_kirim_clinicalimpression' => 'Satu Sehat Kirim Clinicalimpression',
            'penilaian_pasien_terminal' => 'Penilaian Pasien Terminal',
            'surat_persetujuan_rawat_inap' => 'Surat Persetujuan Rawat Inap',
            'monitoring_reaksi_tranfusi' => 'Monitoring Reaksi Tranfusi',
            'penilaian_korban_kekerasan' => 'Penilaian Korban Kekerasan',
            'penilaian_lanjutan_resiko_jatuh_lansia' => 'Penilaian Lanjutan Resiko Jatuh Lansia',
            'penilaian_pasien_penyakit_menular' => 'Penilaian Pasien Penyakit Menular',
            'mpp_skrining' => 'Mpp Skrining',
            'edukasi_pasien_keluarga_rj' => 'Edukasi Pasien Keluarga Rj',
            'pemantauan_pews_dewasa' => 'Pemantauan Pews Dewasa',
            'penilaian_tambahan_bunuh_diri' => 'Penilaian Tambahan Bunuh Diri',
            'bpjs_antrean_pertanggal' => 'Bpjs Antrean Pertanggal',
            'penilaian_tambahan_perilaku_kekerasan' => 'Penilaian Tambahan Perilaku Kekerasan',
            'penilaian_tambahan_beresiko_melarikan_diri' => 'Penilaian Tambahan Beresiko Melarikan Diri',
            'persetujuan_penundaan_pelayanan' => 'Persetujuan Penundaan Pelayanan',
            'sisa_diet_pasien' => 'Sisa Diet Pasien',
            'penilaian_awal_medis_ralan_bedah_mulut' => 'Penilaian Awal Medis Ralan Bedah Mulut',
            'penilaian_pasien_keracunan' => 'Penilaian Pasien Keracunan',
            'pemantauan_meows_obstetri' => 'Pemantauan Meows Obstetri',
            'catatan_adime_gizi' => 'Catatan Adime Gizi',
            'pengajuan_biaya' => 'Pengajuan Biaya',
            'penilaian_awal_keperawatan_ralan_geriatri' => 'Penilaian Awal Keperawatan Ralan Geriatri',
            'master_masalah_keperawatan_geriatri' => 'Master Masalah Keperawatan Geriatri',
            'master_rencana_keperawatan_geriatri' => 'Master Rencana Keperawatan Geriatri',
            'checklist_kriteria_masuk_hcu' => 'Checklist Kriteria Masuk Hcu',
            'checklist_kriteria_keluar_hcu' => 'Checklist Kriteria Keluar Hcu',
            'penilaian_risiko_dekubitus' => 'Penilaian Risiko Dekubitus',
            'master_menolak_anjuran_medis' => 'Master Menolak Anjuran Medis',
            'penolakan_anjuran_medis' => 'Penolakan Anjuran Medis',
            'laporan_tahunan_penolakan_anjuran_medis' => 'Laporan Tahunan Penolakan Anjuran Medis',
            'template_laporan_operasi' => 'Template Laporan Operasi',
            'hasil_tindakan_eswl' => 'Hasil Tindakan Eswl',
            'checklist_kriteria_masuk_icu' => 'Checklist Kriteria Masuk Icu',
            'checklist_kriteria_keluar_icu' => 'Checklist Kriteria Keluar Icu',
            'akses_dokter_lain_rawat_jalan' => 'Akses Dokter Lain Rawat Jalan',
            'follow_up_dbd' => 'Follow Up Dbd',
            'penilaian_risiko_jatuh_neonatus' => 'Penilaian Risiko Jatuh Neonatus',
            'persetujuan_pengajuan_biaya' => 'Persetujuan Pengajuan Biaya',
            'pemeriksaan_fisik_ralan_per_penyakit' => 'Pemeriksaan Fisik Ralan Per Penyakit',
            'penilaian_lanjutan_resiko_jatuh_geriatri' => 'Penilaian Lanjutan Resiko Jatuh Geriatri',
            'pemantauan_ews_neonatus' => 'Pemantauan Ews Neonatus',
            'validasi_persetujuan_pengajuan_biaya' => 'Validasi Persetujuan Pengajuan Biaya',
            'riwayat_perawatan_icare_bpjs' => 'Riwayat Perawatan Icare Bpjs',
            'rekap_pengajuan_biaya' => 'Rekap Pengajuan Biaya',
            'penilaian_awal_medis_ralan_kulit_kelamin' => 'Penilaian Awal Medis Ralan Kulit Kelamin',
            'akun_host_to_host_bank_mandiri' => 'Akun Host To Host Bank Mandiri',
            'penilaian_medis_hemodialisa' => 'Penilaian Medis Hemodialisa',
            'penilaian_level_kecemasan_ranap_anak' => 'Penilaian Level Kecemasan Ranap Anak',
            'penilaian_lanjutan_resiko_jatuh_psikiatri' => 'Penilaian Lanjutan Resiko Jatuh Psikiatri',
            'penilaian_lanjutan_skrining_fungsional' => 'Penilaian Lanjutan Skrining Fungsional',
            'penilaian_medis_ralan_rehab_medik' => 'Penilaian Medis Ralan Rehab Medik',
            'laporan_anestesi' => 'Laporan Anestesi',
            'template_persetujuan_penolakan_tindakan' => 'Template Persetujuan Penolakan Tindakan',
            'penilaian_medis_ralan_gawat_darurat_psikiatri' => 'Penilaian Medis Ralan Gawat Darurat Psikiatri',
            'bpjs_referensi_setting_apotek' => 'Bpjs Referensi Setting Apotek',
            'bpjs_referensi_obat_apotek' => 'Bpjs Referensi Obat Apotek',
            'bpjs_mapping_obat_apotek' => 'Bpjs Mapping Obat Apotek',
            'pembayaran_bank_mandiri' => 'Pembayaran Bank Mandiri',
            'penilaian_ulang_nyeri' => 'Penilaian Ulang Nyeri',
            'penilaian_terapi_wicara' => 'Penilaian Terapi Wicara',
            'bpjs_obat_23hari_apotek' => 'Bpjs Obat 23hari Apotek',
            'pengkajian_restrain' => 'Pengkajian Restrain',
            'bpjs_kunjungan_sep_apotek' => 'Bpjs Kunjungan Sep Apotek',
            'bpjs_monitoring_klaim_apotek' => 'Bpjs Monitoring Klaim Apotek',
            'bpjs_daftar_pelayanan_obat_apotek' => 'Bpjs Daftar Pelayanan Obat Apotek',
            'penilaian_awal_medis_ralan_paru' => 'Penilaian Awal Medis Ralan Paru',
            'catatan_keperawatan_ralan' => 'Catatan Keperawatan Ralan',
            'catatan_persalinan' => 'Catatan Persalinan',
            'skor_aldrette_pasca_anestesi' => 'Skor Aldrette Pasca Anestesi',
            'skor_steward_pasca_anestesi' => 'Skor Steward Pasca Anestesi',
            'skor_bromage_pasca_anestesi' => 'Skor Bromage Pasca Anestesi',
            'penilaian_pre_induksi' => 'Penilaian Pre Induksi',
            'hasil_usg_urologi' => 'Hasil Usg Urologi',
            'hasil_usg_gynecologi' => 'Hasil Usg Gynecologi',
            'hasil_pemeriksaan_ekg' => 'Hasil Pemeriksaan Ekg',
            'hapus_edit_sep_bpjs' => 'Hapus Edit Sep Bpjs',
            'satu_sehat_kirim_diet' => 'Satu Sehat Kirim Diet',
            'satu_sehat_mapping_obat' => 'Satu Sehat Mapping Obat',
            'dapur_ringkasan_pembelian' => 'Dapur Ringkasan Pembelian',
            'satu_sehat_kirim_medication' => 'Satu Sehat Kirim Medication',
            'satu_sehat_kirim_medicationrequest' => 'Satu Sehat Kirim Medicationrequest',
            'penatalaksanaan_terapi_okupasi' => 'Penatalaksanaan Terapi Okupasi',
            'satu_sehat_kirim_medicationdispense' => 'Satu Sehat Kirim Medicationdispense',
            'hasil_usg_neonatus' => 'Hasil Usg Neonatus',
            'hasil_endoskopi_faring_laring' => 'Hasil Endoskopi Faring Laring',
            'satu_sehat_mapping_radiologi' => 'Satu Sehat Mapping Radiologi',
            'satu_sehat_kirim_servicerequest_radiologi' => 'Satu Sehat Kirim Servicerequest Radiologi',
            'hasil_endoskopi_hidung' => 'Hasil Endoskopi Hidung',
            'satu_sehat_kirim_specimen_radiologi' => 'Satu Sehat Kirim Specimen Radiologi',
            'master_masalah_keperawatan_neonatus' => 'Master Masalah Keperawatan Neonatus',
            'master_rencana_keperawatan_neonatus' => 'Master Rencana Keperawatan Neonatus',
            'penilaian_awal_keperawatan_ranap_neonatus' => 'Penilaian Awal Keperawatan Ranap Neonatus',
            'satu_sehat_kirim_observation_radiologi' => 'Satu Sehat Kirim Observation Radiologi',
            'satu_sehat_kirim_diagnosticreport_radiologi' => 'Satu Sehat Kirim Diagnosticreport Radiologi',
            'hasil_endoskopi_telinga' => 'Hasil Endoskopi Telinga',
            'satu_sehat_mapping_lab' => 'Satu Sehat Mapping Lab',
            'satu_sehat_kirim_servicerequest_lab' => 'Satu Sehat Kirim Servicerequest Lab',
            'satu_sehat_kirim_servicerequest_labmb' => 'Satu Sehat Kirim Servicerequest Labmb',
            'satu_sehat_kirim_specimen_lab' => 'Satu Sehat Kirim Specimen Lab',
            'satu_sehat_kirim_specimen_labmb' => 'Satu Sehat Kirim Specimen Labmb',
            'satu_sehat_kirim_observation_lab' => 'Satu Sehat Kirim Observation Lab',
            'satu_sehat_kirim_observation_labmb' => 'Satu Sehat Kirim Observation Labmb',
            'satu_sehat_kirim_diagnosticreport_lab' => 'Satu Sehat Kirim Diagnosticreport Lab',
            'satu_sehat_kirim_diagnosticreport_labmb' => 'Satu Sehat Kirim Diagnosticreport Labmb',
            'kepatuhan_kelengkapan_keselamatan_bedah' => 'Kepatuhan Kelengkapan Keselamatan Bedah',
            'nilai_piutang_perjenis_bayar_per_bulan' => 'Nilai Piutang Perjenis Bayar Per Bulan',
            'ringkasan_piutang_jenis_bayar' => 'Ringkasan Piutang Jenis Bayar',
            'penilaian_pasien_imunitas_rendah' => 'Penilaian Pasien Imunitas Rendah',
            'balance_cairan' => 'Balance Cairan',
            'catatan_observasi_chbp' => 'Catatan Observasi Chbp',
            'catatan_observasi_induksi_persalinan' => 'Catatan Observasi Induksi Persalinan',
            'skp_kategori_penilaian' => 'Skp Kategori Penilaian',
            'skp_kriteria_penilaian' => 'Skp Kriteria Penilaian',
            'skp_penilaian' => 'Skp Penilaian',
            'referensi_poli_mobilejknfktp' => 'Referensi Poli Mobilejknfktp',
            'referensi_dokter_mobilejknfktp' => 'Referensi Dokter Mobilejknfktp',
            'skp_rekapitulasi_penilaian' => 'Skp Rekapitulasi Penilaian',
            'pembayaran_pihak_ke3_bankmandiri' => 'Pembayaran Pihak Ke3 Bankmandiri',
            'metode_pembayaran_bankmandiri' => 'Metode Pembayaran Bankmandiri',
            'bank_tujuan_transfer_bankmandiri' => 'Bank Tujuan Transfer Bankmandiri',
            'kodetransaksi_tujuan_transfer_bankmandiri' => 'Kodetransaksi Tujuan Transfer Bankmandiri',
            'konsultasi_medik' => 'Konsultasi Medik',
            'jawaban_konsultasi_medik' => 'Jawaban Konsultasi Medik',
            'pcare_cek_alergi' => 'Pcare Cek Alergi',
            'pcare_cek_prognosa' => 'Pcare Cek Prognosa',
            'data_sasaran_usiaproduktif' => 'Data Sasaran Usiaproduktif',
            'data_sasaran_usialansia' => 'Data Sasaran Usialansia',
            'skrining_perilaku_merokok_sekolah_remaja' => 'Skrining Perilaku Merokok Sekolah Remaja',
            'skrining_kekerasan_pada_perempuan' => 'Skrining Kekerasan Pada Perempuan',
            'skrining_obesitas' => 'Skrining Obesitas',
            'skrining_risiko_kanker_payudara' => 'Skrining Risiko Kanker Payudara',
            'skrining_risiko_kanker_paru' => 'Skrining Risiko Kanker Paru',
            'skrining_tbc' => 'Skrining Tbc',
            'skrining_kesehatan_gigi_mulut_remaja' => 'Skrining Kesehatan Gigi Mulut Remaja',
            'penilaian_awal_keperawatan_ranap_bayi' => 'Penilaian Awal Keperawatan Ranap Bayi',
            'booking_mcu_perusahaan' => 'Booking Mcu Perusahaan',
            'catatan_observasi_restrain_nonfarma' => 'Catatan Observasi Restrain Nonfarma',
            'catatan_observasi_ventilator' => 'Catatan Observasi Ventilator',
            'catatan_anestesi_sedasi' => 'Catatan Anestesi Sedasi',
            'skrining_puma' => 'Skrining Puma',
            'satu_sehat_kirim_careplan' => 'Satu Sehat Kirim Careplan',
            'satu_sehat_kirim_medicationstatement' => 'Satu Sehat Kirim Medicationstatement',
            'skrining_adiksi_nikotin' => 'Skrining Adiksi Nikotin',
            'skrining_thalassemia' => 'Skrining Thalassemia',
            'skrining_instrumen_sdq' => 'Skrining Instrumen Sdq',
            'skrining_instrumen_srq' => 'Skrining Instrumen Srq',
            'checklist_pemberian_fibrinolitik' => 'Checklist Pemberian Fibrinolitik',
            'skrining_kanker_kolorektal' => 'Skrining Kanker Kolorektal',
            'dapur_pemesanan' => 'Dapur Pemesanan',
            'bayar_pesan_dapur' => 'Bayar Pesan Dapur',
            'hutang_dapur' => 'Hutang Dapur',
            'titip_faktur_dapur' => 'Titip Faktur Dapur',
            'validasi_tagihan_dapur' => 'Validasi Tagihan Dapur',
            'surat_pemesanan_dapur' => 'Surat Pemesanan Dapur',
            'pengajuan_barang_dapur' => 'Pengajuan Barang Dapur',
            'dapur_returbeli' => 'Dapur Returbeli',
            'hibah_dapur' => 'Hibah Dapur',
            'ringkasan_penerimaan_dapur' => 'Ringkasan Penerimaan Dapur',
            'ringkasan_pengajuan_dapur' => 'Ringkasan Pengajuan Dapur',
            'ringkasan_pemesanan_dapur' => 'Ringkasan Pemesanan Dapur',
            'ringkasan_returbeli_dapur' => 'Ringkasan Returbeli Dapur',
            'ringkasan_stokkeluar_dapur' => 'Ringkasan Stokkeluar Dapur',
            'dapur_stokkeluar_pertanggal' => 'Dapur Stokkeluar Pertanggal',
            'sirkulasi_dapur' => 'Sirkulasi Dapur',
            'sirkulasi_dapur2' => 'Sirkulasi Dapur2',
            'verifikasi_penerimaan_dapur' => 'Verifikasi Penerimaan Dapur',
            'nilai_penerimaan_vendor_dapur_perbulan' => 'Nilai Penerimaan Vendor Dapur Perbulan',
            'ringkasan_hutang_vendor_dapur' => 'Ringkasan Hutang Vendor Dapur',
            'penilaian_psikologi_klinis' => 'Penilaian Psikologi Klinis',
        ];
    }
}
