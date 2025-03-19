<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_tambahan_bunuh_diri".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $nip
 * @property string|null $statik_hidup_sendiri
 * @property int|null $statik_skorhidup_sendiri
 * @property string|null $statik_upaya_suicide
 * @property int|null $statik_skorupaya_suicide
 * @property string|null $statik_keluarga_suicide
 * @property int|null $statik_skorkeluarga_suicide
 * @property string|null $statik_diagnosa_gangguan_jiwa
 * @property int|null $statik_skordiagnosa_gangguan_jiwa
 * @property string|null $statik_disabilitas_berat
 * @property int|null $statik_skordisabilitas_berat
 * @property string|null $statik_berpisah
 * @property int|null $statik_skorberpisah
 * @property string|null $statik_kehilangan_kerja
 * @property int|null $statik_skorkehilangan_kerja
 * @property int|null $statik_skortotal
 * @property string|null $dinamis_ide_bunuh_diri
 * @property int|null $dinamis_skoride_bunuh_diri
 * @property string|null $dinamis_maksud_suicide
 * @property int|null $dinamis_skormaksud_suicide
 * @property string|null $dinamis_stress_berat
 * @property int|null $dinamis_skorstress_berat
 * @property string|null $dinamis_keputusasaan
 * @property int|null $dinamis_skorkeputusasaan
 * @property string|null $dinamis_kejadian_signifikan
 * @property int|null $dinamis_skorkejadian_signifikan
 * @property string|null $dinamis_kehilangan_kontrol
 * @property int|null $dinamis_skorkehilangan_kontrol
 * @property string|null $dinamis_penggunaan_napza
 * @property int|null $dinamis_skorpenggunaan_napza
 * @property int|null $dinamis_skortotal
 * @property string|null $faktor_faktor_pencegahan
 * @property int|null $total_skor
 * @property string|null $level_skor
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PenilaianTambahanBunuhDiri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_tambahan_bunuh_diri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['statik_hidup_sendiri', 'statik_upaya_suicide', 'statik_keluarga_suicide', 'statik_diagnosa_gangguan_jiwa', 'statik_disabilitas_berat', 'statik_berpisah', 'statik_kehilangan_kerja', 'dinamis_ide_bunuh_diri', 'dinamis_maksud_suicide', 'dinamis_stress_berat', 'dinamis_keputusasaan', 'dinamis_kejadian_signifikan', 'dinamis_kehilangan_kontrol', 'dinamis_penggunaan_napza', 'level_skor'], 'string'],
            [['statik_skorhidup_sendiri', 'statik_skorupaya_suicide', 'statik_skorkeluarga_suicide', 'statik_skordiagnosa_gangguan_jiwa', 'statik_skordisabilitas_berat', 'statik_skorberpisah', 'statik_skorkehilangan_kerja', 'statik_skortotal', 'dinamis_skoride_bunuh_diri', 'dinamis_skormaksud_suicide', 'dinamis_skorstress_berat', 'dinamis_skorkeputusasaan', 'dinamis_skorkejadian_signifikan', 'dinamis_skorkehilangan_kontrol', 'dinamis_skorpenggunaan_napza', 'dinamis_skortotal', 'total_skor'], 'integer'],
            [['no_rawat'], 'string', 'max' => 17],
            [['nip'], 'string', 'max' => 20],
            [['faktor_faktor_pencegahan'], 'string', 'max' => 500],
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
            'statik_hidup_sendiri' => 'Statik Hidup Sendiri',
            'statik_skorhidup_sendiri' => 'Statik Skorhidup Sendiri',
            'statik_upaya_suicide' => 'Statik Upaya Suicide',
            'statik_skorupaya_suicide' => 'Statik Skorupaya Suicide',
            'statik_keluarga_suicide' => 'Statik Keluarga Suicide',
            'statik_skorkeluarga_suicide' => 'Statik Skorkeluarga Suicide',
            'statik_diagnosa_gangguan_jiwa' => 'Statik Diagnosa Gangguan Jiwa',
            'statik_skordiagnosa_gangguan_jiwa' => 'Statik Skordiagnosa Gangguan Jiwa',
            'statik_disabilitas_berat' => 'Statik Disabilitas Berat',
            'statik_skordisabilitas_berat' => 'Statik Skordisabilitas Berat',
            'statik_berpisah' => 'Statik Berpisah',
            'statik_skorberpisah' => 'Statik Skorberpisah',
            'statik_kehilangan_kerja' => 'Statik Kehilangan Kerja',
            'statik_skorkehilangan_kerja' => 'Statik Skorkehilangan Kerja',
            'statik_skortotal' => 'Statik Skortotal',
            'dinamis_ide_bunuh_diri' => 'Dinamis Ide Bunuh Diri',
            'dinamis_skoride_bunuh_diri' => 'Dinamis Skoride Bunuh Diri',
            'dinamis_maksud_suicide' => 'Dinamis Maksud Suicide',
            'dinamis_skormaksud_suicide' => 'Dinamis Skormaksud Suicide',
            'dinamis_stress_berat' => 'Dinamis Stress Berat',
            'dinamis_skorstress_berat' => 'Dinamis Skorstress Berat',
            'dinamis_keputusasaan' => 'Dinamis Keputusasaan',
            'dinamis_skorkeputusasaan' => 'Dinamis Skorkeputusasaan',
            'dinamis_kejadian_signifikan' => 'Dinamis Kejadian Signifikan',
            'dinamis_skorkejadian_signifikan' => 'Dinamis Skorkejadian Signifikan',
            'dinamis_kehilangan_kontrol' => 'Dinamis Kehilangan Kontrol',
            'dinamis_skorkehilangan_kontrol' => 'Dinamis Skorkehilangan Kontrol',
            'dinamis_penggunaan_napza' => 'Dinamis Penggunaan Napza',
            'dinamis_skorpenggunaan_napza' => 'Dinamis Skorpenggunaan Napza',
            'dinamis_skortotal' => 'Dinamis Skortotal',
            'faktor_faktor_pencegahan' => 'Faktor Faktor Pencegahan',
            'total_skor' => 'Total Skor',
            'level_skor' => 'Level Skor',
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
