<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jabatan_tni".
 *
 * @property int $id
 * @property string|null $nama_jabatan
 *
 * @property PasienTni[] $pasienTnis
 */
class JabatanTni extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jabatan_tni';
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
     * Gets query for [[PasienTnis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasienTnis()
    {
        return $this->hasMany(PasienTni::class, ['jabatan_tni' => 'id']);
    }
}
