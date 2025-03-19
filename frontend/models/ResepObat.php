<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "resep_obat".
 *
 * @property string $no_resep
 * @property string|null $tgl_perawatan
 * @property string $jam
 * @property string $no_rawat
 * @property string $kd_dokter
 * @property string|null $tgl_peresepan
 * @property string|null $jam_peresepan
 * @property string|null $status
 * @property string $tgl_penyerahan
 * @property string $jam_penyerahan
 *
 * @property BuktiPenyerahanResepObat $buktiPenyerahanResepObat
 * @property Dokter $kdDokter
 * @property Databarang[] $kodeBrngs
 * @property Databarang[] $kodeBrngs0
 * @property RegPeriksa $noRawat
 * @property ResepDokterRacikanDetail[] $resepDokterRacikanDetails
 * @property ResepDokterRacikan[] $resepDokterRacikans
 * @property ResepDokter[] $resepDokters
 * @property SatuSehatMedicationrequestRacikan[] $satuSehatMedicationrequestRacikans
 * @property SatuSehatMedicationrequest[] $satuSehatMedicationrequests
 * @property SatuSehatMedicationstatementRacikan[] $satuSehatMedicationstatementRacikans
 * @property SatuSehatMedicationstatement[] $satuSehatMedicationstatements
 * @property TelaahFarmasi $telaahFarmasi
 */
class ResepObat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resep_obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_resep', 'jam', 'kd_dokter', 'tgl_penyerahan', 'jam_penyerahan'], 'required'],
            [['tgl_perawatan', 'jam', 'tgl_peresepan', 'jam_peresepan', 'tgl_penyerahan', 'jam_penyerahan'], 'safe'],
            [['status'], 'string'],
            [['no_resep'], 'string', 'max' => 14],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['no_resep'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_resep' => 'No Resep',
            'tgl_perawatan' => 'Tgl Perawatan',
            'jam' => 'Jam',
            'no_rawat' => 'No Rawat',
            'kd_dokter' => 'Kd Dokter',
            'tgl_peresepan' => 'Tgl Peresepan',
            'jam_peresepan' => 'Jam Peresepan',
            'status' => 'Status',
            'tgl_penyerahan' => 'Tgl Penyerahan',
            'jam_penyerahan' => 'Jam Penyerahan',
        ];
    }

    /**
     * Gets query for [[BuktiPenyerahanResepObat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuktiPenyerahanResepObat()
    {
        return $this->hasOne(BuktiPenyerahanResepObat::class, ['no_resep' => 'no_resep']);
    }

    /**
     * Gets query for [[KdDokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokter()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[KodeBrngs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrngs()
    {
        return $this->hasMany(Databarang::class, ['kode_brng' => 'kode_brng'])->viaTable('satu_sehat_medicationrequest', ['no_resep' => 'no_resep']);
    }

    /**
     * Gets query for [[KodeBrngs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrngs0()
    {
        return $this->hasMany(Databarang::class, ['kode_brng' => 'kode_brng'])->viaTable('satu_sehat_medicationstatement', ['no_resep' => 'no_resep']);
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
     * Gets query for [[ResepDokterRacikanDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResepDokterRacikanDetails()
    {
        return $this->hasMany(ResepDokterRacikanDetail::class, ['no_resep' => 'no_resep']);
    }

    /**
     * Gets query for [[ResepDokterRacikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResepDokterRacikans()
    {
        return $this->hasMany(ResepDokterRacikan::class, ['no_resep' => 'no_resep']);
    }

    /**
     * Gets query for [[ResepDokters]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResepDokters()
    {
        return $this->hasMany(ResepDokter::class, ['no_resep' => 'no_resep']);
    }

    /**
     * Gets query for [[SatuSehatMedicationrequestRacikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMedicationrequestRacikans()
    {
        return $this->hasMany(SatuSehatMedicationrequestRacikan::class, ['no_resep' => 'no_resep']);
    }

    /**
     * Gets query for [[SatuSehatMedicationrequests]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMedicationrequests()
    {
        return $this->hasMany(SatuSehatMedicationrequest::class, ['no_resep' => 'no_resep']);
    }

    /**
     * Gets query for [[SatuSehatMedicationstatementRacikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMedicationstatementRacikans()
    {
        return $this->hasMany(SatuSehatMedicationstatementRacikan::class, ['no_resep' => 'no_resep']);
    }

    /**
     * Gets query for [[SatuSehatMedicationstatements]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMedicationstatements()
    {
        return $this->hasMany(SatuSehatMedicationstatement::class, ['no_resep' => 'no_resep']);
    }

    /**
     * Gets query for [[TelaahFarmasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTelaahFarmasi()
    {
        return $this->hasOne(TelaahFarmasi::class, ['no_resep' => 'no_resep']);
    }
}
