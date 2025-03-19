<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "password_asuransi".
 *
 * @property string $kd_pj
 * @property string|null $usere
 * @property string|null $passworde
 *
 * @property Penjab $kdPj
 */
class PasswordAsuransi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'password_asuransi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_pj'], 'required'],
            [['kd_pj'], 'string', 'max' => 3],
            [['usere', 'passworde'], 'string', 'max' => 700],
            [['usere', 'passworde'], 'unique', 'targetAttribute' => ['usere', 'passworde']],
            [['kd_pj'], 'unique'],
            [['kd_pj'], 'exist', 'skipOnError' => true, 'targetClass' => Penjab::class, 'targetAttribute' => ['kd_pj' => 'kd_pj']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_pj' => 'Kd Pj',
            'usere' => 'Usere',
            'passworde' => 'Passworde',
        ];
    }

    /**
     * Gets query for [[KdPj]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPj()
    {
        return $this->hasOne(Penjab::class, ['kd_pj' => 'kd_pj']);
    }
}
