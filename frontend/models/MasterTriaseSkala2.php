<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_triase_skala2".
 *
 * @property string $kode_pemeriksaan
 * @property string $kode_skala2
 * @property string $pengkajian_skala2
 *
 * @property DataTriaseIgddetailSkala2[] $dataTriaseIgddetailSkala2s
 * @property MasterTriasePemeriksaan $kodePemeriksaan
 * @property RegPeriksa[] $noRawats
 */
class MasterTriaseSkala2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_triase_skala2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_pemeriksaan', 'kode_skala2', 'pengkajian_skala2'], 'required'],
            [['kode_pemeriksaan', 'kode_skala2'], 'string', 'max' => 3],
            [['pengkajian_skala2'], 'string', 'max' => 150],
            [['kode_skala2'], 'unique'],
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
            'kode_skala2' => 'Kode Skala2',
            'pengkajian_skala2' => 'Pengkajian Skala2',
        ];
    }

    /**
     * Gets query for [[DataTriaseIgddetailSkala2s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataTriaseIgddetailSkala2s()
    {
        return $this->hasMany(DataTriaseIgddetailSkala2::class, ['kode_skala2' => 'kode_skala2']);
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
        return $this->hasMany(RegPeriksa::class, ['no_rawat' => 'no_rawat'])->viaTable('data_triase_igddetail_skala2', ['kode_skala2' => 'kode_skala2']);
    }
}
