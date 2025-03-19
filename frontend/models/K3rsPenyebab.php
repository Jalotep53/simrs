<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "k3rs_penyebab".
 *
 * @property string $kode_penyebab
 * @property string|null $penyebab_kecelakaan
 *
 * @property K3rsPeristiwa[] $k3rsPeristiwas
 */
class K3rsPenyebab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'k3rs_penyebab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_penyebab'], 'required'],
            [['kode_penyebab'], 'string', 'max' => 5],
            [['penyebab_kecelakaan'], 'string', 'max' => 150],
            [['kode_penyebab'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_penyebab' => 'Kode Penyebab',
            'penyebab_kecelakaan' => 'Penyebab Kecelakaan',
        ];
    }

    /**
     * Gets query for [[K3rsPeristiwas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getK3rsPeristiwas()
    {
        return $this->hasMany(K3rsPeristiwa::class, ['kode_penyebab' => 'kode_penyebab']);
    }
}
