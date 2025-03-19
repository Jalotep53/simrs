<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "antripersetujuantransferantarruang".
 *
 * @property string $no_rawat
 * @property string|null $tanggal_masuk
 */
class Antripersetujuantransferantarruang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'antripersetujuantransferantarruang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat'], 'required'],
            [['tanggal_masuk'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tanggal_masuk' => 'Tanggal Masuk',
        ];
    }
}
