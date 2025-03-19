<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "data_triase_igddetail_skala4".
 *
 * @property string $no_rawat
 * @property string $kode_skala4
 *
 * @property MasterTriaseSkala4 $kodeSkala4
 * @property RegPeriksa $noRawat
 */
class DataTriaseIgddetailSkala4 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_triase_igddetail_skala4';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kode_skala4'], 'required'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kode_skala4'], 'string', 'max' => 3],
            [['no_rawat', 'kode_skala4'], 'unique', 'targetAttribute' => ['no_rawat', 'kode_skala4']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kode_skala4'], 'exist', 'skipOnError' => true, 'targetClass' => MasterTriaseSkala4::class, 'targetAttribute' => ['kode_skala4' => 'kode_skala4']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'kode_skala4' => 'Kode Skala4',
        ];
    }

    /**
     * Gets query for [[KodeSkala4]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSkala4()
    {
        return $this->hasOne(MasterTriaseSkala4::class, ['kode_skala4' => 'kode_skala4']);
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
