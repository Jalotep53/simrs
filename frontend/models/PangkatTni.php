<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pangkat_tni".
 *
 * @property int $id
 * @property string|null $nama_pangkat
 *
 * @property PasienTni[] $pasienTnis
 */
class PangkatTni extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pangkat_tni';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pangkat'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_pangkat' => 'Nama Pangkat',
        ];
    }

    /**
     * Gets query for [[PasienTnis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasienTnis()
    {
        return $this->hasMany(PasienTni::class, ['pangkat_tni' => 'id']);
    }
}
