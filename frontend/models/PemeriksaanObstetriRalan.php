<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pemeriksaan_obstetri_ralan".
 *
 * @property string $no_rawat
 * @property string $tgl_perawatan
 * @property string $jam_rawat
 * @property string|null $tinggi_uteri
 * @property string|null $janin
 * @property string|null $letak
 * @property string|null $panggul
 * @property string|null $denyut
 * @property string|null $kontraksi
 * @property string|null $kualitas_mnt
 * @property string|null $kualitas_dtk
 * @property string|null $fluksus
 * @property string|null $albus
 * @property string|null $vulva
 * @property string|null $portio
 * @property string|null $dalam
 * @property string|null $tebal
 * @property string|null $arah
 * @property string|null $pembukaan
 * @property string|null $penurunan
 * @property string $denominator
 * @property string|null $ketuban
 * @property string|null $feto
 *
 * @property RegPeriksa $noRawat
 */
class PemeriksaanObstetriRalan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemeriksaan_obstetri_ralan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_perawatan', 'jam_rawat', 'denominator'], 'required'],
            [['tgl_perawatan', 'jam_rawat'], 'safe'],
            [['janin', 'panggul', 'kontraksi', 'fluksus', 'albus', 'dalam', 'arah', 'ketuban', 'feto'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['tinggi_uteri', 'denyut', 'kualitas_mnt', 'kualitas_dtk', 'tebal'], 'string', 'max' => 5],
            [['letak', 'vulva', 'portio', 'pembukaan', 'penurunan', 'denominator'], 'string', 'max' => 50],
            [['no_rawat', 'tgl_perawatan', 'jam_rawat'], 'unique', 'targetAttribute' => ['no_rawat', 'tgl_perawatan', 'jam_rawat']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
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
            'tinggi_uteri' => 'Tinggi Uteri',
            'janin' => 'Janin',
            'letak' => 'Letak',
            'panggul' => 'Panggul',
            'denyut' => 'Denyut',
            'kontraksi' => 'Kontraksi',
            'kualitas_mnt' => 'Kualitas Mnt',
            'kualitas_dtk' => 'Kualitas Dtk',
            'fluksus' => 'Fluksus',
            'albus' => 'Albus',
            'vulva' => 'Vulva',
            'portio' => 'Portio',
            'dalam' => 'Dalam',
            'tebal' => 'Tebal',
            'arah' => 'Arah',
            'pembukaan' => 'Pembukaan',
            'penurunan' => 'Penurunan',
            'denominator' => 'Denominator',
            'ketuban' => 'Ketuban',
            'feto' => 'Feto',
        ];
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
