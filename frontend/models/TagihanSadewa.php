<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tagihan_sadewa".
 *
 * @property string $no_nota
 * @property string $no_rkm_medis
 * @property string $nama_pasien
 * @property string $alamat
 * @property string $tgl_bayar
 * @property string $jenis_bayar
 * @property float $jumlah_tagihan
 * @property float $jumlah_bayar
 * @property string $status
 * @property string|null $petugas
 */
class TagihanSadewa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tagihan_sadewa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_nota', 'no_rkm_medis', 'nama_pasien', 'alamat', 'tgl_bayar', 'jenis_bayar', 'jumlah_tagihan', 'jumlah_bayar', 'status'], 'required'],
            [['tgl_bayar'], 'safe'],
            [['jenis_bayar', 'status'], 'string'],
            [['jumlah_tagihan', 'jumlah_bayar'], 'number'],
            [['no_nota'], 'string', 'max' => 17],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['nama_pasien'], 'string', 'max' => 60],
            [['alamat'], 'string', 'max' => 200],
            [['petugas'], 'string', 'max' => 20],
            [['no_nota'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_nota' => 'No Nota',
            'no_rkm_medis' => 'No Rkm Medis',
            'nama_pasien' => 'Nama Pasien',
            'alamat' => 'Alamat',
            'tgl_bayar' => 'Tgl Bayar',
            'jenis_bayar' => 'Jenis Bayar',
            'jumlah_tagihan' => 'Jumlah Tagihan',
            'jumlah_bayar' => 'Jumlah Bayar',
            'status' => 'Status',
            'petugas' => 'Petugas',
        ];
    }
}
