<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "utd_penyerahan_darah".
 *
 * @property string $no_penyerahan
 * @property string|null $tanggal
 * @property string|null $dinas
 * @property string|null $nip_cross
 * @property string|null $keterangan
 * @property string|null $status
 * @property string|null $kd_rek
 * @property string|null $pengambil_darah
 * @property string|null $alamat_pengambil_darah
 * @property string|null $nip_pj
 * @property float|null $besarppn
 *
 * @property Rekening $kdRek
 * @property Databarang[] $kodeBrngs
 * @property Ipsrsbarang[] $kodeBrngs0
 * @property Petugas $nipCross
 * @property UtdStokDarah[] $noKantongs
 * @property UtdPenggunaanMedisPenyerahanDarah[] $utdPenggunaanMedisPenyerahanDarahs
 * @property UtdPenggunaanPenunjangPenyerahanDarah[] $utdPenggunaanPenunjangPenyerahanDarahs
 * @property UtdPenyerahanDarahDetail[] $utdPenyerahanDarahDetails
 */
class UtdPenyerahanDarah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'utd_penyerahan_darah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_penyerahan'], 'required'],
            [['tanggal'], 'safe'],
            [['dinas', 'status'], 'string'],
            [['besarppn'], 'number'],
            [['no_penyerahan'], 'string', 'max' => 17],
            [['nip_cross', 'nip_pj'], 'string', 'max' => 20],
            [['keterangan'], 'string', 'max' => 40],
            [['kd_rek'], 'string', 'max' => 15],
            [['pengambil_darah'], 'string', 'max' => 70],
            [['alamat_pengambil_darah'], 'string', 'max' => 120],
            [['no_penyerahan'], 'unique'],
            [['nip_cross'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip_cross' => 'nip']],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_penyerahan' => 'No Penyerahan',
            'tanggal' => 'Tanggal',
            'dinas' => 'Dinas',
            'nip_cross' => 'Nip Cross',
            'keterangan' => 'Keterangan',
            'status' => 'Status',
            'kd_rek' => 'Kd Rek',
            'pengambil_darah' => 'Pengambil Darah',
            'alamat_pengambil_darah' => 'Alamat Pengambil Darah',
            'nip_pj' => 'Nip Pj',
            'besarppn' => 'Besarppn',
        ];
    }

    /**
     * Gets query for [[KdRek]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRek()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[KodeBrngs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrngs()
    {
        return $this->hasMany(Databarang::class, ['kode_brng' => 'kode_brng'])->viaTable('utd_penggunaan_medis_penyerahan_darah', ['no_penyerahan' => 'no_penyerahan']);
    }

    /**
     * Gets query for [[KodeBrngs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrngs0()
    {
        return $this->hasMany(Ipsrsbarang::class, ['kode_brng' => 'kode_brng'])->viaTable('utd_penggunaan_penunjang_penyerahan_darah', ['no_penyerahan' => 'no_penyerahan']);
    }

    /**
     * Gets query for [[NipCross]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNipCross()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip_cross']);
    }

    /**
     * Gets query for [[NoKantongs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoKantongs()
    {
        return $this->hasMany(UtdStokDarah::class, ['no_kantong' => 'no_kantong'])->viaTable('utd_penyerahan_darah_detail', ['no_penyerahan' => 'no_penyerahan']);
    }

    /**
     * Gets query for [[UtdPenggunaanMedisPenyerahanDarahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPenggunaanMedisPenyerahanDarahs()
    {
        return $this->hasMany(UtdPenggunaanMedisPenyerahanDarah::class, ['no_penyerahan' => 'no_penyerahan']);
    }

    /**
     * Gets query for [[UtdPenggunaanPenunjangPenyerahanDarahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPenggunaanPenunjangPenyerahanDarahs()
    {
        return $this->hasMany(UtdPenggunaanPenunjangPenyerahanDarah::class, ['no_penyerahan' => 'no_penyerahan']);
    }

    /**
     * Gets query for [[UtdPenyerahanDarahDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPenyerahanDarahDetails()
    {
        return $this->hasMany(UtdPenyerahanDarahDetail::class, ['no_penyerahan' => 'no_penyerahan']);
    }
}
