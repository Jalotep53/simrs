<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mpp_evaluasi_masalah".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kode_masalah
 *
 * @property MasterMasalahKeperawatan $kodeMasalah
 * @property RegPeriksa $noRawat
 */
class MppEvaluasiMasalah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mpp_evaluasi_masalah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kode_masalah'], 'required'],
            [['tanggal'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kode_masalah'], 'string', 'max' => 3],
            [['no_rawat', 'tanggal', 'kode_masalah'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal', 'kode_masalah']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kode_masalah'], 'exist', 'skipOnError' => true, 'targetClass' => MasterMasalahKeperawatan::class, 'targetAttribute' => ['kode_masalah' => 'kode_masalah']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tanggal' => 'Tanggal',
            'kode_masalah' => 'Kode Masalah',
        ];
    }

    /**
     * Gets query for [[KodeMasalah]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeMasalah()
    {
        return $this->hasOne(MasterMasalahKeperawatan::class, ['kode_masalah' => 'kode_masalah']);
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
}
