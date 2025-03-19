<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detreturbeli".
 *
 * @property string $no_retur_beli
 * @property string $no_faktur
 * @property string $kode_brng
 * @property string|null $kode_sat
 * @property float|null $h_beli
 * @property float|null $jml_beli
 * @property float|null $h_retur
 * @property float|null $jml_retur
 * @property float|null $total
 * @property string $no_batch
 * @property float|null $jml_retur2
 *
 * @property Databarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property Returbeli $noReturBeli
 */
class Detreturbeli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detreturbeli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_retur_beli', 'no_faktur', 'no_batch'], 'required'],
            [['h_beli', 'jml_beli', 'h_retur', 'jml_retur', 'total', 'jml_retur2'], 'number'],
            [['no_retur_beli', 'no_faktur', 'no_batch'], 'string', 'max' => 20],
            [['kode_brng'], 'string', 'max' => 15],
            [['kode_sat'], 'string', 'max' => 4],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['no_retur_beli'], 'exist', 'skipOnError' => true, 'targetClass' => Returbeli::class, 'targetAttribute' => ['no_retur_beli' => 'no_retur_beli']],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
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
            'jml_beli' => 'Jml Beli',
            'h_retur' => 'H Retur',
            'jml_retur' => 'Jml Retur',
            'total' => 'Total',
            'no_batch' => 'No Batch',
            'jml_retur2' => 'Jml Retur2',
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
     * Gets query for [[NoReturBeli]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoReturBeli()
    {
        return $this->hasOne(Returbeli::class, ['no_retur_beli' => 'no_retur_beli']);
    }
}
