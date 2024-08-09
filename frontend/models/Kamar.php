<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kamar".
 *
 * @property string $kd_kamar
 * @property string|null $kd_bangsal
 * @property float|null $trf_kamar
 * @property string|null $status
 * @property string|null $kelas
 * @property string|null $statusdata
 *
 * @property BiayaHarian[] $biayaHarians
 * @property BiayaSekali[] $biayaSekalis
 * @property DataHais[] $dataHais
 * @property DataKlasifikasiPasienRanap[] $dataKlasifikasiPasienRanaps
 * @property DetailBeriDiet[] $detailBeriDiets
 * @property InhealthJenpelRuangRawat $inhealthJenpelRuangRawat
 * @property KamarInap[] $kamarInaps
 * @property Bangsal $kdBangsal
 * @property Penjab[] $kdPjs
 * @property PermintaanRanap[] $permintaanRanaps
 * @property RujukanranapDokterRs[] $rujukanranapDokterRs
 * @property SatuSehatMappingLokasiRanap $satuSehatMappingLokasiRanap
 * @property SetHargaKamar[] $setHargaKamars
 * @property SisaDietPasien[] $sisaDietPasiens
 */
class Kamar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kamar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_kamar'], 'required'],
            [['trf_kamar'], 'number'],
            [['status', 'kelas', 'statusdata'], 'string'],
            [['kd_kamar'], 'string', 'max' => 15],
            [['kd_bangsal'], 'string', 'max' => 5],
            [['kd_kamar'], 'unique'],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_kamar' => 'Kd Kamar',
            'kd_bangsal' => 'Kd Bangsal',
            'trf_kamar' => 'Trf Kamar',
            'status' => 'Status',
            'kelas' => 'Kelas',
            'statusdata' => 'Statusdata',
        ];
    }

    /**
     * Gets query for [[BiayaHarians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBiayaHarians()
    {
        return $this->hasMany(BiayaHarian::class, ['kd_kamar' => 'kd_kamar']);
    }

    /**
     * Gets query for [[BiayaSekalis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBiayaSekalis()
    {
        return $this->hasMany(BiayaSekali::class, ['kd_kamar' => 'kd_kamar']);
    }

    /**
     * Gets query for [[DataHais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataHais()
    {
        return $this->hasMany(DataHais::class, ['kd_kamar' => 'kd_kamar']);
    }

    /**
     * Gets query for [[DataKlasifikasiPasienRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataKlasifikasiPasienRanaps()
    {
        return $this->hasMany(DataKlasifikasiPasienRanap::class, ['kd_kamar' => 'kd_kamar']);
    }

    /**
     * Gets query for [[DetailBeriDiets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailBeriDiets()
    {
        return $this->hasMany(DetailBeriDiet::class, ['kd_kamar' => 'kd_kamar']);
    }

    /**
     * Gets query for [[InhealthJenpelRuangRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInhealthJenpelRuangRawat()
    {
        return $this->hasOne(InhealthJenpelRuangRawat::class, ['kd_kamar' => 'kd_kamar']);
    }

    /**
     * Gets query for [[KamarInaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKamarInaps()
    {
        return $this->hasMany(KamarInap::class, ['kd_kamar' => 'kd_kamar']);
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
     * Gets query for [[KdPjs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPjs()
    {
        return $this->hasMany(Penjab::class, ['kd_pj' => 'kd_pj'])->viaTable('set_harga_kamar', ['kd_kamar' => 'kd_kamar']);
    }

    /**
     * Gets query for [[PermintaanRanaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPermintaanRanaps()
    {
        return $this->hasMany(PermintaanRanap::class, ['kd_kamar' => 'kd_kamar']);
    }

    /**
     * Gets query for [[RujukanranapDokterRs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRujukanranapDokterRs()
    {
        return $this->hasMany(RujukanranapDokterRs::class, ['kd_kamar' => 'kd_kamar']);
    }

    /**
     * Gets query for [[SatuSehatMappingLokasiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatMappingLokasiRanap()
    {
        return $this->hasOne(SatuSehatMappingLokasiRanap::class, ['kd_kamar' => 'kd_kamar']);
    }

    /**
     * Gets query for [[SetHargaKamars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetHargaKamars()
    {
        return $this->hasMany(SetHargaKamar::class, ['kd_kamar' => 'kd_kamar']);
    }

    /**
     * Gets query for [[SisaDietPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSisaDietPasiens()
    {
        return $this->hasMany(SisaDietPasien::class, ['kd_kamar' => 'kd_kamar']);
    }
}
