<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "riwayat_imunisasi".
 *
 * @property string $no_rkm_medis
 * @property string $kode_imunisasi
 * @property int $no_imunisasi
 *
 * @property MasterImunisasi $kodeImunisasi
 * @property Pasien $noRkmMedis
 */
class RiwayatImunisasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_imunisasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis', 'kode_imunisasi', 'no_imunisasi'], 'required'],
            [['no_imunisasi'], 'integer'],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['kode_imunisasi'], 'string', 'max' => 3],
            [['no_rkm_medis', 'kode_imunisasi', 'no_imunisasi'], 'unique', 'targetAttribute' => ['no_rkm_medis', 'kode_imunisasi', 'no_imunisasi']],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
            [['kode_imunisasi'], 'exist', 'skipOnError' => true, 'targetClass' => MasterImunisasi::class, 'targetAttribute' => ['kode_imunisasi' => 'kode_imunisasi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rkm_medis' => 'No Rkm Medis',
            'kode_imunisasi' => 'Kode Imunisasi',
            'no_imunisasi' => 'No Imunisasi',
        ];
    }

    /**
     * Gets query for [[KodeImunisasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeImunisasi()
    {
        return $this->hasOne(MasterImunisasi::class, ['kode_imunisasi' => 'kode_imunisasi']);
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
