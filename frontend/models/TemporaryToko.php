<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "temporary_toko".
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
 * @property string $temp18
 * @property string $temp19
 * @property string $temp20
 * @property string $temp21
 * @property string $temp22
 * @property string $temp23
 * @property string $temp24
 * @property string $temp25
 * @property string $temp26
 * @property string $temp27
 * @property string $temp28
 * @property string $temp29
 * @property string $temp30
 * @property string $temp31
 * @property string $temp32
 * @property string $temp33
 * @property string $temp34
 * @property string $temp35
 * @property string $temp36
 * @property string $temp37
 */
class TemporaryToko extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'temporary_toko';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['temp1', 'temp2', 'temp3', 'temp4', 'temp5', 'temp6', 'temp7', 'temp8', 'temp9', 'temp10', 'temp11', 'temp12', 'temp13', 'temp14', 'temp15', 'temp16', 'temp17', 'temp18', 'temp19', 'temp20', 'temp21', 'temp22', 'temp23', 'temp24', 'temp25', 'temp26', 'temp27', 'temp28', 'temp29', 'temp30', 'temp31', 'temp32', 'temp33', 'temp34', 'temp35', 'temp36', 'temp37'], 'required'],
            [['temp1', 'temp2', 'temp3', 'temp4', 'temp5', 'temp6', 'temp7', 'temp8', 'temp9', 'temp10', 'temp11', 'temp12', 'temp13', 'temp14', 'temp15'], 'string', 'max' => 1000],
            [['temp16', 'temp17', 'temp18', 'temp19', 'temp20', 'temp21', 'temp22', 'temp23', 'temp24', 'temp25', 'temp26', 'temp27', 'temp28', 'temp29', 'temp30', 'temp31', 'temp32', 'temp33', 'temp34', 'temp35', 'temp36', 'temp37'], 'string', 'max' => 100],
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
            'temp18' => 'Temp18',
            'temp19' => 'Temp19',
            'temp20' => 'Temp20',
            'temp21' => 'Temp21',
            'temp22' => 'Temp22',
            'temp23' => 'Temp23',
            'temp24' => 'Temp24',
            'temp25' => 'Temp25',
            'temp26' => 'Temp26',
            'temp27' => 'Temp27',
            'temp28' => 'Temp28',
            'temp29' => 'Temp29',
            'temp30' => 'Temp30',
            'temp31' => 'Temp31',
            'temp32' => 'Temp32',
            'temp33' => 'Temp33',
            'temp34' => 'Temp34',
            'temp35' => 'Temp35',
            'temp36' => 'Temp36',
            'temp37' => 'Temp37',
        ];
    }
}
