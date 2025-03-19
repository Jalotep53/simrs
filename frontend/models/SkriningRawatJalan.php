<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "skrining_rawat_jalan".
 *
 * @property string $tanggal
 * @property string $jam
 * @property string $no_rkm_medis
 * @property string|null $geriatri
 * @property string|null $kesadaran
 * @property string|null $pernapasan
 * @property string|null $nyeri_dada
 * @property string|null $skala_nyeri
 * @property string|null $keputusan
 * @property string|null $nip
 *
 * @property Petugas $nip0
 * @property Pasien $noRkmMedis
 */
class SkriningRawatJalan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skrining_rawat_jalan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'jam', 'no_rkm_medis'], 'required'],
            [['tanggal', 'jam'], 'safe'],
            [['geriatri', 'kesadaran', 'pernapasan', 'nyeri_dada', 'skala_nyeri', 'keputusan'], 'string'],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['nip'], 'string', 'max' => 20],
            [['tanggal', 'jam', 'no_rkm_medis'], 'unique', 'targetAttribute' => ['tanggal', 'jam', 'no_rkm_medis']],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tanggal' => 'Tanggal',
            'jam' => 'Jam',
            'no_rkm_medis' => 'No Rkm Medis',
            'geriatri' => 'Geriatri',
            'kesadaran' => 'Kesadaran',
            'pernapasan' => 'Pernapasan',
            'nyeri_dada' => 'Nyeri Dada',
            'skala_nyeri' => 'Skala Nyeri',
            'keputusan' => 'Keputusan',
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
        return $this->hasOne(Petugas::class, ['nip' => 'nip']);
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
