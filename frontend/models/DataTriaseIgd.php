<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "data_triase_igd".
 *
 * @property string $no_rawat
 * @property string $tgl_kunjungan
 * @property string $cara_masuk
 * @property string $alat_transportasi
 * @property string $alasan_kedatangan
 * @property string $keterangan_kedatangan
 * @property string $kode_kasus
 * @property string $tekanan_darah
 * @property string $nadi
 * @property string $pernapasan
 * @property string $suhu
 * @property string $saturasi_o2
 * @property string $nyeri
 *
 * @property MasterTriaseMacamKasus $kodeKasus
 * @property RegPeriksa $noRawat
 */
class DataTriaseIgd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_triase_igd';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_kunjungan', 'cara_masuk', 'alat_transportasi', 'alasan_kedatangan', 'keterangan_kedatangan', 'kode_kasus', 'tekanan_darah', 'nadi', 'pernapasan', 'suhu', 'saturasi_o2', 'nyeri'], 'required'],
            [['tgl_kunjungan'], 'safe'],
            [['cara_masuk', 'alat_transportasi', 'alasan_kedatangan'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['keterangan_kedatangan'], 'string', 'max' => 100],
            [['kode_kasus', 'nadi', 'pernapasan', 'saturasi_o2'], 'string', 'max' => 3],
            [['tekanan_darah'], 'string', 'max' => 8],
            [['suhu', 'nyeri'], 'string', 'max' => 5],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kode_kasus'], 'exist', 'skipOnError' => true, 'targetClass' => MasterTriaseMacamKasus::class, 'targetAttribute' => ['kode_kasus' => 'kode_kasus']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tgl_kunjungan' => 'Tgl Kunjungan',
            'cara_masuk' => 'Cara Masuk',
            'alat_transportasi' => 'Alat Transportasi',
            'alasan_kedatangan' => 'Alasan Kedatangan',
            'keterangan_kedatangan' => 'Keterangan Kedatangan',
            'kode_kasus' => 'Kode Kasus',
            'tekanan_darah' => 'Tekanan Darah',
            'nadi' => 'Nadi',
            'pernapasan' => 'Pernapasan',
            'suhu' => 'Suhu',
            'saturasi_o2' => 'Saturasi O2',
            'nyeri' => 'Nyeri',
        ];
    }

    /**
     * Gets query for [[KodeKasus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeKasus()
    {
        return $this->hasOne(MasterTriaseMacamKasus::class, ['kode_kasus' => 'kode_kasus']);
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
