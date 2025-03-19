<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pemasukan_lain".
 *
 * @property string $no_masuk
 * @property string $tanggal
 * @property string $kode_kategori
 * @property float|null $besar
 * @property string|null $nip
 * @property string|null $keterangan
 * @property string|null $keperluan
 *
 * @property KategoriPemasukanLain $kodeKategori
 * @property Petugas $nip0
 */
class PemasukanLain extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemasukan_lain';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_masuk'], 'required'],
            [['tanggal'], 'safe'],
            [['besar'], 'number'],
            [['no_masuk'], 'string', 'max' => 17],
            [['kode_kategori'], 'string', 'max' => 5],
            [['nip'], 'string', 'max' => 20],
            [['keterangan'], 'string', 'max' => 50],
            [['keperluan'], 'string', 'max' => 70],
            [['no_masuk'], 'unique'],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['kode_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriPemasukanLain::class, 'targetAttribute' => ['kode_kategori' => 'kode_kategori']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_masuk' => 'No Masuk',
            'tanggal' => 'Tanggal',
            'kode_kategori' => 'Kode Kategori',
            'besar' => 'Besar',
            'nip' => 'Nip',
            'keterangan' => 'Keterangan',
            'keperluan' => 'Keperluan',
        ];
    }

    /**
     * Gets query for [[KodeKategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeKategori()
    {
        return $this->hasOne(KategoriPemasukanLain::class, ['kode_kategori' => 'kode_kategori']);
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
