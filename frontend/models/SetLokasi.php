<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_lokasi".
 *
 * @property string $kd_bangsal
 * @property string $asal_stok
 *
 * @property Bangsal $kdBangsal
 */
class SetLokasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_lokasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_bangsal', 'asal_stok'], 'required'],
            [['asal_stok'], 'string'],
            [['kd_bangsal'], 'string', 'max' => 5],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_bangsal' => 'Kd Bangsal',
            'asal_stok' => 'Asal Stok',
        ];
    }

    /**
     * Gets query for [[KdBangsal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdBangsal()
    {
        return $this->hasOne(Bangsal::class, ['kd_bangsal' => 'kd_bangsal']);
    }
}
