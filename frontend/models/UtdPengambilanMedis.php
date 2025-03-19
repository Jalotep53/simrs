<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "utd_pengambilan_medis".
 *
 * @property string $kode_brng
 * @property float|null $jml
 * @property float|null $hargabeli
 * @property float|null $total
 * @property string $kd_bangsal_dr
 * @property string $tanggal
 * @property string|null $keterangan
 * @property string $no_batch
 * @property string $no_faktur
 *
 * @property Bangsal $kdBangsalDr
 * @property Databarang $kodeBrng
 */
class UtdPengambilanMedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'utd_pengambilan_medis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'tanggal', 'no_batch', 'no_faktur'], 'required'],
            [['jml', 'hargabeli', 'total'], 'number'],
            [['tanggal'], 'safe'],
            [['kode_brng'], 'string', 'max' => 15],
            [['kd_bangsal_dr'], 'string', 'max' => 5],
            [['keterangan'], 'string', 'max' => 60],
            [['no_batch', 'no_faktur'], 'string', 'max' => 20],
            [['kode_brng', 'tanggal', 'no_batch', 'no_faktur'], 'unique', 'targetAttribute' => ['kode_brng', 'tanggal', 'no_batch', 'no_faktur']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['kd_bangsal_dr'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal_dr' => 'kd_bangsal']],
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
            'hargabeli' => 'Hargabeli',
            'total' => 'Total',
            'kd_bangsal_dr' => 'Kd Bangsal Dr',
            'tanggal' => 'Tanggal',
            'keterangan' => 'Keterangan',
            'no_batch' => 'No Batch',
            'no_faktur' => 'No Faktur',
        ];
    }

    /**
     * Gets query for [[KdBangsalDr]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdBangsalDr()
    {
        return $this->hasOne(Bangsal::class, ['kd_bangsal' => 'kd_bangsal_dr']);
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
