<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_pemesanan_medis".
 *
 * @property string $no_pemesanan
 * @property string|null $kode_suplier
 * @property string|null $nip
 * @property string|null $tanggal
 * @property float $total1
 * @property float $potongan
 * @property float $total2
 * @property float|null $ppn
 * @property float|null $meterai
 * @property float|null $tagihan
 * @property string|null $status
 *
 * @property DetailSuratPemesananMedis[] $detailSuratPemesananMedis
 * @property Datasuplier $kodeSuplier
 * @property Pegawai $nip0
 */
class SuratPemesananMedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_pemesanan_medis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pemesanan', 'total1', 'potongan', 'total2'], 'required'],
            [['tanggal'], 'safe'],
            [['total1', 'potongan', 'total2', 'ppn', 'meterai', 'tagihan'], 'number'],
            [['status'], 'string'],
            [['no_pemesanan', 'nip'], 'string', 'max' => 20],
            [['kode_suplier'], 'string', 'max' => 5],
            [['no_pemesanan'], 'unique'],
            [['kode_suplier'], 'exist', 'skipOnError' => true, 'targetClass' => Datasuplier::class, 'targetAttribute' => ['kode_suplier' => 'kode_suplier']],
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
            'total1' => 'Total1',
            'potongan' => 'Potongan',
            'total2' => 'Total2',
            'ppn' => 'Ppn',
            'meterai' => 'Meterai',
            'tagihan' => 'Tagihan',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[DetailSuratPemesananMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailSuratPemesananMedis()
    {
        return $this->hasMany(DetailSuratPemesananMedis::class, ['no_pemesanan' => 'no_pemesanan']);
    }

    /**
     * Gets query for [[KodeSuplier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSuplier()
    {
        return $this->hasOne(Datasuplier::class, ['kode_suplier' => 'kode_suplier']);
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
