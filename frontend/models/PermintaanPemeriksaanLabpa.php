<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "permintaan_pemeriksaan_labpa".
 *
 * @property string $noorder
 * @property string $kd_jenis_prw
 * @property string|null $stts_bayar
 *
 * @property JnsPerawatanLab $kdJenisPrw
 * @property PermintaanLabpa $noorder0
 */
class PermintaanPemeriksaanLabpa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'permintaan_pemeriksaan_labpa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['noorder', 'kd_jenis_prw'], 'required'],
            [['stts_bayar'], 'string'],
            [['noorder', 'kd_jenis_prw'], 'string', 'max' => 15],
            [['noorder', 'kd_jenis_prw'], 'unique', 'targetAttribute' => ['noorder', 'kd_jenis_prw']],
            [['noorder'], 'exist', 'skipOnError' => true, 'targetClass' => PermintaanLabpa::class, 'targetAttribute' => ['noorder' => 'noorder']],
            [['kd_jenis_prw'], 'exist', 'skipOnError' => true, 'targetClass' => JnsPerawatanLab::class, 'targetAttribute' => ['kd_jenis_prw' => 'kd_jenis_prw']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'noorder' => 'Noorder',
            'kd_jenis_prw' => 'Kd Jenis Prw',
            'stts_bayar' => 'Stts Bayar',
        ];
    }

    /**
     * Gets query for [[KdJenisPrw]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrw()
    {
        return $this->hasOne(JnsPerawatanLab::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[Noorder0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoorder0()
    {
        return $this->hasOne(PermintaanLabpa::class, ['noorder' => 'noorder']);
    }
}
