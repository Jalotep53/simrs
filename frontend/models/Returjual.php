<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "returjual".
 *
 * @property string $no_retur_jual
 * @property string|null $tgl_retur
 * @property string|null $nip
 * @property string $no_rkm_medis
 * @property string $kd_bangsal
 *
 * @property Detreturjual[] $detreturjuals
 * @property Bangsal $kdBangsal
 * @property Petugas $nip0
 * @property Pasien $noRkmMedis
 */
class Returjual extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'returjual';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_retur_jual', 'no_rkm_medis', 'kd_bangsal'], 'required'],
            [['tgl_retur'], 'safe'],
            [['no_retur_jual', 'nip'], 'string', 'max' => 20],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['kd_bangsal'], 'string', 'max' => 5],
            [['no_retur_jual'], 'unique'],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_retur_jual' => 'No Retur Jual',
            'tgl_retur' => 'Tgl Retur',
            'nip' => 'Nip',
            'no_rkm_medis' => 'No Rkm Medis',
            'kd_bangsal' => 'Kd Bangsal',
        ];
    }

    /**
     * Gets query for [[Detreturjuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetreturjuals()
    {
        return $this->hasMany(Detreturjual::class, ['no_retur_jual' => 'no_retur_jual']);
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
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip']);
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
