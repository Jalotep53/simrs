<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "indekref".
 *
 * @property string $kdindex
 * @property float $n
 * @property float $ttl
 *
 * @property Departemen $kdindex0
 */
class Indekref extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'indekref';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kdindex', 'n', 'ttl'], 'required'],
            [['n', 'ttl'], 'number'],
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
            'n' => 'N',
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
