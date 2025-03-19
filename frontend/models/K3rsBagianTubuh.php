<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "k3rs_bagian_tubuh".
 *
 * @property string $kode_bagian
 * @property string|null $bagian_tubuh
 *
 * @property K3rsPeristiwa[] $k3rsPeristiwas
 */
class K3rsBagianTubuh extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'k3rs_bagian_tubuh';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_bagian'], 'required'],
            [['kode_bagian'], 'string', 'max' => 5],
            [['bagian_tubuh'], 'string', 'max' => 150],
            [['kode_bagian'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_bagian' => 'Kode Bagian',
            'bagian_tubuh' => 'Bagian Tubuh',
        ];
    }

    /**
     * Gets query for [[K3rsPeristiwas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getK3rsPeristiwas()
    {
        return $this->hasMany(K3rsPeristiwa::class, ['kode_bagian' => 'kode_bagian']);
    }
}
