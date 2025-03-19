<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bridging_sep_internal".
 *
 * @property string $no_sep
 * @property string|null $no_rawat
 * @property string|null $tglsep
 * @property string|null $tglrujukan
 * @property string|null $no_rujukan
 * @property string|null $kdppkrujukan
 * @property string|null $nmppkrujukan
 * @property string|null $kdppkpelayanan
 * @property string|null $nmppkpelayanan
 * @property string|null $jnspelayanan
 * @property string|null $catatan
 * @property string|null $diagawal
 * @property string|null $nmdiagnosaawal
 * @property string|null $kdpolitujuan
 * @property string|null $nmpolitujuan
 * @property string|null $klsrawat
 * @property string $klsnaik
 * @property string $pembiayaan
 * @property string $pjnaikkelas
 * @property string|null $lakalantas
 * @property string|null $user
 * @property string|null $nomr
 * @property string|null $nama_pasien
 * @property string|null $tanggal_lahir
 * @property string|null $peserta
 * @property string|null $jkel
 * @property string|null $no_kartu
 * @property string|null $tglpulang
 * @property string $asal_rujukan
 * @property string $eksekutif
 * @property string $cob
 * @property string $notelep
 * @property string $katarak
 * @property string $tglkkl
 * @property string $keterangankkl
 * @property string $suplesi
 * @property string $no_sep_suplesi
 * @property string $kdprop
 * @property string $nmprop
 * @property string $kdkab
 * @property string $nmkab
 * @property string $kdkec
 * @property string $nmkec
 * @property string $noskdp
 * @property string $kddpjp
 * @property string $nmdpdjp
 * @property string $tujuankunjungan
 * @property string $flagprosedur
 * @property string $penunjang
 * @property string $asesmenpelayanan
 * @property string $kddpjplayanan
 * @property string $nmdpjplayanan
 *
 * @property InacbgDataTerkirimInternal $inacbgDataTerkirimInternal
 * @property InacbgGroupingStage1Internal $inacbgGroupingStage1Internal
 * @property InacbgKlaimBaruInternal $inacbgKlaimBaruInternal
 * @property RegPeriksa $noRawat
 * @property BridgingSep $noSep
 */
