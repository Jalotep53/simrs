<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bridging_rujukan_bpjs".
 *
 * @property string $no_sep
 * @property string|null $tglRujukan
 * @property string $tglRencanaKunjungan
 * @property string|null $ppkDirujuk
 * @property string|null $nm_ppkDirujuk
 * @property string|null $jnsPelayanan
 * @property string|null $catatan
 * @property string|null $diagRujukan
 * @property string|null $nama_diagRujukan
 * @property string|null $tipeRujukan
 * @property string|null $poliRujukan
 * @property string|null $nama_poliRujukan
 * @property string $no_rujukan
 * @property string|null $user
 *
 * @property BridgingRujukanBpjsKhusus $bridgingRujukanBpjsKhusus
 * @property BridgingRujukanBpjsKhususDiagnosa[] $bridgingRujukanBpjsKhususDiagnosas
 * @property BridgingRujukanBpjsKhususProsedur[] $bridgingRujukanBpjsKhususProsedurs
 * @property BridgingSep $noSep
 */
class BridgingRujukanBpjs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bridging_rujukan_bpjs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_sep', 'tglRencanaKunjungan', 'no_rujukan'], 'required'],
            [['tglRujukan', 'tglRencanaKunjungan'], 'safe'],
            [['jnsPelayanan', 'tipeRujukan'], 'string'],
            [['no_sep', 'no_rujukan'], 'string', 'max' => 40],
            [['ppkDirujuk'], 'string', 'max' => 20],
            [['nm_ppkDirujuk'], 'string', 'max' => 100],
            [['catatan'], 'string', 'max' => 200],
            [['diagRujukan'], 'string', 'max' => 10],
            [['nama_diagRujukan'], 'string', 'max' => 400],
            [['poliRujukan'], 'string', 'max' => 15],
            [['nama_poliRujukan'], 'string', 'max' => 50],
            [['user'], 'string', 'max' => 25],
            [['no_rujukan'], 'unique'],
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
            'tglRujukan' => 'Tgl Rujukan',
            'tglRencanaKunjungan' => 'Tgl Rencana Kunjungan',
            'ppkDirujuk' => 'Ppk Dirujuk',
            'nm_ppkDirujuk' => 'Nm Ppk Dirujuk',
            'jnsPelayanan' => 'Jns Pelayanan',
            'catatan' => 'Catatan',
            'diagRujukan' => 'Diag Rujukan',
            'nama_diagRujukan' => 'Nama Diag Rujukan',
            'tipeRujukan' => 'Tipe Rujukan',
            'poliRujukan' => 'Poli Rujukan',
            'nama_poliRujukan' => 'Nama Poli Rujukan',
            'no_rujukan' => 'No Rujukan',
            'user' => 'User',
        ];
    }

    /**
     * Gets query for [[BridgingRujukanBpjsKhusus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBridgingRujukanBpjsKhusus()
    {
        return $this->hasOne(BridgingRujukanBpjsKhusus::class, ['no_rujukan' => 'no_rujukan']);
    }

    /**
     * Gets query for [[BridgingRujukanBpjsKhususDiagnosas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBridgingRujukanBpjsKhususDiagnosas()
    {
        return $this->hasMany(BridgingRujukanBpjsKhususDiagnosa::class, ['no_rujukan' => 'no_rujukan']);
    }

    /**
     * Gets query for [[BridgingRujukanBpjsKhususProsedurs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBridgingRujukanBpjsKhususProsedurs()
    {
        return $this->hasMany(BridgingRujukanBpjsKhususProsedur::class, ['no_rujukan' => 'no_rujukan']);
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
