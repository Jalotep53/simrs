<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "deposit".
 *
 * @property string $no_deposit
 * @property string $no_rawat
 * @property string $tgl_deposit
 * @property string $nama_bayar
 * @property float $besarppn
 * @property float|null $besar_deposit
 * @property string $nip
 * @property string $keterangan
 *
 * @property AkunBayar $namaBayar
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class Deposit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deposit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_deposit', 'no_rawat', 'tgl_deposit', 'nama_bayar', 'besarppn', 'nip', 'keterangan'], 'required'],
            [['tgl_deposit'], 'safe'],
            [['besarppn', 'besar_deposit'], 'number'],
            [['no_deposit', 'no_rawat'], 'string', 'max' => 17],
            [['nama_bayar'], 'string', 'max' => 50],
            [['nip'], 'string', 'max' => 20],
            [['keterangan'], 'string', 'max' => 70],
            [['no_deposit'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
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
            'no_deposit' => 'No Deposit',
            'no_rawat' => 'No Rawat',
            'tgl_deposit' => 'Tgl Deposit',
            'nama_bayar' => 'Nama Bayar',
            'besarppn' => 'Besarppn',
            'besar_deposit' => 'Besar Deposit',
            'nip' => 'Nip',
            'keterangan' => 'Keterangan',
        ];
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
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
