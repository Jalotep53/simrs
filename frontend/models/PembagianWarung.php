<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pembagian_warung".
 *
 * @property int $id
 * @property float $persen
 *
 * @property Pegawai $id0
 */
class PembagianWarung extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembagian_warung';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'persen'], 'required'],
            [['id'], 'integer'],
            [['persen'], 'number'],
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
            'persen' => 'Persen',
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
