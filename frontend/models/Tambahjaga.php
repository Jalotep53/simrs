<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tambahjaga".
 *
 * @property string $tgl
 * @property int $id
 * @property int $jml
 *
 * @property Pegawai $id0
 */
class Tambahjaga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tambahjaga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl', 'id', 'jml'], 'required'],
            [['tgl'], 'safe'],
            [['id', 'jml'], 'integer'],
            [['tgl', 'id'], 'unique', 'targetAttribute' => ['tgl', 'id']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tgl' => 'Tgl',
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
