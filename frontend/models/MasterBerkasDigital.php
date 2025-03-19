<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_berkas_digital".
 *
 * @property string $kode
 * @property string|null $nama
 *
 * @property BerkasDigitalPerawatan[] $berkasDigitalPerawatans
 */
class MasterBerkasDigital extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_berkas_digital';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode'], 'required'],
            [['kode'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 100],
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
        ];
    }

    /**
     * Gets query for [[BerkasDigitalPerawatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBerkasDigitalPerawatans()
    {
        return $this->hasMany(BerkasDigitalPerawatan::class, ['kode' => 'kode']);
    }
}
