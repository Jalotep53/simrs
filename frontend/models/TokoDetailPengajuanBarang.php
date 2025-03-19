<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "toko_detail_pengajuan_barang".
 *
 * @property string $no_pengajuan
 * @property string|null $kode_brng
 * @property string|null $kode_sat
 * @property float|null $jumlah
 * @property float|null $h_pengajuan
 * @property float $total
 *
 * @property Tokobarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property TokoPengajuanBarang $noPengajuan
 */
class TokoDetailPengajuanBarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'toko_detail_pengajuan_barang';
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
            [['kode_brng'], 'string', 'max' => 40],
            [['kode_sat'], 'string', 'max' => 4],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Tokobarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
            [['no_pengajuan'], 'exist', 'skipOnError' => true, 'targetClass' => TokoPengajuanBarang::class, 'targetAttribute' => ['no_pengajuan' => 'no_pengajuan']],
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
        return $this->hasOne(Tokobarang::class, ['kode_brng' => 'kode_brng']);
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
        return $this->hasOne(TokoPengajuanBarang::class, ['no_pengajuan' => 'no_pengajuan']);
    }
}
