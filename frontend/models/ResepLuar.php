<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "resep_luar".
 *
 * @property string $no_resep
 * @property string|null $tgl_perawatan
 * @property string $jam
 * @property string $no_rawat
 * @property string $kd_dokter
 * @property string|null $tgl_peresepan
 * @property string|null $jam_peresepan
 *
 * @property Dokter $kdDokter
 * @property Databarang[] $kodeBrngs
 * @property RegPeriksa $noRawat
 * @property ResepLuarObat[] $resepLuarObats
 * @property ResepLuarRacikanDetail[] $resepLuarRacikanDetails
 * @property ResepLuarRacikan[] $resepLuarRacikans
 */
class ResepLuar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resep_luar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_resep', 'jam', 'kd_dokter'], 'required'],
            [['tgl_perawatan', 'jam', 'tgl_peresepan', 'jam_peresepan'], 'safe'],
            [['no_resep'], 'string', 'max' => 14],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['tgl_perawatan', 'jam', 'no_rawat'], 'unique', 'targetAttribute' => ['tgl_perawatan', 'jam', 'no_rawat']],
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
        ];
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
        return $this->hasMany(Databarang::class, ['kode_brng' => 'kode_brng'])->viaTable('resep_luar_obat', ['no_resep' => 'no_resep']);
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
     * Gets query for [[ResepLuarObats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResepLuarObats()
    {
        return $this->hasMany(ResepLuarObat::class, ['no_resep' => 'no_resep']);
    }

    /**
     * Gets query for [[ResepLuarRacikanDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResepLuarRacikanDetails()
    {
        return $this->hasMany(ResepLuarRacikanDetail::class, ['no_resep' => 'no_resep']);
    }

    /**
     * Gets query for [[ResepLuarRacikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResepLuarRacikans()
    {
        return $this->hasMany(ResepLuarRacikan::class, ['no_resep' => 'no_resep']);
    }
}
