<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hasil_endoskopi_hidung".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kd_dokter
 * @property string $diagnosa_klinis
 * @property string $kiriman_dari
 * @property string|null $kondisi_hidung_kanan
 * @property string|null $kondisi_hidung_kiri
 * @property string|null $kavum_nasi_kanan
 * @property string|null $kavum_nasi_kiri
 * @property string|null $konka_inferior_kanan
 * @property string|null $konka_inferior_kiri
 * @property string|null $meatus_medius_kanan
 * @property string|null $meatus_medius_kiri
 * @property string|null $septum_kanan
 * @property string|null $septum_kiri
 * @property string|null $nasofaring_kanan
 * @property string|null $nasofaring_kiri
 * @property string|null $lainlain_kanan
 * @property string|null $lainlain_kiri
 * @property string|null $kesimpulan
 *
 * @property HasilEndoskopiHidungGambar $hasilEndoskopiHidungGambar
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class HasilEndoskopiHidung extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hasil_endoskopi_hidung';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'diagnosa_klinis', 'kiriman_dari'], 'required'],
            [['tanggal'], 'safe'],
            [['kondisi_hidung_kanan', 'kondisi_hidung_kiri', 'kavum_nasi_kanan', 'kavum_nasi_kiri', 'konka_inferior_kanan', 'konka_inferior_kiri', 'meatus_medius_kanan', 'meatus_medius_kiri', 'septum_kanan', 'septum_kiri', 'nasofaring_kanan', 'nasofaring_kiri'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['diagnosa_klinis', 'kiriman_dari'], 'string', 'max' => 50],
            [['lainlain_kanan', 'lainlain_kiri'], 'string', 'max' => 100],
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
            'kondisi_hidung_kanan' => 'Kondisi Hidung Kanan',
            'kondisi_hidung_kiri' => 'Kondisi Hidung Kiri',
            'kavum_nasi_kanan' => 'Kavum Nasi Kanan',
            'kavum_nasi_kiri' => 'Kavum Nasi Kiri',
            'konka_inferior_kanan' => 'Konka Inferior Kanan',
            'konka_inferior_kiri' => 'Konka Inferior Kiri',
            'meatus_medius_kanan' => 'Meatus Medius Kanan',
            'meatus_medius_kiri' => 'Meatus Medius Kiri',
            'septum_kanan' => 'Septum Kanan',
            'septum_kiri' => 'Septum Kiri',
            'nasofaring_kanan' => 'Nasofaring Kanan',
            'nasofaring_kiri' => 'Nasofaring Kiri',
            'lainlain_kanan' => 'Lainlain Kanan',
            'lainlain_kiri' => 'Lainlain Kiri',
            'kesimpulan' => 'Kesimpulan',
        ];
    }

    /**
     * Gets query for [[HasilEndoskopiHidungGambar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilEndoskopiHidungGambar()
    {
        return $this->hasOne(HasilEndoskopiHidungGambar::class, ['no_rawat' => 'no_rawat']);
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
