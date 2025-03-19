<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "satu_sehat_medicationrequest".
 *
 * @property string $no_resep
 * @property string $kode_brng
 * @property string|null $id_medicationrequest
 *
 * @property Databarang $kodeBrng
 * @property ResepObat $noResep
 */
class SatuSehatMedicationrequest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satu_sehat_medicationrequest';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_resep', 'kode_brng'], 'required'],
            [['no_resep'], 'string', 'max' => 14],
            [['kode_brng'], 'string', 'max' => 15],
            [['id_medicationrequest'], 'string', 'max' => 40],
            [['no_resep', 'kode_brng'], 'unique', 'targetAttribute' => ['no_resep', 'kode_brng']],
            [['no_resep'], 'exist', 'skipOnError' => true, 'targetClass' => ResepObat::class, 'targetAttribute' => ['no_resep' => 'no_resep']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_resep' => 'No Resep',
            'kode_brng' => 'Kode Brng',
            'id_medicationrequest' => 'Id Medicationrequest',
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
