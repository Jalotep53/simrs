<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "temporary_bayar_ranap".
 *
 * @property int $no
 * @property string $temp1
 * @property string $temp2
 * @property string $temp3
 * @property string $temp4
 * @property string $temp5
 * @property string $temp6
 * @property string $temp7
 * @property string $temp8
 * @property string $temp9
 * @property string $temp10
 * @property string $temp11
 * @property string $temp12
 * @property string $temp13
 * @property string $temp14
 * @property string $temp15
 * @property string $temp16
 * @property string $temp17
 */
class TemporaryBayarRanap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'temporary_bayar_ranap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no', 'temp1', 'temp2', 'temp3', 'temp4', 'temp5', 'temp6', 'temp7', 'temp8', 'temp9', 'temp10', 'temp11', 'temp12', 'temp13', 'temp14', 'temp15', 'temp16', 'temp17'], 'required'],
            [['no'], 'integer'],
            [['temp1', 'temp3', 'temp4', 'temp5', 'temp6', 'temp7', 'temp8', 'temp9', 'temp10', 'temp11', 'temp12', 'temp13', 'temp14', 'temp15', 'temp16', 'temp17'], 'string', 'max' => 100],
            [['temp2'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no' => 'No',
            'temp1' => 'Temp1',
            'temp2' => 'Temp2',
            'temp3' => 'Temp3',
            'temp4' => 'Temp4',
            'temp5' => 'Temp5',
            'temp6' => 'Temp6',
            'temp7' => 'Temp7',
            'temp8' => 'Temp8',
            'temp9' => 'Temp9',
            'temp10' => 'Temp10',
            'temp11' => 'Temp11',
            'temp12' => 'Temp12',
            'temp13' => 'Temp13',
            'temp14' => 'Temp14',
            'temp15' => 'Temp15',
            'temp16' => 'Temp16',
            'temp17' => 'Temp17',
        ];
    }
}
