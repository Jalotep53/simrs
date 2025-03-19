<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detreturpiutang".
 *
 * @property string $no_retur_piutang
 * @property string $nota_piutang
 * @property string $kode_brng
 * @property string|null $kode_sat
 * @property float|null $jml_piutang
 * @property float|null $h_piutang
 * @property float|null $jml_retur
 * @property float|null $h_retur
 * @property float|null $subtotal
 * @property string $no_batch
 * @property string $no_faktur
 *
 * @property Databarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property Returpiutang $noReturPiutang
 */
class Detreturpiutang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detreturpiutang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_retur_piutang', 'nota_piutang', 'no_batch', 'no_faktur'], 'required'],
            [['jml_piutang', 'h_piutang', 'jml_retur', 'h_retur', 'subtotal'], 'number'],
            [['no_retur_piutang', 'nota_piutang', 'no_batch', 'no_faktur'], 'string', 'max' => 20],
            [['kode_brng'], 'string', 'max' => 15],
            [['kode_sat'], 'string', 'max' => 4],
            [['no_retur_piutang'], 'exist', 'skipOnError' => true, 'targetClass' => Returpiutang::class, 'targetAttribute' => ['no_retur_piutang' => 'no_retur_piutang']],
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
            'no_retur_piutang' => 'No Retur Piutang',
            'nota_piutang' => 'Nota Piutang',
            'kode_brng' => 'Kode Brng',
            'kode_sat' => 'Kode Sat',
            'jml_piutang' => 'Jml Piutang',
            'h_piutang' => 'H Piutang',
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
     * Gets query for [[NoReturPiutang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoReturPiutang()
    {
        return $this->hasOne(Returpiutang::class, ['no_retur_piutang' => 'no_retur_piutang']);
    }
}
