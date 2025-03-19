<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kategori_penyakit".
 *
 * @property string $kd_ktg
 * @property string|null $nm_kategori
 * @property string|null $ciri_umum
 *
 * @property Penyakit[] $penyakits
 */
class KategoriPenyakit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_penyakit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_ktg'], 'required'],
            [['kd_ktg'], 'string', 'max' => 8],
            [['nm_kategori'], 'string', 'max' => 30],
            [['ciri_umum'], 'string', 'max' => 200],
            [['kd_ktg'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_ktg' => 'Kd Ktg',
            'nm_kategori' => 'Nm Kategori',
            'ciri_umum' => 'Ciri Umum',
        ];
    }

    /**
     * Gets query for [[Penyakits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenyakits()
    {
        return $this->hasMany(Penyakit::class, ['kd_ktg' => 'kd_ktg']);
    }
}
