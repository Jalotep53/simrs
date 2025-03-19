<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_otomatis_tindakan_ralan".
 *
 * @property string $kd_dokter
 * @property string $kd_jenis_prw
 * @property string $kd_pj
 *
 * @property Dokter $kdDokter
 * @property JnsPerawatan $kdJenisPrw
 * @property Penjab $kdPj
 */
class SetOtomatisTindakanRalan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_otomatis_tindakan_ralan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_dokter', 'kd_jenis_prw', 'kd_pj'], 'required'],
            [['kd_dokter'], 'string', 'max' => 20],
            [['kd_jenis_prw'], 'string', 'max' => 15],
            [['kd_pj'], 'string', 'max' => 3],
            [['kd_dokter', 'kd_jenis_prw', 'kd_pj'], 'unique', 'targetAttribute' => ['kd_dokter', 'kd_jenis_prw', 'kd_pj']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
            [['kd_jenis_prw'], 'exist', 'skipOnError' => true, 'targetClass' => JnsPerawatan::class, 'targetAttribute' => ['kd_jenis_prw' => 'kd_jenis_prw']],
            [['kd_pj'], 'exist', 'skipOnError' => true, 'targetClass' => Penjab::class, 'targetAttribute' => ['kd_pj' => 'kd_pj']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_dokter' => 'Kd Dokter',
            'kd_jenis_prw' => 'Kd Jenis Prw',
            'kd_pj' => 'Kd Pj',
        ];
    }

    /**
     * Gets query for [[KdDokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokter()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[KdJenisPrw]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrw()
    {
        return $this->hasOne(JnsPerawatan::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[KdPj]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPj()
    {
        return $this->hasOne(Penjab::class, ['kd_pj' => 'kd_pj']);
    }
}
