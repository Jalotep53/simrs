<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "data_batch".
 *
 * @property string $no_batch
 * @property string $kode_brng
 * @property string $tgl_beli
 * @property string $tgl_kadaluarsa
 * @property string $asal
 * @property string $no_faktur
 * @property float $dasar
 * @property float|null $h_beli
 * @property float|null $ralan
 * @property float|null $kelas1
 * @property float|null $kelas2
 * @property float|null $kelas3
 * @property float|null $utama
 * @property float|null $vip
 * @property float|null $vvip
 * @property float|null $beliluar
 * @property float|null $jualbebas
 * @property float|null $karyawan
 * @property float $jumlahbeli
 * @property float $sisa
 *
 * @property Databarang $kodeBrng
 */
class DataBatch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_batch';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_batch', 'kode_brng', 'tgl_beli', 'tgl_kadaluarsa', 'asal', 'no_faktur', 'dasar', 'jumlahbeli', 'sisa'], 'required'],
            [['tgl_beli', 'tgl_kadaluarsa'], 'safe'],
            [['asal'], 'string'],
            [['dasar', 'h_beli', 'ralan', 'kelas1', 'kelas2', 'kelas3', 'utama', 'vip', 'vvip', 'beliluar', 'jualbebas', 'karyawan', 'jumlahbeli', 'sisa'], 'number'],
            [['no_batch', 'no_faktur'], 'string', 'max' => 20],
            [['kode_brng'], 'string', 'max' => 15],
            [['no_batch', 'kode_brng', 'no_faktur'], 'unique', 'targetAttribute' => ['no_batch', 'kode_brng', 'no_faktur']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_batch' => 'No Batch',
            'kode_brng' => 'Kode Brng',
            'tgl_beli' => 'Tgl Beli',
            'tgl_kadaluarsa' => 'Tgl Kadaluarsa',
            'asal' => 'Asal',
            'no_faktur' => 'No Faktur',
            'dasar' => 'Dasar',
            'h_beli' => 'H Beli',
            'ralan' => 'Ralan',
            'kelas1' => 'Kelas1',
            'kelas2' => 'Kelas2',
            'kelas3' => 'Kelas3',
            'utama' => 'Utama',
            'vip' => 'Vip',
            'vvip' => 'Vvip',
            'beliluar' => 'Beliluar',
            'jualbebas' => 'Jualbebas',
            'karyawan' => 'Karyawan',
            'jumlahbeli' => 'Jumlahbeli',
            'sisa' => 'Sisa',
        ];
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
