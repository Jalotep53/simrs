<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_korban_kekerasan".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $informasi
 * @property string|null $hubungan_dengan_pasien
 * @property string|null $jumlah_saudara
 * @property string|null $kondisi_keluaga
 * @property string|null $hubungan_orang_terdekat
 * @property string|null $kekerasan_yang_dialami
 * @property string|null $tempat_kejadian
 * @property int|null $lama_kekerasan
 * @property string|null $periode_kekerasan
 * @property string|null $seberapa_sering_mengalami
 * @property string|null $pemicu_kekerasan
 * @property string|null $yang_melakukan_kekerasan
 * @property string|null $dampak_kekerasan
 * @property string|null $tanda_tanda_didapatkan
 * @property string|null $memerlukan_pendampingan
 * @property string|null $riwayat_kelainan
 * @property string|null $pemeriksaan_kepala
 * @property string|null $pemeriksaan_thoraks
 * @property string|null $pemeriksaan_leher
 * @property string|null $pemeriksaan_abdomen
 * @property string|null $pemeriksaan_genitalia
 * @property string|null $pemeriksaan_ekstrimitas_atas
 * @property string $pemeriksaan_ekstrimitas_bawah
 * @property string|null $pemeriksaan_anus
 * @property string $nip
 *
 * @property Pegawai $nip0
 * @property RegPeriksa $noRawat
 */
class PenilaianKorbanKekerasan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_korban_kekerasan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'pemeriksaan_ekstrimitas_bawah', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['informasi', 'kondisi_keluaga', 'hubungan_orang_terdekat', 'periode_kekerasan', 'memerlukan_pendampingan'], 'string'],
            [['lama_kekerasan'], 'integer'],
            [['no_rawat'], 'string', 'max' => 17],
            [['hubungan_dengan_pasien'], 'string', 'max' => 30],
            [['jumlah_saudara'], 'string', 'max' => 2],
            [['kekerasan_yang_dialami', 'tanda_tanda_didapatkan'], 'string', 'max' => 350],
            [['tempat_kejadian'], 'string', 'max' => 40],
            [['seberapa_sering_mengalami', 'pemicu_kekerasan'], 'string', 'max' => 150],
            [['yang_melakukan_kekerasan', 'riwayat_kelainan', 'pemeriksaan_kepala', 'pemeriksaan_thoraks', 'pemeriksaan_leher', 'pemeriksaan_abdomen', 'pemeriksaan_genitalia', 'pemeriksaan_ekstrimitas_atas', 'pemeriksaan_ekstrimitas_bawah', 'pemeriksaan_anus'], 'string', 'max' => 50],
            [['dampak_kekerasan'], 'string', 'max' => 200],
            [['nip'], 'string', 'max' => 20],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nip' => 'nik']],
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
            'informasi' => 'Informasi',
            'hubungan_dengan_pasien' => 'Hubungan Dengan Pasien',
            'jumlah_saudara' => 'Jumlah Saudara',
            'kondisi_keluaga' => 'Kondisi Keluaga',
            'hubungan_orang_terdekat' => 'Hubungan Orang Terdekat',
            'kekerasan_yang_dialami' => 'Kekerasan Yang Dialami',
            'tempat_kejadian' => 'Tempat Kejadian',
            'lama_kekerasan' => 'Lama Kekerasan',
            'periode_kekerasan' => 'Periode Kekerasan',
            'seberapa_sering_mengalami' => 'Seberapa Sering Mengalami',
            'pemicu_kekerasan' => 'Pemicu Kekerasan',
            'yang_melakukan_kekerasan' => 'Yang Melakukan Kekerasan',
            'dampak_kekerasan' => 'Dampak Kekerasan',
            'tanda_tanda_didapatkan' => 'Tanda Tanda Didapatkan',
            'memerlukan_pendampingan' => 'Memerlukan Pendampingan',
            'riwayat_kelainan' => 'Riwayat Kelainan',
            'pemeriksaan_kepala' => 'Pemeriksaan Kepala',
            'pemeriksaan_thoraks' => 'Pemeriksaan Thoraks',
            'pemeriksaan_leher' => 'Pemeriksaan Leher',
            'pemeriksaan_abdomen' => 'Pemeriksaan Abdomen',
            'pemeriksaan_genitalia' => 'Pemeriksaan Genitalia',
            'pemeriksaan_ekstrimitas_atas' => 'Pemeriksaan Ekstrimitas Atas',
            'pemeriksaan_ekstrimitas_bawah' => 'Pemeriksaan Ekstrimitas Bawah',
            'pemeriksaan_anus' => 'Pemeriksaan Anus',
            'nip' => 'Nip',
        ];
    }

    /**
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nip']);
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
