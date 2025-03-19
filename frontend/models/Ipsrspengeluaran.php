<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ipsrspengeluaran".
 *
 * @property string $no_keluar
 * @property string $tanggal
 * @property string $nip
 * @property string $keterangan
 *
 * @property Ipsrsdetailpengeluaran[] $ipsrsdetailpengeluarans
 * @property Petugas $nip0
 */
class Ipsrspengeluaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ipsrspengeluaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_keluar', 'tanggal', 'nip', 'keterangan'], 'required'],
            [['tanggal'], 'safe'],
            [['no_keluar'], 'string', 'max' => 15],
            [['nip'], 'string', 'max' => 20],
            [['keterangan'], 'string', 'max' => 150],
            [['no_keluar'], 'unique'],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
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
            'nip' => 'Nip',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[Ipsrsdetailpengeluarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsdetailpengeluarans()
    {
        return $this->hasMany(Ipsrsdetailpengeluaran::class, ['no_keluar' => 'no_keluar']);
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
