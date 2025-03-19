<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "utd_komponen_darah".
 *
 * @property string $kode
 * @property string|null $nama
 * @property int|null $lama
 * @property float|null $jasa_sarana
 * @property float|null $paket_bhp
 * @property float|null $kso
 * @property float|null $manajemen
 * @property float|null $total
 * @property float|null $pembatalan
 *
 * @property UtdStokDarah[] $utdStokDarahs
 */
class UtdKomponenDarah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'utd_komponen_darah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode'], 'required'],
            [['lama'], 'integer'],
            [['jasa_sarana', 'paket_bhp', 'kso', 'manajemen', 'total', 'pembatalan'], 'number'],
            [['kode'], 'string', 'max' => 5],
            [['nama'], 'string', 'max' => 70],
            [['kode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'nama' => 'Nama',
            'lama' => 'Lama',
            'jasa_sarana' => 'Jasa Sarana',
            'paket_bhp' => 'Paket Bhp',
            'kso' => 'Kso',
            'manajemen' => 'Manajemen',
            'total' => 'Total',
            'pembatalan' => 'Pembatalan',
        ];
    }

    /**
     * Gets query for [[UtdStokDarahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtdStokDarahs()
    {
        return $this->hasMany(UtdStokDarah::class, ['kode_komponen' => 'kode']);
    }
}
