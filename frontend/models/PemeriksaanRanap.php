<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pemeriksaan_ranap".
 *
 * @property string $no_rawat
 * @property string $tgl_perawatan
 * @property string $jam_rawat
 * @property string|null $suhu_tubuh
 * @property string $tensi
 * @property string|null $nadi
 * @property string|null $respirasi
 * @property string|null $tinggi
 * @property string|null $berat
 * @property string $spo2
 * @property string|null $gcs
 * @property string $kesadaran
 * @property string|null $keluhan
 * @property string|null $pemeriksaan
 * @property string|null $alergi
 * @property string $penilaian
 * @property string $rtl
 * @property string $instruksi
 * @property string $evaluasi
 * @property string $nip
 *
 * @property Pegawai $nip0
 * @property RegPeriksa $noRawat
 */
class PemeriksaanRanap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemeriksaan_ranap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_perawatan', 'jam_rawat', 'tensi', 'spo2', 'kesadaran', 'penilaian', 'rtl', 'instruksi', 'evaluasi', 'nip'], 'required'],
            [['tgl_perawatan', 'jam_rawat'], 'safe'],
            [['kesadaran'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['suhu_tubuh', 'tinggi', 'berat'], 'string', 'max' => 5],
            [['tensi'], 'string', 'max' => 8],
            [['nadi', 'respirasi', 'spo2'], 'string', 'max' => 3],
            [['gcs'], 'string', 'max' => 10],
            [['keluhan', 'pemeriksaan', 'penilaian', 'rtl', 'instruksi', 'evaluasi'], 'string', 'max' => 2000],
            [['alergi'], 'string', 'max' => 80],
            [['nip'], 'string', 'max' => 20],
            [['no_rawat', 'tgl_perawatan', 'jam_rawat'], 'unique', 'targetAttribute' => ['no_rawat', 'tgl_perawatan', 'jam_rawat']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nip' => 'nik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tgl_perawatan' => 'Tgl Perawatan',
            'jam_rawat' => 'Jam Rawat',
            'suhu_tubuh' => 'Suhu Tubuh',
            'tensi' => 'Tensi',
            'nadi' => 'Nadi',
            'respirasi' => 'Respirasi',
            'tinggi' => 'Tinggi',
            'berat' => 'Berat',
            'spo2' => 'Spo2',
            'gcs' => 'Gcs',
            'kesadaran' => 'Kesadaran',
            'keluhan' => 'Keluhan',
            'pemeriksaan' => 'Pemeriksaan',
            'alergi' => 'Alergi',
            'penilaian' => 'Penilaian',
            'rtl' => 'Rtl',
            'instruksi' => 'Instruksi',
            'evaluasi' => 'Evaluasi',
            'nip' => 'Nip',
        ];
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
