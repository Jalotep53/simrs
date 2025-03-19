<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "riwayat_seminar".
 *
 * @property int $id
 * @property string $tingkat
 * @property string $jenis
 * @property string $nama_seminar
 * @property string $peranan
 * @property string $mulai
 * @property string $selesai
 * @property string $penyelengara
 * @property string $tempat
 * @property string $berkas
 *
 * @property Pegawai $id0
 */
class RiwayatSeminar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_seminar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tingkat', 'jenis', 'nama_seminar', 'peranan', 'mulai', 'selesai', 'penyelengara', 'tempat', 'berkas'], 'required'],
            [['id'], 'integer'],
            [['tingkat', 'jenis'], 'string'],
            [['mulai', 'selesai'], 'safe'],
            [['nama_seminar', 'penyelengara', 'tempat'], 'string', 'max' => 50],
            [['peranan'], 'string', 'max' => 40],
            [['berkas'], 'string', 'max' => 500],
            [['id', 'nama_seminar', 'mulai'], 'unique', 'targetAttribute' => ['id', 'nama_seminar', 'mulai']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tingkat' => 'Tingkat',
            'jenis' => 'Jenis',
            'nama_seminar' => 'Nama Seminar',
            'peranan' => 'Peranan',
            'mulai' => 'Mulai',
            'selesai' => 'Selesai',
            'penyelengara' => 'Penyelengara',
            'tempat' => 'Tempat',
            'berkas' => 'Berkas',
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
