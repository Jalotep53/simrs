<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kategori_perawatan".
 *
 * @property string $kd_kategori
 * @property string|null $nm_kategori
 *
 * @property JnsPerawatanInap[] $jnsPerawatanInaps
 * @property JnsPerawatan[] $jnsPerawatans
 */
class KategoriPerawatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_perawatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_kategori'], 'required'],
            [['kd_kategori'], 'string', 'max' => 5],
            [['nm_kategori'], 'string', 'max' => 30],
            [['kd_kategori'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_kategori' => 'Kd Kategori',
            'nm_kategori' => 'Nm Kategori',
        ];
    }

    /**
     * Gets query for [[JnsPerawatanInaps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJnsPerawatanInaps()
    {
        return $this->hasMany(JnsPerawatanInap::class, ['kd_kategori' => 'kd_kategori']);
    }

    /**
     * Gets query for [[JnsPerawatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJnsPerawatans()
    {
        return $this->hasMany(JnsPerawatan::class, ['kd_kategori' => 'kd_kategori']);
    }
}
