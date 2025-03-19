<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "antriapotek2".
 *
 * @property string|null $no_resep
 * @property string|null $status
 * @property string $no_rawat
 */
class Antriapotek2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'antriapotek2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'string'],
            [['no_rawat'], 'required'],
            [['no_resep'], 'string', 'max' => 14],
            [['no_rawat'], 'string', 'max' => 17],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_resep' => 'No Resep',
            'status' => 'Status',
            'no_rawat' => 'No Rawat',
        ];
    }
}
