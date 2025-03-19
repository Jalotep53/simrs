<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "skp_detail_penilaian".
 *
 * @property string $nomor_penilaian
 * @property string $kode_kriteria
 * @property string|null $skala_penilaian
 *
 * @property SkpKriteriaPenilaian $kodeKriteria
 * @property SkpPenilaian $nomorPenilaian
 */
class SkpDetailPenilaian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skp_detail_penilaian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomor_penilaian', 'kode_kriteria'], 'required'],
            [['skala_penilaian'], 'string'],
            [['nomor_penilaian'], 'string', 'max' => 20],
            [['kode_kriteria'], 'string', 'max' => 10],
            [['nomor_penilaian', 'kode_kriteria'], 'unique', 'targetAttribute' => ['nomor_penilaian', 'kode_kriteria']],
            [['nomor_penilaian'], 'exist', 'skipOnError' => true, 'targetClass' => SkpPenilaian::class, 'targetAttribute' => ['nomor_penilaian' => 'nomor_penilaian']],
            [['kode_kriteria'], 'exist', 'skipOnError' => true, 'targetClass' => SkpKriteriaPenilaian::class, 'targetAttribute' => ['kode_kriteria' => 'kode_kriteria']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nomor_penilaian' => 'Nomor Penilaian',
            'kode_kriteria' => 'Kode Kriteria',
            'skala_penilaian' => 'Skala Penilaian',
        ];
    }

    /**
     * Gets query for [[KodeKriteria]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeKriteria()
    {
        return $this->hasOne(SkpKriteriaPenilaian::class, ['kode_kriteria' => 'kode_kriteria']);
    }

    /**
     * Gets query for [[NomorPenilaian]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNomorPenilaian()
    {
        return $this->hasOne(SkpPenilaian::class, ['nomor_penilaian' => 'nomor_penilaian']);
    }
}
