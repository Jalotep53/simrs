<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pcare_tindakan_ralan_diberikan".
 *
 * @property string $no_rawat
 * @property string $noKunjungan
 * @property string|null $kdTindakanSK
 * @property string $tgl_perawatan
 * @property string $jam
 * @property string $kd_jenis_prw
 * @property float $material
 * @property float $bhp
 * @property float $tarif_tindakandr
 * @property float $tarif_tindakanpr
 * @property float $kso
 * @property float $menejemen
 * @property float $biaya_rawat
 *
 * @property MapingTindakanPcare $kdJenisPrw
 * @property RegPeriksa $noRawat
 */
class PcareTindakanRalanDiberikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pcare_tindakan_ralan_diberikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'noKunjungan', 'tgl_perawatan', 'jam', 'kd_jenis_prw', 'material', 'bhp', 'tarif_tindakandr', 'tarif_tindakanpr', 'kso', 'menejemen', 'biaya_rawat'], 'required'],
            [['tgl_perawatan', 'jam'], 'safe'],
            [['material', 'bhp', 'tarif_tindakandr', 'tarif_tindakanpr', 'kso', 'menejemen', 'biaya_rawat'], 'number'],
            [['no_rawat'], 'string', 'max' => 17],
            [['noKunjungan'], 'string', 'max' => 40],
            [['kdTindakanSK', 'kd_jenis_prw'], 'string', 'max' => 15],
            [['no_rawat', 'noKunjungan', 'tgl_perawatan', 'jam', 'kd_jenis_prw'], 'unique', 'targetAttribute' => ['no_rawat', 'noKunjungan', 'tgl_perawatan', 'jam', 'kd_jenis_prw']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_jenis_prw'], 'exist', 'skipOnError' => true, 'targetClass' => MapingTindakanPcare::class, 'targetAttribute' => ['kd_jenis_prw' => 'kd_jenis_prw']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'noKunjungan' => 'No Kunjungan',
            'kdTindakanSK' => 'Kd Tindakan Sk',
            'tgl_perawatan' => 'Tgl Perawatan',
            'jam' => 'Jam',
            'kd_jenis_prw' => 'Kd Jenis Prw',
            'material' => 'Material',
            'bhp' => 'Bhp',
            'tarif_tindakandr' => 'Tarif Tindakandr',
            'tarif_tindakanpr' => 'Tarif Tindakanpr',
            'kso' => 'Kso',
            'menejemen' => 'Menejemen',
            'biaya_rawat' => 'Biaya Rawat',
        ];
    }

    /**
     * Gets query for [[KdJenisPrw]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrw()
    {
        return $this->hasOne(MapingTindakanPcare::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
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
}
