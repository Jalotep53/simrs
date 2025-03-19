<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "satu_sehat_mapping_departemen".
 *
 * @property string $dep_id
 * @property string|null $id_organisasi_satusehat
 *
 * @property Departemen $dep
 * @property SatuSehatMappingLokasiDepoFarmasi[] $satuSehatMappingLokasiDepoFarmasis
 * @property SatuSehatMappingLokasiRalan[] $satuSehatMappingLokasiRalans
 * @property SatuSehatMappingLokasiRanap[] $satuSehatMappingLokasiRanaps
 * @property SatuSehatMappingLokasiRuanglabmb[] $satuSehatMappingLokasiRuanglabmbs
 * @property SatuSehatMappingLokasiRuanglabpa[] $satuSehatMappingLokasiRuanglabpas
 * @property SatuSehatMappingLokasiRuanglab[] $satuSehatMappingLokasiRuanglabs
 * @property SatuSehatMappingLokasiRuangok[] $satuSehatMappingLokasiRuangoks
 * @property SatuSehatMappingLokasiRuangrad[] $satuSehatMappingLokasiRuangrads
 */
class SatuSehatMappingDepartemen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satu_sehat_mapping_departemen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dep_id'], 'required'],
            [['dep_id'], 'string', 'max' => 4],
            [['id_organisasi_satusehat'], 'string', 'max' => 40],
            [['id_organisasi_satusehat'], 'unique'],
            [['dep_id'], 'unique'],
            [['dep_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departemen::class, 'targetAttribute' => ['dep_id' => 'dep_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dep_id' => 'Dep ID',
            'id_organisasi_satusehat' => 'Id Organisasi Satusehat',
        ];
    }

    /**
     * Gets query for [[Dep]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDep()
    {
        return $this->hasOne(Departemen::class, ['dep_id' => 'dep_id']);
    }

    /**
     * Gets query for [[SatuSehatMappingLokasiDepoFarmasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMappingLokasiDepoFarmasis()
    {
        return $this->hasMany(SatuSehatMappingLokasiDepoFarmasi::class, ['id_organisasi_satusehat' => 'id_organisasi_satusehat']);
    }

    /**
     * Gets query for [[SatuSehatMappingLokasiRalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMappingLokasiRalans()
    {
        return $this->hasMany(SatuSehatMappingLokasiRalan::class, ['id_organisasi_satusehat' => 'id_organisasi_satusehat']);
    }

    /**
     * Gets query for [[SatuSehatMappingLokasiRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMappingLokasiRanaps()
    {
        return $this->hasMany(SatuSehatMappingLokasiRanap::class, ['id_organisasi_satusehat' => 'id_organisasi_satusehat']);
    }

    /**
     * Gets query for [[SatuSehatMappingLokasiRuanglabmbs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMappingLokasiRuanglabmbs()
    {
        return $this->hasMany(SatuSehatMappingLokasiRuanglabmb::class, ['id_organisasi_satusehat' => 'id_organisasi_satusehat']);
    }

    /**
     * Gets query for [[SatuSehatMappingLokasiRuanglabpas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMappingLokasiRuanglabpas()
    {
        return $this->hasMany(SatuSehatMappingLokasiRuanglabpa::class, ['id_organisasi_satusehat' => 'id_organisasi_satusehat']);
    }

    /**
     * Gets query for [[SatuSehatMappingLokasiRuanglabs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMappingLokasiRuanglabs()
    {
        return $this->hasMany(SatuSehatMappingLokasiRuanglab::class, ['id_organisasi_satusehat' => 'id_organisasi_satusehat']);
    }

    /**
     * Gets query for [[SatuSehatMappingLokasiRuangoks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMappingLokasiRuangoks()
    {
        return $this->hasMany(SatuSehatMappingLokasiRuangok::class, ['id_organisasi_satusehat' => 'id_organisasi_satusehat']);
    }

    /**
     * Gets query for [[SatuSehatMappingLokasiRuangrads]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMappingLokasiRuangrads()
    {
        return $this->hasMany(SatuSehatMappingLokasiRuangrad::class, ['id_organisasi_satusehat' => 'id_organisasi_satusehat']);
    }
}
