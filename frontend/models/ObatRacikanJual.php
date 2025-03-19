<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "obat_racikan_jual".
 *
 * @property string $nota_jual
 * @property string $no_racik
 * @property string $nama_racik
 * @property string $kd_racik
 * @property int $jml_dr
 * @property string $aturan_pakai
 * @property string $keterangan
 *
 * @property MetodeRacik $kdRacik
 * @property Penjualan $notaJual
 */
class ObatRacikanJual extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat_racikan_jual';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nota_jual', 'no_racik', 'nama_racik', 'kd_racik', 'jml_dr', 'aturan_pakai', 'keterangan'], 'required'],
            [['jml_dr'], 'integer'],
            [['nota_jual'], 'string', 'max' => 20],
            [['no_racik'], 'string', 'max' => 2],
            [['nama_racik'], 'string', 'max' => 100],
            [['kd_racik'], 'string', 'max' => 3],
            [['aturan_pakai'], 'string', 'max' => 150],
            [['keterangan'], 'string', 'max' => 50],
            [['nota_jual', 'no_racik'], 'unique', 'targetAttribute' => ['nota_jual', 'no_racik']],
            [['nota_jual'], 'exist', 'skipOnError' => true, 'targetClass' => Penjualan::class, 'targetAttribute' => ['nota_jual' => 'nota_jual']],
            [['kd_racik'], 'exist', 'skipOnError' => true, 'targetClass' => MetodeRacik::class, 'targetAttribute' => ['kd_racik' => 'kd_racik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nota_jual' => 'Nota Jual',
            'no_racik' => 'No Racik',
            'nama_racik' => 'Nama Racik',
            'kd_racik' => 'Kd Racik',
            'jml_dr' => 'Jml Dr',
            'aturan_pakai' => 'Aturan Pakai',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[KdRacik]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRacik()
    {
        return $this->hasOne(MetodeRacik::class, ['kd_racik' => 'kd_racik']);
    }

    /**
     * Gets query for [[NotaJual]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotaJual()
    {
        return $this->hasOne(Penjualan::class, ['nota_jual' => 'nota_jual']);
    }
}
