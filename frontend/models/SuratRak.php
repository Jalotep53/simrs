<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_rak".
 *
 * @property string $kd
 * @property string $rak
 *
 * @property SuratKeluar[] $suratKeluars
 * @property SuratKeluar[] $suratKeluars0
 * @property SuratMasuk[] $suratMasuks
 */
class SuratRak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_rak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd', 'rak'], 'required'],
            [['kd'], 'string', 'max' => 5],
            [['rak'], 'string', 'max' => 50],
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
            'rak' => 'Rak',
        ];
    }

    /**
     * Gets query for [[SuratKeluars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeluars()
    {
        return $this->hasMany(SuratKeluar::class, ['kd_rak' => 'kd']);
    }

    /**
     * Gets query for [[SuratKeluars0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeluars0()
    {
        return $this->hasMany(SuratKeluar::class, ['kd_rak' => 'kd']);
    }

    /**
     * Gets query for [[SuratMasuks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratMasuks()
    {
        return $this->hasMany(SuratMasuk::class, ['kd_rak' => 'kd']);
    }
}
