<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hasil_pemeriksaan_ekg".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kd_dokter
 * @property string|null $diagnosa_klinis
 * @property string|null $kiriman_dari
 * @property string|null $irama
 * @property string|null $laju_jantung
 * @property string|null $gelombangp
 * @property string|null $intervalpr
 * @property string|null $axis
 * @property string|null $kompleksqrs
 * @property string|null $segmenst
 * @property string|null $gelombangt
 * @property string|null $kesimpulan
 *
 * @property HasilPemeriksaanEkgGambar $hasilPemeriksaanEkgGambar
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class HasilPemeriksaanEkg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hasil_pemeriksaan_ekg';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter'], 'required'],
            [['tanggal'], 'safe'],
            [['segmenst', 'gelombangt'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['diagnosa_klinis', 'kiriman_dari'], 'string', 'max' => 50],
            [['irama', 'laju_jantung', 'gelombangp', 'intervalpr', 'axis', 'kompleksqrs'], 'string', 'max' => 40],
            [['kesimpulan'], 'string', 'max' => 200],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
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
            'diagnosa_klinis' => 'Diagnosa Klinis',
            'kiriman_dari' => 'Kiriman Dari',
            'irama' => 'Irama',
            'laju_jantung' => 'Laju Jantung',
            'gelombangp' => 'Gelombangp',
            'intervalpr' => 'Intervalpr',
            'axis' => 'Axis',
            'kompleksqrs' => 'Kompleksqrs',
            'segmenst' => 'Segmenst',
            'gelombangt' => 'Gelombangt',
            'kesimpulan' => 'Kesimpulan',
        ];
    }

    /**
     * Gets query for [[HasilPemeriksaanEkgGambar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilPemeriksaanEkgGambar()
    {
        return $this->hasOne(HasilPemeriksaanEkgGambar::class, ['no_rawat' => 'no_rawat']);
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
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
