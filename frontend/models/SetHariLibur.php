<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_hari_libur".
 *
 * @property string $tanggal
 * @property string $ktg
 */
class SetHariLibur extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_hari_libur';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'ktg'], 'required'],
            [['tanggal'], 'safe'],
            [['ktg'], 'string', 'max' => 40],
            [['tanggal'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tanggal' => 'Tanggal',
            'ktg' => 'Ktg',
        ];
    }
}
