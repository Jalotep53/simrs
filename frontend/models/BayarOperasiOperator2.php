<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bayar_operasi_operator2".
 *
 * @property string $no_bayar
 * @property string $no_rawat
 * @property string $kode_paket
 * @property string $tgl_operasi
 * @property float $biayaoperator2
 *
 * @property PaketOperasi $kodePaket
 * @property BayarJmDokter $noBayar
 * @property RegPeriksa $noRawat
 */
class BayarOperasiOperator2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bayar_operasi_operator2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_bayar', 'no_rawat', 'kode_paket', 'tgl_operasi', 'biayaoperator2'], 'required'],
            [['tgl_operasi'], 'safe'],
            [['biayaoperator2'], 'number'],
            [['no_bayar'], 'string', 'max' => 30],
            [['no_rawat'], 'string', 'max' => 17],
            [['kode_paket'], 'string', 'max' => 15],
            [['no_bayar', 'no_rawat', 'kode_paket', 'tgl_operasi'], 'unique', 'targetAttribute' => ['no_bayar', 'no_rawat', 'kode_paket', 'tgl_operasi']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['no_bayar'], 'exist', 'skipOnError' => true, 'targetClass' => BayarJmDokter::class, 'targetAttribute' => ['no_bayar' => 'no_bayar']],
            [['kode_paket'], 'exist', 'skipOnError' => true, 'targetClass' => PaketOperasi::class, 'targetAttribute' => ['kode_paket' => 'kode_paket']],
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
            'kode_paket' => 'Kode Paket',
            'tgl_operasi' => 'Tgl Operasi',
            'biayaoperator2' => 'Biayaoperator2',
        ];
    }

    /**
     * Gets query for [[KodePaket]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodePaket()
    {
        return $this->hasOne(PaketOperasi::class, ['kode_paket' => 'kode_paket']);
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
