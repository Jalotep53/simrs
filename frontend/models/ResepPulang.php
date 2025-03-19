<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "resep_pulang".
 *
 * @property string $no_rawat
 * @property string $kode_brng
 * @property float $jml_barang
 * @property float $harga
 * @property float $total
 * @property string $dosis
 * @property string $tanggal
 * @property string $jam
 * @property string $kd_bangsal
 * @property string $no_batch
 * @property string $no_faktur
 *
 * @property Bangsal $kdBangsal
 * @property Databarang $kodeBrng
 * @property RegPeriksa $noRawat
 */
class ResepPulang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resep_pulang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kode_brng', 'jml_barang', 'harga', 'total', 'dosis', 'tanggal', 'jam', 'kd_bangsal', 'no_batch', 'no_faktur'], 'required'],
            [['jml_barang', 'harga', 'total'], 'number'],
            [['tanggal', 'jam'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kode_brng'], 'string', 'max' => 15],
            [['dosis'], 'string', 'max' => 150],
            [['kd_bangsal'], 'string', 'max' => 5],
            [['no_batch', 'no_faktur'], 'string', 'max' => 20],
            [['no_rawat', 'kode_brng', 'tanggal', 'jam', 'no_batch', 'no_faktur'], 'unique', 'targetAttribute' => ['no_rawat', 'kode_brng', 'tanggal', 'jam', 'no_batch', 'no_faktur']],
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
            'no_rawat' => 'No Rawat',
            'kode_brng' => 'Kode Brng',
            'jml_barang' => 'Jml Barang',
            'harga' => 'Harga',
            'total' => 'Total',
            'dosis' => 'Dosis',
            'tanggal' => 'Tanggal',
            'jam' => 'Jam',
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
