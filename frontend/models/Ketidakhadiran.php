<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ketidakhadiran".
 *
 * @property string $tgl
 * @property int $id
 * @property string $jns
 * @property string $ktg
 * @property int|null $jml
 *
 * @property Pegawai $id0
 */
class Ketidakhadiran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ketidakhadiran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl', 'id', 'jns', 'ktg'], 'required'],
            [['tgl'], 'safe'],
            [['id', 'jml'], 'integer'],
            [['jns'], 'string'],
            [['ktg'], 'string', 'max' => 40],
            [['tgl', 'id', 'jns'], 'unique', 'targetAttribute' => ['tgl', 'id', 'jns']],
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
            'jns' => 'Jns',
            'ktg' => 'Ktg',
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
