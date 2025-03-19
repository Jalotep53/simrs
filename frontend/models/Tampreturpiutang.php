<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tampreturpiutang".
 *
 * @property string $nota_piutang
 * @property string $kode_brng
 * @property string|null $nama_brng
 * @property float|null $jml_piutang
 * @property float|null $h_piutang
 * @property float|null $jml_retur
 * @property float|null $h_retur
 * @property string|null $satuan
 * @property float|null $subtotal
 * @property string $no_batch
 * @property string|null $petugas
 * @property string $no_faktur
 *
 * @property Databarang $kodeBrng
 */
class Tampreturpiutang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tampreturpiutang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nota_piutang', 'kode_brng', 'no_batch', 'no_faktur'], 'required'],
            [['jml_piutang', 'h_piutang', 'jml_retur', 'h_retur', 'subtotal'], 'number'],
            [['nota_piutang', 'no_batch', 'petugas', 'no_faktur'], 'string', 'max' => 20],
            [['kode_brng'], 'string', 'max' => 15],
            [['nama_brng'], 'string', 'max' => 100],
            [['satuan'], 'string', 'max' => 10],
            [['nota_piutang', 'kode_brng', 'no_batch'], 'unique', 'targetAttribute' => ['nota_piutang', 'kode_brng', 'no_batch']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nota_piutang' => 'Nota Piutang',
            'kode_brng' => 'Kode Brng',
            'nama_brng' => 'Nama Brng',
            'jml_piutang' => 'Jml Piutang',
            'h_piutang' => 'H Piutang',
            'jml_retur' => 'Jml Retur',
            'h_retur' => 'H Retur',
            'satuan' => 'Satuan',
            'subtotal' => 'Subtotal',
            'no_batch' => 'No Batch',
            'petugas' => 'Petugas',
            'no_faktur' => 'No Faktur',
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
