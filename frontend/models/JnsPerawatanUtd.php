<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jns_perawatan_utd".
 *
 * @property string $kd_jenis_prw
 * @property string|null $nm_perawatan
 * @property float|null $bagian_rs
 * @property float|null $bhp
 * @property float|null $tarif_perujuk
 * @property float|null $tarif_tindakan_dokter
 * @property float|null $tarif_tindakan_petugas
 * @property float|null $kso
 * @property float|null $manajemen
 * @property float|null $total_byr
 * @property string|null $kd_pj
 * @property string|null $status
 *
 * @property Penjab $kdPj
 * @property TemplateUtd[] $templateUtds
 */
class JnsPerawatanUtd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jns_perawatan_utd';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis_prw'], 'required'],
            [['bagian_rs', 'bhp', 'tarif_perujuk', 'tarif_tindakan_dokter', 'tarif_tindakan_petugas', 'kso', 'manajemen', 'total_byr'], 'number'],
            [['status'], 'string'],
            [['kd_jenis_prw'], 'string', 'max' => 15],
            [['nm_perawatan'], 'string', 'max' => 80],
            [['kd_pj'], 'string', 'max' => 3],
            [['kd_jenis_prw'], 'unique'],
            [['kd_pj'], 'exist', 'skipOnError' => true, 'targetClass' => Penjab::class, 'targetAttribute' => ['kd_pj' => 'kd_pj']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_jenis_prw' => 'Kd Jenis Prw',
            'nm_perawatan' => 'Nm Perawatan',
            'bagian_rs' => 'Bagian Rs',
            'bhp' => 'Bhp',
            'tarif_perujuk' => 'Tarif Perujuk',
            'tarif_tindakan_dokter' => 'Tarif Tindakan Dokter',
            'tarif_tindakan_petugas' => 'Tarif Tindakan Petugas',
            'kso' => 'Kso',
            'manajemen' => 'Manajemen',
            'total_byr' => 'Total Byr',
            'kd_pj' => 'Kd Pj',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[KdPj]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPj()
    {
        return $this->hasOne(Penjab::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[TemplateUtds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplateUtds()
    {
        return $this->hasMany(TemplateUtd::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }
}
