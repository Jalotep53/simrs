<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "inventaris_gambar".
 *
 * @property string $no_inventaris
 * @property string|null $photo
 *
 * @property Inventaris $noInventaris
 */
class InventarisGambar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventaris_gambar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_inventaris'], 'required'],
            [['no_inventaris'], 'string', 'max' => 30],
            [['photo'], 'string', 'max' => 500],
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
            'photo' => 'Photo',
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
