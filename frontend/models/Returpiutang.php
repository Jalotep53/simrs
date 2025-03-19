<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "returpiutang".
 *
 * @property string $no_retur_piutang
 * @property string|null $tgl_retur
 * @property string|null $nip
 * @property string $no_rkm_medis
 * @property string $kd_bangsal
 *
 * @property Detreturpiutang[] $detreturpiutangs
 * @property Bangsal $kdBangsal
 * @property Petugas $nip0
 * @property Pasien $noRkmMedis
 */
class Returpiutang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'returpiutang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_retur_piutang', 'no_rkm_medis', 'kd_bangsal'], 'required'],
            [['tgl_retur'], 'safe'],
            [['no_retur_piutang', 'nip'], 'string', 'max' => 20],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['kd_bangsal'], 'string', 'max' => 5],
            [['no_retur_piutang'], 'unique'],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_retur_piutang' => 'No Retur Piutang',
            'tgl_retur' => 'Tgl Retur',
            'nip' => 'Nip',
            'no_rkm_medis' => 'No Rkm Medis',
            'kd_bangsal' => 'Kd Bangsal',
        ];
    }

    /**
     * Gets query for [[Detreturpiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetreturpiutangs()
    {
        return $this->hasMany(Detreturpiutang::class, ['no_retur_piutang' => 'no_retur_piutang']);
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
