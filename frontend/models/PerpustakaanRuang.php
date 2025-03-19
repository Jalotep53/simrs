<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "perpustakaan_ruang".
 *
 * @property string $kd_ruang
 * @property string|null $nm_ruang
 *
 * @property PerpustakaanInventaris[] $perpustakaanInventaris
 */
class PerpustakaanRuang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perpustakaan_ruang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_ruang'], 'required'],
            [['kd_ruang'], 'string', 'max' => 5],
            [['nm_ruang'], 'string', 'max' => 40],
            [['kd_ruang'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_ruang' => 'Kd Ruang',
            'nm_ruang' => 'Nm Ruang',
        ];
    }

    /**
     * Gets query for [[PerpustakaanInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerpustakaanInventaris()
    {
        return $this->hasMany(PerpustakaanInventaris::class, ['kd_ruang' => 'kd_ruang']);
    }
}
