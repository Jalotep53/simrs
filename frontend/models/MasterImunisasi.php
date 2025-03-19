<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_imunisasi".
 *
 * @property string $kode_imunisasi
 * @property string|null $nama_imunisasi
 *
 * @property RiwayatImunisasi[] $riwayatImunisasis
 */
class MasterImunisasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_imunisasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_imunisasi'], 'required'],
            [['kode_imunisasi'], 'string', 'max' => 3],
            [['nama_imunisasi'], 'string', 'max' => 100],
            [['kode_imunisasi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_imunisasi' => 'Kode Imunisasi',
            'nama_imunisasi' => 'Nama Imunisasi',
        ];
    }

    /**
     * Gets query for [[RiwayatImunisasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatImunisasis()
    {
        return $this->hasMany(RiwayatImunisasi::class, ['kode_imunisasi' => 'kode_imunisasi']);
    }
}
