<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kesling_mutu_air_limbah".
 *
 * @property string $nip
 * @property string $tanggal
 * @property float|null $meteran
 * @property float|null $jumlahharian
 * @property float|null $ph
 * @property float|null $suhu
 * @property float $tds
 * @property float $ec
 * @property float $salt
 *
 * @property Petugas $nip0
 */
class KeslingMutuAirLimbah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kesling_mutu_air_limbah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'tanggal', 'tds', 'ec', 'salt'], 'required'],
            [['tanggal'], 'safe'],
            [['meteran', 'jumlahharian', 'ph', 'suhu', 'tds', 'ec', 'salt'], 'number'],
            [['nip'], 'string', 'max' => 20],
            [['nip', 'tanggal'], 'unique', 'targetAttribute' => ['nip', 'tanggal']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nip' => 'Nip',
            'tanggal' => 'Tanggal',
            'meteran' => 'Meteran',
            'jumlahharian' => 'Jumlahharian',
            'ph' => 'Ph',
            'suhu' => 'Suhu',
            'tds' => 'Tds',
            'ec' => 'Ec',
            'salt' => 'Salt',
        ];
    }

    /**
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip']);
    }
}
