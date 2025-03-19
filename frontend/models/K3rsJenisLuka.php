<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "k3rs_jenis_luka".
 *
 * @property string $kode_luka
 * @property string|null $jenis_luka
 *
 * @property K3rsPeristiwa[] $k3rsPeristiwas
 */
class K3rsJenisLuka extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'k3rs_jenis_luka';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_luka'], 'required'],
            [['kode_luka'], 'string', 'max' => 5],
            [['jenis_luka'], 'string', 'max' => 150],
            [['kode_luka'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_luka' => 'Kode Luka',
            'jenis_luka' => 'Jenis Luka',
        ];
    }

    /**
     * Gets query for [[K3rsPeristiwas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getK3rsPeristiwas()
    {
        return $this->hasMany(K3rsPeristiwa::class, ['kode_luka' => 'kode_luka']);
    }
}
