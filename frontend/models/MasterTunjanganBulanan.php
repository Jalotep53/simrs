<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_tunjangan_bulanan".
 *
 * @property int $id
 * @property string $nama
 * @property float $tnj
 *
 * @property Pegawai[] $ids
 * @property PnmTnjBulanan[] $pnmTnjBulanans
 */
class MasterTunjanganBulanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_tunjangan_bulanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'tnj'], 'required'],
            [['tnj'], 'number'],
            [['nama'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'tnj' => 'Tnj',
        ];
    }

    /**
     * Gets query for [[Ids]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIds()
    {
        return $this->hasMany(Pegawai::class, ['id' => 'id'])->viaTable('pnm_tnj_bulanan', ['id_tnj' => 'id']);
    }

    /**
     * Gets query for [[PnmTnjBulanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPnmTnjBulanans()
    {
        return $this->hasMany(PnmTnjBulanan::class, ['id_tnj' => 'id']);
    }
}
