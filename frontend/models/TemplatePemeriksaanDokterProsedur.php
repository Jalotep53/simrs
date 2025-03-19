<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "template_pemeriksaan_dokter_prosedur".
 *
 * @property string $no_template
 * @property string $kode
 * @property int $urut
 *
 * @property Icd9 $kode0
 * @property TemplatePemeriksaanDokter $noTemplate
 */
class TemplatePemeriksaanDokterProsedur extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'template_pemeriksaan_dokter_prosedur';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_template', 'kode', 'urut'], 'required'],
            [['urut'], 'integer'],
            [['no_template'], 'string', 'max' => 20],
            [['kode'], 'string', 'max' => 8],
            [['no_template', 'kode'], 'unique', 'targetAttribute' => ['no_template', 'kode']],
            [['no_template'], 'exist', 'skipOnError' => true, 'targetClass' => TemplatePemeriksaanDokter::class, 'targetAttribute' => ['no_template' => 'no_template']],
            [['kode'], 'exist', 'skipOnError' => true, 'targetClass' => Icd9::class, 'targetAttribute' => ['kode' => 'kode']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_template' => 'No Template',
            'kode' => 'Kode',
            'urut' => 'Urut',
        ];
    }

    /**
     * Gets query for [[Kode0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKode0()
    {
        return $this->hasOne(Icd9::class, ['kode' => 'kode']);
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
