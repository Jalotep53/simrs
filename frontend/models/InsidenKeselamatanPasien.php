<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "insiden_keselamatan_pasien".
 *
 * @property string $no_rawat
 * @property string $tgl_kejadian
 * @property string $jam_kejadian
 * @property string $tgl_lapor
 * @property string $jam_lapor
 * @property string $kode_insiden
 * @property string $nip
 * @property string $lokasi
 * @property string $kronologis
 * @property string $unit_terkait
 * @property string $akibat
 * @property string $tindakan_insiden
 * @property string $identifikasi_masalah
 * @property string $rtl
 *
 * @property InsidenKeselamatan $kodeInsiden
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class InsidenKeselamatanPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'insiden_keselamatan_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_kejadian', 'jam_kejadian', 'tgl_lapor', 'jam_lapor', 'kode_insiden', 'nip', 'lokasi', 'kronologis', 'unit_terkait', 'akibat', 'tindakan_insiden', 'identifikasi_masalah', 'rtl'], 'required'],
            [['tgl_kejadian', 'jam_kejadian', 'tgl_lapor', 'jam_lapor'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kode_insiden'], 'string', 'max' => 5],
            [['nip'], 'string', 'max' => 20],
            [['lokasi', 'unit_terkait'], 'string', 'max' => 60],
            [['kronologis'], 'string', 'max' => 300],
            [['akibat', 'tindakan_insiden', 'identifikasi_masalah', 'rtl'], 'string', 'max' => 150],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kode_insiden'], 'exist', 'skipOnError' => true, 'targetClass' => InsidenKeselamatan::class, 'targetAttribute' => ['kode_insiden' => 'kode_insiden']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tgl_kejadian' => 'Tgl Kejadian',
            'jam_kejadian' => 'Jam Kejadian',
            'tgl_lapor' => 'Tgl Lapor',
            'jam_lapor' => 'Jam Lapor',
            'kode_insiden' => 'Kode Insiden',
            'nip' => 'Nip',
            'lokasi' => 'Lokasi',
            'kronologis' => 'Kronologis',
            'unit_terkait' => 'Unit Terkait',
            'akibat' => 'Akibat',
            'tindakan_insiden' => 'Tindakan Insiden',
            'identifikasi_masalah' => 'Identifikasi Masalah',
            'rtl' => 'Rtl',
        ];
    }

    /**
     * Gets query for [[KodeInsiden]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeInsiden()
    {
        return $this->hasOne(InsidenKeselamatan::class, ['kode_insiden' => 'kode_insiden']);
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
