<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "booking_mcu_perusahaan_pasien_baru".
 *
 * @property string $no_pengajuan
 * @property string|null $nm_pasien
 * @property string|null $no_ktp
 * @property string|null $jk
 * @property string|null $tmp_lahir
 * @property string|null $tgl_lahir
 * @property string $nm_ibu
 * @property string|null $alamat
 * @property string $kelurahan
 * @property string $kecamatan
 * @property string $kabupaten
 * @property string $propinsi
 * @property string|null $gol_darah
 * @property string|null $pekerjaan
 * @property string|null $stts_nikah
 * @property string|null $agama
 * @property string|null $tgl_mcu
 * @property string|null $no_tlp
 * @property string $umur
 * @property string $pnd
 * @property string|null $keluarga
 * @property string $namakeluarga
 * @property string $pekerjaanpj
 * @property string $alamatpj
 * @property string $kelurahanpj
 * @property string $kecamatanpj
 * @property string $kabupatenpj
 * @property string $propinsipj
 * @property string $perusahaan_pasien
 * @property string $suku_bangsa
 * @property string $bahasa_pasien
 * @property string $cacat_fisik
 * @property string $email
 * @property string $nip
 * @property string|null $status
 *
 * @property PerusahaanPasien $perusahaanPasien
 */
class BookingMcuPerusahaanPasienBaru extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'booking_mcu_perusahaan_pasien_baru';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pengajuan', 'nm_ibu', 'kelurahan', 'kecamatan', 'kabupaten', 'propinsi', 'umur', 'pnd', 'namakeluarga', 'pekerjaanpj', 'alamatpj', 'kelurahanpj', 'kecamatanpj', 'kabupatenpj', 'propinsipj', 'perusahaan_pasien', 'suku_bangsa', 'bahasa_pasien', 'cacat_fisik', 'email', 'nip'], 'required'],
            [['jk', 'gol_darah', 'stts_nikah', 'pnd', 'keluarga', 'status'], 'string'],
            [['tgl_lahir', 'tgl_mcu'], 'safe'],
            [['no_pengajuan', 'tmp_lahir'], 'string', 'max' => 15],
            [['nm_pasien', 'nm_ibu', 'no_tlp'], 'string', 'max' => 40],
            [['no_ktp'], 'string', 'max' => 20],
            [['alamat'], 'string', 'max' => 200],
            [['kelurahan', 'kecamatan', 'kabupaten', 'propinsi', 'pekerjaan', 'kelurahanpj', 'kecamatanpj', 'kabupatenpj'], 'string', 'max' => 60],
            [['agama'], 'string', 'max' => 12],
            [['umur', 'propinsipj', 'suku_bangsa', 'bahasa_pasien', 'cacat_fisik', 'nip'], 'string', 'max' => 30],
            [['namakeluarga', 'email'], 'string', 'max' => 50],
            [['pekerjaanpj'], 'string', 'max' => 35],
            [['alamatpj'], 'string', 'max' => 100],
            [['perusahaan_pasien'], 'string', 'max' => 8],
            [['no_pengajuan'], 'unique'],
            [['perusahaan_pasien'], 'exist', 'skipOnError' => true, 'targetClass' => PerusahaanPasien::class, 'targetAttribute' => ['perusahaan_pasien' => 'kode_perusahaan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_pengajuan' => 'No Pengajuan',
            'nm_pasien' => 'Nm Pasien',
            'no_ktp' => 'No Ktp',
            'jk' => 'Jk',
            'tmp_lahir' => 'Tmp Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'nm_ibu' => 'Nm Ibu',
            'alamat' => 'Alamat',
            'kelurahan' => 'Kelurahan',
            'kecamatan' => 'Kecamatan',
            'kabupaten' => 'Kabupaten',
            'propinsi' => 'Propinsi',
            'gol_darah' => 'Gol Darah',
            'pekerjaan' => 'Pekerjaan',
            'stts_nikah' => 'Stts Nikah',
            'agama' => 'Agama',
            'tgl_mcu' => 'Tgl Mcu',
            'no_tlp' => 'No Tlp',
            'umur' => 'Umur',
            'pnd' => 'Pnd',
            'keluarga' => 'Keluarga',
            'namakeluarga' => 'Namakeluarga',
            'pekerjaanpj' => 'Pekerjaanpj',
            'alamatpj' => 'Alamatpj',
            'kelurahanpj' => 'Kelurahanpj',
            'kecamatanpj' => 'Kecamatanpj',
            'kabupatenpj' => 'Kabupatenpj',
            'propinsipj' => 'Propinsipj',
            'perusahaan_pasien' => 'Perusahaan Pasien',
            'suku_bangsa' => 'Suku Bangsa',
            'bahasa_pasien' => 'Bahasa Pasien',
            'cacat_fisik' => 'Cacat Fisik',
            'email' => 'Email',
            'nip' => 'Nip',
            'status' => 'Status',
        ];
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
}
