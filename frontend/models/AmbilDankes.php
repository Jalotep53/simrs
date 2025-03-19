<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ambil_dankes".
 *
 * @property int $id
 * @property string $tanggal
 * @property string $ktg
 * @property float $dankes
 *
 * @property Pegawai $id0
 */
class AmbilDankes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ambil_dankes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tanggal', 'ktg', 'dankes'], 'required'],
            [['id'], 'integer'],
            [['tanggal'], 'safe'],
            [['dankes'], 'number'],
            [['ktg'], 'string', 'max' => 50],
            [['id', 'tanggal'], 'unique', 'targetAttribute' => ['id', 'tanggal']],
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
            'tanggal' => 'Tanggal',
            'ktg' => 'Ktg',
            'dankes' => 'Dankes',
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
