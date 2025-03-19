<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hasil_pemeriksaan_usg_urologi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kd_dokter
 * @property string $diagnosa_klinis
 * @property string $kiriman_dari
 * @property string|null $ginjal_kanan
 * @property string|null $ginjal_kiri
 * @property string|null $vesica_urinaria
 * @property string|null $tambahan
 *
 * @property HasilPemeriksaanUsgUrologiGambar $hasilPemeriksaanUsgUrologiGambar
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class HasilPemeriksaanUsgUrologi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hasil_pemeriksaan_usg_urologi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'diagnosa_klinis', 'kiriman_dari'], 'required'],
            [['tanggal'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['diagnosa_klinis', 'kiriman_dari'], 'string', 'max' => 50],
            [['ginjal_kanan', 'ginjal_kiri', 'vesica_urinaria'], 'string', 'max' => 200],
            [['tambahan'], 'string', 'max' => 300],
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
            'ginjal_kanan' => 'Ginjal Kanan',
            'ginjal_kiri' => 'Ginjal Kiri',
            'vesica_urinaria' => 'Vesica Urinaria',
            'tambahan' => 'Tambahan',
        ];
    }

    /**
     * Gets query for [[HasilPemeriksaanUsgUrologiGambar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilPemeriksaanUsgUrologiGambar()
    {
        return $this->hasOne(HasilPemeriksaanUsgUrologiGambar::class, ['no_rawat' => 'no_rawat']);
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
