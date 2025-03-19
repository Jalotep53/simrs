<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_alamat_pasien".
 *
 * @property string|null $kelurahan
 * @property string|null $kecamatan
 * @property string|null $kabupaten
 * @property string $propinsi
 */
class SetAlamatPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_alamat_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kelurahan', 'kecamatan', 'kabupaten', 'propinsi'], 'string'],
            [['propinsi'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kelurahan' => 'Kelurahan',
            'kecamatan' => 'Kecamatan',
            'kabupaten' => 'Kabupaten',
            'propinsi' => 'Propinsi',
        ];
    }
}
