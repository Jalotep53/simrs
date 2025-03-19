<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "personal_pasien".
 *
 * @property string $no_rkm_medis
 * @property string|null $gambar
 * @property string|null $password
 *
 * @property Pasien $noRkmMedis
 */
class PersonalPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personal_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis'], 'required'],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['gambar', 'password'], 'string', 'max' => 1000],
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
            'gambar' => 'Gambar',
            'password' => 'Password',
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
