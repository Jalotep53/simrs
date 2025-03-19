<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "riwayat_pendidikan".
 *
 * @property int $id
 * @property string $pendidikan
 * @property string $sekolah
 * @property string $jurusan
 * @property string $thn_lulus
 * @property string $kepala
 * @property string $pendanaan
 * @property string $keterangan
 * @property string $status
 * @property string $berkas
 *
 * @property Pegawai $id0
 */
class RiwayatPendidikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_pendidikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'pendidikan', 'sekolah', 'jurusan', 'thn_lulus', 'kepala', 'pendanaan', 'keterangan', 'status', 'berkas'], 'required'],
            [['id'], 'integer'],
            [['pendidikan', 'pendanaan'], 'string'],
            [['thn_lulus'], 'safe'],
            [['sekolah', 'kepala', 'keterangan'], 'string', 'max' => 50],
            [['jurusan', 'status'], 'string', 'max' => 40],
            [['berkas'], 'string', 'max' => 500],
            [['id', 'pendidikan', 'sekolah'], 'unique', 'targetAttribute' => ['id', 'pendidikan', 'sekolah']],
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
            'pendidikan' => 'Pendidikan',
            'sekolah' => 'Sekolah',
            'jurusan' => 'Jurusan',
            'thn_lulus' => 'Thn Lulus',
            'kepala' => 'Kepala',
            'pendanaan' => 'Pendanaan',
            'keterangan' => 'Keterangan',
            'status' => 'Status',
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
