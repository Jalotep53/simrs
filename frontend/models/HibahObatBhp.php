<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hibah_obat_bhp".
 *
 * @property string $no_hibah
 * @property string|null $kode_pemberi
 * @property string|null $nip
 * @property string|null $tgl_hibah
 * @property float $totalhibah
 * @property float $totalnilai
 * @property string $kd_bangsal
 *
 * @property DetailhibahObatBhp[] $detailhibahObatBhps
 * @property Bangsal $kdBangsal
 * @property Pemberihibah $kodePemberi
 * @property Petugas $nip0
 */
class HibahObatBhp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hibah_obat_bhp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_hibah', 'totalhibah', 'totalnilai', 'kd_bangsal'], 'required'],
            [['tgl_hibah'], 'safe'],
            [['totalhibah', 'totalnilai'], 'number'],
            [['no_hibah', 'nip'], 'string', 'max' => 20],
            [['kode_pemberi', 'kd_bangsal'], 'string', 'max' => 5],
            [['no_hibah'], 'unique'],
            [['kode_pemberi'], 'exist', 'skipOnError' => true, 'targetClass' => Pemberihibah::class, 'targetAttribute' => ['kode_pemberi' => 'kode_pemberi']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_hibah' => 'No Hibah',
            'kode_pemberi' => 'Kode Pemberi',
            'nip' => 'Nip',
            'tgl_hibah' => 'Tgl Hibah',
            'totalhibah' => 'Totalhibah',
            'totalnilai' => 'Totalnilai',
            'kd_bangsal' => 'Kd Bangsal',
        ];
    }

    /**
     * Gets query for [[DetailhibahObatBhps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailhibahObatBhps()
    {
        return $this->hasMany(DetailhibahObatBhp::class, ['no_hibah' => 'no_hibah']);
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
     * Gets query for [[KodePemberi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodePemberi()
    {
        return $this->hasOne(Pemberihibah::class, ['kode_pemberi' => 'kode_pemberi']);
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
}
