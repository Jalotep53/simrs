<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "riwayat_penelitian".
 *
 * @property int $id
 * @property string $jenis_penelitian
 * @property string $peranan
 * @property string $judul_penelitian
 * @property string $judul_jurnal
 * @property string $tahun
 * @property float|null $biaya_penelitian
 * @property string $asal_dana
 * @property string $berkas
 *
 * @property Pegawai $id0
 */
class RiwayatPenelitian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_penelitian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'jenis_penelitian', 'peranan', 'judul_penelitian', 'judul_jurnal', 'tahun', 'asal_dana', 'berkas'], 'required'],
            [['id'], 'integer'],
            [['tahun'], 'safe'],
            [['biaya_penelitian'], 'number'],
            [['jenis_penelitian', 'peranan', 'asal_dana'], 'string', 'max' => 30],
            [['judul_penelitian', 'judul_jurnal'], 'string', 'max' => 60],
            [['berkas'], 'string', 'max' => 500],
            [['id', 'judul_penelitian', 'tahun'], 'unique', 'targetAttribute' => ['id', 'judul_penelitian', 'tahun']],
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
            'jenis_penelitian' => 'Jenis Penelitian',
            'peranan' => 'Peranan',
            'judul_penelitian' => 'Judul Penelitian',
            'judul_jurnal' => 'Judul Jurnal',
            'tahun' => 'Tahun',
            'biaya_penelitian' => 'Biaya Penelitian',
            'asal_dana' => 'Asal Dana',
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
