<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_triase_pemeriksaan".
 *
 * @property string $kode_pemeriksaan
 * @property string|null $nama_pemeriksaan
 *
 * @property MasterTriaseSkala1[] $masterTriaseSkala1s
 * @property MasterTriaseSkala2[] $masterTriaseSkala2s
 * @property MasterTriaseSkala3[] $masterTriaseSkala3s
 * @property MasterTriaseSkala4[] $masterTriaseSkala4s
 * @property MasterTriaseSkala5[] $masterTriaseSkala5s
 */
class MasterTriasePemeriksaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_triase_pemeriksaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_pemeriksaan'], 'required'],
            [['kode_pemeriksaan'], 'string', 'max' => 3],
            [['nama_pemeriksaan'], 'string', 'max' => 150],
            [['kode_pemeriksaan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_pemeriksaan' => 'Kode Pemeriksaan',
            'nama_pemeriksaan' => 'Nama Pemeriksaan',
        ];
    }

    /**
     * Gets query for [[MasterTriaseSkala1s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMasterTriaseSkala1s()
    {
        return $this->hasMany(MasterTriaseSkala1::class, ['kode_pemeriksaan' => 'kode_pemeriksaan']);
    }

    /**
     * Gets query for [[MasterTriaseSkala2s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMasterTriaseSkala2s()
    {
        return $this->hasMany(MasterTriaseSkala2::class, ['kode_pemeriksaan' => 'kode_pemeriksaan']);
    }

    /**
     * Gets query for [[MasterTriaseSkala3s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMasterTriaseSkala3s()
    {
        return $this->hasMany(MasterTriaseSkala3::class, ['kode_pemeriksaan' => 'kode_pemeriksaan']);
    }

    /**
     * Gets query for [[MasterTriaseSkala4s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMasterTriaseSkala4s()
    {
        return $this->hasMany(MasterTriaseSkala4::class, ['kode_pemeriksaan' => 'kode_pemeriksaan']);
    }

    /**
     * Gets query for [[MasterTriaseSkala5s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMasterTriaseSkala5s()
    {
        return $this->hasMany(MasterTriaseSkala5::class, ['kode_pemeriksaan' => 'kode_pemeriksaan']);
    }
}
