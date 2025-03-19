<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "maping_obat_pcare".
 *
 * @property string $kode_brng
 * @property string $kode_brng_pcare
 * @property string|null $nama_brng_pcare
 *
 * @property Databarang $kodeBrng
 * @property PcareObatDiberikan[] $pcareObatDiberikans
 */
class MapingObatPcare extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maping_obat_pcare';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'kode_brng_pcare'], 'required'],
            [['kode_brng', 'kode_brng_pcare'], 'string', 'max' => 15],
            [['nama_brng_pcare'], 'string', 'max' => 80],
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
            'kode_brng_pcare' => 'Kode Brng Pcare',
            'nama_brng_pcare' => 'Nama Brng Pcare',
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
     * Gets query for [[PcareObatDiberikans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPcareObatDiberikans()
    {
        return $this->hasMany(PcareObatDiberikan::class, ['kode_brng' => 'kode_brng']);
    }
}
