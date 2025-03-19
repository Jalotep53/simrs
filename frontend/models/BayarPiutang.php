<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bayar_piutang".
 *
 * @property string $tgl_bayar
 * @property string $no_rkm_medis
 * @property float $besar_cicilan
 * @property string $catatan
 * @property string $no_rawat
 * @property string $kd_rek
 * @property string $kd_rek_kontra
 * @property float $diskon_piutang
 * @property string $kd_rek_diskon_piutang
 * @property float $tidak_terbayar
 * @property string $kd_rek_tidak_terbayar
 *
 * @property Rekening $kdRek
 * @property Rekening $kdRekDiskonPiutang
 * @property Rekening $kdRekKontra
 * @property Rekening $kdRekTidakTerbayar
 * @property Pasien $noRkmMedis
 */
class BayarPiutang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bayar_piutang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_bayar', 'no_rkm_medis', 'besar_cicilan', 'catatan', 'no_rawat', 'kd_rek', 'kd_rek_kontra', 'diskon_piutang', 'kd_rek_diskon_piutang', 'tidak_terbayar', 'kd_rek_tidak_terbayar'], 'required'],
            [['tgl_bayar'], 'safe'],
            [['besar_cicilan', 'diskon_piutang', 'tidak_terbayar'], 'number'],
            [['no_rkm_medis', 'kd_rek', 'kd_rek_kontra', 'kd_rek_diskon_piutang', 'kd_rek_tidak_terbayar'], 'string', 'max' => 15],
            [['catatan'], 'string', 'max' => 100],
            [['no_rawat'], 'string', 'max' => 17],
            [['tgl_bayar', 'no_rkm_medis', 'no_rawat', 'kd_rek', 'kd_rek_kontra'], 'unique', 'targetAttribute' => ['tgl_bayar', 'no_rkm_medis', 'no_rawat', 'kd_rek', 'kd_rek_kontra']],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
            [['kd_rek_kontra'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek_kontra' => 'kd_rek']],
            [['kd_rek_diskon_piutang'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek_diskon_piutang' => 'kd_rek']],
            [['kd_rek_tidak_terbayar'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek_tidak_terbayar' => 'kd_rek']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tgl_bayar' => 'Tgl Bayar',
            'no_rkm_medis' => 'No Rkm Medis',
            'besar_cicilan' => 'Besar Cicilan',
            'catatan' => 'Catatan',
            'no_rawat' => 'No Rawat',
            'kd_rek' => 'Kd Rek',
            'kd_rek_kontra' => 'Kd Rek Kontra',
            'diskon_piutang' => 'Diskon Piutang',
            'kd_rek_diskon_piutang' => 'Kd Rek Diskon Piutang',
            'tidak_terbayar' => 'Tidak Terbayar',
            'kd_rek_tidak_terbayar' => 'Kd Rek Tidak Terbayar',
        ];
    }

    /**
     * Gets query for [[KdRek]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRek()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[KdRekDiskonPiutang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRekDiskonPiutang()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek_diskon_piutang']);
    }

    /**
     * Gets query for [[KdRekKontra]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRekKontra()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek_kontra']);
    }

    /**
     * Gets query for [[KdRekTidakTerbayar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRekTidakTerbayar()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek_tidak_terbayar']);
    }

    /**
     * Gets query for [[NoRkmMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRkmMedis()
    {
        return $this->hasOne(Pasien::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }
}
