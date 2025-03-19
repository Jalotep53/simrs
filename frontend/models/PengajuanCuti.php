<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pengajuan_cuti".
 *
 * @property string $no_pengajuan
 * @property string $tanggal
 * @property string $tanggal_awal
 * @property string $tanggal_akhir
 * @property string $nik
 * @property string $urgensi
 * @property string $alamat
 * @property int $jumlah
 * @property string $kepentingan
 * @property string $nik_pj
 * @property string $status
 *
 * @property Pegawai $nik0
 * @property Pegawai $nikPj
 */
class PengajuanCuti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengajuan_cuti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pengajuan', 'tanggal', 'tanggal_awal', 'tanggal_akhir', 'nik', 'urgensi', 'alamat', 'jumlah', 'kepentingan', 'nik_pj', 'status'], 'required'],
            [['tanggal', 'tanggal_awal', 'tanggal_akhir'], 'safe'],
            [['urgensi', 'status'], 'string'],
            [['jumlah'], 'integer'],
            [['no_pengajuan'], 'string', 'max' => 17],
            [['nik', 'nik_pj'], 'string', 'max' => 20],
            [['alamat'], 'string', 'max' => 100],
            [['kepentingan'], 'string', 'max' => 70],
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
            'tanggal_awal' => 'Tanggal Awal',
            'tanggal_akhir' => 'Tanggal Akhir',
            'nik' => 'Nik',
            'urgensi' => 'Urgensi',
            'alamat' => 'Alamat',
            'jumlah' => 'Jumlah',
            'kepentingan' => 'Kepentingan',
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
}
