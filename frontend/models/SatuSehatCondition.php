<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "satu_sehat_condition".
 *
 * @property string $no_rawat
 * @property string $kd_penyakit
 * @property string $status
 * @property string|null $id_condition
 *
 * @property Penyakit $kdPenyakit
 * @property RegPeriksa $noRawat
 */
class SatuSehatCondition extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satu_sehat_condition';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kd_penyakit', 'status'], 'required'],
            [['status'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_penyakit'], 'string', 'max' => 15],
            [['id_condition'], 'string', 'max' => 40],
            [['no_rawat', 'kd_penyakit', 'status'], 'unique', 'targetAttribute' => ['no_rawat', 'kd_penyakit', 'status']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_penyakit'], 'exist', 'skipOnError' => true, 'targetClass' => Penyakit::class, 'targetAttribute' => ['kd_penyakit' => 'kd_penyakit']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'kd_penyakit' => 'Kd Penyakit',
            'status' => 'Status',
            'id_condition' => 'Id Condition',
        ];
    }

    /**
     * Gets query for [[KdPenyakit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPenyakit()
    {
        return $this->hasOne(Penyakit::class, ['kd_penyakit' => 'kd_penyakit']);
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
