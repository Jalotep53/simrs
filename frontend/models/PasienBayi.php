<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pasien_bayi".
 *
 * @property string $no_rkm_medis
 * @property string $umur_ibu
 * @property string $nama_ayah
 * @property string $umur_ayah
 * @property string $berat_badan
 * @property string $panjang_badan
 * @property string $lingkar_kepala
 * @property string $proses_lahir
 * @property string $anakke
 * @property string $jam_lahir
 * @property string $keterangan
 * @property string|null $diagnosa
 * @property string|null $penyulit_kehamilan
 * @property string|null $ketuban
 * @property string|null $lingkar_perut
 * @property string|null $lingkar_dada
 * @property string|null $penolong
 * @property string|null $no_skl
 * @property string $g
 * @property string $p
 * @property string $a
 * @property string $f1
 * @property string $u1
 * @property string $t1
 * @property string $r1
 * @property string $w1
 * @property string $n1
 * @property string $f5
 * @property string $u5
 * @property string $t5
 * @property string $r5
 * @property string $w5
 * @property string $n5
 * @property string $f10
 * @property string $u10
 * @property string $t10
 * @property string $r10
 * @property string $w10
 * @property string $n10
 * @property string $resusitas
 * @property string $obat_diberikan
 * @property string $mikasi
 * @property string $mikonium
 *
 * @property Pasien $noRkmMedis
 * @property Pegawai $penolong0
 */
class PasienBayi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien_bayi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis', 'umur_ibu', 'nama_ayah', 'umur_ayah', 'berat_badan', 'panjang_badan', 'lingkar_kepala', 'proses_lahir', 'anakke', 'jam_lahir', 'keterangan', 'g', 'p', 'a', 'f1', 'u1', 't1', 'r1', 'w1', 'n1', 'f5', 'u5', 't5', 'r5', 'w5', 'n5', 'f10', 'u10', 't10', 'r10', 'w10', 'n10', 'resusitas', 'obat_diberikan', 'mikasi', 'mikonium'], 'required'],
            [['jam_lahir'], 'safe'],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['umur_ibu', 'umur_ayah'], 'string', 'max' => 8],
            [['nama_ayah', 'keterangan'], 'string', 'max' => 50],
            [['berat_badan', 'panjang_badan', 'lingkar_kepala', 'lingkar_perut', 'lingkar_dada', 'g', 'p', 'a'], 'string', 'max' => 10],
            [['proses_lahir', 'diagnosa', 'penyulit_kehamilan', 'ketuban'], 'string', 'max' => 60],
            [['anakke', 'n5', 'n10'], 'string', 'max' => 2],
            [['penolong', 'n1'], 'string', 'max' => 20],
            [['no_skl'], 'string', 'max' => 30],
            [['f1', 'u1', 't1', 'r1', 'w1', 'f5', 'u5', 't5', 'r5', 'w5', 'f10', 'u10', 't10', 'r10', 'w10'], 'string', 'max' => 1],
            [['resusitas', 'mikasi', 'mikonium'], 'string', 'max' => 100],
            [['obat_diberikan'], 'string', 'max' => 300],
            [['no_skl'], 'unique'],
            [['no_rkm_medis'], 'unique'],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
            [['penolong'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['penolong' => 'nik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rkm_medis' => 'No Rkm Medis',
            'umur_ibu' => 'Umur Ibu',
            'nama_ayah' => 'Nama Ayah',
            'umur_ayah' => 'Umur Ayah',
            'berat_badan' => 'Berat Badan',
            'panjang_badan' => 'Panjang Badan',
            'lingkar_kepala' => 'Lingkar Kepala',
            'proses_lahir' => 'Proses Lahir',
            'anakke' => 'Anakke',
            'jam_lahir' => 'Jam Lahir',
            'keterangan' => 'Keterangan',
            'diagnosa' => 'Diagnosa',
            'penyulit_kehamilan' => 'Penyulit Kehamilan',
            'ketuban' => 'Ketuban',
            'lingkar_perut' => 'Lingkar Perut',
            'lingkar_dada' => 'Lingkar Dada',
            'penolong' => 'Penolong',
            'no_skl' => 'No Skl',
            'g' => 'G',
            'p' => 'P',
            'a' => 'A',
            'f1' => 'F1',
            'u1' => 'U1',
            't1' => 'T1',
            'r1' => 'R1',
            'w1' => 'W1',
            'n1' => 'N1',
            'f5' => 'F5',
            'u5' => 'U5',
            't5' => 'T5',
            'r5' => 'R5',
            'w5' => 'W5',
            'n5' => 'N5',
            'f10' => 'F10',
            'u10' => 'U10',
            't10' => 'T10',
            'r10' => 'R10',
            'w10' => 'W10',
            'n10' => 'N10',
            'resusitas' => 'Resusitas',
            'obat_diberikan' => 'Obat Diberikan',
            'mikasi' => 'Mikasi',
            'mikonium' => 'Mikonium',
        ];
    }

    /**
     * Gets query for [[NoRkmMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRkmMedis()
    {
        return $this->hasOne(Pasien::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[Penolong0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenolong0()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'penolong']);
    }
}
