<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_tindakan".
 *
 * @property int $id
 * @property string $nama
 * @property float $jm
 * @property string $jns
 *
 * @property Rawatjalan[] $rawatjalans
 */
class MasterTindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'jm', 'jns'], 'required'],
            [['jm'], 'number'],
            [['jns'], 'string'],
            [['nama'], 'string', 'max' => 50],
            [['nama'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'jm' => 'Jm',
            'jns' => 'Jns',
        ];
    }

    /**
     * Gets query for [[Rawatjalans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRawatjalans()
    {
        return $this->hasMany(Rawatjalan::class, ['tnd' => 'id']);
    }
}
