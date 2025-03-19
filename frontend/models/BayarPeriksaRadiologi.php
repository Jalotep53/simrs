<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bayar_periksa_radiologi".
 *
 * @property string $no_bayar
 * @property string $no_rawat
 * @property string $kd_jenis_prw
 * @property string $tgl_periksa
 * @property string $jam
 * @property float $tarif_tindakan_dokter
 *
 * @property JnsPerawatanRadiologi $kdJenisPrw
 * @property BayarJmDokter $noBayar
 * @property RegPeriksa $noRawat
 */
class BayarPeriksaRadiologi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bayar_periksa_radiologi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_bayar', 'no_rawat', 'kd_jenis_prw', 'tgl_periksa', 'jam', 'tarif_tindakan_dokter'], 'required'],
            [['tgl_periksa', 'jam'], 'safe'],
            [['tarif_tindakan_dokter'], 'number'],
            [['no_bayar'], 'string', 'max' => 30],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_jenis_prw'], 'string', 'max' => 15],
            [['no_bayar', 'no_rawat', 'kd_jenis_prw', 'tgl_periksa', 'jam'], 'unique', 'targetAttribute' => ['no_bayar', 'no_rawat', 'kd_jenis_prw', 'tgl_periksa', 'jam']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_jenis_prw'], 'exist', 'skipOnError' => true, 'targetClass' => JnsPerawatanRadiologi::class, 'targetAttribute' => ['kd_jenis_prw' => 'kd_jenis_prw']],
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
            'tarif_tindakan_dokter' => 'Tarif Tindakan Dokter',
        ];
    }

    /**
     * Gets query for [[KdJenisPrw]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrw()
    {
        return $this->hasOne(JnsPerawatanRadiologi::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
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
}
