<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_pasien_keracunan".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kd_dokter
 * @property string $anamnesis
 * @property string $hubungan
 * @property string|null $tempat_kejadian
 * @property string|null $keterangan_tempat_kejadian
 * @property string|null $keluhan
 * @property string|null $riwayat_penyakit_sekarang
 * @property string|null $hamil
 * @property string|null $menyusui
 * @property string|null $penyebab
 * @property string|null $nama_bahan
 * @property string|null $jumlah_bahan
 * @property string|null $tipe_pemaparan
 * @property string|null $keterangan_tipe_pemaparan
 * @property string|null $tipe_kejadian
 * @property string|null $bau_bahan
 * @property string|null $keterangan_bau_bahan
 * @property string|null $pupil
 * @property string|null $keterangan_pupil
 * @property string $kesadaran
 * @property string|null $td
 * @property string|null $nadi
 * @property string $rr
 * @property string|null $suhu
 * @property string $spo
 * @property string|null $urine
 * @property string|null $pengobatan_sebelum_igd
 * @property string|null $diagnosis
 * @property string|null $pemeriksaan_penunjang
 * @property string|null $penatalaksanaan_diberikan
 * @property string|null $tindak_lanjut
 *
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class PenilaianPasienKeracunan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_pasien_keracunan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'anamnesis', 'hubungan', 'kesadaran', 'rr', 'spo'], 'required'],
            [['tanggal'], 'safe'],
            [['anamnesis', 'tempat_kejadian', 'hamil', 'menyusui', 'penyebab', 'tipe_pemaparan', 'tipe_kejadian', 'bau_bahan', 'pupil', 'kesadaran', 'tindak_lanjut'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['hubungan', 'keterangan_bau_bahan', 'keterangan_pupil'], 'string', 'max' => 30],
            [['keterangan_tempat_kejadian', 'keterangan_tipe_pemaparan'], 'string', 'max' => 50],
            [['keluhan', 'riwayat_penyakit_sekarang'], 'string', 'max' => 2000],
            [['nama_bahan'], 'string', 'max' => 100],
            [['jumlah_bahan'], 'string', 'max' => 15],
            [['td'], 'string', 'max' => 8],
            [['nadi', 'rr', 'suhu', 'spo', 'urine'], 'string', 'max' => 5],
            [['pengobatan_sebelum_igd', 'diagnosis', 'pemeriksaan_penunjang', 'penatalaksanaan_diberikan'], 'string', 'max' => 500],
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
            'tempat_kejadian' => 'Tempat Kejadian',
            'keterangan_tempat_kejadian' => 'Keterangan Tempat Kejadian',
            'keluhan' => 'Keluhan',
            'riwayat_penyakit_sekarang' => 'Riwayat Penyakit Sekarang',
            'hamil' => 'Hamil',
            'menyusui' => 'Menyusui',
            'penyebab' => 'Penyebab',
            'nama_bahan' => 'Nama Bahan',
            'jumlah_bahan' => 'Jumlah Bahan',
            'tipe_pemaparan' => 'Tipe Pemaparan',
            'keterangan_tipe_pemaparan' => 'Keterangan Tipe Pemaparan',
            'tipe_kejadian' => 'Tipe Kejadian',
            'bau_bahan' => 'Bau Bahan',
            'keterangan_bau_bahan' => 'Keterangan Bau Bahan',
            'pupil' => 'Pupil',
            'keterangan_pupil' => 'Keterangan Pupil',
            'kesadaran' => 'Kesadaran',
            'td' => 'Td',
            'nadi' => 'Nadi',
            'rr' => 'Rr',
            'suhu' => 'Suhu',
            'spo' => 'Spo',
            'urine' => 'Urine',
            'pengobatan_sebelum_igd' => 'Pengobatan Sebelum Igd',
            'diagnosis' => 'Diagnosis',
            'pemeriksaan_penunjang' => 'Pemeriksaan Penunjang',
            'penatalaksanaan_diberikan' => 'Penatalaksanaan Diberikan',
            'tindak_lanjut' => 'Tindak Lanjut',
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
