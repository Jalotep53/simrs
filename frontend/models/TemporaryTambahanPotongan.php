<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "temporary_tambahan_potongan".
 *
 * @property string $no_rawat
 * @property string $nama_tambahan
 * @property float $biaya
 * @property string $status
 */
class TemporaryTambahanPotongan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'temporary_tambahan_potongan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'nama_tambahan', 'biaya', 'status'], 'required'],
            [['biaya'], 'number'],
            [['no_rawat'], 'string', 'max' => 17],
            [['nama_tambahan'], 'string', 'max' => 100],
            [['status'], 'string', 'max' => 30],
            [['no_rawat', 'nama_tambahan', 'status'], 'unique', 'targetAttribute' => ['no_rawat', 'nama_tambahan', 'status']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'nama_tambahan' => 'Nama Tambahan',
            'biaya' => 'Biaya',
            'status' => 'Status',
        ];
    }
}
