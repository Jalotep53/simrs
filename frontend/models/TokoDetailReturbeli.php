<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "toko_detail_returbeli".
 *
 * @property string $no_retur_beli
 * @property string $no_faktur
 * @property string $kode_brng
 * @property string|null $kode_sat
 * @property float|null $h_beli
 * @property float|null $h_retur
 * @property float|null $jml_retur
 * @property float|null $total
 *
 * @property Tokobarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property Tokoreturbeli $noReturBeli
 */
class TokoDetailReturbeli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'toko_detail_returbeli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_retur_beli', 'no_faktur'], 'required'],
            [['h_beli', 'h_retur', 'jml_retur', 'total'], 'number'],
            [['no_retur_beli'], 'string', 'max' => 15],
            [['no_faktur'], 'string', 'max' => 20],
            [['kode_brng'], 'string', 'max' => 40],
            [['kode_sat'], 'string', 'max' => 4],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Tokobarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['no_retur_beli'], 'exist', 'skipOnError' => true, 'targetClass' => Tokoreturbeli::class, 'targetAttribute' => ['no_retur_beli' => 'no_retur_beli']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_retur_beli' => 'No Retur Beli',
            'no_faktur' => 'No Faktur',
            'kode_brng' => 'Kode Brng',
            'kode_sat' => 'Kode Sat',
            'h_beli' => 'H Beli',
            'h_retur' => 'H Retur',
            'jml_retur' => 'Jml Retur',
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
     * Gets query for [[NoReturBeli]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoReturBeli()
    {
        return $this->hasOne(Tokoreturbeli::class, ['no_retur_beli' => 'no_retur_beli']);
    }
}
