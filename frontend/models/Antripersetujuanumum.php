<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "antripersetujuanumum".
 *
 * @property string|null $no_surat
 * @property string $no_rawat
 */
class Antripersetujuanumum extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'antripersetujuanumum';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat'], 'required'],
            [['no_surat'], 'string', 'max' => 20],
            [['no_rawat'], 'string', 'max' => 17],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_surat' => 'No Surat',
            'no_rawat' => 'No Rawat',
        ];
    }
}
