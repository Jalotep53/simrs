<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inacbg_coder_nik".
 *
 * @property string $nik
 * @property string|null $no_ik
 *
 * @property Pegawai $nik0
 */
class InacbgCoderNik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inacbg_coder_nik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nik'], 'required'],
            [['nik'], 'string', 'max' => 20],
            [['no_ik'], 'string', 'max' => 30],
            [['nik'], 'unique'],
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
            'no_ik' => 'No Ik',
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
