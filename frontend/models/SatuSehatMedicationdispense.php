<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "satu_sehat_medicationdispense".
 *
 * @property string $no_rawat
 * @property string $tgl_perawatan
 * @property string $jam
 * @property string $kode_brng
 * @property string $no_batch
 * @property string $no_faktur
 * @property string|null $id_medicationdispanse
 *
 * @property Databarang $kodeBrng
 * @property RegPeriksa $noRawat
 */
class SatuSehatMedicationdispense extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satu_sehat_medicationdispense';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_perawatan', 'jam', 'kode_brng', 'no_batch', 'no_faktur'], 'required'],
            [['tgl_perawatan', 'jam'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kode_brng'], 'string', 'max' => 15],
            [['no_batch', 'no_faktur'], 'string', 'max' => 20],
            [['id_medicationdispanse'], 'string', 'max' => 40],
            [['no_rawat', 'tgl_perawatan', 'jam', 'kode_brng', 'no_batch', 'no_faktur'], 'unique', 'targetAttribute' => ['no_rawat', 'tgl_perawatan', 'jam', 'kode_brng', 'no_batch', 'no_faktur']],
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
            'no_rawat' => 'No Rawat',
            'tgl_perawatan' => 'Tgl Perawatan',
            'jam' => 'Jam',
            'kode_brng' => 'Kode Brng',
            'no_batch' => 'No Batch',
            'no_faktur' => 'No Faktur',
            'id_medicationdispanse' => 'Id Medicationdispanse',
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
