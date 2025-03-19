<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ranap_gabung".
 *
 * @property string $no_rawat
 * @property string $no_rawat2
 *
 * @property RegPeriksa $noRawat
 * @property RegPeriksa $noRawat2
 */
class RanapGabung extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ranap_gabung';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'no_rawat2'], 'required'],
            [['no_rawat', 'no_rawat2'], 'string', 'max' => 17],
            [['no_rawat', 'no_rawat2'], 'unique', 'targetAttribute' => ['no_rawat', 'no_rawat2']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['no_rawat2'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat2' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'no_rawat2' => 'No Rawat2',
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

    /**
     * Gets query for [[NoRawat2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat2()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat2']);
    }
}
