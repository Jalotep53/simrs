<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jabatan_polri".
 *
 * @property int $id
 * @property string|null $nama_jabatan
 *
 * @property PasienPolri[] $pasienPolris
 */
class JabatanPolri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jabatan_polri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_jabatan'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_jabatan' => 'Nama Jabatan',
        ];
    }

    /**
     * Gets query for [[PasienPolris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasienPolris()
    {
        return $this->hasMany(PasienPolri::class, ['jabatan_polri' => 'id']);
    }
}
