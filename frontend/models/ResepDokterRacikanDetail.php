<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "resep_dokter_racikan_detail".
 *
 * @property string $no_resep
 * @property string $no_racik
 * @property string $kode_brng
 * @property float|null $p1
 * @property float|null $p2
 * @property string|null $kandungan
 * @property float|null $jml
 *
 * @property Databarang $kodeBrng
 * @property ResepObat $noResep
 */
class ResepDokterRacikanDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resep_dokter_racikan_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_resep', 'no_racik', 'kode_brng'], 'required'],
            [['p1', 'p2', 'jml'], 'number'],
            [['no_resep'], 'string', 'max' => 14],
            [['no_racik'], 'string', 'max' => 2],
            [['kode_brng'], 'string', 'max' => 15],
            [['kandungan'], 'string', 'max' => 10],
            [['no_resep', 'no_racik', 'kode_brng'], 'unique', 'targetAttribute' => ['no_resep', 'no_racik', 'kode_brng']],
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
            'no_racik' => 'No Racik',
            'kode_brng' => 'Kode Brng',
            'p1' => 'P1',
            'p2' => 'P2',
            'kandungan' => 'Kandungan',
            'jml' => 'Jml',
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
