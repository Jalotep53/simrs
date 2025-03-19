<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tindakan".
 *
 * @property string $tgl
 * @property int $id
 * @property int $tnd
 * @property float $jm
 * @property string $nm_pasien
 * @property string $kamar
 * @property string $diagnosa
 * @property int $jmlh
 *
 * @property Pegawai $id0
 */
class Tindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl', 'id', 'tnd', 'jm', 'nm_pasien', 'kamar', 'diagnosa', 'jmlh'], 'required'],
            [['tgl'], 'safe'],
            [['id', 'tnd', 'jmlh'], 'integer'],
            [['jm'], 'number'],
            [['nm_pasien'], 'string', 'max' => 30],
            [['kamar'], 'string', 'max' => 20],
            [['diagnosa'], 'string', 'max' => 50],
            [['tgl', 'id', 'tnd', 'nm_pasien'], 'unique', 'targetAttribute' => ['tgl', 'id', 'tnd', 'nm_pasien']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tgl' => 'Tgl',
            'id' => 'ID',
            'tnd' => 'Tnd',
            'jm' => 'Jm',
            'nm_pasien' => 'Nm Pasien',
            'kamar' => 'Kamar',
            'diagnosa' => 'Diagnosa',
            'jmlh' => 'Jmlh',
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
}
