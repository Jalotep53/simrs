<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "satu_sehat_mapping_lokasi_ruangok".
 *
 * @property string|null $id_organisasi_satusehat
 * @property string $id_lokasi_satusehat
 * @property string $longitude
 * @property string $latitude
 * @property string $altittude
 *
 * @property SatuSehatMappingDepartemen $organisasiSatusehat
 */
class SatuSehatMappingLokasiRuangok extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satu_sehat_mapping_lokasi_ruangok';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_lokasi_satusehat', 'longitude', 'latitude', 'altittude'], 'required'],
            [['id_organisasi_satusehat', 'id_lokasi_satusehat'], 'string', 'max' => 40],
            [['longitude', 'latitude', 'altittude'], 'string', 'max' => 30],
            [['id_lokasi_satusehat'], 'unique'],
            [['id_organisasi_satusehat'], 'exist', 'skipOnError' => true, 'targetClass' => SatuSehatMappingDepartemen::class, 'targetAttribute' => ['id_organisasi_satusehat' => 'id_organisasi_satusehat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_organisasi_satusehat' => 'Id Organisasi Satusehat',
            'id_lokasi_satusehat' => 'Id Lokasi Satusehat',
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
            'altittude' => 'Altittude',
        ];
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
