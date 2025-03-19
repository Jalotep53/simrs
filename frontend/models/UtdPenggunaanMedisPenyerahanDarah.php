<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "utd_penggunaan_medis_penyerahan_darah".
 *
 * @property string $no_penyerahan
 * @property string $kode_brng
 * @property float|null $jml
 * @property float|null $harga
 * @property float|null $total
 *
 * @property Databarang $kodeBrng
 * @property UtdPenyerahanDarah $noPenyerahan
 */
class UtdPenggunaanMedisPenyerahanDarah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'utd_penggunaan_medis_penyerahan_darah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_penyerahan', 'kode_brng'], 'required'],
            [['jml', 'harga', 'total'], 'number'],
            [['no_penyerahan'], 'string', 'max' => 17],
            [['kode_brng'], 'string', 'max' => 15],
            [['no_penyerahan', 'kode_brng'], 'unique', 'targetAttribute' => ['no_penyerahan', 'kode_brng']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['no_penyerahan'], 'exist', 'skipOnError' => true, 'targetClass' => UtdPenyerahanDarah::class, 'targetAttribute' => ['no_penyerahan' => 'no_penyerahan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_penyerahan' => 'No Penyerahan',
            'kode_brng' => 'Kode Brng',
            'jml' => 'Jml',
            'harga' => 'Harga',
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
        return $this->hasOne(Databarang::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[NoPenyerahan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoPenyerahan()
    {
        return $this->hasOne(UtdPenyerahanDarah::class, ['no_penyerahan' => 'no_penyerahan']);
    }
}
