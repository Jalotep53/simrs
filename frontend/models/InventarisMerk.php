<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inventaris_merk".
 *
 * @property string $id_merk
 * @property string $nama_merk
 *
 * @property InventarisBarang[] $inventarisBarangs
 */
class InventarisMerk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventaris_merk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_merk', 'nama_merk'], 'required'],
            [['id_merk'], 'string', 'max' => 10],
            [['nama_merk'], 'string', 'max' => 40],
            [['id_merk'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_merk' => 'Id Merk',
            'nama_merk' => 'Nama Merk',
        ];
    }

    /**
     * Gets query for [[InventarisBarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisBarangs()
    {
        return $this->hasMany(InventarisBarang::class, ['id_merk' => 'id_merk']);
    }
}
