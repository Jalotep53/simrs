<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_indeks".
 *
 * @property string $kd
 * @property string $indeks
 *
 * @property SuratKeluarDisposisi[] $suratKeluarDisposisis
 * @property SuratKeluarKendali[] $suratKeluarKendalis
 * @property SuratMasukDisposisi[] $suratMasukDisposisis
 * @property SuratMasukKendali[] $suratMasukKendalis
 */
class SuratIndeks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_indeks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd', 'indeks'], 'required'],
            [['kd'], 'string', 'max' => 5],
            [['indeks'], 'string', 'max' => 50],
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
            'indeks' => 'Indeks',
        ];
    }

    /**
     * Gets query for [[SuratKeluarDisposisis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeluarDisposisis()
    {
        return $this->hasMany(SuratKeluarDisposisi::class, ['kd_indeks' => 'kd']);
    }

    /**
     * Gets query for [[SuratKeluarKendalis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeluarKendalis()
    {
        return $this->hasMany(SuratKeluarKendali::class, ['kd_indeks' => 'kd']);
    }

    /**
     * Gets query for [[SuratMasukDisposisis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratMasukDisposisis()
    {
        return $this->hasMany(SuratMasukDisposisi::class, ['kd_indeks' => 'kd']);
    }

    /**
     * Gets query for [[SuratMasukKendalis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratMasukKendalis()
    {
        return $this->hasMany(SuratMasukKendali::class, ['kd_indeks' => 'kd']);
    }
}
