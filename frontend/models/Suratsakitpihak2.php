<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "suratsakitpihak2".
 *
 * @property string $no_surat
 * @property string|null $no_rawat
 * @property string|null $tanggalawal
 * @property string|null $tanggalakhir
 * @property string|null $lamasakit
 * @property string $nama2
 * @property string $tgl_lahir
 * @property string $umur
 * @property string $jk
 * @property string $alamat
 * @property string $hubungan
 * @property string $pekerjaan
 * @property string $instansi
 *
 * @property RegPeriksa $noRawat
 */
class Suratsakitpihak2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'suratsakitpihak2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'nama2', 'tgl_lahir', 'umur', 'jk', 'alamat', 'hubungan', 'pekerjaan', 'instansi'], 'required'],
            [['tanggalawal', 'tanggalakhir', 'tgl_lahir'], 'safe'],
            [['jk', 'hubungan', 'pekerjaan'], 'string'],
            [['no_surat', 'no_rawat'], 'string', 'max' => 17],
            [['lamasakit', 'umur'], 'string', 'max' => 20],
            [['nama2', 'instansi'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 200],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_surat' => 'No Surat',
            'no_rawat' => 'No Rawat',
            'tanggalawal' => 'Tanggalawal',
            'tanggalakhir' => 'Tanggalakhir',
            'lamasakit' => 'Lamasakit',
            'nama2' => 'Nama2',
            'tgl_lahir' => 'Tgl Lahir',
            'umur' => 'Umur',
            'jk' => 'Jk',
            'alamat' => 'Alamat',
            'hubungan' => 'Hubungan',
            'pekerjaan' => 'Pekerjaan',
            'instansi' => 'Instansi',
        ];
    }

    /**
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
