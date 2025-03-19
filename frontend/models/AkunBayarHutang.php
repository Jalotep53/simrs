<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "akun_bayar_hutang".
 *
 * @property string $nama_bayar
 * @property string|null $kd_rek
 *
 * @property BayarJmDokter[] $bayarJmDokters
 * @property BayarPemesananDapur[] $bayarPemesananDapurs
 * @property BayarPemesananInventaris[] $bayarPemesananInventaris
 * @property BayarPemesananNonMedis[] $bayarPemesananNonMedis
 * @property BayarPemesanan[] $bayarPemesanans
 * @property Rekening $kdRek
 * @property TokoBayarPemesanan[] $tokoBayarPemesanans
 */
class AkunBayarHutang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'akun_bayar_hutang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_bayar'], 'required'],
            [['nama_bayar'], 'string', 'max' => 50],
            [['kd_rek'], 'string', 'max' => 15],
            [['nama_bayar'], 'unique'],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nama_bayar' => 'Nama Bayar',
            'kd_rek' => 'Kd Rek',
        ];
    }

    /**
     * Gets query for [[BayarJmDokters]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarJmDokters()
    {
        return $this->hasMany(BayarJmDokter::class, ['nama_bayar' => 'nama_bayar']);
    }

    /**
     * Gets query for [[BayarPemesananDapurs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPemesananDapurs()
    {
        return $this->hasMany(BayarPemesananDapur::class, ['nama_bayar' => 'nama_bayar']);
    }

    /**
     * Gets query for [[BayarPemesananInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPemesananInventaris()
    {
        return $this->hasMany(BayarPemesananInventaris::class, ['nama_bayar' => 'nama_bayar']);
    }

    /**
     * Gets query for [[BayarPemesananNonMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPemesananNonMedis()
    {
        return $this->hasMany(BayarPemesananNonMedis::class, ['nama_bayar' => 'nama_bayar']);
    }

    /**
     * Gets query for [[BayarPemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPemesanans()
    {
        return $this->hasMany(BayarPemesanan::class, ['nama_bayar' => 'nama_bayar']);
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
     * Gets query for [[TokoBayarPemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoBayarPemesanans()
    {
        return $this->hasMany(TokoBayarPemesanan::class, ['nama_bayar' => 'nama_bayar']);
    }
}
