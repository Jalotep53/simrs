<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bayar_pemesanan".
 *
 * @property string $tgl_bayar
 * @property string $no_faktur
 * @property string|null $nip
 * @property float|null $besar_bayar
 * @property string|null $keterangan
 * @property string|null $nama_bayar
 * @property string $no_bukti
 *
 * @property AkunBayarHutang $namaBayar
 * @property Petugas $nip0
 * @property Pemesanan $noFaktur
 */
class BayarPemesanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bayar_pemesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_bayar', 'no_faktur', 'no_bukti'], 'required'],
            [['tgl_bayar'], 'safe'],
            [['besar_bayar'], 'number'],
            [['no_faktur', 'nip'], 'string', 'max' => 20],
            [['keterangan'], 'string', 'max' => 100],
            [['nama_bayar'], 'string', 'max' => 50],
            [['no_bukti'], 'string', 'max' => 30],
            [['tgl_bayar', 'no_faktur', 'no_bukti'], 'unique', 'targetAttribute' => ['tgl_bayar', 'no_faktur', 'no_bukti']],
            [['no_faktur'], 'exist', 'skipOnError' => true, 'targetClass' => Pemesanan::class, 'targetAttribute' => ['no_faktur' => 'no_faktur']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['nama_bayar'], 'exist', 'skipOnError' => true, 'targetClass' => AkunBayarHutang::class, 'targetAttribute' => ['nama_bayar' => 'nama_bayar']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tgl_bayar' => 'Tgl Bayar',
            'no_faktur' => 'No Faktur',
            'nip' => 'Nip',
            'besar_bayar' => 'Besar Bayar',
            'keterangan' => 'Keterangan',
            'nama_bayar' => 'Nama Bayar',
            'no_bukti' => 'No Bukti',
        ];
    }

    /**
     * Gets query for [[NamaBayar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNamaBayar()
    {
        return $this->hasOne(AkunBayarHutang::class, ['nama_bayar' => 'nama_bayar']);
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
     * Gets query for [[NoFaktur]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoFaktur()
    {
        return $this->hasOne(Pemesanan::class, ['no_faktur' => 'no_faktur']);
    }
}
