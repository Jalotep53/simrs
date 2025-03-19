<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "antripenolakananjuranmedis".
 *
 * @property string $no_surat
 * @property string $no_rawat
 */
class Antripenolakananjuranmedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'antripenolakananjuranmedis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'no_rawat'], 'required'],
            [['no_surat'], 'string', 'max' => 20],
            [['no_rawat'], 'string', 'max' => 17],
            [['no_surat'], 'unique'],
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
