<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "toko_detail_piutang".
 *
 * @property string|null $nota_piutang
 * @property string|null $kode_brng
 * @property string|null $kode_sat
 * @property float|null $h_jual
 * @property float|null $h_beli
 * @property float|null $jumlah
 * @property float|null $subtotal
 * @property float|null $dis
 * @property float|null $bsr_dis
 * @property float|null $total
 *
 * @property Tokobarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property Tokopiutang $notaPiutang
 */
class TokoDetailPiutang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'toko_detail_piutang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['h_jual', 'h_beli', 'jumlah', 'subtotal', 'dis', 'bsr_dis', 'total'], 'number'],
            [['nota_piutang'], 'string', 'max' => 15],
            [['kode_brng'], 'string', 'max' => 40],
            [['kode_sat'], 'string', 'max' => 4],
            [['nota_piutang'], 'exist', 'skipOnError' => true, 'targetClass' => Tokopiutang::class, 'targetAttribute' => ['nota_piutang' => 'nota_piutang']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Tokobarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nota_piutang' => 'Nota Piutang',
            'kode_brng' => 'Kode Brng',
            'kode_sat' => 'Kode Sat',
            'h_jual' => 'H Jual',
            'h_beli' => 'H Beli',
            'jumlah' => 'Jumlah',
            'subtotal' => 'Subtotal',
            'dis' => 'Dis',
            'bsr_dis' => 'Bsr Dis',
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
     * Gets query for [[NotaPiutang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotaPiutang()
    {
        return $this->hasOne(Tokopiutang::class, ['nota_piutang' => 'nota_piutang']);
    }
}
