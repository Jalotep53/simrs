<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kelompok_jabatan".
 *
 * @property string $kode_kelompok
 * @property string|null $nama_kelompok
 * @property int|null $indek
 *
 * @property Pegawai[] $pegawais
 */
class KelompokJabatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kelompok_jabatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_kelompok'], 'required'],
            [['indek'], 'integer'],
            [['kode_kelompok'], 'string', 'max' => 3],
            [['nama_kelompok'], 'string', 'max' => 100],
            [['kode_kelompok'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_kelompok' => 'Kode Kelompok',
            'nama_kelompok' => 'Nama Kelompok',
            'indek' => 'Indek',
        ];
    }

    /**
     * Gets query for [[Pegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais()
    {
        return $this->hasMany(Pegawai::class, ['kode_kelompok' => 'kode_kelompok']);
    }
}
