<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hasil_pemeriksaan_usg".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kd_dokter
 * @property string|null $diagnosa_klinis
 * @property string|null $kiriman_dari
 * @property string|null $hta
 * @property string|null $kantong_gestasi
 * @property string|null $ukuran_bokongkepala
 * @property string|null $jenis_prestasi
 * @property string|null $diameter_biparietal
 * @property string|null $panjang_femur
 * @property string|null $lingkar_abdomen
 * @property string|null $tafsiran_berat_janin
 * @property string|null $usia_kehamilan
 * @property string|null $plasenta_berimplatansi
 * @property string|null $derajat_maturitas
 * @property string|null $jumlah_air_ketuban
 * @property string|null $indek_cairan_ketuban
 * @property string|null $kelainan_kongenital
 * @property string|null $peluang_sex
 * @property string|null $kesimpulan
 *
 * @property HasilPemeriksaanUsgGambar $hasilPemeriksaanUsgGambar
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class HasilPemeriksaanUsg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hasil_pemeriksaan_usg';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter'], 'required'],
            [['tanggal'], 'safe'],
            [['derajat_maturitas', 'jumlah_air_ketuban', 'peluang_sex'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['diagnosa_klinis', 'kiriman_dari', 'plasenta_berimplatansi'], 'string', 'max' => 50],
            [['hta', 'indek_cairan_ketuban'], 'string', 'max' => 40],
            [['kantong_gestasi', 'ukuran_bokongkepala', 'diameter_biparietal', 'panjang_femur', 'lingkar_abdomen', 'tafsiran_berat_janin'], 'string', 'max' => 6],
            [['jenis_prestasi'], 'string', 'max' => 30],
            [['usia_kehamilan'], 'string', 'max' => 15],
            [['kelainan_kongenital'], 'string', 'max' => 60],
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
            'hta' => 'Hta',
            'kantong_gestasi' => 'Kantong Gestasi',
            'ukuran_bokongkepala' => 'Ukuran Bokongkepala',
            'jenis_prestasi' => 'Jenis Prestasi',
            'diameter_biparietal' => 'Diameter Biparietal',
            'panjang_femur' => 'Panjang Femur',
            'lingkar_abdomen' => 'Lingkar Abdomen',
            'tafsiran_berat_janin' => 'Tafsiran Berat Janin',
            'usia_kehamilan' => 'Usia Kehamilan',
            'plasenta_berimplatansi' => 'Plasenta Berimplatansi',
            'derajat_maturitas' => 'Derajat Maturitas',
            'jumlah_air_ketuban' => 'Jumlah Air Ketuban',
            'indek_cairan_ketuban' => 'Indek Cairan Ketuban',
            'kelainan_kongenital' => 'Kelainan Kongenital',
            'peluang_sex' => 'Peluang Sex',
            'kesimpulan' => 'Kesimpulan',
        ];
    }

    /**
     * Gets query for [[HasilPemeriksaanUsgGambar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHasilPemeriksaanUsgGambar()
    {
        return $this->hasOne(HasilPemeriksaanUsgGambar::class, ['no_rawat' => 'no_rawat']);
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
