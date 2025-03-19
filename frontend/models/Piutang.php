<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "piutang".
 *
 * @property string $nota_piutang
 * @property string|null $tgl_piutang
 * @property string|null $nip
 * @property string|null $no_rkm_medis
 * @property string|null $nm_pasien
 * @property string|null $catatan
 * @property string|null $jns_jual
 * @property float|null $ongkir
 * @property float|null $uangmuka
 * @property float $sisapiutang
 * @property string|null $status
 * @property string $tgltempo
 * @property string $kd_bangsal
 *
 * @property Detailpiutang[] $detailpiutangs
 * @property Bangsal $kdBangsal
 * @property Petugas $nip0
 * @property Pasien $noRkmMedis
 */
class Piutang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'piutang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nota_piutang', 'sisapiutang', 'tgltempo', 'kd_bangsal'], 'required'],
            [['tgl_piutang', 'tgltempo'], 'safe'],
            [['jns_jual', 'status'], 'string'],
            [['ongkir', 'uangmuka', 'sisapiutang'], 'number'],
            [['nota_piutang', 'nip'], 'string', 'max' => 20],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['nm_pasien'], 'string', 'max' => 50],
            [['catatan'], 'string', 'max' => 40],
            [['kd_bangsal'], 'string', 'max' => 5],
            [['nota_piutang'], 'unique'],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nota_piutang' => 'Nota Piutang',
            'tgl_piutang' => 'Tgl Piutang',
            'nip' => 'Nip',
            'no_rkm_medis' => 'No Rkm Medis',
            'nm_pasien' => 'Nm Pasien',
            'catatan' => 'Catatan',
            'jns_jual' => 'Jns Jual',
            'ongkir' => 'Ongkir',
            'uangmuka' => 'Uangmuka',
            'sisapiutang' => 'Sisapiutang',
            'status' => 'Status',
            'tgltempo' => 'Tgltempo',
            'kd_bangsal' => 'Kd Bangsal',
        ];
    }

    /**
     * Gets query for [[Detailpiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailpiutangs()
    {
        return $this->hasMany(Detailpiutang::class, ['nota_piutang' => 'nota_piutang']);
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
}
