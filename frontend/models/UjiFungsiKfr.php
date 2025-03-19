<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "uji_fungsi_kfr".
 *
 * @property string $no_rawat
 * @property string|null $tanggal
 * @property string|null $diagnosis_fungsional
 * @property string|null $diagnosis_medis
 * @property string|null $hasil_didapat
 * @property string|null $kesimpulan
 * @property string|null $rekomedasi
 * @property string|null $kd_dokter
 *
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class UjiFungsiKfr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uji_fungsi_kfr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat'], 'required'],
            [['tanggal'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['diagnosis_fungsional', 'diagnosis_medis'], 'string', 'max' => 50],
            [['hasil_didapat', 'kesimpulan', 'rekomedasi'], 'string', 'max' => 100],
            [['kd_dokter'], 'string', 'max' => 20],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
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
            'diagnosis_fungsional' => 'Diagnosis Fungsional',
            'diagnosis_medis' => 'Diagnosis Medis',
            'hasil_didapat' => 'Hasil Didapat',
            'kesimpulan' => 'Kesimpulan',
            'rekomedasi' => 'Rekomedasi',
            'kd_dokter' => 'Kd Dokter',
        ];
    }

    /**
     * Gets query for [[KdDokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokter()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokter']);
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
