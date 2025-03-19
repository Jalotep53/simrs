<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_rencana_keperawatan_anak".
 *
 * @property string $kode_masalah
 * @property string $kode_rencana
 * @property string $rencana_keperawatan
 *
 * @property MasterMasalahKeperawatanAnak $kodeMasalah
 * @property PenilaianAwalKeperawatanRalanBayi[] $noRawats
 * @property PenilaianAwalKeperawatanRanapBayi[] $noRawats0
 * @property PenilaianAwalKeperawatanRalanRencanaAnak[] $penilaianAwalKeperawatanRalanRencanaAnaks
 * @property PenilaianAwalKeperawatanRanapBayiRencana[] $penilaianAwalKeperawatanRanapBayiRencanas
 */
class MasterRencanaKeperawatanAnak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_rencana_keperawatan_anak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_masalah', 'kode_rencana', 'rencana_keperawatan'], 'required'],
            [['kode_masalah', 'kode_rencana'], 'string', 'max' => 3],
            [['rencana_keperawatan'], 'string', 'max' => 1000],
            [['kode_rencana'], 'unique'],
            [['kode_masalah'], 'exist', 'skipOnError' => true, 'targetClass' => MasterMasalahKeperawatanAnak::class, 'targetAttribute' => ['kode_masalah' => 'kode_masalah']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_masalah' => 'Kode Masalah',
            'kode_rencana' => 'Kode Rencana',
            'rencana_keperawatan' => 'Rencana Keperawatan',
        ];
    }

    /**
     * Gets query for [[KodeMasalah]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeMasalah()
    {
        return $this->hasOne(MasterMasalahKeperawatanAnak::class, ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[NoRawats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawats()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalanBayi::class, ['no_rawat' => 'no_rawat'])->viaTable('penilaian_awal_keperawatan_ralan_rencana_anak', ['kode_rencana' => 'kode_rencana']);
    }

    /**
     * Gets query for [[NoRawats0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawats0()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRanapBayi::class, ['no_rawat' => 'no_rawat'])->viaTable('penilaian_awal_keperawatan_ranap_bayi_rencana', ['kode_rencana' => 'kode_rencana']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRalanRencanaAnaks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRalanRencanaAnaks()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalanRencanaAnak::class, ['kode_rencana' => 'kode_rencana']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRanapBayiRencanas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRanapBayiRencanas()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRanapBayiRencana::class, ['kode_rencana' => 'kode_rencana']);
    }
}
