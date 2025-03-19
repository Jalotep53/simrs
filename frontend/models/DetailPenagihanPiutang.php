<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detail_penagihan_piutang".
 *
 * @property string $no_tagihan
 * @property string $no_rawat
 * @property float $sisapiutang
 *
 * @property RegPeriksa $noRawat
 * @property PenagihanPiutang $noTagihan
 */
class DetailPenagihanPiutang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_penagihan_piutang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_tagihan', 'no_rawat', 'sisapiutang'], 'required'],
            [['sisapiutang'], 'number'],
            [['no_tagihan', 'no_rawat'], 'string', 'max' => 17],
            [['no_tagihan', 'no_rawat'], 'unique', 'targetAttribute' => ['no_tagihan', 'no_rawat']],
            [['no_tagihan'], 'exist', 'skipOnError' => true, 'targetClass' => PenagihanPiutang::class, 'targetAttribute' => ['no_tagihan' => 'no_tagihan']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_tagihan' => 'No Tagihan',
            'no_rawat' => 'No Rawat',
            'sisapiutang' => 'Sisapiutang',
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

    /**
     * Gets query for [[NoTagihan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoTagihan()
    {
        return $this->hasOne(PenagihanPiutang::class, ['no_tagihan' => 'no_tagihan']);
    }
}
