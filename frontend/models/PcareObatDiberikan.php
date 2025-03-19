<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pcare_obat_diberikan".
 *
 * @property string $no_rawat
 * @property string $noKunjungan
 * @property string|null $kdObatSK
 * @property string $tgl_perawatan
 * @property string $jam
 * @property string $kode_brng
 * @property string $no_batch
 * @property string $no_faktur
 *
 * @property MapingObatPcare $kodeBrng
 * @property RegPeriksa $noRawat
 */
class PcareObatDiberikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pcare_obat_diberikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'noKunjungan', 'tgl_perawatan', 'jam', 'kode_brng', 'no_batch', 'no_faktur'], 'required'],
            [['tgl_perawatan', 'jam'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['noKunjungan'], 'string', 'max' => 40],
            [['kdObatSK'], 'string', 'max' => 10],
            [['kode_brng'], 'string', 'max' => 15],
            [['no_batch', 'no_faktur'], 'string', 'max' => 20],
            [['no_rawat', 'noKunjungan', 'tgl_perawatan', 'jam', 'kode_brng', 'no_batch', 'no_faktur'], 'unique', 'targetAttribute' => ['no_rawat', 'noKunjungan', 'tgl_perawatan', 'jam', 'kode_brng', 'no_batch', 'no_faktur']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => MapingObatPcare::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'noKunjungan' => 'No Kunjungan',
            'kdObatSK' => 'Kd Obat Sk',
            'tgl_perawatan' => 'Tgl Perawatan',
            'jam' => 'Jam',
            'kode_brng' => 'Kode Brng',
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
        return $this->hasOne(MapingObatPcare::class, ['kode_brng' => 'kode_brng']);
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
