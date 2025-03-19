<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_keluar_set_nomor".
 *
 * @property int $id_no_surat
 * @property string $jenis_surat
 * @property string|null $digit_1
 * @property string|null $digit_2
 * @property string|null $digit_3
 * @property string|null $digit_4
 * @property string|null $digit_5
 * @property string|null $digit_6
 * @property string|null $digit_7
 * @property string|null $digit_8
 * @property string|null $digit_9
 * @property string|null $digit_10
 * @property string|null $digit_11
 * @property string|null $digit_12
 * @property string|null $digit_13
 * @property string|null $digit_14
 * @property string|null $digit_15
 */
class SuratKeluarSetNomor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_keluar_set_nomor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_surat'], 'required'],
            [['digit_1', 'digit_2', 'digit_3', 'digit_4', 'digit_5', 'digit_6', 'digit_7', 'digit_8', 'digit_9', 'digit_10', 'digit_11', 'digit_12', 'digit_13', 'digit_14', 'digit_15'], 'string'],
            [['jenis_surat'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_no_surat' => 'Id No Surat',
            'jenis_surat' => 'Jenis Surat',
            'digit_1' => 'Digit 1',
            'digit_2' => 'Digit 2',
            'digit_3' => 'Digit 3',
            'digit_4' => 'Digit 4',
            'digit_5' => 'Digit 5',
            'digit_6' => 'Digit 6',
            'digit_7' => 'Digit 7',
            'digit_8' => 'Digit 8',
            'digit_9' => 'Digit 9',
            'digit_10' => 'Digit 10',
            'digit_11' => 'Digit 11',
            'digit_12' => 'Digit 12',
            'digit_13' => 'Digit 13',
            'digit_14' => 'Digit 14',
            'digit_15' => 'Digit 15',
        ];
    }
}
