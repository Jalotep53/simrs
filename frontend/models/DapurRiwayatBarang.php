<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dapur_riwayat_barang".
 *
 * @property string|null $kode_brng
 * @property float|null $stok_awal
 * @property float|null $masuk
 * @property float|null $keluar
 * @property float $stok_akhir
 * @property string|null $posisi
 * @property string|null $tanggal
 * @property string|null $jam
 * @property string|null $petugas
 * @property string|null $status
 *
 * @property Dapurbarang $kodeBrng
 */
class DapurRiwayatBarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dapur_riwayat_barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stok_awal', 'masuk', 'keluar', 'stok_akhir'], 'number'],
            [['stok_akhir'], 'required'],
            [['posisi', 'status'], 'string'],
            [['tanggal', 'jam'], 'safe'],
            [['kode_brng'], 'string', 'max' => 15],
            [['petugas'], 'string', 'max' => 20],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Dapurbarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_brng' => 'Kode Brng',
            'stok_awal' => 'Stok Awal',
            'masuk' => 'Masuk',
            'keluar' => 'Keluar',
            'stok_akhir' => 'Stok Akhir',
            'posisi' => 'Posisi',
            'tanggal' => 'Tanggal',
            'jam' => 'Jam',
            'petugas' => 'Petugas',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[KodeBrng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrng()
    {
        return $this->hasOne(Dapurbarang::class, ['kode_brng' => 'kode_brng']);
    }
}
