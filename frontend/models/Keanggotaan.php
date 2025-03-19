<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "keanggotaan".
 *
 * @property int $id
 * @property string $koperasi
 * @property string $jamsostek
 * @property string $bpjs
 *
 * @property Bpjs $bpjs0
 * @property Pegawai $id0
 * @property Jamsostek $jamsostek0
 * @property Koperasi $koperasi0
 */
class Keanggotaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'keanggotaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'koperasi', 'jamsostek', 'bpjs'], 'required'],
            [['id'], 'integer'],
            [['koperasi', 'jamsostek', 'bpjs'], 'string', 'max' => 5],
            [['id'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['id' => 'id']],
            [['koperasi'], 'exist', 'skipOnError' => true, 'targetClass' => Koperasi::class, 'targetAttribute' => ['koperasi' => 'stts']],
            [['jamsostek'], 'exist', 'skipOnError' => true, 'targetClass' => Jamsostek::class, 'targetAttribute' => ['jamsostek' => 'stts']],
            [['bpjs'], 'exist', 'skipOnError' => true, 'targetClass' => Bpjs::class, 'targetAttribute' => ['bpjs' => 'stts']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'koperasi' => 'Koperasi',
            'jamsostek' => 'Jamsostek',
            'bpjs' => 'Bpjs',
        ];
    }

    /**
     * Gets query for [[Bpjs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBpjs0()
    {
        return $this->hasOne(Bpjs::class, ['stts' => 'bpjs']);
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Pegawai::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[Jamsostek0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJamsostek0()
    {
        return $this->hasOne(Jamsostek::class, ['stts' => 'jamsostek']);
    }

    /**
     * Gets query for [[Koperasi0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKoperasi0()
    {
        return $this->hasOne(Koperasi::class, ['stts' => 'koperasi']);
    }
}
