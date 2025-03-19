<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "data_triase_igddetail_skala5".
 *
 * @property string $no_rawat
 * @property string $kode_skala5
 *
 * @property MasterTriaseSkala5 $kodeSkala5
 * @property RegPeriksa $noRawat
 */
class DataTriaseIgddetailSkala5 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_triase_igddetail_skala5';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kode_skala5'], 'required'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kode_skala5'], 'string', 'max' => 3],
            [['no_rawat', 'kode_skala5'], 'unique', 'targetAttribute' => ['no_rawat', 'kode_skala5']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kode_skala5'], 'exist', 'skipOnError' => true, 'targetClass' => MasterTriaseSkala5::class, 'targetAttribute' => ['kode_skala5' => 'kode_skala5']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'kode_skala5' => 'Kode Skala5',
        ];
    }

    /**
     * Gets query for [[KodeSkala5]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSkala5()
    {
        return $this->hasOne(MasterTriaseSkala5::class, ['kode_skala5' => 'kode_skala5']);
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
