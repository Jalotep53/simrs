<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pemesanan".
 *
 * @property string $no_faktur
 * @property string $no_order
 * @property string|null $kode_suplier
 * @property string|null $nip
 * @property string|null $tgl_pesan
 * @property string|null $tgl_faktur
 * @property string|null $tgl_tempo
 * @property float $total1
 * @property float $potongan
 * @property float $total2
 * @property float $ppn
 * @property float|null $meterai
 * @property float $tagihan
 * @property string $kd_bangsal
 * @property string|null $status
 *
 * @property BayarPemesanan[] $bayarPemesanans
 * @property BuktiPemesanan $buktiPemesanan
 * @property DetailTitipFaktur[] $detailTitipFakturs
 * @property Detailpesan[] $detailpesans
 * @property Bangsal $kdBangsal
 * @property Datasuplier $kodeSuplier
 * @property Petugas $nip0
 * @property TitipFaktur[] $noTagihans
 */
class Pemesanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_faktur', 'no_order', 'total1', 'potongan', 'total2', 'ppn', 'tagihan', 'kd_bangsal'], 'required'],
            [['tgl_pesan', 'tgl_faktur', 'tgl_tempo'], 'safe'],
            [['total1', 'potongan', 'total2', 'ppn', 'meterai', 'tagihan'], 'number'],
            [['status'], 'string'],
            [['no_faktur', 'no_order', 'nip'], 'string', 'max' => 20],
            [['kode_suplier', 'kd_bangsal'], 'string', 'max' => 5],
            [['no_faktur'], 'unique'],
            [['kode_suplier'], 'exist', 'skipOnError' => true, 'targetClass' => Datasuplier::class, 'targetAttribute' => ['kode_suplier' => 'kode_suplier']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_faktur' => 'No Faktur',
            'no_order' => 'No Order',
            'kode_suplier' => 'Kode Suplier',
            'nip' => 'Nip',
            'tgl_pesan' => 'Tgl Pesan',
            'tgl_faktur' => 'Tgl Faktur',
            'tgl_tempo' => 'Tgl Tempo',
            'total1' => 'Total1',
            'potongan' => 'Potongan',
            'total2' => 'Total2',
            'ppn' => 'Ppn',
            'meterai' => 'Meterai',
            'tagihan' => 'Tagihan',
            'kd_bangsal' => 'Kd Bangsal',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[BayarPemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPemesanans()
    {
        return $this->hasMany(BayarPemesanan::class, ['no_faktur' => 'no_faktur']);
    }

    /**
     * Gets query for [[BuktiPemesanan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuktiPemesanan()
    {
        return $this->hasOne(BuktiPemesanan::class, ['no_faktur' => 'no_faktur']);
    }

    /**
     * Gets query for [[DetailTitipFakturs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailTitipFakturs()
    {
        return $this->hasMany(DetailTitipFaktur::class, ['no_faktur' => 'no_faktur']);
    }

    /**
     * Gets query for [[Detailpesans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailpesans()
    {
        return $this->hasMany(Detailpesan::class, ['no_faktur' => 'no_faktur']);
    }

    /**
     * Gets query for [[KdBangsal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdBangsal()
    {
        return $this->hasOne(Bangsal::class, ['kd_bangsal' => 'kd_bangsal']);
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
        return $this->hasOne(Petugas::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[NoTagihans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoTagihans()
    {
        return $this->hasMany(TitipFaktur::class, ['no_tagihan' => 'no_tagihan'])->viaTable('detail_titip_faktur', ['no_faktur' => 'no_faktur']);
    }
}
