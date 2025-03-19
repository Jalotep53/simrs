<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rujuk_masuk".
 *
 * @property string $no_rawat
 * @property string|null $perujuk
 * @property string $alamat
 * @property string $no_rujuk
 * @property float $jm_perujuk
 * @property string|null $dokter_perujuk
 * @property string|null $kd_penyakit
 * @property string|null $kategori_rujuk
 * @property string|null $keterangan
 * @property string|null $no_balasan
 *
 * @property Penyakit $kdPenyakit
 * @property RegPeriksa $noRawat
 */
class RujukMasuk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rujuk_masuk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'alamat', 'no_rujuk', 'jm_perujuk'], 'required'],
            [['jm_perujuk'], 'number'],
            [['kategori_rujuk'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['perujuk'], 'string', 'max' => 60],
            [['alamat'], 'string', 'max' => 70],
            [['no_rujuk'], 'string', 'max' => 40],
            [['dokter_perujuk'], 'string', 'max' => 50],
            [['kd_penyakit'], 'string', 'max' => 15],
            [['keterangan'], 'string', 'max' => 200],
            [['no_balasan'], 'string', 'max' => 20],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_penyakit'], 'exist', 'skipOnError' => true, 'targetClass' => Penyakit::class, 'targetAttribute' => ['kd_penyakit' => 'kd_penyakit']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'perujuk' => 'Perujuk',
            'alamat' => 'Alamat',
            'no_rujuk' => 'No Rujuk',
            'jm_perujuk' => 'Jm Perujuk',
            'dokter_perujuk' => 'Dokter Perujuk',
            'kd_penyakit' => 'Kd Penyakit',
            'kategori_rujuk' => 'Kategori Rujuk',
            'keterangan' => 'Keterangan',
            'no_balasan' => 'No Balasan',
        ];
    }

    /**
     * Gets query for [[KdPenyakit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPenyakit()
    {
        return $this->hasOne(Penyakit::class, ['kd_penyakit' => 'kd_penyakit']);
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
