<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_tarif".
 *
 * @property string $poli_ralan
 * @property string $cara_bayar_ralan
 * @property string $ruang_ranap
 * @property string $cara_bayar_ranap
 * @property string $cara_bayar_lab
 * @property string $cara_bayar_radiologi
 * @property string|null $cara_bayar_operasi
 * @property string $kelas_ranap
 * @property string $kelas_lab
 * @property string $kelas_radiologi
 * @property string $kelas_operasi
 */
class SetTarif extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_tarif';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['poli_ralan', 'cara_bayar_ralan', 'ruang_ranap', 'cara_bayar_ranap', 'cara_bayar_lab', 'cara_bayar_radiologi', 'kelas_ranap', 'kelas_lab', 'kelas_radiologi', 'kelas_operasi'], 'required'],
            [['poli_ralan', 'cara_bayar_ralan', 'ruang_ranap', 'cara_bayar_ranap', 'cara_bayar_lab', 'cara_bayar_radiologi', 'cara_bayar_operasi', 'kelas_ranap', 'kelas_lab', 'kelas_radiologi', 'kelas_operasi'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'poli_ralan' => 'Poli Ralan',
            'cara_bayar_ralan' => 'Cara Bayar Ralan',
            'ruang_ranap' => 'Ruang Ranap',
            'cara_bayar_ranap' => 'Cara Bayar Ranap',
            'cara_bayar_lab' => 'Cara Bayar Lab',
            'cara_bayar_radiologi' => 'Cara Bayar Radiologi',
            'cara_bayar_operasi' => 'Cara Bayar Operasi',
            'kelas_ranap' => 'Kelas Ranap',
            'kelas_lab' => 'Kelas Lab',
            'kelas_radiologi' => 'Kelas Radiologi',
            'kelas_operasi' => 'Kelas Operasi',
        ];
    }
}
