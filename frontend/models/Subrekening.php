<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "subrekening".
 *
 * @property string $kd_rek
 * @property string $kd_rek2
 *
 * @property Rekening $kdRek
 * @property Rekening $kdRek2
 */
class Subrekening extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subrekening';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_rek', 'kd_rek2'], 'required'],
            [['kd_rek', 'kd_rek2'], 'string', 'max' => 15],
            [['kd_rek2'], 'unique'],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
            [['kd_rek2'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek2' => 'kd_rek']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_rek' => 'Kd Rek',
            'kd_rek2' => 'Kd Rek2',
        ];
    }

    /**
     * Gets query for [[KdRek]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRek()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[KdRek2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRek2()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek2']);
    }
}
