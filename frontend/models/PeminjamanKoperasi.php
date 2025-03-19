<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "peminjaman_koperasi".
 *
 * @property int $id
 * @property string $tanggal
 * @property float $pinjaman
 * @property int $banyak_angsur
 * @property float $pokok
 * @property float $jasa
 * @property string $status
 *
 * @property Pegawai $id0
 */
class PeminjamanKoperasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peminjaman_koperasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tanggal', 'pinjaman', 'banyak_angsur', 'pokok', 'jasa', 'status'], 'required'],
            [['id', 'banyak_angsur'], 'integer'],
            [['tanggal'], 'safe'],
            [['pinjaman', 'pokok', 'jasa'], 'number'],
            [['status'], 'string'],
            [['id', 'tanggal'], 'unique', 'targetAttribute' => ['id', 'tanggal']],
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
            'tanggal' => 'Tanggal',
            'pinjaman' => 'Pinjaman',
            'banyak_angsur' => 'Banyak Angsur',
            'pokok' => 'Pokok',
            'jasa' => 'Jasa',
            'status' => 'Status',
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
