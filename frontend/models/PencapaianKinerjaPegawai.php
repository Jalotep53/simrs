<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pencapaian_kinerja_pegawai".
 *
 * @property int $id
 * @property string $kode_pencapaian
 * @property string $tahun
 * @property int $bulan
 * @property string|null $keterangan
 *
 * @property Pegawai $id0
 * @property PencapaianKinerja $kodePencapaian
 */
class PencapaianKinerjaPegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pencapaian_kinerja_pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kode_pencapaian', 'tahun', 'bulan'], 'required'],
            [['id', 'bulan'], 'integer'],
            [['tahun'], 'safe'],
            [['kode_pencapaian'], 'string', 'max' => 3],
            [['keterangan'], 'string', 'max' => 150],
            [['id', 'kode_pencapaian', 'tahun', 'bulan'], 'unique', 'targetAttribute' => ['id', 'kode_pencapaian', 'tahun', 'bulan']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['id' => 'id']],
            [['kode_pencapaian'], 'exist', 'skipOnError' => true, 'targetClass' => PencapaianKinerja::class, 'targetAttribute' => ['kode_pencapaian' => 'kode_pencapaian']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_pencapaian' => 'Kode Pencapaian',
            'tahun' => 'Tahun',
            'bulan' => 'Bulan',
            'keterangan' => 'Keterangan',
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
     * Gets query for [[KodePencapaian]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodePencapaian()
    {
        return $this->hasOne(PencapaianKinerja::class, ['kode_pencapaian' => 'kode_pencapaian']);
    }
}
