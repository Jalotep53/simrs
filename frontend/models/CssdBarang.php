<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cssd_barang".
 *
 * @property string $no_inventaris
 * @property string|null $jenis_barang
 *
 * @property Inventaris $noInventaris
 */
class CssdBarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cssd_barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_inventaris'], 'required'],
            [['jenis_barang'], 'string'],
            [['no_inventaris'], 'string', 'max' => 30],
            [['no_inventaris'], 'unique'],
            [['no_inventaris'], 'exist', 'skipOnError' => true, 'targetClass' => Inventaris::class, 'targetAttribute' => ['no_inventaris' => 'no_inventaris']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_inventaris' => 'No Inventaris',
            'jenis_barang' => 'Jenis Barang',
        ];
    }

    /**
     * Gets query for [[NoInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoInventaris()
    {
        return $this->hasOne(Inventaris::class, ['no_inventaris' => 'no_inventaris']);
    }
}
