<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_masalah_keperawatan_mata".
 *
 * @property string $kode_masalah
 * @property string|null $nama_masalah
 *
 * @property MasterRencanaKeperawatanMata[] $masterRencanaKeperawatanMatas
 */
class MasterMasalahKeperawatanMata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_masalah_keperawatan_mata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_masalah'], 'required'],
            [['kode_masalah'], 'string', 'max' => 3],
            [['nama_masalah'], 'string', 'max' => 100],
            [['kode_masalah'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_masalah' => 'Kode Masalah',
            'nama_masalah' => 'Nama Masalah',
        ];
    }

    /**
     * Gets query for [[MasterRencanaKeperawatanMatas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMasterRencanaKeperawatanMatas()
    {
        return $this->hasMany(MasterRencanaKeperawatanMata::class, ['kode_masalah' => 'kode_masalah']);
    }
}
