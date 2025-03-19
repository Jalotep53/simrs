<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_otomatis_tindakan_ralan_petugas".
 *
 * @property string $kd_jenis_prw
 * @property string $kd_pj
 *
 * @property JnsPerawatan $kdJenisPrw
 * @property Penjab $kdPj
 */
class SetOtomatisTindakanRalanPetugas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_otomatis_tindakan_ralan_petugas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis_prw', 'kd_pj'], 'required'],
            [['kd_jenis_prw'], 'string', 'max' => 15],
            [['kd_pj'], 'string', 'max' => 3],
            [['kd_jenis_prw', 'kd_pj'], 'unique', 'targetAttribute' => ['kd_jenis_prw', 'kd_pj']],
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
            'kd_jenis_prw' => 'Kd Jenis Prw',
            'kd_pj' => 'Kd Pj',
        ];
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
