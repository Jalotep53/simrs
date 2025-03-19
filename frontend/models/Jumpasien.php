<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jumpasien".
 *
 * @property string $thn
 * @property int $bln
 * @property int $id
 * @property int $jml
 *
 * @property Pegawai $id0
 */
class Jumpasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jumpasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['thn', 'bln', 'id', 'jml'], 'required'],
            [['thn'], 'safe'],
            [['bln', 'id', 'jml'], 'integer'],
            [['thn', 'bln', 'id'], 'unique', 'targetAttribute' => ['thn', 'bln', 'id']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'thn' => 'Thn',
            'bln' => 'Bln',
            'id' => 'ID',
            'jml' => 'Jml',
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
