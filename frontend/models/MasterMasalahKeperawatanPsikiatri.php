<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_masalah_keperawatan_psikiatri".
 *
 * @property string $kode_masalah
 * @property string|null $nama_masalah
 *
 * @property MasterRencanaKeperawatanPsikiatri[] $masterRencanaKeperawatanPsikiatris
 * @property PenilaianAwalKeperawatanRalanPsikiatri[] $noRawats
 * @property PenilaianAwalKeperawatanRalanMasalahPsikiatri[] $penilaianAwalKeperawatanRalanMasalahPsikiatris
 */
class MasterMasalahKeperawatanPsikiatri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_masalah_keperawatan_psikiatri';
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
     * Gets query for [[MasterRencanaKeperawatanPsikiatris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMasterRencanaKeperawatanPsikiatris()
    {
        return $this->hasMany(MasterRencanaKeperawatanPsikiatri::class, ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[NoRawats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawats()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalanPsikiatri::class, ['no_rawat' => 'no_rawat'])->viaTable('penilaian_awal_keperawatan_ralan_masalah_psikiatri', ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRalanMasalahPsikiatris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRalanMasalahPsikiatris()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalanMasalahPsikiatri::class, ['kode_masalah' => 'kode_masalah']);
    }
}
