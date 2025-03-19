<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_tambahan_perilaku_kekerasan".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $nip
 * @property string|null $statik_insiden_kekerasan_baru_ini
 * @property int|null $statik_skorinsiden_kekerasan_baru_ini
 * @property string|null $statik_riwayat_penggunaan_senjata
 * @property int|null $statik_skorriwayat_penggunaan_senjata
 * @property string|null $statik_laki_laki
 * @property int|null $statik_skorlaki_laki
 * @property string|null $statik_usia_dibawah_35
 * @property int|null $statik_skorusia_dibawah_35
 * @property string|null $statik_riwayat_kriminal
 * @property int|null $statik_skorriwayat_kriminal
 * @property string|null $statik_ide_kekerasan
 * @property int|null $statik_skoride_kekerasan
 * @property string|null $statik_kekerasan_anak_anak
 * @property int|null $statik_skorkekerasan_anak_anak
 * @property string|null $statik_peran_dalam_hidup
 * @property int|null $statik_skorperan_dalam_hidup
 * @property string|null $statik_penggunaan_napza
 * @property int|null $statik_skorpenggunaan_napza
 * @property int|null $statik_skortotal
 * @property string|null $dinamis_ide_melukai_orang_lain
 * @property int|null $dinamis_skoride_melukai_orang_lain
 * @property string|null $dinamis_akses_kekerasan
 * @property int|null $dinamis_skorakses_kekerasan
 * @property string|null $dinamis_ide_paranoid
 * @property int|null $dinamis_skoride_paranoid
 * @property string|null $dinamis_perintah_halusinasi
 * @property int|null $dinamis_skorperintah_halusinasi
 * @property string|null $dinamis_frustasi_agitasi
 * @property int|null $dinamis_skorfrustasi_agitasi
 * @property string|null $dinamis_kesenangan_kekerasan
 * @property int|null $dinamis_skorkesenangan_kekerasan
 * @property string|null $dinamis_seksual_tidak_wajar
 * @property int|null $dinamis_skorseksual_tidak_wajar
 * @property string|null $dinamis_hilangnya_kontrol_diri
 * @property int|null $dinamis_skorhilangnya_kontrol_diri
 * @property string|null $dinamis_pengguaan_napza
 * @property int|null $dinamis_skorpengguaan_napza
 * @property int|null $dinamis_skortotal
 * @property string|null $faktor_faktor_pencegahan
 * @property int|null $total_skor
 * @property string|null $level_skor
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PenilaianTambahanPerilakuKekerasan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_tambahan_perilaku_kekerasan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['statik_insiden_kekerasan_baru_ini', 'statik_riwayat_penggunaan_senjata', 'statik_laki_laki', 'statik_usia_dibawah_35', 'statik_riwayat_kriminal', 'statik_ide_kekerasan', 'statik_kekerasan_anak_anak', 'statik_peran_dalam_hidup', 'statik_penggunaan_napza', 'dinamis_ide_melukai_orang_lain', 'dinamis_akses_kekerasan', 'dinamis_ide_paranoid', 'dinamis_perintah_halusinasi', 'dinamis_frustasi_agitasi', 'dinamis_kesenangan_kekerasan', 'dinamis_seksual_tidak_wajar', 'dinamis_hilangnya_kontrol_diri', 'dinamis_pengguaan_napza', 'level_skor'], 'string'],
            [['statik_skorinsiden_kekerasan_baru_ini', 'statik_skorriwayat_penggunaan_senjata', 'statik_skorlaki_laki', 'statik_skorusia_dibawah_35', 'statik_skorriwayat_kriminal', 'statik_skoride_kekerasan', 'statik_skorkekerasan_anak_anak', 'statik_skorperan_dalam_hidup', 'statik_skorpenggunaan_napza', 'statik_skortotal', 'dinamis_skoride_melukai_orang_lain', 'dinamis_skorakses_kekerasan', 'dinamis_skoride_paranoid', 'dinamis_skorperintah_halusinasi', 'dinamis_skorfrustasi_agitasi', 'dinamis_skorkesenangan_kekerasan', 'dinamis_skorseksual_tidak_wajar', 'dinamis_skorhilangnya_kontrol_diri', 'dinamis_skorpengguaan_napza', 'dinamis_skortotal', 'total_skor'], 'integer'],
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
            'statik_insiden_kekerasan_baru_ini' => 'Statik Insiden Kekerasan Baru Ini',
            'statik_skorinsiden_kekerasan_baru_ini' => 'Statik Skorinsiden Kekerasan Baru Ini',
            'statik_riwayat_penggunaan_senjata' => 'Statik Riwayat Penggunaan Senjata',
            'statik_skorriwayat_penggunaan_senjata' => 'Statik Skorriwayat Penggunaan Senjata',
            'statik_laki_laki' => 'Statik Laki Laki',
            'statik_skorlaki_laki' => 'Statik Skorlaki Laki',
            'statik_usia_dibawah_35' => 'Statik Usia Dibawah 35',
            'statik_skorusia_dibawah_35' => 'Statik Skorusia Dibawah 35',
            'statik_riwayat_kriminal' => 'Statik Riwayat Kriminal',
            'statik_skorriwayat_kriminal' => 'Statik Skorriwayat Kriminal',
            'statik_ide_kekerasan' => 'Statik Ide Kekerasan',
            'statik_skoride_kekerasan' => 'Statik Skoride Kekerasan',
            'statik_kekerasan_anak_anak' => 'Statik Kekerasan Anak Anak',
            'statik_skorkekerasan_anak_anak' => 'Statik Skorkekerasan Anak Anak',
            'statik_peran_dalam_hidup' => 'Statik Peran Dalam Hidup',
            'statik_skorperan_dalam_hidup' => 'Statik Skorperan Dalam Hidup',
            'statik_penggunaan_napza' => 'Statik Penggunaan Napza',
            'statik_skorpenggunaan_napza' => 'Statik Skorpenggunaan Napza',
            'statik_skortotal' => 'Statik Skortotal',
            'dinamis_ide_melukai_orang_lain' => 'Dinamis Ide Melukai Orang Lain',
            'dinamis_skoride_melukai_orang_lain' => 'Dinamis Skoride Melukai Orang Lain',
            'dinamis_akses_kekerasan' => 'Dinamis Akses Kekerasan',
            'dinamis_skorakses_kekerasan' => 'Dinamis Skorakses Kekerasan',
            'dinamis_ide_paranoid' => 'Dinamis Ide Paranoid',
            'dinamis_skoride_paranoid' => 'Dinamis Skoride Paranoid',
            'dinamis_perintah_halusinasi' => 'Dinamis Perintah Halusinasi',
            'dinamis_skorperintah_halusinasi' => 'Dinamis Skorperintah Halusinasi',
            'dinamis_frustasi_agitasi' => 'Dinamis Frustasi Agitasi',
            'dinamis_skorfrustasi_agitasi' => 'Dinamis Skorfrustasi Agitasi',
            'dinamis_kesenangan_kekerasan' => 'Dinamis Kesenangan Kekerasan',
            'dinamis_skorkesenangan_kekerasan' => 'Dinamis Skorkesenangan Kekerasan',
            'dinamis_seksual_tidak_wajar' => 'Dinamis Seksual Tidak Wajar',
            'dinamis_skorseksual_tidak_wajar' => 'Dinamis Skorseksual Tidak Wajar',
            'dinamis_hilangnya_kontrol_diri' => 'Dinamis Hilangnya Kontrol Diri',
            'dinamis_skorhilangnya_kontrol_diri' => 'Dinamis Skorhilangnya Kontrol Diri',
            'dinamis_pengguaan_napza' => 'Dinamis Pengguaan Napza',
            'dinamis_skorpengguaan_napza' => 'Dinamis Skorpengguaan Napza',
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
