<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "piutang_lainlain".
 *
 * @property string $nota_piutang
 * @property string|null $tgl_piutang
 * @property string|null $nip
 * @property string|null $kode_peminjam
 * @property string $kd_rek
 * @property string|null $nama_bayar
 * @property string|null $keterangan
 * @property string $tgltempo
 * @property float $nominal
 * @property float $sisapiutang
 * @property string $status
 *
 * @property BayarPiutangLainlain[] $bayarPiutangLainlains
 * @property Rekening $kdRek
 * @property Peminjampiutang $kodePeminjam
 * @property AkunBayar $namaBayar
 * @property Petugas $nip0
 */
class PiutangLainlain extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'piutang_lainlain';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nota_piutang', 'kd_rek', 'tgltempo', 'nominal', 'sisapiutang', 'status'], 'required'],
            [['tgl_piutang', 'tgltempo'], 'safe'],
            [['nominal', 'sisapiutang'], 'number'],
            [['status'], 'string'],
            [['nota_piutang', 'nip'], 'string', 'max' => 20],
            [['kode_peminjam'], 'string', 'max' => 5],
            [['kd_rek'], 'string', 'max' => 15],
            [['nama_bayar'], 'string', 'max' => 50],
            [['keterangan'], 'string', 'max' => 100],
            [['nota_piutang'], 'unique'],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['kode_peminjam'], 'exist', 'skipOnError' => true, 'targetClass' => Peminjampiutang::class, 'targetAttribute' => ['kode_peminjam' => 'kode_peminjam']],
            [['nama_bayar'], 'exist', 'skipOnError' => true, 'targetClass' => AkunBayar::class, 'targetAttribute' => ['nama_bayar' => 'nama_bayar']],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nota_piutang' => 'Nota Piutang',
            'tgl_piutang' => 'Tgl Piutang',
            'nip' => 'Nip',
            'kode_peminjam' => 'Kode Peminjam',
            'kd_rek' => 'Kd Rek',
            'nama_bayar' => 'Nama Bayar',
            'keterangan' => 'Keterangan',
            'tgltempo' => 'Tgltempo',
            'nominal' => 'Nominal',
            'sisapiutang' => 'Sisapiutang',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[BayarPiutangLainlains]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarPiutangLainlains()
    {
        return $this->hasMany(BayarPiutangLainlain::class, ['nota_piutang' => 'nota_piutang']);
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
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip']);
    }
}
