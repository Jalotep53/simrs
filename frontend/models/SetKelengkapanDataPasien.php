<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_kelengkapan_data_pasien".
 *
 * @property string|null $no_ktp
 * @property int|null $p_no_ktp
 * @property string|null $tmp_lahir
 * @property int|null $p_tmp_lahir
 * @property string|null $nm_ibu
 * @property int|null $p_nm_ibu
 * @property string|null $alamat
 * @property int|null $p_alamat
 * @property string|null $pekerjaan
 * @property int|null $p_pekerjaan
 * @property string|null $no_tlp
 * @property int|null $p_no_tlp
 * @property string|null $umur
 * @property int|null $p_umur
 * @property string|null $namakeluarga
 * @property int|null $p_namakeluarga
 * @property string|null $no_peserta
 * @property int|null $p_no_peserta
 * @property string|null $kelurahan
 * @property int|null $p_kelurahan
 * @property string|null $kecamatan
 * @property int|null $p_kecamatan
 * @property string|null $kabupaten
 * @property int|null $p_kabupaten
 * @property string|null $pekerjaanpj
 * @property int|null $p_pekerjaanpj
 * @property string|null $alamatpj
 * @property int|null $p_alamatpj
 * @property string|null $kelurahanpj
 * @property int|null $p_kelurahanpj
 * @property string|null $kecamatanpj
 * @property int|null $p_kecamatanpj
 * @property string|null $kabupatenpj
 * @property int|null $p_kabupatenpj
 * @property string $propinsi
 * @property int $p_propinsi
 * @property string $propinsipj
 * @property int $p_propinsipj
 */
class SetKelengkapanDataPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_kelengkapan_data_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_ktp', 'tmp_lahir', 'nm_ibu', 'alamat', 'pekerjaan', 'no_tlp', 'umur', 'namakeluarga', 'no_peserta', 'kelurahan', 'kecamatan', 'kabupaten', 'pekerjaanpj', 'alamatpj', 'kelurahanpj', 'kecamatanpj', 'kabupatenpj', 'propinsi', 'propinsipj'], 'string'],
            [['p_no_ktp', 'p_tmp_lahir', 'p_nm_ibu', 'p_alamat', 'p_pekerjaan', 'p_no_tlp', 'p_umur', 'p_namakeluarga', 'p_no_peserta', 'p_kelurahan', 'p_kecamatan', 'p_kabupaten', 'p_pekerjaanpj', 'p_alamatpj', 'p_kelurahanpj', 'p_kecamatanpj', 'p_kabupatenpj', 'p_propinsi', 'p_propinsipj'], 'integer'],
            [['propinsi', 'p_propinsi', 'propinsipj', 'p_propinsipj'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_ktp' => 'No Ktp',
            'p_no_ktp' => 'P No Ktp',
            'tmp_lahir' => 'Tmp Lahir',
            'p_tmp_lahir' => 'P Tmp Lahir',
            'nm_ibu' => 'Nm Ibu',
            'p_nm_ibu' => 'P Nm Ibu',
            'alamat' => 'Alamat',
            'p_alamat' => 'P Alamat',
            'pekerjaan' => 'Pekerjaan',
            'p_pekerjaan' => 'P Pekerjaan',
            'no_tlp' => 'No Tlp',
            'p_no_tlp' => 'P No Tlp',
            'umur' => 'Umur',
            'p_umur' => 'P Umur',
            'namakeluarga' => 'Namakeluarga',
            'p_namakeluarga' => 'P Namakeluarga',
            'no_peserta' => 'No Peserta',
            'p_no_peserta' => 'P No Peserta',
            'kelurahan' => 'Kelurahan',
            'p_kelurahan' => 'P Kelurahan',
            'kecamatan' => 'Kecamatan',
            'p_kecamatan' => 'P Kecamatan',
            'kabupaten' => 'Kabupaten',
            'p_kabupaten' => 'P Kabupaten',
            'pekerjaanpj' => 'Pekerjaanpj',
            'p_pekerjaanpj' => 'P Pekerjaanpj',
            'alamatpj' => 'Alamatpj',
            'p_alamatpj' => 'P Alamatpj',
            'kelurahanpj' => 'Kelurahanpj',
            'p_kelurahanpj' => 'P Kelurahanpj',
            'kecamatanpj' => 'Kecamatanpj',
            'p_kecamatanpj' => 'P Kecamatanpj',
            'kabupatenpj' => 'Kabupatenpj',
            'p_kabupatenpj' => 'P Kabupatenpj',
            'propinsi' => 'Propinsi',
            'p_propinsi' => 'P Propinsi',
            'propinsipj' => 'Propinsipj',
            'p_propinsipj' => 'P Propinsipj',
        ];
    }
}
