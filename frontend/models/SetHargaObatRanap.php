<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_harga_obat_ranap".
 *
 * @property string $kd_pj
 * @property string $kelas
 * @property float $hargajual
 *
 * @property Penjab $kdPj
 */
class SetHargaObatRanap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_harga_obat_ranap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_pj', 'kelas', 'hargajual'], 'required'],
            [['kelas'], 'string'],
            [['hargajual'], 'number'],
            [['kd_pj'], 'string', 'max' => 3],
            [['kd_pj', 'kelas'], 'unique', 'targetAttribute' => ['kd_pj', 'kelas']],
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
            'kelas' => 'Kelas',
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
