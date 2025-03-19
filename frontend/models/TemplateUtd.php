<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "template_utd".
 *
 * @property string|null $kd_jenis_prw
 * @property int $id_template
 * @property string|null $pemeriksaan
 * @property string $nilai_rujukan
 * @property float|null $bagian_rs
 * @property float|null $bhp
 * @property float|null $bagian_perujuk
 * @property float|null $bagian_dokter
 * @property float|null $petugas_utd
 * @property float|null $kso
 * @property float|null $menejemen
 * @property float|null $biaya_item
 * @property int|null $urut
 *
 * @property JnsPerawatanUtd $kdJenisPrw
 */
class TemplateUtd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'template_utd';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nilai_rujukan'], 'required'],
            [['bagian_rs', 'bhp', 'bagian_perujuk', 'bagian_dokter', 'petugas_utd', 'kso', 'menejemen', 'biaya_item'], 'number'],
            [['urut'], 'integer'],
            [['kd_jenis_prw'], 'string', 'max' => 15],
            [['pemeriksaan'], 'string', 'max' => 200],
            [['nilai_rujukan'], 'string', 'max' => 30],
            [['kd_jenis_prw'], 'exist', 'skipOnError' => true, 'targetClass' => JnsPerawatanUtd::class, 'targetAttribute' => ['kd_jenis_prw' => 'kd_jenis_prw']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_jenis_prw' => 'Kd Jenis Prw',
            'id_template' => 'Id Template',
            'pemeriksaan' => 'Pemeriksaan',
            'nilai_rujukan' => 'Nilai Rujukan',
            'bagian_rs' => 'Bagian Rs',
            'bhp' => 'Bhp',
            'bagian_perujuk' => 'Bagian Perujuk',
            'bagian_dokter' => 'Bagian Dokter',
            'petugas_utd' => 'Petugas Utd',
            'kso' => 'Kso',
            'menejemen' => 'Menejemen',
            'biaya_item' => 'Biaya Item',
            'urut' => 'Urut',
        ];
    }

    /**
     * Gets query for [[KdJenisPrw]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrw()
    {
        return $this->hasOne(JnsPerawatanUtd::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }
}
