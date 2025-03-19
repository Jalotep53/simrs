<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_awal_keperawatan_ralan_masalah_geriatri".
 *
 * @property string $no_rawat
 * @property string $kode_masalah
 *
 * @property MasterMasalahKeperawatanGeriatri $kodeMasalah
 * @property PenilaianAwalKeperawatanRalanGeriatri $noRawat
 */
class PenilaianAwalKeperawatanRalanMasalahGeriatri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_awal_keperawatan_ralan_masalah_geriatri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kode_masalah'], 'required'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kode_masalah'], 'string', 'max' => 3],
            [['no_rawat', 'kode_masalah'], 'unique', 'targetAttribute' => ['no_rawat', 'kode_masalah']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => PenilaianAwalKeperawatanRalanGeriatri::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kode_masalah'], 'exist', 'skipOnError' => true, 'targetClass' => MasterMasalahKeperawatanGeriatri::class, 'targetAttribute' => ['kode_masalah' => 'kode_masalah']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
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
        return $this->hasOne(MasterMasalahKeperawatanGeriatri::class, ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(PenilaianAwalKeperawatanRalanGeriatri::class, ['no_rawat' => 'no_rawat']);
    }
}
