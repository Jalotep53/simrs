<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "referensi_mobilejkn_bpjs_batal".
 *
 * @property string $no_rkm_medis
 * @property string|null $no_rawat_batal
 * @property string $nomorreferensi
 * @property string $tanggalbatal
 * @property string|null $keterangan
 * @property string $statuskirim
 * @property string $nobooking
 *
 * @property Pasien $noRkmMedis
 * @property ReferensiMobilejknBpjs $nobooking0
 */
class ReferensiMobilejknBpjsBatal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'referensi_mobilejkn_bpjs_batal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis', 'nomorreferensi', 'tanggalbatal', 'statuskirim', 'nobooking'], 'required'],
            [['tanggalbatal'], 'safe'],
            [['statuskirim'], 'string'],
            [['no_rkm_medis', 'nobooking'], 'string', 'max' => 15],
            [['no_rawat_batal'], 'string', 'max' => 17],
            [['nomorreferensi'], 'string', 'max' => 40],
            [['keterangan'], 'string', 'max' => 200],
            [['nobooking'], 'unique'],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
            [['nobooking'], 'exist', 'skipOnError' => true, 'targetClass' => ReferensiMobilejknBpjs::class, 'targetAttribute' => ['nobooking' => 'nobooking']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rkm_medis' => 'No Rkm Medis',
            'no_rawat_batal' => 'No Rawat Batal',
            'nomorreferensi' => 'Nomorreferensi',
            'tanggalbatal' => 'Tanggalbatal',
            'keterangan' => 'Keterangan',
            'statuskirim' => 'Statuskirim',
            'nobooking' => 'Nobooking',
        ];
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

    /**
     * Gets query for [[Nobooking0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNobooking0()
    {
        return $this->hasOne(ReferensiMobilejknBpjs::class, ['nobooking' => 'nobooking']);
    }
}
