<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inacbg_noklaim_corona".
 *
 * @property string $no_rawat
 * @property string|null $no_klaim
 *
 * @property RegPeriksa $noRawat
 */
class InacbgNoklaimCorona extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inacbg_noklaim_corona';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat'], 'required'],
            [['no_rawat'], 'string', 'max' => 17],
            [['no_klaim'], 'string', 'max' => 40],
            [['no_klaim'], 'unique'],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'no_klaim' => 'No Klaim',
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
