<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "template_laporan_operasi".
 *
 * @property string $no_template
 * @property string $nama_operasi
 * @property string $diagnosa_preop
 * @property string $diagnosa_postop
 * @property string $jaringan_dieksisi
 * @property string $permintaan_pa
 * @property string $laporan_operasi
 */
class TemplateLaporanOperasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'template_laporan_operasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_template', 'nama_operasi', 'diagnosa_preop', 'diagnosa_postop', 'jaringan_dieksisi', 'permintaan_pa', 'laporan_operasi'], 'required'],
            [['permintaan_pa', 'laporan_operasi'], 'string'],
            [['no_template'], 'string', 'max' => 5],
            [['nama_operasi', 'diagnosa_preop', 'diagnosa_postop', 'jaringan_dieksisi'], 'string', 'max' => 100],
            [['no_template'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_template' => 'No Template',
            'nama_operasi' => 'Nama Operasi',
            'diagnosa_preop' => 'Diagnosa Preop',
            'diagnosa_postop' => 'Diagnosa Postop',
            'jaringan_dieksisi' => 'Jaringan Dieksisi',
            'permintaan_pa' => 'Permintaan Pa',
            'laporan_operasi' => 'Laporan Operasi',
        ];
    }
}
