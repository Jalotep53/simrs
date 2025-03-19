<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "data_triase_igddetail_skala1".
 *
 * @property string $no_rawat
 * @property string $kode_skala1
 *
 * @property MasterTriaseSkala1 $kodeSkala1
 * @property RegPeriksa $noRawat
 */
class DataTriaseIgddetailSkala1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_triase_igddetail_skala1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kode_skala1'], 'required'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kode_skala1'], 'string', 'max' => 3],
            [['no_rawat', 'kode_skala1'], 'unique', 'targetAttribute' => ['no_rawat', 'kode_skala1']],
            [['kode_skala1'], 'exist', 'skipOnError' => true, 'targetClass' => MasterTriaseSkala1::class, 'targetAttribute' => ['kode_skala1' => 'kode_skala1']],
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
            'kode_skala1' => 'Kode Skala1',
        ];
    }

    /**
     * Gets query for [[KodeSkala1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSkala1()
    {
        return $this->hasOne(MasterTriaseSkala1::class, ['kode_skala1' => 'kode_skala1']);
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
