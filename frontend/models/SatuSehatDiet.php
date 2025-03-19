<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "satu_sehat_diet".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $id_diet
 *
 * @property RegPeriksa $noRawat
 */
class SatuSehatDiet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satu_sehat_diet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal'], 'required'],
            [['tanggal'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['id_diet'], 'string', 'max' => 40],
            [['no_rawat', 'tanggal'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tanggal' => 'Tanggal',
            'id_diet' => 'Id Diet',
        ];
    }

    /**
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
