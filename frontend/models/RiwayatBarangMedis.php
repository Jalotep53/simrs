<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "riwayat_barang_medis".
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
 * @property string|null $kd_bangsal
 * @property string|null $status
 * @property string $no_batch
 * @property string $no_faktur
 * @property string $keterangan
 *
 * @property Bangsal $kdBangsal
 * @property Databarang $kodeBrng
 */
class RiwayatBarangMedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_barang_medis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stok_awal', 'masuk', 'keluar', 'stok_akhir'], 'number'],
            [['stok_akhir', 'no_batch', 'no_faktur', 'keterangan'], 'required'],
            [['posisi', 'status'], 'string'],
            [['tanggal', 'jam'], 'safe'],
            [['kode_brng'], 'string', 'max' => 15],
            [['petugas', 'no_batch', 'no_faktur'], 'string', 'max' => 20],
            [['kd_bangsal'], 'string', 'max' => 5],
            [['keterangan'], 'string', 'max' => 100],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
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
            'kd_bangsal' => 'Kd Bangsal',
            'status' => 'Status',
            'no_batch' => 'No Batch',
            'no_faktur' => 'No Faktur',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[KdBangsal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdBangsal()
    {
        return $this->hasOne(Bangsal::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[KodeBrng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrng()
    {
        return $this->hasOne(Databarang::class, ['kode_brng' => 'kode_brng']);
    }
}
