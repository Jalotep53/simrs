<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "piutang_pasien".
 *
 * @property string $no_rawat
 * @property string|null $tgl_piutang
 * @property string|null $no_rkm_medis
 * @property string $status
 * @property float|null $totalpiutang
 * @property float|null $uangmuka
 * @property float $sisapiutang
 * @property string $tgltempo
 *
 * @property RegPeriksa $noRawat
 * @property Pasien $noRkmMedis
 */
class PiutangPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'piutang_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'status', 'sisapiutang', 'tgltempo'], 'required'],
            [['tgl_piutang', 'tgltempo'], 'safe'],
            [['status'], 'string'],
            [['totalpiutang', 'uangmuka', 'sisapiutang'], 'number'],
            [['no_rawat'], 'string', 'max' => 17],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['no_rawat'], 'unique'],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tgl_piutang' => 'Tgl Piutang',
            'no_rkm_medis' => 'No Rkm Medis',
            'status' => 'Status',
            'totalpiutang' => 'Totalpiutang',
            'uangmuka' => 'Uangmuka',
            'sisapiutang' => 'Sisapiutang',
            'tgltempo' => 'Tgltempo',
        ];
    }

    /**
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
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
