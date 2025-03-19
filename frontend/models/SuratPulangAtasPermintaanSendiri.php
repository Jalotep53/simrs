<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_pulang_atas_permintaan_sendiri".
 *
 * @property string $no_surat
 * @property string $no_rawat
 * @property string $tgl_pulang
 * @property string $rs_pilihan
 * @property string $nama_pj
 * @property string $lahir
 * @property string $umur
 * @property string $jkpj
 * @property string $alamat
 * @property string $hubungan
 * @property string $saksi_keluarga
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 * @property SuratPulangAtasPermintaanSendiriPembuatPernyataan $suratPulangAtasPermintaanSendiriPembuatPernyataan
 * @property SuratPulangAtasPermintaanSendiriSaksiKeluarga $suratPulangAtasPermintaanSendiriSaksiKeluarga
 */
class SuratPulangAtasPermintaanSendiri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_pulang_atas_permintaan_sendiri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'no_rawat', 'tgl_pulang', 'rs_pilihan', 'nama_pj', 'lahir', 'umur', 'jkpj', 'alamat', 'hubungan', 'saksi_keluarga', 'nip'], 'required'],
            [['tgl_pulang', 'lahir'], 'safe'],
            [['jkpj', 'hubungan'], 'string'],
            [['no_surat', 'nip'], 'string', 'max' => 20],
            [['no_rawat'], 'string', 'max' => 17],
            [['rs_pilihan', 'nama_pj', 'saksi_keluarga'], 'string', 'max' => 50],
            [['umur'], 'string', 'max' => 3],
            [['alamat'], 'string', 'max' => 100],
            [['no_surat'], 'unique'],
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
            'no_surat' => 'No Surat',
            'no_rawat' => 'No Rawat',
            'tgl_pulang' => 'Tgl Pulang',
            'rs_pilihan' => 'Rs Pilihan',
            'nama_pj' => 'Nama Pj',
            'lahir' => 'Lahir',
            'umur' => 'Umur',
            'jkpj' => 'Jkpj',
            'alamat' => 'Alamat',
            'hubungan' => 'Hubungan',
            'saksi_keluarga' => 'Saksi Keluarga',
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

    /**
     * Gets query for [[SuratPulangAtasPermintaanSendiriPembuatPernyataan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPulangAtasPermintaanSendiriPembuatPernyataan()
    {
        return $this->hasOne(SuratPulangAtasPermintaanSendiriPembuatPernyataan::class, ['no_surat' => 'no_surat']);
    }

    /**
     * Gets query for [[SuratPulangAtasPermintaanSendiriSaksiKeluarga]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPulangAtasPermintaanSendiriSaksiKeluarga()
    {
        return $this->hasOne(SuratPulangAtasPermintaanSendiriSaksiKeluarga::class, ['no_surat' => 'no_surat']);
    }
}
