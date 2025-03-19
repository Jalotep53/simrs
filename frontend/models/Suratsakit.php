<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "suratsakit".
 *
 * @property string $no_surat
 * @property string|null $no_rawat
 * @property string|null $tanggalawal
 * @property string|null $tanggalakhir
 * @property string|null $lamasakit
 *
 * @property RegPeriksa $noRawat
 */
class Suratsakit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'suratsakit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat'], 'required'],
            [['tanggalawal', 'tanggalakhir'], 'safe'],
            [['no_surat', 'no_rawat'], 'string', 'max' => 17],
            [['lamasakit'], 'string', 'max' => 20],
            [['no_surat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_surat' => 'No Surat',
            'no_rawat' => 'No Rawat',
            'tanggalawal' => 'Tanggalawal',
            'tanggalakhir' => 'Tanggalakhir',
            'lamasakit' => 'Lamasakit',
        ];
    }

    /**
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
