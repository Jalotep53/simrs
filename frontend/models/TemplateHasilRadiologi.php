<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "template_hasil_radiologi".
 *
 * @property string $no_template
 * @property string|null $nama_pemeriksaan
 * @property string|null $template_hasil_radiologi
 */
class TemplateHasilRadiologi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'template_hasil_radiologi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_template'], 'required'],
            [['template_hasil_radiologi'], 'string'],
            [['no_template'], 'string', 'max' => 5],
            [['nama_pemeriksaan'], 'string', 'max' => 80],
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
            'nama_pemeriksaan' => 'Nama Pemeriksaan',
            'template_hasil_radiologi' => 'Template Hasil Radiologi',
        ];
    }
}
