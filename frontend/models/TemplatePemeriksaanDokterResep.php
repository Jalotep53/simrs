<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "template_pemeriksaan_dokter_resep".
 *
 * @property string $no_template
 * @property string $kode_brng
 * @property float|null $jml
 * @property string|null $aturan_pakai
 *
 * @property Databarang $kodeBrng
 * @property TemplatePemeriksaanDokter $noTemplate
 */
class TemplatePemeriksaanDokterResep extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'template_pemeriksaan_dokter_resep';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_template', 'kode_brng'], 'required'],
            [['jml'], 'number'],
            [['no_template'], 'string', 'max' => 20],
            [['kode_brng'], 'string', 'max' => 15],
            [['aturan_pakai'], 'string', 'max' => 150],
            [['no_template', 'kode_brng'], 'unique', 'targetAttribute' => ['no_template', 'kode_brng']],
            [['no_template'], 'exist', 'skipOnError' => true, 'targetClass' => TemplatePemeriksaanDokter::class, 'targetAttribute' => ['no_template' => 'no_template']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_template' => 'No Template',
            'kode_brng' => 'Kode Brng',
            'jml' => 'Jml',
            'aturan_pakai' => 'Aturan Pakai',
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
