<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detailpiutang".
 *
 * @property string $nota_piutang
 * @property string $kode_brng
 * @property string|null $kode_sat
 * @property float|null $h_jual
 * @property float|null $h_beli
 * @property float|null $jumlah
 * @property float|null $subtotal
 * @property float|null $dis
 * @property float|null $bsr_dis
 * @property float|null $total
 * @property string $no_batch
 * @property string $no_faktur
 * @property string $aturan_pakai
 *
 * @property Databarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property Piutang $notaPiutang
 */
class Detailpiutang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detailpiutang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nota_piutang', 'no_batch', 'no_faktur', 'aturan_pakai'], 'required'],
            [['h_jual', 'h_beli', 'jumlah', 'subtotal', 'dis', 'bsr_dis', 'total'], 'number'],
            [['nota_piutang', 'no_batch', 'no_faktur'], 'string', 'max' => 20],
            [['kode_brng'], 'string', 'max' => 15],
            [['kode_sat'], 'string', 'max' => 4],
            [['aturan_pakai'], 'string', 'max' => 150],
            [['nota_piutang'], 'exist', 'skipOnError' => true, 'targetClass' => Piutang::class, 'targetAttribute' => ['nota_piutang' => 'nota_piutang']],
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
            'no_batch' => 'No Batch',
            'no_faktur' => 'No Faktur',
            'aturan_pakai' => 'Aturan Pakai',
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
     * Gets query for [[NotaPiutang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotaPiutang()
    {
        return $this->hasOne(Piutang::class, ['nota_piutang' => 'nota_piutang']);
    }
}
