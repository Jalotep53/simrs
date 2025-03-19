<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bpjs_prb".
 *
 * @property string $no_sep
 * @property string|null $prb
 *
 * @property BridgingSep $noSep
 */
class BpjsPrb extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bpjs_prb';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_sep'], 'required'],
            [['no_sep'], 'string', 'max' => 40],
            [['prb'], 'string', 'max' => 50],
            [['no_sep'], 'unique'],
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
            'prb' => 'Prb',
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
