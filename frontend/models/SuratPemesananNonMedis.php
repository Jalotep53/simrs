<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_pemesanan_non_medis".
 *
 * @property string $no_pemesanan
 * @property string|null $kode_suplier
 * @property string|null $nip
 * @property string|null $tanggal
 * @property float $subtotal
 * @property float $potongan
 * @property float $total
 * @property float|null $ppn
 * @property float|null $meterai
 * @property float|null $tagihan
 * @property string|null $status
 *
 * @property DetailSuratPemesananNonMedis[] $detailSuratPemesananNonMedis
 * @property Ipsrssuplier $kodeSuplier
 * @property Pegawai $nip0
 */
class SuratPemesananNonMedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_pemesanan_non_medis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pemesanan', 'subtotal', 'potongan', 'total'], 'required'],
            [['tanggal'], 'safe'],
            [['subtotal', 'potongan', 'total', 'ppn', 'meterai', 'tagihan'], 'number'],
            [['status'], 'string'],
            [['no_pemesanan', 'nip'], 'string', 'max' => 20],
            [['kode_suplier'], 'string', 'max' => 5],
            [['no_pemesanan'], 'unique'],
            [['kode_suplier'], 'exist', 'skipOnError' => true, 'targetClass' => Ipsrssuplier::class, 'targetAttribute' => ['kode_suplier' => 'kode_suplier']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nip' => 'nik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_pemesanan' => 'No Pemesanan',
            'kode_suplier' => 'Kode Suplier',
            'nip' => 'Nip',
            'tanggal' => 'Tanggal',
            'subtotal' => 'Subtotal',
            'potongan' => 'Potongan',
            'total' => 'Total',
            'ppn' => 'Ppn',
            'meterai' => 'Meterai',
            'tagihan' => 'Tagihan',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[DetailSuratPemesananNonMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailSuratPemesananNonMedis()
    {
        return $this->hasMany(DetailSuratPemesananNonMedis::class, ['no_pemesanan' => 'no_pemesanan']);
    }

    /**
     * Gets query for [[KodeSuplier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSuplier()
    {
        return $this->hasOne(Ipsrssuplier::class, ['kode_suplier' => 'kode_suplier']);
    }

    /**
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nip']);
    }
}
