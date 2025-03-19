<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_akun_bankbri".
 *
 * @property string $kd_rek
 * @property string|null $consumer_key
 * @property string|null $consumer_secret
 * @property string|null $institution_code
 * @property string|null $briva_no
 * @property string $urlapi
 *
 * @property Rekening $kdRek
 */
class SetAkunBankbri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_akun_bankbri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_rek', 'urlapi'], 'required'],
            [['kd_rek'], 'string', 'max' => 15],
            [['consumer_key', 'consumer_secret', 'institution_code', 'briva_no', 'urlapi'], 'string', 'max' => 700],
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
            'consumer_key' => 'Consumer Key',
            'consumer_secret' => 'Consumer Secret',
            'institution_code' => 'Institution Code',
            'briva_no' => 'Briva No',
            'urlapi' => 'Urlapi',
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
