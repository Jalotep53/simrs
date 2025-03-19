<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "runtextapotek".
 *
 * @property string $teks
 * @property string $aktifkan
 * @property resource $gambar
 */
class Runtextapotek extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'runtextapotek';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teks', 'aktifkan', 'gambar'], 'required'],
            [['teks', 'aktifkan', 'gambar'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'teks' => 'Teks',
            'aktifkan' => 'Aktifkan',
            'gambar' => 'Gambar',
        ];
    }
}
