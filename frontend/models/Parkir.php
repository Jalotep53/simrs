<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "parkir".
 *
 * @property string|null $nip
 * @property string|null $nomer_kartu
 * @property string|null $kd_parkir
 * @property string $no_kendaraan
 * @property string $tgl_masuk
 * @property string $jam_masuk
 * @property string|null $tgl_keluar
 * @property string|null $jam_keluar
 * @property int|null $lama_parkir
 * @property float|null $ttl_biaya
 *
 * @property ParkirJenis $kdParkir
 * @property Petugas $nip0
 */
class Parkir extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parkir';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_kendaraan', 'tgl_masuk', 'jam_masuk'], 'required'],
            [['tgl_masuk', 'jam_masuk', 'tgl_keluar', 'jam_keluar'], 'safe'],
            [['lama_parkir'], 'integer'],
            [['ttl_biaya'], 'number'],
            [['nip'], 'string', 'max' => 20],
            [['nomer_kartu', 'kd_parkir'], 'string', 'max' => 5],
            [['no_kendaraan'], 'string', 'max' => 15],
            [['no_kendaraan', 'tgl_masuk', 'jam_masuk'], 'unique', 'targetAttribute' => ['no_kendaraan', 'tgl_masuk', 'jam_masuk']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['kd_parkir'], 'exist', 'skipOnError' => true, 'targetClass' => ParkirJenis::class, 'targetAttribute' => ['kd_parkir' => 'kd_parkir']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nip' => 'Nip',
            'nomer_kartu' => 'Nomer Kartu',
            'kd_parkir' => 'Kd Parkir',
            'no_kendaraan' => 'No Kendaraan',
            'tgl_masuk' => 'Tgl Masuk',
            'jam_masuk' => 'Jam Masuk',
            'tgl_keluar' => 'Tgl Keluar',
            'jam_keluar' => 'Jam Keluar',
            'lama_parkir' => 'Lama Parkir',
            'ttl_biaya' => 'Ttl Biaya',
        ];
    }

    /**
     * Gets query for [[KdParkir]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdParkir()
    {
        return $this->hasOne(ParkirJenis::class, ['kd_parkir' => 'kd_parkir']);
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
