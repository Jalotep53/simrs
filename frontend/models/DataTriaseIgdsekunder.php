<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "data_triase_igdsekunder".
 *
 * @property string $no_rawat
 * @property string $anamnesa_singkat
 * @property string $catatan
 * @property string $plan
 * @property string $tanggaltriase
 * @property string $nik
 *
 * @property Pegawai $nik0
 * @property RegPeriksa $noRawat
 */
class DataTriaseIgdsekunder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_triase_igdsekunder';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'anamnesa_singkat', 'catatan', 'plan', 'tanggaltriase', 'nik'], 'required'],
            [['plan'], 'string'],
            [['tanggaltriase'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['anamnesa_singkat'], 'string', 'max' => 400],
            [['catatan'], 'string', 'max' => 100],
            [['nik'], 'string', 'max' => 20],
            [['no_rawat'], 'unique'],
            [['nik'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nik' => 'nik']],
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
            'anamnesa_singkat' => 'Anamnesa Singkat',
            'catatan' => 'Catatan',
            'plan' => 'Plan',
            'tanggaltriase' => 'Tanggaltriase',
            'nik' => 'Nik',
        ];
    }

    /**
     * Gets query for [[Nik0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNik0()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nik']);
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
