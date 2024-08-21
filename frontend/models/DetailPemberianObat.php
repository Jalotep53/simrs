<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detail_pemberian_obat".
 *
 * @property string $tgl_perawatan
 * @property string $jam
 * @property string $no_rawat
 * @property string $kode_brng
 * @property float|null $h_beli
 * @property float|null $biaya_obat
 * @property float $jml
 * @property float|null $embalase
 * @property float|null $tuslah
 * @property float $total
 * @property string|null $status
 * @property string|null $kd_bangsal
 * @property string $no_batch
 * @property string $no_faktur
 *
 * @property Bangsal $kdBangsal
 * @property Databarang $kodeBrng
 * @property RegPeriksa $noRawat
 */
class DetailPemberianObat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_pemberian_obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_perawatan', 'jam', 'no_rawat', 'kode_brng', 'jml', 'total', 'no_batch', 'no_faktur'], 'required'],
            [['tgl_perawatan', 'jam'], 'safe'],
            [['h_beli', 'biaya_obat', 'jml', 'embalase', 'tuslah', 'total'], 'number'],
            [['status'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kode_brng'], 'string', 'max' => 15],
            [['kd_bangsal'], 'string', 'max' => 5],
            [['no_batch', 'no_faktur'], 'string', 'max' => 20],
            [['tgl_perawatan', 'jam', 'no_rawat', 'kode_brng', 'no_batch', 'no_faktur'], 'unique', 'targetAttribute' => ['tgl_perawatan', 'jam', 'no_rawat', 'kode_brng', 'no_batch', 'no_faktur']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tgl_perawatan' => 'Tgl Perawatan',
            'jam' => 'Jam',
            'no_rawat' => 'No Rawat',
            'kode_brng' => 'Kode Brng',
            'h_beli' => 'H Beli',
            'biaya_obat' => 'Biaya Obat',
            'jml' => 'Jml',
            'embalase' => 'Embalase',
            'tuslah' => 'Tuslah',
            'total' => 'Total',
            'status' => 'Status',
            'kd_bangsal' => 'Kd Bangsal',
            'no_batch' => 'No Batch',
            'no_faktur' => 'No Faktur',
        ];
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
     * Gets query for [[KodeBrng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrng()
    {
        return $this->hasOne(Databarang::class, ['kode_brng' => 'kode_brng']);
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
