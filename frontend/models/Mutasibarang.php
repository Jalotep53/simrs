<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mutasibarang".
 *
 * @property string $kode_brng
 * @property float $jml
 * @property float $harga
 * @property string $kd_bangsaldari
 * @property string $kd_bangsalke
 * @property string $tanggal
 * @property string $keterangan
 * @property string $no_batch
 * @property string $no_faktur
 *
 * @property Bangsal $kdBangsaldari
 * @property Bangsal $kdBangsalke
 * @property Databarang $kodeBrng
 */
class Mutasibarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mutasibarang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'jml', 'harga', 'kd_bangsaldari', 'kd_bangsalke', 'tanggal', 'keterangan', 'no_batch', 'no_faktur'], 'required'],
            [['jml', 'harga'], 'number'],
            [['tanggal'], 'safe'],
            [['kode_brng'], 'string', 'max' => 15],
            [['kd_bangsaldari', 'kd_bangsalke'], 'string', 'max' => 5],
            [['keterangan'], 'string', 'max' => 60],
            [['no_batch', 'no_faktur'], 'string', 'max' => 20],
            [['kode_brng', 'kd_bangsaldari', 'kd_bangsalke', 'tanggal', 'no_batch', 'no_faktur'], 'unique', 'targetAttribute' => ['kode_brng', 'kd_bangsaldari', 'kd_bangsalke', 'tanggal', 'no_batch', 'no_faktur']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['kd_bangsaldari'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsaldari' => 'kd_bangsal']],
            [['kd_bangsalke'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsalke' => 'kd_bangsal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_brng' => 'Kode Brng',
            'jml' => 'Jml',
            'harga' => 'Harga',
            'kd_bangsaldari' => 'Kd Bangsaldari',
            'kd_bangsalke' => 'Kd Bangsalke',
            'tanggal' => 'Tanggal',
            'keterangan' => 'Keterangan',
            'no_batch' => 'No Batch',
            'no_faktur' => 'No Faktur',
        ];
    }

    /**
     * Gets query for [[KdBangsaldari]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdBangsaldari()
    {
        return $this->hasOne(Bangsal::class, ['kd_bangsal' => 'kd_bangsaldari']);
    }

    /**
     * Gets query for [[KdBangsalke]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdBangsalke()
    {
        return $this->hasOne(Bangsal::class, ['kd_bangsal' => 'kd_bangsalke']);
    }

    /**
     * Gets query for [[KodeBrng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrng()
    {
        return $this->hasOne(Databarang::class, ['kode_brng' => 'kode_brng']);
    }
}
