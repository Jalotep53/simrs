<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "k3rs_jenis_pekerjaan".
 *
 * @property string $kode_pekerjaan
 * @property string|null $jenis_pekerjaan
 *
 * @property K3rsPeristiwa[] $k3rsPeristiwas
 */
class K3rsJenisPekerjaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'k3rs_jenis_pekerjaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_pekerjaan'], 'required'],
            [['kode_pekerjaan'], 'string', 'max' => 5],
            [['jenis_pekerjaan'], 'string', 'max' => 150],
            [['kode_pekerjaan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_pekerjaan' => 'Kode Pekerjaan',
            'jenis_pekerjaan' => 'Jenis Pekerjaan',
        ];
    }

    /**
     * Gets query for [[K3rsPeristiwas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getK3rsPeristiwas()
    {
        return $this->hasMany(K3rsPeristiwa::class, ['kode_pekerjaan' => 'kode_pekerjaan']);
    }
}
