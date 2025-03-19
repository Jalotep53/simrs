<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inacbg_data_terkirim2".
 *
 * @property string $no_sep
 * @property string|null $nik
 *
 * @property InacbgKlaimBaru2 $noSep
 */
class InacbgDataTerkirim2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inacbg_data_terkirim2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_sep'], 'required'],
            [['no_sep'], 'string', 'max' => 40],
            [['nik'], 'string', 'max' => 30],
            [['no_sep'], 'unique'],
            [['no_sep'], 'exist', 'skipOnError' => true, 'targetClass' => InacbgKlaimBaru2::class, 'targetAttribute' => ['no_sep' => 'no_sep']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_sep' => 'No Sep',
            'nik' => 'Nik',
        ];
    }

    /**
     * Gets query for [[NoSep]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoSep()
    {
        return $this->hasOne(InacbgKlaimBaru2::class, ['no_sep' => 'no_sep']);
    }
}
