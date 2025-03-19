<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "perencanaan_pemulangan".
 *
 * @property string $no_rawat
 * @property string $rencana_pulang
 * @property string|null $alasan_masuk
 * @property string|null $diagnosa_medis
 * @property string|null $pengaruh_ri_pasien_dan_keluarga
 * @property string|null $keterangan_pengaruh_ri_pasien_dan_keluarga
 * @property string $pengaruh_ri_pekerjaan_sekolah
 * @property string $keterangan_pengaruh_ri_pekerjaan_sekolah
 * @property string $pengaruh_ri_keuangan
 * @property string $keterangan_pengaruh_ri_keuangan
 * @property string $antisipasi_masalah_saat_pulang
 * @property string $keterangan_antisipasi_masalah_saat_pulang
 * @property string $bantuan_diperlukan_dalam
 * @property string $keterangan_bantuan_diperlukan_dalam
 * @property string $adakah_yang_membantu_keperluan
 * @property string $keterangan_adakah_yang_membantu_keperluan
 * @property string $pasien_tinggal_sendiri
 * @property string $keterangan_pasien_tinggal_sendiri
 * @property string $pasien_menggunakan_peralatan_medis
 * @property string $keterangan_pasien_menggunakan_peralatan_medis
 * @property string $pasien_memerlukan_alat_bantu
 * @property string $keterangan_pasien_memerlukan_alat_bantu
 * @property string $memerlukan_perawatan_khusus
 * @property string $keterangan_memerlukan_perawatan_khusus
 * @property string $bermasalah_memenuhi_kebutuhan
 * @property string $keterangan_bermasalah_memenuhi_kebutuhan
 * @property string $memiliki_nyeri_kronis
 * @property string $keterangan_memiliki_nyeri_kronis
 * @property string $memerlukan_edukasi_kesehatan
 * @property string $keterangan_memerlukan_edukasi_kesehatan
 * @property string $memerlukan_keterampilkan_khusus
 * @property string $keterangan_memerlukan_keterampilkan_khusus
 * @property string $nama_pasien_keluarga
 * @property string $nip
 *
 * @property BuktiPerencanaanPemulanganSaksikeluarga $buktiPerencanaanPemulanganSaksikeluarga
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PerencanaanPemulangan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perencanaan_pemulangan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'rencana_pulang', 'pengaruh_ri_pekerjaan_sekolah', 'keterangan_pengaruh_ri_pekerjaan_sekolah', 'pengaruh_ri_keuangan', 'keterangan_pengaruh_ri_keuangan', 'antisipasi_masalah_saat_pulang', 'keterangan_antisipasi_masalah_saat_pulang', 'bantuan_diperlukan_dalam', 'keterangan_bantuan_diperlukan_dalam', 'adakah_yang_membantu_keperluan', 'keterangan_adakah_yang_membantu_keperluan', 'pasien_tinggal_sendiri', 'keterangan_pasien_tinggal_sendiri', 'pasien_menggunakan_peralatan_medis', 'keterangan_pasien_menggunakan_peralatan_medis', 'pasien_memerlukan_alat_bantu', 'keterangan_pasien_memerlukan_alat_bantu', 'memerlukan_perawatan_khusus', 'keterangan_memerlukan_perawatan_khusus', 'bermasalah_memenuhi_kebutuhan', 'keterangan_bermasalah_memenuhi_kebutuhan', 'memiliki_nyeri_kronis', 'keterangan_memiliki_nyeri_kronis', 'memerlukan_edukasi_kesehatan', 'keterangan_memerlukan_edukasi_kesehatan', 'memerlukan_keterampilkan_khusus', 'keterangan_memerlukan_keterampilkan_khusus', 'nama_pasien_keluarga', 'nip'], 'required'],
            [['rencana_pulang'], 'safe'],
            [['pengaruh_ri_pasien_dan_keluarga', 'pengaruh_ri_pekerjaan_sekolah', 'pengaruh_ri_keuangan', 'antisipasi_masalah_saat_pulang', 'bantuan_diperlukan_dalam', 'adakah_yang_membantu_keperluan', 'pasien_tinggal_sendiri', 'pasien_menggunakan_peralatan_medis', 'pasien_memerlukan_alat_bantu', 'memerlukan_perawatan_khusus', 'bermasalah_memenuhi_kebutuhan', 'memiliki_nyeri_kronis', 'memerlukan_edukasi_kesehatan', 'memerlukan_keterampilkan_khusus'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['alasan_masuk'], 'string', 'max' => 150],
            [['diagnosa_medis', 'nama_pasien_keluarga'], 'string', 'max' => 50],
            [['keterangan_pengaruh_ri_pasien_dan_keluarga', 'keterangan_pengaruh_ri_pekerjaan_sekolah', 'keterangan_pengaruh_ri_keuangan', 'keterangan_antisipasi_masalah_saat_pulang', 'keterangan_bantuan_diperlukan_dalam', 'keterangan_adakah_yang_membantu_keperluan', 'keterangan_pasien_tinggal_sendiri', 'keterangan_pasien_menggunakan_peralatan_medis', 'keterangan_pasien_memerlukan_alat_bantu', 'keterangan_memerlukan_perawatan_khusus', 'keterangan_bermasalah_memenuhi_kebutuhan', 'keterangan_memiliki_nyeri_kronis', 'keterangan_memerlukan_edukasi_kesehatan', 'keterangan_memerlukan_keterampilkan_khusus'], 'string', 'max' => 100],
            [['nip'], 'string', 'max' => 20],
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
            'rencana_pulang' => 'Rencana Pulang',
            'alasan_masuk' => 'Alasan Masuk',
            'diagnosa_medis' => 'Diagnosa Medis',
            'pengaruh_ri_pasien_dan_keluarga' => 'Pengaruh Ri Pasien Dan Keluarga',
            'keterangan_pengaruh_ri_pasien_dan_keluarga' => 'Keterangan Pengaruh Ri Pasien Dan Keluarga',
            'pengaruh_ri_pekerjaan_sekolah' => 'Pengaruh Ri Pekerjaan Sekolah',
            'keterangan_pengaruh_ri_pekerjaan_sekolah' => 'Keterangan Pengaruh Ri Pekerjaan Sekolah',
            'pengaruh_ri_keuangan' => 'Pengaruh Ri Keuangan',
            'keterangan_pengaruh_ri_keuangan' => 'Keterangan Pengaruh Ri Keuangan',
            'antisipasi_masalah_saat_pulang' => 'Antisipasi Masalah Saat Pulang',
            'keterangan_antisipasi_masalah_saat_pulang' => 'Keterangan Antisipasi Masalah Saat Pulang',
            'bantuan_diperlukan_dalam' => 'Bantuan Diperlukan Dalam',
            'keterangan_bantuan_diperlukan_dalam' => 'Keterangan Bantuan Diperlukan Dalam',
            'adakah_yang_membantu_keperluan' => 'Adakah Yang Membantu Keperluan',
            'keterangan_adakah_yang_membantu_keperluan' => 'Keterangan Adakah Yang Membantu Keperluan',
            'pasien_tinggal_sendiri' => 'Pasien Tinggal Sendiri',
            'keterangan_pasien_tinggal_sendiri' => 'Keterangan Pasien Tinggal Sendiri',
            'pasien_menggunakan_peralatan_medis' => 'Pasien Menggunakan Peralatan Medis',
            'keterangan_pasien_menggunakan_peralatan_medis' => 'Keterangan Pasien Menggunakan Peralatan Medis',
            'pasien_memerlukan_alat_bantu' => 'Pasien Memerlukan Alat Bantu',
            'keterangan_pasien_memerlukan_alat_bantu' => 'Keterangan Pasien Memerlukan Alat Bantu',
            'memerlukan_perawatan_khusus' => 'Memerlukan Perawatan Khusus',
            'keterangan_memerlukan_perawatan_khusus' => 'Keterangan Memerlukan Perawatan Khusus',
            'bermasalah_memenuhi_kebutuhan' => 'Bermasalah Memenuhi Kebutuhan',
            'keterangan_bermasalah_memenuhi_kebutuhan' => 'Keterangan Bermasalah Memenuhi Kebutuhan',
            'memiliki_nyeri_kronis' => 'Memiliki Nyeri Kronis',
            'keterangan_memiliki_nyeri_kronis' => 'Keterangan Memiliki Nyeri Kronis',
            'memerlukan_edukasi_kesehatan' => 'Memerlukan Edukasi Kesehatan',
            'keterangan_memerlukan_edukasi_kesehatan' => 'Keterangan Memerlukan Edukasi Kesehatan',
            'memerlukan_keterampilkan_khusus' => 'Memerlukan Keterampilkan Khusus',
            'keterangan_memerlukan_keterampilkan_khusus' => 'Keterangan Memerlukan Keterampilkan Khusus',
            'nama_pasien_keluarga' => 'Nama Pasien Keluarga',
            'nip' => 'Nip',
        ];
    }

    /**
     * Gets query for [[BuktiPerencanaanPemulanganSaksikeluarga]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuktiPerencanaanPemulanganSaksikeluarga()
    {
        return $this->hasOne(BuktiPerencanaanPemulanganSaksikeluarga::class, ['no_rawat' => 'no_rawat']);
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
