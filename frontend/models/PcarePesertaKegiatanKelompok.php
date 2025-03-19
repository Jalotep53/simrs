<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pcare_peserta_kegiatan_kelompok".
 *
 * @property string $eduId
 * @property string $no_rkm_medis
 *
 * @property PcareKegiatanKelompok $edu
 * @property Pasien $noRkmMedis
 */
class PcarePesertaKegiatanKelompok extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pcare_peserta_kegiatan_kelompok';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['eduId', 'no_rkm_medis'], 'required'],
            [['eduId', 'no_rkm_medis'], 'string', 'max' => 15],
            [['eduId', 'no_rkm_medis'], 'unique', 'targetAttribute' => ['eduId', 'no_rkm_medis']],
            [['eduId'], 'exist', 'skipOnError' => true, 'targetClass' => PcareKegiatanKelompok::class, 'targetAttribute' => ['eduId' => 'eduId']],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'eduId' => 'Edu ID',
            'no_rkm_medis' => 'No Rkm Medis',
        ];
    }

    /**
     * Gets query for [[Edu]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEdu()
    {
        return $this->hasOne(PcareKegiatanKelompok::class, ['eduId' => 'eduId']);
    }

    /**
     * Gets query for [[NoRkmMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRkmMedis()
    {
        return $this->hasOne(Pasien::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }
}
