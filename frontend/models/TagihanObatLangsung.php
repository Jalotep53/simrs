<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tagihan_obat_langsung".
 *
 * @property string $no_rawat
 * @property float $besar_tagihan
 *
 * @property RegPeriksa $noRawat
 */
class TagihanObatLangsung extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tagihan_obat_langsung';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'besar_tagihan'], 'required'],
            [['besar_tagihan'], 'number'],
            [['no_rawat'], 'string', 'max' => 17],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'besar_tagihan' => 'Besar Tagihan',
        ];
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
