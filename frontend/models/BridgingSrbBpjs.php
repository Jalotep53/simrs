<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bridging_srb_bpjs".
 *
 * @property string $no_sep
 * @property string $no_srb
 * @property string|null $tgl_srb
 * @property string|null $alamat
 * @property string|null $email
 * @property string|null $kodeprogram
 * @property string|null $namaprogram
 * @property string|null $kodedpjp
 * @property string|null $nmdpjp
 * @property string|null $user
 * @property string|null $keterangan
 * @property string|null $saran
 *
 * @property BridgingSep $noSep
 */
class BridgingSrbBpjs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bridging_srb_bpjs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_sep', 'no_srb'], 'required'],
            [['tgl_srb'], 'safe'],
            [['no_sep', 'email'], 'string', 'max' => 40],
            [['no_srb', 'kodedpjp'], 'string', 'max' => 10],
            [['alamat'], 'string', 'max' => 200],
            [['kodeprogram'], 'string', 'max' => 3],
            [['namaprogram'], 'string', 'max' => 70],
            [['nmdpjp', 'keterangan', 'saran'], 'string', 'max' => 100],
            [['user'], 'string', 'max' => 25],
            [['no_sep', 'no_srb'], 'unique', 'targetAttribute' => ['no_sep', 'no_srb']],
            [['no_sep'], 'exist', 'skipOnError' => true, 'targetClass' => BridgingSep::class, 'targetAttribute' => ['no_sep' => 'no_sep']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_sep' => 'No Sep',
            'no_srb' => 'No Srb',
            'tgl_srb' => 'Tgl Srb',
            'alamat' => 'Alamat',
            'email' => 'Email',
            'kodeprogram' => 'Kodeprogram',
            'namaprogram' => 'Namaprogram',
            'kodedpjp' => 'Kodedpjp',
            'nmdpjp' => 'Nmdpjp',
            'user' => 'User',
            'keterangan' => 'Keterangan',
            'saran' => 'Saran',
        ];
    }

    /**
     * Gets query for [[NoSep]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoSep()
    {
        return $this->hasOne(BridgingSep::class, ['no_sep' => 'no_sep']);
    }
}
