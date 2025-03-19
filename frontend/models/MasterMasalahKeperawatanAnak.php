<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_masalah_keperawatan_anak".
 *
 * @property string $kode_masalah
 * @property string|null $nama_masalah
 *
 * @property MasterRencanaKeperawatanAnak[] $masterRencanaKeperawatanAnaks
 * @property PenilaianAwalKeperawatanRalanBayi[] $noRawats
 * @property PenilaianAwalKeperawatanRanapBayi[] $noRawats0
 * @property PenilaianAwalKeperawatanRalanBayiMasalah[] $penilaianAwalKeperawatanRalanBayiMasalahs
 * @property PenilaianAwalKeperawatanRanapBayiMasalah[] $penilaianAwalKeperawatanRanapBayiMasalahs
 */
class MasterMasalahKeperawatanAnak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_masalah_keperawatan_anak';
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
     * Gets query for [[MasterRencanaKeperawatanAnaks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMasterRencanaKeperawatanAnaks()
    {
        return $this->hasMany(MasterRencanaKeperawatanAnak::class, ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[NoRawats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawats()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalanBayi::class, ['no_rawat' => 'no_rawat'])->viaTable('penilaian_awal_keperawatan_ralan_bayi_masalah', ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[NoRawats0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawats0()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRanapBayi::class, ['no_rawat' => 'no_rawat'])->viaTable('penilaian_awal_keperawatan_ranap_bayi_masalah', ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRalanBayiMasalahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRalanBayiMasalahs()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalanBayiMasalah::class, ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRanapBayiMasalahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRanapBayiMasalahs()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRanapBayiMasalah::class, ['kode_masalah' => 'kode_masalah']);
    }
}
