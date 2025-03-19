<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_insentif".
 *
 * @property string $tahun
 * @property int $bulan
 * @property float $pendapatan
 * @property float $persen
 * @property float $total_insentif
 */
class SetInsentif extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_insentif';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun', 'bulan', 'pendapatan', 'persen', 'total_insentif'], 'required'],
            [['tahun'], 'safe'],
            [['bulan'], 'integer'],
            [['pendapatan', 'persen', 'total_insentif'], 'number'],
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
            'pendapatan' => 'Pendapatan',
            'persen' => 'Persen',
            'total_insentif' => 'Total Insentif',
        ];
    }
}
