<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kesling_pemakaian_air_pdam".
 *
 * @property string $nip
 * @property string $tanggal
 * @property float|null $meteran
 * @property float|null $jumlahharian
 * @property string|null $keterangan
 *
 * @property Petugas $nip0
 */
class KeslingPemakaianAirPdam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kesling_pemakaian_air_pdam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'tanggal'], 'required'],
            [['tanggal'], 'safe'],
            [['meteran', 'jumlahharian'], 'number'],
            [['nip'], 'string', 'max' => 20],
            [['keterangan'], 'string', 'max' => 50],
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
            'keterangan' => 'Keterangan',
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
