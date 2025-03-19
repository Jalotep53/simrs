<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "toko_detail_returpiutang".
 *
 * @property string $no_retur_piutang
 * @property string $nota_piutang
 * @property string $kode_brng
 * @property string|null $kode_sat
 * @property float|null $h_piutang
 * @property float|null $h_retur
 * @property float|null $jml_retur
 * @property float|null $total
 *
 * @property Tokobarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property Tokoreturpiutang $noReturPiutang
 */
class TokoDetailReturpiutang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'toko_detail_returpiutang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_retur_piutang', 'nota_piutang'], 'required'],
            [['h_piutang', 'h_retur', 'jml_retur', 'total'], 'number'],
            [['no_retur_piutang', 'nota_piutang'], 'string', 'max' => 15],
            [['kode_brng'], 'string', 'max' => 40],
            [['kode_sat'], 'string', 'max' => 4],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Tokobarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['no_retur_piutang'], 'exist', 'skipOnError' => true, 'targetClass' => Tokoreturpiutang::class, 'targetAttribute' => ['no_retur_piutang' => 'no_retur_piutang']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_retur_piutang' => 'No Retur Piutang',
            'nota_piutang' => 'Nota Piutang',
            'kode_brng' => 'Kode Brng',
            'kode_sat' => 'Kode Sat',
            'h_piutang' => 'H Piutang',
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
     * Gets query for [[NoReturPiutang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoReturPiutang()
    {
        return $this->hasOne(Tokoreturpiutang::class, ['no_retur_piutang' => 'no_retur_piutang']);
    }
}
