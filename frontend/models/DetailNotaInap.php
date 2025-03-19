<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detail_nota_inap".
 *
 * @property string|null $no_rawat
 * @property string|null $nama_bayar
 * @property float|null $besarppn
 * @property float|null $besar_bayar
 *
 * @property AkunBayar $namaBayar
 * @property RegPeriksa $noRawat
 */
class DetailNotaInap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_nota_inap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['besarppn', 'besar_bayar'], 'number'],
            [['no_rawat'], 'string', 'max' => 17],
            [['nama_bayar'], 'string', 'max' => 50],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nama_bayar'], 'exist', 'skipOnError' => true, 'targetClass' => AkunBayar::class, 'targetAttribute' => ['nama_bayar' => 'nama_bayar']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'nama_bayar' => 'Nama Bayar',
            'besarppn' => 'Besarppn',
            'besar_bayar' => 'Besar Bayar',
        ];
    }

    /**
     * Gets query for [[NamaBayar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNamaBayar()
    {
        return $this->hasOne(AkunBayar::class, ['nama_bayar' => 'nama_bayar']);
    }

    /**
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
