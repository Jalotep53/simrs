<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pengumuman_epasien".
 *
 * @property string $nik
 * @property string $tanggal
 * @property string|null $pengumuman
 *
 * @property Pegawai $nik0
 */
class PengumumanEpasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengumuman_epasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nik', 'tanggal'], 'required'],
            [['tanggal'], 'safe'],
            [['nik'], 'string', 'max' => 20],
            [['pengumuman'], 'string', 'max' => 150],
            [['nik', 'tanggal'], 'unique', 'targetAttribute' => ['nik', 'tanggal']],
            [['nik'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nik' => 'nik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nik' => 'Nik',
            'tanggal' => 'Tanggal',
            'pengumuman' => 'Pengumuman',
        ];
    }

    /**
     * Gets query for [[Nik0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNik0()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nik']);
    }
}
