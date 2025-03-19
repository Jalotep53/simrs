<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_triase_skala1".
 *
 * @property string $kode_pemeriksaan
 * @property string $kode_skala1
 * @property string $pengkajian_skala1
 *
 * @property DataTriaseIgddetailSkala1[] $dataTriaseIgddetailSkala1s
 * @property MasterTriasePemeriksaan $kodePemeriksaan
 * @property RegPeriksa[] $noRawats
 */
class MasterTriaseSkala1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_triase_skala1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_pemeriksaan', 'kode_skala1', 'pengkajian_skala1'], 'required'],
            [['kode_pemeriksaan', 'kode_skala1'], 'string', 'max' => 3],
            [['pengkajian_skala1'], 'string', 'max' => 150],
            [['kode_skala1'], 'unique'],
            [['kode_pemeriksaan'], 'exist', 'skipOnError' => true, 'targetClass' => MasterTriasePemeriksaan::class, 'targetAttribute' => ['kode_pemeriksaan' => 'kode_pemeriksaan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_pemeriksaan' => 'Kode Pemeriksaan',
            'kode_skala1' => 'Kode Skala1',
            'pengkajian_skala1' => 'Pengkajian Skala1',
        ];
    }

    /**
     * Gets query for [[DataTriaseIgddetailSkala1s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataTriaseIgddetailSkala1s()
    {
        return $this->hasMany(DataTriaseIgddetailSkala1::class, ['kode_skala1' => 'kode_skala1']);
    }

    /**
     * Gets query for [[KodePemeriksaan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodePemeriksaan()
    {
        return $this->hasOne(MasterTriasePemeriksaan::class, ['kode_pemeriksaan' => 'kode_pemeriksaan']);
    }

    /**
     * Gets query for [[NoRawats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawats()
    {
        return $this->hasMany(RegPeriksa::class, ['no_rawat' => 'no_rawat'])->viaTable('data_triase_igddetail_skala1', ['kode_skala1' => 'kode_skala1']);
    }
}
