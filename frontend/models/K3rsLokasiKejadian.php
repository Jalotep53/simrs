<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "k3rs_lokasi_kejadian".
 *
 * @property string $kode_lokasi
 * @property string|null $lokasi_kejadian
 *
 * @property K3rsPeristiwa[] $k3rsPeristiwas
 */
class K3rsLokasiKejadian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'k3rs_lokasi_kejadian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_lokasi'], 'required'],
            [['kode_lokasi'], 'string', 'max' => 5],
            [['lokasi_kejadian'], 'string', 'max' => 150],
            [['kode_lokasi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_lokasi' => 'Kode Lokasi',
            'lokasi_kejadian' => 'Lokasi Kejadian',
        ];
    }

    /**
     * Gets query for [[K3rsPeristiwas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getK3rsPeristiwas()
    {
        return $this->hasMany(K3rsPeristiwa::class, ['kode_lokasi' => 'kode_lokasi']);
    }
}
