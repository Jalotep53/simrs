<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "satuan_tni".
 *
 * @property int $id
 * @property string|null $nama_satuan
 *
 * @property PasienTni[] $pasienTnis
 */
class SatuanTni extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satuan_tni';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_satuan'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_satuan' => 'Nama Satuan',
        ];
    }

    /**
     * Gets query for [[PasienTnis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasienTnis()
    {
        return $this->hasMany(PasienTni::class, ['satuan_tni' => 'id']);
    }
}
