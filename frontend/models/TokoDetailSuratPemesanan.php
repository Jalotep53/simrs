<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "toko_detail_surat_pemesanan".
 *
 * @property string $no_pemesanan
 * @property string|null $kode_brng
 * @property string|null $kode_sat
 * @property float|null $jumlah
 * @property float|null $h_pesan
 * @property float|null $subtotal
 * @property float $dis
 * @property float $besardis
 * @property float $total
 *
 * @property Tokobarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property TokoSuratPemesanan $noPemesanan
 */
class TokoDetailSuratPemesanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'toko_detail_surat_pemesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pemesanan', 'dis', 'besardis', 'total'], 'required'],
            [['jumlah', 'h_pesan', 'subtotal', 'dis', 'besardis', 'total'], 'number'],
            [['no_pemesanan'], 'string', 'max' => 20],
            [['kode_brng'], 'string', 'max' => 40],
            [['kode_sat'], 'string', 'max' => 4],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Tokobarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
            [['no_pemesanan'], 'exist', 'skipOnError' => true, 'targetClass' => TokoSuratPemesanan::class, 'targetAttribute' => ['no_pemesanan' => 'no_pemesanan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_pemesanan' => 'No Pemesanan',
            'kode_brng' => 'Kode Brng',
            'kode_sat' => 'Kode Sat',
            'jumlah' => 'Jumlah',
            'h_pesan' => 'H Pesan',
            'subtotal' => 'Subtotal',
            'dis' => 'Dis',
            'besardis' => 'Besardis',
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
     * Gets query for [[NoPemesanan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoPemesanan()
    {
        return $this->hasOne(TokoSuratPemesanan::class, ['no_pemesanan' => 'no_pemesanan']);
    }
}
