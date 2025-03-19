<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sms".
 *
 * @property int $id_pesan
 * @property string|null $sms_masuk
 * @property string|null $no_hp
 * @property string|null $pdu_pesan
 * @property string|null $encoding
 * @property string|null $id_gateway
 * @property string|null $tgl_sms
 */
class Sms extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sms';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_sms'], 'safe'],
            [['sms_masuk', 'pdu_pesan'], 'string', 'max' => 255],
            [['no_hp'], 'string', 'max' => 15],
            [['encoding', 'id_gateway'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pesan' => 'Id Pesan',
            'sms_masuk' => 'Sms Masuk',
            'no_hp' => 'No Hp',
            'pdu_pesan' => 'Pdu Pesan',
            'encoding' => 'Encoding',
            'id_gateway' => 'Id Gateway',
            'tgl_sms' => 'Tgl Sms',
        ];
    }
}
