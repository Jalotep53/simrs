<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jasa_lain".
 *
 * @property string $thn
 * @property int $bln
 * @property int $id
 * @property float $bsr_jasa
 * @property string $ktg
 *
 * @property Pegawai $id0
 */
class JasaLain extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jasa_lain';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['thn', 'bln', 'id', 'bsr_jasa', 'ktg'], 'required'],
            [['thn'], 'safe'],
            [['bln', 'id'], 'integer'],
            [['bsr_jasa'], 'number'],
            [['ktg'], 'string', 'max' => 40],
            [['thn', 'bln', 'id', 'bsr_jasa', 'ktg'], 'unique', 'targetAttribute' => ['thn', 'bln', 'id', 'bsr_jasa', 'ktg']],
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
            'bsr_jasa' => 'Bsr Jasa',
            'ktg' => 'Ktg',
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
