<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "emergency_index".
 *
 * @property string $kode_emergency
 * @property string|null $nama_emergency
 * @property int|null $indek
 *
 * @property Pegawai[] $pegawais
 */
class EmergencyIndex extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emergency_index';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_emergency'], 'required'],
            [['indek'], 'integer'],
            [['kode_emergency'], 'string', 'max' => 3],
            [['nama_emergency'], 'string', 'max' => 100],
            [['kode_emergency'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_emergency' => 'Kode Emergency',
            'nama_emergency' => 'Nama Emergency',
            'indek' => 'Indek',
        ];
    }

    /**
     * Gets query for [[Pegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais()
    {
        return $this->hasMany(Pegawai::class, ['kode_emergency' => 'kode_emergency']);
    }
}
