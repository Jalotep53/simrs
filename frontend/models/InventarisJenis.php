<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inventaris_jenis".
 *
 * @property string $id_jenis
 * @property string|null $nama_jenis
 *
 * @property AkunAsetInventaris $akunAsetInventaris
 * @property InventarisBarang[] $inventarisBarangs
 */
class InventarisJenis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventaris_jenis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jenis'], 'required'],
            [['id_jenis'], 'string', 'max' => 10],
            [['nama_jenis'], 'string', 'max' => 40],
            [['id_jenis'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jenis' => 'Id Jenis',
            'nama_jenis' => 'Nama Jenis',
        ];
    }

    /**
     * Gets query for [[AkunAsetInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAkunAsetInventaris()
    {
        return $this->hasOne(AkunAsetInventaris::class, ['id_jenis' => 'id_jenis']);
    }

    /**
     * Gets query for [[InventarisBarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventarisBarangs()
    {
        return $this->hasMany(InventarisBarang::class, ['id_jenis' => 'id_jenis']);
    }
}
