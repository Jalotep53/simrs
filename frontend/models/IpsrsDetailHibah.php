<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ipsrs_detail_hibah".
 *
 * @property string $no_hibah
 * @property string $kode_brng
 * @property string $kode_sat
 * @property float|null $jumlah
 * @property float|null $h_hibah
 * @property float|null $subtotalhibah
 *
 * @property Ipsrsbarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property IpsrsHibah $noHibah
 */
class IpsrsDetailHibah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ipsrs_detail_hibah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_hibah', 'kode_brng', 'kode_sat'], 'required'],
            [['jumlah', 'h_hibah', 'subtotalhibah'], 'number'],
            [['no_hibah'], 'string', 'max' => 20],
            [['kode_brng'], 'string', 'max' => 15],
            [['kode_sat'], 'string', 'max' => 4],
            [['no_hibah', 'kode_brng'], 'unique', 'targetAttribute' => ['no_hibah', 'kode_brng']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Ipsrsbarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['no_hibah'], 'exist', 'skipOnError' => true, 'targetClass' => IpsrsHibah::class, 'targetAttribute' => ['no_hibah' => 'no_hibah']],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
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
        ];
    }

    /**
     * Gets query for [[KodeBrng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrng()
    {
        return $this->hasOne(Ipsrsbarang::class, ['kode_brng' => 'kode_brng']);
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
        return $this->hasOne(IpsrsHibah::class, ['no_hibah' => 'no_hibah']);
    }
}
