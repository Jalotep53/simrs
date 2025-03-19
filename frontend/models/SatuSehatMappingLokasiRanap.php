<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "satu_sehat_mapping_lokasi_ranap".
 *
 * @property string $kd_kamar
 * @property string|null $id_organisasi_satusehat
 * @property string|null $id_lokasi_satusehat
 * @property string $longitude
 * @property string $latitude
 * @property string $altittude
 *
 * @property Kamar $kdKamar
 * @property SatuSehatMappingDepartemen $organisasiSatusehat
 */
class SatuSehatMappingLokasiRanap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satu_sehat_mapping_lokasi_ranap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_kamar', 'longitude', 'latitude', 'altittude'], 'required'],
            [['kd_kamar'], 'string', 'max' => 15],
            [['id_organisasi_satusehat', 'id_lokasi_satusehat'], 'string', 'max' => 40],
            [['longitude', 'latitude', 'altittude'], 'string', 'max' => 30],
            [['id_lokasi_satusehat'], 'unique'],
            [['kd_kamar'], 'unique'],
            [['kd_kamar'], 'exist', 'skipOnError' => true, 'targetClass' => Kamar::class, 'targetAttribute' => ['kd_kamar' => 'kd_kamar']],
            [['id_organisasi_satusehat'], 'exist', 'skipOnError' => true, 'targetClass' => SatuSehatMappingDepartemen::class, 'targetAttribute' => ['id_organisasi_satusehat' => 'id_organisasi_satusehat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_kamar' => 'Kd Kamar',
            'id_organisasi_satusehat' => 'Id Organisasi Satusehat',
            'id_lokasi_satusehat' => 'Id Lokasi Satusehat',
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
            'altittude' => 'Altittude',
        ];
    }

    /**
     * Gets query for [[KdKamar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdKamar()
    {
        return $this->hasOne(Kamar::class, ['kd_kamar' => 'kd_kamar']);
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
