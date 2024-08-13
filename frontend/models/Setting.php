<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "setting".
 *
 * @property string $nama_instansi
 * @property string|null $alamat_instansi
 * @property string|null $kabupaten
 * @property string|null $propinsi
 * @property string $kontak
 * @property string $email
 * @property string $aktifkan
 * @property string|null $kode_ppk
 * @property string|null $kode_ppkinhealth
 * @property string|null $kode_ppkkemenkes
 * @property resource|null $wallpaper
 * @property resource $logo
 */
class Setting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function model()
    {
        return parent::model('Setting');
    }
      public static function getData(){
            return $result = Setting::model()->find();
        }
         
    public static function tableName()
    {
        return 'setting';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_instansi', 'kontak', 'email', 'aktifkan', 'logo'], 'required'],
            [['aktifkan', 'wallpaper', 'logo'], 'string'],
            [['nama_instansi'], 'string', 'max' => 60],
            [['alamat_instansi'], 'string', 'max' => 150],
            [['kabupaten', 'propinsi'], 'string', 'max' => 30],
            [['kontak', 'email'], 'string', 'max' => 50],
            [['kode_ppk', 'kode_ppkinhealth', 'kode_ppkkemenkes'], 'string', 'max' => 15],
            [['nama_instansi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nama_instansi' => 'Nama Instansi',
            'alamat_instansi' => 'Alamat Instansi',
            'kabupaten' => 'Kabupaten',
            'propinsi' => 'Propinsi',
            'kontak' => 'Kontak',
            'email' => 'Email',
            'aktifkan' => 'Aktifkan',
            'kode_ppk' => 'Kode Ppk',
            'kode_ppkinhealth' => 'Kode Ppkinhealth',
            'kode_ppkkemenkes' => 'Kode Ppkkemenkes',
            'wallpaper' => 'Wallpaper',
            'logo' => 'Logo',
        ];
    }
}
