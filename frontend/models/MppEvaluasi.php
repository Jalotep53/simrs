<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mpp_evaluasi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $kd_dokter
 * @property string|null $kd_konsulan
 * @property string $diagnosis
 * @property string $kelompok
 * @property string $assesmen
 * @property string $identifikasi
 * @property string $rencana
 * @property string $nip
 *
 * @property Dokter $kdDokter
 * @property Dokter $kdKonsulan
 * @property Pegawai $nip0
 * @property RegPeriksa $noRawat
 */
class MppEvaluasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mpp_evaluasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'assesmen', 'identifikasi', 'rencana', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter', 'kd_konsulan', 'nip'], 'string', 'max' => 20],
            [['diagnosis', 'kelompok'], 'string', 'max' => 150],
            [['assesmen', 'identifikasi'], 'string', 'max' => 250],
            [['rencana'], 'string', 'max' => 2000],
            [['no_rawat', 'tanggal'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nip' => 'nik']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
            [['kd_konsulan'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_konsulan' => 'kd_dokter']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tanggal' => 'Tanggal',
            'kd_dokter' => 'Kd Dokter',
            'kd_konsulan' => 'Kd Konsulan',
            'diagnosis' => 'Diagnosis',
            'kelompok' => 'Kelompok',
            'assesmen' => 'Assesmen',
            'identifikasi' => 'Identifikasi',
            'rencana' => 'Rencana',
            'nip' => 'Nip',
        ];
    }

    /**
     * Gets query for [[KdDokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokter()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[KdKonsulan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdKonsulan()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_konsulan']);
    }

    /**
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nip']);
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
