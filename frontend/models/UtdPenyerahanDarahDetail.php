<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "utd_penyerahan_darah_detail".
 *
 * @property string $no_penyerahan
 * @property string $no_kantong
 * @property float|null $jasa_sarana
 * @property float|null $paket_bhp
 * @property float|null $kso
 * @property float|null $manajemen
 * @property float|null $total
 *
 * @property UtdStokDarah $noKantong
 * @property UtdPenyerahanDarah $noPenyerahan
 */
class UtdPenyerahanDarahDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'utd_penyerahan_darah_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_penyerahan', 'no_kantong'], 'required'],
            [['jasa_sarana', 'paket_bhp', 'kso', 'manajemen', 'total'], 'number'],
            [['no_penyerahan'], 'string', 'max' => 17],
            [['no_kantong'], 'string', 'max' => 20],
            [['no_penyerahan', 'no_kantong'], 'unique', 'targetAttribute' => ['no_penyerahan', 'no_kantong']],
            [['no_penyerahan'], 'exist', 'skipOnError' => true, 'targetClass' => UtdPenyerahanDarah::class, 'targetAttribute' => ['no_penyerahan' => 'no_penyerahan']],
            [['no_kantong'], 'exist', 'skipOnError' => true, 'targetClass' => UtdStokDarah::class, 'targetAttribute' => ['no_kantong' => 'no_kantong']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_penyerahan' => 'No Penyerahan',
            'no_kantong' => 'No Kantong',
            'jasa_sarana' => 'Jasa Sarana',
            'paket_bhp' => 'Paket Bhp',
            'kso' => 'Kso',
            'manajemen' => 'Manajemen',
            'total' => 'Total',
        ];
    }

    /**
     * Gets query for [[NoKantong]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoKantong()
    {
        return $this->hasOne(UtdStokDarah::class, ['no_kantong' => 'no_kantong']);
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
