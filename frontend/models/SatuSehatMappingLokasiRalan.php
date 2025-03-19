<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "satu_sehat_mapping_lokasi_ralan".
 *
 * @property string $kd_poli
 * @property string|null $id_organisasi_satusehat
 * @property string|null $id_lokasi_satusehat
 * @property string $longitude
 * @property string $latitude
 * @property string $altittude
 *
 * @property Poliklinik $kdPoli
 * @property SatuSehatMappingDepartemen $organisasiSatusehat
 */
class SatuSehatMappingLokasiRalan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satu_sehat_mapping_lokasi_ralan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_poli', 'longitude', 'latitude', 'altittude'], 'required'],
            [['kd_poli'], 'string', 'max' => 5],
            [['id_organisasi_satusehat', 'id_lokasi_satusehat'], 'string', 'max' => 40],
            [['longitude', 'latitude', 'altittude'], 'string', 'max' => 30],
            [['id_lokasi_satusehat'], 'unique'],
            [['kd_poli'], 'unique'],
            [['kd_poli'], 'exist', 'skipOnError' => true, 'targetClass' => Poliklinik::class, 'targetAttribute' => ['kd_poli' => 'kd_poli']],
            [['id_organisasi_satusehat'], 'exist', 'skipOnError' => true, 'targetClass' => SatuSehatMappingDepartemen::class, 'targetAttribute' => ['id_organisasi_satusehat' => 'id_organisasi_satusehat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_poli' => 'Kd Poli',
            'id_organisasi_satusehat' => 'Id Organisasi Satusehat',
            'id_lokasi_satusehat' => 'Id Lokasi Satusehat',
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
            'altittude' => 'Altittude',
        ];
    }

    /**
     * Gets query for [[KdPoli]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPoli()
    {
        return $this->hasOne(Poliklinik::class, ['kd_poli' => 'kd_poli']);
    }

    /**
     * Gets query for [[OrganisasiSatusehat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrganisasiSatusehat()
    {
        return $this->hasOne(SatuSehatMappingDepartemen::class, ['id_organisasi_satusehat' => 'id_organisasi_satusehat']);
    }
}
