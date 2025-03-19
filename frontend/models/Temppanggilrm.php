<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "temppanggilrm".
 *
 * @property string $no_rkm_medis
 */
class Temppanggilrm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'temppanggilrm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis'], 'required'],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['no_rkm_medis'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rkm_medis' => 'No Rkm Medis',
        ];
    }
}
