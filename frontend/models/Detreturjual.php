<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detreturjual".
 *
 * @property string $no_retur_jual
 * @property string $nota_jual
 * @property string $kode_brng
 * @property string|null $kode_sat
 * @property float|null $jml_jual
 * @property float|null $h_jual
 * @property float|null $jml_retur
 * @property float|null $h_retur
 * @property float|null $subtotal
 * @property string $no_batch
 * @property string $no_faktur
 *
 * @property Databarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property Returjual $noReturJual
 */
class Detreturjual extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detreturjual';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_retur_jual', 'nota_jual', 'no_batch', 'no_faktur'], 'required'],
            [['jml_jual', 'h_jual', 'jml_retur', 'h_retur', 'subtotal'], 'number'],
            [['no_retur_jual', 'nota_jual', 'no_batch', 'no_faktur'], 'string', 'max' => 20],
            [['kode_brng'], 'string', 'max' => 15],
            [['kode_sat'], 'string', 'max' => 4],
            [['no_retur_jual'], 'exist', 'skipOnError' => true, 'targetClass' => Returjual::class, 'targetAttribute' => ['no_retur_jual' => 'no_retur_jual']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
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
            'jml_jual' => 'Jml Jual',
            'h_jual' => 'H Jual',
            'jml_retur' => 'Jml Retur',
            'h_retur' => 'H Retur',
            'subtotal' => 'Subtotal',
            'no_batch' => 'No Batch',
            'no_faktur' => 'No Faktur',
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
     * Gets query for [[NoReturJual]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoReturJual()
    {
        return $this->hasOne(Returjual::class, ['no_retur_jual' => 'no_retur_jual']);
    }
}
