<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_klasifikasi".
 *
 * @property string $kd
 * @property string $klasifikasi
 *
 * @property SuratKeluar[] $suratKeluars
 * @property SuratKeluar[] $suratKeluars0
 * @property SuratMasuk[] $suratMasuks
 * @property SuratSubKlasifikasi[] $suratSubKlasifikasis
 */
class SuratKlasifikasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_klasifikasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd', 'klasifikasi'], 'required'],
            [['kd'], 'string', 'max' => 5],
            [['klasifikasi'], 'string', 'max' => 50],
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
            'klasifikasi' => 'Klasifikasi',
        ];
    }

    /**
     * Gets query for [[SuratKeluars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeluars()
    {
        return $this->hasMany(SuratKeluar::class, ['kd_klasifikasi' => 'kd']);
    }

    /**
     * Gets query for [[SuratKeluars0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeluars0()
    {
        return $this->hasMany(SuratKeluar::class, ['kd_klasifikasi' => 'kd']);
    }

    /**
     * Gets query for [[SuratMasuks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratMasuks()
    {
        return $this->hasMany(SuratMasuk::class, ['kd_klasifikasi' => 'kd']);
    }

    /**
     * Gets query for [[SuratSubKlasifikasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratSubKlasifikasis()
    {
        return $this->hasMany(SuratSubKlasifikasi::class, ['kd_klasifikasi' => 'kd']);
    }
}
