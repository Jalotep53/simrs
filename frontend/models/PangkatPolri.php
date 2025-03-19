<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pangkat_polri".
 *
 * @property int $id
 * @property string|null $nama_pangkat
 *
 * @property PasienPolri[] $pasienPolris
 */
class PangkatPolri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pangkat_polri';
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
     * Gets query for [[PasienPolris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasienPolris()
    {
        return $this->hasMany(PasienPolri::class, ['pangkat_polri' => 'id']);
    }
}
