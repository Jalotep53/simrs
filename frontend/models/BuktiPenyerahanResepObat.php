<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bukti_penyerahan_resep_obat".
 *
 * @property string $no_resep
 * @property string|null $photo
 *
 * @property ResepObat $noResep
 */
class BuktiPenyerahanResepObat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bukti_penyerahan_resep_obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_resep'], 'required'],
            [['no_resep'], 'string', 'max' => 14],
            [['photo'], 'string', 'max' => 500],
            [['no_resep'], 'unique'],
            [['no_resep'], 'exist', 'skipOnError' => true, 'targetClass' => ResepObat::class, 'targetAttribute' => ['no_resep' => 'no_resep']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_resep' => 'No Resep',
            'photo' => 'Photo',
        ];
    }

    /**
     * Gets query for [[NoResep]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoResep()
    {
        return $this->hasOne(ResepObat::class, ['no_resep' => 'no_resep']);
    }
}
