<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ipsrs_detail_titip_faktur".
 *
 * @property string $no_tagihan
 * @property string $no_faktur
 *
 * @property Ipsrspemesanan $noFaktur
 * @property IpsrsTitipFaktur $noTagihan
 */
class IpsrsDetailTitipFaktur extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ipsrs_detail_titip_faktur';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_tagihan', 'no_faktur'], 'required'],
            [['no_tagihan', 'no_faktur'], 'string', 'max' => 20],
            [['no_tagihan', 'no_faktur'], 'unique', 'targetAttribute' => ['no_tagihan', 'no_faktur']],
            [['no_tagihan'], 'exist', 'skipOnError' => true, 'targetClass' => IpsrsTitipFaktur::class, 'targetAttribute' => ['no_tagihan' => 'no_tagihan']],
            [['no_faktur'], 'exist', 'skipOnError' => true, 'targetClass' => Ipsrspemesanan::class, 'targetAttribute' => ['no_faktur' => 'no_faktur']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_tagihan' => 'No Tagihan',
            'no_faktur' => 'No Faktur',
        ];
    }

    /**
     * Gets query for [[NoFaktur]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoFaktur()
    {
        return $this->hasOne(Ipsrspemesanan::class, ['no_faktur' => 'no_faktur']);
    }

    /**
     * Gets query for [[NoTagihan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoTagihan()
    {
        return $this->hasOne(IpsrsTitipFaktur::class, ['no_tagihan' => 'no_tagihan']);
    }
}
