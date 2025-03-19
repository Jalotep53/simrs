<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_aturan_pakai".
 *
 * @property string $aturan
 */
class MasterAturanPakai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_aturan_pakai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['aturan'], 'required'],
            [['aturan'], 'string', 'max' => 150],
            [['aturan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'aturan' => 'Aturan',
        ];
    }
}
