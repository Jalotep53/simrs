<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pengurangan_biaya".
 *
 * @property string $no_rawat
 * @property string $nama_pengurangan
 * @property float|null $besar_pengurangan
 *
 * @property RegPeriksa $noRawat
 */
class PenguranganBiaya extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengurangan_biaya';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'nama_pengurangan'], 'required'],
            [['besar_pengurangan'], 'number'],
            [['no_rawat'], 'string', 'max' => 17],
            [['nama_pengurangan'], 'string', 'max' => 60],
            [['no_rawat', 'nama_pengurangan'], 'unique', 'targetAttribute' => ['no_rawat', 'nama_pengurangan']],
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
            'nama_pengurangan' => 'Nama Pengurangan',
            'besar_pengurangan' => 'Besar Pengurangan',
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
