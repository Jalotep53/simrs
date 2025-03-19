<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_triase_skala5".
 *
 * @property string $kode_pemeriksaan
 * @property string $kode_skala5
 * @property string $pengkajian_skala5
 *
 * @property DataTriaseIgddetailSkala5[] $dataTriaseIgddetailSkala5s
 * @property MasterTriasePemeriksaan $kodePemeriksaan
 * @property RegPeriksa[] $noRawats
 */
class MasterTriaseSkala5 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_triase_skala5';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_pemeriksaan', 'kode_skala5', 'pengkajian_skala5'], 'required'],
            [['kode_pemeriksaan', 'kode_skala5'], 'string', 'max' => 3],
            [['pengkajian_skala5'], 'string', 'max' => 150],
            [['kode_skala5'], 'unique'],
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
            'kode_skala5' => 'Kode Skala5',
            'pengkajian_skala5' => 'Pengkajian Skala5',
        ];
    }

    /**
     * Gets query for [[DataTriaseIgddetailSkala5s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataTriaseIgddetailSkala5s()
    {
        return $this->hasMany(DataTriaseIgddetailSkala5::class, ['kode_skala5' => 'kode_skala5']);
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
        return $this->hasMany(RegPeriksa::class, ['no_rawat' => 'no_rawat'])->viaTable('data_triase_igddetail_skala5', ['kode_skala5' => 'kode_skala5']);
    }
}
