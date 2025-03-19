<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "laporan_operasi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $diagnosa_preop
 * @property string $diagnosa_postop
 * @property string $jaringan_dieksekusi
 * @property string $selesaioperasi
 * @property string $permintaan_pa
 * @property string $laporan_operasi
 *
 * @property RegPeriksa $noRawat
 */
class LaporanOperasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'laporan_operasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'diagnosa_preop', 'diagnosa_postop', 'jaringan_dieksekusi', 'selesaioperasi', 'permintaan_pa', 'laporan_operasi'], 'required'],
            [['tanggal', 'selesaioperasi'], 'safe'],
            [['permintaan_pa', 'laporan_operasi'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['diagnosa_preop', 'diagnosa_postop', 'jaringan_dieksekusi'], 'string', 'max' => 100],
            [['no_rawat', 'tanggal'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tanggal' => 'Tanggal',
            'diagnosa_preop' => 'Diagnosa Preop',
            'diagnosa_postop' => 'Diagnosa Postop',
            'jaringan_dieksekusi' => 'Jaringan Dieksekusi',
            'selesaioperasi' => 'Selesaioperasi',
            'permintaan_pa' => 'Permintaan Pa',
            'laporan_operasi' => 'Laporan Operasi',
        ];
    }

    /**
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
