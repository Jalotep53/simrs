<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "template_persetujuan_penolakan_tindakan".
 *
 * @property string $kode_template
 * @property string $diagnosa
 * @property string $tindakan
 * @property string $indikasi_tindakan
 * @property string $tata_cara
 * @property string $tujuan
 * @property string $risiko
 * @property string $komplikasi
 * @property string $prognosis
 * @property string $alternatif_dan_risikonya
 * @property string $lain_lain
 * @property float $biaya
 */
class TemplatePersetujuanPenolakanTindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'template_persetujuan_penolakan_tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_template', 'diagnosa', 'tindakan', 'indikasi_tindakan', 'tata_cara', 'tujuan', 'risiko', 'komplikasi', 'prognosis', 'alternatif_dan_risikonya', 'lain_lain', 'biaya'], 'required'],
            [['biaya'], 'number'],
            [['kode_template'], 'string', 'max' => 3],
            [['diagnosa', 'tindakan', 'indikasi_tindakan', 'tujuan', 'risiko', 'komplikasi', 'prognosis', 'alternatif_dan_risikonya', 'lain_lain'], 'string', 'max' => 200],
            [['tata_cara'], 'string', 'max' => 400],
            [['kode_template'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_template' => 'Kode Template',
            'diagnosa' => 'Diagnosa',
            'tindakan' => 'Tindakan',
            'indikasi_tindakan' => 'Indikasi Tindakan',
            'tata_cara' => 'Tata Cara',
            'tujuan' => 'Tujuan',
            'risiko' => 'Risiko',
            'komplikasi' => 'Komplikasi',
            'prognosis' => 'Prognosis',
            'alternatif_dan_risikonya' => 'Alternatif Dan Risikonya',
            'lain_lain' => 'Lain Lain',
            'biaya' => 'Biaya',
        ];
    }
}
