<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inacbg_klaim_baru2".
 *
 * @property string $no_rawat
 * @property string $no_sep
 * @property string|null $patient_id
 * @property string|null $admission_id
 * @property string|null $hospital_admission_id
 *
 * @property InacbgDataTerkirim2 $inacbgDataTerkirim2
 * @property InacbgGroupingStage12 $inacbgGroupingStage12
 * @property RegPeriksa $noRawat
 */
class InacbgKlaimBaru2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inacbg_klaim_baru2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat'], 'required'],
            [['no_rawat'], 'string', 'max' => 17],
            [['no_sep'], 'string', 'max' => 40],
            [['patient_id', 'admission_id', 'hospital_admission_id'], 'string', 'max' => 30],
            [['no_sep'], 'unique'],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'no_sep' => 'No Sep',
            'patient_id' => 'Patient ID',
            'admission_id' => 'Admission ID',
            'hospital_admission_id' => 'Hospital Admission ID',
        ];
    }

    /**
     * Gets query for [[InacbgDataTerkirim2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInacbgDataTerkirim2()
    {
        return $this->hasOne(InacbgDataTerkirim2::class, ['no_sep' => 'no_sep']);
    }

    /**
     * Gets query for [[InacbgGroupingStage12]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInacbgGroupingStage12()
    {
        return $this->hasOne(InacbgGroupingStage12::class, ['no_sep' => 'no_sep']);
    }

    /**
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
