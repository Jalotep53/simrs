<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hasil_endoskopi_telinga".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kd_dokter
 * @property string $diagnosa_klinis
 * @property string $kiriman_dari
 * @property string|null $bentuk_liang_telinga_kanan
 * @property string|null $bentuk_liang_telinga_kiri
 * @property string|null $kondisi_liang_telinga_kanan
 * @property string|null $keterangan_kondisi_liang_telinga_kanan
 * @property string|null $kondisi_liang_telinga_kiri
 * @property string|null $keterangan_kondisi_liang_telinga_kiri
 * @property string|null $membran_timpani_intak_kanan
 * @property string|null $membran_timpani_intak_kiri
 * @property string|null $membran_timpani_perforasi_kanan
 * @property string|null $keterangan_membran_timpani_perforasi_kanan
 * @property string|null $membran_timpani_perforasi_kiri
 * @property string|null $keterangan_membran_timpani_perforasi_kiri
 * @property string|null $kavum_timpani_mukosa_kanan
 * @property string|null $kavum_timpani_mukosa_kiri
 * @property string|null $kavum_timpani_osikel_kanan
 * @property string|null $kavum_timpani_osikel_kiri
 * @property string|null $kavum_timpani_isthmus_kanan
 * @property string|null $kavum_timpani_isthmus_kiri
 * @property string|null $kavum_timpani_anterior_kanan
 * @property string|null $kavum_timpani_anterior_kiri
 * @property string|null $kavum_timpani_posterior_kanan
 * @property string|null $kavum_timpani_posterior_kiri
 * @property string|null $lainlain_kanan
 * @property string|null $lainlain_kiri
 * @property string|null $kesimpulan
 * @property string|null $anjuran
 *
 * @property HasilEndoskopiTelingaGambar $hasilEndoskopiTelingaGambar
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class HasilEndoskopiTelinga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hasil_endoskopi_telinga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'diagnosa_klinis', 'kiriman_dari'], 'required'],
            [['tanggal'], 'safe'],
            [['bentuk_liang_telinga_kanan', 'bentuk_liang_telinga_kiri', 'kondisi_liang_telinga_kanan', 'kondisi_liang_telinga_kiri', 'membran_timpani_intak_kanan', 'membran_timpani_intak_kiri', 'membran_timpani_perforasi_kanan', 'membran_timpani_perforasi_kiri'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['diagnosa_klinis', 'kiriman_dari'], 'string', 'max' => 50],
            [['keterangan_kondisi_liang_telinga_kanan', 'keterangan_kondisi_liang_telinga_kiri', 'keterangan_membran_timpani_perforasi_kanan', 'keterangan_membran_timpani_perforasi_kiri'], 'string', 'max' => 30],
            [['kavum_timpani_mukosa_kanan', 'kavum_timpani_mukosa_kiri', 'kavum_timpani_osikel_kanan', 'kavum_timpani_osikel_kiri', 'kavum_timpani_isthmus_kanan', 'kavum_timpani_isthmus_kiri', 'kavum_timpani_anterior_kanan', 'kavum_timpani_anterior_kiri', 'kavum_timpani_posterior_kanan', 'kavum_timpani_posterior_kiri'], 'string', 'max' => 40],
            [['lainlain_kanan', 'lainlain_kiri'], 'string', 'max' => 100],
            [['kesimpulan', 'anjuran'], 'string', 'max' => 300],
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
            'bentuk_liang_telinga_kanan' => 'Bentuk Liang Telinga Kanan',
            'bentuk_liang_telinga_kiri' => 'Bentuk Liang Telinga Kiri',
            'kondisi_liang_telinga_kanan' => 'Kondisi Liang Telinga Kanan',
            'keterangan_kondisi_liang_telinga_kanan' => 'Keterangan Kondisi Liang Telinga Kanan',
            'kondisi_liang_telinga_kiri' => 'Kondisi Liang Telinga Kiri',
            'keterangan_kondisi_liang_telinga_kiri' => 'Keterangan Kondisi Liang Telinga Kiri',
            'membran_timpani_intak_kanan' => 'Membran Timpani Intak Kanan',
            'membran_timpani_intak_kiri' => 'Membran Timpani Intak Kiri',
            'membran_timpani_perforasi_kanan' => 'Membran Timpani Perforasi Kanan',
            'keterangan_membran_timpani_perforasi_kanan' => 'Keterangan Membran Timpani Perforasi Kanan',
            'membran_timpani_perforasi_kiri' => 'Membran Timpani Perforasi Kiri',
            'keterangan_membran_timpani_perforasi_kiri' => 'Keterangan Membran Timpani Perforasi Kiri',
            'kavum_timpani_mukosa_kanan' => 'Kavum Timpani Mukosa Kanan',
            'kavum_timpani_mukosa_kiri' => 'Kavum Timpani Mukosa Kiri',
            'kavum_timpani_osikel_kanan' => 'Kavum Timpani Osikel Kanan',
            'kavum_timpani_osikel_kiri' => 'Kavum Timpani Osikel Kiri',
            'kavum_timpani_isthmus_kanan' => 'Kavum Timpani Isthmus Kanan',
            'kavum_timpani_isthmus_kiri' => 'Kavum Timpani Isthmus Kiri',
            'kavum_timpani_anterior_kanan' => 'Kavum Timpani Anterior Kanan',
            'kavum_timpani_anterior_kiri' => 'Kavum Timpani Anterior Kiri',
            'kavum_timpani_posterior_kanan' => 'Kavum Timpani Posterior Kanan',
            'kavum_timpani_posterior_kiri' => 'Kavum Timpani Posterior Kiri',
            'lainlain_kanan' => 'Lainlain Kanan',
            'lainlain_kiri' => 'Lainlain Kiri',
            'kesimpulan' => 'Kesimpulan',
            'anjuran' => 'Anjuran',
        ];
    }

    /**
     * Gets query for [[HasilEndoskopiTelingaGambar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilEndoskopiTelingaGambar()
    {
        return $this->hasOne(HasilEndoskopiTelingaGambar::class, ['no_rawat' => 'no_rawat']);
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
