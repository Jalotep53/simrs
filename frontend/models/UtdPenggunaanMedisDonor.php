<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "utd_penggunaan_medis_donor".
 *
 * @property string $no_donor
 * @property string $kode_brng
 * @property float|null $jml
 * @property float|null $harga
 * @property float|null $total
 *
 * @property Databarang $kodeBrng
 * @property UtdDonor $noDonor
 */
class UtdPenggunaanMedisDonor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'utd_penggunaan_medis_donor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_donor', 'kode_brng'], 'required'],
            [['jml', 'harga', 'total'], 'number'],
            [['no_donor', 'kode_brng'], 'string', 'max' => 15],
            [['no_donor', 'kode_brng'], 'unique', 'targetAttribute' => ['no_donor', 'kode_brng']],
            [['no_donor'], 'exist', 'skipOnError' => true, 'targetClass' => UtdDonor::class, 'targetAttribute' => ['no_donor' => 'no_donor']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_donor' => 'No Donor',
            'kode_brng' => 'Kode Brng',
            'jml' => 'Jml',
            'harga' => 'Harga',
            'total' => 'Total',
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
     * Gets query for [[NoDonor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoDonor()
    {
        return $this->hasOne(UtdDonor::class, ['no_donor' => 'no_donor']);
    }
}
