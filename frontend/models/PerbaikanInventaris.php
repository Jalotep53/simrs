<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "perbaikan_inventaris".
 *
 * @property string $no_permintaan
 * @property string $tanggal
 * @property string $uraian_kegiatan
 * @property string $nip
 * @property string $pelaksana
 * @property float $biaya
 * @property string $keterangan
 * @property string $status
 *
 * @property Petugas $nip0
 * @property PermintaanPerbaikanInventaris $noPermintaan
 */
class PerbaikanInventaris extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perbaikan_inventaris';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_permintaan', 'tanggal', 'uraian_kegiatan', 'nip', 'pelaksana', 'biaya', 'keterangan', 'status'], 'required'],
            [['tanggal'], 'safe'],
            [['pelaksana', 'status'], 'string'],
            [['biaya'], 'number'],
            [['no_permintaan'], 'string', 'max' => 15],
            [['uraian_kegiatan', 'keterangan'], 'string', 'max' => 255],
            [['nip'], 'string', 'max' => 20],
            [['no_permintaan'], 'unique'],
            [['no_permintaan'], 'exist', 'skipOnError' => true, 'targetClass' => PermintaanPerbaikanInventaris::class, 'targetAttribute' => ['no_permintaan' => 'no_permintaan']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_permintaan' => 'No Permintaan',
            'tanggal' => 'Tanggal',
            'uraian_kegiatan' => 'Uraian Kegiatan',
            'nip' => 'Nip',
            'pelaksana' => 'Pelaksana',
            'biaya' => 'Biaya',
            'keterangan' => 'Keterangan',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[NoPermintaan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoPermintaan()
    {
        return $this->hasOne(PermintaanPerbaikanInventaris::class, ['no_permintaan' => 'no_permintaan']);
    }
}
