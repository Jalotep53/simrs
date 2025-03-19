<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "toko_detail_returjual".
 *
 * @property string $no_retur_jual
 * @property string $nota_jual
 * @property string $kode_brng
 * @property string|null $kode_sat
 * @property float|null $h_jual
 * @property float|null $h_retur
 * @property float|null $jml_retur
 * @property float|null $total
 *
 * @property Tokobarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property Tokoreturjual $noReturJual
 */
class TokoDetailReturjual extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'toko_detail_returjual';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_retur_jual', 'nota_jual'], 'required'],
            [['h_jual', 'h_retur', 'jml_retur', 'total'], 'number'],
            [['no_retur_jual', 'nota_jual'], 'string', 'max' => 15],
            [['kode_brng'], 'string', 'max' => 40],
            [['kode_sat'], 'string', 'max' => 4],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Tokobarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['no_retur_jual'], 'exist', 'skipOnError' => true, 'targetClass' => Tokoreturjual::class, 'targetAttribute' => ['no_retur_jual' => 'no_retur_jual']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_retur_jual' => 'No Retur Jual',
            'nota_jual' => 'Nota Jual',
            'kode_brng' => 'Kode Brng',
            'kode_sat' => 'Kode Sat',
            'h_jual' => 'H Jual',
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
     * Gets query for [[NoReturJual]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoReturJual()
    {
        return $this->hasOne(Tokoreturjual::class, ['no_retur_jual' => 'no_retur_jual']);
    }
}
