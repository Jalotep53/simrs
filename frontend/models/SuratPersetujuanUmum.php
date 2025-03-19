<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_persetujuan_umum".
 *
 * @property string $no_surat
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $pengobatan_kepada
 * @property string $nilai_kepercayaan
 * @property string $nama_pj
 * @property string $umur_pj
 * @property string $no_ktppj
 * @property string $jkpj
 * @property string $bertindak_atas
 * @property string $no_telp
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 * @property SuratPersetujuanUmumPembuatPernyataan $suratPersetujuanUmumPembuatPernyataan
 */
class SuratPersetujuanUmum extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_persetujuan_umum';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'no_rawat', 'tanggal', 'pengobatan_kepada', 'nilai_kepercayaan', 'nama_pj', 'umur_pj', 'no_ktppj', 'jkpj', 'bertindak_atas', 'no_telp', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['pengobatan_kepada', 'jkpj', 'bertindak_atas'], 'string'],
            [['no_surat', 'no_ktppj', 'nip'], 'string', 'max' => 20],
            [['no_rawat'], 'string', 'max' => 17],
            [['nilai_kepercayaan', 'nama_pj'], 'string', 'max' => 50],
            [['umur_pj'], 'string', 'max' => 7],
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
            'pengobatan_kepada' => 'Pengobatan Kepada',
            'nilai_kepercayaan' => 'Nilai Kepercayaan',
            'nama_pj' => 'Nama Pj',
            'umur_pj' => 'Umur Pj',
            'no_ktppj' => 'No Ktppj',
            'jkpj' => 'Jkpj',
            'bertindak_atas' => 'Bertindak Atas',
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
     * Gets query for [[SuratPersetujuanUmumPembuatPernyataan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPersetujuanUmumPembuatPernyataan()
    {
        return $this->hasOne(SuratPersetujuanUmumPembuatPernyataan::class, ['no_surat' => 'no_surat']);
    }
}
