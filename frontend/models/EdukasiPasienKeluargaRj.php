<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "edukasi_pasien_keluarga_rj".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $nip
 * @property string|null $bicara
 * @property string|null $keterangan_bicara
 * @property string|null $bahasa_sehari
 * @property string|null $perlu_penerjemah
 * @property string|null $keterangan_penerjemah
 * @property string|null $bahasa_isyarat
 * @property string|null $cara_belajar
 * @property string|null $hambatan_belajar
 * @property string|null $keterangan_hambatan_belajar
 * @property string|null $kemampuan_belajar
 * @property string|null $keterangan_kemampuan_belajar
 * @property string $penyakitnya_merupakan
 * @property string $keterangan_penyakitnya_merupakan
 * @property string $keputusan_memilih_layanan
 * @property string $keterangan_keputusan_memilih_layanan
 * @property string $keyakinan_terhadap_terapi
 * @property string $keterangan_keyakinan_terhadap_terapi
 * @property string $aspek_keyakinan_dipertimbangkan
 * @property string $keterangan_aspek_keyakinan_dipertimbangkan
 * @property string $kesediaan_menerima_informasi
 * @property string $topik_edukasi_penyakit
 * @property string $topik_edukasi_rencana_tindakan
 * @property string $topik_edukasi_pengobatan
 * @property string $topik_edukasi_hasil_layanan
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class EdukasiPasienKeluargaRj extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'edukasi_pasien_keluarga_rj';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip', 'penyakitnya_merupakan', 'keterangan_penyakitnya_merupakan', 'keputusan_memilih_layanan', 'keterangan_keputusan_memilih_layanan', 'keyakinan_terhadap_terapi', 'keterangan_keyakinan_terhadap_terapi', 'aspek_keyakinan_dipertimbangkan', 'keterangan_aspek_keyakinan_dipertimbangkan', 'kesediaan_menerima_informasi', 'topik_edukasi_penyakit', 'topik_edukasi_rencana_tindakan', 'topik_edukasi_pengobatan', 'topik_edukasi_hasil_layanan'], 'required'],
            [['tanggal'], 'safe'],
            [['bicara', 'perlu_penerjemah', 'bahasa_isyarat', 'cara_belajar', 'hambatan_belajar', 'kemampuan_belajar', 'penyakitnya_merupakan', 'keputusan_memilih_layanan', 'keyakinan_terhadap_terapi', 'aspek_keyakinan_dipertimbangkan', 'kesediaan_menerima_informasi', 'topik_edukasi_penyakit', 'topik_edukasi_rencana_tindakan', 'topik_edukasi_pengobatan', 'topik_edukasi_hasil_layanan'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['nip'], 'string', 'max' => 20],
            [['keterangan_bicara', 'bahasa_sehari', 'keterangan_penerjemah', 'keterangan_hambatan_belajar', 'keterangan_kemampuan_belajar', 'keterangan_penyakitnya_merupakan', 'keterangan_keputusan_memilih_layanan', 'keterangan_keyakinan_terhadap_terapi', 'keterangan_aspek_keyakinan_dipertimbangkan'], 'string', 'max' => 50],
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
            'bicara' => 'Bicara',
            'keterangan_bicara' => 'Keterangan Bicara',
            'bahasa_sehari' => 'Bahasa Sehari',
            'perlu_penerjemah' => 'Perlu Penerjemah',
            'keterangan_penerjemah' => 'Keterangan Penerjemah',
            'bahasa_isyarat' => 'Bahasa Isyarat',
            'cara_belajar' => 'Cara Belajar',
            'hambatan_belajar' => 'Hambatan Belajar',
            'keterangan_hambatan_belajar' => 'Keterangan Hambatan Belajar',
            'kemampuan_belajar' => 'Kemampuan Belajar',
            'keterangan_kemampuan_belajar' => 'Keterangan Kemampuan Belajar',
            'penyakitnya_merupakan' => 'Penyakitnya Merupakan',
            'keterangan_penyakitnya_merupakan' => 'Keterangan Penyakitnya Merupakan',
            'keputusan_memilih_layanan' => 'Keputusan Memilih Layanan',
            'keterangan_keputusan_memilih_layanan' => 'Keterangan Keputusan Memilih Layanan',
            'keyakinan_terhadap_terapi' => 'Keyakinan Terhadap Terapi',
            'keterangan_keyakinan_terhadap_terapi' => 'Keterangan Keyakinan Terhadap Terapi',
            'aspek_keyakinan_dipertimbangkan' => 'Aspek Keyakinan Dipertimbangkan',
            'keterangan_aspek_keyakinan_dipertimbangkan' => 'Keterangan Aspek Keyakinan Dipertimbangkan',
            'kesediaan_menerima_informasi' => 'Kesediaan Menerima Informasi',
            'topik_edukasi_penyakit' => 'Topik Edukasi Penyakit',
            'topik_edukasi_rencana_tindakan' => 'Topik Edukasi Rencana Tindakan',
            'topik_edukasi_pengobatan' => 'Topik Edukasi Pengobatan',
            'topik_edukasi_hasil_layanan' => 'Topik Edukasi Hasil Layanan',
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
