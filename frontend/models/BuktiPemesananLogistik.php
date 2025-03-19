<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bukti_pemesanan_logistik".
 *
 * @property string $no_faktur
 * @property string|null $photo
 *
 * @property Ipsrspemesanan $noFaktur
 */
class BuktiPemesananLogistik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bukti_pemesanan_logistik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_faktur'], 'required'],
            [['no_faktur'], 'string', 'max' => 20],
            [['photo'], 'string', 'max' => 500],
            [['no_faktur'], 'unique'],
            [['no_faktur'], 'exist', 'skipOnError' => true, 'targetClass' => Ipsrspemesanan::class, 'targetAttribute' => ['no_faktur' => 'no_faktur']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_faktur' => 'No Faktur',
            'photo' => 'Photo',
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
}
