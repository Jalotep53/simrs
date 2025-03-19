<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_keterangan_covid".
 *
 * @property string $no_surat
 * @property string|null $no_rawat
 * @property string|null $kd_dokter
 * @property string|null $nip
 * @property string|null $igm
 * @property string|null $igg
 * @property string|null $sehat
 * @property string|null $tidaksehat
 * @property string|null $berlakumulai
 * @property string|null $berlakuselsai
 *
 * @property Dokter $kdDokter
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class SuratKeteranganCovid extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_keterangan_covid';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat'], 'required'],
            [['igm', 'igg', 'sehat', 'tidaksehat'], 'string'],
            [['berlakumulai', 'berlakuselsai'], 'safe'],
            [['no_surat', 'no_rawat'], 'string', 'max' => 17],
            [['kd_dokter', 'nip'], 'string', 'max' => 20],
            [['no_surat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_surat' => 'No Surat',
            'no_rawat' => 'No Rawat',
            'kd_dokter' => 'Kd Dokter',
            'nip' => 'Nip',
            'igm' => 'Igm',
            'igg' => 'Igg',
            'sehat' => 'Sehat',
            'tidaksehat' => 'Tidaksehat',
            'berlakumulai' => 'Berlakumulai',
            'berlakuselsai' => 'Berlakuselsai',
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
