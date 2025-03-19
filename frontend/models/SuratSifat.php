<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_sifat".
 *
 * @property string $kd
 * @property string $sifat
 *
 * @property SuratKeluar[] $suratKeluars
 * @property SuratKeluar[] $suratKeluars0
 * @property SuratMasuk[] $suratMasuks
 */
class SuratSifat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_sifat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd', 'sifat'], 'required'],
            [['kd'], 'string', 'max' => 5],
            [['sifat'], 'string', 'max' => 50],
            [['kd'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd' => 'Kd',
            'sifat' => 'Sifat',
        ];
    }

    /**
     * Gets query for [[SuratKeluars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeluars()
    {
        return $this->hasMany(SuratKeluar::class, ['kd_sifat' => 'kd']);
    }

    /**
     * Gets query for [[SuratKeluars0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeluars0()
    {
        return $this->hasMany(SuratKeluar::class, ['kd_sifat' => 'kd']);
    }

    /**
     * Gets query for [[SuratMasuks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratMasuks()
    {
        return $this->hasMany(SuratMasuk::class, ['kd_sifat' => 'kd']);
    }
}
