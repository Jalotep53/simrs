<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_triase_skala4".
 *
 * @property string $kode_pemeriksaan
 * @property string $kode_skala4
 * @property string $pengkajian_skala4
 *
 * @property DataTriaseIgddetailSkala4[] $dataTriaseIgddetailSkala4s
 * @property MasterTriasePemeriksaan $kodePemeriksaan
 * @property RegPeriksa[] $noRawats
 */
class MasterTriaseSkala4 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_triase_skala4';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_pemeriksaan', 'kode_skala4', 'pengkajian_skala4'], 'required'],
            [['kode_pemeriksaan', 'kode_skala4'], 'string', 'max' => 3],
            [['pengkajian_skala4'], 'string', 'max' => 150],
            [['kode_skala4'], 'unique'],
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
            'kode_skala4' => 'Kode Skala4',
            'pengkajian_skala4' => 'Pengkajian Skala4',
        ];
    }

    /**
     * Gets query for [[DataTriaseIgddetailSkala4s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataTriaseIgddetailSkala4s()
    {
        return $this->hasMany(DataTriaseIgddetailSkala4::class, ['kode_skala4' => 'kode_skala4']);
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
        return $this->hasMany(RegPeriksa::class, ['no_rawat' => 'no_rawat'])->viaTable('data_triase_igddetail_skala4', ['kode_skala4' => 'kode_skala4']);
    }
}
