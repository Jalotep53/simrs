<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_masalah_keperawatan_neonatus".
 *
 * @property string $kode_masalah
 * @property string|null $nama_masalah
 *
 * @property MasterRencanaKeperawatanNeonatus[] $masterRencanaKeperawatanNeonatuses
 * @property PenilaianAwalKeperawatanRanapNeonatus[] $noRawats
 * @property PenilaianAwalKeperawatanRanapNeonatusMasalah[] $penilaianAwalKeperawatanRanapNeonatusMasalahs
 */
class MasterMasalahKeperawatanNeonatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_masalah_keperawatan_neonatus';
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
     * Gets query for [[MasterRencanaKeperawatanNeonatuses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMasterRencanaKeperawatanNeonatuses()
    {
        return $this->hasMany(MasterRencanaKeperawatanNeonatus::class, ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[NoRawats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawats()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRanapNeonatus::class, ['no_rawat' => 'no_rawat'])->viaTable('penilaian_awal_keperawatan_ranap_neonatus_masalah', ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRanapNeonatusMasalahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRanapNeonatusMasalahs()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRanapNeonatusMasalah::class, ['kode_masalah' => 'kode_masalah']);
    }
}
