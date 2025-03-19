<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "satu_sehat_mapping_lokasi_depo_farmasi".
 *
 * @property string $kd_bangsal
 * @property string|null $id_organisasi_satusehat
 * @property string|null $id_lokasi_satusehat
 * @property string $longitude
 * @property string $latitude
 * @property string $altittude
 *
 * @property Bangsal $kdBangsal
 * @property SatuSehatMappingDepartemen $organisasiSatusehat
 */
class SatuSehatMappingLokasiDepoFarmasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satu_sehat_mapping_lokasi_depo_farmasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_bangsal', 'longitude', 'latitude', 'altittude'], 'required'],
            [['kd_bangsal'], 'string', 'max' => 5],
            [['id_organisasi_satusehat', 'id_lokasi_satusehat'], 'string', 'max' => 40],
            [['longitude', 'latitude', 'altittude'], 'string', 'max' => 30],
            [['id_lokasi_satusehat'], 'unique'],
            [['kd_bangsal'], 'unique'],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
            [['id_organisasi_satusehat'], 'exist', 'skipOnError' => true, 'targetClass' => SatuSehatMappingDepartemen::class, 'targetAttribute' => ['id_organisasi_satusehat' => 'id_organisasi_satusehat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_bangsal' => 'Kd Bangsal',
            'id_organisasi_satusehat' => 'Id Organisasi Satusehat',
            'id_lokasi_satusehat' => 'Id Lokasi Satusehat',
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
            'altittude' => 'Altittude',
        ];
    }

    /**
     * Gets query for [[KdBangsal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdBangsal()
    {
        return $this->hasOne(Bangsal::class, ['kd_bangsal' => 'kd_bangsal']);
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
