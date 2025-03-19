<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_akun_bankjabar".
 *
 * @property string $kd_rek
 * @property string|null $kode_bank
 *
 * @property Rekening $kdRek
 */
class SetAkunBankjabar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_akun_bankjabar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_rek'], 'required'],
            [['kd_rek'], 'string', 'max' => 15],
            [['kode_bank'], 'string', 'max' => 3],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_rek' => 'Kd Rek',
            'kode_bank' => 'Kode Bank',
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
