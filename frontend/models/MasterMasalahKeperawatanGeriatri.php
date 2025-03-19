<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_masalah_keperawatan_geriatri".
 *
 * @property string $kode_masalah
 * @property string|null $nama_masalah
 *
 * @property MasterRencanaKeperawatanGeriatri[] $masterRencanaKeperawatanGeriatris
 * @property PenilaianAwalKeperawatanRalanGeriatri[] $noRawats
 * @property PenilaianAwalKeperawatanRalanMasalahGeriatri[] $penilaianAwalKeperawatanRalanMasalahGeriatris
 */
class MasterMasalahKeperawatanGeriatri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_masalah_keperawatan_geriatri';
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
     * Gets query for [[MasterRencanaKeperawatanGeriatris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMasterRencanaKeperawatanGeriatris()
    {
        return $this->hasMany(MasterRencanaKeperawatanGeriatri::class, ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[NoRawats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawats()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalanGeriatri::class, ['no_rawat' => 'no_rawat'])->viaTable('penilaian_awal_keperawatan_ralan_masalah_geriatri', ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRalanMasalahGeriatris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRalanMasalahGeriatris()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalanMasalahGeriatri::class, ['kode_masalah' => 'kode_masalah']);
    }
}
