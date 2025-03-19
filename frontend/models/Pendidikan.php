<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pendidikan".
 *
 * @property string $tingkat
 * @property int $indek
 * @property float $gapok1
 * @property float $kenaikan
 * @property int $maksimal
 *
 * @property Pegawai[] $pegawais
 * @property SetJgtambah $setJgtambah
 */
class Pendidikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendidikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tingkat', 'indek', 'gapok1', 'kenaikan', 'maksimal'], 'required'],
            [['indek', 'maksimal'], 'integer'],
            [['gapok1', 'kenaikan'], 'number'],
            [['tingkat'], 'string', 'max' => 80],
            [['tingkat'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tingkat' => 'Tingkat',
            'indek' => 'Indek',
            'gapok1' => 'Gapok1',
            'kenaikan' => 'Kenaikan',
            'maksimal' => 'Maksimal',
        ];
    }

    /**
     * Gets query for [[Pegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais()
    {
        return $this->hasMany(Pegawai::class, ['pendidikan' => 'tingkat']);
    }

    /**
     * Gets query for [[SetJgtambah]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSetJgtambah()
    {
        return $this->hasOne(SetJgtambah::class, ['pendidikan' => 'tingkat']);
    }
}
