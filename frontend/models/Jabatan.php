<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jabatan".
 *
 * @property string $kd_jbtn
 * @property string|null $nm_jbtn
 *
 * @property Petugas[] $petugas
 */
class Jabatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jabatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jbtn'], 'required'],
            [['kd_jbtn'], 'string', 'max' => 4],
            [['nm_jbtn'], 'string', 'max' => 25],
            [['kd_jbtn'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_jbtn' => 'Kd Jbtn',
            'nm_jbtn' => 'Nm Jbtn',
        ];
    }

    /**
     * Gets query for [[Petugas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPetugas()
    {
        return $this->hasMany(Petugas::class, ['kd_jbtn' => 'kd_jbtn']);
    }
}
