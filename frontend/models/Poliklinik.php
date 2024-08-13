<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "poliklinik".
 *
 * @property string $kd_poli
 * @property string|null $nm_poli
 * @property float $registrasi
 * @property float $registrasilama
 * @property string $status
 *
 * @property BookingPeriksa[] $bookingPeriksas
 * @property BookingRegistrasi[] $bookingRegistrasis
 * @property InhealthMapingPoli $inhealthMapingPoli
 * @property Jadwal[] $jadwals
 * @property JnsPerawatan[] $jnsPerawatans
 * @property Bangsal[] $kdBangsals
 * @property MapingPoliBpjs $mapingPoliBpjs
 * @property MapingPoliklinikPcare $mapingPoliklinikPcare
 * @property RegPeriksa[] $regPeriksas
 * @property RujukanInternalPoli[] $rujukanInternalPolis
 * @property SatuSehatMappingLokasiRalan $satuSehatMappingLokasiRalan
 * @property SetDepoRalan[] $setDepoRalans
 */
class Poliklinik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'poliklinik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_poli', 'registrasi', 'registrasilama', 'status'], 'required'],
            [['registrasi', 'registrasilama'], 'number'],
            [['status'], 'string'],
            [['kd_poli'], 'string', 'max' => 5],
            [['nm_poli'], 'string', 'max' => 50],
            [['kd_poli'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_poli' => 'Kd Poli',
            'nm_poli' => 'Nm Poli',
            'registrasi' => 'Registrasi',
            'registrasilama' => 'Registrasilama',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[BookingPeriksas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookingPeriksas()
    {
        return $this->hasMany(BookingPeriksa::class, ['kd_poli' => 'kd_poli']);
    }

    /**
     * Gets query for [[BookingRegistrasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookingRegistrasis()
    {
        return $this->hasMany(BookingRegistrasi::class, ['kd_poli' => 'kd_poli']);
    }

    /**
     * Gets query for [[InhealthMapingPoli]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInhealthMapingPoli()
    {
        return $this->hasOne(InhealthMapingPoli::class, ['kd_poli_rs' => 'kd_poli']);
    }

    /**
     * Gets query for [[Jadwals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJadwals()
    {
        return $this->hasMany(Jadwal::class, ['kd_poli' => 'kd_poli']);
    }

    /**
     * Gets query for [[JnsPerawatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJnsPerawatans()
    {
        return $this->hasMany(JnsPerawatan::class, ['kd_poli' => 'kd_poli']);
    }

    /**
     * Gets query for [[KdBangsals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdBangsals()
    {
        return $this->hasMany(Bangsal::class, ['kd_bangsal' => 'kd_bangsal'])->viaTable('set_depo_ralan', ['kd_poli' => 'kd_poli']);
    }

    /**
     * Gets query for [[MapingPoliBpjs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMapingPoliBpjs()
    {
        return $this->hasOne(MapingPoliBpjs::class, ['kd_poli_rs' => 'kd_poli']);
    }

    /**
     * Gets query for [[MapingPoliklinikPcare]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMapingPoliklinikPcare()
    {
        return $this->hasOne(MapingPoliklinikPcare::class, ['kd_poli_rs' => 'kd_poli']);
    }

    /**
     * Gets query for [[RegPeriksas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegPeriksas()
    {
        return $this->hasMany(RegPeriksa::class, ['kd_poli' => 'kd_poli']);
    }

    /**
     * Gets query for [[RujukanInternalPolis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRujukanInternalPolis()
    {
        return $this->hasMany(RujukanInternalPoli::class, ['kd_poli' => 'kd_poli']);
    }

    /**
     * Gets query for [[SatuSehatMappingLokasiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMappingLokasiRalan()
    {
        return $this->hasOne(SatuSehatMappingLokasiRalan::class, ['kd_poli' => 'kd_poli']);
    }

    /**
     * Gets query for [[SetDepoRalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetDepoRalans()
    {
        return $this->hasMany(SetDepoRalan::class, ['kd_poli' => 'kd_poli']);
    }
}
