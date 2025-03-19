<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_masalah_mpp".
 *
 * @property string $kode_masalah
 * @property string|null $nama_masalah
 */
class MasterMasalahMpp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_masalah_mpp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_masalah'], 'required'],
            [['kode_masalah'], 'string', 'max' => 3],
            [['nama_masalah'], 'string', 'max' => 100],
            [['kode_masalah'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_masalah' => 'Kode Masalah',
            'nama_masalah' => 'Nama Masalah',
        ];
    }
}
