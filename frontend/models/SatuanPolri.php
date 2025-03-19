<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "satuan_polri".
 *
 * @property int $id
 * @property string|null $nama_satuan
 *
 * @property PasienPolri[] $pasienPolris
 */
class SatuanPolri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satuan_polri';
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
     * Gets query for [[PasienPolris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasienPolris()
    {
        return $this->hasMany(PasienPolri::class, ['satuan_polri' => 'id']);
    }
}
