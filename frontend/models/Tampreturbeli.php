<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tampreturbeli".
 *
 * @property string $no_faktur
 * @property string $kode_brng
 * @property string|null $nama_brng
 * @property string|null $satuan
 * @property float|null $h_beli
 * @property float|null $jml_beli
 * @property float|null $h_retur
 * @property float|null $jml_retur
 * @property float|null $total
 * @property string $no_batch
 * @property float|null $jml_retur2
 * @property string $kadaluarsa
 * @property string $petugas
 *
 * @property Databarang $kodeBrng
 */
class Tampreturbeli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tampreturbeli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_faktur', 'kode_brng', 'no_batch', 'kadaluarsa', 'petugas'], 'required'],
            [['h_beli', 'jml_beli', 'h_retur', 'jml_retur', 'total', 'jml_retur2'], 'number'],
            [['no_faktur', 'no_batch', 'petugas'], 'string', 'max' => 20],
            [['kode_brng'], 'string', 'max' => 15],
            [['nama_brng'], 'string', 'max' => 100],
            [['satuan'], 'string', 'max' => 10],
            [['kadaluarsa'], 'string', 'max' => 14],
            [['no_faktur', 'kode_brng'], 'unique', 'targetAttribute' => ['no_faktur', 'kode_brng']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_faktur' => 'No Faktur',
            'kode_brng' => 'Kode Brng',
            'nama_brng' => 'Nama Brng',
            'satuan' => 'Satuan',
            'h_beli' => 'H Beli',
            'jml_beli' => 'Jml Beli',
            'h_retur' => 'H Retur',
            'jml_retur' => 'Jml Retur',
            'total' => 'Total',
            'no_batch' => 'No Batch',
            'jml_retur2' => 'Jml Retur2',
            'kadaluarsa' => 'Kadaluarsa',
            'petugas' => 'Petugas',
        ];
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
}
