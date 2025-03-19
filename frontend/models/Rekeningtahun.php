<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rekeningtahun".
 *
 * @property string $thn
 * @property string $kd_rek
 * @property float $saldo_awal
 *
 * @property Rekening $kdRek
 */
class Rekeningtahun extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rekeningtahun';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['thn', 'kd_rek', 'saldo_awal'], 'required'],
            [['thn'], 'safe'],
            [['saldo_awal'], 'number'],
            [['kd_rek'], 'string', 'max' => 15],
            [['thn', 'kd_rek'], 'unique', 'targetAttribute' => ['thn', 'kd_rek']],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'thn' => 'Thn',
            'kd_rek' => 'Kd Rek',
            'saldo_awal' => 'Saldo Awal',
        ];
    }

    /**
     * Gets query for [[KdRek]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRek()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek']);
    }
}
