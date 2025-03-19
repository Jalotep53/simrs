<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pengeluaran_harian".
 *
 * @property string $no_keluar
 * @property string $tanggal
 * @property string|null $kode_kategori
 * @property float $biaya
 * @property string|null $nip
 * @property string $keterangan
 *
 * @property KategoriPengeluaranHarian $kodeKategori
 * @property Petugas $nip0
 */
class PengeluaranHarian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengeluaran_harian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_keluar', 'biaya'], 'required'],
            [['tanggal'], 'safe'],
            [['biaya'], 'number'],
            [['no_keluar'], 'string', 'max' => 30],
            [['kode_kategori'], 'string', 'max' => 5],
            [['nip'], 'string', 'max' => 20],
            [['keterangan'], 'string', 'max' => 100],
            [['no_keluar'], 'unique'],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['kode_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriPengeluaranHarian::class, 'targetAttribute' => ['kode_kategori' => 'kode_kategori']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_keluar' => 'No Keluar',
            'tanggal' => 'Tanggal',
            'kode_kategori' => 'Kode Kategori',
            'biaya' => 'Biaya',
            'nip' => 'Nip',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[KodeKategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeKategori()
    {
        return $this->hasOne(KategoriPengeluaranHarian::class, ['kode_kategori' => 'kode_kategori']);
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
}
