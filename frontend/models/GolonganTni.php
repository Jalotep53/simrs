<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "golongan_tni".
 *
 * @property int $id
 * @property string|null $nama_golongan
 *
 * @property PasienTni[] $pasienTnis
 */
class GolonganTni extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'golongan_tni';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_golongan'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_golongan' => 'Nama Golongan',
        ];
    }

    /**
     * Gets query for [[PasienTnis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasienTnis()
    {
        return $this->hasMany(PasienTni::class, ['golongan_tni' => 'id']);
    }
}
