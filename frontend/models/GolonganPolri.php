<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "golongan_polri".
 *
 * @property int $id
 * @property string|null $nama_golongan
 *
 * @property PasienPolri[] $pasienPolris
 */
class GolonganPolri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'golongan_polri';
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
     * Gets query for [[PasienPolris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasienPolris()
    {
        return $this->hasMany(PasienPolri::class, ['golongan_polri' => 'id']);
    }
}
