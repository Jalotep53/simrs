<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "template_pemeriksaan_dokter_detail_permintaan_lab".
 *
 * @property string $no_template
 * @property string $kd_jenis_prw
 * @property int $id_template
 *
 * @property JnsPerawatanLab $kdJenisPrw
 * @property TemplatePemeriksaanDokter $noTemplate
 * @property TemplateLaboratorium $template
 */
class TemplatePemeriksaanDokterDetailPermintaanLab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'template_pemeriksaan_dokter_detail_permintaan_lab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_template', 'kd_jenis_prw', 'id_template'], 'required'],
            [['id_template'], 'integer'],
            [['no_template'], 'string', 'max' => 20],
            [['kd_jenis_prw'], 'string', 'max' => 15],
            [['no_template', 'kd_jenis_prw', 'id_template'], 'unique', 'targetAttribute' => ['no_template', 'kd_jenis_prw', 'id_template']],
            [['no_template'], 'exist', 'skipOnError' => true, 'targetClass' => TemplatePemeriksaanDokter::class, 'targetAttribute' => ['no_template' => 'no_template']],
            [['kd_jenis_prw'], 'exist', 'skipOnError' => true, 'targetClass' => JnsPerawatanLab::class, 'targetAttribute' => ['kd_jenis_prw' => 'kd_jenis_prw']],
            [['id_template'], 'exist', 'skipOnError' => true, 'targetClass' => TemplateLaboratorium::class, 'targetAttribute' => ['id_template' => 'id_template']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_template' => 'No Template',
            'kd_jenis_prw' => 'Kd Jenis Prw',
            'id_template' => 'Id Template',
        ];
    }

    /**
     * Gets query for [[KdJenisPrw]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrw()
    {
        return $this->hasOne(JnsPerawatanLab::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
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

    /**
     * Gets query for [[Template]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplate()
    {
        return $this->hasOne(TemplateLaboratorium::class, ['id_template' => 'id_template']);
    }
}
