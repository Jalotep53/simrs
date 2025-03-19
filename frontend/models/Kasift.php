<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kasift".
 *
 * @property int $id
 * @property int $jmlks
 * @property float $bsr
 *
 * @property Pegawai $id0
 */
class Kasift extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kasift';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'jmlks', 'bsr'], 'required'],
            [['id', 'jmlks'], 'integer'],
            [['bsr'], 'number'],
            [['id'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jmlks' => 'Jmlks',
            'bsr' => 'Bsr',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Pegawai::class, ['id' => 'id']);
    }
}
