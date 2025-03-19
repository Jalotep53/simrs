<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "satu_sehat_servicerequest_radiologi".
 *
 * @property string $noorder
 * @property string $kd_jenis_prw
 * @property string|null $id_servicerequest
 *
 * @property JnsPerawatanRadiologi $kdJenisPrw
 * @property PermintaanRadiologi $noorder0
 */
class SatuSehatServicerequestRadiologi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satu_sehat_servicerequest_radiologi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['noorder', 'kd_jenis_prw'], 'required'],
            [['noorder', 'kd_jenis_prw'], 'string', 'max' => 15],
            [['id_servicerequest'], 'string', 'max' => 40],
            [['noorder', 'kd_jenis_prw'], 'unique', 'targetAttribute' => ['noorder', 'kd_jenis_prw']],
            [['noorder'], 'exist', 'skipOnError' => true, 'targetClass' => PermintaanRadiologi::class, 'targetAttribute' => ['noorder' => 'noorder']],
            [['kd_jenis_prw'], 'exist', 'skipOnError' => true, 'targetClass' => JnsPerawatanRadiologi::class, 'targetAttribute' => ['kd_jenis_prw' => 'kd_jenis_prw']],
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
            'id_servicerequest' => 'Id Servicerequest',
        ];
    }

    /**
     * Gets query for [[KdJenisPrw]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrw()
    {
        return $this->hasOne(JnsPerawatanRadiologi::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
    }

    /**
     * Gets query for [[Noorder0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoorder0()
    {
        return $this->hasOne(PermintaanRadiologi::class, ['noorder' => 'noorder']);
    }
}
