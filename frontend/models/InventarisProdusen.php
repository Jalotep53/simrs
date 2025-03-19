<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inventaris_produsen".
 *
 * @property string $kode_produsen
 * @property string|null $nama_produsen
 * @property string|null $alamat_produsen
 * @property string|null $no_telp
 * @property string|null $email
 * @property string|null $website_produsen
 *
 * @property InventarisBarang[] $inventarisBarangs
 */
class InventarisProdusen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventaris_produsen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_produsen'], 'required'],
            [['kode_produsen'], 'string', 'max' => 10],
            [['nama_produsen'], 'string', 'max' => 40],
            [['alamat_produsen'], 'string', 'max' => 70],
            [['no_telp'], 'string', 'max' => 13],
            [['email'], 'string', 'max' => 25],
            [['website_produsen'], 'string', 'max' => 30],
            [['kode_produsen'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_produsen' => 'Kode Produsen',
            'nama_produsen' => 'Nama Produsen',
            'alamat_produsen' => 'Alamat Produsen',
            'no_telp' => 'No Telp',
            'email' => 'Email',
            'website_produsen' => 'Website Produsen',
        ];
    }

    /**
     * Gets query for [[InventarisBarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisBarangs()
    {
        return $this->hasMany(InventarisBarang::class, ['kode_produsen' => 'kode_produsen']);
    }
}
