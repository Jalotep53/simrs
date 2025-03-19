<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ipsrs_hibah".
 *
 * @property string $no_hibah
 * @property string|null $kode_pemberi
 * @property string|null $nip
 * @property string|null $tgl_hibah
 * @property float $totalhibah
 * @property string $keterangan
 *
 * @property IpsrsDetailHibah[] $ipsrsDetailHibahs
 * @property Ipsrsbarang[] $kodeBrngs
 * @property Pemberihibah $kodePemberi
 * @property Petugas $nip0
 */
class IpsrsHibah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ipsrs_hibah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_hibah', 'totalhibah', 'keterangan'], 'required'],
            [['tgl_hibah'], 'safe'],
            [['totalhibah'], 'number'],
            [['no_hibah', 'nip'], 'string', 'max' => 20],
            [['kode_pemberi'], 'string', 'max' => 5],
            [['keterangan'], 'string', 'max' => 100],
            [['no_hibah'], 'unique'],
            [['kode_pemberi'], 'exist', 'skipOnError' => true, 'targetClass' => Pemberihibah::class, 'targetAttribute' => ['kode_pemberi' => 'kode_pemberi']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_hibah' => 'No Hibah',
            'kode_pemberi' => 'Kode Pemberi',
            'nip' => 'Nip',
            'tgl_hibah' => 'Tgl Hibah',
            'totalhibah' => 'Totalhibah',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[IpsrsDetailHibahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIpsrsDetailHibahs()
    {
        return $this->hasMany(IpsrsDetailHibah::class, ['no_hibah' => 'no_hibah']);
    }

    /**
     * Gets query for [[KodeBrngs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrngs()
    {
        return $this->hasMany(Ipsrsbarang::class, ['kode_brng' => 'kode_brng'])->viaTable('ipsrs_detail_hibah', ['no_hibah' => 'no_hibah']);
    }

    /**
     * Gets query for [[KodePemberi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodePemberi()
    {
        return $this->hasOne(Pemberihibah::class, ['kode_pemberi' => 'kode_pemberi']);
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
