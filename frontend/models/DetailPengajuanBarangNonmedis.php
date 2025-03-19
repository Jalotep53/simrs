<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detail_pengajuan_barang_nonmedis".
 *
 * @property string $no_pengajuan
 * @property string $kode_brng
 * @property string|null $kode_sat
 * @property float|null $jumlah
 * @property float|null $h_pengajuan
 * @property float $total
 *
 * @property Ipsrsbarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property PengajuanBarangNonmedis $noPengajuan
 */
class DetailPengajuanBarangNonmedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_pengajuan_barang_nonmedis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pengajuan', 'total'], 'required'],
            [['jumlah', 'h_pengajuan', 'total'], 'number'],
            [['no_pengajuan'], 'string', 'max' => 20],
            [['kode_brng'], 'string', 'max' => 15],
            [['kode_sat'], 'string', 'max' => 4],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Ipsrsbarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
            [['no_pengajuan'], 'exist', 'skipOnError' => true, 'targetClass' => PengajuanBarangNonmedis::class, 'targetAttribute' => ['no_pengajuan' => 'no_pengajuan']],
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
        ];
    }

    /**
     * Gets query for [[KodeBrng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrng()
    {
        return $this->hasOne(Ipsrsbarang::class, ['kode_brng' => 'kode_brng']);
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
        return $this->hasOne(PengajuanBarangNonmedis::class, ['no_pengajuan' => 'no_pengajuan']);
    }
}
