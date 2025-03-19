<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_pasien_penyakit_menular".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kd_dokter
 * @property string $anamnesis
 * @property string $hubungan
 * @property string|null $pasien_mengetahui_kondisi_penyakitnya
 * @property string|null $penyakit_sama_serumah
 * @property string|null $riwayat_kontak
 * @property string|null $keterangan_riwayat_kontak
 * @property string|null $transmisi_penularan_penyakit
 * @property string|null $keterangan_transmisi_penularan_penyakit
 * @property string|null $kebutuhan_ruang_rawat
 * @property string|null $keluhan_yang_dirasakan_saat_ini
 * @property string|null $riwayat_penyakit_keluarga
 * @property string|null $riwayat_alergi
 * @property string|null $riwayat_vaksinasi
 * @property string|null $riwayat_pengobatan
 * @property string|null $diagnosa_utama
 * @property string|null $diagnosa_tambahan
 *
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class PenilaianPasienPenyakitMenular extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_pasien_penyakit_menular';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'anamnesis', 'hubungan'], 'required'],
            [['tanggal'], 'safe'],
            [['anamnesis', 'pasien_mengetahui_kondisi_penyakitnya', 'penyakit_sama_serumah', 'riwayat_kontak', 'transmisi_penularan_penyakit', 'kebutuhan_ruang_rawat'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['hubungan'], 'string', 'max' => 30],
            [['keterangan_riwayat_kontak', 'keterangan_transmisi_penularan_penyakit'], 'string', 'max' => 70],
            [['keluhan_yang_dirasakan_saat_ini', 'riwayat_penyakit_keluarga', 'riwayat_pengobatan'], 'string', 'max' => 1000],
            [['riwayat_alergi', 'riwayat_vaksinasi'], 'string', 'max' => 100],
            [['diagnosa_utama', 'diagnosa_tambahan'], 'string', 'max' => 500],
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
            'anamnesis' => 'Anamnesis',
            'hubungan' => 'Hubungan',
            'pasien_mengetahui_kondisi_penyakitnya' => 'Pasien Mengetahui Kondisi Penyakitnya',
            'penyakit_sama_serumah' => 'Penyakit Sama Serumah',
            'riwayat_kontak' => 'Riwayat Kontak',
            'keterangan_riwayat_kontak' => 'Keterangan Riwayat Kontak',
            'transmisi_penularan_penyakit' => 'Transmisi Penularan Penyakit',
            'keterangan_transmisi_penularan_penyakit' => 'Keterangan Transmisi Penularan Penyakit',
            'kebutuhan_ruang_rawat' => 'Kebutuhan Ruang Rawat',
            'keluhan_yang_dirasakan_saat_ini' => 'Keluhan Yang Dirasakan Saat Ini',
            'riwayat_penyakit_keluarga' => 'Riwayat Penyakit Keluarga',
            'riwayat_alergi' => 'Riwayat Alergi',
            'riwayat_vaksinasi' => 'Riwayat Vaksinasi',
            'riwayat_pengobatan' => 'Riwayat Pengobatan',
            'diagnosa_utama' => 'Diagnosa Utama',
            'diagnosa_tambahan' => 'Diagnosa Tambahan',
        ];
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
