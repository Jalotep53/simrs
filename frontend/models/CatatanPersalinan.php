<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "catatan_persalinan".
 *
 * @property string $no_rawat
 * @property string $mulai
 * @property string $selesai
 * @property string $kd_dokter
 * @property string $nip
 * @property string|null $catatan
 * @property string|null $waktu_persalinan_kala_1
 * @property string|null $waktu_persalinan_kala_2
 * @property string|null $waktu_persalinan_kala_3
 * @property string|null $waktu_persalinan_jumlah
 * @property string|null $perineum
 * @property string|null $jahitan_luar_1
 * @property string|null $jahitan_luar_2
 * @property string|null $jahitan_dalam_1
 * @property string|null $jahitan_dalam_2
 * @property string|null $anak
 * @property string|null $status_lahir
 * @property string|null $apgar_score
 * @property string|null $bb
 * @property string|null $pb
 * @property string|null $kelainan
 * @property string|null $ketuban
 * @property string|null $placenta
 * @property string|null $ukuran
 * @property string|null $tali_pusat
 * @property string|null $insertio
 * @property string|null $darah_keluar_kala_1
 * @property string|null $darah_keluar_kala_2
 * @property string|null $darah_keluar_kala_3
 * @property string|null $darah_keluar_kala_4
 * @property string|null $darah_keluar_jumlah
 * @property string|null $kondisi_umum
 * @property string|null $td
 * @property string|null $nadi
 * @property string|null $rr
 * @property string|null $suhu
 * @property string|null $kontraksi_uterus
 * @property string|null $ppv
 * @property string|null $pengobatan
 *
 * @property Dokter $kdDokter
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class CatatanPersalinan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catatan_persalinan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'mulai', 'selesai', 'kd_dokter', 'nip'], 'required'],
            [['mulai', 'selesai'], 'safe'],
            [['catatan', 'perineum', 'anak', 'status_lahir'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter', 'nip', 'apgar_score', 'ketuban', 'placenta', 'insertio'], 'string', 'max' => 20],
            [['waktu_persalinan_kala_1', 'waktu_persalinan_kala_2', 'waktu_persalinan_kala_3', 'waktu_persalinan_jumlah', 'jahitan_luar_1', 'jahitan_luar_2', 'jahitan_dalam_1', 'jahitan_dalam_2', 'bb', 'pb', 'ukuran', 'tali_pusat', 'darah_keluar_kala_1', 'darah_keluar_kala_2', 'darah_keluar_kala_3', 'darah_keluar_kala_4', 'darah_keluar_jumlah', 'nadi', 'rr', 'suhu'], 'string', 'max' => 5],
            [['kelainan', 'kondisi_umum', 'kontraksi_uterus', 'ppv'], 'string', 'max' => 100],
            [['td'], 'string', 'max' => 8],
            [['pengobatan'], 'string', 'max' => 600],
            [['no_rawat'], 'unique'],
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
            'no_rawat' => 'No Rawat',
            'mulai' => 'Mulai',
            'selesai' => 'Selesai',
            'kd_dokter' => 'Kd Dokter',
            'nip' => 'Nip',
            'catatan' => 'Catatan',
            'waktu_persalinan_kala_1' => 'Waktu Persalinan Kala 1',
            'waktu_persalinan_kala_2' => 'Waktu Persalinan Kala 2',
            'waktu_persalinan_kala_3' => 'Waktu Persalinan Kala 3',
            'waktu_persalinan_jumlah' => 'Waktu Persalinan Jumlah',
            'perineum' => 'Perineum',
            'jahitan_luar_1' => 'Jahitan Luar 1',
            'jahitan_luar_2' => 'Jahitan Luar 2',
            'jahitan_dalam_1' => 'Jahitan Dalam 1',
            'jahitan_dalam_2' => 'Jahitan Dalam 2',
            'anak' => 'Anak',
            'status_lahir' => 'Status Lahir',
            'apgar_score' => 'Apgar Score',
            'bb' => 'Bb',
            'pb' => 'Pb',
            'kelainan' => 'Kelainan',
            'ketuban' => 'Ketuban',
            'placenta' => 'Placenta',
            'ukuran' => 'Ukuran',
            'tali_pusat' => 'Tali Pusat',
            'insertio' => 'Insertio',
            'darah_keluar_kala_1' => 'Darah Keluar Kala 1',
            'darah_keluar_kala_2' => 'Darah Keluar Kala 2',
            'darah_keluar_kala_3' => 'Darah Keluar Kala 3',
            'darah_keluar_kala_4' => 'Darah Keluar Kala 4',
            'darah_keluar_jumlah' => 'Darah Keluar Jumlah',
            'kondisi_umum' => 'Kondisi Umum',
            'td' => 'Td',
            'nadi' => 'Nadi',
            'rr' => 'Rr',
            'suhu' => 'Suhu',
            'kontraksi_uterus' => 'Kontraksi Uterus',
            'ppv' => 'Ppv',
            'pengobatan' => 'Pengobatan',
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
