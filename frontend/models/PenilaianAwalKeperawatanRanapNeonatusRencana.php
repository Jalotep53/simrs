<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_awal_keperawatan_ranap_neonatus_rencana".
 *
 * @property string $no_rawat
 * @property string $kode_rencana
 *
 * @property MasterRencanaKeperawatanNeonatus $kodeRencana
 * @property PenilaianAwalKeperawatanRanapNeonatus $noRawat
 */
class PenilaianAwalKeperawatanRanapNeonatusRencana extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_awal_keperawatan_ranap_neonatus_rencana';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kode_rencana'], 'required'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kode_rencana'], 'string', 'max' => 3],
            [['no_rawat', 'kode_rencana'], 'unique', 'targetAttribute' => ['no_rawat', 'kode_rencana']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => PenilaianAwalKeperawatanRanapNeonatus::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kode_rencana'], 'exist', 'skipOnError' => true, 'targetClass' => MasterRencanaKeperawatanNeonatus::class, 'targetAttribute' => ['kode_rencana' => 'kode_rencana']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'kode_rencana' => 'Kode Rencana',
        ];
    }

    /**
     * Gets query for [[KodeRencana]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeRencana()
    {
        return $this->hasOne(MasterRencanaKeperawatanNeonatus::class, ['kode_rencana' => 'kode_rencana']);
    }

    /**
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(PenilaianAwalKeperawatanRanapNeonatus::class, ['no_rawat' => 'no_rawat']);
    }
}
