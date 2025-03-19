<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "setpenjualanumum".
 *
 * @property float|null $ralan
 * @property float|null $kelas1
 * @property float|null $kelas2
 * @property float|null $kelas3
 * @property float|null $utama
 * @property float|null $vip
 * @property float|null $vvip
 * @property float|null $beliluar
 * @property float|null $jualbebas
 * @property float|null $karyawan
 */
class Setpenjualanumum extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'setpenjualanumum';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ralan', 'kelas1', 'kelas2', 'kelas3', 'utama', 'vip', 'vvip', 'beliluar', 'jualbebas', 'karyawan'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ralan' => 'Ralan',
            'kelas1' => 'Kelas1',
            'kelas2' => 'Kelas2',
            'kelas3' => 'Kelas3',
            'utama' => 'Utama',
            'vip' => 'Vip',
            'vvip' => 'Vvip',
            'beliluar' => 'Beliluar',
            'jualbebas' => 'Jualbebas',
            'karyawan' => 'Karyawan',
        ];
    }
}
