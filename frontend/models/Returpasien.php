<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "returpasien".
 *
 * @property string $tanggal
 * @property string $no_rawat
 * @property string $kode_brng
 * @property float $jml
 * @property string $no_batch
 * @property string $no_faktur
 *
 * @property Databarang $kodeBrng
 * @property RegPeriksa $noRawat
 */
class Returpasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'returpasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'no_rawat', 'kode_brng', 'jml', 'no_batch', 'no_faktur'], 'required'],
            [['tanggal'], 'safe'],
            [['jml'], 'number'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kode_brng'], 'string', 'max' => 15],
            [['no_batch', 'no_faktur'], 'string', 'max' => 20],
            [['tanggal', 'no_rawat', 'kode_brng', 'no_batch', 'no_faktur'], 'unique', 'targetAttribute' => ['tanggal', 'no_rawat', 'kode_brng', 'no_batch', 'no_faktur']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tanggal' => 'Tanggal',
            'no_rawat' => 'No Rawat',
            'kode_brng' => 'Kode Brng',
            'jml' => 'Jml',
            'no_batch' => 'No Batch',
            'no_faktur' => 'No Faktur',
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
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
