<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "beri_obat_operasi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kd_obat
 * @property float $hargasatuan
 * @property float $jumlah
 *
 * @property ObatbhpOk $kdObat
 * @property RegPeriksa $noRawat
 */
class BeriObatOperasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'beri_obat_operasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_obat', 'hargasatuan', 'jumlah'], 'required'],
            [['tanggal'], 'safe'],
            [['hargasatuan', 'jumlah'], 'number'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_obat'], 'string', 'max' => 15],
            [['kd_obat'], 'exist', 'skipOnError' => true, 'targetClass' => ObatbhpOk::class, 'targetAttribute' => ['kd_obat' => 'kd_obat']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tanggal' => 'Tanggal',
            'kd_obat' => 'Kd Obat',
            'hargasatuan' => 'Hargasatuan',
            'jumlah' => 'Jumlah',
        ];
    }

    /**
     * Gets query for [[KdObat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdObat()
    {
        return $this->hasOne(ObatbhpOk::class, ['kd_obat' => 'kd_obat']);
    }

    /**
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
