<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detail_pengajuan_barang_medis".
 *
 * @property string $no_pengajuan
 * @property string $kode_brng
 * @property string|null $kode_sat
 * @property float|null $jumlah
 * @property float|null $h_pengajuan
 * @property float $total
 * @property float $jumlah2
 *
 * @property Databarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property PengajuanBarangMedis $noPengajuan
 */
class DetailPengajuanBarangMedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_pengajuan_barang_medis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pengajuan', 'total', 'jumlah2'], 'required'],
            [['jumlah', 'h_pengajuan', 'total', 'jumlah2'], 'number'],
            [['no_pengajuan'], 'string', 'max' => 20],
            [['kode_brng'], 'string', 'max' => 15],
            [['kode_sat'], 'string', 'max' => 4],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
            [['no_pengajuan'], 'exist', 'skipOnError' => true, 'targetClass' => PengajuanBarangMedis::class, 'targetAttribute' => ['no_pengajuan' => 'no_pengajuan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_pengajuan' => 'No Pengajuan',
            'kode_brng' => 'Kode Brng',
            'kode_sat' => 'Kode Sat',
            'jumlah' => 'Jumlah',
            'h_pengajuan' => 'H Pengajuan',
            'total' => 'Total',
            'jumlah2' => 'Jumlah2',
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

    /**
     * Gets query for [[KodeSat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSat()
    {
        return $this->hasOne(Kodesatuan::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[NoPengajuan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoPengajuan()
    {
        return $this->hasOne(PengajuanBarangMedis::class, ['no_pengajuan' => 'no_pengajuan']);
    }
}
