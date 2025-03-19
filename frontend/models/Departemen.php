<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "departemen".
 *
 * @property string $dep_id
 * @property string $nama
 *
 * @property Indekref[] $indekrefs
 * @property Indexins $indexins
 * @property Indextotal[] $indextotals
 * @property JamJaga[] $jamJagas
 * @property Pegawai[] $pegawais
 * @property Pegawai[] $pegawais0
 * @property SatuSehatMappingDepartemen $satuSehatMappingDepartemen
 */
class Departemen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departemen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dep_id', 'nama'], 'required'],
            [['dep_id'], 'string', 'max' => 4],
            [['nama'], 'string', 'max' => 25],
            [['dep_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dep_id' => 'Dep ID',
            'nama' => 'Nama',
        ];
    }

    /**
     * Gets query for [[Indekrefs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIndekrefs()
    {
        return $this->hasMany(Indekref::class, ['kdindex' => 'dep_id']);
    }

    /**
     * Gets query for [[Indexins]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIndexins()
    {
        return $this->hasOne(Indexins::class, ['dep_id' => 'dep_id']);
    }

    /**
     * Gets query for [[Indextotals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIndextotals()
    {
        return $this->hasMany(Indextotal::class, ['kdindex' => 'dep_id']);
    }

    /**
     * Gets query for [[JamJagas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJamJagas()
    {
        return $this->hasMany(JamJaga::class, ['dep_id' => 'dep_id']);
    }

    /**
     * Gets query for [[Pegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais()
    {
        return $this->hasMany(Pegawai::class, ['departemen' => 'dep_id']);
    }

    /**
     * Gets query for [[Pegawais0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais0()
    {
        return $this->hasMany(Pegawai::class, ['indexins' => 'dep_id']);
    }

    /**
     * Gets query for [[SatuSehatMappingDepartemen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMappingDepartemen()
    {
        return $this->hasOne(SatuSehatMappingDepartemen::class, ['dep_id' => 'dep_id']);
    }
}
