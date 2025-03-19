<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_masalah_keperawatan_igd".
 *
 * @property string $kode_masalah
 * @property string|null $nama_masalah
 *
 * @property MasterRencanaKeperawatanIgd[] $masterRencanaKeperawatanIgds
 * @property PenilaianAwalKeperawatanIgd[] $noRawats
 * @property PenilaianAwalKeperawatanIgdMasalah[] $penilaianAwalKeperawatanIgdMasalahs
 */
class MasterMasalahKeperawatanIgd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_masalah_keperawatan_igd';
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
     * Gets query for [[MasterRencanaKeperawatanIgds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMasterRencanaKeperawatanIgds()
    {
        return $this->hasMany(MasterRencanaKeperawatanIgd::class, ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[NoRawats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawats()
    {
        return $this->hasMany(PenilaianAwalKeperawatanIgd::class, ['no_rawat' => 'no_rawat'])->viaTable('penilaian_awal_keperawatan_igd_masalah', ['kode_masalah' => 'kode_masalah']);
    }

    /**
     * Gets query for [[PenilaianAwalKeperawatanIgdMasalahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanIgdMasalahs()
    {
        return $this->hasMany(PenilaianAwalKeperawatanIgdMasalah::class, ['kode_masalah' => 'kode_masalah']);
    }
}
