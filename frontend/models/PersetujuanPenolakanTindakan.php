<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "persetujuan_penolakan_tindakan".
 *
 * @property string $no_pernyataan
 * @property string|null $no_rawat
 * @property string|null $tanggal
 * @property string|null $diagnosa
 * @property string|null $diagnosa_konfirmasi
 * @property string|null $tindakan
 * @property string|null $tindakan_konfirmasi
 * @property string|null $indikasi_tindakan
 * @property string|null $indikasi_tindakan_konfirmasi
 * @property string|null $tata_cara
 * @property string|null $tata_cara_konfirmasi
 * @property string|null $tujuan
 * @property string|null $tujuan_konfirmasi
 * @property string|null $risiko
 * @property string|null $risiko_konfirmasi
 * @property string|null $komplikasi
 * @property string|null $komplikasi_konfirmasi
 * @property string|null $prognosis
 * @property string|null $prognosis_konfirmasi
 * @property string|null $alternatif_dan_risikonya
 * @property string|null $alternatif_konfirmasi
 * @property float|null $biaya
 * @property string|null $biaya_konfirmasi
 * @property string|null $lain_lain
 * @property string|null $lain_lain_konfirmasi
 * @property string $kd_dokter
 * @property string $nip
 * @property string $penerima_informasi
 * @property string $alasan_diwakilkan_penerima_informasi
 * @property string $jk_penerima_informasi
 * @property string $tanggal_lahir_penerima_informasi
 * @property string $umur_penerima_informasi
 * @property string $alamat_penerima_informasi
 * @property string $no_hp
 * @property string $hubungan_penerima_informasi
 * @property string $pernyataan
 * @property string $saksi_keluarga
 *
 * @property BuktiPersetujuanPenolakanTindakanPenerimainformasi $buktiPersetujuanPenolakanTindakanPenerimainformasi
 * @property BuktiPersetujuanPenolakanTindakanSaksikeluarga $buktiPersetujuanPenolakanTindakanSaksikeluarga
 * @property Dokter $kdDokter
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PersetujuanPenolakanTindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'persetujuan_penolakan_tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pernyataan', 'kd_dokter', 'nip', 'penerima_informasi', 'alasan_diwakilkan_penerima_informasi', 'jk_penerima_informasi', 'tanggal_lahir_penerima_informasi', 'umur_penerima_informasi', 'alamat_penerima_informasi', 'no_hp', 'hubungan_penerima_informasi', 'pernyataan', 'saksi_keluarga'], 'required'],
            [['tanggal', 'tanggal_lahir_penerima_informasi'], 'safe'],
            [['diagnosa_konfirmasi', 'tindakan_konfirmasi', 'indikasi_tindakan_konfirmasi', 'tata_cara_konfirmasi', 'tujuan_konfirmasi', 'risiko_konfirmasi', 'komplikasi_konfirmasi', 'prognosis_konfirmasi', 'alternatif_konfirmasi', 'biaya_konfirmasi', 'lain_lain_konfirmasi', 'jk_penerima_informasi', 'hubungan_penerima_informasi', 'pernyataan'], 'string'],
            [['biaya'], 'number'],
            [['no_pernyataan', 'kd_dokter', 'nip'], 'string', 'max' => 20],
            [['no_rawat'], 'string', 'max' => 17],
            [['diagnosa', 'tindakan', 'indikasi_tindakan', 'tujuan', 'risiko', 'komplikasi', 'prognosis', 'alternatif_dan_risikonya', 'lain_lain'], 'string', 'max' => 200],
            [['tata_cara'], 'string', 'max' => 400],
            [['penerima_informasi', 'saksi_keluarga'], 'string', 'max' => 50],
            [['alasan_diwakilkan_penerima_informasi', 'no_hp'], 'string', 'max' => 40],
            [['umur_penerima_informasi'], 'string', 'max' => 30],
            [['alamat_penerima_informasi'], 'string', 'max' => 100],
            [['no_pernyataan'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_pernyataan' => 'No Pernyataan',
            'no_rawat' => 'No Rawat',
            'tanggal' => 'Tanggal',
            'diagnosa' => 'Diagnosa',
            'diagnosa_konfirmasi' => 'Diagnosa Konfirmasi',
            'tindakan' => 'Tindakan',
            'tindakan_konfirmasi' => 'Tindakan Konfirmasi',
            'indikasi_tindakan' => 'Indikasi Tindakan',
            'indikasi_tindakan_konfirmasi' => 'Indikasi Tindakan Konfirmasi',
            'tata_cara' => 'Tata Cara',
            'tata_cara_konfirmasi' => 'Tata Cara Konfirmasi',
            'tujuan' => 'Tujuan',
            'tujuan_konfirmasi' => 'Tujuan Konfirmasi',
            'risiko' => 'Risiko',
            'risiko_konfirmasi' => 'Risiko Konfirmasi',
            'komplikasi' => 'Komplikasi',
            'komplikasi_konfirmasi' => 'Komplikasi Konfirmasi',
            'prognosis' => 'Prognosis',
            'prognosis_konfirmasi' => 'Prognosis Konfirmasi',
            'alternatif_dan_risikonya' => 'Alternatif Dan Risikonya',
            'alternatif_konfirmasi' => 'Alternatif Konfirmasi',
            'biaya' => 'Biaya',
            'biaya_konfirmasi' => 'Biaya Konfirmasi',
            'lain_lain' => 'Lain Lain',
            'lain_lain_konfirmasi' => 'Lain Lain Konfirmasi',
            'kd_dokter' => 'Kd Dokter',
            'nip' => 'Nip',
            'penerima_informasi' => 'Penerima Informasi',
            'alasan_diwakilkan_penerima_informasi' => 'Alasan Diwakilkan Penerima Informasi',
            'jk_penerima_informasi' => 'Jk Penerima Informasi',
            'tanggal_lahir_penerima_informasi' => 'Tanggal Lahir Penerima Informasi',
            'umur_penerima_informasi' => 'Umur Penerima Informasi',
            'alamat_penerima_informasi' => 'Alamat Penerima Informasi',
            'no_hp' => 'No Hp',
            'hubungan_penerima_informasi' => 'Hubungan Penerima Informasi',
            'pernyataan' => 'Pernyataan',
            'saksi_keluarga' => 'Saksi Keluarga',
        ];
    }

    /**
     * Gets query for [[BuktiPersetujuanPenolakanTindakanPenerimainformasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuktiPersetujuanPenolakanTindakanPenerimainformasi()
    {
        return $this->hasOne(BuktiPersetujuanPenolakanTindakanPenerimainformasi::class, ['no_pernyataan' => 'no_pernyataan']);
    }

    /**
     * Gets query for [[BuktiPersetujuanPenolakanTindakanSaksikeluarga]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuktiPersetujuanPenolakanTindakanSaksikeluarga()
    {
        return $this->hasOne(BuktiPersetujuanPenolakanTindakanSaksikeluarga::class, ['no_pernyataan' => 'no_pernyataan']);
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
