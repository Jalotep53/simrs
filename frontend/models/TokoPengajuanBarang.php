<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "toko_pengajuan_barang".
 *
 * @property string $no_pengajuan
 * @property string|null $nip
 * @property string|null $tanggal
 * @property string|null $status
 * @property string|null $keterangan
 *
 * @property Pegawai $nip0
 * @property TokoDetailPengajuanBarang[] $tokoDetailPengajuanBarangs
 */
class TokoPengajuanBarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'toko_pengajuan_barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pengajuan'], 'required'],
            [['tanggal'], 'safe'],
            [['status'], 'string'],
            [['no_pengajuan', 'nip'], 'string', 'max' => 20],
            [['keterangan'], 'string', 'max' => 150],
            [['no_pengajuan'], 'unique'],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nip' => 'nik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_pengajuan' => 'No Pengajuan',
            'nip' => 'Nip',
            'tanggal' => 'Tanggal',
            'status' => 'Status',
            'keterangan' => 'Keterangan',
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
     * Gets query for [[TokoDetailPengajuanBarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoDetailPengajuanBarangs()
    {
        return $this->hasMany(TokoDetailPengajuanBarang::class, ['no_pengajuan' => 'no_pengajuan']);
    }
}
