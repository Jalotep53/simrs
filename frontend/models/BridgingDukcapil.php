<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bridging_dukcapil".
 *
 * @property string $no_rkm_medis
 * @property string|null $no_id
 *
 * @property Pasien $noRkmMedis
 */
class BridgingDukcapil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bridging_dukcapil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis'], 'required'],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['no_id'], 'string', 'max' => 10],
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
            'no_id' => 'No ID',
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
