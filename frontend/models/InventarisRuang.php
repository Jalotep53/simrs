<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inventaris_ruang".
 *
 * @property string $id_ruang
 * @property string $nama_ruang
 *
 * @property Inventaris[] $inventaris
 * @property PeminjamanBerkas[] $peminjamanBerkas
 */
class InventarisRuang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventaris_ruang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ruang', 'nama_ruang'], 'required'],
            [['id_ruang'], 'string', 'max' => 5],
            [['nama_ruang'], 'string', 'max' => 40],
            [['id_ruang'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ruang' => 'Id Ruang',
            'nama_ruang' => 'Nama Ruang',
        ];
    }

    /**
     * Gets query for [[Inventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventaris()
    {
        return $this->hasMany(Inventaris::class, ['id_ruang' => 'id_ruang']);
    }

    /**
     * Gets query for [[PeminjamanBerkas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjamanBerkas()
    {
        return $this->hasMany(PeminjamanBerkas::class, ['id_ruang' => 'id_ruang']);
    }
}
