<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pengajuan_biaya".
 *
 * @property string $no_pengajuan
 * @property string $tanggal
 * @property string $nik
 * @property string $urgensi
 * @property string $uraian_latar_belakang
 * @property string $tujuan_pengajuan
 * @property string $target_sasaran
 * @property string $lokasi_kegiatan
 * @property float $jumlah
 * @property float $harga
 * @property float $total
 * @property string $keterangan
 * @property string $nik_pj
 * @property string $status
 *
 * @property Pegawai $nik0
 * @property Pegawai $nikPj
 * @property PengajuanBiayaDisetujui $pengajuanBiayaDisetujui
 */
class PengajuanBiaya extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengajuan_biaya';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pengajuan', 'tanggal', 'nik', 'urgensi', 'uraian_latar_belakang', 'tujuan_pengajuan', 'target_sasaran', 'lokasi_kegiatan', 'jumlah', 'harga', 'total', 'keterangan', 'nik_pj', 'status'], 'required'],
            [['tanggal'], 'safe'],
            [['urgensi', 'status'], 'string'],
            [['jumlah', 'harga', 'total'], 'number'],
            [['no_pengajuan', 'nik', 'nik_pj'], 'string', 'max' => 20],
            [['uraian_latar_belakang', 'tujuan_pengajuan'], 'string', 'max' => 200],
            [['target_sasaran', 'lokasi_kegiatan', 'keterangan'], 'string', 'max' => 70],
            [['no_pengajuan'], 'unique'],
            [['nik'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nik' => 'nik']],
            [['nik_pj'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nik_pj' => 'nik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_pengajuan' => 'No Pengajuan',
            'tanggal' => 'Tanggal',
            'nik' => 'Nik',
            'urgensi' => 'Urgensi',
            'uraian_latar_belakang' => 'Uraian Latar Belakang',
            'tujuan_pengajuan' => 'Tujuan Pengajuan',
            'target_sasaran' => 'Target Sasaran',
            'lokasi_kegiatan' => 'Lokasi Kegiatan',
            'jumlah' => 'Jumlah',
            'harga' => 'Harga',
            'total' => 'Total',
            'keterangan' => 'Keterangan',
            'nik_pj' => 'Nik Pj',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Nik0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNik0()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[NikPj]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNikPj()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nik_pj']);
    }

    /**
     * Gets query for [[PengajuanBiayaDisetujui]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengajuanBiayaDisetujui()
    {
        return $this->hasOne(PengajuanBiayaDisetujui::class, ['no_pengajuan' => 'no_pengajuan']);
    }
}
