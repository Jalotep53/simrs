<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_pernyataan_pasien_umum".
 *
 * @property string $no_surat
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $nama_pj
 * @property string $no_ktppj
 * @property string $tempat_lahirpj
 * @property string $lahirpj
 * @property string $jkpj
 * @property string $alamatpj
 * @property string $hubungan
 * @property string $no_telp
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 * @property SuratPernyataanPasienUmumPembuatPernyataan $suratPernyataanPasienUmumPembuatPernyataan
 */
class SuratPernyataanPasienUmum extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_pernyataan_pasien_umum';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'no_rawat', 'tanggal', 'nama_pj', 'no_ktppj', 'tempat_lahirpj', 'lahirpj', 'jkpj', 'alamatpj', 'hubungan', 'no_telp', 'nip'], 'required'],
            [['tanggal', 'lahirpj'], 'safe'],
            [['jkpj', 'hubungan'], 'string'],
            [['no_surat', 'no_ktppj', 'tempat_lahirpj', 'nip'], 'string', 'max' => 20],
            [['no_rawat'], 'string', 'max' => 17],
            [['nama_pj'], 'string', 'max' => 50],
            [['alamatpj'], 'string', 'max' => 100],
            [['no_telp'], 'string', 'max' => 30],
            [['no_surat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
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
            'tanggal' => 'Tanggal',
            'nama_pj' => 'Nama Pj',
            'no_ktppj' => 'No Ktppj',
            'tempat_lahirpj' => 'Tempat Lahirpj',
            'lahirpj' => 'Lahirpj',
            'jkpj' => 'Jkpj',
            'alamatpj' => 'Alamatpj',
            'hubungan' => 'Hubungan',
            'no_telp' => 'No Telp',
            'nip' => 'Nip',
        ];
    }

    /**
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip']);
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

    /**
     * Gets query for [[SuratPernyataanPasienUmumPembuatPernyataan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPernyataanPasienUmumPembuatPernyataan()
    {
        return $this->hasOne(SuratPernyataanPasienUmumPembuatPernyataan::class, ['no_surat' => 'no_surat']);
    }
}
