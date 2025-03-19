<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ipsrsjenisbarang".
 *
 * @property string $kd_jenis
 * @property string|null $nm_jenis
 *
 * @property Ipsrsbarang[] $ipsrsbarangs
 */
class Ipsrsjenisbarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ipsrsjenisbarang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis'], 'required'],
            [['kd_jenis'], 'string', 'max' => 5],
            [['nm_jenis'], 'string', 'max' => 50],
            [['kd_jenis'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_jenis' => 'Kd Jenis',
            'nm_jenis' => 'Nm Jenis',
        ];
    }

    /**
     * Gets query for [[Ipsrsbarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsbarangs()
    {
        return $this->hasMany(Ipsrsbarang::class, ['jenis' => 'kd_jenis']);
    }
}
