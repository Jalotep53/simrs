<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "indextotal".
 *
 * @property string $kdindex
 * @property float $ttl
 *
 * @property Departemen $kdindex0
 */
class Indextotal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'indextotal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kdindex', 'ttl'], 'required'],
            [['ttl'], 'number'],
            [['kdindex'], 'string', 'max' => 4],
            [['kdindex'], 'exist', 'skipOnError' => true, 'targetClass' => Departemen::class, 'targetAttribute' => ['kdindex' => 'dep_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kdindex' => 'Kdindex',
            'ttl' => 'Ttl',
        ];
    }

    /**
     * Gets query for [[Kdindex0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdindex0()
    {
        return $this->hasOne(Departemen::class, ['dep_id' => 'kdindex']);
    }
}
