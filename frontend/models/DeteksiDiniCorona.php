<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "deteksi_dini_corona".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $nip
 * @property string|null $gejala_demam
 * @property string|null $gejala_batuk
 * @property string|null $gejala_sesak
 * @property string|null $gejala_tanggal_pertama
 * @property string|null $gejala_riwayat_sakit
 * @property string|null $gejala_riwayat_periksa
 * @property string $faktor_riwayat_perjalanan
 * @property string $faktor_asal_daerah
 * @property string $faktor_tanggal_kedatangan
 * @property string $faktor_paparan_kontakpositif
 * @property string $faktor_paparan_kontakpdp
 * @property string $faktor_paparan_faskespositif
 * @property string $faktor_paparan_perjalananln
 * @property string $faktor_paparan_pasarhewan
 * @property string $kesimpulan
 * @property string $tindak_lanjut
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class DeteksiDiniCorona extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deteksi_dini_corona';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'faktor_riwayat_perjalanan', 'faktor_asal_daerah', 'faktor_tanggal_kedatangan', 'faktor_paparan_kontakpositif', 'faktor_paparan_kontakpdp', 'faktor_paparan_faskespositif', 'faktor_paparan_perjalananln', 'faktor_paparan_pasarhewan', 'kesimpulan', 'tindak_lanjut'], 'required'],
            [['tanggal', 'gejala_tanggal_pertama', 'faktor_tanggal_kedatangan'], 'safe'],
            [['gejala_demam', 'gejala_batuk', 'gejala_sesak', 'faktor_riwayat_perjalanan', 'faktor_paparan_kontakpositif', 'faktor_paparan_kontakpdp', 'faktor_paparan_faskespositif', 'faktor_paparan_perjalananln', 'faktor_paparan_pasarhewan', 'kesimpulan', 'tindak_lanjut'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['nip'], 'string', 'max' => 20],
            [['gejala_riwayat_sakit', 'gejala_riwayat_periksa', 'faktor_asal_daerah'], 'string', 'max' => 50],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
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
            'nip' => 'Nip',
            'gejala_demam' => 'Gejala Demam',
            'gejala_batuk' => 'Gejala Batuk',
            'gejala_sesak' => 'Gejala Sesak',
            'gejala_tanggal_pertama' => 'Gejala Tanggal Pertama',
            'gejala_riwayat_sakit' => 'Gejala Riwayat Sakit',
            'gejala_riwayat_periksa' => 'Gejala Riwayat Periksa',
            'faktor_riwayat_perjalanan' => 'Faktor Riwayat Perjalanan',
            'faktor_asal_daerah' => 'Faktor Asal Daerah',
            'faktor_tanggal_kedatangan' => 'Faktor Tanggal Kedatangan',
            'faktor_paparan_kontakpositif' => 'Faktor Paparan Kontakpositif',
            'faktor_paparan_kontakpdp' => 'Faktor Paparan Kontakpdp',
            'faktor_paparan_faskespositif' => 'Faktor Paparan Faskespositif',
            'faktor_paparan_perjalananln' => 'Faktor Paparan Perjalananln',
            'faktor_paparan_pasarhewan' => 'Faktor Paparan Pasarhewan',
            'kesimpulan' => 'Kesimpulan',
            'tindak_lanjut' => 'Tindak Lanjut',
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
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
