<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "satu_sehat_medication".
 *
 * @property string $kode_brng
 * @property string|null $id_medication
 *
 * @property Databarang $kodeBrng
 */
class SatuSehatMedication extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satu_sehat_medication';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng'], 'required'],
            [['kode_brng'], 'string', 'max' => 15],
            [['id_medication'], 'string', 'max' => 40],
            [['kode_brng'], 'unique'],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_brng' => 'Kode Brng',
            'id_medication' => 'Id Medication',
        ];
    }

    /**
     * Gets query for [[KodeBrng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrng()
    {
        return $this->hasOne(Databarang::class, ['kode_brng' => 'kode_brng']);
    }
}
