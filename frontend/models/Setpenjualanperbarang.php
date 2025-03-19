<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "setpenjualanperbarang".
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
 * @property string $kode_brng
 *
 * @property Databarang $kodeBrng
 */
class Setpenjualanperbarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'setpenjualanperbarang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ralan', 'kelas1', 'kelas2', 'kelas3', 'utama', 'vip', 'vvip', 'beliluar', 'jualbebas', 'karyawan'], 'number'],
            [['kode_brng'], 'required'],
            [['kode_brng'], 'string', 'max' => 15],
            [['kode_brng'], 'unique'],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
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
            'kode_brng' => 'Kode Brng',
        ];
    }

    /**
     * Gets query for [[KodeBrng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrng()
    {
        return $this->hasOne(Databarang::class, ['kode_brng' => 'kode_brng']);
    }
}
