<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sidikjaripasien".
 *
 * @property string $no_rkm_medis
 * @property string $sidikjari
 *
 * @property Pasien $noRkmMedis
 */
class Sidikjaripasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sidikjaripasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis', 'sidikjari'], 'required'],
            [['sidikjari'], 'string'],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['no_rkm_medis'], 'unique'],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rkm_medis' => 'No Rkm Medis',
            'sidikjari' => 'Sidikjari',
        ];
    }

    /**
     * Gets query for [[NoRkmMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRkmMedis()
    {
        return $this->hasOne(Pasien::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }
}
