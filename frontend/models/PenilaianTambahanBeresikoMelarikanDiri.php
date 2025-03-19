<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_tambahan_beresiko_melarikan_diri".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $nip
 * @property string|null $statik_riwayat_melarikan_diri
 * @property int|null $statik_skorriwayat_melarikan_diri
 * @property string|null $statik_riwayat_penolakan_pengobatan
 * @property int|null $statik_skorriwayat_penolakan_pengobatan
 * @property string|null $statik_usia_dibawah_35
 * @property int|null $statik_skorusia_dibawah_35
 * @property string|null $statik_laki_laki
 * @property int|null $statik_skorlaki_laki
 * @property string|null $statik_diagnosis_skizofrenia
 * @property int|null $statik_skordiagnosis_skizofrenia
 * @property string|null $statik_belum_menikah
 * @property int|null $statik_skorbelum_menikah
 * @property string|null $statik_riwayat_penggunaan_napza
 * @property int|null $statik_skoriwayat_penggunaan_napza
 * @property string|null $statik_diagnosis_gangguan_kepribadian
 * @property int|null $statik_skordiagnosis_gangguan_kepribadian
 * @property string|null $statik_riwayat_kriminal
 * @property int|null $statik_skorriwayat_kriminal
 * @property int|null $statik_skortotal
 * @property string|null $dinamis_anti_treatment
 * @property int|null $dinamis_skoranti_treatment
 * @property string|null $dinamis_penggunaan_napza
 * @property int|null $dinamis_skorpenggunaan_napza
 * @property string|null $dinamis_kebosanan
 * @property int|null $dinamis_skorkebosanan
 * @property string|null $dinamis_perintah_halusinasi
 * @property int|null $dinamis_skorperintah_halusinasi
 * @property string|null $dinamis_hilangnya_kontrol_diri
 * @property int|null $dinamis_skorhilangnya_kontrol_diri
 * @property string|null $dinamis_seksual_tidak_wajar
 * @property int|null $dinamis_skorseksual_tidak_wajar
 * @property string|null $dinamis_kemarahan_frustasi
 * @property int|null $dinamis_skorkemarahan_frustasi
 * @property string|null $dinamis_ketakutan_perawatan
 * @property int|null $dinamis_skorketakutan_perawatan
 * @property int|null $dinamis_skortotal
 * @property string|null $faktor_faktor_pencegahan
 * @property int|null $total_skor
 * @property string|null $level_skor
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PenilaianTambahanBeresikoMelarikanDiri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_tambahan_beresiko_melarikan_diri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['statik_riwayat_melarikan_diri', 'statik_riwayat_penolakan_pengobatan', 'statik_usia_dibawah_35', 'statik_laki_laki', 'statik_diagnosis_skizofrenia', 'statik_belum_menikah', 'statik_riwayat_penggunaan_napza', 'statik_diagnosis_gangguan_kepribadian', 'statik_riwayat_kriminal', 'dinamis_anti_treatment', 'dinamis_penggunaan_napza', 'dinamis_kebosanan', 'dinamis_perintah_halusinasi', 'dinamis_hilangnya_kontrol_diri', 'dinamis_seksual_tidak_wajar', 'dinamis_kemarahan_frustasi', 'dinamis_ketakutan_perawatan', 'level_skor'], 'string'],
            [['statik_skorriwayat_melarikan_diri', 'statik_skorriwayat_penolakan_pengobatan', 'statik_skorusia_dibawah_35', 'statik_skorlaki_laki', 'statik_skordiagnosis_skizofrenia', 'statik_skorbelum_menikah', 'statik_skoriwayat_penggunaan_napza', 'statik_skordiagnosis_gangguan_kepribadian', 'statik_skorriwayat_kriminal', 'statik_skortotal', 'dinamis_skoranti_treatment', 'dinamis_skorpenggunaan_napza', 'dinamis_skorkebosanan', 'dinamis_skorperintah_halusinasi', 'dinamis_skorhilangnya_kontrol_diri', 'dinamis_skorseksual_tidak_wajar', 'dinamis_skorkemarahan_frustasi', 'dinamis_skorketakutan_perawatan', 'dinamis_skortotal', 'total_skor'], 'integer'],
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
            'statik_riwayat_melarikan_diri' => 'Statik Riwayat Melarikan Diri',
            'statik_skorriwayat_melarikan_diri' => 'Statik Skorriwayat Melarikan Diri',
            'statik_riwayat_penolakan_pengobatan' => 'Statik Riwayat Penolakan Pengobatan',
            'statik_skorriwayat_penolakan_pengobatan' => 'Statik Skorriwayat Penolakan Pengobatan',
            'statik_usia_dibawah_35' => 'Statik Usia Dibawah 35',
            'statik_skorusia_dibawah_35' => 'Statik Skorusia Dibawah 35',
            'statik_laki_laki' => 'Statik Laki Laki',
            'statik_skorlaki_laki' => 'Statik Skorlaki Laki',
            'statik_diagnosis_skizofrenia' => 'Statik Diagnosis Skizofrenia',
            'statik_skordiagnosis_skizofrenia' => 'Statik Skordiagnosis Skizofrenia',
            'statik_belum_menikah' => 'Statik Belum Menikah',
            'statik_skorbelum_menikah' => 'Statik Skorbelum Menikah',
            'statik_riwayat_penggunaan_napza' => 'Statik Riwayat Penggunaan Napza',
            'statik_skoriwayat_penggunaan_napza' => 'Statik Skoriwayat Penggunaan Napza',
            'statik_diagnosis_gangguan_kepribadian' => 'Statik Diagnosis Gangguan Kepribadian',
            'statik_skordiagnosis_gangguan_kepribadian' => 'Statik Skordiagnosis Gangguan Kepribadian',
            'statik_riwayat_kriminal' => 'Statik Riwayat Kriminal',
            'statik_skorriwayat_kriminal' => 'Statik Skorriwayat Kriminal',
            'statik_skortotal' => 'Statik Skortotal',
            'dinamis_anti_treatment' => 'Dinamis Anti Treatment',
            'dinamis_skoranti_treatment' => 'Dinamis Skoranti Treatment',
            'dinamis_penggunaan_napza' => 'Dinamis Penggunaan Napza',
            'dinamis_skorpenggunaan_napza' => 'Dinamis Skorpenggunaan Napza',
            'dinamis_kebosanan' => 'Dinamis Kebosanan',
            'dinamis_skorkebosanan' => 'Dinamis Skorkebosanan',
            'dinamis_perintah_halusinasi' => 'Dinamis Perintah Halusinasi',
            'dinamis_skorperintah_halusinasi' => 'Dinamis Skorperintah Halusinasi',
            'dinamis_hilangnya_kontrol_diri' => 'Dinamis Hilangnya Kontrol Diri',
            'dinamis_skorhilangnya_kontrol_diri' => 'Dinamis Skorhilangnya Kontrol Diri',
            'dinamis_seksual_tidak_wajar' => 'Dinamis Seksual Tidak Wajar',
            'dinamis_skorseksual_tidak_wajar' => 'Dinamis Skorseksual Tidak Wajar',
            'dinamis_kemarahan_frustasi' => 'Dinamis Kemarahan Frustasi',
            'dinamis_skorkemarahan_frustasi' => 'Dinamis Skorkemarahan Frustasi',
            'dinamis_ketakutan_perawatan' => 'Dinamis Ketakutan Perawatan',
            'dinamis_skorketakutan_perawatan' => 'Dinamis Skorketakutan Perawatan',
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
