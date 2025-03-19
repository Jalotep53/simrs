<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penjualan".
 *
 * @property string $nota_jual
 * @property string|null $tgl_jual
 * @property string|null $nip
 * @property string|null $no_rkm_medis
 * @property string|null $nm_pasien
 * @property string|null $keterangan
 * @property string|null $jns_jual
 * @property float|null $ongkir
 * @property float $ppn
 * @property string|null $status
 * @property string $kd_bangsal
 * @property string|null $kd_rek
 * @property string|null $nama_bayar
 *
 * @property DetailObatRacikanJual[] $detailObatRacikanJuals
 * @property Detailjual[] $detailjuals
 * @property Bangsal $kdBangsal
 * @property Rekening $kdRek
 * @property AkunBayar $namaBayar
 * @property Petugas $nip0
 * @property Pasien $noRkmMedis
 * @property ObatRacikanJual[] $obatRacikanJuals
 */
class Penjualan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penjualan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nota_jual', 'ppn', 'kd_bangsal'], 'required'],
            [['tgl_jual'], 'safe'],
            [['jns_jual', 'status'], 'string'],
            [['ongkir', 'ppn'], 'number'],
            [['nota_jual', 'nip'], 'string', 'max' => 20],
            [['no_rkm_medis', 'kd_rek'], 'string', 'max' => 15],
            [['nm_pasien', 'nama_bayar'], 'string', 'max' => 50],
            [['keterangan'], 'string', 'max' => 40],
            [['kd_bangsal'], 'string', 'max' => 5],
            [['nota_jual'], 'unique'],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
            [['nama_bayar'], 'exist', 'skipOnError' => true, 'targetClass' => AkunBayar::class, 'targetAttribute' => ['nama_bayar' => 'nama_bayar']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nota_jual' => 'Nota Jual',
            'tgl_jual' => 'Tgl Jual',
            'nip' => 'Nip',
            'no_rkm_medis' => 'No Rkm Medis',
            'nm_pasien' => 'Nm Pasien',
            'keterangan' => 'Keterangan',
            'jns_jual' => 'Jns Jual',
            'ongkir' => 'Ongkir',
            'ppn' => 'Ppn',
            'status' => 'Status',
            'kd_bangsal' => 'Kd Bangsal',
            'kd_rek' => 'Kd Rek',
            'nama_bayar' => 'Nama Bayar',
        ];
    }

    /**
     * Gets query for [[DetailObatRacikanJuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailObatRacikanJuals()
    {
        return $this->hasMany(DetailObatRacikanJual::class, ['nota_jual' => 'nota_jual']);
    }

    /**
     * Gets query for [[Detailjuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailjuals()
    {
        return $this->hasMany(Detailjual::class, ['nota_jual' => 'nota_jual']);
    }

    /**
     * Gets query for [[KdBangsal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdBangsal()
    {
        return $this->hasOne(Bangsal::class, ['kd_bangsal' => 'kd_bangsal']);
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
     * Gets query for [[NamaBayar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNamaBayar()
    {
        return $this->hasOne(AkunBayar::class, ['nama_bayar' => 'nama_bayar']);
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
     * Gets query for [[NoRkmMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRkmMedis()
    {
        return $this->hasOne(Pasien::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }

    /**
     * Gets query for [[ObatRacikanJuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObatRacikanJuals()
    {
        return $this->hasMany(ObatRacikanJual::class, ['nota_jual' => 'nota_jual']);
    }
}
