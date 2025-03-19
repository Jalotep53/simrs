<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "perpustakaan_denda".
 *
 * @property string $kode_denda
 * @property string|null $jenis_denda
 * @property float|null $besar_denda
 *
 * @property PerpustakaanBayarDenda[] $perpustakaanBayarDendas
 */
class PerpustakaanDenda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perpustakaan_denda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_denda'], 'required'],
            [['besar_denda'], 'number'],
            [['kode_denda'], 'string', 'max' => 5],
            [['jenis_denda'], 'string', 'max' => 40],
            [['kode_denda'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_denda' => 'Kode Denda',
            'jenis_denda' => 'Jenis Denda',
            'besar_denda' => 'Besar Denda',
        ];
    }

    /**
     * Gets query for [[PerpustakaanBayarDendas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerpustakaanBayarDendas()
    {
        return $this->hasMany(PerpustakaanBayarDenda::class, ['kode_denda' => 'kode_denda']);
    }
}
