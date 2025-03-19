<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "riwayat_penghargaan".
 *
 * @property int $id
 * @property string $jenis
 * @property string $nama_penghargaan
 * @property string $tanggal
 * @property string $instansi
 * @property string $pejabat_pemberi
 * @property string|null $berkas
 *
 * @property Pegawai $id0
 */
class RiwayatPenghargaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_penghargaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'jenis', 'nama_penghargaan', 'tanggal', 'instansi', 'pejabat_pemberi'], 'required'],
            [['id'], 'integer'],
            [['tanggal'], 'safe'],
            [['jenis'], 'string', 'max' => 30],
            [['nama_penghargaan'], 'string', 'max' => 60],
            [['instansi', 'pejabat_pemberi'], 'string', 'max' => 40],
            [['berkas'], 'string', 'max' => 500],
            [['id', 'nama_penghargaan', 'tanggal'], 'unique', 'targetAttribute' => ['id', 'nama_penghargaan', 'tanggal']],
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
            'jenis' => 'Jenis',
            'nama_penghargaan' => 'Nama Penghargaan',
            'tanggal' => 'Tanggal',
            'instansi' => 'Instansi',
            'pejabat_pemberi' => 'Pejabat Pemberi',
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
