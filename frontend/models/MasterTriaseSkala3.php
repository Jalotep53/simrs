<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_triase_skala3".
 *
 * @property string $kode_pemeriksaan
 * @property string $kode_skala3
 * @property string $pengkajian_skala3
 *
 * @property DataTriaseIgddetailSkala3[] $dataTriaseIgddetailSkala3s
 * @property MasterTriasePemeriksaan $kodePemeriksaan
 * @property RegPeriksa[] $noRawats
 */
class MasterTriaseSkala3 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_triase_skala3';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_pemeriksaan', 'kode_skala3', 'pengkajian_skala3'], 'required'],
            [['kode_pemeriksaan', 'kode_skala3'], 'string', 'max' => 3],
            [['pengkajian_skala3'], 'string', 'max' => 150],
            [['kode_skala3'], 'unique'],
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
            'kode_skala3' => 'Kode Skala3',
            'pengkajian_skala3' => 'Pengkajian Skala3',
        ];
    }

    /**
     * Gets query for [[DataTriaseIgddetailSkala3s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataTriaseIgddetailSkala3s()
    {
        return $this->hasMany(DataTriaseIgddetailSkala3::class, ['kode_skala3' => 'kode_skala3']);
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
        return $this->hasMany(RegPeriksa::class, ['no_rawat' => 'no_rawat'])->viaTable('data_triase_igddetail_skala3', ['kode_skala3' => 'kode_skala3']);
    }
}
