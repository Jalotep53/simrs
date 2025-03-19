<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "audit_kepatuhan_apd".
 *
 * @property string $nik
 * @property string $tindakan
 * @property string $tanggal
 * @property string|null $topi
 * @property string|null $masker
 * @property string|null $kacamata
 * @property string|null $sarungtangan
 * @property string|null $apron
 * @property string|null $sepatu
 *
 * @property Pegawai $nik0
 */
class AuditKepatuhanApd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audit_kepatuhan_apd';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nik', 'tindakan', 'tanggal'], 'required'],
            [['tanggal'], 'safe'],
            [['topi', 'masker', 'kacamata', 'sarungtangan', 'apron', 'sepatu'], 'string'],
            [['nik'], 'string', 'max' => 20],
            [['tindakan'], 'string', 'max' => 50],
            [['nik', 'tindakan', 'tanggal'], 'unique', 'targetAttribute' => ['nik', 'tindakan', 'tanggal']],
            [['nik'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nik' => 'nik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nik' => 'Nik',
            'tindakan' => 'Tindakan',
            'tanggal' => 'Tanggal',
            'topi' => 'Topi',
            'masker' => 'Masker',
            'kacamata' => 'Kacamata',
            'sarungtangan' => 'Sarungtangan',
            'apron' => 'Apron',
            'sepatu' => 'Sepatu',
        ];
    }

    /**
     * Gets query for [[Nik0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNik0()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nik']);
    }
}
