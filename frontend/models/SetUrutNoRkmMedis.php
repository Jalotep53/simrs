<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_urut_no_rkm_medis".
 *
 * @property string $urutan
 * @property string $tahun
 * @property string $bulan
 * @property string|null $posisi_tahun_bulan
 */
class SetUrutNoRkmMedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_urut_no_rkm_medis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['urutan', 'tahun', 'bulan'], 'required'],
            [['urutan', 'tahun', 'bulan', 'posisi_tahun_bulan'], 'string'],
            [['urutan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'urutan' => 'Urutan',
            'tahun' => 'Tahun',
            'bulan' => 'Bulan',
            'posisi_tahun_bulan' => 'Posisi Tahun Bulan',
        ];
    }
}
