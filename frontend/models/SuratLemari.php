<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_lemari".
 *
 * @property string $kd
 * @property string $lemari
 *
 * @property SuratKeluar[] $suratKeluars
 * @property SuratKeluar[] $suratKeluars0
 * @property SuratMasuk[] $suratMasuks
 */
class SuratLemari extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_lemari';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd', 'lemari'], 'required'],
            [['kd'], 'string', 'max' => 5],
            [['lemari'], 'string', 'max' => 50],
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
            'lemari' => 'Lemari',
        ];
    }

    /**
     * Gets query for [[SuratKeluars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeluars()
    {
        return $this->hasMany(SuratKeluar::class, ['kd_lemari' => 'kd']);
    }

    /**
     * Gets query for [[SuratKeluars0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeluars0()
    {
        return $this->hasMany(SuratKeluar::class, ['kd_lemari' => 'kd']);
    }

    /**
     * Gets query for [[SuratMasuks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratMasuks()
    {
        return $this->hasMany(SuratMasuk::class, ['kd_lemari' => 'kd']);
    }
}
