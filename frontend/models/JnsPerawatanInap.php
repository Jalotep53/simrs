<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jns_perawatan_inap".
 *
 * @property string $kd_jenis_prw
 * @property string|null $nm_perawatan
 * @property string $kd_kategori
 * @property float|null $material
 * @property float $bhp
 * @property float|null $tarif_tindakandr
 * @property float|null $tarif_tindakanpr
 * @property float|null $kso
 * @property float|null $menejemen
 * @property float|null $total_byrdr
 * @property float|null $total_byrpr
 * @property float $total_byrdrpr
 * @property string $kd_pj
 * @property string $kd_bangsal
 * @property string $status
 * @property string $kelas
 *
 * @property BayarRawatInapDrpr[] $bayarRawatInapDrprs
 * @property BayarRawatInapDr[] $bayarRawatInapDrs
 * @property InhealthTindakanRanap $inhealthTindakanRanap
 * @property Bangsal $kdBangsal
 * @property KategoriPerawatan $kdKategori
 * @property Penjab $kdPj
 * @property MapingTindakanRanapPcare $mapingTindakanRanapPcare
 * @property MatrikAkunJnsPerawatanInap $matrikAkunJnsPerawatanInap
 * @property RawatInapDrpr[] $rawatInapDrprs
 * @property RawatInapDr[] $rawatInapDrs
 * @property RawatInapPr[] $rawatInapPrs
 */
class JnsPerawatanInap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jns_perawatan_inap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis_prw', 'kd_kategori', 'bhp', 'total_byrdrpr', 'kd_pj', 'kd_bangsal', 'status', 'kelas'], 'required'],
            [['material', 'bhp', 'tarif_tindakandr', 'tarif_tindakanpr', 'kso', 'menejemen', 'total_byrdr', 'total_byrpr', 'total_byrdrpr'], 'number'],
            [['status', 'kelas'], 'string'],
            [['kd_jenis_prw'], 'string', 'max' => 15],
            [['nm_perawatan'], 'string', 'max' => 80],
            [['kd_kategori', 'kd_bangsal'], 'string', 'max' => 5],
            [['kd_pj'], 'string', 'max' => 3],
            [['kd_jenis_prw'], 'unique'],
            [['kd_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriPerawatan::class, 'targetAttribute' => ['kd_kategori' => 'kd_kategori']],
            [['kd_pj'], 'exist', 'skipOnError' => true, 'targetClass' => Penjab::class, 'targetAttribute' => ['kd_pj' => 'kd_pj']],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_jenis_prw' => 'Kd Jenis Prw',
            'nm_perawatan' => 'Nm Perawatan',
            'kd_kategori' => 'Kd Kategori',
            'material' => 'Material',
            'bhp' => 'Bhp',
            'tarif_tindakandr' => 'Tarif Tindakandr',
            'tarif_tindakanpr' => 'Tarif Tindakanpr',
            'kso' => 'Kso',
            'menejemen' => 'Menejemen',
            'total_byrdr' => 'Total Byrdr',
            'total_byrpr' => 'Total Byrpr',
            'total_byrdrpr' => 'Total Byrdrpr',
            'kd_pj' => 'Kd Pj',
            'kd_bangsal' => 'Kd Bangsal',
            'status' => 'Status',
            'kelas' => 'Kelas',
        ];
    }

    /**
     * Gets query for [[BayarRawatInapDrprs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarRawatInapDrprs()
    {
        return $this->hasMany(BayarRawatInapDrpr::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[BayarRawatInapDrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarRawatInapDrs()
    {
        return $this->hasMany(BayarRawatInapDr::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[InhealthTindakanRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInhealthTindakanRanap()
    {
        return $this->hasOne(InhealthTindakanRanap::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
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
     * Gets query for [[KdKategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdKategori()
    {
        return $this->hasOne(KategoriPerawatan::class, ['kd_kategori' => 'kd_kategori']);
    }

    /**
     * Gets query for [[KdPj]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPj()
    {
        return $this->hasOne(Penjab::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[MapingTindakanRanapPcare]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMapingTindakanRanapPcare()
    {
        return $this->hasOne(MapingTindakanRanapPcare::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[MatrikAkunJnsPerawatanInap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrikAkunJnsPerawatanInap()
    {
        return $this->hasOne(MatrikAkunJnsPerawatanInap::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[RawatInapDrprs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatInapDrprs()
    {
        return $this->hasMany(RawatInapDrpr::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[RawatInapDrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatInapDrs()
    {
        return $this->hasMany(RawatInapDr::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[RawatInapPrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatInapPrs()
    {
        return $this->hasMany(RawatInapPr::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }
}
