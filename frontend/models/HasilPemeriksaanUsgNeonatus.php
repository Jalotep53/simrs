<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hasil_pemeriksaan_usg_neonatus".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kd_dokter
 * @property string|null $diagnosa_klinis
 * @property string $kiriman_dari
 * @property string|null $ventrikal_sinistra
 * @property string|null $ventrikal_dextra
 * @property string|null $kesan
 * @property string|null $kesimpulan
 * @property string|null $saran
 *
 * @property HasilPemeriksaanUsgNeonatusGambar $hasilPemeriksaanUsgNeonatusGambar
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class HasilPemeriksaanUsgNeonatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hasil_pemeriksaan_usg_neonatus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'kiriman_dari'], 'required'],
            [['tanggal'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['diagnosa_klinis', 'kiriman_dari'], 'string', 'max' => 50],
            [['ventrikal_sinistra', 'ventrikal_dextra', 'kesan', 'saran'], 'string', 'max' => 200],
            [['kesimpulan'], 'string', 'max' => 300],
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
            'ventrikal_sinistra' => 'Ventrikal Sinistra',
            'ventrikal_dextra' => 'Ventrikal Dextra',
            'kesan' => 'Kesan',
            'kesimpulan' => 'Kesimpulan',
            'saran' => 'Saran',
        ];
    }

    /**
     * Gets query for [[HasilPemeriksaanUsgNeonatusGambar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilPemeriksaanUsgNeonatusGambar()
    {
        return $this->hasOne(HasilPemeriksaanUsgNeonatusGambar::class, ['no_rawat' => 'no_rawat']);
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
