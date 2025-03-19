<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_tuslah".
 *
 * @property string $tahun
 * @property int $bulan
 * @property float $pendapatan_tuslah
 * @property float $persen_rs
 * @property float $bagian_rs
 * @property float $persen_kry
 * @property float $bagian_kry
 */
class SetTuslah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_tuslah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun', 'bulan', 'pendapatan_tuslah', 'persen_rs', 'bagian_rs', 'persen_kry', 'bagian_kry'], 'required'],
            [['tahun'], 'safe'],
            [['bulan'], 'integer'],
            [['pendapatan_tuslah', 'persen_rs', 'bagian_rs', 'persen_kry', 'bagian_kry'], 'number'],
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
            'pendapatan_tuslah' => 'Pendapatan Tuslah',
            'persen_rs' => 'Persen Rs',
            'bagian_rs' => 'Bagian Rs',
            'persen_kry' => 'Persen Kry',
            'bagian_kry' => 'Bagian Kry',
        ];
    }
}
