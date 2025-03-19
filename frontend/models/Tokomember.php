<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tokomember".
 *
 * @property string $no_member
 * @property string|null $nama
 * @property string|null $jk
 * @property string|null $tmp_lahir
 * @property string|null $tgl_lahir
 * @property string|null $alamat
 * @property string|null $no_telp
 * @property string|null $email
 *
 * @property TokoBayarPiutang[] $tokoBayarPiutangs
 * @property Tokopenjualan[] $tokopenjualans
 * @property Tokopiutang[] $tokopiutangs
 * @property Tokoreturjual[] $tokoreturjuals
 * @property Tokoreturpiutang[] $tokoreturpiutangs
 */
class Tokomember extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tokomember';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_member'], 'required'],
            [['jk'], 'string'],
            [['tgl_lahir'], 'safe'],
            [['no_member'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 50],
            [['tmp_lahir'], 'string', 'max' => 20],
            [['alamat', 'email'], 'string', 'max' => 60],
            [['no_telp'], 'string', 'max' => 40],
            [['no_member'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_member' => 'No Member',
            'nama' => 'Nama',
            'jk' => 'Jk',
            'tmp_lahir' => 'Tmp Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'alamat' => 'Alamat',
            'no_telp' => 'No Telp',
            'email' => 'Email',
        ];
    }

    /**
     * Gets query for [[TokoBayarPiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoBayarPiutangs()
    {
        return $this->hasMany(TokoBayarPiutang::class, ['no_member' => 'no_member']);
    }

    /**
     * Gets query for [[Tokopenjualans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokopenjualans()
    {
        return $this->hasMany(Tokopenjualan::class, ['no_member' => 'no_member']);
    }

    /**
     * Gets query for [[Tokopiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokopiutangs()
    {
        return $this->hasMany(Tokopiutang::class, ['no_member' => 'no_member']);
    }

    /**
     * Gets query for [[Tokoreturjuals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoreturjuals()
    {
        return $this->hasMany(Tokoreturjual::class, ['no_member' => 'no_member']);
    }

    /**
     * Gets query for [[Tokoreturpiutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTokoreturpiutangs()
    {
        return $this->hasMany(Tokoreturpiutang::class, ['no_member' => 'no_member']);
    }
}
