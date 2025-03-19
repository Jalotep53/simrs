<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kesling_limbah_domestik".
 *
 * @property string $nip
 * @property string $tanggal
 * @property float|null $jumlahlimbah
 * @property string|null $tanggalangkut
 * @property string|null $keterangan
 *
 * @property Petugas $nip0
 */
class KeslingLimbahDomestik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kesling_limbah_domestik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'tanggal'], 'required'],
            [['tanggal', 'tanggalangkut'], 'safe'],
            [['jumlahlimbah'], 'number'],
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
            'jumlahlimbah' => 'Jumlahlimbah',
            'tanggalangkut' => 'Tanggalangkut',
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
