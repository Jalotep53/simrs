<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kat_obat_bmhp_oksigen".
 *
 * @property int $id
 * @property string|null $nama
 */
class KatObatBmhpOksigen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kat_obat_bmhp_oksigen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['nama'], 'string', 'max' => 16],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
        ];
    }
}
