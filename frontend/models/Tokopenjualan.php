<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tokopenjualan".
 *
 * @property string $nota_jual
 * @property string|null $tgl_jual
 * @property string|null $nip
 * @property string|null $no_member
 * @property string|null $nm_member
 * @property string|null $keterangan
 * @property string|null $jns_jual
 * @property float|null $ongkir
 * @property float $ppn
 * @property string|null $kd_rek
 * @property float $total
 * @property string $nama_bayar
 *
 * @property Rekening $kdRek
 * @property AkunBayar $namaBayar
 * @property Petugas $nip0
 * @property Tokomember $noMember
 * @property TokoDetailJual[] $tokoDetailJuals
 */
class Tokopenjualan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tokopenjualan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nota_jual', 'ppn', 'total', 'nama_bayar'], 'required'],
            [['tgl_jual'], 'safe'],
            [['jns_jual'], 'string'],
            [['ongkir', 'ppn', 'total'], 'number'],
            [['nota_jual', 'kd_rek'], 'string', 'max' => 15],
            [['nip'], 'string', 'max' => 20],
            [['no_member'], 'string', 'max' => 10],
            [['nm_member', 'nama_bayar'], 'string', 'max' => 50],
            [['keterangan'], 'string', 'max' => 40],
            [['nota_jual'], 'unique'],
            [['no_member'], 'exist', 'skipOnError' => true, 'targetClass' => Tokomember::class, 'targetAttribute' => ['no_member' => 'no_member']],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['nama_bayar'], 'exist', 'skipOnError' => true, 'targetClass' => AkunBayar::class, 'targetAttribute' => ['nama_bayar' => 'nama_bayar']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nota_jual' => 'Nota Jual',
            'tgl_jual' => 'Tgl Jual',
            'nip' => 'Nip',
            'no_member' => 'No Member',
            'nm_member' => 'Nm Member',
            'keterangan' => 'Keterangan',
            'jns_jual' => 'Jns Jual',
            'ongkir' => 'Ongkir',
            'ppn' => 'Ppn',
            'kd_rek' => 'Kd Rek',
            'total' => 'Total',
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

    /**
     * Gets query for [[NoMember]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoMember()
    {
        return $this->hasOne(Tokomember::class, ['no_member' => 'no_member']);
    }

    /**
     * Gets query for [[TokoDetailJuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailJuals()
    {
        return $this->hasMany(TokoDetailJual::class, ['nota_jual' => 'nota_jual']);
    }
}
