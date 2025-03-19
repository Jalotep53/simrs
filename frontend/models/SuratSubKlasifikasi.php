<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_sub_klasifikasi".
 *
 * @property string $kd
 * @property string $kd_klasifikasi
 * @property string $sub_klasifikasi
 * @property int|null $no_bulanan
 * @property int|null $no_tahunan
 * @property int $bulan
 * @property int $tahun
 *
 * @property SuratKlasifikasi $kdKlasifikasi
 */
class SuratSubKlasifikasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_sub_klasifikasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd', 'kd_klasifikasi', 'sub_klasifikasi', 'bulan', 'tahun'], 'required'],
            [['no_bulanan', 'no_tahunan', 'bulan', 'tahun'], 'integer'],
            [['kd'], 'string', 'max' => 10],
            [['kd_klasifikasi'], 'string', 'max' => 5],
            [['sub_klasifikasi'], 'string', 'max' => 50],
            [['kd'], 'unique'],
            [['kd_klasifikasi'], 'exist', 'skipOnError' => true, 'targetClass' => SuratKlasifikasi::class, 'targetAttribute' => ['kd_klasifikasi' => 'kd']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd' => 'Kd',
            'kd_klasifikasi' => 'Kd Klasifikasi',
            'sub_klasifikasi' => 'Sub Klasifikasi',
            'no_bulanan' => 'No Bulanan',
            'no_tahunan' => 'No Tahunan',
            'bulan' => 'Bulan',
            'tahun' => 'Tahun',
        ];
    }

    /**
     * Gets query for [[KdKlasifikasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdKlasifikasi()
    {
        return $this->hasOne(SuratKlasifikasi::class, ['kd' => 'kd_klasifikasi']);
    }
}
