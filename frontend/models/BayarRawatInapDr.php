<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bayar_rawat_inap_dr".
 *
 * @property string $no_bayar
 * @property string $no_rawat
 * @property string $kd_jenis_prw
 * @property string $tgl_perawatan
 * @property string $jam_rawat
 * @property float $tarif_tindakandr
 *
 * @property JnsPerawatanInap $kdJenisPrw
 * @property BayarJmDokter $noBayar
 * @property RegPeriksa $noRawat
 */
class BayarRawatInapDr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bayar_rawat_inap_dr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_bayar', 'no_rawat', 'kd_jenis_prw', 'tgl_perawatan', 'jam_rawat', 'tarif_tindakandr'], 'required'],
            [['tgl_perawatan', 'jam_rawat'], 'safe'],
            [['tarif_tindakandr'], 'number'],
            [['no_bayar'], 'string', 'max' => 30],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_jenis_prw'], 'string', 'max' => 15],
            [['no_bayar', 'no_rawat', 'kd_jenis_prw', 'tgl_perawatan', 'jam_rawat'], 'unique', 'targetAttribute' => ['no_bayar', 'no_rawat', 'kd_jenis_prw', 'tgl_perawatan', 'jam_rawat']],
            [['kd_jenis_prw'], 'exist', 'skipOnError' => true, 'targetClass' => JnsPerawatanInap::class, 'targetAttribute' => ['kd_jenis_prw' => 'kd_jenis_prw']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
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
            'tgl_perawatan' => 'Tgl Perawatan',
            'jam_rawat' => 'Jam Rawat',
            'tarif_tindakandr' => 'Tarif Tindakandr',
        ];
    }

    /**
     * Gets query for [[KdJenisPrw]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrw()
    {
        return $this->hasOne(JnsPerawatanInap::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
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
