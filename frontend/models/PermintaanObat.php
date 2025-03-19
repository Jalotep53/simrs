<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "permintaan_obat".
 *
 * @property string $tanggal
 * @property string $jam
 * @property string $no_rawat
 * @property string $kode_brng
 *
 * @property Databarang $kodeBrng
 * @property RegPeriksa $noRawat
 */
class PermintaanObat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'permintaan_obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'jam', 'no_rawat', 'kode_brng'], 'required'],
            [['tanggal', 'jam'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kode_brng'], 'string', 'max' => 15],
            [['tanggal', 'jam', 'no_rawat', 'kode_brng'], 'unique', 'targetAttribute' => ['tanggal', 'jam', 'no_rawat', 'kode_brng']],
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
            'jam' => 'Jam',
            'no_rawat' => 'No Rawat',
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
