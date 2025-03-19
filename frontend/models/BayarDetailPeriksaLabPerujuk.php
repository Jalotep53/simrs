<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bayar_detail_periksa_lab_perujuk".
 *
 * @property string $no_bayar
 * @property string $no_rawat
 * @property string $kd_jenis_prw
 * @property string $tgl_periksa
 * @property string $jam
 * @property int $id_template
 * @property float $bagian_perujuk
 *
 * @property JnsPerawatanLab $kdJenisPrw
 * @property BayarJmDokter $noBayar
 * @property RegPeriksa $noRawat
 * @property TemplateLaboratorium $template
 */
class BayarDetailPeriksaLabPerujuk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bayar_detail_periksa_lab_perujuk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_bayar', 'no_rawat', 'kd_jenis_prw', 'tgl_periksa', 'jam', 'id_template', 'bagian_perujuk'], 'required'],
            [['tgl_periksa', 'jam'], 'safe'],
            [['id_template'], 'integer'],
            [['bagian_perujuk'], 'number'],
            [['no_bayar'], 'string', 'max' => 30],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_jenis_prw'], 'string', 'max' => 15],
            [['no_bayar', 'no_rawat', 'kd_jenis_prw', 'tgl_periksa', 'jam', 'id_template'], 'unique', 'targetAttribute' => ['no_bayar', 'no_rawat', 'kd_jenis_prw', 'tgl_periksa', 'jam', 'id_template']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_jenis_prw'], 'exist', 'skipOnError' => true, 'targetClass' => JnsPerawatanLab::class, 'targetAttribute' => ['kd_jenis_prw' => 'kd_jenis_prw']],
            [['id_template'], 'exist', 'skipOnError' => true, 'targetClass' => TemplateLaboratorium::class, 'targetAttribute' => ['id_template' => 'id_template']],
            [['no_bayar'], 'exist', 'skipOnError' => true, 'targetClass' => BayarJmDokter::class, 'targetAttribute' => ['no_bayar' => 'no_bayar']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_bayar' => 'No Bayar',
            'no_rawat' => 'No Rawat',
            'kd_jenis_prw' => 'Kd Jenis Prw',
            'tgl_periksa' => 'Tgl Periksa',
            'jam' => 'Jam',
            'id_template' => 'Id Template',
            'bagian_perujuk' => 'Bagian Perujuk',
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
     * Gets query for [[NoBayar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoBayar()
    {
        return $this->hasOne(BayarJmDokter::class, ['no_bayar' => 'no_bayar']);
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
