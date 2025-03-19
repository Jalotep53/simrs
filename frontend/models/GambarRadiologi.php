<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "gambar_radiologi".
 *
 * @property string $no_rawat
 * @property string $tgl_periksa
 * @property string $jam
 * @property string $lokasi_gambar
 *
 * @property RegPeriksa $noRawat
 */
class GambarRadiologi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gambar_radiologi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_periksa', 'jam', 'lokasi_gambar'], 'required'],
            [['tgl_periksa', 'jam'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['lokasi_gambar'], 'string', 'max' => 500],
            [['no_rawat', 'tgl_periksa', 'jam', 'lokasi_gambar'], 'unique', 'targetAttribute' => ['no_rawat', 'tgl_periksa', 'jam', 'lokasi_gambar']],
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
            'tgl_periksa' => 'Tgl Periksa',
            'jam' => 'Jam',
            'lokasi_gambar' => 'Lokasi Gambar',
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
}
