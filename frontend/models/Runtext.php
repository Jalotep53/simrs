<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "runtext".
 *
 * @property string $teks
 * @property string $aktifkan
 * @property resource $gambar
 */
class Runtext extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'runtext';
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
