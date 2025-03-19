<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_akun_mandiri".
 *
 * @property string $kd_rek
 * @property string $kd_rek_biaya
 * @property string|null $username
 * @property string|null $password
 * @property string|null $client_id
 * @property string|null $client_secret
 * @property string $kode_rs
 * @property string $kode_mcm
 * @property string $no_rekening
 *
 * @property Rekening $kdRek
 * @property Rekening $kdRek0
 */
class SetAkunMandiri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_akun_mandiri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_rek', 'kd_rek_biaya', 'kode_rs', 'kode_mcm', 'no_rekening'], 'required'],
            [['kd_rek', 'kd_rek_biaya'], 'string', 'max' => 15],
            [['username', 'password', 'client_id', 'client_secret'], 'string', 'max' => 700],
            [['kode_rs'], 'string', 'max' => 5],
            [['kode_mcm'], 'string', 'max' => 8],
            [['no_rekening'], 'string', 'max' => 30],
            [['kd_rek'], 'unique'],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
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
            'kd_rek_biaya' => 'Kd Rek Biaya',
            'username' => 'Username',
            'password' => 'Password',
            'client_id' => 'Client ID',
            'client_secret' => 'Client Secret',
            'kode_rs' => 'Kode Rs',
            'kode_mcm' => 'Kode Mcm',
            'no_rekening' => 'No Rekening',
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

    /**
     * Gets query for [[KdRek0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRek0()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek']);
    }
}
