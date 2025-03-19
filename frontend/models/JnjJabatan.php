<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jnj_jabatan".
 *
 * @property string $kode
 * @property string $nama
 * @property float $tnj
 * @property int $indek
 *
 * @property Pegawai[] $pegawais
 */
class JnjJabatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jnj_jabatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'nama', 'tnj', 'indek'], 'required'],
            [['tnj'], 'number'],
            [['indek'], 'integer'],
            [['kode'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 50],
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
            'tnj' => 'Tnj',
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
        return $this->hasMany(Pegawai::class, ['jnj_jabatan' => 'kode']);
    }
}
