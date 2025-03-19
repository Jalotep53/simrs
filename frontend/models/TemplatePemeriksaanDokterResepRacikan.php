<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "template_pemeriksaan_dokter_resep_racikan".
 *
 * @property string $no_template
 * @property string $no_racik
 * @property string|null $nama_racik
 * @property string|null $kd_racik
 * @property int|null $jml_dr
 * @property string|null $aturan_pakai
 * @property string|null $keterangan
 *
 * @property MetodeRacik $kdRacik
 * @property TemplatePemeriksaanDokter $noTemplate
 */
class TemplatePemeriksaanDokterResepRacikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'template_pemeriksaan_dokter_resep_racikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_template', 'no_racik'], 'required'],
            [['jml_dr'], 'integer'],
            [['no_template'], 'string', 'max' => 20],
            [['no_racik'], 'string', 'max' => 2],
            [['nama_racik'], 'string', 'max' => 100],
            [['kd_racik'], 'string', 'max' => 3],
            [['aturan_pakai'], 'string', 'max' => 150],
            [['keterangan'], 'string', 'max' => 50],
            [['no_template', 'no_racik'], 'unique', 'targetAttribute' => ['no_template', 'no_racik']],
            [['no_template'], 'exist', 'skipOnError' => true, 'targetClass' => TemplatePemeriksaanDokter::class, 'targetAttribute' => ['no_template' => 'no_template']],
            [['kd_racik'], 'exist', 'skipOnError' => true, 'targetClass' => MetodeRacik::class, 'targetAttribute' => ['kd_racik' => 'kd_racik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_template' => 'No Template',
            'no_racik' => 'No Racik',
            'nama_racik' => 'Nama Racik',
            'kd_racik' => 'Kd Racik',
            'jml_dr' => 'Jml Dr',
            'aturan_pakai' => 'Aturan Pakai',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[KdRacik]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRacik()
    {
        return $this->hasOne(MetodeRacik::class, ['kd_racik' => 'kd_racik']);
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
