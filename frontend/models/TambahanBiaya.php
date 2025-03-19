<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tambahan_biaya".
 *
 * @property string $no_rawat
 * @property string $nama_biaya
 * @property float $besar_biaya
 *
 * @property RegPeriksa $noRawat
 */
class TambahanBiaya extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tambahan_biaya';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'nama_biaya', 'besar_biaya'], 'required'],
            [['besar_biaya'], 'number'],
            [['no_rawat'], 'string', 'max' => 17],
            [['nama_biaya'], 'string', 'max' => 60],
            [['no_rawat', 'nama_biaya'], 'unique', 'targetAttribute' => ['no_rawat', 'nama_biaya']],
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
            'nama_biaya' => 'Nama Biaya',
            'besar_biaya' => 'Besar Biaya',
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
