<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bayar_piutang_lainlain".
 *
 * @property string $tgl_bayar
 * @property string $kode_peminjam
 * @property float $besar_cicilan
 * @property string $keterangan
 * @property string $nota_piutang
 * @property string $kd_rek
 * @property string $nama_bayar
 *
 * @property Rekening $kdRek
 * @property Peminjampiutang $kodePeminjam
 * @property AkunBayar $namaBayar
 * @property PiutangLainlain $notaPiutang
 */
class BayarPiutangLainlain extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bayar_piutang_lainlain';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_bayar', 'kode_peminjam', 'besar_cicilan', 'keterangan', 'nota_piutang', 'kd_rek', 'nama_bayar'], 'required'],
            [['tgl_bayar'], 'safe'],
            [['besar_cicilan'], 'number'],
            [['kode_peminjam'], 'string', 'max' => 5],
            [['keterangan'], 'string', 'max' => 100],
            [['nota_piutang', 'kd_rek'], 'string', 'max' => 15],
            [['nama_bayar'], 'string', 'max' => 50],
            [['tgl_bayar', 'kode_peminjam', 'nota_piutang', 'kd_rek', 'nama_bayar'], 'unique', 'targetAttribute' => ['tgl_bayar', 'kode_peminjam', 'nota_piutang', 'kd_rek', 'nama_bayar']],
            [['kode_peminjam'], 'exist', 'skipOnError' => true, 'targetClass' => Peminjampiutang::class, 'targetAttribute' => ['kode_peminjam' => 'kode_peminjam']],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
            [['nama_bayar'], 'exist', 'skipOnError' => true, 'targetClass' => AkunBayar::class, 'targetAttribute' => ['nama_bayar' => 'nama_bayar']],
            [['nota_piutang'], 'exist', 'skipOnError' => true, 'targetClass' => PiutangLainlain::class, 'targetAttribute' => ['nota_piutang' => 'nota_piutang']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tgl_bayar' => 'Tgl Bayar',
            'kode_peminjam' => 'Kode Peminjam',
            'besar_cicilan' => 'Besar Cicilan',
            'keterangan' => 'Keterangan',
            'nota_piutang' => 'Nota Piutang',
            'kd_rek' => 'Kd Rek',
            'nama_bayar' => 'Nama Bayar',
        ];
    }

    /**
     * Gets query for [[KdRek]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRek()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[KodePeminjam]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodePeminjam()
    {
        return $this->hasOne(Peminjampiutang::class, ['kode_peminjam' => 'kode_peminjam']);
    }

    /**
     * Gets query for [[NamaBayar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNamaBayar()
    {
        return $this->hasOne(AkunBayar::class, ['nama_bayar' => 'nama_bayar']);
    }

    /**
     * Gets query for [[NotaPiutang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotaPiutang()
    {
        return $this->hasOne(PiutangLainlain::class, ['nota_piutang' => 'nota_piutang']);
    }
}
