<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "utd_pendonor".
 *
 * @property string $no_pendonor
 * @property string $nama
 * @property string $no_ktp
 * @property string $jk
 * @property string $tmp_lahir
 * @property string $tgl_lahir
 * @property string $alamat
 * @property int $kd_kel
 * @property int $kd_kec
 * @property int $kd_kab
 * @property int $kd_prop
 * @property string $golongan_darah
 * @property string $resus
 * @property string $no_telp
 *
 * @property Kabupaten $kdKab
 * @property Kecamatan $kdKec
 * @property Kelurahan $kdKel
 * @property Propinsi $kdProp
 * @property UtdDonor[] $utdDonors
 */
class UtdPendonor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'utd_pendonor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pendonor', 'nama', 'no_ktp', 'jk', 'tmp_lahir', 'tgl_lahir', 'alamat', 'kd_kel', 'kd_kec', 'kd_kab', 'kd_prop', 'golongan_darah', 'resus', 'no_telp'], 'required'],
            [['jk', 'golongan_darah', 'resus'], 'string'],
            [['tgl_lahir'], 'safe'],
            [['kd_kel', 'kd_kec', 'kd_kab', 'kd_prop'], 'integer'],
            [['no_pendonor', 'tmp_lahir'], 'string', 'max' => 15],
            [['nama', 'no_telp'], 'string', 'max' => 40],
            [['no_ktp'], 'string', 'max' => 20],
            [['alamat'], 'string', 'max' => 100],
            [['no_pendonor'], 'unique'],
            [['kd_kel'], 'exist', 'skipOnError' => true, 'targetClass' => Kelurahan::class, 'targetAttribute' => ['kd_kel' => 'kd_kel']],
            [['kd_kec'], 'exist', 'skipOnError' => true, 'targetClass' => Kecamatan::class, 'targetAttribute' => ['kd_kec' => 'kd_kec']],
            [['kd_kab'], 'exist', 'skipOnError' => true, 'targetClass' => Kabupaten::class, 'targetAttribute' => ['kd_kab' => 'kd_kab']],
            [['kd_prop'], 'exist', 'skipOnError' => true, 'targetClass' => Propinsi::class, 'targetAttribute' => ['kd_prop' => 'kd_prop']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_pendonor' => 'No Pendonor',
            'nama' => 'Nama',
            'no_ktp' => 'No Ktp',
            'jk' => 'Jk',
            'tmp_lahir' => 'Tmp Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'alamat' => 'Alamat',
            'kd_kel' => 'Kd Kel',
            'kd_kec' => 'Kd Kec',
            'kd_kab' => 'Kd Kab',
            'kd_prop' => 'Kd Prop',
            'golongan_darah' => 'Golongan Darah',
            'resus' => 'Resus',
            'no_telp' => 'No Telp',
        ];
    }

    /**
     * Gets query for [[KdKab]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdKab()
    {
        return $this->hasOne(Kabupaten::class, ['kd_kab' => 'kd_kab']);
    }

    /**
     * Gets query for [[KdKec]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdKec()
    {
        return $this->hasOne(Kecamatan::class, ['kd_kec' => 'kd_kec']);
    }

    /**
     * Gets query for [[KdKel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdKel()
    {
        return $this->hasOne(Kelurahan::class, ['kd_kel' => 'kd_kel']);
    }

    /**
     * Gets query for [[KdProp]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdProp()
    {
        return $this->hasOne(Propinsi::class, ['kd_prop' => 'kd_prop']);
    }

    /**
     * Gets query for [[UtdDonors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdDonors()
    {
        return $this->hasMany(UtdDonor::class, ['no_pendonor' => 'no_pendonor']);
    }
}
