<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bridging_inhealth".
 *
 * @property string $no_sjp
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
 * @property string $diagawal2
 * @property string $nmdiagnosaawal2
 * @property string|null $kdpolitujuan
 * @property string|null $nmpolitujuan
 * @property string|null $klsrawat
 * @property string|null $klsdesc
 * @property string|null $kdbu
 * @property string|null $nmbu
 * @property string|null $lakalantas
 * @property string|null $lokasilaka
 * @property string|null $user
 * @property string|null $nomr
 * @property string|null $nama_pasien
 * @property string|null $tanggal_lahir
 * @property string|null $jkel
 * @property string|null $no_kartu
 * @property string|null $tglpulang
 * @property string $plan
 * @property string $plandesc
 * @property string|null $idakomodasi
 * @property string|null $tipesjp
 * @property string|null $tipecob
 *
 * @property RegPeriksa $noRawat
 */
class BridgingInhealth extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bridging_inhealth';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_sjp', 'diagawal2', 'nmdiagnosaawal2', 'plan', 'plandesc'], 'required'],
            [['tglsep', 'tglrujukan', 'tanggal_lahir', 'tglpulang'], 'safe'],
            [['jnspelayanan', 'klsrawat', 'lakalantas', 'jkel'], 'string'],
            [['no_sjp'], 'string', 'max' => 40],
            [['no_rawat'], 'string', 'max' => 17],
            [['no_rujukan'], 'string', 'max' => 30],
            [['kdppkrujukan', 'kdppkpelayanan', 'kdbu'], 'string', 'max' => 12],
            [['nmppkrujukan', 'nmppkpelayanan', 'nmbu'], 'string', 'max' => 200],
            [['catatan', 'nmdiagnosaawal', 'nmdiagnosaawal2', 'lokasilaka', 'nama_pasien', 'plandesc'], 'string', 'max' => 100],
            [['diagawal', 'diagawal2'], 'string', 'max' => 10],
            [['kdpolitujuan'], 'string', 'max' => 5],
            [['nmpolitujuan', 'klsdesc'], 'string', 'max' => 50],
            [['user', 'no_kartu'], 'string', 'max' => 25],
            [['nomr'], 'string', 'max' => 15],
            [['plan', 'tipesjp', 'tipecob'], 'string', 'max' => 35],
            [['idakomodasi'], 'string', 'max' => 20],
            [['no_sjp'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_sjp' => 'No Sjp',
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
            'diagawal2' => 'Diagawal2',
            'nmdiagnosaawal2' => 'Nmdiagnosaawal2',
            'kdpolitujuan' => 'Kdpolitujuan',
            'nmpolitujuan' => 'Nmpolitujuan',
            'klsrawat' => 'Klsrawat',
            'klsdesc' => 'Klsdesc',
            'kdbu' => 'Kdbu',
            'nmbu' => 'Nmbu',
            'lakalantas' => 'Lakalantas',
            'lokasilaka' => 'Lokasilaka',
            'user' => 'User',
            'nomr' => 'Nomr',
            'nama_pasien' => 'Nama Pasien',
            'tanggal_lahir' => 'Tanggal Lahir',
            'jkel' => 'Jkel',
            'no_kartu' => 'No Kartu',
            'tglpulang' => 'Tglpulang',
            'plan' => 'Plan',
            'plandesc' => 'Plandesc',
            'idakomodasi' => 'Idakomodasi',
            'tipesjp' => 'Tipesjp',
            'tipecob' => 'Tipecob',
        ];
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
