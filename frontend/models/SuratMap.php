<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_map".
 *
 * @property string $kd
 * @property string $map
 *
 * @property SuratKeluar[] $suratKeluars
 * @property SuratKeluar[] $suratKeluars0
 * @property SuratMasuk[] $suratMasuks
 */
class SuratMap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_map';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd', 'map'], 'required'],
            [['kd'], 'string', 'max' => 5],
            [['map'], 'string', 'max' => 50],
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
            'map' => 'Map',
        ];
    }

    /**
     * Gets query for [[SuratKeluars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeluars()
    {
        return $this->hasMany(SuratKeluar::class, ['kd_map' => 'kd']);
    }

    /**
     * Gets query for [[SuratKeluars0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeluars0()
    {
        return $this->hasMany(SuratKeluar::class, ['kd_map' => 'kd']);
    }

    /**
     * Gets query for [[SuratMasuks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratMasuks()
    {
        return $this->hasMany(SuratMasuk::class, ['kd_map' => 'kd']);
    }
}
