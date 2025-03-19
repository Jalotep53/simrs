<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_no_rkm_medis".
 *
 * @property string $no_rkm_medis
 */
class SetNoRkmMedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_no_rkm_medis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis'], 'required'],
            [['no_rkm_medis'], 'string', 'max' => 15],
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
