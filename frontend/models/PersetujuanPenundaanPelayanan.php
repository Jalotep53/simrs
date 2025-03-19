<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "persetujuan_penundaan_pelayanan".
 *
 * @property string $no_surat
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $nama_pj
 * @property string $umur_pj
 * @property string $no_ktppj
 * @property string $alamatpj
 * @property string $no_telppj
 * @property string|null $hubungan
 * @property string|null $ruang
 * @property string|null $dokter_pengirim
 * @property string|null $pelayanan_dilakukan
 * @property string|null $ditunda_karena
 * @property string|null $keterangan_ditunda
 * @property string|null $alternatif_diberikan
 * @property string $keterangan_alternatif_diberikan
 * @property string $nip
 * @property string|null $kd_dokter
 *
 * @property BuktiPersetujuanPenundaanPelayanan $buktiPersetujuanPenundaanPelayanan
 * @property Dokter $kdDokter
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PersetujuanPenundaanPelayanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'persetujuan_penundaan_pelayanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'no_rawat', 'tanggal', 'nama_pj', 'umur_pj', 'no_ktppj', 'alamatpj', 'no_telppj', 'keterangan_alternatif_diberikan', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['hubungan', 'ditunda_karena', 'alternatif_diberikan'], 'string'],
            [['no_surat', 'no_ktppj', 'nip', 'kd_dokter'], 'string', 'max' => 20],
            [['no_rawat'], 'string', 'max' => 17],
            [['nama_pj', 'keterangan_ditunda', 'keterangan_alternatif_diberikan'], 'string', 'max' => 50],
            [['umur_pj'], 'string', 'max' => 3],
            [['alamatpj'], 'string', 'max' => 100],
            [['no_telppj'], 'string', 'max' => 30],
            [['ruang', 'dokter_pengirim'], 'string', 'max' => 40],
            [['pelayanan_dilakukan'], 'string', 'max' => 120],
            [['no_surat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
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
            'umur_pj' => 'Umur Pj',
            'no_ktppj' => 'No Ktppj',
            'alamatpj' => 'Alamatpj',
            'no_telppj' => 'No Telppj',
            'hubungan' => 'Hubungan',
            'ruang' => 'Ruang',
            'dokter_pengirim' => 'Dokter Pengirim',
            'pelayanan_dilakukan' => 'Pelayanan Dilakukan',
            'ditunda_karena' => 'Ditunda Karena',
            'keterangan_ditunda' => 'Keterangan Ditunda',
            'alternatif_diberikan' => 'Alternatif Diberikan',
            'keterangan_alternatif_diberikan' => 'Keterangan Alternatif Diberikan',
            'nip' => 'Nip',
            'kd_dokter' => 'Kd Dokter',
        ];
    }

    /**
     * Gets query for [[BuktiPersetujuanPenundaanPelayanan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuktiPersetujuanPenundaanPelayanan()
    {
        return $this->hasOne(BuktiPersetujuanPenundaanPelayanan::class, ['no_surat' => 'no_surat']);
    }

    /**
     * Gets query for [[KdDokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokter()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokter']);
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
}
