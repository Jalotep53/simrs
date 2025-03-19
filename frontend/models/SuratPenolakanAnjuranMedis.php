<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_penolakan_anjuran_medis".
 *
 * @property string $no_surat
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $hubungan
 * @property string $nama_pj
 * @property string $umur_pj
 * @property string $no_ktppj
 * @property string $jkpj
 * @property string $no_telp
 * @property string|null $kode_penolakan
 * @property string|null $alasan_penolakan
 * @property string|null $informasi_risiko_penolakan
 * @property string $nik
 *
 * @property MasterMenolakAnjuranMedis $kodePenolakan
 * @property Pegawai $nik0
 * @property RegPeriksa $noRawat
 * @property SuratPenolakanAnjuranMedisPembuatPernyataan $suratPenolakanAnjuranMedisPembuatPernyataan
 */
class SuratPenolakanAnjuranMedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_penolakan_anjuran_medis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'no_rawat', 'tanggal', 'hubungan', 'nama_pj', 'umur_pj', 'no_ktppj', 'jkpj', 'no_telp', 'nik'], 'required'],
            [['tanggal'], 'safe'],
            [['hubungan', 'jkpj'], 'string'],
            [['no_surat', 'no_ktppj', 'nik'], 'string', 'max' => 20],
            [['no_rawat'], 'string', 'max' => 17],
            [['nama_pj'], 'string', 'max' => 50],
            [['umur_pj', 'kode_penolakan'], 'string', 'max' => 3],
            [['no_telp'], 'string', 'max' => 30],
            [['alasan_penolakan'], 'string', 'max' => 60],
            [['informasi_risiko_penolakan'], 'string', 'max' => 100],
            [['no_surat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kode_penolakan'], 'exist', 'skipOnError' => true, 'targetClass' => MasterMenolakAnjuranMedis::class, 'targetAttribute' => ['kode_penolakan' => 'kode_penolakan']],
            [['nik'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nik' => 'nik']],
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
            'hubungan' => 'Hubungan',
            'nama_pj' => 'Nama Pj',
            'umur_pj' => 'Umur Pj',
            'no_ktppj' => 'No Ktppj',
            'jkpj' => 'Jkpj',
            'no_telp' => 'No Telp',
            'kode_penolakan' => 'Kode Penolakan',
            'alasan_penolakan' => 'Alasan Penolakan',
            'informasi_risiko_penolakan' => 'Informasi Risiko Penolakan',
            'nik' => 'Nik',
        ];
    }

    /**
     * Gets query for [[KodePenolakan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodePenolakan()
    {
        return $this->hasOne(MasterMenolakAnjuranMedis::class, ['kode_penolakan' => 'kode_penolakan']);
    }

    /**
     * Gets query for [[Nik0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNik0()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nik']);
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
     * Gets query for [[SuratPenolakanAnjuranMedisPembuatPernyataan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPenolakanAnjuranMedisPembuatPernyataan()
    {
        return $this->hasOne(SuratPenolakanAnjuranMedisPembuatPernyataan::class, ['no_surat' => 'no_surat']);
    }
}
