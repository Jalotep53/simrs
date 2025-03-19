<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "utd_penunjang_rusak".
 *
 * @property string $kode_brng
 * @property float|null $jml
 * @property float|null $harga
 * @property float|null $total
 * @property string $nip
 * @property string $tanggal
 * @property string|null $keterangan
 *
 * @property Ipsrsbarang $kodeBrng
 * @property Petugas $nip0
 */
class UtdPenunjangRusak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'utd_penunjang_rusak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'nip', 'tanggal'], 'required'],
            [['jml', 'harga', 'total'], 'number'],
            [['tanggal'], 'safe'],
            [['kode_brng'], 'string', 'max' => 15],
            [['nip'], 'string', 'max' => 20],
            [['keterangan'], 'string', 'max' => 60],
            [['kode_brng', 'nip', 'tanggal'], 'unique', 'targetAttribute' => ['kode_brng', 'nip', 'tanggal']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Ipsrsbarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_brng' => 'Kode Brng',
            'jml' => 'Jml',
            'harga' => 'Harga',
            'total' => 'Total',
            'nip' => 'Nip',
            'tanggal' => 'Tanggal',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[KodeBrng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrng()
    {
        return $this->hasOne(Ipsrsbarang::class, ['kode_brng' => 'kode_brng']);
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
