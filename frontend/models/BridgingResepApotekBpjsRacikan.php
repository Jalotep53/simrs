<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bridging_resep_apotek_bpjs_racikan".
 *
 * @property string $no_sep_apotek
 * @property string|null $nomor_racik
 * @property string|null $kode_brng
 * @property string|null $signa1
 * @property string|null $signa2
 * @property float|null $jml_obat
 * @property float|null $permintaan
 * @property float|null $jho
 * @property string|null $catatan
 *
 * @property MapingObatApotekBpjs $kodeBrng
 * @property BridgingResepApotekBpjs $noSepApotek
 */
class BridgingResepApotekBpjsRacikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bridging_resep_apotek_bpjs_racikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_sep_apotek'], 'required'],
            [['jml_obat', 'permintaan', 'jho'], 'number'],
            [['no_sep_apotek', 'catatan'], 'string', 'max' => 40],
            [['nomor_racik'], 'string', 'max' => 3],
            [['kode_brng'], 'string', 'max' => 15],
            [['signa1', 'signa2'], 'string', 'max' => 5],
            [['no_sep_apotek'], 'exist', 'skipOnError' => true, 'targetClass' => BridgingResepApotekBpjs::class, 'targetAttribute' => ['no_sep_apotek' => 'no_sep_apotek']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => MapingObatApotekBpjs::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_sep_apotek' => 'No Sep Apotek',
            'nomor_racik' => 'Nomor Racik',
            'kode_brng' => 'Kode Brng',
            'signa1' => 'Signa1',
            'signa2' => 'Signa2',
            'jml_obat' => 'Jml Obat',
            'permintaan' => 'Permintaan',
            'jho' => 'Jho',
            'catatan' => 'Catatan',
        ];
    }

    /**
     * Gets query for [[KodeBrng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrng()
    {
        return $this->hasOne(MapingObatApotekBpjs::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[NoSepApotek]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoSepApotek()
    {
        return $this->hasOne(BridgingResepApotekBpjs::class, ['no_sep_apotek' => 'no_sep_apotek']);
    }
}
