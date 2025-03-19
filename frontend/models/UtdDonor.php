<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "utd_donor".
 *
 * @property string $no_donor
 * @property string $no_pendonor
 * @property string|null $tanggal
 * @property string|null $dinas
 * @property string|null $tensi
 * @property int|null $no_bag
 * @property string|null $jenis_bag
 * @property string|null $jenis_donor
 * @property string|null $tempat_aftap
 * @property string|null $petugas_aftap
 * @property string|null $hbsag
 * @property string|null $hcv
 * @property string|null $hiv
 * @property string|null $spilis
 * @property string|null $malaria
 * @property string|null $petugas_u_saring
 * @property string|null $status
 *
 * @property Databarang[] $kodeBrngs
 * @property Ipsrsbarang[] $kodeBrngs0
 * @property UtdPendonor $noPendonor
 * @property Petugas $petugasAftap
 * @property Petugas $petugasUSaring
 * @property UtdCekalDarah $utdCekalDarah
 * @property UtdPemisahanKomponen $utdPemisahanKomponen
 * @property UtdPenggunaanMedisDonor[] $utdPenggunaanMedisDonors
 * @property UtdPenggunaanPenunjangDonor[] $utdPenggunaanPenunjangDonors
 */
class UtdDonor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'utd_donor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_donor', 'no_pendonor'], 'required'],
            [['tanggal'], 'safe'],
            [['dinas', 'jenis_bag', 'jenis_donor', 'tempat_aftap', 'hbsag', 'hcv', 'hiv', 'spilis', 'malaria', 'status'], 'string'],
            [['no_bag'], 'integer'],
            [['no_donor', 'no_pendonor'], 'string', 'max' => 15],
            [['tensi'], 'string', 'max' => 7],
            [['petugas_aftap', 'petugas_u_saring'], 'string', 'max' => 20],
            [['no_donor'], 'unique'],
            [['petugas_aftap'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['petugas_aftap' => 'nip']],
            [['petugas_u_saring'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['petugas_u_saring' => 'nip']],
            [['no_pendonor'], 'exist', 'skipOnError' => true, 'targetClass' => UtdPendonor::class, 'targetAttribute' => ['no_pendonor' => 'no_pendonor']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_donor' => 'No Donor',
            'no_pendonor' => 'No Pendonor',
            'tanggal' => 'Tanggal',
            'dinas' => 'Dinas',
            'tensi' => 'Tensi',
            'no_bag' => 'No Bag',
            'jenis_bag' => 'Jenis Bag',
            'jenis_donor' => 'Jenis Donor',
            'tempat_aftap' => 'Tempat Aftap',
            'petugas_aftap' => 'Petugas Aftap',
            'hbsag' => 'Hbsag',
            'hcv' => 'Hcv',
            'hiv' => 'Hiv',
            'spilis' => 'Spilis',
            'malaria' => 'Malaria',
            'petugas_u_saring' => 'Petugas U Saring',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[KodeBrngs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrngs()
    {
        return $this->hasMany(Databarang::class, ['kode_brng' => 'kode_brng'])->viaTable('utd_penggunaan_medis_donor', ['no_donor' => 'no_donor']);
    }

    /**
     * Gets query for [[KodeBrngs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrngs0()
    {
        return $this->hasMany(Ipsrsbarang::class, ['kode_brng' => 'kode_brng'])->viaTable('utd_penggunaan_penunjang_donor', ['no_donor' => 'no_donor']);
    }

    /**
     * Gets query for [[NoPendonor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoPendonor()
    {
        return $this->hasOne(UtdPendonor::class, ['no_pendonor' => 'no_pendonor']);
    }

    /**
     * Gets query for [[PetugasAftap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPetugasAftap()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'petugas_aftap']);
    }

    /**
     * Gets query for [[PetugasUSaring]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPetugasUSaring()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'petugas_u_saring']);
    }

    /**
     * Gets query for [[UtdCekalDarah]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdCekalDarah()
    {
        return $this->hasOne(UtdCekalDarah::class, ['no_donor' => 'no_donor']);
    }

    /**
     * Gets query for [[UtdPemisahanKomponen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPemisahanKomponen()
    {
        return $this->hasOne(UtdPemisahanKomponen::class, ['no_donor' => 'no_donor']);
    }

    /**
     * Gets query for [[UtdPenggunaanMedisDonors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPenggunaanMedisDonors()
    {
        return $this->hasMany(UtdPenggunaanMedisDonor::class, ['no_donor' => 'no_donor']);
    }

    /**
     * Gets query for [[UtdPenggunaanPenunjangDonors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdPenggunaanPenunjangDonors()
    {
        return $this->hasMany(UtdPenggunaanPenunjangDonor::class, ['no_donor' => 'no_donor']);
    }
}
