<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "data_triase_igddetail_skala2".
 *
 * @property string $no_rawat
 * @property string $kode_skala2
 *
 * @property MasterTriaseSkala2 $kodeSkala2
 * @property RegPeriksa $noRawat
 */
class DataTriaseIgddetailSkala2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_triase_igddetail_skala2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kode_skala2'], 'required'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kode_skala2'], 'string', 'max' => 3],
            [['no_rawat', 'kode_skala2'], 'unique', 'targetAttribute' => ['no_rawat', 'kode_skala2']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kode_skala2'], 'exist', 'skipOnError' => true, 'targetClass' => MasterTriaseSkala2::class, 'targetAttribute' => ['kode_skala2' => 'kode_skala2']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'kode_skala2' => 'Kode Skala2',
        ];
    }

    /**
     * Gets query for [[KodeSkala2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSkala2()
    {
        return $this->hasOne(MasterTriaseSkala2::class, ['kode_skala2' => 'kode_skala2']);
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
