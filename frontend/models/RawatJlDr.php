<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rawat_jl_dr".
 *
 * @property string $no_rawat
 * @property string $kd_jenis_prw
 * @property string $kd_dokter
 * @property string $tgl_perawatan
 * @property string $jam_rawat
 * @property float $material
 * @property float $bhp
 * @property float $tarif_tindakandr
 * @property float|null $kso
 * @property float|null $menejemen
 * @property float|null $biaya_rawat
 * @property string|null $stts_bayar
 *
 * @property Dokter $kdDokter
 * @property JnsPerawatan $kdJenisPrw
 * @property RegPeriksa $noRawat
 */
class RawatJlDr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rawat_jl_dr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kd_jenis_prw', 'kd_dokter', 'tgl_perawatan', 'jam_rawat', 'material', 'bhp', 'tarif_tindakandr'], 'required'],
            [['tgl_perawatan', 'jam_rawat'], 'safe'],
            [['material', 'bhp', 'tarif_tindakandr', 'kso', 'menejemen', 'biaya_rawat'], 'number'],
            [['stts_bayar'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_jenis_prw'], 'string', 'max' => 15],
            [['kd_dokter'], 'string', 'max' => 20],
            [['no_rawat', 'kd_jenis_prw', 'kd_dokter', 'tgl_perawatan', 'jam_rawat'], 'unique', 'targetAttribute' => ['no_rawat', 'kd_jenis_prw', 'kd_dokter', 'tgl_perawatan', 'jam_rawat']],
            [['kd_jenis_prw'], 'exist', 'skipOnError' => true, 'targetClass' => JnsPerawatan::class, 'targetAttribute' => ['kd_jenis_prw' => 'kd_jenis_prw']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
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
            'kd_dokter' => 'Kd Dokter',
            'tgl_perawatan' => 'Tgl Perawatan',
            'jam_rawat' => 'Jam Rawat',
            'material' => 'Material',
            'bhp' => 'Bhp',
            'tarif_tindakandr' => 'Tarif Tindakandr',
            'kso' => 'Kso',
            'menejemen' => 'Menejemen',
            'biaya_rawat' => 'Biaya Rawat',
            'stts_bayar' => 'Stts Bayar',
        ];
    }

    /**
     * Gets query for [[KdDokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokter()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[KdJenisPrw]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrw()
    {
        return $this->hasOne(JnsPerawatan::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
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
