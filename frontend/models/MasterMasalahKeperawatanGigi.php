<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_masalah_keperawatan_gigi".
 *
 * @property string $kode_masalah
 * @property string|null $nama_masalah
 *
 * @property MasterRencanaKeperawatanGigi[] $masterRencanaKeperawatanGigis
 * @property PenilaianAwalKeperawatanGigi[] $noRawats
 * @property PenilaianAwalKeperawatanGigiMasalah[] $penilaianAwalKeperawatanGigiMasalahs
 */
class MasterMasalahKeperawatanGigi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_masalah_keperawatan_gigi';
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
     * Gets query for [[MasterRencanaKeperawatanGigis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMasterRencanaKeperawatanGigis()
    {
        return $this->hasMany(MasterRencanaKeperawatanGigi::class, ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[NoRawats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawats()
    {
        return $this->hasMany(PenilaianAwalKeperawatanGigi::class, ['no_rawat' => 'no_rawat'])->viaTable('penilaian_awal_keperawatan_gigi_masalah', ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanGigiMasalahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanGigiMasalahs()
    {
        return $this->hasMany(PenilaianAwalKeperawatanGigiMasalah::class, ['kode_masalah' => 'kode_masalah']);
    }
}
