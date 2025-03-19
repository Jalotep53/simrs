<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detail_obat_racikan".
 *
 * @property string $tgl_perawatan
 * @property string $jam
 * @property string $no_rawat
 * @property string $no_racik
 * @property string $kode_brng
 *
 * @property Databarang $kodeBrng
 * @property RegPeriksa $noRawat
 */
class DetailObatRacikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_obat_racikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_perawatan', 'jam', 'no_rawat', 'no_racik', 'kode_brng'], 'required'],
            [['tgl_perawatan', 'jam'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['no_racik'], 'string', 'max' => 2],
            [['kode_brng'], 'string', 'max' => 15],
            [['tgl_perawatan', 'jam', 'no_rawat', 'no_racik', 'kode_brng'], 'unique', 'targetAttribute' => ['tgl_perawatan', 'jam', 'no_rawat', 'no_racik', 'kode_brng']],
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
            'tgl_perawatan' => 'Tgl Perawatan',
            'jam' => 'Jam',
            'no_rawat' => 'No Rawat',
            'no_racik' => 'No Racik',
            'kode_brng' => 'Kode Brng',
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
