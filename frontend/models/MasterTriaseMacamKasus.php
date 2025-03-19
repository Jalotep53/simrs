<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_triase_macam_kasus".
 *
 * @property string $kode_kasus
 * @property string $macam_kasus
 *
 * @property DataTriaseIgd[] $dataTriaseIgds
 */
class MasterTriaseMacamKasus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_triase_macam_kasus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_kasus', 'macam_kasus'], 'required'],
            [['kode_kasus'], 'string', 'max' => 3],
            [['macam_kasus'], 'string', 'max' => 150],
            [['kode_kasus'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_kasus' => 'Kode Kasus',
            'macam_kasus' => 'Macam Kasus',
        ];
    }

    /**
     * Gets query for [[DataTriaseIgds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataTriaseIgds()
    {
        return $this->hasMany(DataTriaseIgd::class, ['kode_kasus' => 'kode_kasus']);
    }
}
