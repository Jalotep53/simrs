<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bukti_penagihan_piutang".
 *
 * @property string $no_tagihan
 * @property string|null $photo
 *
 * @property PenagihanPiutang $noTagihan
 */
class BuktiPenagihanPiutang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bukti_penagihan_piutang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_tagihan'], 'required'],
            [['no_tagihan'], 'string', 'max' => 17],
            [['photo'], 'string', 'max' => 500],
            [['no_tagihan'], 'unique'],
            [['no_tagihan'], 'exist', 'skipOnError' => true, 'targetClass' => PenagihanPiutang::class, 'targetAttribute' => ['no_tagihan' => 'no_tagihan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_tagihan' => 'No Tagihan',
            'photo' => 'Photo',
        ];
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
