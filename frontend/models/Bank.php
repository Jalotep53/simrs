<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bank".
 *
 * @property string $namabank
 *
 * @property Pegawai[] $pegawais
 */
class Bank extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bank';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namabank'], 'required'],
            [['namabank'], 'string', 'max' => 50],
            [['namabank'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'namabank' => 'Namabank',
        ];
    }

    /**
     * Gets query for [[Pegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais()
    {
        return $this->hasMany(Pegawai::class, ['bpd' => 'namabank']);
    }
}
