<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_harga_obat_ralan".
 *
 * @property string $kd_pj
 * @property float $hargajual
 *
 * @property Penjab $kdPj
 */
class SetHargaObatRalan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_harga_obat_ralan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_pj', 'hargajual'], 'required'],
            [['hargajual'], 'number'],
            [['kd_pj'], 'string', 'max' => 3],
            [['kd_pj'], 'unique'],
            [['kd_pj'], 'exist', 'skipOnError' => true, 'targetClass' => Penjab::class, 'targetAttribute' => ['kd_pj' => 'kd_pj']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_pj' => 'Kd Pj',
            'hargajual' => 'Hargajual',
        ];
    }

    /**
     * Gets query for [[KdPj]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPj()
    {
        return $this->hasOne(Penjab::class, ['kd_pj' => 'kd_pj']);
    }
}
