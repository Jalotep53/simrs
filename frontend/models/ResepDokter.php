<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "resep_dokter".
 *
 * @property string|null $no_resep
 * @property string|null $kode_brng
 * @property float|null $jml
 * @property string|null $aturan_pakai
 *
 * @property Databarang $kodeBrng
 * @property ResepObat $noResep
 */
class ResepDokter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resep_dokter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jml'], 'number'],
            [['no_resep'], 'string', 'max' => 14],
            [['kode_brng'], 'string', 'max' => 15],
            [['aturan_pakai'], 'string', 'max' => 150],
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
            'jml' => 'Jml',
            'aturan_pakai' => 'Aturan Pakai',
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
