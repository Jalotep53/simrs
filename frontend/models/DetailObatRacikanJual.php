<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detail_obat_racikan_jual".
 *
 * @property string $nota_jual
 * @property string $no_racik
 * @property string $kode_brng
 *
 * @property Databarang $kodeBrng
 * @property Penjualan $notaJual
 */
class DetailObatRacikanJual extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_obat_racikan_jual';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nota_jual', 'no_racik', 'kode_brng'], 'required'],
            [['nota_jual'], 'string', 'max' => 20],
            [['no_racik'], 'string', 'max' => 2],
            [['kode_brng'], 'string', 'max' => 15],
            [['nota_jual', 'no_racik', 'kode_brng'], 'unique', 'targetAttribute' => ['nota_jual', 'no_racik', 'kode_brng']],
            [['nota_jual'], 'exist', 'skipOnError' => true, 'targetClass' => Penjualan::class, 'targetAttribute' => ['nota_jual' => 'nota_jual']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nota_jual' => 'Nota Jual',
            'no_racik' => 'No Racik',
            'kode_brng' => 'Kode Brng',
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
     * Gets query for [[NotaJual]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotaJual()
    {
        return $this->hasOne(Penjualan::class, ['nota_jual' => 'nota_jual']);
    }
}
