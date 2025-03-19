<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_masalah_keperawatan".
 *
 * @property string $kode_masalah
 * @property string|null $nama_masalah
 *
 * @property MasterRencanaKeperawatan[] $masterRencanaKeperawatans
 * @property MppEvaluasiMasalah[] $mppEvaluasiMasalahs
 * @property PenilaianAwalKeperawatanMata[] $noRawats
 * @property PenilaianAwalKeperawatanRalan[] $noRawats0
 * @property PenilaianAwalKeperawatanRanap[] $noRawats1
 * @property PenilaianAwalKeperawatanMataMasalah[] $penilaianAwalKeperawatanMataMasalahs
 * @property PenilaianAwalKeperawatanRalanMasalah[] $penilaianAwalKeperawatanRalanMasalahs
 * @property PenilaianAwalKeperawatanRanapMasalah[] $penilaianAwalKeperawatanRanapMasalahs
 */
class MasterMasalahKeperawatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_masalah_keperawatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_masalah'], 'required'],
            [['kode_masalah'], 'string', 'max' => 3],
            [['nama_masalah'], 'string', 'max' => 100],
            [['kode_masalah'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_masalah' => 'Kode Masalah',
            'nama_masalah' => 'Nama Masalah',
        ];
    }

    /**
     * Gets query for [[MasterRencanaKeperawatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMasterRencanaKeperawatans()
    {
        return $this->hasMany(MasterRencanaKeperawatan::class, ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[MppEvaluasiMasalahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMppEvaluasiMasalahs()
    {
        return $this->hasMany(MppEvaluasiMasalah::class, ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[NoRawats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawats()
    {
        return $this->hasMany(PenilaianAwalKeperawatanMata::class, ['no_rawat' => 'no_rawat'])->viaTable('penilaian_awal_keperawatan_mata_masalah', ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[NoRawats0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawats0()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalan::class, ['no_rawat' => 'no_rawat'])->viaTable('penilaian_awal_keperawatan_ralan_masalah', ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[NoRawats1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawats1()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRanap::class, ['no_rawat' => 'no_rawat'])->viaTable('penilaian_awal_keperawatan_ranap_masalah', ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanMataMasalahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanMataMasalahs()
    {
        return $this->hasMany(PenilaianAwalKeperawatanMataMasalah::class, ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRalanMasalahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRalanMasalahs()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalanMasalah::class, ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRanapMasalahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRanapMasalahs()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRanapMasalah::class, ['kode_masalah' => 'kode_masalah']);
    }
}