class BridgingSepInternal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bridging_sep_internal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tglsep', 'tglrujukan', 'tanggal_lahir', 'tglpulang', 'tglkkl'], 'safe'],
            [['jnspelayanan', 'klsrawat', 'klsnaik', 'pembiayaan', 'lakalantas', 'jkel', 'asal_rujukan', 'eksekutif', 'cob', 'katarak', 'suplesi', 'tujuankunjungan', 'flagprosedur', 'penunjang', 'asesmenpelayanan'], 'string'],
            [['klsnaik', 'pembiayaan', 'pjnaikkelas', 'asal_rujukan', 'eksekutif', 'cob', 'notelep', 'katarak', 'tglkkl', 'keterangankkl', 'suplesi', 'no_sep_suplesi', 'kdprop', 'nmprop', 'kdkab', 'nmkab', 'kdkec', 'nmkec', 'noskdp', 'kddpjp', 'nmdpdjp', 'tujuankunjungan', 'flagprosedur', 'penunjang', 'asesmenpelayanan', 'kddpjplayanan', 'nmdpjplayanan'], 'required'],
            [['no_sep', 'no_rujukan', 'notelep', 'no_sep_suplesi', 'noskdp'], 'string', 'max' => 40],
            [['no_rawat'], 'string', 'max' => 17],
            [['kdppkrujukan', 'kdppkpelayanan'], 'string', 'max' => 12],
            [['nmppkrujukan', 'nmppkpelayanan'], 'string', 'max' => 200],
            [['catatan', 'pjnaikkelas', 'nama_pasien', 'peserta', 'keterangankkl', 'nmdpdjp', 'nmdpjplayanan'], 'string', 'max' => 100],
            [['diagawal', 'kdprop', 'kdkab', 'kdkec', 'kddpjp', 'kddpjplayanan'], 'string', 'max' => 10],
            [['nmdiagnosaawal'], 'string', 'max' => 400],
            [['kdpolitujuan', 'nomr'], 'string', 'max' => 15],
            [['nmpolitujuan', 'nmprop', 'nmkab', 'nmkec'], 'string', 'max' => 50],
            [['user', 'no_kartu'], 'string', 'max' => 25],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
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
            'no_rawat' => 'No Rawat',
            'tglsep' => 'Tglsep',
            'tglrujukan' => 'Tglrujukan',
            'no_rujukan' => 'No Rujukan',
            'kdppkrujukan' => 'Kdppkrujukan',
            'nmppkrujukan' => 'Nmppkrujukan',
            'kdppkpelayanan' => 'Kdppkpelayanan',
            'nmppkpelayanan' => 'Nmppkpelayanan',
            'jnspelayanan' => 'Jnspelayanan',
            'catatan' => 'Catatan',
            'diagawal' => 'Diagawal',
            'nmdiagnosaawal' => 'Nmdiagnosaawal',
            'kdpolitujuan' => 'Kdpolitujuan',
            'nmpolitujuan' => 'Nmpolitujuan',
            'klsrawat' => 'Klsrawat',
            'klsnaik' => 'Klsnaik',
            'pembiayaan' => 'Pembiayaan',
            'pjnaikkelas' => 'Pjnaikkelas',
            'lakalantas' => 'Lakalantas',
            'user' => 'User',
            'nomr' => 'Nomr',
            'nama_pasien' => 'Nama Pasien',
            'tanggal_lahir' => 'Tanggal Lahir',
            'peserta' => 'Peserta',
            'jkel' => 'Jkel',
            'no_kartu' => 'No Kartu',
            'tglpulang' => 'Tglpulang',
            'asal_rujukan' => 'Asal Rujukan',
            'eksekutif' => 'Eksekutif',
            'cob' => 'Cob',
            'notelep' => 'Notelep',
            'katarak' => 'Katarak',
            'tglkkl' => 'Tglkkl',
            'keterangankkl' => 'Keterangankkl',
            'suplesi' => 'Suplesi',
            'no_sep_suplesi' => 'No Sep Suplesi',
            'kdprop' => 'Kdprop',
            'nmprop' => 'Nmprop',
            'kdkab' => 'Kdkab',
            'nmkab' => 'Nmkab',
            'kdkec' => 'Kdkec',
            'nmkec' => 'Nmkec',
            'noskdp' => 'Noskdp',
            'kddpjp' => 'Kddpjp',
            'nmdpdjp' => 'Nmdpdjp',
            'tujuankunjungan' => 'Tujuankunjungan',
            'flagprosedur' => 'Flagprosedur',
            'penunjang' => 'Penunjang',
            'asesmenpelayanan' => 'Asesmenpelayanan',
            'kddpjplayanan' => 'Kddpjplayanan',
            'nmdpjplayanan' => 'Nmdpjplayanan',
        ];
    }

    /**
     * Gets query for [[InacbgDataTerkirimInternal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInacbgDataTerkirimInternal()
    {
        return $this->hasOne(InacbgDataTerkirimInternal::class, ['no_sep' => 'no_sep']);
    }

    /**
     * Gets query for [[InacbgGroupingStage1Internal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInacbgGroupingStage1Internal()
    {
        return $this->hasOne(InacbgGroupingStage1Internal::class, ['no_sep' => 'no_sep']);
    }

    /**
     * Gets query for [[InacbgKlaimBaruInternal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInacbgKlaimBaruInternal()
    {
        return $this->hasOne(InacbgKlaimBaruInternal::class, ['no_sep' => 'no_sep']);
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
     * Gets query for [[NoSep]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoSep()
    {
        return $this->hasOne(BridgingSep::class, ['no_sep' => 'no_sep']);
    }
}
