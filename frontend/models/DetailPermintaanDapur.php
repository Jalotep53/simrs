<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detail_permintaan_dapur".
 *
 * @property string|null $no_permintaan
 * @property string|null $kode_brng
 * @property string|null $kode_sat
 * @property float|null $jumlah
 * @property string|null $keterangan
 *
 * @property Dapurbarang $kodeBrng
 * @property Kodesatuan $kodeSat
 * @property PermintaanDapur $noPermintaan
 */
class DetailPermintaanDapur extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_permintaan_dapur';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jumlah'], 'number'],
            [['no_permintaan'], 'string', 'max' => 20],
            [['kode_brng'], 'string', 'max' => 15],
            [['kode_sat'], 'string', 'max' => 4],
            [['keterangan'], 'string', 'max' => 150],
            [['no_permintaan'], 'exist', 'skipOnError' => true, 'targetClass' => PermintaanDapur::class, 'targetAttribute' => ['no_permintaan' => 'no_permintaan']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Dapurbarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['kode_sat'], 'exist', 'skipOnError' => true, 'targetClass' => Kodesatuan::class, 'targetAttribute' => ['kode_sat' => 'kode_sat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_permintaan' => 'No Permintaan',
            'kode_brng' => 'Kode Brng',
            'kode_sat' => 'Kode Sat',
            'jumlah' => 'Jumlah',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[KodeBrng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrng()
    {
        return $this->hasOne(Dapurbarang::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[KodeSat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeSat()
    {
        return $this->hasOne(Kodesatuan::class, ['kode_sat' => 'kode_sat']);
    }

    /**
     * Gets query for [[NoPermintaan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoPermintaan()
    {
        return $this->hasOne(PermintaanDapur::class, ['no_permintaan' => 'no_permintaan']);
    }
}
