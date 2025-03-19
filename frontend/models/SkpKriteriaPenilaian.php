<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "skp_kriteria_penilaian".
 *
 * @property string $kode_kriteria
 * @property string|null $nama_kriteria
 * @property string $kode_kategori
 *
 * @property SkpKategoriPenilaian $kodeKategori
 * @property SkpPenilaian[] $nomorPenilaians
 * @property SkpDetailPenilaian[] $skpDetailPenilaians
 */
class SkpKriteriaPenilaian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skp_kriteria_penilaian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_kriteria', 'kode_kategori'], 'required'],
            [['kode_kriteria'], 'string', 'max' => 10],
            [['nama_kriteria'], 'string', 'max' => 150],
            [['kode_kategori'], 'string', 'max' => 5],
            [['kode_kriteria'], 'unique'],
            [['kode_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => SkpKategoriPenilaian::class, 'targetAttribute' => ['kode_kategori' => 'kode_kategori']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_kriteria' => 'Kode Kriteria',
            'nama_kriteria' => 'Nama Kriteria',
            'kode_kategori' => 'Kode Kategori',
        ];
    }

    /**
     * Gets query for [[KodeKategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeKategori()
    {
        return $this->hasOne(SkpKategoriPenilaian::class, ['kode_kategori' => 'kode_kategori']);
    }

    /**
     * Gets query for [[NomorPenilaians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNomorPenilaians()
    {
        return $this->hasMany(SkpPenilaian::class, ['nomor_penilaian' => 'nomor_penilaian'])->viaTable('skp_detail_penilaian', ['kode_kriteria' => 'kode_kriteria']);
    }

    /**
     * Gets query for [[SkpDetailPenilaians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkpDetailPenilaians()
    {
        return $this->hasMany(SkpDetailPenilaian::class, ['kode_kriteria' => 'kode_kriteria']);
    }
}
