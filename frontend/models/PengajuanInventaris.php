<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pengajuan_inventaris".
 *
 * @property string $no_pengajuan
 * @property string $tanggal
 * @property string $nik
 * @property string $urgensi
 * @property string $latar_belakang
 * @property string $nama_barang
 * @property string $spesifikasi
 * @property float $jumlah
 * @property float $harga
 * @property float $total
 * @property string $keterangan
 * @property string $nik_pj
 * @property string $status
 *
 * @property Pegawai $nik0
 * @property Pegawai $nikPj
 */
class PengajuanInventaris extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengajuan_inventaris';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pengajuan', 'tanggal', 'nik', 'urgensi', 'latar_belakang', 'nama_barang', 'spesifikasi', 'jumlah', 'harga', 'total', 'keterangan', 'nik_pj', 'status'], 'required'],
            [['tanggal'], 'safe'],
            [['urgensi', 'status'], 'string'],
            [['jumlah', 'harga', 'total'], 'number'],
            [['no_pengajuan', 'nik', 'nik_pj'], 'string', 'max' => 20],
            [['latar_belakang', 'spesifikasi'], 'string', 'max' => 200],
            [['nama_barang', 'keterangan'], 'string', 'max' => 70],
            [['no_pengajuan'], 'unique'],
            [['nik'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nik' => 'nik']],
            [['nik_pj'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nik_pj' => 'nik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_pengajuan' => 'No Pengajuan',
            'tanggal' => 'Tanggal',
            'nik' => 'Nik',
            'urgensi' => 'Urgensi',
            'latar_belakang' => 'Latar Belakang',
            'nama_barang' => 'Nama Barang',
            'spesifikasi' => 'Spesifikasi',
            'jumlah' => 'Jumlah',
            'harga' => 'Harga',
            'total' => 'Total',
            'keterangan' => 'Keterangan',
            'nik_pj' => 'Nik Pj',
            'status' => 'Status',
        ];
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
     * Gets query for [[NikPj]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNikPj()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nik_pj']);
    }
}
