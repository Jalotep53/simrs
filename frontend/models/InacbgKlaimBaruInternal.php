<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inacbg_klaim_baru_internal".
 *
 * @property string $no_sep
 * @property string|null $patient_id
 * @property string|null $admission_id
 * @property string|null $hospital_admission_id
 *
 * @property BridgingSepInternal $noSep
 */
class InacbgKlaimBaruInternal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inacbg_klaim_baru_internal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_sep'], 'required'],
            [['no_sep'], 'string', 'max' => 40],
            [['patient_id', 'admission_id', 'hospital_admission_id'], 'string', 'max' => 30],
            [['no_sep'], 'unique'],
            [['no_sep'], 'exist', 'skipOnError' => true, 'targetClass' => BridgingSepInternal::class, 'targetAttribute' => ['no_sep' => 'no_sep']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_sep' => 'No Sep',
            'patient_id' => 'Patient ID',
            'admission_id' => 'Admission ID',
            'hospital_admission_id' => 'Hospital Admission ID',
        ];
    }

    /**
     * Gets query for [[NoSep]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoSep()
    {
        return $this->hasOne(BridgingSepInternal::class, ['no_sep' => 'no_sep']);
    }
}
