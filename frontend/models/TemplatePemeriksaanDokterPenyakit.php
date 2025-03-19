<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "template_pemeriksaan_dokter_penyakit".
 *
 * @property string $no_template
 * @property string $kd_penyakit
 * @property int $urut
 *
 * @property Penyakit $kdPenyakit
 * @property TemplatePemeriksaanDokter $noTemplate
 */
class TemplatePemeriksaanDokterPenyakit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'template_pemeriksaan_dokter_penyakit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_template', 'kd_penyakit', 'urut'], 'required'],
            [['urut'], 'integer'],
            [['no_template'], 'string', 'max' => 20],
            [['kd_penyakit'], 'string', 'max' => 15],
            [['no_template', 'kd_penyakit'], 'unique', 'targetAttribute' => ['no_template', 'kd_penyakit']],
            [['no_template'], 'exist', 'skipOnError' => true, 'targetClass' => TemplatePemeriksaanDokter::class, 'targetAttribute' => ['no_template' => 'no_template']],
            [['kd_penyakit'], 'exist', 'skipOnError' => true, 'targetClass' => Penyakit::class, 'targetAttribute' => ['kd_penyakit' => 'kd_penyakit']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_template' => 'No Template',
            'kd_penyakit' => 'Kd Penyakit',
            'urut' => 'Urut',
        ];
    }

    /**
     * Gets query for [[KdPenyakit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPenyakit()
    {
        return $this->hasOne(Penyakit::class, ['kd_penyakit' => 'kd_penyakit']);
    }

    /**
     * Gets query for [[NoTemplate]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoTemplate()
    {
        return $this->hasOne(TemplatePemeriksaanDokter::class, ['no_template' => 'no_template']);
    }
}
