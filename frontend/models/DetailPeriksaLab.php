<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detail_periksa_lab".
 *
 * @property string $no_rawat
 * @property string $kd_jenis_prw
 * @property string $tgl_periksa
 * @property string $jam
 * @property int $id_template
 * @property string $nilai
 * @property string $nilai_rujukan
 * @property string $keterangan
 * @property float $bagian_rs
 * @property float $bhp
 * @property float $bagian_perujuk
 * @property float $bagian_dokter
 * @property float $bagian_laborat
 * @property float|null $kso
 * @property float|null $menejemen
 * @property float $biaya_item
 *
 * @property JnsPerawatanLab $kdJenisPrw
 * @property RegPeriksa $noRawat
 * @property TemplateLaboratorium $template
 */
class DetailPeriksaLab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_periksa_lab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kd_jenis_prw', 'tgl_periksa', 'jam', 'id_template', 'nilai', 'nilai_rujukan', 'keterangan', 'bagian_rs', 'bhp', 'bagian_perujuk', 'bagian_dokter', 'bagian_laborat', 'biaya_item'], 'required'],
            [['tgl_periksa', 'jam'], 'safe'],
            [['id_template'], 'integer'],
            [['bagian_rs', 'bhp', 'bagian_perujuk', 'bagian_dokter', 'bagian_laborat', 'kso', 'menejemen', 'biaya_item'], 'number'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_jenis_prw'], 'string', 'max' => 15],
            [['nilai'], 'string', 'max' => 200],
            [['nilai_rujukan'], 'string', 'max' => 30],
            [['keterangan'], 'string', 'max' => 60],
            [['no_rawat', 'kd_jenis_prw', 'tgl_periksa', 'jam', 'id_template'], 'unique', 'targetAttribute' => ['no_rawat', 'kd_jenis_prw', 'tgl_periksa', 'jam', 'id_template']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
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
            'no_rawat' => 'No Rawat',
            'kd_jenis_prw' => 'Kd Jenis Prw',
            'tgl_periksa' => 'Tgl Periksa',
            'jam' => 'Jam',
            'id_template' => 'Id Template',
            'nilai' => 'Nilai',
            'nilai_rujukan' => 'Nilai Rujukan',
            'keterangan' => 'Keterangan',
            'bagian_rs' => 'Bagian Rs',
            'bhp' => 'Bhp',
            'bagian_perujuk' => 'Bagian Perujuk',
            'bagian_dokter' => 'Bagian Dokter',
            'bagian_laborat' => 'Bagian Laborat',
            'kso' => 'Kso',
            'menejemen' => 'Menejemen',
            'biaya_item' => 'Biaya Item',
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
