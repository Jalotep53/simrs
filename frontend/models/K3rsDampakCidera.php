<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "k3rs_dampak_cidera".
 *
 * @property string $kode_dampak
 * @property string|null $dampak_cidera
 *
 * @property K3rsPeristiwa[] $k3rsPeristiwas
 */
class K3rsDampakCidera extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'k3rs_dampak_cidera';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_dampak'], 'required'],
            [['kode_dampak'], 'string', 'max' => 5],
            [['dampak_cidera'], 'string', 'max' => 150],
            [['kode_dampak'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_dampak' => 'Kode Dampak',
            'dampak_cidera' => 'Dampak Cidera',
        ];
    }

    /**
     * Gets query for [[K3rsPeristiwas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getK3rsPeristiwas()
    {
        return $this->hasMany(K3rsPeristiwa::class, ['kode_dampak' => 'kode_dampak']);
    }
}
