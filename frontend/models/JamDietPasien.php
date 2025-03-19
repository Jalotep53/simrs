<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jam_diet_pasien".
 *
 * @property string $waktu
 * @property string|null $jam
 *
 * @property DetailBeriDiet[] $detailBeriDiets
 * @property SisaDietPasien[] $sisaDietPasiens
 */
class JamDietPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jam_diet_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['waktu'], 'required'],
            [['waktu'], 'string'],
            [['jam'], 'string', 'max' => 5],
            [['waktu'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'waktu' => 'Waktu',
            'jam' => 'Jam',
        ];
    }

    /**
     * Gets query for [[DetailBeriDiets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailBeriDiets()
    {
        return $this->hasMany(DetailBeriDiet::class, ['waktu' => 'waktu']);
    }

    /**
     * Gets query for [[SisaDietPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSisaDietPasiens()
    {
        return $this->hasMany(SisaDietPasien::class, ['waktu' => 'waktu']);
    }
}
