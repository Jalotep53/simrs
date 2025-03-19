<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_akun_bankjateng".
 *
 * @property string $kd_rek
 * @property string|null $usere
 * @property string|null $passworde
 *
 * @property Rekening $kdRek
 */
class SetAkunBankjateng extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_akun_bankjateng';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_rek'], 'required'],
            [['kd_rek'], 'string', 'max' => 15],
            [['usere', 'passworde'], 'string', 'max' => 700],
            [['usere', 'passworde'], 'unique', 'targetAttribute' => ['usere', 'passworde']],
            [['kd_rek'], 'unique'],
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
            'usere' => 'Usere',
            'passworde' => 'Passworde',
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
