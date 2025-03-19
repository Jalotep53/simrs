<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "permintaan_perbaikan_inventaris".
 *
 * @property string $no_permintaan
 * @property string|null $no_inventaris
 * @property string|null $nik
 * @property string|null $tanggal
 * @property string|null $deskripsi_kerusakan
 *
 * @property Pegawai $nik0
 * @property Inventaris $noInventaris
 * @property PerbaikanInventaris $perbaikanInventaris
 */
class PermintaanPerbaikanInventaris extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'permintaan_perbaikan_inventaris';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_permintaan'], 'required'],
            [['tanggal'], 'safe'],
            [['no_permintaan'], 'string', 'max' => 15],
            [['no_inventaris'], 'string', 'max' => 30],
            [['nik'], 'string', 'max' => 20],
            [['deskripsi_kerusakan'], 'string', 'max' => 300],
            [['no_permintaan'], 'unique'],
            [['no_inventaris'], 'exist', 'skipOnError' => true, 'targetClass' => Inventaris::class, 'targetAttribute' => ['no_inventaris' => 'no_inventaris']],
            [['nik'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nik' => 'nik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_permintaan' => 'No Permintaan',
            'no_inventaris' => 'No Inventaris',
            'nik' => 'Nik',
            'tanggal' => 'Tanggal',
            'deskripsi_kerusakan' => 'Deskripsi Kerusakan',
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

    /**
     * Gets query for [[NoInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoInventaris()
    {
        return $this->hasOne(Inventaris::class, ['no_inventaris' => 'no_inventaris']);
    }

    /**
     * Gets query for [[PerbaikanInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerbaikanInventaris()
    {
        return $this->hasOne(PerbaikanInventaris::class, ['no_permintaan' => 'no_permintaan']);
    }
}
