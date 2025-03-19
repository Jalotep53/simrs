<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "data_triase_igddetail_skala3".
 *
 * @property string $no_rawat
 * @property string $kode_skala3
 *
 * @property MasterTriaseSkala3 $kodeSkala3
 * @property RegPeriksa $noRawat
 */
class DataTriaseIgddetailSkala3 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_triase_igddetail_skala3';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kode_skala3'], 'required'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kode_skala3'], 'string', 'max' => 3],
            [['no_rawat', 'kode_skala3'], 'unique', 'targetAttribute' => ['no_rawat', 'kode_skala3']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kode_skala3'], 'exist', 'skipOnError' => true, 'targetClass' => MasterTriaseSkala3::class, 'targetAttribute' => ['kode_skala3' => 'kode_skala3']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'kode_skala3' => 'Kode Skala3',
        ];
    }

    /**
     * Gets query for [[KodeSkala3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSkala3()
    {
        return $this->hasOne(MasterTriaseSkala3::class, ['kode_skala3' => 'kode_skala3']);
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
