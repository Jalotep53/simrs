<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kategori_pemasukan_lain".
 *
 * @property string $kode_kategori
 * @property string|null $nama_kategori
 * @property string|null $kd_rek
 * @property string|null $kd_rek2
 *
 * @property Rekening $kdRek
 * @property Rekening $kdRek2
 * @property PemasukanLain[] $pemasukanLains
 */
class KategoriPemasukanLain extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_pemasukan_lain';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_kategori'], 'required'],
            [['kode_kategori'], 'string', 'max' => 5],
            [['nama_kategori'], 'string', 'max' => 40],
            [['kd_rek', 'kd_rek2'], 'string', 'max' => 15],
            [['kode_kategori'], 'unique'],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
            [['kd_rek2'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek2' => 'kd_rek']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_kategori' => 'Kode Kategori',
            'nama_kategori' => 'Nama Kategori',
            'kd_rek' => 'Kd Rek',
            'kd_rek2' => 'Kd Rek2',
        ];
    }

    /**
     * Gets query for [[KdRek]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRek()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[KdRek2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRek2()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek2']);
    }

    /**
     * Gets query for [[PemasukanLains]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemasukanLains()
    {
        return $this->hasMany(PemasukanLain::class, ['kode_kategori' => 'kode_kategori']);
    }
}
