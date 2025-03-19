<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_persetujuan_rawat_inap".
 *
 * @property string $no_surat
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $nama_pj
 * @property string $no_ktppj
 * @property string|null $pendidikan_pj
 * @property string $alamatpj
 * @property string $no_telppj
 * @property string|null $ruang
 * @property string|null $kelas
 * @property string $hubungan
 * @property string|null $hak_kelas
 * @property string|null $nama_alamat_keluarga_terdekat
 * @property string|null $bayar_secara
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 * @property SuratPersetujuanRawatInapPembuatPernyataan $suratPersetujuanRawatInapPembuatPernyataan
 */
class SuratPersetujuanRawatInap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_persetujuan_rawat_inap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'no_rawat', 'tanggal', 'nama_pj', 'no_ktppj', 'alamatpj', 'no_telppj', 'hubungan', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['pendidikan_pj', 'kelas', 'hubungan', 'hak_kelas'], 'string'],
            [['no_surat', 'no_ktppj', 'nip'], 'string', 'max' => 20],
            [['no_rawat'], 'string', 'max' => 17],
            [['nama_pj'], 'string', 'max' => 50],
            [['alamatpj'], 'string', 'max' => 100],
            [['no_telppj', 'bayar_secara'], 'string', 'max' => 30],
            [['ruang'], 'string', 'max' => 40],
            [['nama_alamat_keluarga_terdekat'], 'string', 'max' => 130],
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
            'pendidikan_pj' => 'Pendidikan Pj',
            'alamatpj' => 'Alamatpj',
            'no_telppj' => 'No Telppj',
            'ruang' => 'Ruang',
            'kelas' => 'Kelas',
            'hubungan' => 'Hubungan',
            'hak_kelas' => 'Hak Kelas',
            'nama_alamat_keluarga_terdekat' => 'Nama Alamat Keluarga Terdekat',
            'bayar_secara' => 'Bayar Secara',
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
     * Gets query for [[SuratPersetujuanRawatInapPembuatPernyataan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPersetujuanRawatInapPembuatPernyataan()
    {
        return $this->hasOne(SuratPersetujuanRawatInapPembuatPernyataan::class, ['no_surat' => 'no_surat']);
    }
}
