<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tampjurnal".
 *
 * @property string $kd_rek
 * @property string|null $nm_rek
 * @property float|null $debet
 * @property float|null $kredit
 */
class Tampjurnal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tampjurnal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_rek'], 'required'],
            [['debet', 'kredit'], 'number'],
            [['kd_rek'], 'string', 'max' => 15],
            [['nm_rek'], 'string', 'max' => 100],
            [['kd_rek'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_rek' => 'Kd Rek',
            'nm_rek' => 'Nm Rek',
            'debet' => 'Debet',
            'kredit' => 'Kredit',
        ];
    }
}
