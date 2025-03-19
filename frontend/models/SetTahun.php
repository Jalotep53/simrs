<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_tahun".
 *
 * @property string $tahun
 * @property int $bulan
 * @property int $jmlhr
 * @property int $jmllbr
 * @property int $normal
 */
class SetTahun extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_tahun';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun', 'bulan', 'jmlhr', 'jmllbr', 'normal'], 'required'],
            [['tahun'], 'safe'],
            [['bulan', 'jmlhr', 'jmllbr', 'normal'], 'integer'],
            [['tahun', 'bulan'], 'unique', 'targetAttribute' => ['tahun', 'bulan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tahun' => 'Tahun',
            'bulan' => 'Bulan',
            'jmlhr' => 'Jmlhr',
            'jmllbr' => 'Jmllbr',
            'normal' => 'Normal',
        ];
    }
}
