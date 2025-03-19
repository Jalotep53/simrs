<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bridging_resep_apotek_bpjs".
 *
 * @property string|null $no_sep
 * @property string $no_sep_apotek
 * @property string $tgl_sep
 * @property string $kdpoli
 * @property string $nmpoli
 * @property string|null $kdjenis
 * @property string|null $nota_piutang
 * @property string|null $id_user_sep
 * @property string|null $tgl_resep
 * @property string|null $tgl_pelayanan
 * @property string $kodedpjp
 * @property string $nmdpjp
 * @property string $iterasi
 * @property string $no_kartu
 * @property string $nama_pasien
 * @property string $kdppkrujukan
 * @property string $nmppkpelayanan
 * @property float $byTagRsp
 * @property float $byVerRsp
 * @property string $status
 *
 * @property BridgingResepApotekBpjsNonracikan[] $bridgingResepApotekBpjsNonracikans
 * @property BridgingResepApotekBpjsRacikan[] $bridgingResepApotekBpjsRacikans
 * @property BridgingSep $noSep
 */
class BridgingResepApotekBpjs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bridging_resep_apotek_bpjs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_sep_apotek', 'tgl_sep', 'kdpoli', 'nmpoli', 'kodedpjp', 'nmdpjp', 'iterasi', 'no_kartu', 'nama_pasien', 'kdppkrujukan', 'nmppkpelayanan', 'byTagRsp', 'byVerRsp', 'status'], 'required'],
            [['tgl_sep', 'tgl_resep', 'tgl_pelayanan'], 'safe'],
            [['kdjenis', 'iterasi', 'status'], 'string'],
            [['byTagRsp', 'byVerRsp'], 'number'],
            [['no_sep', 'no_sep_apotek'], 'string', 'max' => 40],
            [['kdpoli'], 'string', 'max' => 15],
            [['nmpoli', 'id_user_sep'], 'string', 'max' => 50],
            [['nota_piutang'], 'string', 'max' => 20],
            [['kodedpjp'], 'string', 'max' => 10],
            [['nmdpjp', 'nama_pasien'], 'string', 'max' => 100],
            [['no_kartu'], 'string', 'max' => 25],
            [['kdppkrujukan'], 'string', 'max' => 12],
            [['nmppkpelayanan'], 'string', 'max' => 200],
            [['no_sep_apotek'], 'unique'],
            [['no_sep'], 'exist', 'skipOnError' => true, 'targetClass' => BridgingSep::class, 'targetAttribute' => ['no_sep' => 'no_sep']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_sep' => 'No Sep',
            'no_sep_apotek' => 'No Sep Apotek',
            'tgl_sep' => 'Tgl Sep',
            'kdpoli' => 'Kdpoli',
            'nmpoli' => 'Nmpoli',
            'kdjenis' => 'Kdjenis',
            'nota_piutang' => 'Nota Piutang',
            'id_user_sep' => 'Id User Sep',
            'tgl_resep' => 'Tgl Resep',
            'tgl_pelayanan' => 'Tgl Pelayanan',
            'kodedpjp' => 'Kodedpjp',
            'nmdpjp' => 'Nmdpjp',
            'iterasi' => 'Iterasi',
            'no_kartu' => 'No Kartu',
            'nama_pasien' => 'Nama Pasien',
            'kdppkrujukan' => 'Kdppkrujukan',
            'nmppkpelayanan' => 'Nmppkpelayanan',
            'byTagRsp' => 'By Tag Rsp',
            'byVerRsp' => 'By Ver Rsp',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[BridgingResepApotekBpjsNonracikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBridgingResepApotekBpjsNonracikans()
    {
        return $this->hasMany(BridgingResepApotekBpjsNonracikan::class, ['no_sep_apotek' => 'no_sep_apotek']);
    }

    /**
     * Gets query for [[BridgingResepApotekBpjsRacikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBridgingResepApotekBpjsRacikans()
    {
        return $this->hasMany(BridgingResepApotekBpjsRacikan::class, ['no_sep_apotek' => 'no_sep_apotek']);
    }

    /**
     * Gets query for [[NoSep]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoSep()
    {
        return $this->hasOne(BridgingSep::class, ['no_sep' => 'no_sep']);
    }
}
