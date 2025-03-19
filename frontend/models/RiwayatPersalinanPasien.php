<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "riwayat_persalinan_pasien".
 *
 * @property string $no_rkm_medis
 * @property string $tgl_thn
 * @property string|null $tempat_persalinan
 * @property string|null $usia_hamil
 * @property string|null $jenis_persalinan
 * @property string|null $penolong
 * @property string|null $penyulit
 * @property string|null $jk
 * @property string|null $bbpb
 * @property string|null $keadaan
 *
 * @property Pasien $noRkmMedis
 */
class RiwayatPersalinanPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_persalinan_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis', 'tgl_thn'], 'required'],
            [['jk'], 'string'],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['tgl_thn'], 'string', 'max' => 12],
            [['tempat_persalinan', 'penolong'], 'string', 'max' => 30],
            [['usia_hamil', 'jenis_persalinan'], 'string', 'max' => 20],
            [['penyulit', 'keadaan'], 'string', 'max' => 40],
            [['bbpb'], 'string', 'max' => 10],
            [['no_rkm_medis', 'tgl_thn'], 'unique', 'targetAttribute' => ['no_rkm_medis', 'tgl_thn']],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rkm_medis' => 'No Rkm Medis',
            'tgl_thn' => 'Tgl Thn',
            'tempat_persalinan' => 'Tempat Persalinan',
            'usia_hamil' => 'Usia Hamil',
            'jenis_persalinan' => 'Jenis Persalinan',
            'penolong' => 'Penolong',
            'penyulit' => 'Penyulit',
            'jk' => 'Jk',
            'bbpb' => 'Bbpb',
            'keadaan' => 'Keadaan',
        ];
    }

    /**
     * Gets query for [[NoRkmMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRkmMedis()
    {
        return $this->hasOne(Pasien::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }
}
