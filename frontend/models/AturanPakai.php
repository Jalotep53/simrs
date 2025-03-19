<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "aturan_pakai".
 *
 * @property string $tgl_perawatan
 * @property string $jam
 * @property string $no_rawat
 * @property string $kode_brng
 * @property string|null $aturan
 *
 * @property Databarang $kodeBrng
 * @property RegPeriksa $noRawat
 */
class AturanPakai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aturan_pakai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_perawatan', 'jam', 'no_rawat', 'kode_brng'], 'required'],
            [['tgl_perawatan', 'jam'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kode_brng'], 'string', 'max' => 15],
            [['aturan'], 'string', 'max' => 150],
            [['tgl_perawatan', 'jam', 'no_rawat', 'kode_brng'], 'unique', 'targetAttribute' => ['tgl_perawatan', 'jam', 'no_rawat', 'kode_brng']],
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
            'kode_brng' => 'Kode Brng',
            'aturan' => 'Aturan',
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
