<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_rencana_keperawatan_geriatri".
 *
 * @property string $kode_masalah
 * @property string $kode_rencana
 * @property string $rencana_keperawatan
 *
 * @property MasterMasalahKeperawatanGeriatri $kodeMasalah
 * @property PenilaianAwalKeperawatanRalanGeriatri[] $noRawats
 * @property PenilaianAwalKeperawatanRalanRencanaGeriatri[] $penilaianAwalKeperawatanRalanRencanaGeriatris
 */
class MasterRencanaKeperawatanGeriatri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_rencana_keperawatan_geriatri';
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
            [['kode_masalah'], 'exist', 'skipOnError' => true, 'targetClass' => MasterMasalahKeperawatanGeriatri::class, 'targetAttribute' => ['kode_masalah' => 'kode_masalah']],
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
        return $this->hasOne(MasterMasalahKeperawatanGeriatri::class, ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[NoRawats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawats()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalanGeriatri::class, ['no_rawat' => 'no_rawat'])->viaTable('penilaian_awal_keperawatan_ralan_rencana_geriatri', ['kode_rencana' => 'kode_rencana']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanRalanRencanaGeriatris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanRalanRencanaGeriatris()
    {
        return $this->hasMany(PenilaianAwalKeperawatanRalanRencanaGeriatri::class, ['kode_rencana' => 'kode_rencana']);
    }
}
