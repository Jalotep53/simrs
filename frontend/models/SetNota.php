<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_nota".
 *
 * @property string $notaralan
 * @property string $kwitansiralan
 * @property string $nota1ranap
 * @property string $nota2ranap
 * @property string $kwitansiranap
 * @property string $notaapotek
 * @property string $notalabrad
 * @property string $notatoko
 * @property string $cetaknotasimpanralan
 * @property string $cetaknotasimpanranap
 * @property string $rinciandokterralan
 * @property string $rinciandokterranap
 * @property string $centangdokterralan
 * @property string $centangdokterranap
 * @property string $tampilkan_administrasi_di_billingranap
 * @property string|null $rincianoperasi
 * @property string|null $tampilkan_ppnobat_ralan
 * @property string|null $tampilkan_ppnobat_ranap
 * @property string|null $tampilkan_tombol_nota_ralan
 * @property string|null $tampilkan_tombol_nota_ranap
 * @property string|null $verifikasi_penjualan_di_kasir
 * @property string|null $verifikasi_penyerahan_darah_di_kasir
 * @property string|null $cetaknotasimpanpenjualan
 * @property string|null $tampilkan_tombol_nota_penjualan
 * @property string|null $centangobatralan
 * @property string|null $centangobatranap
 * @property string $cetaknotasimpantoko
 * @property string $tampilkan_tombol_nota_toko
 */
class SetNota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_nota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['notaralan', 'kwitansiralan', 'nota1ranap', 'nota2ranap', 'kwitansiranap', 'notaapotek', 'notalabrad', 'notatoko', 'cetaknotasimpanralan', 'cetaknotasimpanranap', 'rinciandokterralan', 'rinciandokterranap', 'centangdokterralan', 'centangdokterranap', 'tampilkan_administrasi_di_billingranap', 'cetaknotasimpantoko', 'tampilkan_tombol_nota_toko'], 'required'],
            [['cetaknotasimpanralan', 'cetaknotasimpanranap', 'rinciandokterralan', 'rinciandokterranap', 'centangdokterralan', 'centangdokterranap', 'tampilkan_administrasi_di_billingranap', 'rincianoperasi', 'tampilkan_ppnobat_ralan', 'tampilkan_ppnobat_ranap', 'tampilkan_tombol_nota_ralan', 'tampilkan_tombol_nota_ranap', 'verifikasi_penjualan_di_kasir', 'verifikasi_penyerahan_darah_di_kasir', 'cetaknotasimpanpenjualan', 'tampilkan_tombol_nota_penjualan', 'centangobatralan', 'centangobatranap', 'cetaknotasimpantoko', 'tampilkan_tombol_nota_toko'], 'string'],
            [['notaralan', 'kwitansiralan', 'nota1ranap', 'nota2ranap', 'kwitansiranap', 'notaapotek', 'notalabrad', 'notatoko'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'notaralan' => 'Notaralan',
            'kwitansiralan' => 'Kwitansiralan',
            'nota1ranap' => 'Nota1ranap',
            'nota2ranap' => 'Nota2ranap',
            'kwitansiranap' => 'Kwitansiranap',
            'notaapotek' => 'Notaapotek',
            'notalabrad' => 'Notalabrad',
            'notatoko' => 'Notatoko',
            'cetaknotasimpanralan' => 'Cetaknotasimpanralan',
            'cetaknotasimpanranap' => 'Cetaknotasimpanranap',
            'rinciandokterralan' => 'Rinciandokterralan',
            'rinciandokterranap' => 'Rinciandokterranap',
            'centangdokterralan' => 'Centangdokterralan',
            'centangdokterranap' => 'Centangdokterranap',
            'tampilkan_administrasi_di_billingranap' => 'Tampilkan Administrasi Di Billingranap',
            'rincianoperasi' => 'Rincianoperasi',
            'tampilkan_ppnobat_ralan' => 'Tampilkan Ppnobat Ralan',
            'tampilkan_ppnobat_ranap' => 'Tampilkan Ppnobat Ranap',
            'tampilkan_tombol_nota_ralan' => 'Tampilkan Tombol Nota Ralan',
            'tampilkan_tombol_nota_ranap' => 'Tampilkan Tombol Nota Ranap',
            'verifikasi_penjualan_di_kasir' => 'Verifikasi Penjualan Di Kasir',
            'verifikasi_penyerahan_darah_di_kasir' => 'Verifikasi Penyerahan Darah Di Kasir',
            'cetaknotasimpanpenjualan' => 'Cetaknotasimpanpenjualan',
            'tampilkan_tombol_nota_penjualan' => 'Tampilkan Tombol Nota Penjualan',
            'centangobatralan' => 'Centangobatralan',
            'centangobatranap' => 'Centangobatranap',
            'cetaknotasimpantoko' => 'Cetaknotasimpantoko',
            'tampilkan_tombol_nota_toko' => 'Tampilkan Tombol Nota Toko',
        ];
    }
}
