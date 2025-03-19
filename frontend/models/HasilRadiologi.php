<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hasil_radiologi".
 *
 * @property string $no_rawat
 * @property string $tgl_periksa
 * @property string $jam
 * @property string $hasil
 *
 * @property RegPeriksa $noRawat
 */
class HasilRadiologi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hasil_radiologi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_periksa', 'jam', 'hasil'], 'required'],
            [['tgl_periksa', 'jam'], 'safe'],
            [['hasil'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['no_rawat', 'tgl_periksa', 'jam'], 'unique', 'targetAttribute' => ['no_rawat', 'tgl_periksa', 'jam']],
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
            'hasil' => 'Hasil',
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
