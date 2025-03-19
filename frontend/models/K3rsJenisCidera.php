<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "k3rs_jenis_cidera".
 *
 * @property string $kode_cidera
 * @property string|null $jenis_cidera
 *
 * @property K3rsPeristiwa[] $k3rsPeristiwas
 */
class K3rsJenisCidera extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'k3rs_jenis_cidera';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_cidera'], 'required'],
            [['kode_cidera'], 'string', 'max' => 5],
            [['jenis_cidera'], 'string', 'max' => 150],
            [['kode_cidera'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_cidera' => 'Kode Cidera',
            'jenis_cidera' => 'Jenis Cidera',
        ];
    }

    /**
     * Gets query for [[K3rsPeristiwas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getK3rsPeristiwas()
    {
        return $this->hasMany(K3rsPeristiwa::class, ['kode_cidera' => 'kode_cidera']);
    }
}
