<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pnm_tnj_harian".
 *
 * @property int $id
 * @property int $id_tnj
 *
 * @property Pegawai $id0
 * @property MasterTunjanganHarian $tnj
 */
class PnmTnjHarian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pnm_tnj_harian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_tnj'], 'required'],
            [['id', 'id_tnj'], 'integer'],
            [['id', 'id_tnj'], 'unique', 'targetAttribute' => ['id', 'id_tnj']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['id' => 'id']],
            [['id_tnj'], 'exist', 'skipOnError' => true, 'targetClass' => MasterTunjanganHarian::class, 'targetAttribute' => ['id_tnj' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_tnj' => 'Id Tnj',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Pegawai::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[Tnj]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTnj()
    {
        return $this->hasOne(MasterTunjanganHarian::class, ['id' => 'id_tnj']);
    }
}
