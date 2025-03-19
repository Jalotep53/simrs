<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "zis_keterangan_elektronik_penerima_dankes".
 *
 * @property string $kode
 * @property string|null $keterangan
 */
class ZisKeteranganElektronikPenerimaDankes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zis_keterangan_elektronik_penerima_dankes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode'], 'required'],
            [['kode'], 'string', 'max' => 3],
            [['keterangan'], 'string', 'max' => 40],
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
            'keterangan' => 'Keterangan',
        ];
    }
}
