<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detailhibah_obat_bhp".
 *
 * @property string $no_hibah
 * @property string $kode_brng
 * @property string|null $kode_sat
 * @property float|null $jumlah
 * @property float|null $h_hibah
 * @property float|null $subtotalhibah
 * @property float $h_diakui
 * @property float $subtotaldiakui
 * @property string $no_batch
 * @property float|null $jumlah2
 * @property string|null $kadaluarsa
 *
 * @property Databarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property HibahObatBhp $noHibah
 */
class DetailhibahObatBhp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detailhibah_obat_bhp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_hibah', 'kode_brng', 'h_diakui', 'subtotaldiakui', 'no_batch'], 'required'],
            [['jumlah', 'h_hibah', 'subtotalhibah', 'h_diakui', 'subtotaldiakui', 'jumlah2'], 'number'],
            [['kadaluarsa'], 'safe'],
            [['no_hibah', 'no_batch'], 'string', 'max' => 20],
            [['kode_brng'], 'string', 'max' => 15],
            [['kode_sat'], 'string', 'max' => 4],
            [['no_hibah', 'kode_brng', 'no_batch'], 'unique', 'targetAttribute' => ['no_hibah', 'kode_brng', 'no_batch']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
            [['no_hibah'], 'exist', 'skipOnError' => true, 'targetClass' => HibahObatBhp::class, 'targetAttribute' => ['no_hibah' => 'no_hibah']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_hibah' => 'No Hibah',
            'kode_brng' => 'Kode Brng',
            'kode_sat' => 'Kode Sat',
            'jumlah' => 'Jumlah',
            'h_hibah' => 'H Hibah',
            'subtotalhibah' => 'Subtotalhibah',
            'h_diakui' => 'H Diakui',
            'subtotaldiakui' => 'Subtotaldiakui',
            'no_batch' => 'No Batch',
            'jumlah2' => 'Jumlah2',
            'kadaluarsa' => 'Kadaluarsa',
        ];
    }

    /**
     * Gets query for [[KodeBrng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrng()
    {
        return $this->hasOne(Databarang::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[KodeSat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSat()
    {
        return $this->hasOne(Kodesatuan::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[NoHibah]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoHibah()
    {
        return $this->hasOne(HibahObatBhp::class, ['no_hibah' => 'no_hibah']);
    }
}
