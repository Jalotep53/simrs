<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "maping_obat_apotek_bpjs".
 *
 * @property string $kode_brng
 * @property string $kode_brng_apotek_bpjs
 * @property string|null $nama_brng_apotek_bpjs
 *
 * @property BridgingResepApotekBpjsNonracikan[] $bridgingResepApotekBpjsNonracikans
 * @property BridgingResepApotekBpjsRacikan[] $bridgingResepApotekBpjsRacikans
 * @property Databarang $kodeBrng
 */
class MapingObatApotekBpjs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maping_obat_apotek_bpjs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'kode_brng_apotek_bpjs'], 'required'],
            [['kode_brng', 'kode_brng_apotek_bpjs'], 'string', 'max' => 15],
            [['nama_brng_apotek_bpjs'], 'string', 'max' => 80],
            [['kode_brng_apotek_bpjs'], 'unique'],
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
            'kode_brng_apotek_bpjs' => 'Kode Brng Apotek Bpjs',
            'nama_brng_apotek_bpjs' => 'Nama Brng Apotek Bpjs',
        ];
    }

    /**
     * Gets query for [[BridgingResepApotekBpjsNonracikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBridgingResepApotekBpjsNonracikans()
    {
        return $this->hasMany(BridgingResepApotekBpjsNonracikan::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[BridgingResepApotekBpjsRacikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBridgingResepApotekBpjsRacikans()
    {
        return $this->hasMany(BridgingResepApotekBpjsRacikan::class, ['kode_brng' => 'kode_brng']);
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
