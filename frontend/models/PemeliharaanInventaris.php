<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pemeliharaan_inventaris".
 *
 * @property string $no_inventaris
 * @property string $tanggal
 * @property string $uraian_kegiatan
 * @property string $nip
 * @property string $pelaksana
 * @property float $biaya
 * @property string $jenis_pemeliharaan
 *
 * @property Petugas $nip0
 * @property Inventaris $noInventaris
 */
class PemeliharaanInventaris extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemeliharaan_inventaris';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_inventaris', 'tanggal', 'uraian_kegiatan', 'nip', 'pelaksana', 'biaya', 'jenis_pemeliharaan'], 'required'],
            [['tanggal'], 'safe'],
            [['pelaksana', 'jenis_pemeliharaan'], 'string'],
            [['biaya'], 'number'],
            [['no_inventaris'], 'string', 'max' => 30],
            [['uraian_kegiatan'], 'string', 'max' => 255],
            [['nip'], 'string', 'max' => 20],
            [['no_inventaris', 'tanggal'], 'unique', 'targetAttribute' => ['no_inventaris', 'tanggal']],
            [['no_inventaris'], 'exist', 'skipOnError' => true, 'targetClass' => Inventaris::class, 'targetAttribute' => ['no_inventaris' => 'no_inventaris']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_inventaris' => 'No Inventaris',
            'tanggal' => 'Tanggal',
            'uraian_kegiatan' => 'Uraian Kegiatan',
            'nip' => 'Nip',
            'pelaksana' => 'Pelaksana',
            'biaya' => 'Biaya',
            'jenis_pemeliharaan' => 'Jenis Pemeliharaan',
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
     * Gets query for [[NoInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoInventaris()
    {
        return $this->hasOne(Inventaris::class, ['no_inventaris' => 'no_inventaris']);
    }
}
