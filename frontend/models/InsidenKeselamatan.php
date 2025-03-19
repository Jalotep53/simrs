<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "insiden_keselamatan".
 *
 * @property string $kode_insiden
 * @property string $nama_insiden
 * @property string $jenis_insiden
 * @property string $dampak
 *
 * @property InsidenKeselamatanPasien[] $insidenKeselamatanPasiens
 */
class InsidenKeselamatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'insiden_keselamatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_insiden', 'nama_insiden', 'jenis_insiden', 'dampak'], 'required'],
            [['jenis_insiden', 'dampak'], 'string'],
            [['kode_insiden'], 'string', 'max' => 5],
            [['nama_insiden'], 'string', 'max' => 100],
            [['kode_insiden'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_insiden' => 'Kode Insiden',
            'nama_insiden' => 'Nama Insiden',
            'jenis_insiden' => 'Jenis Insiden',
            'dampak' => 'Dampak',
        ];
    }

    /**
     * Gets query for [[InsidenKeselamatanPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInsidenKeselamatanPasiens()
    {
        return $this->hasMany(InsidenKeselamatanPasien::class, ['kode_insiden' => 'kode_insiden']);
    }
}
